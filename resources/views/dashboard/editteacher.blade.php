
@extends('home')
@section('dash-content')


        <!-- ============================================home front section here=================================== -->
        <hr>
        <!-- ================================================trainer and mentor colomn with icon here================================== -->
<div class="suraiya text-center p-3 rounded-4">
<h1 class="text-uppercase">Submit a teacher data</h1>
</div>
<hr>
        <!-- ===========================================form design start is here==================================== -->
        <div class="d-lg-flex align-items-center justify-content-around py-3 overflow-hidden" data-aos="zoom-in">
            <div>
                <img src="{{ asset('image/webform.png') }}" class="img-fluid" alt="banner" height="400" width="400">
            </div>
            <div class="form-menu">
                <form action="{{url('updateteacher',$teacher->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Enter teacher Your Photo</label>
                    <input class="form-control" name="photo" type="file" id="formFile">
                  </div>
                      <div class="form-floating mb-2">
                        <input type="text" name="name" value="{{ $teacher->name }}" class="form-control form-control-sm" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Enter Your Name</label>
                      </div>
                      <div class="form-floating mb-2">
                        <input type="text" name="number" value="{{ $teacher->number }}" class="form-control form-control-sm" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Enter Your mobile number</label>
                      </div>
                      <div class="form-floating mb-2">
                        <input type="email" name="email" value="{{ $teacher->email }}" class="form-control form-control-sm" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Enter Your Email Address</label>
                      </div>
                      <div class="form-floating mb-2">
                        <input type="text" name="address" value="{{ $teacher->address }}" class="form-control form-control-sm" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Enter Your home Address</label>
                      </div>
                      <div class="form-floating mb-2">
                        <select class="form-select" name="gender" id="floatingSelect" aria-label="Floating label select example">
                          <option selected> {{ $teacher->gender }}</option>
                          <option >Male</option>
                          <option >Female</option>
                          <option >Others</option>
                        </select>
                        <label for="floatingSelect">gender</label>
                      </div>
                      <div class="form-floating mb-2">
                        <select class="form-select" name="section" id="floatingSelect" aria-label="Floating label select example">
                          <option selected> {{ $teacher->section }}</option>
                          <option >A</option>
                          <option >B</option>
                          <option >C</option>
                          <option >D</option>
                        </select>
                        <label for="floatingSelect">section</label>
                      </div>
                      <div class="form-floating mb-2">
                        <select class="form-select" name="department" id="floatingSelect" aria-label="Floating label select example">
                          <option selected> {{ $teacher->department }}</option>
                          <option >Physics</option>
                          <option >Math</option>
                          <option >Bangla</option>
                          <option >English</option>
                          <option >History</option>
                          <option >Biology</option>
                          <option >Computer</option>
                        </select>
                        <label for="floatingSelect">departmental subject</label>
                      </div>
                      <div class="form-floating mb-2">
                        <textarea class="form-control" name="bio" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">teacher bio data</label>
                      </div>
                      <div class="d-grid gap-2">
                        <button class="btn btn-success" type="submit">update Data</button>
                      </div>
                    </form>
            </div>

        </div>





        <!-- ===========================================form design end is here======================================= -->


        <!-- ============================================hanging courses icon here======================================= -->

        <!-- ========================================hanging courses icon here====================================== -->




        <!-- ================================================icon gird here===================================== -->

        

        <!-- ==============================================icon gird here====================================== -->







        
        <!-- ==============================================feature title here======================================= -->

        <!-- ===========================================feature title here========================================== -->




@endsection

