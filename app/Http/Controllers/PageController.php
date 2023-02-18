<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\student;

use App\Models\teacher;

use App\Models\blog;


class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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



    public function blog()
    {
        $blog = blog::all();
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










    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
