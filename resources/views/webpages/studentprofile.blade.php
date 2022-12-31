@extends('webpages.master')
@section('content')
<hr>
<div class="container">

<h2 class="text-center">information of <span class="text-success">{{ $student->name }} </span></h2>
<hr>
    <div class="card m-auto" style="width: 25rem;">
        <img class="m-auto mt-3" src="{{ asset('upload/student') }}/{{ $student->photo }}" alt="photo" height="150" width="150">
      
        <div class="card-body">
          <h5 class="card-title">NAME : {{ $student->name }}</h5>
          <h5>ID : {{ $student->id }}</h5>
          <h5>ROLL : {{ $student->roll }}</h5>
          <h5>EMAIL : {{ $student->email }}</h5>
          <h5>SEMISTER : {{ $student->semister }}</h5>
          <h5>SHIFT : {{ $student->shift }}</h5>
          <h5>GROUP : {{ $student->group }}</h5>
        </div>
      </div>
    </div>

    <hr>
@endsection