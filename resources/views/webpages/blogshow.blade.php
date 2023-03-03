
@extends('webpages.master')
@section('content')



        <!-- ============================================post code start here======================================= -->

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
            <div class="p-4 p-md-5 mb-4 rounded text-bg-dark" data-aos="zoom-in">
                <div class="col-md-6 px-0">
                    <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
                    <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and
                        efficiently about what’s most interesting in this post’s contents.</p>
                    <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-6" data-aos="zoom-in-right">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-primary">World</strong>
                            <h3 class="mb-0">Featured post</h3>
                            <div class="mb-1 text-muted">Nov 12</div>
                            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural
                                lead-in to additional content.</p>
                            <a href="#" class="stretched-link">Continue reading</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                                role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                                    dy=".3em">Thumbnail</text>
                            </svg>

                        </div>
                    </div>
                </div>
                <div class="col-md-6" data-aos="zoom-in-left">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-success">Design</strong>
                            <h3 class="mb-0">Post title</h3>
                            <div class="mb-1 text-muted">Nov 11</div>
                            <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to
                                additional content.</p>
                            <a href="#" class="stretched-link">Continue reading</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img src="{{asset('upload/blog/'.$blog->photo)  }}" class="img-fluid" alt="blog-image">

                        </div>
                    </div>
                </div>
            </div>




            
            <div class="row g-5 ">
                <div class="col-md-8 bg-light" data-aos="zoom-in-right">
                    <h3 class="pb-4 mb-4 fst-italic border-bottom">
                        From the Firehose
                    </h3>

                    <article class="blog-post">
                        <h2 class="blog-post-title mb-1">{{ $blog->title }}</h2>
                        <p class="blog-post-meta">{{ $blog->created_at }} by <a href="#">{{ Auth::user()->name }}</a></p>

<img src="{{ asset("upload/blog/".$blog->photo) }}" class="img-fluid" alt="blog-image">

                        <p>{{ $blog->content }}</p>
                       
                    </article>

                    

                    

                    <!-- <nav class="blog-pagination m-2" aria-label="Pagination">
              <a class="btn btn-outline-primary rounded-pill" href="#">Older</a>
              <a class="btn btn-outline-secondary rounded-pill disabled">Newer</a>
            </nav> -->

                </div>

                <div class="col-md-4" data-aos="zoom-in" data-aos="zoom-in-left">
                    <div class="position-sticky" style="top: 2rem;">
                        <div class="p-4 mb-3 bg-light rounded">
                            <h4 class="fst-italic">About</h4>
                            <p class="mb-0">Customize this section to tell your visitors a little bit about your
                                publication, writers, content, or something else entirely. Totally up to you.</p>
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
                                <li><a href="#" class="btn">GitHub</a></li>
                                <li><a href="#" class="btn">Twitter</a></li>
                                <li><a href="#" class="btn">Facebook</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </main>



<hr>

@endsection