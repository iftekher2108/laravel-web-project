{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iftekher mahmud website</title>
    <link rel="stylesheet" href="custom/style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <!-- aos entry animation libary -->
  <link rel="stylesheet" href="aos/aos.css" />
  <!-- aos entry animation libary -->
    <link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">
    <!-- Custom styles for this template -->
</head>

<body id="home">
    <!-- ======================================navigation menu bar here====================================== -->
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img class="rounded-circle" src=" image/iftekher.jpg" alt="website logo"
                    height="50" width="50"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>

            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{url('/')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('gellery')}}">gellery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{url('blog')}}">blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('about')}}">about us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('policy')}}">private policy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="teacher.html">Teacher</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="student.html">student</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('form')}}">Form</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('table')}}">table</a>
          </li>
        </ul>

            </div>
        </div>
    </nav>
    <!-- =========================================navigation menu bar here========================================= -->
    <!-- ==========================================body contrainer here================================= -->
    <div class="container-fluid"> --}}
        <!-- ====================================home front section here============================= -->

        <!-- ============================================home front section here=================================== -->

        <!-- ==============================================trainer and mentor colomn with icon here================================== -->

        <!-- ================================================trainer and mentor colomn with icon here================================== -->



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
            </div>

            <div class="row g-5 ">
                <div class="col-md-8 bg-light" data-aos="zoom-in-right">
                    <h3 class="pb-4 mb-4 fst-italic border-bottom">
                        From the Firehose
                    </h3>

                    <article class="blog-post">
                        <h2 class="blog-post-title mb-1">Sample blog post</h2>
                        <p class="blog-post-meta">January 1, 2021 by <a href="#">Iftekher Mahmud</a></p>

                        <p>This blog post shows a few different types of content that’s supported and styled with
                            Bootstrap. Basic typography, lists, tables, images, code, and more are all supported as
                            expected.</p>
                        <hr>
                        <p>This is some additional paragraph placeholder content. It has been written to fill the
                            available space and show how a longer snippet of text affects the surrounding content. We'll
                            repeat it often to keep the demonstration flowing, so be on the lookout for this exact same
                            string of text.</p>
                        <h2>Blockquotes</h2>
                        <p>This is an example blockquote in action:</p>
                        <blockquote class="blockquote">
                            <p>Quoted text goes here.</p>
                        </blockquote>
                        <p>This is some additional paragraph placeholder content. It has been written to fill the
                            available space and show how a longer snippet of text affects the surrounding content. We'll
                            repeat it often to keep the demonstration flowing, so be on the lookout for this exact same
                            string of text.</p>
                        <h3>Example lists</h3>
                        <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the
                            other highly repetitive body text used throughout. This is an example unordered list:</p>
                        <ul>
                            <li>First list item</li>
                            <li>Second list item with a longer description</li>
                            <li>Third list item to close it out</li>
                        </ul>
                        <p>And this is an ordered list:</p>
                        <ol>
                            <li>First list item</li>
                            <li>Second list item with a longer description</li>
                            <li>Third list item to close it out</li>
                        </ol>
                        <p>And this is a definition list:</p>
                        <dl>
                            <dt>HyperText Markup Language (HTML)</dt>
                            <dd>The language used to describe and define the content of a Web page</dd>
                            <dt>Cascading Style Sheets (CSS)</dt>
                            <dd>Used to describe the appearance of Web content</dd>
                            <dt>JavaScript (JS)</dt>
                            <dd>The programming language used to build advanced Web sites and applications</dd>
                        </dl>
                        <h2>Inline HTML elements</h2>
                        <p>HTML defines a long list of available inline tags, a complete list of which can be found on
                            the <a href="https://developer.mozilla.org" title="Software Engineer">IFTEKHER MAHMUD</a>.
                        </p>
                        <ul>
                            <li><strong>To bold text</strong>, use <code
                                    class="language-plaintext highlighter-rouge">&lt;strong&gt;</code>.</li>
                            <li><em>To italicize text</em>, use <code
                                    class="language-plaintext highlighter-rouge">&lt;em&gt;</code>.</li>
                            <li>Abbreviations, like <abbr title="HyperText Markup Language">HTML</abbr> should use <code
                                    class="language-plaintext highlighter-rouge">&lt;abbr&gt;</code>, with an optional
                                <code class="language-plaintext highlighter-rouge">title</code> attribute for the full
                                phrase.</li>
                            <li>Citations, like <cite>— Mark Otto</cite>, should use <code
                                    class="language-plaintext highlighter-rouge">&lt;cite&gt;</code>.</li>
                            <li><del>Deleted</del> text should use <code
                                    class="language-plaintext highlighter-rouge">&lt;del&gt;</code> and
                                <ins>inserted</ins> text should use <code
                                    class="language-plaintext highlighter-rouge">&lt;ins&gt;</code>.</li>
                            <li>Superscript <sup>text</sup> uses <code
                                    class="language-plaintext highlighter-rouge">&lt;sup&gt;</code> and subscript
                                <sub>text</sub> uses <code
                                    class="language-plaintext highlighter-rouge">&lt;sub&gt;</code>.</li>
                        </ul>
                        <p>Most of these elements are styled by browsers with few modifications on our part.</p>
                        <h2>Heading</h2>
                        <p>This is some additional paragraph placeholder content. It has been written to fill the
                            available space and show how a longer snippet of text affects the surrounding content. We'll
                            repeat it often to keep the demonstration flowing, so be on the lookout for this exact same
                            string of text.</p>
                        <h3>Sub-heading</h3>
                        <p>This is some additional paragraph placeholder content. It has been written to fill the
                            available space and show how a longer snippet of text affects the surrounding content. We'll
                            repeat it often to keep the demonstration flowing, so be on the lookout for this exact same
                            string of text.</p>
                        <pre><code>Example code block</code></pre>
                        <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the
                            other highly repetitive body text used throughout.</p>
                    </article>

                    <article class="blog-post">
                        <h2 class="blog-post-title mb-1">Another blog post</h2>
                        <p class="blog-post-meta">December 23, 2020 by <a href="#">iftekher mahmud</a></p>

                        <p>This is some additional paragraph placeholder content. It has been written to fill the
                            available space and show how a longer snippet of text affects the surrounding content. We'll
                            repeat it often to keep the demonstration flowing, so be on the lookout for this exact same
                            string of text.</p>
                        <blockquote>
                            <p>Longer quote goes here, maybe with some <strong>emphasized text</strong> in the middle of
                                it.</p>
                        </blockquote>
                        <p>This is some additional paragraph placeholder content. It has been written to fill the
                            available space and show how a longer snippet of text affects the surrounding content. We'll
                            repeat it often to keep the demonstration flowing, so be on the lookout for this exact same
                            string of text.</p>
                        <h3>Example table</h3>
                        <p>And don't forget about tables in these posts:</p>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Upvotes</th>
                                    <th>Downvotes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Alice</td>
                                    <td>10</td>
                                    <td>11</td>
                                </tr>
                                <tr>
                                    <td>Bob</td>
                                    <td>4</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>Charlie</td>
                                    <td>7</td>
                                    <td>9</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td>Totals</td>
                                    <td>21</td>
                                    <td>23</td>
                                </tr>
                            </tfoot>
                        </table>

                        <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the
                            other highly repetitive body text used throughout.</p>
                    </article>

                    <article class="blog-post">
                        <h2 class="blog-post-title mb-1">New feature</h2>
                        <p class="blog-post-meta">December 14, 2020 by <a href="#">iftekher mahmud</a></p>

                        <p>This is some additional paragraph placeholder content. It has been written to fill the
                            available space and show how a longer snippet of text affects the surrounding content. We'll
                            repeat it often to keep the demonstration flowing, so be on the lookout for this exact same
                            string of text.</p>
                        <ul>
                            <li>First list item</li>
                            <li>Second list item with a longer description</li>
                            <li>Third list item to close it out</li>
                        </ul>
                        <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the
                            other highly repetitive body text used throughout.</p>
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
                        </div>

                        <div class="p-4 bg-light">
                            <h4 class="fst-italic">Elsewhere</h4>
                            <ol class="list-unstyled">
                                <li><a href="#">GitHub</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Facebook</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </main>





@endsection


        <!-- ========================================post code end here====================================== -->


        <!-- ================================================icon gird here===================================== -->



        <!-- ==============================================icon gird here====================================== -->







        <!-- ==============================================feature title here======================================= -->

        <!-- ===========================================feature title here========================================== -->















        <!-- =============================================footer bar============================================== -->
{{-- 
        <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark shadow-lg"
                style="background-image: url('unsplash-photo-2.jpg');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                    <!-- <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines</h3> -->
                    <footer class="py-5">
                        <div class="row">
                            <div class="col-6 col-md-2 mb-3">
                                <h5>Developer & IT</h5>
                                <ul class="nav flex-column">
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Web app
                                            dev</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Javascript
                                            dev</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">C# dev</a>
                                    </li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Android
                                            dev</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">desktop app
                                            dev</a></li>
                                </ul>
                            </div>

                            <div class="col-6 col-md-2 mb-3">
                                <h5>Business Development</h5>
                                <ul class="nav flex-column">
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Cloud
                                            System</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">System
                                            Security</a></li>
                                    <li class="nav-item mb-2"><a href="#"
                                            class="nav-link p-0 text-muted">DynamicRedirection</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Power
                                            Platform</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Industry
                                            Works</a></li>
                                </ul>
                            </div>

                            <div class="col-6 col-md-2 mb-3">
                                <h5>Companies Services</h5>
                                <ul class="nav flex-column">
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">career
                                            Development</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Device For
                                            Education</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Company Job
                                            news</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                                    <!-- <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li> -->
                                </ul>
                            </div>

                            <div class="col-md-5 offset-md-1 mb-3">
                                <form>
                                    <h5>Subscribe to our Website </h5>
                                    <p>Weekly digest of what's new and exciting news from us.</p>
                                    <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                                        <label for="newsletter1" class="visually-hidden">Email address</label>
                                        <input id="newsletter1" type="text" class="form-control"
                                            placeholder="Enter Your Email Address">
                                        <button class="btn btn-success" type="button">Subscribe</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="d-flex flex-column flex-sm-row justify-content-between py-2 my-2 border-top">
                            <p class="m-auto">&copy; 2022 SK Group LTD, Inc. All rights reserved.</p>
                            <ul class="list-unstyled d-flex">
                                <li class="ms-3"><a class="link-light" title="Twitter" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                            <path
                                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                        </svg></a></li>
                                <li class="ms-3"><a class="link-light" title="Instagram" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                            <path
                                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                        </svg></a></li>
                                <li class="ms-3"><a class="link-light" title="Facebook" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                        </svg></a></li>
                                <li class="ms-3"><a class="link-light" title="Whatsapp" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                            <path
                                                d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                        </svg></a></li>
                            </ul>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
        <!-- =====================================footer bar================================== -->

    </div>
    <!-- ==========================================contrainer here===================================== -->
    <a href="#home"><img src="image/up.svg" class="arrow" alt="arrow"></a>

    <script src="js/bootstrap.min.js"></script>
    <script src="popper/popper.min.js"></script>
  <script src="aos/aos.js"></script>
  <script>
    AOS.init({
      offset: 250,
      duration: 1000,
      once: false,
      mirror: false

    });
  </script>
</body>

</html> --}}