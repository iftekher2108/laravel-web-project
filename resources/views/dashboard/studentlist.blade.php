@extends('home')
@section('dash-content')


<div class="card flex-fill student-space comman-shadow">
    <div class="card-header d-flex align-items-center">
    <h5 class="card-title">Student's list total : {{ count($student) }}</h5>
    <ul class="chart-list-out student-ellips">
    <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a></li>
    </ul>
    </div>
    <div class="card-body">
    <div class="table-responsive">
    <table class="table star-student table-hover table-center table-borderless table-striped">
    <thead class="thead-light">
    <tr>
    <th class="text-center" colspan="3">ACTION</th>
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
        <td><input type="checkbox" name="" id=""></td>
        <td class="text-center">
            <div><a href="{{url('editstudentform',$students->id)}}" class="nav-link"><i class="fa-solid fa-pen-to-square"></i></a></div>
            </td>
            <td class="text-center">
                <div><a href="{{ url('destroy',$students->id) }}" class="nav-link"><i class="fa-solid fa-trash"></i></a></div>
                </td>


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


@endsection