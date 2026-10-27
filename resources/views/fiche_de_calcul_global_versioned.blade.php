<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Fiches de calcul par semestre</title>
    <link rel="stylesheet" href="style.css">
    <style>.curriculum-2026 th, .curriculum-2026 td { padding: 3px; }</style>
</head>
<body>
@foreach($students as $student)
    @foreach(App\Models\Student::PREPA_SEMESTER[$student->classroom->type] as $semester)
        @php
            $year = (int) date('Y', strtotime($student->classroom->year));
            $sheet = view('fiche_de_calcul', [
                'studentId' => $student->id,
                'semester' => $semester,
                'year' => $year,
                'nextYear' => $year + 1,
                'type_classroom' => $student->classroom->type,
            ])->render();
            preg_match('/<body>(.*)<\/body>/s', $sheet, $body);
        @endphp
        <div @if(!$loop->parent->first || !$loop->first) style="page-break-before: always;" @endif>
            {!! $body[1] !!}
        </div>
    @endforeach
@endforeach
</body>
</html>
