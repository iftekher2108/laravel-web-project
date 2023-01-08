@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-3 col-sm-12">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard Menu') }}</div>

                    <div class="card-body">
                        <div class="sidebar-inner slimscroll">
                            <div id="sidebar-menu" class="sidebar-menu">
                                <ul>
                                    <li class="menu-title">
                                        <span>Main Menu</span>
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
                                            <li><a href="edit-student.html">Student Edit</a></li>
                                        </ul>
                                    </li>
                                    <li class="submenu">
                                        <a href="#"><i class="fas fa-chalkboard-teacher mx-2"></i> <span> Teachers</span>
                                            <span class="menu-arrow"></span></a>
                                        <ul>
                                            <li><a href="{{ url('teacherlist') }}">Teacher List</a></li>
                                            <li><a href="{{ url('teacher-detail') }}">Teacher View</a></li>
                                            <li><a href="{{ url('add-teacher') }}">Teacher Add</a></li>
                                            <li><a href="edit-teacher.html">Teacher Edit</a></li>
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
                                        <span>Management</span>
                                    </li>

                                    <li class="submenu">
                                        <a href="#"><i class="fa fa-newspaper mx-2"></i> <span> Blogs</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul>
                                            <li><a href="{{ url('admin-blog') }}">All Blogs</a></li>
                                            <li><a href="add-blog.html">Add Blog</a></li>
                                            <li><a href="edit-blog.html">Edit Blog</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-title">
                                        <span>Pages</span>
                                    </li>
                                    <li class="submenu">
                                        <a href="#"><i class="fas fa-shield-alt mx-2"></i> <span> Authentication </span>
                                            <span class="menu-arrow"></span></a>
                                        <ul>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="register.html">Register</a></li>
                                            <li><a href="forgot-password.html">Forgot Password</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-title">
                                        <span>Others</span>
                                    </li>
                                    <li class="submenu">
                                        <a href="javascript:void(0);"><i class="fas fa-code mx-2"></i> <span>Multi Level</span>
                                            <span class="menu-arrow"></span></a>
                                        <ul>
                                            <li class="submenu">
                                                <a href="javascript:void(0);"> <span>Level 1</span> <span
                                                        class="menu-arrow"></span></a>
                                                <ul>
                                                    <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                                    <li class="submenu">
                                                        <a href="javascript:void(0);"> <span> Level 2</span> <span
                                                                class="menu-arrow"></span></a>
                                                        <ul>
                                                            <li><a href="javascript:void(0);">Level 3</a></li>
                                                            <li><a href="javascript:void(0);">Level 3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"> <span>Level 1</span></a>
                                            </li>
                                        </ul>
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
