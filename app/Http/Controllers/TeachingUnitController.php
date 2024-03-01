<?php

namespace App\Http\Controllers;

use App\Models\TeachingUnit;
use Illuminate\Http\Request;

class TeachingUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teaching_units = TeachingUnit::all();
        return view('admin.teaching_units.teaching_units_list', compact('teaching_units'));
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
