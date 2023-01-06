<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use App\Http\Requests\StoreteacherRequest;
use App\Http\Requests\UpdateteacherRequest;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function addteacher()
    {
        return view('dashboard.addteacher');
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
     * @param  \App\Http\Requests\StoreteacherRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function storeteacher(StoreteacherRequest $request)
    {
        $request->validate([
            'name'=>'required',
            'photo'=>'nullable|mimes:png,jpg,jpeg|max:15000',
            'email'=>'required',
            'address'=>'required',
            'gender'=>'required',
            'section'=>'required',
            'department'=>'required'
        ]);


        $teacher = new teacher;
        if (isset($request->photo)) {
            $filename = time() . '.' . $request->photo->extension();
            $path = public_path('upload/teacher');
            $request->photo->move($path, $filename);
            $teacher->photo = $filename;
        }

        $teacher->name = $request->name;
        $teacher->number = $request->number;
        $teacher->email = $request->email;
        $teacher->address = $request->address;
        $teacher->gender = $request->gender;
        $teacher->section = $request->section;
        $teacher->department = $request->department;

        $teacher->save();
        return redirect('/teacherlist');

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateteacherRequest  $request
     * @param  \App\Models\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateteacherRequest $request, teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(teacher $teacher)
    {
        //
    }
}
