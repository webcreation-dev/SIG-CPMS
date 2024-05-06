<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Note;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            $lastTwoPrepaClassesIds = Classroom::whereIn('type', ['prepa1', 'prepa2'])
                                    ->latest('created_at')
                                    ->take(2)
                                    ->pluck('id');

            $students = Student::whereIn('classroom_id', $lastTwoPrepaClassesIds)->get();

            return view('admin.students.students_list', compact('students'));
        }
    }

    public function studentsByParent() {

        $students = Student::where('parent_id', Auth::user()->id)->with('classroom')->get();
        return view('admin.students.students_list', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $student = Student::find($request->student_id);

        $semester = $request->semester;

        return view('admin.notes.notes_by_student', compact('student', 'semester'));
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
            'birthplace' => ['required', 'string'],
            'classroom_id' => ['required', 'numeric'],
            'parent_id' => ['numeric'],
        ]);

        Student::create([
            'lastname' => $request->lastname,
            'firstname' => $request->firstname,
            'sexe' => $request->sexe,
            'birthday' => $request->birthday,
            'birthplace' => $request->birthplace,
            'classroom_id' => $request->classroom_id,
            'parent_id' => $request->parent_id,
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
            'edit_birthplace' => ['required', 'string'],
            'edit_classroom_id' => ['required', 'numeric'],
            'edit_parent_id' => ['numeric'],
            'edit_total_hours_absence' => ['numeric'],
            'edit_total_hours_excused_absence' => ['numeric'],
            'edit_total_hours_unexcused_absence' => ['numeric'],
        ]);

        $student->update([
            'lastname' => $request->edit_lastname,
            'firstname' => $request->edit_firstname,
            'sexe' => $request->edit_sexe,
            'birthday' => $request->edit_birthday,
            'birthplace' => $request->edit_birthplace,
            'classroom_id' => $request->edit_classroom_id,
            'parent_id' => $request->edit_parent_id,
            'total_hours_absence' => $request->edit_total_hours_absence,
            'total_hours_excused_absence' => $request->edit_total_hours_excused_absence,
            'total_hours_unexcused_absence' => $request->edit_total_hours_unexcused_absence,
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


    public function notesByStudent(Request $request)
    {

        $student = Student::find($request->student_id);
        $semester = $request->semester;

        $ues = $request->ues;
        $types = $request->types;

        $i1_points = $request->i1_points;
        $i2_points = $request->i2_points;
        $d1_points = $request->d1_points;
        $d2_points = $request->d2_points;
        $e_points = $request->e_points;
        $moy_inter = $request->moy_inter;
        $moy_dev = $request->moy_dev;
        $moy_ecu = $request->moy_ecu;

        $moy_catch_up = $request->moy_catch_up;
        $freq_catch_up = $request->freq_catch_up;

        foreach($ues as $key => $ue) {

            if($types[$key] == 'ue') {
                $note = Note::where('student_id', $student->id)
                ->where('teaching_unit_id', $ue)
                ->first();
            }else {
                $note = Note::where('student_id', $student->id)
                ->where('element_teaching_unit_id', $ue)
                ->first();
            }

            $note->i1_points = $i1_points[$key] ?? null;
            $note->i2_points = $i2_points[$key] ?? null;
            $note->d1_points = $d1_points[$key] ?? null;
            $note->d2_points = $d2_points[$key] ?? null;
            $note->e_points = $e_points[$key] ?? null;
            $note->moy_inter = $moy_inter[$key] ?? null;
            $note->moy_dev = $moy_dev[$key] ?? null;
            $note->moy_ecu = $moy_ecu[$key] ?? null;

            $note->moy_catch_up = $moy_catch_up[$key] ?? null;
            $note->freq_catch_up = $freq_catch_up[$key] ?? null;

            $note->save();
        }

        return redirect(route('students.create',['student_id' => $student->id, 'semester' => $semester]))->with('message','Notes ajouté avec succès');

    }
}
