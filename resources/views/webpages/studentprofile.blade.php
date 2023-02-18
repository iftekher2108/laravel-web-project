@extends('webpages.master')
@section('content')
<hr>
<div class="container">

<h2 class="text-center">Student information of <span class="text-success">{{ $student->name }} </span></h2>
<hr>
    <div class="card m-auto" style="width: 25rem;">
        <img class="m-auto mt-3" src="{{ asset('upload/student') }}/{{ $student->photo }}" alt="photo" height="150" width="150">
      
        <div class="card-body">
          <h5 class="card-title"><b>NAME : </b> {{ $student->name }}</h5>
          <hr>
          <h5><b>ID : </b>{{ $student->id }}</h5>
          <hr>
          <h5><b>ROLL : </b> {{ $student->roll }}</h5>
          <hr>
          <h5><b>EMAIL : </b> {{ $student->email }}</h5>
          <hr>
          <h5><b>SEMISTER : </b>{{ $student->semister }}</h5>
          <hr>
          <h5><b>SHIFT : </b> {{ $student->shift }}</h5>
          <hr>
          <h5><b>GROUP : </b> {{ $student->group }}</h5>
          <h5><b>Bio : </b> {{ $student->bio }}</h5>
        </div>
      </div>
    </div>

    <hr>
@endsection