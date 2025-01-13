@extends('base')

@section('content')
 <h1> People </h1>
  @foreach ($peoples as $people)
  <p> {{$people->first_name}} </p>
  <p> {{$people->last_name}}</p>

  @endforeach

@endsection
