<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relevé de notes</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="favicon.png" type="image/x-icon">

    <style>
        th, td {
            padding: 2px 5px 2px 5px !important;
        }
    </style>
</head>
<body>


    <div class="row" style="margin: auto;">
        <div class="column left">
            <img src="logo.png" alt="">
        </div>
        <div class="column middle">
            <p style="text-align: center;"><strong>CYCLE PREPARATOIRE Ste MARIE-STELLA</strong></p>
            <p style="text-align: center;">10 BP 1092 Cotonou Tél: 62 72 10 72</p>
            <p style="text-align: center;">Email: <span style="text-decoration: underline;">contact@cpms.education</span> - <strong>Bénin</strong> </p>
        </div>
        <div class="column right">
            <img src="logo-junia.png" style="width: 160px; height:80px; margin-left: -15px; transform:translateY(11px);" alt="">
        </div>
    </div>

    <div class="row" style="margin: auto;">
        <div class="column left">
        </div>
        <div class="column middle">
            <p style="text-align: right;"><strong>Année Académique: 2023-2024</strong></p>
            <p style="text-align: center;"><strong>RELEVE DE NOTES DU 1er SEMESTRE</strong></p>
        </div>
        <div class="column right">
        </div>
    </div>
                @php
                    $student = App\Models\Student::find($studentId);
                @endphp

    <p>
        <strong style="text-decoration: underline;text-align: start; transform:translateY(-10px);" >Nom et Prénoms (s)</strong> <strong style="transform:translateY(-10px)">:</strong> <span style="transform:translateY(-10px)">{{$student->lastname}} {{$student->firstname}}</span> <br>
        <strong style="text-decoration: underline;text-align: start;" >Lieu et Date de Naissance</strong> <strong>:</strong> {{$student->birthplace}} le {{date("d/m/Y", strtotime($student->birthday))}} <br>
        <strong style="text-decoration: underline;text-align: start; transform:translateY(10px);" >Sexe</strong> <strong style="transform:translateY(10px)">:</strong>  <span style="transform:translateY(10px)">{{$student->sexe}}</span>
    </p>
    <br>

    <main style="margin: auto;">
        <table style="margin: auto;">
            <thead>
                <tr>
                    <th>Unités d'Enseignement UE </th>
                    <th>Crédits 60 </th>
                    <th>Elements Constitutifs d'UE (ECUE) </th>
                    <th>Crédits 60</th>
                    <th>Moy ECUE </th>
                    <th> Moy UE </th>
                    <th>Fréq</th>
                    <th>Appr</th>
                </tr>
            </thead>
            <tbody>

                @php
                    $ues = App\Models\TeachingUnit::all();

                    $count_ues = count($ues);

                    $moy_generale = 0;

                    $credit_validés = 0;
                    $credit_non_validés = 0;

                @endphp

                @foreach ($ues as $ue)
                    @if($ue->status == 'singular')

                        @php
                            $note = App\Models\Note::where('student_id', $studentId)->where('teaching_unit_id', $ue->id)->first();
                            $moy_generale += is_null($note->moy_catch_up) ? $note->moy_ecu : $note->moy_catch_up;

                            if( (is_null($note->moy_catch_up) ? $note->moy_ecu : $note->moy_catch_up) >= 12){
                                $credit_validés += $ue->credit;
                            }else{
                                $credit_non_validés += $ue->credit;
                            }

                        @endphp

                        <tr>
                            <td>{{App\Models\TeachingUnit::UE_NAMES[$ue->name] ?? $ue->name}}</td>
                            <td>{{$ue->credit}}</td>
                            <td>{{$ue->name}}</td>
                            <td>{{$ue->credit}}</td>

                            <td><strong> {{ rtrim(rtrim(number_format((is_null($note->moy_catch_up) ? $note->moy_ecu : $note->moy_catch_up), 3, '.', ''), '0'), '.') }} </strong></td>
                            <td><strong> {{ rtrim(rtrim(number_format((is_null($note->moy_catch_up) ? $note->moy_ecu : $note->moy_catch_up), 3, '.', ''), '0'), '.') }}</strong></td>
                            <td>{{$note?->freq_catch_up}}</td>
                            <td><strong>{{App\Models\Note::getAppreciation($note?->moy_ecu)}}</strong></td>
                        </tr>
                    @else
                        @php
                            $ecues_count = App\Models\ElementTeachingUnit::where('teaching_unit_id', $ue->id)->count();

                            $ecue_first = App\Models\ElementTeachingUnit::where('teaching_unit_id', $ue->id)->first();

                            $ecues_without_first = App\Models\ElementTeachingUnit::where('teaching_unit_id', $ue->id)->get()->except($ecue_first->id);

                            $ecuesId = App\Models\ElementTeachingUnit::where('teaching_unit_id', $ue->id)->pluck('id');
                            $notes = App\Models\Note::where('student_id', $studentId)->whereIn('element_teaching_unit_id', $ecuesId)->get();

                            // $moy_ue = $notes->sum('moy_ecu') / $ecues_count;

                            $moy_ue = $notes->sum(function ($note) {
                                return $note->moy_catch_up !== null ? $note->moy_catch_up : $note->moy_ecu;
                            }) / $ecues_count;


                            $moy_generale += $moy_ue;

                            if($moy_ue >= 12){

                                $credit_validés += $ue->credit;
                            }else{
                                $credit_non_validés += $ue->credit;
                            }

                        @endphp

                        <tr>
                            <td rowspan="{{$ecues_count}}" >{{App\Models\TeachingUnit::UE_NAMES[$ue->name] ?? $ue->name}}</td>
                            <td rowspan="{{$ecues_count}}" >{{$ue->credit}}</td>
                            <td>{{$ecue_first->name}}</td>
                            <td>{{$ecue_first->credit}}</td>
                            <td><strong>
                                {{ rtrim(rtrim(number_format(is_null((App\Models\ElementTeachingUnit::getNote($ecue_first->id, $studentId)?->moy_catch_up)) ? (App\Models\ElementTeachingUnit::getNote($ecue_first->id, $studentId)?->moy_ecu) : (App\Models\ElementTeachingUnit::getNote($ecue_first->id, $studentId)?->moy_catch_up), 3, '.', ''), '0'), '.') }}
                            </strong></td>
                            <td rowspan="{{$ecues_count}}"><strong>  {{ rtrim(rtrim(number_format($moy_ue, 3, '.', ''), '0'), '.') }} </strong></td>
                            <td>{{$note?->freq_catch_up}}</td>
                            <td rowspan="{{$ecues_count}}"><strong>{{App\Models\Note::getAppreciation($moy_ue)}}</strong> </td>
                        </tr>
                        @foreach ($ecues_without_first as $ecue)
                            <tr>
                                @php
                                    $note = App\Models\Note::where('student_id', $studentId)->where('element_teaching_unit_id', $ecue->id)->first();
                                @endphp

                                <td>{{$ecue->name}}</td>
                                <td>{{$ecue->credit}}</td>
                                <td><strong>{{ rtrim(rtrim(number_format( is_null($note->moy_catch_up) ? $note?->moy_ecu : $note->moy_catch_up, 3, '.', ''), '0'), '.') }}</strong></td>
                                <td>{{$note?->freq_catch_up}}</td>
                            </tr>
                        @endforeach
                    @endif
                @endforeach


            </tbody>
        </table>
    </main>
    <header>
        <br>
        <strong>BILAN DU SEMESTRE</strong>
    </header>
    <main>
        <section class="informations">
            <ul>
                <li id="credits-valides" > <strong>Moyenne générale</strong> : <strong>{{ number_format(($moy_generale / $count_ues), 2, '.', '');  }}</strong> </li>
                <li id="moyenne">Nombre de crédits validés : <strong>{{$credit_validés}}</strong> </li>
                <li id="credits-non-valides">Nombre de crédits non validés : <strong>{{$credit_non_validés}}</strong> </li>
                <br>
                <li id="credits-valides" > <strong>Total d'heures d'abscence annuel</strong> : <strong>{{ $student->total_hours_absence  }}</strong> </li>
                <li id="moyenne">Total d'heures d'abscence excusées : <strong>{{$student->total_hours_excused_absence }}</strong> </li>
                <li id="credits-non-valides">Total d'heures d'abscence non excusés : <strong>{{$student->total_hours_unexcused_absence }}</strong> </li>
                <br>
                <li>Appréciation : <span id="credits-non-valides"><strong>{{App\Models\Note::getAppreciation(($moy_generale / $count_ues))}}</strong></span></li>
            </ul>
        </section>
        <section class="appreciation">
            @php
            $jour = getdate();
            $semaine = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
            $mois = array(1=>"janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre");

            // Avec getdate()
            $date = $jour['mday'] . " " . $mois[$jour['mon']] . " " . $jour['year'];
            @endphp

            <p>Cotonou, le <strong>{{ $date }}</strong></p>
            <p id="appreciation-texte" style="margin-bottom: 130px;"></p>

            <p><strong>Abdou-Rahmann AGUEMON</strong></p>
            <p style="margin-bottom: 20px;" >Directeur Académique <span id="date"></span></p>
            <p><span id="directeur-academique"></span></p>
        </section>

    </main>


</body>
</html>
