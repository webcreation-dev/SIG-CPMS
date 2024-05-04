<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fiche de calcul de moyennes</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="favicon.png" type="image/x-icon">
</head>
<body>


    <div class="row">
        <div class="column left" style="width: 10% !important;">
        </div>
        <div class="column middle" style="width: 80% !important; text-align: left;">
            <p style="text-align: center;"><strong> <span >CPMS /</span> FICHE DE CALCUL DE MOYENNES - 1è SEMESTRE</strong></p>
            <p style="text-align: center;">1è Année / 2023-2024</p>
        </div>
        <div class="column right" style="width: 10% !important;">
        </div>
    </div>


    <br><br>
    <main>
        <table>
            <thead>
                @php
                    $student = App\Models\Student::find($studentId);
                @endphp
                <tr>
                    <th colspan="13"> @if($student->sexe =='M') Mr @else Mlle @endif {{$student->lastname}} {{$student->firstname}}</th>
                </tr>
                <tr>
                    <th rowspan="2">Unités d'Enseignement UE </th>
                    <th rowspan="2">Crédits 60 </th>
                    <th colspan="3">Interrogations </th>
                    <th colspan="3">Devoirs Surveillés</th>
                    <th rowspan="2">Exam (50%)</th>
                    <th colspan="3"> Moy/20 </th>
                    <th rowspan="2">Appr</th>
                </tr>
                <tr>
                    <th>I1 </th>
                    <th>I2 </th>
                    <th>Moy Inter (20%) </th>
                    <th>D1</th>
                    <th>D2</th>
                    <th> Moy Dev (30%) </th>
                    <th>M/ECU</th>
                    <th>Rattrap.</th>
                    <th>M/UE</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $ues = App\Models\TeachingUnit::where('type', $student->classroom->type)->get();

                    $count_ues = count($ues);

                    $moy_generale = 0;

                @endphp

            @foreach ($ues as $ue)
                @if($ue->status == 'singular')

                    @php
                        $note = App\Models\Note::where('student_id', $studentId)->where('teaching_unit_id', $ue->id)->first();

                        $moy_generale += is_null($note->moy_catch_up) ? $note->moy_ecu : $note->moy_catch_up;
                    @endphp


                   <tr>
                        <td style="background-color: #ccc;"><strong>{{$ue->name}}</strong></td>
                         <td style="background-color: #ccc;">{{$ue->credit}}</td>
                        <td>{{$note?->i1_points}}</td>
                        <td>{{$note?->i2_points}}</td>
                        <td><strong>{{ is_null($note->moy_inter) ? '' : number_format($note?->moy_inter, 2, '.', '');  }} </strong></td>
                        <td>{{$note?->d1_points}}</td>
                        <td>{{$note?->d2_points}}</td>
                        <td><strong>{{ is_null($note->moy_dev) ? '' : number_format($note?->moy_dev, 2, '.', '');  }}</strong></td>
                        <td>{{$note?->e_points}}</td>
                        <td><strong>{{ is_null($note->moy_ecu) ? '' : rtrim(rtrim(number_format($note?->moy_ecu, 2, '.', ''), '0'), '.') }}</strong></td>
                        <td><strong>{{ is_null($note->moy_catch_up) ? '' : rtrim(rtrim(number_format($note?->moy_catch_up, 2, '.', ''), '0'), '.') }}</strong></td>
                        <td><strong>{{ rtrim(rtrim(number_format((is_null($note->moy_catch_up) ? $note->moy_ecu : $note->moy_catch_up), 2, '.', ''), '0'), '.') }}</strong></td>
                        <td><strong>{{App\Models\Note::getAppreciation($note?->moy_ecu)}}</strong></td>
                    </tr>

                @else
                    @php
                        $ecues_count = App\Models\ElementTeachingUnit::where('teaching_unit_id', $ue->id)->count();

                        $ecues = App\Models\ElementTeachingUnit::where('teaching_unit_id', $ue->id)->get();

                        $ecuesId = App\Models\ElementTeachingUnit::where('teaching_unit_id', $ue->id)->pluck('id');
                        $notes = App\Models\Note::where('student_id', $studentId)->whereIn('element_teaching_unit_id', $ecuesId)->get();

                        // $moy_ue = $notes->sum('moy_ecu') / $ecues_count;
                        $moy_ue = $notes->sum(function ($note) {
                            return $note->moy_catch_up !== null ? $note->moy_catch_up : $note->moy_ecu;
                        }) / $ecues_count;

                        $moy_generale += $moy_ue;

                    @endphp

                    <tr>
                        <td style="background-color: #ccc; "><strong>{{$ue->name}}</strong></td>
                        <td style="background-color: #ccc; ">{{$ue->credit}}</td>

                        <td colspan="9"></td>

                        <td rowspan="{{$ecues_count + 1}}" style="vertical-align: top; "><strong>{{ rtrim(rtrim(number_format($moy_ue, 2, '.', ''), '0'), '.') }}</strong></td>
                        <td rowspan="{{$ecues_count + 1}}" ><strong>{{App\Models\Note::getAppreciation($moy_ue)}}</strong></td>
                    </tr>
                    @foreach ($ecues as $ecue)
                                @php
                                    $note = App\Models\Note::where('student_id', $studentId)->where('element_teaching_unit_id', $ecue->id)->first();
                                @endphp
                        <tr>
                            <td>{{$ecue->name}}</td>
                            <td>{{$ecue->credit}}</td>
                            <td>{{$note?->i1_points}}</td>
                            <td>{{$note?->i2_points}}</td>
                            <td><strong>{{ is_null($note->moy_inter) ? '' : number_format($note?->moy_inter, 2, '.', '');  }}</strong></td>
                            <td>{{$note?->d1_points}}</td>
                            <td>{{$note?->d2_points}}</td>
                            <td><strong>{{ is_null($note->moy_dev) ? '' : number_format($note?->moy_dev, 2, '.', '');  }}</strong></td>
                            <td>{{$note?->e_points}}</td>
                            <td><strong>{{ is_null($note->moy_ecu) ? '' : rtrim(rtrim(number_format($note?->moy_ecu, 2, '.', ''), '0'), '.') }}</strong></td>
                            <td><strong>{{ is_null($note->moy_catch_up) ? '' : rtrim(rtrim(number_format($note?->moy_catch_up, 2, '.', ''), '0'), '.') }}</strong></td>
                        </tr>
                    @endforeach

                @endif
            @endforeach

            <tr>
                <td style="background-color: #ccc;" colspan="11"><strong> Moyenne générale : </strong></td>
                <td  style="background-color: #ccc;" ><strong>{{ number_format(($moy_generale / $count_ues), 2, '.', '');  }}</strong></td>
                <td style="background-color: #ccc;"><strong>{{App\Models\Note::getAppreciation(($moy_generale / $count_ues))}}</strong></td>
            </tr>

            </tbody>
        </table>
    </main>

</body>
</html>
