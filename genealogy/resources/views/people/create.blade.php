@extends('base')

@section('content')
 <h1>Formulaire d'ajout de People</h1>

 <form action="" method="post">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Creaed by</label>
        <input type="text" class="form-control" name="created_by" >
        @error('created_by')
             <div class="alert alert-danger">{{ $message }}</div>
         @enderror
    </div>
    <div class="mb-3">
        <label for="" class="form-label">First name</label>
        <input type="text" class="form-control" name="first_name" >
         @error('first_name')
             <div class="alert alert-danger">{{ $message }}</div>
         @enderror
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Last name</label>
        <input type="text" class="form-control" name="last_name" >
          @error('last_name')
             <div class="alert alert-danger">{{ $message }}</div>
         @enderror
    </div>
    <div class="mb-3">
        <label for="" class="form-label">birth_name</label>
        <input type="text" class="form-control" name="birth_name" >
          @error('birth_name')
             <div class="alert alert-danger">{{ $message }}</div>
         @enderror
    </div>
    <div class="mb-3">
        <label for="" class="form-label">middle_names</label>
        <input type="text" class="form-control" name="middle_names" >
          @error('middle_names')
             <div class="alert alert-danger">{{ $message }}</div>
         @enderror
    </div>
    <div class="mb-3">
        <label for="" class="form-label">date_of_birth</label>
        <input type="date" class="form-control" name="date_of_birth" >
          @error('date_of_birth')
             <div class="alert alert-danger">{{ $message }}</div>
         @enderror
    </div>
    <div class="col-12">
    <button class="btn btn-primary" type="submit">Ajouter</button>
  </div>

 </form>

@endsection
