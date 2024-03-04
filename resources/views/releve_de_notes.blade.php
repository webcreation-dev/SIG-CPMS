<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relevé de notes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <div class="row">
        <div class="column left">
            <img src="logo.png" alt="">
        </div>
        <div class="column middle">
            <p style="text-align: center;"><strong>CYCLE PREPARATOIRE Ste MARIE STELLA</strong></p>
            <p style="text-align: center;">10 BP 1092 Cotonou Tél: 62 72 10 72</p>
            <p style="text-align: center;">Email: <span style="text-decoration: underline;">contact@cpms.education</span> - <strong>Bénin</strong> </p>
        </div>
        <div class="column right">
            <img src="junia.png" style="width: 100px; height:150px; margin-left: 35px; transform:translateY(-25px);" alt="">
        </div>
    </div>

    <div class="row">
        <div class="column left">
        </div>
        <div class="column middle">
            <p style="text-align: right;"><strong>Année Académique: 2023-2024</strong></p>
            <p style="text-align: center;"><strong>RELEVE DE NOTES DU 1er SEMESTRE</strong></p>
        </div>
        <div class="column right">
        </div>
    </div>

    <strong style="text-decoration: underline;text-align: start; margin-bottom:190px !important;" >Nom et Prénoms (s)</strong> <strong>:</strong> <br> <br>
    <strong style="text-decoration: underline;text-align: start;" >Date et Lieu de naissance</strong> <strong>:</strong> <br> <br>
    <strong style="text-decoration: underline;text-align: start;" >Sexe</strong> <strong>:</strong>

    <br><br>
    <main>
        <table>
            <thead>
                <tr>
                    <th>Unités d'Enseignement UE </th>
                    <th>Crédits 60 </th>
                    <th>Elements Constitutifs d'UE (ECUE) </th>
                    <th>Crédits 60</th>
                    <th>Moy ECUE </th>
                    <th> Moy UE </th>
                    <th>Fréq</th>
                    <th>App</th>
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
                            <td>{{$ue->name}}</td>
                            <td>{{$ue->credit}}</td>
                            <td>{{$ue->name}}</td>
                            <td>{{$ue->credit}}</td>
                            <td>{{$note->moy_ecu}}</td>
                            <td>{{$note->moy_ecu}}</td>
                            <td></td>
                            <td></td>
                        </tr>
                    @else
                        @php
                            $ecues_count = App\Models\ElementTeachingUnit::where('teaching_unit_id', $ue->id)->count();

                            $ecue_first = App\Models\ElementTeachingUnit::where('teaching_unit_id', $ue->id)->first();

                            $ecues_without_first = App\Models\ElementTeachingUnit::where('teaching_unit_id', $ue->id)->get()->except($ecue_first->id);

                            $ecuesId = App\Models\ElementTeachingUnit::where('teaching_unit_id', $ue->id)->pluck('id');
                            $notes = App\Models\Note::where('student_id', $studentId)->whereIn('element_teaching_unit_id', $ecuesId)->get();
                            // get sum column moy_ecu
                            $moy_ecu_sum = $notes->sum('moy_ecu');

                        @endphp

                        <tr>
                            <td rowspan="{{$ecues_count}}" >{{$ue->name}}</td>
                            <td rowspan="{{$ecues_count}}" >{{$ue->credit}}</td>
                            <td>{{$ecue_first->name}}</td>
                            <td>{{$ecue_first->credit}}</td>
                            <td>{{App\Models\ElementTeachingUnit::getNote($ecue_first->id)->moy_ecu}}</td>
                            <td rowspan="{{$ecues_count}}">{{$moy_ecu_sum}}</td>
                            <td></td>
                            <td rowspan="{{$ecues_count}}"></td>
                        </tr>
                        @foreach ($ecues_without_first as $ecue)
                            <tr>
                                @php
                                    $note = App\Models\Note::where('student_id', $studentId)->where('element_teaching_unit_id', $ecue->id)->first();
                                @endphp

                                <td>{{$ecue->name}}</td>
                                <td>{{$ecue->credit}}</td>
                                <td>{{$note->moy_ecu}}</td>
                                <td></td>
                            </tr>
                        @endforeach
                    @endif
                @endforeach

                {{-- -------------------------------------------------------- --}}
                {{-- Unique --}}
                {{-- <tr>
                    <td>{{$student->lastname}}</td>
                    <td>6</td>
                    <td>Algèbre</td>
                    <td>6</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr> --}}
                {{-- Unique --}}
                {{-- <tr>
                    <td>Analyse 1</td>
                    <td>6</td>
                    <td>Analyse</td>
                    <td>6</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr> --}}
                {{-- Double --}}
                {{-- <tr>
                    <td rowspan="2" >Sciences Numériques et Informatique 1</td>
                    <td rowspan="2" >6</td>
                    <td>Probabilité 1</td>
                    <td>3</td>
                    <td></td>
                    <td rowspan="2"></td>
                    <td></td>
                    <td rowspan="2"></td>
                </tr>
                <tr>
                    <td>Informatique 1</td>
                    <td>3</td>
                    <td></td>
                    <td></td>
                </tr>  --}}
                {{-- Unique --}}
                {{-- <tr>
                    <td>Physique 1A</td>
                    <td>6</td>
                    <td>Physique 1A</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr> --}}
                {{-- Double --}}
                {{-- <tr>
                    <td rowspan="2" >Physique 1B</td>
                    <td rowspan="2" >7</td>
                    <td>Physique</td>
                    <td>4</td>
                    <td></td>
                    <td rowspan="2"></td>
                    <td></td>
                    <td rowspan="2"></td>
                </tr>
                <tr>
                    <td>TP Physique</td>
                    <td>3</td>
                    <td></td>
                    <td></td>
                </tr> --}}
                {{-- Double --}}
                {{-- <tr>
                    <td rowspan="2" >Chimie 1</td>
                    <td rowspan="2" >5</td>
                    <td>Chimie</td>
                    <td>3</td>
                    <td></td>
                    <td rowspan="2"></td>
                    <td></td>
                    <td rowspan="2"></td>
                </tr>
                <tr>
                    <td>TP Chimie</td>
                    <td>2</td>
                    <td></td>
                    <td></td>
                </tr> --}}
                {{-- Double --}}
                {{-- <tr>
                    <td rowspan="2" >Sciences Industrielles de l'Ingénieur 1</td>
                    <td rowspan="2" >6</td>
                    <td>Sciences Industrielles de l'Ingénieur</td>
                    <td>4</td>
                    <td></td>
                    <td rowspan="2"></td>
                    <td></td>
                    <td rowspan="2"></td>
                </tr>
                <tr>
                    <td>TP Sciences Industrielles de l'Ingénieur</td>
                    <td>2</td>
                    <td></td>
                    <td></td>
                </tr> --}}
                {{-- Triple --}}
                {{-- <tr>
                    <td rowspan="3" >Humanité 1A</td>
                    <td rowspan="3" >7</td>
                    <td>Anglais écrit</td>
                    <td>3</td>
                    <td></td>
                    <td rowspan="3"></td>
                    <td></td>
                    <td rowspan="3"></td>
                </tr>
                <tr>
                    <td>Espagnol écrit</td>
                    <td>2</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>EPS</td>
                    <td>2</td>
                    <td></td>
                    <td></td>
                </tr> --}}

                {{-- Triple --}}
                {{-- <tr>
                    <td rowspan="3" >Humanité 1B</td>
                    <td rowspan="3" >6</td>
                    <td>Oral Anglais</td>
                    <td>2</td>
                    <td></td>
                    <td rowspan="3"></td>
                    <td></td>
                    <td rowspan="3"></td>
                </tr>
                <tr>
                    <td>Oral Espagnol</td>
                    <td>2</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Projets</td>
                    <td>2</td>
                    <td></td>
                    <td></td>
                </tr> --}}

                {{-- Unique --}}
                {{-- <tr>
                    <td>Humanité 1C (Formation Humaine et Sociale)</td>
                    <td>5</td>
                    <td>Humanité 1C (Formation Humaine et Sociale)</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr> --}}

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
                <li id="credits-valides" >Moyenne générale : </li>
                <li id="moyenne">Nombre de crédits validés : </li>
                <li id="credits-non-valides">Nombre de crédits non validés : </li>
                <br>
                <li>Appréciation : <span id="credits-non-valides"></span></li>
            </ul>
        </section>
        <section class="appreciation">
            <p>Cotonou, le</p>
            <p id="appreciation-texte"></p>
        </section>
        <section class="signatures">
            <p style="margin-bottom: 20px;" >Le Directeur Académique <span id="date"></span></p>
            <strong>Abdou-Rahmann</strong>
            <p><span id="directeur-academique"></span></p>
        </section>
    </main>


</body>
</html>
