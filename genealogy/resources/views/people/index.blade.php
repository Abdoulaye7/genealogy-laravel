@extends('base')

@section('content')
  <h1 class="my-4">Liste des People</h1>

  <div class="container">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
           <th scope="col">created_by Name</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($peoples as $people)
          <tr>
            <th scope="row">{{ $people->id }}</th>
            <td>{{ $people->created_by }}</td>
            <td>{{ $people->first_name }}</td>
            <td>{{ $people->last_name }}</td>
            <td>
              <!-- Boutons d'action -->
              <a href="" class="btn btn-warning btn-sm">Modifier</a>
              <form action="" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette personne ?')">Supprimer</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
