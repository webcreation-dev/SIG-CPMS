<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Services\Imports\StudentRosterReader;
use App\Services\Imports\StudentRosterImporter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
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

    public function index()
    {
        return redirect()->route('classrooms.index')->with('open_student_import', true);
    }

    public function store(Request $request, StudentRosterReader $reader, StudentRosterImporter $importer)
    {
        try {
            $request->validate(['classroom_id' => ['required', 'integer', 'exists:classrooms,id'],
                'file' => ['required', 'file', 'mimes:xlsx', 'max:5120']]);
            $classroom = Classroom::findOrFail($request->classroom_id);
            $year = (int) date('Y', strtotime($classroom->year));
            if ($year < 2026) {
                throw ValidationException::withMessages(['classroom_id' => 'L’import est disponible à partir de 2026-2027.']);
            }
            $file = $request->file('file');
            $list = $reader->read($file->getRealPath(), $file->getClientOriginalName());
            if ($list['type'] !== null && $list['type'] !== $classroom->type) {
                throw ValidationException::withMessages(['file' => 'Le niveau indiqué dans le fichier ne correspond pas à la classe sélectionnée.']);
            }
            // La classe choisie est la destination explicite, même si l’en-tête a gardé une ancienne année.
            $list['target_year'] = $year;
            $list['target_type'] = $classroom->type;
            $result = $importer->import([$list])[0];
            $response = redirect()->route('classrooms.index')->with('message',
                $result['created'].' étudiant(s) importé(s), '.$result['skipped'].' déjà présent(s) — '.Classroom::TYPES[$classroom->type].' '.$year.'-'.($year+1).'.');
            $warnings = $list['warnings'];
            if (($list['year'] !== null && $list['year'] !== $year) || ($list['filename_year'] !== null && $list['filename_year'] !== $year)) {
                $warnings[] = 'L’année de la classe sélectionnée ('.$year.'-'.($year+1).') a été utilisée malgré une année différente dans le fichier.';
            }
            if ($warnings) { $response->with('warning', implode(' ', array_unique($warnings))); }
            return $response;
        } catch (ValidationException $exception) {
            $exception->errorBag = 'studentImport';
            $exception->redirectTo = route('classrooms.index');
            throw $exception;
        }
    }
}
