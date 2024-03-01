<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\TeachingUnit;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classrooms = Classroom::all();
        return view('admin.classrooms.classrooms_list', compact('classrooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $classroomId = $request->classroomId;
        $ues = TeachingUnit::getLinkTeachingUnit($classroomId);
        return view('admin.classrooms.update_ue', compact('classroomId','ues'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'total_students' => ['required', 'numeric'],
            'total_teaching_units' => ['required', 'numeric'],
        ]);

        Classroom::create([
            'name' => $request->name,
            'total_students' => $request->total_students,
            'total_teaching_units' => $request->total_teaching_units,
        ]);

        return redirect()->route('classrooms.index')->with('message','Classe ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function show(Classroom $classroom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function edit(Classroom $classroom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classroom $classroom)
    {
        $request->validate([
            'edit_name' => ['required', 'string', 'max:255'],
            'edit_total_students' => ['required', 'numeric'],
            'edit_total_teaching_units' => ['required', 'numeric'],
        ]);

        $classroom->update([
            'name' => $request->edit_name,
            'total_students' => $request->edit_total_students,
            'total_teaching_units' => $request->edit_total_teaching_units,
        ]);

        return redirect()->route('classrooms.index')->with('message','Classe mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classroom $classroom)
    {
        $classroom->delete();
        return redirect()->route('classrooms.index')->with('message','Classe supprimé avec succès');
    }
}
