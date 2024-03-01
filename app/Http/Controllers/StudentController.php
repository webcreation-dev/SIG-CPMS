<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('classroom_id')){
            $classroom_id = $request->classroom_id;
            $classroom = Classroom::find($classroom_id);
            $students = Student::where('classroom_id', $request->classroom_id)->with('classroom')->get();

            return view('admin.students.students_list', compact('students', 'classroom_id','classroom'));
        }else{
            $students = Student::all();
            return view('admin.students.students_list', compact('students'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'lastname' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],
            'sexe' => ['required', 'string', 'max:255'],
            'birthday' => ['required', 'date'],
            'classroom_id' => ['required', 'numeric'],
        ]);

        Student::create([
            'lastname' => $request->lastname,
            'firstname' => $request->firstname,
            'sexe' => $request->sexe,
            'birthday' => $request->birthday,
            'classroom_id' => $request->classroom_id,
        ]);

        return redirect()->route('students.index',['classroom_id' => $request->classroom_id])->with('message','Elève ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'edit_lastname' => ['required', 'string', 'max:255'],
            'edit_firstname' => ['required', 'string', 'max:255'],
            'edit_sexe' => ['required', 'string', 'max:255'],
            'edit_birthday' => ['required', 'date'],
            'edit_classroom_id' => ['required', 'numeric'],
        ]);

        $student->update([
            'lastname' => $request->edit_lastname,
            'firstname' => $request->edit_firstname,
            'sexe' => $request->edit_sexe,
            'birthday' => $request->edit_birthday,
            'classroom_id' => $request->edit_classroom_id,
        ]);

        return redirect()->route('students.index',['classroom_id' => $request->edit_classroom_id])->with('message','Elève modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $classroom_id = $student->classroom_id;
        $student->delete();
        return redirect()->route('students.index',['classroom_id' => $classroom_id])->with('message','Elève supprimé avec succès');
    }
}
