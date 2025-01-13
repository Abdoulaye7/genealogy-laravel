@extends('base')

@section('content')
    <h1>Créer une relation parent-enfant</h1>

    <form action="{{ route('relationship.store')}}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="parent_id" class="form-label">Sélectionnez le parent</label>
            <select name="parent_id" class="form-control" required>
                <option value="" disabled selected>Choisir un parent</option>
                @foreach ($people as $person)
                    <option value="{{ $person->id }}">{{ $person->first_name }} {{ $person->last_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="child_id" class="form-label">Sélectionnez l'enfant</label>
            <select name="child_id" class="form-control" required>
                <option value="" disabled selected>Choisir un enfant</option>
                @foreach ($people as $person)
                    <option value="{{ $person->id }}">{{ $person->first_name }} {{ $person->last_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="created_by" class="form-label">Créé par (ID utilisateur)</label>
            <input type="number" name="created_by" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Créer la relation</button>
    </form>
@endsection
