@extends('base')

@section('content')

<h1> Se connecter </h1>
<div class="card">
  <div class ="card-body">
  <form action="" method="post">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label"> Email:</label>
        <input type="email" class="form-control" name="email" value="{{ old('email') }}" >
         @error('email')
           {{$message}}
        @enderror
    </div>
     <div class="mb-3">
        <label for="" class="form-label"> Password:</label>
        <input type="password" class="form-control" name="password" >
        @error('password')
           {{$message}}
        @enderror
    </div>

    <div class="col-12">
    <button class="btn btn-primary" type="submit">Se connecter</button>
  </div>
</form>
  </div>
</div>

@endsection
