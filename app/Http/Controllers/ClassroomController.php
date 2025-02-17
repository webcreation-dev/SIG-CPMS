<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\TeachingUnit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class ClassroomController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            if (Gate::denies('access-admin') && Gate::denies('access-manager')) {
                return redirect()->route('students.by.parent');
            }
            return $next($request);
        });
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classrooms = Classroom::whereIn('type', ['prepa1', 'prepa2'])
                                ->latest('created_at')
                                ->take(2)
                                ->get();


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

   
    public function store(Request $request)
    {
        $request->validate([
            'type' => ['required', Rule::in(['prepa1', 'prepa2'])],
            'total_students' => ['required', 'numeric'],
            'total_teaching_units' => ['required', 'numeric'],
            'year' => 'required|date',
        ]);

        Classroom::create($request->all());

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
            'edit_total_students' => ['required', 'numeric'],
            'edit_total_teaching_units' => ['required', 'numeric'],
            'edit_year' => 'required|date',
        ]);

        $classroom->update([
            'total_students' => $request->edit_total_students,
            'total_teaching_units' => $request->edit_total_teaching_units,
            'year' => $request->edit_year,
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
