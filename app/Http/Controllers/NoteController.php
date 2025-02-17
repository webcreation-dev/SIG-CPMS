<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\ElementTeachingUnit;
use App\Models\Note;
use App\Models\Student;
use App\Models\TeachingUnit;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class NoteController extends Controller
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
        //
    }

    public function releveNotes(Request $request)
    {

        $studentId = $request->student_id;

        $student = Student::find($studentId);
        $classroom = Classroom::find($student->classroom_id);

        $year = date('Y', strtotime($classroom->year));
        $nextYear = $year + 1;

        $semester = $request->semester;
        $signed = $request->signed;

        $pdf = Pdf::loadView('releve_de_notes', ['studentId' => $studentId, 'semester' => $semester, 'year' => $year, 'nextYear' => $nextYear, 'signed' => $signed]);
        return $pdf->stream();

        // return view('releve_de_notes', compact('studentId', 'semester', 'year', 'nextYear'));

    }
    public function ficheCalcul(Request $request)
    {

        $studentId = $request->student_id;

        $student = Student::find($studentId);
        $classroom = Classroom::find($student->classroom_id);

        $year = date('Y', strtotime($classroom->year));
        $nextYear = $year + 1;

        $semester = $request->semester;

        $pdf = Pdf::loadView('fiche_de_calcul', ['studentId' => $studentId, 'semester' => $semester, 'year' => $year, 'nextYear' => $nextYear, 'type_classroom' => $classroom->type]);
        return $pdf->stream();

    }

    public function ficheCalculGlobal()
    {

        ini_set('max_execution_time', 0);
        ini_set('memory_limit','-1');

        $pdf = Pdf::loadView('fiche_de_calcul_global');
        return $pdf->stream();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $classroom = Classroom::where('type', $request->classroom_type)->latest()->first();

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
        
        //dd($classroom);

        $type = $request->type;

        if($request->type == 'ue') {
            $ue = TeachingUnit::find($request->ue_id);
        }else{
            $ue = ElementTeachingUnit::find($request->ue_id);
        }


        $students = $request->student_id;

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




        if($request->type == 'ue') {

            foreach($students as $key => $student) {

                $student = Student::find($student);

                $note = Note::where('student_id', $student->id)
                    ->where('teaching_unit_id', $request->ue_id)
                    ->first();

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
        }else {
            foreach($students as $key => $student) {

                $student = Student::find($student);

                $note = Note::where('student_id', $student->id)->where('element_teaching_unit_id', $request->ue_id)->first();

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
        }

        return redirect(route('notes.create',['classroom_type' => $classroom->type, 'ue_id' => $ue->id,'type' => $type]))->with('message','Notes ajouté avec succès');
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
