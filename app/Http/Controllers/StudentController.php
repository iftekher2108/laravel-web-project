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

     public function __construct()
     {
         $this->middleware('auth');
     }
 




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addstudentform()
    {
        return view("webpages.addstudentform");
    }

    public function store(Request $request)
    {
        //

        $request->validate([
            'name'=>'required',
            'roll'=>'required | numeric',
            'email'=>'required',
             'technology'=>'required',
             'semister'=>'required',
             'shift'=>'required',
             'group'=>'required',	
            
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
        $student->bio=$request->bio;
       
       
        $student->save();


  
        return redirect('/studentlist');


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


     public function editstudentform($id) {
        $student=Student::find($id);
        return view("webpages.editstudentform",compact('student'));
}

    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'name'=>'required',
            'roll'=>'required|numeric',
            'email'=>'required',
             'technology'=>'required',
             'semister'=>'required',
             'shift'=>'required',
             'group'=>'required',	 	 	 		

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
       $student->email =$request->email;
        $student->technology = $request->technology;
        $student->semister = $request->semister;
       $student->shift=$request->shift;
       $student->group=$request->group;
       $student->bio=$request->bio;
       
        $student->save();
        return redirect('/studentlist');

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
        $student = Student::find($id);
        if($student->photo != '' && file_exists(public_path('upload/student'.$student->photo))) {
            unlink(public_path('upload/student'.$student->photo));
        }
        $student->delete();
        return redirect('/studentlist');
    }
}
