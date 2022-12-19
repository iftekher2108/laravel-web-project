<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Student;

class StudentController extends Controller
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
public function homepage()
{
    return view("webpages.index");
}

public function about() 
{
    return view("webpages.about");
}
public function addstudentform()
{
    return view("webpages.addstudentform");
}

public function table() 
{
    $student=Student::all(); //Model
      
    // return view('showstudent',compact('student'));
    return view("webpages.table",compact('student'));
}
public function editstudentform() {
        // $student=Student::find($id);
        return view("webpages.editstudentform");
}


public function gellery() 
{
    return view("webpages.gellery");
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

        $request->validate([
            'name'=>'required',
            'roll'=>'required | numeric',
            
             'technology'=>'required',
            
            'photo'=>'nullable|mimes:jpg,jpeg,png|max:15512'
        ]);
       
       
        $student = new Student;  //Kpistudent is Model name

        if(isset($request->photo)){
            $filename = time().'.'.$request->photo->extension();
            $upload_path = public_path('upload/student');
            $request->photo->move($upload_path,$filename);
            $student->photo = $filename;
        }

        
        $student->name = $request->name;
        
        $student->roll = $request->roll;
        
        $student->email = $request->email;

        $student->technology = $request->technology;

        $student->semister = $request->semister;

        $student->shift = $request->shift;

        $student->group = $request->group;
       
       
        $student->save();


  
        return redirect('/addstudentform');


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
        $request->validate([
            'name'=>'required',
            'roll'=>'required|numeric',
       
             'technology'=>'required',
            	 	 	 	 	 		
            


            'photo'=>'nullable|mimes:jpg,jpeg,png|max:15512'
        ]);
       
       
        $student = Student::find($id);  //Kpistudent is Model name

        if(isset($request->photo)){
            $filename = time().'.'.$request->photo->extension();
            $upload_path = public_path('upload/student');
            $request->photo->move($upload_path,$filename);
            $student->photo = $filename;
        }

        
        
        
        $student->roll = $request->roll;
       $student->name = $request->name;
        $student->technology = $request->technology;
       
       
        $student->save();
        return redirect('/table');

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
