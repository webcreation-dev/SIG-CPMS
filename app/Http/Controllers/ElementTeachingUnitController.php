<?php

namespace App\Http\Controllers;

use App\Models\ElementTeachingUnit;
use App\Models\TeachingUnit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ElementTeachingUnitController extends Controller
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
        if($request->has('teaching_unit_id')){
            $teaching_unit_id = $request->teaching_unit_id;
            $teaching_unit = TeachingUnit::find($teaching_unit_id);
            $element_teaching_units = ElementTeachingUnit::where('teaching_unit_id', $request->teaching_unit_id)->with('teachingUnit')->get();

            return view('admin.element_teaching_units.element_teaching_units_list', compact('element_teaching_units', 'teaching_unit_id','teaching_unit'));
        }else{
            $element_teaching_units = ElementTeachingUnit::all();
            return view('admin.element_teaching_units.element_teaching_units_list', compact('element_teaching_units'));
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
            'teaching_unit_id' => ['required', 'numeric'],
        ]);

        ElementTeachingUnit::create([
            'name' => $request->name,
            'credit' => $request->credit,
            'teaching_unit_id' => $request->teaching_unit_id,
        ]);

        return redirect()->route('element_teaching_units.index',['teaching_unit_id' => $request->teaching_unit_id])->with('message','ECUE ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ElementTeachingUnit  $elementTeachingUnit
     * @return \Illuminate\Http\Response
     */
    public function show(ElementTeachingUnit $elementTeachingUnit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ElementTeachingUnit  $elementTeachingUnit
     * @return \Illuminate\Http\Response
     */
    public function edit(ElementTeachingUnit $elementTeachingUnit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ElementTeachingUnit  $elementTeachingUnit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ElementTeachingUnit $elementTeachingUnit)
    {
        $request->validate([
            'edit_name' => ['required', 'string', 'max:255'],
            'edit_credit' => ['required', 'string', 'max:255'],
            'edit_teaching_unit_id' => ['required', 'numeric'],
        ]);

        $elementTeachingUnit->update([
            'name' => $request->edit_name,
            'credit' => $request->edit_credit,
            'teaching_unit_id' => $request->edit_teaching_unit_id,
        ]);

        return redirect()->route('element_teaching_units.index',['teaching_unit_id' => $request->edit_teaching_unit_id])->with('message','ECUE modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ElementTeachingUnit  $elementTeachingUnit
     * @return \Illuminate\Http\Response
     */
    public function destroy(ElementTeachingUnit $elementTeachingUnit)
    {
        $teaching_unit_id = $elementTeachingUnit->teaching_unit_id;
        $elementTeachingUnit->delete();
        return redirect()->route('element_teaching_units.index',['teaching_unit_id' => $teaching_unit_id])->with('message','ECUE supprimé avec succès');
    }
}
