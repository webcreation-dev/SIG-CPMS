<!DOCTYPE html>
<html lang="fr">
@include('layouts.admin.head')
<body>
@include('layouts.admin.header')
@include('layouts.admin.sidebar')
<div class="themebody-wrap">
  <div class="codex-breadcrumb"><div class="breadcrumb-contain"><div class="left-breadcrumb">
    <ul class="breadcrumb mb-0"><li class="breadcrumb-item"><a href="{{ route('classrooms.index') }}"><h1>Gestion des étudiants</h1></a></li><li class="breadcrumb-item active">Simulation de semestre</li></ul>
  </div></div></div>
  <div class="theme-body"><div class="custom-container">
<div class="alert alert-info"><strong>Données fictives uniquement.</strong> Aucun étudiant n’est sélectionné et aucune note n’est enregistrée. Le simulateur utilise les règles et le calcul d’Humanité de l’application.</div>
<section class="card"><div class="card-body">
<form class="row align-items-end" method="GET" action="{{ route('simulation.semester') }}">
<div class="form-group col-md-4"><label for="year">Année scolaire</label><select class="form-control" id="year" name="year">@for($y = 2023; $y <= max(2030, $year); $y++)<option value="{{ $y }}" @selected($y === $year)>{{ $y }}-{{ $y+1 }}</option>@endfor</select></div>
<div class="form-group col-md-4"><label for="semester">Semestre</label><select class="form-control" id="semester" name="semester">@foreach(App\Models\TeachingUnit::SEMESTER_VALUES as $key => $label)<option value="{{ $key }}" @selected($key === $semester)>{{ $label }} · {{ in_array($key, ['semester1','semester2']) ? 'Prépa 1' : 'Prépa 2' }}</option>@endforeach</select></div>
<div class="form-group col-md-4"><button class="btn btn-primary" type="submit">Charger ce semestre</button></div><small class="text-muted">Changer de semestre remet les moyennes à 12.</small>
</form>
</div></section>
@if($errors->any())<div class="alert alert-danger">{{ $errors->first() }}</div>@endif
<div class="row"><div class="col-xl-9">
<section class="card"><div class="card-body">
<h4>Moyennes à tester</h4><p class="text-muted">Saisis les moyennes finales sur 20. Pour les autres UE composées, saisis directement leur moyenne d’UE.</p>
<div class="d-flex flex-wrap gap-2 mb-15" aria-label="Exemples de simulation">
<button class="btn btn-sm btn-primary" type="button" data-example="reset">Tout à 12</button>
<button class="btn btn-sm btn-primary" type="button" data-example="compensated">Scientifique à 10 compensée</button>
<button class="btn btn-sm btn-primary" type="button" data-example="blocked">Une scientifique sous 10</button>
<button class="btn btn-sm btn-primary" type="button" data-example="non-scientific">Non scientifiques sous 10</button>
<button class="btn btn-sm btn-primary" type="button" data-example="humanities" @disabled(!$catalog->contains(fn ($u) => $u->usesWeightedAverage($year)))>Humanité : FHS 10, Conduite 20</button>
</div>
<form id="simulation-form" action="{{ route('simulation.semester.calculate') }}" method="POST">
@csrf<input type="hidden" name="year" value="{{ $year }}"><input type="hidden" name="semester" value="{{ $semester }}">
<div class="table-responsive"><table class="table table-bordered align-middle"><thead><tr><th>UNITÉ D’ENSEIGNEMENT</th><th>SAISIE /20</th><th>MOYENNE UE</th><th>APPRÉCIATION</th></tr></thead><tbody>
@forelse($catalog as $unit)
@php($detail = $result['details'][$unit->id])
<tr data-unit="{{ $unit->id }}">
<td><span class="d-block fw-bold mb-5">{{ $unit->name }}</span><span class="badge {{ $detail['scientific'] ? 'badge-primary' : 'badge-light' }}">{{ $detail['scientific'] ? 'Scientifique' : 'Non scientifique' }}</span></td>
<td>
@if($unit->status === 'multiple' && $unit->usesWeightedAverage($year))
@foreach($unit->elementTeachingUnits as $ecue)
<div class="d-flex align-items-center gap-2 mb-10"><label for="ecue-{{ $ecue->id }}">{{ $ecue->name }}<small class="d-block text-muted">{{ $ecue->credit }} crédit(s)</small></label><input id="ecue-{{ $ecue->id }}" name="scores[ecue][{{ $ecue->id }}]" class="form-control" style="max-width:110px" type="number" min="0" max="20" step="0.001" required value="{{ $scores['ecue'][$ecue->id] }}" data-scientific="{{ $detail['scientific'] ? '1' : '0' }}" data-ecue="{{ $ecue->name }}"></div>
@endforeach
@else
<label for="ue-{{ $unit->id }}" style="position:absolute;width:1px;height:1px;overflow:hidden">Moyenne de {{ $unit->name }}</label><input id="ue-{{ $unit->id }}" name="scores[ue][{{ $unit->id }}]" class="form-control" style="max-width:110px" type="number" min="0" max="20" step="0.001" required value="{{ $scores['ue'][$unit->id] }}" data-scientific="{{ $detail['scientific'] ? '1' : '0' }}">
@endif
</td>
<td><span class="fw-bold" data-average>{{ number_format($detail['average'], 2, ',', '') }}</span><div class="small text-muted mt-2" data-formula>{{ $detail['formula'] }}</div></td>
<td><span data-appreciation class="badge {{ $detail['appreciation'] === 'Validé' ? 'badge-success' : 'badge-danger' }}">{{ $detail['appreciation'] }}</span></td>
</tr>
@empty<tr><td colspan="4">Aucune UE pour ce semestre.</td></tr>@endforelse
</tbody></table></div>
<button class="btn btn-primary mt-15" type="submit" @disabled($catalog->isEmpty())>Calculer le résultat</button><span id="calculation-state" class="text-muted" role="status" style="margin-left:12px">Le résultat se met à jour à chaque modification.</span>
<div id="calculation-error" class="alert alert-danger" role="alert" hidden></div>
</form>
</div></section>
</div><div class="col-xl-3"><aside class="card" id="summary" aria-live="polite"><div class="card-body">
<h4>Bilan du semestre</h4><span class="badge badge-info">{{ $result['version'] === 'historique' ? 'Règles historiques' : 'Règles '.$result['version'] }}</span>
<p class="text-muted" style="margin-bottom:0">Moyenne générale /20</p><div class="h2 mt-15 mb-15" id="general-average">{{ number_format($result['average'], 2, ',', '') }}</div>
<span id="general-status" class="badge {{ $result['validated'] ? 'badge-success' : 'badge-danger' }}">{{ $result['validated'] ? 'Semestre validé' : 'Semestre non validé' }}</span>
<ul id="reasons">@foreach($result['reasons'] as $reason)<li>{{ $reason }}</li>@endforeach</ul>
@if($result['version'] !== 'historique')
<p class="small mt-15">Le semestre est validé si la moyenne générale atteint <strong>{{ $result['thresholds']['moyenne_generale'] }}/20</strong> et si <strong>chaque UE scientifique</strong> atteint {{ $result['thresholds']['min_scientifique'] }}/20. Toutes les UE sont alors validées par compensation.</p>
<p class="small mt-15">Sinon, seules les UE à au moins 12 restent validées. Aucun minimum n’est imposé aux UE non scientifiques lorsque le semestre est validé.</p>
@else
<p class="small mt-15">Anciennes règles : moyenne générale ≥ {{ $result['thresholds']['moyenne_generale'] }}, chaque UE scientifique ≥ {{ $result['thresholds']['min_scientifique'] }}, chaque UE non scientifique ≥ {{ $result['thresholds']['min_non_scientifique'] }}. Les appréciations par UE reproduisent la compensation historique.</p>
<p class="small mt-15">Humanité C reste une UE unique avant 2026-2027.</p>
@endif
<p class="small text-muted mt-15">La moyenne générale est la moyenne des UE. @if($year >= 2026)Humanité C seule utilise les crédits 4 et 1 pour ses ECUE. @endif Les seuils sont comparés avant tout arrondi d’affichage.</p>
</div></aside></div>

</div></div></div></div>
@include('layouts.admin.footer')
<script>
(() => {
const form = document.getElementById('simulation-form'), error = document.getElementById('calculation-error'), state = document.getElementById('calculation-state');
const summary = document.getElementById('summary'), inputs = [...form.querySelectorAll('input[type="number"]')];
const format = new Intl.NumberFormat('fr-FR', {minimumFractionDigits:2, maximumFractionDigits:4});
let timer, abort, revision = 0;
function show(result) {
 document.getElementById('general-average').textContent = format.format(result.average);
 const status = document.getElementById('general-status'); status.textContent = result.validated ? 'Semestre validé' : 'Semestre non validé'; status.className = 'badge '+(result.validated ? 'badge-success' : 'badge-danger');
 const reasons = document.getElementById('reasons'); reasons.replaceChildren();
 result.reasons.forEach(text => {const li=document.createElement('li');li.textContent=text;reasons.append(li);});
 Object.entries(result.details).forEach(([id, detail]) => {const row=form.querySelector('[data-unit="'+id+'"]'); if(!row)return;row.querySelector('[data-average]').textContent=format.format(detail.average);row.querySelector('[data-formula]').textContent=detail.formula ?? '';const tag=row.querySelector('[data-appreciation]');tag.textContent=detail.appreciation;tag.className='badge '+(detail.appreciation==='Validé'?'badge-success':'badge-danger');});
}
async function calculate() {
 const current = ++revision; if(abort)abort.abort(); abort=new AbortController(); error.hidden=true;
 if(!form.checkValidity()){summary.classList.add('opacity-50');state.textContent='Complète les moyennes entre 0 et 20 pour recalculer.';return;}
 state.textContent='Calcul en cours…';summary.classList.add('opacity-50');
 try {const response=await fetch(form.action,{method:'POST',body:new FormData(form),headers:{'Accept':'application/json'},signal:abort.signal});const data=await response.json();if(current!==revision)return;if(!response.ok)throw new Error(Object.values(data.errors ?? {}).flat().join(' ') || 'Calcul indisponible. Réessaie ou recharge la page.');show(data);state.textContent='Résultat à jour.';summary.classList.remove('opacity-50');}
 catch(e){if(e.name==='AbortError'||current!==revision)return;error.textContent=e.message;error.hidden=false;state.textContent='Le résultat affiché n’est pas à jour.';}
}
form.addEventListener('input',()=>{++revision;if(abort)abort.abort();summary.classList.add('opacity-50');state.textContent='Modification en cours…';clearTimeout(timer);timer=setTimeout(calculate,250);});
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
</body>
</html>
