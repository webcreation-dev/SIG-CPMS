<?php

namespace App\Http\Controllers;

use App\Services\Imports\StudentRosterReader;
use App\Services\Imports\StudentRosterImporter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class StudentImportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            abort_unless(Gate::allows('access-admin') || Gate::allows('access-manager'), 403);
            return $next($request);
        });
    }

    public function index(Request $request)
    {
        return view('admin.students.import', ['preview' => $request->session()->get('student_import')]);
    }

    public function preview(Request $request, StudentRosterReader $reader)
    {
        $request->session()->forget('student_import');
        $request->validate(['files' => ['required', 'array', 'min:1', 'max:2'], 'files.*' => ['required', 'file', 'mimes:xlsx', 'max:5120']]);
        $lists = [];
        foreach ($request->file('files') as $file) {
            $lists[] = $reader->read($file->getRealPath(), $file->getClientOriginalName());
        }
        // Les données restent côté serveur ; le navigateur ne transmet que les destinations choisies.
        $request->session()->put('student_import', ['token' => (string) Str::uuid(), 'expires' => time()+3600, 'lists' => $lists]);
        return redirect()->route('students.import.index');
    }

    public function store(Request $request, StudentRosterImporter $importer)
    {
        $request->validate(['token' => ['required', 'string'], 'targets' => ['required', 'array'],
            'targets.*.type' => ['required', 'in:prepa1,prepa2'], 'targets.*.year' => ['required', 'regex:/^20\d{2}-20\d{2}$/']]);
        $preview = $request->session()->get('student_import');
        if (!$preview || $preview['expires'] < time() || !hash_equals($preview['token'], $request->token)) {
            throw ValidationException::withMessages(['import' => 'L’aperçu a expiré. Sélectionnez à nouveau les fichiers.']);
        }
        $lists = $preview['lists'];
        foreach ($lists as $index => &$list) {
            $target = $request->input("targets.$index");
            if (!$target || (int) substr($target['year'], 5) !== (int) substr($target['year'], 0, 4)+1) {
                throw ValidationException::withMessages(['import' => 'Indiquez une année scolaire complète, par exemple 2026-2027.']);
            }
            $list['target_type'] = $target['type'];
            $list['target_year'] = (int) substr($target['year'], 0, 4);
        }
        unset($list);
        $results = $importer->import($lists);
        $request->session()->forget('student_import');
        $request->session()->flash('roster_import_results', $results);
        return redirect()->route('students.import.index')->with('message', 'Import terminé. Les fiches et notes des années précédentes sont conservées.');
    }
}
