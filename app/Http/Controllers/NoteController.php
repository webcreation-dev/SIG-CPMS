<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\ElementTeachingUnit;
use App\Models\Note;
use App\Models\Student;
use App\Models\TeachingUnit;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $classroom = Classroom::find($request->classroom_id);

        if($request->type == 'ue') {
            $ue = TeachingUnit::find($request->ue_id);
        }else{
            $ue = ElementTeachingUnit::find($request->ue_id);
        }

        $type = $request->type;

        return view('admin.notes.notes', compact('classroom', 'ue', 'type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $classroom = Classroom::find($request->classroom_id);

        $type = $request->type;

        if($request->type == 'ue') {
            $ue = TeachingUnit::find($request->ue_id);
        }else{
            $ue = ElementTeachingUnit::find($request->ue_id);
        }


        $students = Student::whereIn('id', $request->student_id)->get();

        $i1_points = $request->i1_points;
        $i2_points = $request->i2_points;
        $d1_points = $request->d1_points;
        $d2_points = $request->d2_points;
        $e_points = $request->e_points;


        if($request->type == 'ue') {

            foreach($students as $key => $student) {

                $note = Note::where('student_id', $student->id)
                    ->where('teaching_unit_id', $request->ue_id)
                    ->first();

                if ($note) {
                    $note->i1_points = ($i1_points[$key] == null ? 0.1 : $i1_points[$key]);
                    $note->i2_points = ($i2_points[$key] == null ? 0.1 : $i2_points[$key]);
                    $note->d1_points = ($d1_points[$key] == null ? 0.1 : $d1_points[$key]);
                    $note->d2_points = ($d2_points[$key] == null ? 0.1 : $d2_points[$key]);
                    $note->e_points = ($e_points[$key] == null ? 0.1 : $e_points[$key]);

                    $note->save();
                }
            }
        }else {
            foreach($students as $key => $student) {

                $note = Note::where('student_id', $student)->where('element_teaching_unit_id', $request->ue_id)->first();
                $note->i1_points = ($i1_points[$key] == null ? 0.1 : $i1_points[$key]);
                $note->i2_points = ($i2_points[$key] == null ? 0.1 : $i2_points[$key]);
                $note->d1_points = ($d1_points[$key] == null ? 0.1 : $d1_points[$key]);
                $note->d2_points = ($d2_points[$key] == null ? 0.1 : $d2_points[$key]);
                $note->e_points = ($e_points[$key] == null ? 0.1 : $e_points[$key]);
                $note->save();
            }
        }

        return redirect(route('notes.create',['classroom_id' => $classroom->id,'ue_id' => $ue->id,'type' => $type]))->with('message','Notes ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function show(Note $note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function edit(Note $note)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Note $note)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function destroy(Note $note)
    {
        //
    }
}
