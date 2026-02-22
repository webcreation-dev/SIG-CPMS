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
            <p style="text-align: center;"><strong> <span >CPMS /</span> FICHE DE CALCUL DE MOYENNES - {{ App\Models\TeachingUnit::SEMESTER_FICHE_VALUE[$semester] }}</strong></p>
            <p style="text-align: center;"> {{ App\Models\Classroom::TYPES_VALUES[$type_classroom] }}  / {{$year . '-' . $nextYear}} </p>
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
                    // OPTIMISATION DES REQUETES BDD (N+1 Queries fix)
                    $ues = App\Models\TeachingUnit::with('elementTeachingUnits')->where('type', $student->classroom->type)->where('semester', $semester)->get();
                    $all_notes = App\Models\Note::where('student_id', $studentId)->get();
                    
                    // Indexation pour accès instantané (O(1)) au lieu de multiples requêtes BDD (N+1 limitant)
                    $notes_by_ue = $all_notes->whereNotNull('teaching_unit_id')->keyBy('teaching_unit_id');
                    $notes_by_ecue = $all_notes->whereNotNull('element_teaching_unit_id')->keyBy('element_teaching_unit_id');

                    $count_ues = count($ues);
                    $moy_generale = 0;
                    $scientific_condition_met = true;

                    // Configuration Validation
                    $validation_config = config('validation');
                    $prep_type = in_array($semester, ['semester1', 'semester2']) ? 'prepa1' : 'prepa2';
                    $thresholds = $validation_config['thresholds'][$prep_type];
                    $scientific_ues_names = array_map('trim', $validation_config['scientific_ues'][$semester] ?? []);
                @endphp

            @foreach ($ues as $ue)
                @php
                    $is_scientific = in_array(trim($ue->name), $scientific_ues_names);
                    $moy_ue_final = 0;
                @endphp

                @if($ue->status == 'singular')

                    @php
                        $note = $notes_by_ue->get($ue->id);
                        $moy_ue_final = $note ? (is_null($note->moy_catch_up) ? $note->moy_ecu : $note->moy_catch_up) : 0;
                        $moy_generale += $moy_ue_final;
                        
                        // Vérification CPMS (Seuil Min par UE Scientifique)
                        if ($is_scientific && $moy_ue_final < $thresholds['min_scientifique']) {
                            $scientific_condition_met = false;
                        }
                    @endphp

                   <tr>
                        <td style="background-color: #ccc;"><strong>{{$ue->name}}</strong></td>
                         <td style="background-color: #ccc;">{{$ue->credit}}</td>
                        <td>{{$note?->i1_points}}</td>
                        <td>{{$note?->i2_points}}</td>
                        <td><strong>{{ is_null($note?->moy_inter) ? '' : number_format($note?->moy_inter, 2, '.', '');  }} </strong></td>
                        <td>{{$note?->d1_points}}</td>
                        <td>{{$note?->d2_points}}</td>
                        <td><strong>{{ is_null($note?->moy_dev) ? '' : number_format($note?->moy_dev, 2, '.', '');  }}</strong></td>
                        <td>{{$note?->e_points}}</td>
                        <td><strong>{{ is_null($note?->moy_ecu) ? '' : rtrim(rtrim(number_format($note?->moy_ecu, 2, '.', ''), '0'), '.') }}</strong></td>
                        <td><strong>{{ is_null($note?->moy_catch_up) ? '' : rtrim(rtrim(number_format($note?->moy_catch_up, 2, '.', ''), '0'), '.') }}</strong></td>
                        <td><strong>{{ rtrim(rtrim(number_format($moy_ue_final, 2, '.', ''), '0'), '.') }}</strong></td>
                        <td><strong>
                                @if($moy_ue_final >= 12)
                                    Validé
                                @else
                                    Non Validé
                                @endif
                            </strong></td>
                        </tr>

                @else
                
                    @php
                        $ecues = $ue->elementTeachingUnits;
                        $ecues_count = $ecues->count() ?: 1;

                        $sum_ue = 0;
                        foreach($ecues as $ecue) {
                            $n = $notes_by_ecue->get($ecue->id);
                            $sum_ue += $n ? ($n->moy_catch_up !== null ? $n->moy_catch_up : $n->moy_ecu) : 0;
                        }
                        
                        $moy_ue_final = $sum_ue / $ecues_count;
                        $moy_generale += $moy_ue_final;
                        
                        // Vérification CPMS Scientifique
                        if ($is_scientific && $moy_ue_final < $thresholds['min_scientifique']) {
                            $scientific_condition_met = false;
                        }
                    @endphp

                    <tr>
                        <td style="background-color: #ccc; "><strong>{{$ue->name}}</strong></td>
                        <td style="background-color: #ccc; ">{{$ue->credit}}</td>

                        <td colspan="9"></td>

                        <td rowspan="{{$ecues_count + 1}}" style="vertical-align: top; "><strong>{{ rtrim(rtrim(number_format($moy_ue_final, 2, '.', ''), '0'), '.') }}</strong></td>
                        <td rowspan="{{$ecues_count + 1}}" ><strong>
                            @if($moy_ue_final >= 12)
                                Validé
                            @else
                                Non Validé
                            @endif
                        </strong></td>
                    </tr>
                    @foreach ($ecues as $ecue)
                                @php
                                    $note = $notes_by_ecue->get($ecue->id);
                                @endphp
                        <tr>
                            <td>{{$ecue->name}}</td>
                            <td>{{$ecue->credit}}</td>
                            <td>{{$note?->i1_points}}</td>
                            <td>{{$note?->i2_points}}</td>
                            <td><strong>{{ is_null($note?->moy_inter) ? '' : number_format($note?->moy_inter, 2, '.', '');  }}</strong></td>
                            <td>{{$note?->d1_points}}</td>
                            <td>{{$note?->d2_points}}</td>
                            <td><strong>{{ is_null($note?->moy_dev) ? '' : number_format($note?->moy_dev, 2, '.', '');  }}</strong></td>
                            <td>{{$note?->e_points}}</td>
                            <td><strong>{{ is_null($note?->moy_ecu) ? '' : rtrim(rtrim(number_format($note?->moy_ecu, 2, '.', ''), '0'), '.') }}</strong></td>
                            <td><strong>{{ is_null($note?->moy_catch_up) ? '' : rtrim(rtrim(number_format($note?->moy_catch_up, 2, '.', ''), '0'), '.') }}</strong></td>
                        </tr>
                    @endforeach

                @endif
            @endforeach

            @php
                // Calcul de la moyenne générale
                $moyenne_generale_finale = $count_ues > 0 ? $moy_generale / $count_ues : 0;
                
                // --- Logique de validation CPMS ---
                $moyenne_generale_valid = $moyenne_generale_finale >= $thresholds['moyenne_generale'];
                $semestre_valide = $moyenne_generale_valid && $scientific_condition_met;
            @endphp
 
            <tr>
                <td style="background-color: #ccc;" colspan="11"><strong>Moyenne générale :</strong></td>
                <td style="background-color: #ccc;"><strong>{{ number_format($moyenne_generale_finale, 2, '.', ''); }}</strong></td>
                <td style="background-color: #ccc;"><strong>
                    @if($semestre_valide)
                        Validé
                    @else
                        Non Validé
                    @endif
                </strong></td>
            </tr>
            </tbody>
        </table>
    </main>

</body>
</html>
