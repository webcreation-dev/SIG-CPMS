<!DOCTYPE html>
<html lang="fr">
@include('layouts.admin.head')
<body>
@include('layouts.admin.header')
@include('layouts.admin.sidebar')
<div class="themebody-wrap">
    <div class="codex-breadcrumb"><div class="breadcrumb-contain"><div class="left-breadcrumb">
        <h1>Importer les étudiants</h1>
        <a href="{{ route('classrooms.index') }}">Retour aux classes</a>
    </div></div></div>
    <div class="theme-body"><div class="custom-container">
        @if($errors->any())
            <div class="alert alert-danger" role="alert"><strong>L’import n’a pas été effectué.</strong>
                <ul class="mb-0">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
            </div>
        @endif
        @if(session('message'))<div class="alert alert-success" role="status">{{ session('message') }}</div>@endif
        @if(session('roster_import_results'))
            <div class="card"><div class="card-body"><h2>Résultat de l’import</h2>
                @foreach(session('roster_import_results') as $result)
                    <p><strong>{{ App\Models\Classroom::TYPES[$result['type']] }} · {{ $result['year'] }}-{{ $result['year']+1 }}</strong> :
                        {{ $result['created'] }} étudiant(s) créé(s), {{ $result['skipped'] }} déjà présent(s).
                        Effectif actuel : {{ $result['total'] }}.
                        <a href="{{ route('students.index', ['classroom_id' => $result['classroom_id']]) }}">Voir les étudiants</a>
                    </p>
                @endforeach
            </div></div>
        @endif
        <div class="card"><div class="card-body">
            <h2>1. Sélectionner les listes de l’administration</h2>
            <p>Choisissez un ou deux fichiers Excel .xlsx : une liste par niveau. Les colonnes attendues sont « Nom et Prénoms », « Sexe » et « Date et lieu de naissance ».</p>
            <p>Les noms de famille doivent être en MAJUSCULES, suivis des prénoms. L’année et le niveau seront à vérifier avant l’import.</p>
            <form action="{{ route('students.import.preview') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="roster-files" class="form-label">Fichiers Excel (5 Mo maximum par fichier)</label>
                <input id="roster-files" class="form-control mb-3" type="file" name="files[]" accept=".xlsx" multiple required>
                <button type="submit" class="btn btn-primary">Analyser les fichiers</button>
            </form>
        </div></div>
        @if($preview)
            <form action="{{ route('students.import.store') }}" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{ $preview['token'] }}">
                <div class="card"><div class="card-body">
                    <h2>2. Vérifier l’année, le niveau et les étudiants</h2>
                    <p>Les classes manquantes seront créées. Un nouvel import de la même liste n’ajoutera pas de doublons. Aucun étudiant absent du fichier ne sera supprimé et aucune ancienne inscription ou note ne sera déplacée.</p>
                    <p>Import disponible à partir de 2026-2027. L’aperçu reste valable une heure.</p>
                </div></div>
                @foreach($preview['lists'] as $index => $list)
                    @php
                        $suggestedYear = $list['filename_year'] ?? $list['year'];
                        $suggestedYear = $suggestedYear ? $suggestedYear.'-'.($suggestedYear+1) : '';
                    @endphp
                    <div class="card"><div class="card-body">
                        <h3>{{ $list['filename'] }}</h3>
                        <p>{{ count($list['students']) }} étudiants détectés.
                            Année dans l’en-tête : <strong>{{ $list['year'] ? $list['year'].'-'.($list['year']+1) : 'Non détectée' }}</strong>.
                            Niveau détecté : <strong>{{ App\Models\Classroom::TYPES[$list['type']] ?? 'Non détecté' }}</strong>.
                        </p>
                        @foreach($list['warnings'] as $warning)<div class="alert alert-warning" role="alert">{{ $warning }}</div>@endforeach
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label" for="year-{{ $index }}">Année scolaire cible</label>
                                <input class="form-control" id="year-{{ $index }}" name="targets[{{ $index }}][year]" value="{{ old('targets.'.$index.'.year', $suggestedYear) }}" placeholder="2026-2027" pattern="20[0-9]{2}-20[0-9]{2}" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="type-{{ $index }}">Classe cible</label>
                                <select class="form-control" id="type-{{ $index }}" name="targets[{{ $index }}][type]" required>
                                    <option value="">Choisir le niveau</option>
                                    @foreach(App\Models\Classroom::TYPES as $type => $label)
                                        <option value="{{ $type }}" @selected(old('targets.'.$index.'.type', $list['type']) === $type)>{{ $label }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="table-responsive"><table class="table table-bordered">
                            <thead><tr><th>Ligne</th><th>Nom</th><th>Prénoms</th><th>Sexe</th><th>Naissance</th><th>Lieu</th></tr></thead>
                            <tbody>@foreach($list['students'] as $student)
                                <tr><td>{{ $student['line'] }}</td><td>{{ $student['lastname'] }}</td><td>{{ $student['firstname'] }}</td><td>{{ $student['sexe'] }}</td><td>{{ date('d/m/Y', strtotime($student['birthday'])) }}</td><td>{{ $student['birthplace'] }}</td></tr>
                            @endforeach</tbody>
                        </table></div>
                    </div></div>
                @endforeach
                <button type="submit" class="btn btn-success mb-4">Importer dans les classes indiquées</button>
            </form>
        @endif
    </div></div>
</div>
@include('layouts.admin.footer')
</body>
</html>
