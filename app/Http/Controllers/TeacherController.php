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
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        //
    }

    public function addteacher()
    {
        return view('dashboard.addteacher');
    }

    public function editteacher($id) 
    {
        $teacher = teacher::find($id);
        return view('dashboard.editteacher', compact('teacher'));
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
    public function updateteacher(UpdateteacherRequest $request, teacher $teacher,$id)
    {
        //
        $request->validate([
            'name'=>'required',
            'photo'=>'nullable|mimes:png,jpg,jpeg|max:15000',
            'email'=>'required',
            'address'=>'required',
            'gender'=>'required',
            'section'=>'required',
            'department'=>'required'
        ]);


        $teacher = teacher::find($id);

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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroyteacher(teacher $teacher,$id)
    {
        //
        $teacher = teacher::find($id);
        if($teacher->photo != '' && file_exists(public_path('upload/teacher'.$teacher->photo))) {
            unlink(public_path('upload/teacher'.$teacher->photo));
        }
        $teacher->delete();
        return redirect('/teacherlist');

    }
}
