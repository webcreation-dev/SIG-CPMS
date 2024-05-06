<?php

namespace App\Http\Livewire;

use App\Models\ElementTeachingUnit;
use App\Models\Note;
use App\Models\Student;
use App\Models\TeachingUnit;
use Livewire\Component;

class NoteByStudentLivewireController extends Component
{
    public $student, $semester;

    public function render()
    {
        $ues = TeachingUnit::where('type', $this->student->classroom->type)
                            ->where('semester', $this->semester)
                            ->get();

        // $ues with status 'singular' are teaching units with only one element teaching unit



        foreach ($ues as $ue) {

            if ($ue->status === 'multiple') {
                foreach ($ue->elementTeachingUnits as $ecue) {

                    $note = Note::where('student_id', $this->student->id)
                    ->where('element_teaching_unit_id', $ecue->id)->first();

                    if(!$note) {

                        Note::create([
                            'student_id' => $this->student->id,
                            'element_teaching_unit_id' => $ecue->id,
                        ]);
                    }
                }
            }else {
                $note = Note::where('student_id', $this->student->id)
                ->where('teaching_unit_id', $ue->id)->first();

                if(!$note) {

                    Note::create([
                        'student_id' => $this->student->id,
                        'teaching_unit_id' => $ue->id,
                    ]);
                }
            }
        }

        $skip = Note::SEMESTER_NOTES[$this->semester]['skip'];
        $take = Note::SEMESTER_NOTES[$this->semester]['take'];

        $notesByStudent = Note::where('student_id', $this->student->id)
            ->skip($skip)
            ->take($take)
            ->get();

        return view('livewire.note-by-student-livewire-controller', [
            'student' => $this->student,
            'notes' => $notesByStudent,
            'semester'=> $this->semester,
        ]);
    }
}
