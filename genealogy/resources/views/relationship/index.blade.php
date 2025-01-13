@extends('base')

@section('content')
<div class="d-flex justify-content-between align-items-center my-4">
    <h1 class="mb-0">Liste des relations parents-enfants</h1>
    <a href="{{ route('relationship.create') }}" class="btn btn-primary">Créer une généalogie</a>
</div>

@if($relationships->isEmpty())
    <div class="alert alert-info text-center">Aucune relation trouvée. Cliquez sur "Créer une généalogie" pour commencer.</div>
@else
    <table class="table table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Parent</th>
                <th scope="col">Enfant</th>
                <th scope="col">Créé par</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($relationships as $relationship)
                <tr>
                    <td>{{ $relationship->parent->first_name }} {{ $relationship->parent->last_name }}</td>
                    <td>{{ $relationship->child->first_name }} {{ $relationship->child->last_name }}</td>
                    <td>{{ $relationship->creator->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif
@endsection
