<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Http\Requests\StoreblogRequest;
use App\Http\Requests\UpdateblogRequest;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function adminblog() 
    {
        $blog = blog::all();
        return view('dashboard.blog',compact('blog'));
    }




    public function addblog() 
    {
        $blog=blog::all();
        return view('dashboard.addblog',compact('blog'));
    }

    public function editblog($id) 
    {
        $blog=blog::find($id);
        $blogs=blog::all();
        return view('dashboard.editblog',compact('blog','blogs'));
    }

    public function storeblog(StoreblogRequest $request)
    {
        //


        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'photo' => 'nullable|mimes:png,jpg,jpeg|max:20000'
        ]);

        $blog = new blog;

        if(isset($request->photo)) 
        {
            $filename =date('l-d-F-m-y-h-i-sa',random_int(1,1000)). ".".$request->photo->extension();
            $path = public_path('upload/blog');
            $request->photo->move($path, $filename);
            $blog->photo = $filename;
        }


        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->category = $request->category;
        $blog->user_name = $request->user()->name;



        $blog->save();

        return redirect('admin-blog');


    }



    public function updateblog(UpdateblogRequest $request, blog $blog, $id)
    {
        //
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'photo' => 'nullable|mimes:png,jpg,jpeg|max:20000'
        ]);

        $blog = blog::find($id);

        if(isset($request->photo)) 
        {
            $filename =date('l-d-F-m-y-h-i-sa',random_int(1,1000)). ".".$request->photo->extension();
            $path = public_path('upload/blog');
            $request->photo->move($path, $filename);
            $blog->photo = $filename;
        }

        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->category = $request->category;
        $blog->user_name = $request->user()->name;


        $blog->save();

        return redirect('admin-blog');



    }


    public function destroyblog(blog $blog,$id)
    {
        //
        $blog=blog::find($id);
        if($blog->photo != '' && file_exists(public_path('upload/student'.$blog->photo))) {
            unlink(public_path('upload/student'.$blog->photo));
        }
        $blog->delete();
        return redirect('/admin-blog');



    }
}
