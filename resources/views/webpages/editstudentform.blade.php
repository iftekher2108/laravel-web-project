
        <!-- ====================================home front section here============================= -->
@extends('home')
@section('dash-content')


        <!-- ============================================home front section here=================================== -->

        <!-- ================================================trainer and mentor colomn with icon here================================== -->
<div class="suraiya text-center p-3 rounded-4">
<h1 class="text-uppercase">Lorem ipsum dolor sit amet.</h1>
</div>
<hr>
        <!-- ===========================================form design start is here==================================== -->
        <div class="d-lg-flex align-items-center justify-content-around py-3 overflow-hidden" data-aos="zoom-in">
            <div>
                <img src="{{asset('image/webform.png')}}" class="img-fluid" alt="banner" height="400" width="400">
            </div>
            <div class="form-menu">
                <h1 class="mb-2 mt-0 p-0">update your data</h1>
                <form action="{{url('/update',$student->id)}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Enter Your Photo</label>
                    <input class="form-control" name="photo" type="file" id="formFile">
                  </div>
                    <div class="form-floating mb-2">
                        <input type="text" name="roll" value="{{ $student->roll }}" class="form-control form-control-sm" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Enter Your Roll</label>
                      </div>
                      <div class="form-floating mb-2">
                        <input type="text" name="name" value="{{ $student->name }}" class="form-control form-control-sm" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Enter Your Name</label>
                      </div>
                      <div class="form-floating mb-2">
                        <input type="email" name="email" value="{{ $student->email }}" class="form-control form-control-sm" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Enter Your Email Address</label>
                      </div>
                      <div class="form-floating mb-2">
                        <select class="form-select" name="technology" id="floatingSelect" aria-label="Floating label select example">
                          <option selected>{{ $student->technology }}</option>
                          <option >Computer Science</option>
                          <option >Civil</option>
                          <option >Power</option>
                          <option >Mechanical</option>
                          <option >Electrical</option>
                          <option >Electronics</option>
                        </select>
                        <label for="floatingSelect">Technology</label>
                      </div>
                      <div class="form-floating mb-2">
                        <select class="form-select" name="semister" id="floatingSelect" aria-label="Floating label select example">
                          <option selected>{{ $student->semister }}</option>
                          <option >First</option>
                          <option >Second</option>
                          <option >Third</option>
                          <option >Forth</option>
                          <option >Fifth</option>
                          <option >Sixth</option>
                          <option >Seventh</option>
                          <option >Eighth</option>
                        </select>
                        <label for="floatingSelect">Semister</label>
                      </div>
                      <div class="form-floating mb-2">
                        <select class="form-select" name="shift" id="floatingSelect" aria-label="Floating label select example">
                          <option selected>{{ $student->shift }}</option>
                          <option >First</option>
                          <option >Second</option>
                        </select>
                        <label for="floatingSelect">Shift</label>
                      </div>
                      <div class="form-floating mb-2">
                        <select class="form-select" name="group" id="floatingSelect" aria-label="Floating label select example">
                          <option selected>{{ $student->group }}</option>
                          <option >A</option>
                          <option >B</option>
                        </select>
                        <label for="floatingSelect">Group Section</label>
                      </div>
                      <div class="form-floating mb-2">
                        <textarea class="form-control" name="bio" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">student bio data</label>
                      </div>


                      <div class="d-grid gap-2">
                        <button class="btn btn-success" type="submit">Update Data</button>
                      </div>
                    </form>
            </div>

        </div>
        <hr>





        <!-- ===========================================form design end is here======================================= -->


        <!-- ============================================hanging courses icon here======================================= -->

        <!-- ========================================hanging courses icon here====================================== -->




        <!-- ================================================icon gird here===================================== -->

        

        <!-- ==============================================icon gird here====================================== -->







        
        <!-- ==============================================feature title here======================================= -->

        <!-- ===========================================feature title here========================================== -->





@endsection









        <!-- =============================================footer bar============================================== -->