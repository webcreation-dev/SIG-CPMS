<!DOCTYPE html>
<html lang="fr"><head><meta charset="UTF-8"><title>Simulation - Fiche de calcul de moyennes</title>
<style>
@page { margin: 24px; }
body { font-family: DejaVu Sans, sans-serif; font-size: 10px; }
h3, .heading { text-align: center; }
table { border-collapse: collapse; width: 100%; }
th, td { border: 1px solid black; padding: 5px; text-align: center; }
thead { display: table-header-group; } tr { page-break-inside: avoid; }
.name { text-align: left; } .note { font-size: 9px; } .total { font-weight: bold; }
</style></head><body>
<h3>CPMS / FICHE DE CALCUL DE MOYENNES - {{ App\Models\TeachingUnit::SEMESTER_FICHE_VALUE[$semester] }}</h3>
<p class="heading">{{ in_array($semester, ['semester1', 'semester2']) ? 'Prépa 1' : 'Prépa 2' }} / {{ $year }}-{{ $year + 1 }}</p>
<p class="heading"><strong>SIMULATION - DONNÉES FICTIVES</strong></p>
<table><thead>
<tr><th colspan="13">Étudiant fictif - aucun dossier étudiant associé</th></tr>
<tr><th rowspan="2">Unités d'Enseignement UE</th><th rowspan="2">Crédits</th><th colspan="3">Interrogations</th><th colspan="3">Devoirs Surveillés</th><th rowspan="2">Exam<br>(50%)</th><th colspan="3">Moy/20</th><th rowspan="2">Appr</th></tr>
<tr><th>I1</th><th>I2</th><th>Moy Inter<br>(20%)</th><th>D1</th><th>D2</th><th>Moy Dev<br>(30%)</th><th>M/ECU</th><th>Rattrap.</th><th>M/UE</th></tr>
</thead><tbody>
@foreach($catalog as $unit)
@php($detail = $result['details'][$unit->id])
@if($unit->status === 'multiple' && $unit->usesWeightedAverage($year))
@foreach($unit->elementTeachingUnits as $ecue)
<tr>
@if($loop->first)<td class="name" rowspan="{{ $unit->elementTeachingUnits->count() }}">{{ $unit->name }}<br><span class="note">{{ $detail['formula'] }}</span></td>@endif
<td>{{ $ecue->credit }}</td><td colspan="7" class="name">{{ $ecue->name }}</td><td>{{ number_format($scores['ecue'][$ecue->id], 2, ',', '') }}</td><td>-</td>
@if($loop->first)<td rowspan="{{ $unit->elementTeachingUnits->count() }}">{{ number_format($detail['average'], 2, ',', '') }}</td><td rowspan="{{ $unit->elementTeachingUnits->count() }}">{{ $detail['appreciation'] }}</td>@endif
</tr>
@endforeach
@else
<tr><td class="name">{{ $unit->name }}</td><td>{{ $unit->credit }}</td>@for($i=0;$i<7;$i++)<td>-</td>@endfor<td>-</td><td>-</td><td>{{ number_format($detail['average'], 2, ',', '') }}</td><td>{{ $detail['appreciation'] }}</td></tr>
@endif
@endforeach
<tr class="total"><td colspan="11" class="name">MOYENNE GÉNÉRALE</td><td>{{ number_format($result['average'], 2, ',', '') }}</td><td>{{ $result['validated'] ? 'Validé' : 'Non Validé' }}</td></tr>
</tbody></table>
<p><strong>Règles : {{ $result['version'] === 'historique' ? 'historiques' : $result['version'] }}</strong></p>
@foreach($result['reasons'] as $reason)<p>{{ $reason }}</p>@endforeach
<p class="note">Les moyennes finales sont celles saisies dans le simulateur. Les notes détaillées d’interrogations, devoirs, examen et rattrapage ne sont pas renseignées. Pour les UE composées autres qu’Humanité C pondérée, seule la moyenne d’UE est simulée. Aucun étudiant et aucune note ne sont enregistrés.</p>
</body></html>
