<?php

namespace App\Http\Livewire;

use App\Models\Note;
use App\Models\Student;
use App\Models\TeachingUnit;
use Livewire\Component;

class NoteByStudentLivewireController extends Component
{
    public $student;

    public function render()
    {
        $ues = TeachingUnit::where('type', $this->student->classroom->type)->get();

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

        $notes_by_student = Note::where('student_id', $this->student->id)->get();

        return view('livewire.note-by-student-livewire-controller', [
            'student' => $this->student,
            'notes' => $notes_by_student,
        ]);
    }
}
