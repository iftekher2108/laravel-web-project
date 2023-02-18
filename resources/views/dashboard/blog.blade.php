@extends('home')
@section('dash-content')
@foreach ($blog as $blogs)
    

<div class="card d-flex flex-column gap-1 p-2">
    <h1 class="text-center">blog index id of: {{ $blogs->id }}</h1>
    <h2 class="card-title">{{ $blogs->title }}</h2>
    <div class="d-flex gap-2">
    <span>{{ $blogs->user_name }}</span>|<span>Category : {{ $blogs->category }}</span>|<span>{{ $blogs->created_at }}</span>
    </div>
    <hr>
    <div class="content">
        <center><img class="border border-3 border-success rounded-2" src="{{ asset('upload/blog')}}/{{ $blogs->photo }}" alt="blog photo" height="150" width="400"></center>
<hr>
        <p style="height: 200px; overflow:auto;">
            {{ $blogs->content }}
        </p>
<div class="group-btn d-flex gap-2 justify-content-center">
        <button class="btn btn-success "><a class="nav-link" href="{{url('edit-blog',$blogs->id)}}">update blog</a></button>
   <button class="btn btn-success"><a class="nav-link" href="{{ url('destroyblog',$blogs->id) }}">delete blog</a></button>
    </div>
</div>

</div>
@endforeach

@endsection