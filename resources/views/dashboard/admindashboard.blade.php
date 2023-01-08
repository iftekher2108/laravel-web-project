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
    <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a></li>
    </ul>
    </div>
    <div class="card-body">
    <div class="table-responsive">
    <table class="table star-student table-hover table-center table-borderless table-striped">
    <thead class="thead-light">
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th class="text-center">Roll</th>
    <th class="text-center">E-mail</th>
    <th class="text-center">Technology</th>
    <th class="text-center">semister</th>
    <th class="text-center">Shift</th>
    <th class="text-center">Group</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($student as $students)
            
    <tr>
    <td class="text-nowrap">
    <div>{{ $students->id }}</div>
    </td>
    <td class="text-nowrap text-start">
    <a href="profile.html">
    <img class="rounded-circle" src="{{ asset('/upload/student')}}/{{$students->photo }}" width="25" alt="Star Students">
    {{ $students->name }}
    </a>
    </td>
    <td class="text-center">{{ $students->roll }}</td>
    <td class="text-center">{{ $students->email }}</td>
    <td class="text-center">
    <div>{{ $students->technology }}</div>
    </td>
    <td class="text-center">
        <div>{{ $students->semister }}</div>
        </td>
        <td class="text-center">
            <div>{{ $students->shift }}</div>
            </td>
            <td class="text-center">
                <div>{{ $students->group }}</div>
                </td>
    </tr>
    @endforeach





    </tbody>
    </table>
    </div>
    </div>
    </div>


 
<div class="card flex-fill student-space comman-shadow">
    <div class="card-header d-flex align-items-center">
    <h5 class="card-title">Teacher's list total : {{ count($teacher) }}</h5>
    <ul class="chart-list-out student-ellips">
    <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a></li>
    </ul>
    </div>
    <div class="card-body">
    <div class="table-responsive">
    <table class="table star-student table-hover table-center table-borderless table-striped">
    <thead class="thead-light">
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th class="text-center">Number</th>
    <th class="text-center">E-mail</th>
    <th class="text-center">Address</th>
    <th class="text-center">Gender</th>
    <th class="text-center">Section</th>
    <th class="text-center">Department</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($teacher as $teachers)
            
    <tr>
    <td class="text-nowrap">
    <div>{{ $teachers->id }}</div>
    </td>
    <td class="text-nowrap text-start">
    <a href="profile.html">
    <img class="rounded-circle" src="{{ asset('/upload/teacher')}}/{{$teachers->photo }}" width="25" alt="Star Students">
    {{ $teachers->name }}
    </a>
    </td>
    <td class="text-center">{{ $teachers->number }}</td>
    <td class="text-center">{{ $teachers->email }}</td>
    <td class="text-center">
    <div>{{ $teachers->address }}</div>
    </td>
    <td class="text-center">
        <div>{{ $teachers->gender }}</div>
        </td>
        <td class="text-center">
            <div>{{ $teachers->section }}</div>
            </td>
            <td class="text-center">
                <div>{{ $teachers->department }}</div>
                </td>
                {{-- <td class="text-center">
                    <div><a href="{{url('editstudentform',$teachers->id)}}" class="nav-link"><i class="fa-solid fa-pen-to-square"></i></a></div>
                    </td>
                    <td class="text-center">
                        <div><a href="{{ url('destroy',$teachers->id) }}" class="nav-link"><i class="fa-solid fa-trash"></i></a></div>
                        </td> --}}
    </tr>
    @endforeach





    </tbody>
    </table>
    </div>
    </div>
    </div>


@endsection