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
            <p style="text-align: center;"><strong>{{ App\Models\Classroom::SEMESTER_CLASS[$semester]}}  &nbsp;&nbsp;</strong>  <strong> &nbsp;&nbsp; Année Académique: {{$year . '-' . $nextYear}} </strong></p>
            <p style="text-align: center;"><strong>RELEVE DE NOTES DU {{ App\Models\TeachingUnit::SEMESTER_FICHE_VALUE[$semester] }} </strong></p>
        </div>
        <div class="column right">
        </div>
    </div>
                @php
                    $student = App\Models\Student::find($studentId);
                @endphp

    <p>
        <strong style="text-decoration: underline;text-align: start; transform:translateY(-10px);" >Nom et Prénoms (s)</strong> <strong style="transform:translateY(-10px)">:</strong> <span style="transform:translateY(-10px)">{{$student->lastname}} {{$student->firstname}}</span> <br>
        <strong style="text-decoration: underline;text-align: start;" >Date et Lieu de Naissance</strong> <strong>:</strong> {{date("d/m/Y", strtotime($student->birthday))}} à {{$student->birthplace}} <br>
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
                    {{-- <th>Fréq</th>
                    <th>Appr</th> --}}
                </tr>
            </thead>
            <tbody>

                @php
                    $ues = App\Models\TeachingUnit::where('type', $student->classroom->type)->where('semester', $semester)->get();

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
                            <td style="text-align: center;">{{$ue->credit}}</td>
                            <td>{{$ue->name}}</td>
                            <td style="text-align: center;">{{$ue->credit}}</td>

                            <td style="text-align: center;"><strong> {{ rtrim(rtrim(number_format((is_null($note->moy_catch_up) ? $note->moy_ecu : $note->moy_catch_up), 2, '.', ''), '0'), '.') }} </strong></td>
                            <td style="text-align: center;"><strong> {{ rtrim(rtrim(number_format((is_null($note->moy_catch_up) ? $note->moy_ecu : $note->moy_catch_up), 2, '.', ''), '0'), '.') }}</strong></td>
                            {{-- <td style="text-align: center;">{{$note?->freq_catch_up}}</td> --}}
                            {{-- <td style="text-align: center;"><strong>{{App\Models\Note::getAppreciation((is_null($note->moy_catch_up) ? $note->moy_ecu : $note->moy_catch_up))}}</strong></td> --}}
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
                            <td style="text-align: center;" rowspan="{{$ecues_count}}" >{{$ue->credit}}</td>
                            <td>{{$ecue_first->name}}</td>
                            <td style="text-align: center;">{{$ecue_first->credit}}</td>
                            <td style="text-align: center;"><strong>
                                {{ rtrim(rtrim(number_format(is_null((App\Models\ElementTeachingUnit::getNote($ecue_first->id, $studentId)?->moy_catch_up)) ? (App\Models\ElementTeachingUnit::getNote($ecue_first->id, $studentId)?->moy_ecu) : (App\Models\ElementTeachingUnit::getNote($ecue_first->id, $studentId)?->moy_catch_up), 2, '.', ''), '0'), '.') }}
                            </strong></td>
                            <td style="text-align: center;" rowspan="{{$ecues_count}}"><strong>  {{ rtrim(rtrim(number_format($moy_ue, 2, '.', ''), '0'), '.') }} </strong></td>
                            {{-- <td style="text-align: center;">{{$note?->freq_catch_up}}</td> --}}
                            {{-- <td style="text-align: center;" rowspan="{{$ecues_count}}"><strong>{{App\Models\Note::getAppreciation($moy_ue)}}</strong> </td> --}}
                        </tr>
                        @foreach ($ecues_without_first as $ecue)
                            <tr>
                                @php
                                    $note = App\Models\Note::where('student_id', $studentId)->where('element_teaching_unit_id', $ecue->id)->first();
                                @endphp

                                <td>{{$ecue->name}}</td>
                                <td style="text-align: center;" >{{$ecue->credit}}</td>
                                <td style="text-align: center;" ><strong>{{ rtrim(rtrim(number_format( is_null($note->moy_catch_up) ? $note?->moy_ecu : $note->moy_catch_up, 2, '.', ''), '0'), '.') }}</strong></td>
                                {{-- <td style="text-align: center;" >{{$note?->freq_catch_up}}</td> --}}
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
                @php
                    // Chargement de la configuration
                    $validation_config = config('validation');
                    
                    // Détermination du niveau (Prepa 1 ou Prepa 2)
                    $prep_level = in_array($semester, ['semester1', 'semester2']) ? 'prepa1' : 'prepa2';
                    $thresholds = $validation_config['thresholds'][$prep_level];
                    
                    // Récupération des UEs scientifiques pour le semestre
                    $scientific_ues_names = $validation_config['scientific_ues'][$semester] ?? [];
                    // Normalisation des noms pour comparaison
                    $scientific_ues_names = array_map('trim', $scientific_ues_names);

                    // Calcul de la moyenne générale
                    $moyenne_generale_finale = ($count_ues > 0) ? ($moy_generale / $count_ues) : 0;
                    
                    // Vérification de la condition scientifique (Chaque UE scientifique doit avoir au moins min_scientifique)
                    $scientific_condition_met = true;
                    
                    // Récupération de toutes les UEs du semestre (déjà récupéré dans $ues en haut)
                    foreach ($ues as $ue) {
                        // Si l'UE est dans la liste des scientifiques
                        if (in_array(trim($ue->name), $scientific_ues_names)) {
                            // Récupérer la note finale de l'UE
                            if ($ue->status == 'singular') {
                                $note = App\Models\Note::where('student_id', $studentId)->where('teaching_unit_id', $ue->id)->first();
                                $note_val = is_null($note->moy_catch_up) ? $note->moy_ecu : $note->moy_catch_up;
                            } else {
                                // Pour les UE multiples, on recalcule la moyenne UE
                                $ecues_count = App\Models\ElementTeachingUnit::where('teaching_unit_id', $ue->id)->count();
                                $ecuesId = App\Models\ElementTeachingUnit::where('teaching_unit_id', $ue->id)->pluck('id');
                                $notes_ue = App\Models\Note::where('student_id', $studentId)->whereIn('element_teaching_unit_id', $ecuesId)->get();
                                $note_val = $notes_ue->sum(function ($n) {
                                    return $n->moy_catch_up !== null ? $n->moy_catch_up : $n->moy_ecu;
                                }) / ($ecues_count > 0 ? $ecues_count : 1);
                            }
                            
                            // Vérification du seuil
                            if ($note_val < $thresholds['min_scientifique']) {
                                $scientific_condition_met = false;
                            }
                        }
                    }

                    // Détermination du status final
                    $is_validated = ($moyenne_generale_finale >= $thresholds['moyenne_generale']) && $scientific_condition_met;
                    
                    $appreciation = $is_validated ? "Validé" : "Non Validé";
                @endphp

                <li id="credits-valides" > <strong>Moyenne générale</strong> : <strong>{{ number_format($moyenne_generale_finale, 2, '.', '');  }}</strong> </li>
                {{-- <li id="moyenne">Nombre de crédits validés : <strong>{{$credit_validés}}</strong> </li> --}}
                {{-- <li id="credits-non-valides">Nombre de crédits non validés : <strong>{{$credit_non_validés}}</strong> </li> --}}
                <br>
                
                <li>Appréciation : <span id="credits-non-valides"><strong>{{ $appreciation }}</strong></span></li>
            </ul>
        </section>

        <section class="appreciation" style="transform: translateX(50)">
            @php
            $jour = getdate();
            $semaine = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
            $mois = array(1=>"janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre");

            // Avec getdate()
            $date = $jour['mday'] . " " . $mois[$jour['mon']] . " " . $jour['year'];
            @endphp

            <p>Cotonou, le <strong>{{ $date }}</strong></p>

            @if($signed)
                <div style="display: flex; justify-content: space-between;">
                    <img src="signature_da.png" alt="Signature du Directeur Académique" style="max-width: 175px;">
                    <img src="cachet_CPMS.png" alt="Cachet" style="max-width: 175px; margin-left: -30px;">
                    </div>
                <strong>Abdou-Rahmann AGUEMON</strong>
                <br>
                Directeur Académique
            @else
                <p id="appreciation-texte" style="margin-bottom: 130px;"></p>

                <p><strong>Abdou-Rahmann AGUEMON</strong></p>
                <p style="margin-bottom: 20px;" >Directeur Académique <span id="date"></span></p>
                <p><span id="directeur-academique"></span></p>
            @endif

        </section>

    </main>


</body>
</html>
