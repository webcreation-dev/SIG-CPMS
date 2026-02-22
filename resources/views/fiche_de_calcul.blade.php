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
                    $ues = App\Models\TeachingUnit::where('type', $student->classroom->type)->where('semester', $semester)->get();
                    $count_ues = count($ues);
                    $moy_generale = 0;

                    // Charger la configuration
                    $validation_config = config('validation');
                    
                    // Déterminer le type de prépa
                    $prep_type = in_array($semester, ['semester1', 'semester2']) ? 'prepa1' : 'prepa2';
                    $thresholds = $validation_config['thresholds'][$prep_type];
                    
                    $scientific_ues_names = $validation_config['scientific_ues'][$semester] ?? [];
                    $scientific_ues_names = array_map('trim', $scientific_ues_names);

                    // --- PREMIER PASSAGE : Calcul de la MG pour définir l'appréciation par UE ---
                    $moy_generale_preview = 0;
                    foreach ($ues as $ue) {
                        if($ue->status == 'singular') {
                            $n = App\Models\Note::where('student_id', $studentId)->where('teaching_unit_id', $ue->id)->first();
                            $moy_generale_preview += is_null($n->moy_catch_up) ? $n->moy_ecu : $n->moy_catch_up;
                        } else {
                            $e_ids = App\Models\ElementTeachingUnit::where('teaching_unit_id', $ue->id)->pluck('id');
                            $ns = App\Models\Note::where('student_id', $studentId)->whereIn('element_teaching_unit_id', $e_ids)->get();
                            $c = $e_ids->count();
                            $moy_generale_preview += $ns->sum(function ($x) { return $x->moy_catch_up !== null ? $x->moy_catch_up : $x->moy_ecu; }) / ($c ?: 1);
                        }
                    }
                    $moyenne_generale_finale = ($count_ues > 0) ? ($moy_generale_preview / $count_ues) : 0;

                    if (!function_exists('getUeAppreciation')) {
                        function getUeAppreciation($moy_ue, $moy_gen, $is_sci, $min_sci) {
                            if ($moy_gen < 12) {
                                return ($moy_ue >= 12) ? 'Validé' : 'Non Validé';
                            } else {
                                if ($is_sci) {
                                    return ($moy_ue >= $min_sci) ? 'Validé' : 'Non Validé';
                                }
                                return 'Validé';
                            }
                        }
                    }
                @endphp

            @foreach ($ues as $ue)
                @if($ue->status == 'singular')

                    @php
                        $note = App\Models\Note::where('student_id', $studentId)->where('teaching_unit_id', $ue->id)->first();

                        $moy_ue_final = is_null($note->moy_catch_up) ? $note->moy_ecu : $note->moy_catch_up;
                        $moy_generale += $moy_ue_final;
                        
                        $is_sci = in_array(trim($ue->name), $scientific_ues_names);
                        $appreciation = getUeAppreciation($moy_ue_final, $moyenne_generale_finale, $is_sci, $thresholds['min_scientifique']);
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
                        <td><strong>{{ rtrim(rtrim(number_format($moy_ue_final, 2, '.', ''), '0'), '.') }}</strong></td>
                        <td><strong>{{ $appreciation }}</strong></td>
                        </tr>

                @else
                
                    @php
                        $ecues_count = App\Models\ElementTeachingUnit::where('teaching_unit_id', $ue->id)->count();

                        $ecues = App\Models\ElementTeachingUnit::where('teaching_unit_id', $ue->id)->get();

                        $ecuesId = App\Models\ElementTeachingUnit::where('teaching_unit_id', $ue->id)->pluck('id');
                        $notes = App\Models\Note::where('student_id', $studentId)->whereIn('element_teaching_unit_id', $ecuesId)->get();

                        $moy_ue = $notes->sum(function ($note) {
                            return $note->moy_catch_up !== null ? $note->moy_catch_up : $note->moy_ecu;
                        }) / ($ecues_count ?: 1);

                        $moy_generale += $moy_ue;
                        
                        $is_sci = in_array(trim($ue->name), $scientific_ues_names);
                        $appreciation = getUeAppreciation($moy_ue, $moyenne_generale_finale, $is_sci, $thresholds['min_scientifique']);

                    @endphp

                    <tr>
                        <td style="background-color: #ccc; "><strong>{{$ue->name}}</strong></td>
                        <td style="background-color: #ccc; ">{{$ue->credit}}</td>

                        <td colspan="9"></td>

                        <td rowspan="{{$ecues_count + 1}}" style="vertical-align: top; "><strong>{{ rtrim(rtrim(number_format($moy_ue, 2, '.', ''), '0'), '.') }}</strong></td>
                        <td rowspan="{{$ecues_count + 1}}" ><strong>{{ $appreciation }}</strong></td>
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

            @php
                // Moyenne générale déjà calculée, on la récupère ($moyenne_generale_finale)
                
                // --- Logique de validation CPMS globale pour le semestre ---
                
                // 1. Validation de la Moyenne Générale
                $moyenne_generale_valid = $moyenne_generale_finale >= $thresholds['moyenne_generale'];

                // 2. Validation des UEs Scientifiques (Chaque UE doit être >= min_scientifique)
                $scientific_condition_met = true;
                
                 foreach ($ues as $ue) {
                    // Ignorer si pas scientifique
                    if (!in_array(trim($ue->name), array_map('trim', $scientific_ues_names))) {
                        continue;
                    }

                    // Calcul Note UE
                    if ($ue->status == 'singular') {
                        $n = App\Models\Note::where('student_id', $studentId)->where('teaching_unit_id', $ue->id)->first();
                        $val = is_null($n->moy_catch_up) ? $n->moy_ecu : $n->moy_catch_up;
                    } else {
                         $e_ids = App\Models\ElementTeachingUnit::where('teaching_unit_id', $ue->id)->pluck('id');
                         $ns = App\Models\Note::where('student_id', $studentId)->whereIn('element_teaching_unit_id', $e_ids)->get();
                         $count = $e_ids->count();
                         $val = $ns->sum(function ($x) { return $x->moy_catch_up ?? $x->moy_ecu; }) / ($count?:1);
                    }
                    
                    // Vérif seuil min_scientifique
                    if ($val < $thresholds['min_scientifique']) {
                        $scientific_condition_met = false;
                        break; 
                    }
                }

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
                        @if(!$moyenne_generale_valid)
                            <br><small>(MG < {{ $thresholds['moyenne_generale'] }})</small>
                        @endif
                        @if(!$scientific_condition_met)
                            <br><small>(UE Sci < {{ $thresholds['min_scientifique'] }})</small>
                        @endif
                    @endif
                </strong></td>
            </tr>

            </tbody>
        </table>
    </main>

</body>
</html>
