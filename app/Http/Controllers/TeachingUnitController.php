<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\TeachingUnit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class TeachingUnitController extends Controller
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
    public function index(Request $request)
    {
        if($request->has('classroom_id')){

            $classroom_id = $request->classroom_id;
            $classroom = Classroom::find($classroom_id);
            $teaching_units = TeachingUnit::where('type',  $classroom->type)->get();

            return view('admin.teaching_units.teaching_units_list', compact('teaching_units','classroom'));
        }else{

            $teaching_units = TeachingUnit::all();
            return view('admin.teaching_units.teaching_units_list', compact('teaching_units'));
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
            'name' => ['required', 'string', 'max:255'],
            'credit' => ['required', 'numeric'],
            'status' => ['required'],
        ]);

        TeachingUnit::create([
            'name' => $request->name,
            'credit' => $request->credit,
            'status' => $request->status,
        ]);

        return redirect()->route('teaching_units.index')->with('message','UE ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TeachingUnit  $teachingUnit
     * @return \Illuminate\Http\Response
     */
    public function show(TeachingUnit $teachingUnit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TeachingUnit  $teachingUnit
     * @return \Illuminate\Http\Response
     */
    public function edit(TeachingUnit $teachingUnit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TeachingUnit  $teachingUnit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeachingUnit $teachingUnit)
    {
        if($request->has('type')){
            $request->validate([
                'classroom_id' => ['required', 'numeric'],
                'ues' => ['array'],
            ]);

            if($request->has('ues')) {
                $classroom_by_ues = TeachingUnit::where('classroom_id', $request->classroom_id)->get();
                foreach($classroom_by_ues as $item){
                    $item->classroom_id = null;
                    $item->save();
                }

                $ues_by_classroom = TeachingUnit::whereIn('id', $request->ues)->get();
                foreach($ues_by_classroom as $item){
                    $item->classroom_id = $request->classroom_id;
                    $item->save();
                }
            }else {
                $classroom_by_ues = TeachingUnit::where('classroom_id', $request->classroom_id)->get();
                foreach($classroom_by_ues as $item){
                    $item->classroom_id = null;
                    $item->save();
                }
            }

            return back()->with('message','Les UE ont été ajoutés avec succès');

        }else {
            $request->validate([
                'edit_name' => ['required', 'string', 'max:255'],
                'edit_credit' => ['required', 'numeric'],
            ]);

            $teachingUnit->update([
                'name' => $request->edit_name,
                'credit' => $request->edit_credit,
            ]);

            return redirect()->route('teaching_units.index')->with('message','UE mis à jour avec succès');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TeachingUnit  $teachingUnit
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeachingUnit $teachingUnit)
    {
        //
    }
}
