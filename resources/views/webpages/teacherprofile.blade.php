@extends('webpages.master')
@section('content')
<hr>
<div class="container">

<h2 class="text-center">Teacher information of <span class="text-success">{{ $teacher->name }} </span></h2>
<hr>
    <div class="card m-auto" style="width: 25rem;">
        <img class="m-auto mt-3" src="{{ asset('upload/teacher') }}/{{ $teacher->photo }}" alt="photo" height="150" width="150">
      
        <div class="card-body">
          <h5 class="card-title"><b>NAME : </b> {{ $teacher->name }}</h5>
          <hr>
          <h5><b>ID : </b>{{ $teacher->id }}</h5>
          <hr>
          <h5><b>NUMBER : </b> {{ $teacher->number }}</h5>
          <hr>
          <h5><b>EMAIL : </b> {{ $teacher->email }}</h5>
          <hr>
          <h5><b>ADDRESS : </b>{{ $teacher->address }}</h5>
          <hr>
          <h5><b>DEPARTMENT : </b> {{ $teacher->department }}</h5>
          <hr>
          <h5><b>SECTION : </b> {{ $teacher->section }}</h5>
          <h5><b>Bio : </b> {{ $teacher->bio }}</h5>
        </div>
      </div>
    </div>

    <hr>
@endsection