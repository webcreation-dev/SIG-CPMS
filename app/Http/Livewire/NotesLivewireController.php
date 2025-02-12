<?php

namespace App\Http\Livewire;

use App\Models\Classroom;
use App\Models\Note;
use App\Models\Student;
use App\Models\TeachingUnit;
use App\Models\ElementTeachingUnit;
use Livewire\Component;

class NotesLivewireController extends Component
{
    public $classroom;
    public $ue;
    public $type;

    public function render()
    {
        if ($this->type == 'ue') {
            $classroom = Classroom::where('type', $this->ue->type)->latest()->first();
        }else {
            $classroom = Classroom::where('type', $this->ue->teachingUnit->type)->latest()->first();
        }
        $students = Student::where('classroom_id', $classroom->id)->get();
        
        // dd($this->ue->id);
        
        
       /*$existingStudentIds = Student::pluck('id')->toArray();
        Note::whereNotIn('student_id', $existingStudentIds)->delete();
        
        $teachUnitIds = TeachingUnit::where('type', 'prepa2')->pluck('id')->toArray();
        $elementTeachUnitIds = ElementTeachingUnit::whereIn('teaching_unit_id', $teachUnitIds)->pluck('id')->toArray();
        
        Note::whereIn('teaching_unit_id', $teachUnitIds)->delete();
        dd(1);*/
        
        //$note = Note::where('element_teaching_unit_id', $this->ue->id)->get();
        //dd($note->count());
        
        
 
        

        if ($this->type == 'ue') {

            foreach ($students as $student) {
                $note = Note::where('student_id', $student->id)
                    ->where('teaching_unit_id', $this->ue->id)->first();

                if(!$note) {
                    Note::create([
                        'student_id' => $student->id,
                        'teaching_unit_id' => $this->ue->id,
                    ]);
                }
            }
            
            $notes = Note::whereIn('student_id', $students->pluck('id'))
            ->where('teaching_unit_id', $this->ue->id)
            ->get();
            // dd($notes->count());
        }else {

            foreach ($students as $student) {
                $note = Note::where('student_id', $student->id)
                ->where('element_teaching_unit_id', $this->ue->id)->first();
    
                if(!$note) {
                    Note::create([
                        'student_id' => $student->id,
                        'element_teaching_unit_id' => $this->ue->id,
                    ]);
                }
            }
            $notes = Note::whereIn('student_id', $students->pluck('id'))
            ->where('element_teaching_unit_id', $this->ue->id)
            ->get();
            
        }

        return view('livewire.notes-livewire-controller', [
            'classroom' => $this->classroom,
            'ue' => $this->ue,
            'notes' => $notes,
            'type' => $this->type
        ]);
    }
}
