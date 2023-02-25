@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-3 col-sm-12">
                <div class="card sticky-top navbar-expand-md bg-dark text-white" style="height:100vh;">
                    <div class="card-header bg-dark text-white">{{ __('Dashboard Menu') }}</div>
                        <button class="navbar navbar-toggler btn btn-block" type="button" data-bs-toggle="collapse" data-bs-target="#SupportedContent" aria-controls="SupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon m-auto"></span>
                        </button>
                    <div class="card-body collapse navbar-collapse" id="SupportedContent">

                        <div class="sidebar-inner slimscroll">
                            <div id="sidebar-menu" class="sidebar-menu">
                                <ul>
                                    <li class="menu-title">
                                        <span>Management Menu</span>
                                    </li>
                                    <li class="submenu">
                                        <a href="#"><i class="fa-solid fa-gauge mx-2"></i> <span> Dashboard</span> <span
                                                class="menu-arrow"></span></a>
                                        <ul>
                                            <li><a href="{{ url('home') }}">Admin Dashboard</a></li>
                                        </ul>
                                    </li>
                                    <li class="submenu">
                                        <a href="#"><i class="fas fa-graduation-cap mx-2"></i> <span> Students</span> <span
                                                class="menu-arrow"></span></a>
                                        <ul>
                                            <li><a href="{{ url('studentlist') }}">Student List</a></li>
                                            <li><a href="{{ url('student-detail') }}">Student View</a></li>
                                            <li><a href="{{ url('addstudentform') }}">Student Add</a></li>
                                        </ul>
                                    </li>
                                    <li class="submenu">
                                        <a href="#"><i class="fas fa-chalkboard-teacher mx-2"></i> <span> Teachers</span>
                                            <span class="menu-arrow"></span></a>
                                        <ul>
                                            <li><a href="{{ url('teacherlist') }}">Teacher List</a></li>
                                            <li><a href="{{ url('teacher-detail') }}">Teacher View</a></li>
                                            <li><a href="{{ url('add-teacher') }}">Teacher Add</a></li>
                                        </ul>
                                    </li>


                                    <li class="submenu">
                                        <a href="#"><i class="fas fa-book-reader mx-2"></i> <span> Subjects</span> <span
                                                class="menu-arrow"></span></a>
                                        <ul>
                                            <li><a href="subjects.html">Subject List</a></li>
                                            <li><a href="add-subject.html">Subject Add</a></li>
                                            <li><a href="edit-subject.html">Subject Edit</a></li>
                                        </ul>
                                    </li>


                                    <li class="menu-title">
                                        <span>Blog Management</span>
                                    </li>

                                    <li class="submenu">
                                        <a href="#"><i class="fa fa-newspaper mx-2"></i> <span> Blogs</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul>
                                            <li><a href="{{ url('admin-blog') }}">All Blogs</a></li>
                                            <li><a href="{{ url('add-blog') }}">Add Blog</a></li>

                                        </ul>
                                    </li>


                                    <li class="menu-title vstack mt-5 mx-auto">
                                        <span class="text-center">{{ Auth::user()->name }}</span>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>






                    </div>
                </div>


            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><span class="text-capitalize">{{ Auth::user()->name }}</span> Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @yield('dash-content')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
