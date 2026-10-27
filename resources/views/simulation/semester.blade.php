<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>Simulateur de semestre · CPMS</title>
<style>
:root{font-family:Arial,sans-serif;color:#203047;background:#f3f6fa;font-size:15px}*{box-sizing:border-box}body{margin:0}.wrap{max-width:1300px;margin:auto;padding:30px 24px}header{display:flex;justify-content:space-between;align-items:start;gap:20px}h1{margin:6px 0 12px;font-size:30px}h2{font-size:19px;margin:0 0 14px}p{line-height:1.55}.muted{color:#607089}.eyebrow{color:#256755;font-weight:bold;font-size:13px}a{color:#1c6454}button,.button{border:0;border-radius:8px;padding:11px 16px;cursor:pointer;background:#1b6554;color:white;font-weight:bold;font-size:14px}.secondary{background:#e8eef4;color:#28445c}.card{background:white;border:1px solid #dae3ec;border-radius:13px;padding:22px;margin-top:20px}.selectors{display:flex;gap:18px;flex-wrap:wrap;align-items:end}.field label{display:block;font-weight:bold;margin-bottom:8px}select,input{border:1px solid #bccbdb;border-radius:7px;padding:10px;font:inherit;background:white;color:#203047}input[type=number]{width:94px}input:focus,select:focus,button:focus-visible{outline:3px solid #8ed0bd;outline-offset:2px}.grid{display:grid;grid-template-columns:minmax(0,1fr) 310px;gap:20px;align-items:start}.grid > *{min-width:0}.summary{position:sticky;top:18px}.summary .mean{font-size:38px;font-weight:bold;margin:14px 0}.tag{font-size:12px;display:inline-block;padding:5px 8px;background:#edf2f7;border-radius:5px}.sci{background:#e8effb;color:#234e94}.yes{background:#e3f4eb;color:#16623d}.no{background:#fdece8;color:#9c342c}.status{display:inline-block;padding:7px 10px;border-radius:6px;font-weight:bold;font-size:13px}.table-wrap{overflow-x:auto}table{border-collapse:collapse;width:100%;min-width:650px}th{text-align:left;color:#607089;font-size:12px;padding:12px 10px;border-bottom:2px solid #e3eaf1}td{padding:16px 10px;border-bottom:1px solid #e3eaf1;vertical-align:top}td:first-child{width:30%}.unit-name{display:block;font-weight:bold;margin-bottom:7px}.ecue{display:flex;align-items:center;gap:10px;margin-bottom:9px}.ecue label{flex:1;min-width:110px}.ecue small{display:block;color:#607089;margin-top:3px}.formula{font-size:12px;color:#52657a;margin-top:8px;line-height:1.5}.average{font-weight:bold;font-size:18px;white-space:nowrap}.samples{display:flex;gap:8px;flex-wrap:wrap;margin:12px 0}.samples button{background:#eef3f8;color:#29465a;font-size:12px;padding:9px 11px}.samples button:disabled{opacity:.4;cursor:default}.notice{background:#e8f4ef;border-left:4px solid #278568;padding:13px 16px;border-radius:6px;line-height:1.6;margin-top:20px}.error{padding:14px;background:#fdece8;color:#9c342c;border-radius:7px;margin-top:15px}#reasons{padding-left:20px;line-height:1.6;font-size:14px}.footer-note{font-size:12px;line-height:1.6;margin-top:15px}.busy{opacity:.55}.submit{margin-top:18px} @media(max-width:980px){.grid{grid-template-columns:minmax(0,1fr)}.summary{position:static;grid-row:1}.wrap{padding:20px 14px}header{display:block}h1{font-size:25px}.card{padding:16px}}
@media(max-width:600px){table,tbody{display:block;min-width:0}thead{display:none}tbody tr{display:grid;grid-template-columns:1fr 1fr;gap:0 12px;padding:14px 0;border-bottom:1px solid #e3eaf1}td{display:block;border:0;padding:7px 0}td:first-child{width:auto;grid-column:1/-1}td:nth-child(2){grid-column:1/-1}td:nth-child(3):before{content:"Moyenne UE /20";display:block;color:#607089;font-size:12px;margin-bottom:8px}td:nth-child(4):before{content:"Appréciation";display:block;color:#607089;font-size:12px;margin-bottom:8px}.card{overflow:hidden}.summary{overflow:visible}.unit-name{display:inline;margin-right:10px}.ecue{max-width:300px}}
</style>
</head>
<body><div class="wrap">
<header><div><div class="eyebrow">CPMS · ESPACE DE TEST</div><h1>Simuler la validation d’un semestre</h1><p class="muted">Teste les moyennes, la compensation et le calcul d’Humanité C.</p></div><a href="{{ route('dashboard') }}">Retour à l’application</a></header>
<div class="notice"><strong>Données fictives uniquement.</strong> Aucun étudiant n’est sélectionné et aucune note n’est enregistrée. Le simulateur utilise les règles et le calcul d’Humanité de l’application.</div>
<section class="card">
<form class="selectors" method="GET" action="{{ route('simulation.semester') }}">
<div class="field"><label for="year">Année scolaire</label><select id="year" name="year">@for($y = 2023; $y <= max(2030, $year); $y++)<option value="{{ $y }}" @selected($y === $year)>{{ $y }}-{{ $y+1 }}</option>@endfor</select></div>
<div class="field"><label for="semester">Semestre</label><select id="semester" name="semester">@foreach(App\Models\TeachingUnit::SEMESTER_VALUES as $key => $label)<option value="{{ $key }}" @selected($key === $semester)>{{ $label }} · {{ in_array($key, ['semester1','semester2']) ? 'Prépa 1' : 'Prépa 2' }}</option>@endforeach</select></div>
<button type="submit">Charger ce semestre</button><span class="muted">Changer de semestre remet les moyennes à 12.</span>
</form>
</section>
@if($errors->any())<div class="error">{{ $errors->first() }}</div>@endif
<div class="grid">
<section class="card">
<h2>Moyennes à tester</h2><p class="muted">Saisis les moyennes finales sur 20. Pour les autres UE composées, saisis directement leur moyenne d’UE.</p>
<div class="samples" aria-label="Exemples de simulation">
<button type="button" data-example="reset">Tout à 12</button>
<button type="button" data-example="compensated">Scientifique à 10 compensée</button>
<button type="button" data-example="blocked">Une scientifique sous 10</button>
<button type="button" data-example="non-scientific">Non scientifiques sous 10</button>
<button type="button" data-example="humanities" @disabled(!$catalog->contains(fn ($u) => $u->usesWeightedAverage($year)))>Humanité : FHS 10, Conduite 20</button>
</div>
<form id="simulation-form" action="{{ route('simulation.semester.calculate') }}" method="POST">
@csrf<input type="hidden" name="year" value="{{ $year }}"><input type="hidden" name="semester" value="{{ $semester }}">
<div class="table-wrap"><table><thead><tr><th>UNITÉ D’ENSEIGNEMENT</th><th>SAISIE /20</th><th>MOYENNE UE</th><th>APPRÉCIATION</th></tr></thead><tbody>
@forelse($catalog as $unit)
@php($detail = $result['details'][$unit->id])
<tr data-unit="{{ $unit->id }}">
<td><span class="unit-name">{{ $unit->name }}</span><span class="tag {{ $detail['scientific'] ? 'sci' : '' }}">{{ $detail['scientific'] ? 'Scientifique' : 'Non scientifique' }}</span></td>
<td>
@if($unit->status === 'multiple' && $unit->usesWeightedAverage($year))
@foreach($unit->elementTeachingUnits as $ecue)
<div class="ecue"><label for="ecue-{{ $ecue->id }}">{{ $ecue->name }}<small>{{ $ecue->credit }} crédit(s)</small></label><input id="ecue-{{ $ecue->id }}" name="scores[ecue][{{ $ecue->id }}]" type="number" min="0" max="20" step="0.001" required value="{{ $scores['ecue'][$ecue->id] }}" data-scientific="{{ $detail['scientific'] ? '1' : '0' }}" data-ecue="{{ $ecue->name }}"></div>
@endforeach
@else
<label for="ue-{{ $unit->id }}" style="position:absolute;width:1px;height:1px;overflow:hidden">Moyenne de {{ $unit->name }}</label><input id="ue-{{ $unit->id }}" name="scores[ue][{{ $unit->id }}]" type="number" min="0" max="20" step="0.001" required value="{{ $scores['ue'][$unit->id] }}" data-scientific="{{ $detail['scientific'] ? '1' : '0' }}">
@endif
</td>
<td><span class="average" data-average>{{ number_format($detail['average'], 2, ',', '') }}</span><div class="formula" data-formula>{{ $detail['formula'] }}</div></td>
<td><span data-appreciation class="status {{ $detail['appreciation'] === 'Validé' ? 'yes' : 'no' }}">{{ $detail['appreciation'] }}</span></td>
</tr>
@empty<tr><td colspan="4">Aucune UE pour ce semestre.</td></tr>@endforelse
</tbody></table></div>
<button class="submit" type="submit" @disabled($catalog->isEmpty())>Calculer le résultat</button><span id="calculation-state" class="muted" role="status" style="margin-left:12px">Le résultat se met à jour à chaque modification.</span>
<div id="calculation-error" class="error" role="alert" hidden></div>
</form>
</section>
<aside class="card summary" id="summary" aria-live="polite">
<h2>Bilan du semestre</h2><span class="tag">{{ $result['version'] === 'historique' ? 'Règles historiques' : 'Règles '.$result['version'] }}</span>
<p class="muted" style="margin-bottom:0">Moyenne générale /20</p><div class="mean" id="general-average">{{ number_format($result['average'], 2, ',', '') }}</div>
<span id="general-status" class="status {{ $result['validated'] ? 'yes' : 'no' }}">{{ $result['validated'] ? 'Semestre validé' : 'Semestre non validé' }}</span>
<ul id="reasons">@foreach($result['reasons'] as $reason)<li>{{ $reason }}</li>@endforeach</ul>
@if($result['version'] !== 'historique')
<p class="footer-note">Le semestre est validé si la moyenne générale atteint <strong>{{ $result['thresholds']['moyenne_generale'] }}/20</strong> et si <strong>chaque UE scientifique</strong> atteint {{ $result['thresholds']['min_scientifique'] }}/20. Toutes les UE sont alors validées par compensation.</p>
<p class="footer-note">Sinon, seules les UE à au moins 12 restent validées. Aucun minimum n’est imposé aux UE non scientifiques lorsque le semestre est validé.</p>
@else
<p class="footer-note">Anciennes règles : moyenne générale ≥ {{ $result['thresholds']['moyenne_generale'] }}, chaque UE scientifique ≥ {{ $result['thresholds']['min_scientifique'] }}, chaque UE non scientifique ≥ {{ $result['thresholds']['min_non_scientifique'] }}. Les appréciations par UE reproduisent la compensation historique.</p>
<p class="footer-note">Humanité C reste une UE unique avant 2026-2027.</p>
@endif
<p class="footer-note muted">La moyenne générale est la moyenne des UE. @if($year >= 2026)Humanité C seule utilise les crédits 4 et 1 pour ses ECUE. @endif Les seuils sont comparés avant tout arrondi d’affichage.</p>
</aside>
</div></div>
<script>
(() => {
const form = document.getElementById('simulation-form'), error = document.getElementById('calculation-error'), state = document.getElementById('calculation-state');
const summary = document.getElementById('summary'), inputs = [...form.querySelectorAll('input[type="number"]')];
const format = new Intl.NumberFormat('fr-FR', {minimumFractionDigits:2, maximumFractionDigits:4});
let timer, abort, revision = 0;
function show(result) {
 document.getElementById('general-average').textContent = format.format(result.average);
 const status = document.getElementById('general-status'); status.textContent = result.validated ? 'Semestre validé' : 'Semestre non validé'; status.className = 'status '+(result.validated ? 'yes' : 'no');
 const reasons = document.getElementById('reasons'); reasons.replaceChildren();
 result.reasons.forEach(text => {const li=document.createElement('li');li.textContent=text;reasons.append(li);});
 Object.entries(result.details).forEach(([id, detail]) => {const row=form.querySelector('[data-unit="'+id+'"]'); if(!row)return;row.querySelector('[data-average]').textContent=format.format(detail.average);row.querySelector('[data-formula]').textContent=detail.formula ?? '';const tag=row.querySelector('[data-appreciation]');tag.textContent=detail.appreciation;tag.className='status '+(detail.appreciation==='Validé'?'yes':'no');});
}
async function calculate() {
 const current = ++revision; if(abort)abort.abort(); abort=new AbortController(); error.hidden=true;
 if(!form.checkValidity()){summary.classList.add('busy');state.textContent='Complète les moyennes entre 0 et 20 pour recalculer.';return;}
 state.textContent='Calcul en cours…';summary.classList.add('busy');
 try {const response=await fetch(form.action,{method:'POST',body:new FormData(form),headers:{'Accept':'application/json'},signal:abort.signal});const data=await response.json();if(current!==revision)return;if(!response.ok)throw new Error(Object.values(data.errors ?? {}).flat().join(' ') || 'Calcul indisponible. Réessaie ou recharge la page.');show(data);state.textContent='Résultat à jour.';summary.classList.remove('busy');}
 catch(e){if(e.name==='AbortError'||current!==revision)return;error.textContent=e.message;error.hidden=false;state.textContent='Le résultat affiché n’est pas à jour.';}
}
form.addEventListener('input',()=>{++revision;if(abort)abort.abort();summary.classList.add('busy');state.textContent='Modification en cours…';clearTimeout(timer);timer=setTimeout(calculate,250);});
form.addEventListener('submit',event=>{event.preventDefault();clearTimeout(timer);calculate();});
document.querySelectorAll('[data-example]').forEach(button=>button.addEventListener('click',()=>{
 const example=button.dataset.example;inputs.forEach(input=>input.value='12');
 const scientific=inputs.filter(input=>input.dataset.scientific==='1');
 if(example==='compensated'){inputs.forEach(input=>input.value=input.dataset.scientific==='1'?'12':'16');if(scientific[0])scientific[0].value='10';}
 if(example==='blocked'){inputs.forEach(input=>input.value='16');if(scientific[0])scientific[0].value='9';if(scientific[1])scientific[1].value='10';}
 if(example==='non-scientific'){inputs.forEach(input=>input.value=input.dataset.scientific==='1'?'16':'8');if(scientific[0])scientific[0].value='10';}
 if(example==='humanities'){inputs.forEach(input=>{if(input.dataset.ecue==='FHS')input.value='10';if(input.dataset.ecue==='Conduite')input.value='20';});}
 clearTimeout(timer);calculate();
}));
})();
</script>
</body></html>
