@extends('webpages.master')
@section('content')

    <!-- ====================================home front section here============================= -->


  <div class="home-hero" style=" background: linear-gradient(145deg,#16b485 5%,transparent 40%,transparent 45%),url({{ asset('image/home-background.jpeg') }});">
<div class="row m-0 px-1 d-flex flex-column justify-content-center align-items-center">
  <div class="col-lg-6 col-sm-12  py-5 my-5 mx-0">
    <h1 class="fw-bolder text-capitalize">Funroom Homework Tutoring</h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus, aperiam!</p>

    <div class="btn-group hstack gap-3">
      <button class="btn btn-outline-success border border-1 border-success">Learn More</button>
      <button class="btn btn-outline-success border border-1 border-success">View More</button>
    </div>
  </div>

</div>

</div>











    <!-- ============================================home front section here=================================== -->
    <!-- ==============================================trainer and mentor colomn with icon here================================== -->
    <div class="px-4 py-5 rounded-4 m-0" id="featured-3" data-aos="zoom-in-right">
      <h2 class="pb-2 border-bottom">Teacher and Trainer List</h2>
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            @for ($i=0;$i<count($teacher);$i++)
            <div class="swiper-slide">
              <div class="feature btn" data-aos="zoom-in-right" data-aos-duration="1500">
                <div
                  class="overflow-hidden">
                  <img src="{{ asset('upload/teacher/'.$teacher[$i]->photo) }}" class="vstack mx-auto rounded" alt="image" width="250" height="200">
                </div>
                <h3 class="fs-2 text-start">{{ $teacher[$i]->name }}</h3>
                <h5 class="m-0 p-0 text-start">ID NO: {{ $teacher[$i]->id }}</h5>
                <h5 class="m-0 p-0 text-start">Department: {{ $teacher[$i]->department }}</h5>
                <p class="m-0 p-0 text-start">Email: {{ $teacher[$i]->email }}</p>
                <p class="m-0 p-0 text-start">Home Address: {{ $teacher[$i]->address }}</p>
                <p class="m-0 p-0 text-start">{{ $teacher[$i]->email }}</p>
                <a href="tel:{{ $teacher[$i]->number }}" class="btn btn-success">
                  contact with us
                </a>
              </div>
            </div>
            @endfor
          </div>
          <br>
          <br>
          <div class="swiper-pagination"></div>
        
        
    </div>

    <!-- ================================================trainer and mentor colomn with icon here================================== -->







    <!-- ================================================student list gird here===================================== -->
    <hr>
    <div class="px-4 py-5 rounded-4 m-0" id="icon-grid" data-aos="zoom-in">
      <h2 class="pb-2 border-bottom">Student List</h2>

        <div class="swiper studentSwiper">
          <div class="swiper-wrapper">

            @for ($i=0; $i<count($student); $i++)

            <div class="swiper-slide">
            <div class="overflow-hidden">
              <img src="{{ asset('/upload/student/'.$student[$i]->photo )}}" class="rounded" width="100" height="100">
              <div>
                <h3 class="fw-bold mb-0 fs-4">name: {{ $student[$i]->name }}</h3>
                  <p class="m-0 p-0">roll: {{$student [$i]->roll}}</p>
                  <p class="m-0 p-0">Technology: {{ $student[$i]->technology }}</p>
                  <p class="m-0 p-0">Semister: {{ $student[$i]->semister }}</p>
                  <p class="m-0 p-0">group: {{ $student[$i]->group }}</p>
              
              </div>
            </div>




            </div>

    
            @endfor

          </div>
          <br>
          <br>
          <div class="swiper-pagination"></div>
    </div>

    <!-- ==============================================student list gird here====================================== -->



    <hr>
    <!-- ==============================================feature title here======================================= -->
    <div class="px-4 py-5 mb-4 rounded-4 m-0 overflow-hidden" >
      <h2 class="pb-2 border-bottom">Latest News</h2>

      <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5" data-aos="zoom-in-right">
        <div class="d-flex flex-column align-items-start gap-2">
          <h3 class="fw-bold">Left-aligned front view stylishing feature</h3>
          <p class="text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque sit atque voluptatibus consequuntur repudiandae aspernatur temporibus, pariatur autem tempora dicta.</p>
          <a href="{{ url('blog') }}" class="btn btn-success btn-lg">See More</a>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 g-4" data-aos="zoom-in-right" data-aos-duration="1500">
        

          @for ($i=0;$i<4;$i++)
          <div class="d-flex flex-column gap-2 btn">
            <a class="nav-link" href="{{ url('blogshow/'.$blog[$i]->id) }}">

            <div
              class="rounded-3">
              <img src="{{ asset('upload/blog/'.$blog[$i]->photo) }}" class="rounded" width="100" height="100">

            </div>
            <h4 class="fw-semibold mb-0">{{ $blog[$i]->title }}</h4>
            <small>date: {{ $blog[$i]->created_at }}</small>
            <p class="text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti, saepe consectetur.</p>
         <a href="javascript:void(0)" class="nav-link text-success">Read More...</a>
           </a>
        </div>
      
          @endfor


        </div>
      </div>


    </div>
    <!-- ===========================================feature title here========================================== -->
    <hr>


@endsection











    <!-- =============================================footer bar============================================== -->
