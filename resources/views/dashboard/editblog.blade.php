@extends('home')
@section('dash-content')
    <!-- ============================================home front section here=================================== -->
    <hr>
    <!-- ================================================trainer and mentor colomn with icon here================================== -->
    <div class="suraiya text-center p-3 rounded-4">
        <h1 class="text-uppercase">Update blog</h1>
    </div>
    <hr>

    </div>

    <!-- ===========================================form design start is here==================================== -->
    <div class="d-lg-flex align-items-center justify-content-around py-3 overflow-hidden" data-aos="zoom-in">
        <div>
            <img src="{{ url('image/webform.png') }}" class="img-fluid preview p-2" alt="banner" height="400" width="400">
        </div>
        <div class="form-menu">
            <form action="{{ url('/updateblog',$blog->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="formFile" class="form-label">Blog Feature Photo</label>
                    <input class="form-control" name="photo" type="file" id="upimg">
                </div>
                <div class="form-floating mb-2">
                    <input type="text" name="title" value="{{ $blog->title }}" class="form-control form-control-sm" id="floatingPassword"
                        placeholder="Blog Title">
                    <label for="floatingPassword"> Blog Title</label>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Blog Content</label>
                    <textarea class="form-control" style="height: 160px;" id="exampleFormControlTextarea1" name="content"
                        placeholder="Submit Blog content" rows="3">{{ $blog->content }}</textarea>
                </div>


                <div class="form-floating mb-2">
                    <input type="text" name="category" class="form-control form-control-sm" id="floatingPassword"
                        placeholder="Password" value="{{ $blog->category }}" autocomplete="true">
                    <label for="floatingPassword">new blog category</label>
                </div>

                <div class="d-grid gap-2">
                    <button class="btn btn-success" type="submit">Update blog</button>
                </div>
            </form>



        </div>





        <!-- ===========================================form design end is here======================================= -->


        <!-- ============================================hanging courses icon here======================================= -->

        <!-- ========================================hanging courses icon here====================================== -->




        <!-- ================================================icon gird here===================================== -->



        <!-- ==============================================icon gird here====================================== -->








        <!-- ==============================================feature title here======================================= -->

        <!-- ===========================================feature title here========================================== -->
    @endsection
