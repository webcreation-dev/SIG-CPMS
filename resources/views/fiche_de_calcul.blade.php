<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fiche de calcul de moyennes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <div class="row">
        <div class="column left" style="width: 10% !important;">
        </div>
        <div class="column middle" style="width: 80% !important; text-align: left;">
            <p style="text-align: center;"><strong> <span style="border-top: 1px solid black; padding-top: 5px;" >CPMS /</span> FICHE DE CALCUL DE MOYENNES - 1è SEMESTRE</strong></p>
            <p style="text-align: center;">1è Année / 2023-2024</p>
        </div>
        <div class="column right" style="width: 10% !important;">
        </div>
    </div>


    <br><br>
    <main>
        <table>
            <thead>
                <tr>
                    <th colspan="12">Nom & Prénoms</th>
                </tr>
                <tr>
                    <th rowspan="2">Unités d'Enseignement UE </th>
                    <th rowspan="2">Crédits 60 </th>
                    <th colspan="3">Interrogations </th>
                    <th colspan="3">Devoirs Surveillés</th>
                    <th rowspan="2">Exam (50%)</th>
                    <th colspan="2"> Moy/20 </th>
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
                    <th>M/UE</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $ues = App\Models\TeachingUnit::all();
                @endphp

            @foreach ($ues as $ue)
                @if($ue->status == 'singular')

                    @php
                        $note = App\Models\Note::where('student_id', $studentId)->where('teaching_unit_id', $ue->id)->first();
                    @endphp


                    <tr>
                        <td><strong>{{$ue->name}}</strong></td>
                        <td>{{$ue->credit}}</td>
                        <td>{{$note->i1_points}}</td>
                        <td>{{$note->i2_points}}</td>
                        <td>{{$note->moy_inter}}</td>
                        <td>{{$note->d1_points}}</td>
                        <td>{{$note->d2_points}}</td>
                        <td>{{$note->moy_dev}}</td>
                        <td>{{$note->e_points}}</td>
                        <td>{{$note->moy_ecu}}</td>
                        <td>{{$note->moy_ecu}}</td>
                        <td></td>
                    </tr>
                @else
                    @php
                        $ecues_count = App\Models\ElementTeachingUnit::where('teaching_unit_id', $ue->id)->count();

                        $ecues = App\Models\ElementTeachingUnit::where('teaching_unit_id', $ue->id)->get();

                        $ecuesId = App\Models\ElementTeachingUnit::where('teaching_unit_id', $ue->id)->pluck('id');
                        $notes = App\Models\Note::where('student_id', $studentId)->whereIn('element_teaching_unit_id', $ecuesId)->get();
                        $moy_ecu_sum = $notes->sum('moy_ecu');
                    @endphp

                    <tr>
                        <td><strong>{{$ue->name}}</strong></td>
                        <td>{{$ue->credit}}</td>

                        <td colspan="8"></td>
                        {{-- <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td> --}}

                        <td rowspan="{{$ecues_count + 1}}">{{$moy_ecu_sum}}</td>
                        <td rowspan="{{$ecues_count + 1}}"></td>
                    </tr>
                    @foreach ($ecues as $ecue)
                        <tr>
                            <td>{{$ecue->name}}</td>
                            <td>{{$ecue->credit}}</td>
                            <td>{{$note->i1_points}}</td>
                            <td>{{$note->i2_points}}</td>
                            <td>{{$note->moy_inter}}</td>
                            <td>{{$note->d1_points}}</td>
                            <td>{{$note->d2_points}}</td>
                            <td>{{$note->moy_dev}}</td>
                            <td>{{$note->e_points}}</td>
                            <td>{{$note->moy_ecu}}</td>
                        </tr>
                    @endforeach

                @endif
            @endforeach

            <tr>
                <td colspan="12"><strong> Moyenne générale : </strong></td>
            </tr>

            </tbody>
        </table>
    </main>

</body>
</html>
