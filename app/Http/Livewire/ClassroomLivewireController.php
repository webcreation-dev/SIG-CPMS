<?php

namespace App\Http\Livewire;

use App\Models\Classroom;
use App\Models\TeachingUnit;
use Livewire\Component;

class ClassroomLivewireController extends Component
{

    public $currentPage = 'PAGELIST';
    public $classroomId;
    public $ues;


    public function render()
    {
        $classrooms = Classroom::all();
        return view('livewire.classroom-livewire-controller', [
            'classrooms' => $classrooms,
            'classroomId' => $this->classroomId,
            'ues' => $this->ues,
            'currentPage' => $this->currentPage
        ]);
    }

    public function updateUes($classroomId)
    {
        $this->classroomId = $classroomId;
        $this->ues = TeachingUnit::getLinkTeachingUnit($classroomId);
        $this->currentPage = 'PAGE-UPDATE-UE';
    }
}
