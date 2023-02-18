@extends('home')
@section('dash-content')
    <!-- ============================================home front section here=================================== -->
    <hr>
    <!-- ================================================trainer and mentor colomn with icon here================================== -->
    <div class="suraiya text-center p-3 rounded-4">
        <h1 class="text-uppercase">Submit blog</h1>
    </div>
    <hr>

    </div>

    <!-- ===========================================form design start is here==================================== -->
    <div class="d-lg-flex align-items-center justify-content-around py-3 overflow-hidden" data-aos="zoom-in">
        <div>
            <img src="{{ url('image/webform.png') }}" class="img-fluid" alt="banner" height="400" width="400">
        </div>
        <div class="form-menu">
            <form action="{{ url('/storeblog') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="formFile" class="form-label">Blog Feature Photo</label>
                    <input class="form-control" name="photo" type="file" id="formFile">
                </div>
                <div class="form-floating mb-2">
                    <input type="text" name="title" class="form-control form-control-sm" id="floatingPassword"
                        placeholder="Password">
                    <label for="floatingPassword"> Blog Title</label>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Blog Content</label>
                    <textarea class="form-control" style="height: 160px;" id="exampleFormControlTextarea1" name="content"
                        placeholder="Submit Blog content" rows="3"></textarea>
                </div>


                <div class="form-floating mb-2">
                    <input type="text" name="category" class="form-control form-control-sm" id="floatingPassword"
                        placeholder="Password" autocomplete="true">
                    <label for="floatingPassword">new blog category</label>
                </div>

                <div class="d-grid gap-2">
                    <button class="btn btn-success" type="submit">Insert blog Data</button>
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
