<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\StudentController;
use App\Models\teacher;
use App\Http\Controllers\TeacherController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Models\student;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $teacher = teacher::all();
        $student = Student::all();
        return view('dashboard.admindashboard',compact('student','teacher'));
    }

    public function accountsetting() {
        return view("accountsetting");
    }

    public function studentlist()
    {
        $student = student::all();
        return view('dashboard.studentlist',compact('student'));
    }
    public function studentDetail() 
    {
        return view('dashboard.studentDetail');
    }


    public function teacherDetail()
    {
        return view('dashboard.teacherDetail');
    }



    public function teacherlist()
    {
        $teacher = teacher::all();
        return view('dashboard.teacherlist',compact('teacher'));
    }




}
