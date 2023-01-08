@extends('home')
@section('dash-content')


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
    <th class="text-center" colspan="2">action</th>
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
                <td class="text-center">
                    <div><a href="{{url('edit-teacher',$teachers->id)}}" class="nav-link"><i class="fa-solid fa-pen-to-square"></i></a></div>
                    </td>
                    <td class="text-center">
                        <div><a href="{{ url('destroy-teacher',$teachers->id) }}" class="nav-link"><i class="fa-solid fa-trash"></i></a></div>
                        </td>
    </tr>
    @endforeach





    </tbody>
    </table>
    </div>
    </div>
    </div>


@endsection