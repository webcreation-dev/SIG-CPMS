<?php

namespace App\Http\Controllers;

use App\Services\SemesterSimulation;
use Illuminate\Http\Request;

class SemesterSimulationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            abort_unless(\Illuminate\Support\Facades\Gate::allows('access-admin') || \Illuminate\Support\Facades\Gate::allows('access-manager'), 403);
            return $next($request);
        });
    }

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

    public function calculationSheet(Request $request, SemesterSimulation $simulation)
    {
        $request->validate([
            'year' => ['required', 'integer', 'between:2023,2100'],
            'semester' => ['required', 'in:semester1,semester2,semester3,semester4'],
            'scores' => ['required', 'array'],
        ]);
        $year = (int) $request->year;
        $semester = $request->semester;
        $scores = $request->input('scores');
        // Recalcul côté serveur à partir des saisies, jamais depuis un résultat fourni par le navigateur.
        $result = $simulation->simulate($year, $semester, $scores);
        $catalog = $simulation->catalog($year, $semester);
        abort_if($catalog->isEmpty(), 422, 'Aucune UE configurée pour ce semestre.');
        return \Barryvdh\DomPDF\Facade\Pdf::loadView('simulation.calculation-sheet', compact('year', 'semester', 'scores', 'result', 'catalog'))
            ->setPaper('a4', 'landscape')
            ->stream('simulation-fiche-calcul-'.$year.'-'.$semester.'.pdf');
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
