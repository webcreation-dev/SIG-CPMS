<?php

namespace App\Http\Controllers;

use App\Services\SemesterSimulation;
use Illuminate\Http\Request;

class SemesterSimulationController extends Controller
{
    // Simulateur public sans données d’étudiants : lecture du catalogue et calculs fictifs uniquement.
    public function index(Request $request, SemesterSimulation $simulation)
    {
        $request->validate(['year' => ['sometimes', 'integer', 'between:2023,2100'], 'semester' => ['sometimes', 'in:semester1,semester2,semester3,semester4']]);
        $year = (int) $request->input('year', 2026);
        $semester = $request->input('semester', 'semester1');
        $catalog = $simulation->catalog($year, $semester);
        $scores = ['ue' => [], 'ecue' => []];
        foreach ($catalog as $unit) {
            $scores['ue'][$unit->id] = 12;
            foreach ($unit->elementTeachingUnits as $ecue) { $scores['ecue'][$ecue->id] = 12; }
        }
        $result = $simulation->simulate($year, $semester, $scores);
        return view('simulation.semester', compact('year', 'semester', 'catalog', 'scores', 'result'));
    }

    public function calculate(Request $request, SemesterSimulation $simulation)
    {
        $request->validate(['year' => ['required', 'integer', 'between:2023,2100'], 'semester' => ['required', 'in:semester1,semester2,semester3,semester4'],
            'scores' => ['required', 'array']]);
        $year = (int) $request->year;
        $semester = $request->semester;
        $scores = $request->input('scores');
        $result = $simulation->simulate($year, $semester, $scores);
        if ($request->expectsJson()) { return response()->json($result); }
        $catalog = $simulation->catalog($year, $semester);
        return view('simulation.semester', compact('year', 'semester', 'catalog', 'scores', 'result'));
    }
}
