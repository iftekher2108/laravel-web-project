<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Http\Requests\StoreblogRequest;
use App\Http\Requests\UpdateblogRequest;
use Illuminate\Support\Facades\Auth;
use Nette\Utils\Random;

class BlogController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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


    public function adminblog() 
    {
        $blog = blog::all();
        return view('dashboard.blog',compact('blog'));
    }




    public function addblog() 
    {
        return view('dashboard.addblog');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreblogRequest  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateblogRequest  $request
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function updateblog(UpdateblogRequest $request, blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(blog $blog)
    {
        //
    }
}
