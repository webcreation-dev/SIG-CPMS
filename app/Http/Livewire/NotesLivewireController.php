<?php

namespace App\Http\Livewire;

use App\Models\Note;
use App\Models\Student;
use App\Models\TeachingUnit;
use Livewire\Component;

class NotesLivewireController extends Component
{
    public $classroom;
    public $ue;
    public $type;

    public function render()
    {
        if ($this->type == 'ue') {
                $note = Note::where('teaching_unit_id', $this->ue->id)->first();

                if(!$note) {

                    $students = Student::all();
                    foreach ($students as $student) {
                        Note::create([
                            'student_id' => $student->id,
                            'teaching_unit_id' => $this->ue->id,
                        ]);
                    }
                }
            $notes = Note::where('teaching_unit_id', $this->ue->id)->get();
        }else {
            $note = Note::where('element_teaching_unit_id', $this->ue->id)->first();

            if(!$note) {
                $students = Student::all();
                foreach ($students as $student) {
                    Note::create([
                        'student_id' => $student->id,
                        'element_teaching_unit_id' => $this->ue->id,
                    ]);
                }
            }

            $notes = Note::where('element_teaching_unit_id', $this->ue->id)->get();

        }

        return view('livewire.notes-livewire-controller', [
            'classroom' => $this->classroom,
            'ue' => $this->ue,
            'notes' => $notes,
            'type' => $this->type
        ]);
    }
}
