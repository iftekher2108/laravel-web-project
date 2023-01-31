@extends('home')
@section('dash-content')
<div class="container">
<div class="d-flex flex-column">
<div class="row">
    <div class="col-lg-6 col-md-12 col-sm-12 ">
        <div style="background: green;" class="card d-flex flex-row p-2 justify-content-around align-items-center">
            <div class="count">
                <h3>Students</h3>
                <h3>{{ count($student) }}</h3>
            </div>
            <img src="{{ asset('image/1.jpg') }}" alt="photo" class="rounded-circle border border-3 border-white" height="60" width="60">
        </div>
    </div>

    <div class="col-lg-6 col-md-12 col-sm-12 ">
        <div style="background: green;" class="card d-flex flex-row p-2 justify-content-around align-items-center">
            <div class="count">
                <h3>Teachers</h3>
                <h3>{{ count($teacher) }}</h3>
            </div>
            <img src="{{ asset('image/1.jpg') }}" alt="photo" class="rounded-circle border border-3 border-white" height="60" width="60">
        </div>
    </div>
  
</div>

</div>


<div class="card flex-fill student-space comman-shadow">
    <div class="card-header d-flex align-items-center">
    <h5 class="card-title">Student's list Total : {{ count($student) }}</h5>
    <ul class="chart-list-out student-ellips">
        <button class="btn btn-success px-3 mx-1"><a class="nav-link" href="{{ url("addstudentform") }}">Add</a></button>
        <button class="btn btn-success px-3 mx-1"><a class="nav-link" href="">Update</a></button>
        <button class="btn btn-success px-3 mx-1"><a class="nav-link" href=""> delete</a></button>
    <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a></li>
    </ul>
    </div>
    <div class="card-body">
    <div class="table-responsive" id="table-wrapper">
    <table class="table star-student table-hover table-center table-borderless table-striped">
    <thead class="thead-light">
    <tr>
    <th>ACTION</th>
    <th>SL</th>
    <th>Name</th>
    <th>ID</th>
    <th class="text-center">Roll</th>
    <th class="text-center">E-mail</th>
    <th class="text-center">Technology</th>
    <th class="text-center">semister</th>
    <th class="text-center">Shift</th>
    <th class="text-center">Group</th>
    </tr>
    </thead>
    <tbody>
        @for ($i=0;$i<count($student);$i++)
            
    <tr>
        <td><input type="checkbox" name="" id=""></td>
        <td>{{ $i+1 }}</td>

    <td class="text-nowrap text-start">
    <a href="profile.html">
    <img class="rounded-circle" src="{{ asset('/upload/student')}}/{{$student[$i]->photo }}" width="25" alt="Star Students">
    {{ $student[$i]->name }}
    </a>
    </td>
    <td class="text-nowrap">
        <div>{{ $student[$i]->id }}</div>
    </td>
    <td class="text-center">{{ $student[$i]->roll }}</td>
    <td class="text-center">{{ $student[$i]->email }}</td>
    <td class="text-center">
    <div>{{ $student[$i]->technology }}</div>
    </td>
    <td class="text-center">
        <div>{{ $student[$i]->semister }}</div>
        </td>
        <td class="text-center">
            <div>{{ $student[$i]->shift }}</div>
            </td>
            <td class="text-center">
                <div>{{ $student[$i]->group }}</div>
                </td>
    </tr>
    @endfor





    </tbody>
    </table>
    </div>
    </div>
    </div>


 
<div class="card flex-fill student-space comman-shadow">
    <div class="card-header d-flex align-items-center">
    <h5 class="card-title">Teacher's list total : {{ count($teacher) }}</h5>
    <ul class="chart-list-out student-ellips">
        <button class="btn btn-success px-3 mx-1"><a class="nav-link" href="{{ url("add-teacher") }}">Add</a></button>
        <button class="btn btn-success px-3 mx-1"><a class="nav-link" href="">Update</a></button>
        <button class="btn btn-success px-3 mx-1"><a class="nav-link" href=""> delete</a></button>
    <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a></li>
    </ul>
    </div>
    <div class="card-body">
    <div class="table-responsive">
    <table class="table star-student table-hover table-center table-borderless table-striped">
    <thead class="thead-light">
    <tr>
        <th>ACTION</th>
        <th>SL</th>
    <th>Name</th>
    <th>ID</th>
    <th class="text-center">Number</th>
    <th class="text-center">E-mail</th>
    <th class="text-center">Address</th>
    <th class="text-center">Gender</th>
    <th class="text-center">Section</th>
    <th class="text-center">Department</th>
    </tr>
    </thead>
    <tbody>
        @for ($i=0;$i<count($teacher);$i++)
            
    <tr>
        <td><input type="checkbox" name="" id=""></td>
        <td class="text-nowrap">
            <div>{{ $i+1 }}</div>
            </td>

    <td class="text-nowrap text-start">
    <a href="profile.html">
    <img class="rounded-circle" src="{{ asset('/upload/teacher')}}/{{$teacher[$i]->photo }}" width="25" alt="Star Students">
    {{ $teacher[$i]->name }}
    </a>
    </td>
    <td class="text-nowrap">
        <div>{{ $teacher[$i]->id }}</div>
    </td>
    <td class="text-center">{{ $teacher[$i]->number }}</td>
    <td class="text-center">{{ $teacher[$i]->email }}</td>
    <td class="text-center">
    <div>{{ $teacher[$i]->address }}</div>
    </td>
    <td class="text-center">
        <div>{{ $teacher[$i]->gender }}</div>
        </td>
        <td class="text-center">
            <div>{{ $teacher[$i]->section }}</div>
            </td>
            <td class="text-center">
                <div>{{ $teacher[$i]->department }}</div>
                </td>
                {{-- <td class="text-center">
                    <div><a href="{{url('editstudentform',$teachers->id)}}" class="nav-link"><i class="fa-solid fa-pen-to-square"></i></a></div>
                    </td>
                    <td class="text-center">
                        <div><a href="{{ url('destroy',$teachers->id) }}" class="nav-link"><i class="fa-solid fa-trash"></i></a></div>
                        </td> --}}
    </tr>
    @endfor





    </tbody>
    </table>
    </div>
    </div>
    </div>


@endsection