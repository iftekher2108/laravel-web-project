@extends('webpages.master')
@section('content')


<div class="container">
    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <a class="p-2 link-secondary" href="#">World</a>
            <a class="p-2 link-secondary" href="#">U.S.</a>
            <a class="p-2 link-secondary" href="#">Technology</a>
            <a class="p-2 link-secondary" href="#">Design</a>
            <a class="p-2 link-secondary" href="#">Culture</a>
            <a class="p-2 link-secondary" href="#">Business</a>
            <a class="p-2 link-secondary" href="#">Politics</a>
            <a class="p-2 link-secondary" href="#">Opinion</a>
            <a class="p-2 link-secondary" href="#">Science</a>
            <a class="p-2 link-secondary" href="#">Health</a>
            <a class="p-2 link-secondary" href="#">Style</a>
            <a class="p-2 link-secondary" href="#">Travel</a>
        </nav>
    </div>
</div>

<main>
    <div class="p-4 p-md-5 mb-4 rounded" data-aos="zoom-in" style="background:var(--color)">
        <div class="col-md-6 px-0">
            <h1 class="display-4 fst-italic fw-bold">Title of a longer featured blog post</h1>
            <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and
                efficiently about what’s most interesting in this post’s contents.</p>
            <p class="lead mb-0"><a href="#" class="text-white fw-bold nav-link">Continue reading...</a></p>
        </div>
    </div>

    <div class="row mb-2 m-0 p-0">
        <div class="col-md-6" data-aos="zoom-in-right">
            <div
                class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col-6 p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">World</strong>
                    <h3 class="mb-0">Featured post</h3>
                    <div class="mb-1 text-muted">Nov 12</div>
                    <p class="card-text mb-auto">This is a wider card with supporting text below as a natural
                        lead-in to additional content.</p>
                    <a href="#" class="nav-link text-success">Continue reading...</a>
                </div>
                <div class="col-6 d-none d-lg-flex g-0 flex-fill">
                    <img src="{{ asset('/image/1.jpg') }}" class="img-fluid rounded-end" alt="blog-feature-post-image">

                </div>
            </div>
        </div>


        <div class="col-md-6" data-aos="zoom-in-left">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col-6 p-4 d-flex flex-column position-static">

                    <strong class="d-inline-block mb-2 text-success">Design</strong>
                    <h3 class="mb-0">Post title   </h3>
                    <div class="mb-1 text-muted">Nov 11</div>
                    <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to
                        additional content.</p>
                    <a href="#" class="nav-link text-success">Continue reading...</a>
                </div>
                <div class="col-6 d-none d-lg-flex g-0 flex-fill">
                    <img src="{{ asset('/image/1.jpg') }}" class="img-fluid rounded-end" alt="blog-feature-post-image">

                </div>
            </div>
        </div>
    </div>






    
    <div class="row g-3 m-0 p-0">
        <div class="col-md-9 bg-light" data-aos="zoom-in-right">
            <h3 class="pb-4 mb-4 fst-italic border-bottom">
                Latest News
            </h3>
            @foreach ($blog as $blogs )
             <a class="nav-link" href="#">   
            <article class="blog-post mb-2 p-3 rounded-3" style="background:rgb(233, 233, 255)">
                <div class="blog-items">
                    <h2 class="text-capitalize">{{ $blogs->title }}</h3>
                    <small><span class="fw-bold">Date: </span>{{ $blogs->created_at }} | {{ Auth::user()->name }}</small>
                    <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam, cumque.</p>
               
                </div>
                <a href="javascript:void(0)" class="nav-link text-success">Read More...</a>
            </article>
            </a>
            @endforeach


        </div>

        <div class="col-md-3" data-aos="zoom-in" data-aos="zoom-in-left">
            <div class="position-sticky" style="top: 2rem;">
                <div class="p-4 mb-3 bg-light rounded">
                    <h4 class="fst-italic">About</h4>
                    <p class="mb-0">Customize this section to tell your visitors a little bit about your
                        publication, writers, content, or something else entirely. Totally up to you.</p>
                
                    </div>



                <div class="p-4 bg-light">
                    <h4 class="fst-italic">Category</h4>
                    <ol class="list-unstyled mb-0">

                        @foreach ($blog as $blogs)
                            
                        <li><a href="#" class="text-capitalize nav-link text-success">{{ $blogs->category }}</a></li>
                        @endforeach
                    </ol>
                </div>
{{-- 
                <div class="p-4 bg-light">
                    <h4 class="fst-italic">Archives</h4>
                    <ol class="list-unstyled mb-0">
                        <li><a href="#">March 2021</a></li>
                        <li><a href="#">February 2021</a></li>
                        <li><a href="#">January 2021</a></li>
                        <li><a href="#">December 2020</a></li>
                        <li><a href="#">November 2020</a></li>
                        <li><a href="#">October 2020</a></li>
                        <li><a href="#">September 2020</a></li>
                        <li><a href="#">August 2020</a></li>
                        <li><a href="#">July 2020</a></li>
                        <li><a href="#">June 2020</a></li>
                        <li><a href="#">May 2020</a></li>
                        <li><a href="#">April 2020</a></li>
                    </ol>
                </div> --}}

                <div class="p-4 bg-light">
                    <h4 class="fst-italic">Elsewhere</h4>
                    <ol class="list-unstyled">
                        <li><a href="#" class="btn ">GitHub</a></li>
                        <li><a href="#" class="btn ">Twitter</a></li>
                        <li><a href="#" class="btn ">Facebook</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

</main>




@endsection