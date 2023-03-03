<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\student;

use App\Models\teacher;

use App\Models\blog;


class PageController extends Controller
{

    public function homepage()
    {
        //
        $student=Student::all();
        $teacher=Teacher::all();
        $blog=Blog::all();
        return view("webpages.index",compact('teacher','student','blog'));
    }


    public function gellery()
    {
        return view("webpages.gellery");
    }

    public function about() 
    {
        return view("webpages.about");
    }


    public function policy() {
        return view("webpages.policy");
    }



    public function blogshow($id)
    { 
        $blog = blog::find($id);
        return view("webpages.blogshow",compact('blog'));
    }

    public function blog() 
    {
        $blog=blog::all();
        return view("webpages.blog",compact('blog'));
    }

    public function table() 
    {
        $student = Student::all(); //Model
        $teacher = teacher::all();
          
        return view("webpages.table",compact('student','teacher'));
    }

    public function studentprofile($id) {
        $student=Student::find($id);
        return view("webpages.studentprofile",compact('student'));
    }


    public function teacherprofile($id)
    {
        $teacher = teacher::find($id);
        return view('webpages.teacherprofile', compact('teacher'));
    }



}
