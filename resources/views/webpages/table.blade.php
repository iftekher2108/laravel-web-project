
@extends('webpages.master')
@section('content')


        <!-- ============================================home front section here=================================== -->
        <hr>

        <!-- ================================================trainer and mentor colomn with icon here================================== -->







        <!-- ============================================hanging courses icon here======================================= -->

        <!-- ========================================hanging courses icon here====================================== -->




        <!-- ================================================icon gird here===================================== -->


        <!-- ==============================================icon gird here====================================== -->






        <!-- ==============================================feature title here======================================= -->

        <!-- ===========================================feature title here========================================== -->


<!-- ==========================================table design start is here======================= -->
<div class="text-center rounded-4 suraiya p-1 m-2" data-aos="zoom-in">
    <h1 style=" text-decoration: underline;">Student Information Is Here.</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum ratione voluptatem doloremque, nam rerum in impedit tempore molestias adipisci dolores veniam deserunt repellendus accusantium provident, recusandae aliquam hic fugit optio?</p>
        </div>
        <hr>
            @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

    <h1>Total Student's: {{ count($student) }} </h1>
    <span class="h4">total Computer Science student's : {{ count($student->where('technology','Computer Science')) }} |</span>
    <span class="h4">total Civil student's : {{ count($student->where('technology','Civil')) }} |</span>
    <span class="h4">total Power student's : {{ count($student->where('technology','Power')) }} |</span>
    <span class="h4">total Mechanical student's : {{ count($student->where('technology','Mechanical')) }} |</span>
    <span class="h4">total  Electrical student's : {{ count($student->where('technology','Electrical')) }} |</span>
    <span class="h4">total Electronics student's : {{ count($student->where('technology','Electronics')) }} </span>
    <hr>
    <div id="table-wrapper">
    <table class="table text-center table-borderless" data-aos="zoom-in-up">
        <tr>
            <th>Photo</th>
            <th>Name</th>
            <th>Roll</th>
            <th>Email</th>
            <th>Technology</th>
            <th>Semister</th>
            <th>Shift</th>
            <th>Group Section</th>
            <th> detail</th>
        </tr>


            
        @foreach ($student as $students)

        <tr>
            <td><img class="rounded-circle" src="{{ asset('/upload/student')}}/{{$students->photo }}" alt="photo" height="50" width="50"></td>
            <td>{{ $students->name }}</td>
            <td>{{ $students ->roll }}</td>
            <td>{{ $students->email }}</td>
            <td>{{ $students->technology }}</td>
            <td>{{ $students->semister }}</td>
            <td>{{ $students->shift }}</td>
            <td>{{ $students->group }}</td>
            <td><a href="{{ url('studentprofile',$students->id) }}"   class="nav-link"><button class="btn btn-success">View</button></a></td>
        </tr>

        @endforeach
        {{-- <tr>
            <td>Sabrina Nuri Suraiya</td>
            <td>120134</td>
            <td>Suraiya@gmail.com</td>
            <td>Science</td>
            <td>10th</td>
            <td>First Shift</td>
            <td>Section A</td>
        </tr>
        <tr>
            <td>Yeasin Arafat Rabby</td>
            <td>356788</td>
            <td>Rabby@gmail.com</td>
            <td>Textile</td>
            <td>Fifth</td>
            <td>First Shift</td>
            <td>Section A</td>
        </tr>
        <tr>
            <td>Shihab</td>
            <td>189201</td>
            <td>Shihab@gmail.com</td>
            <td>Computer</td>
            <td>8th</td>
            <td>First Shift</td>
            <td>Section B</td>
        </tr>
        <tr>
            <td> fahim islam anik</td>
            <td>192821</td>
            <td>anik@gmail.com</td>
            <td>Computer</td>
            <td>8th</td>
            <td>First Shift</td>
            <td>Section B</td>
        </tr>
        <tr>
            <td>parvez khan</td>
            <td>648432</td>
            <td>parvez@gmail.com</td>
            <td>Computer</td>
            <td>10th</td>
            <td>First Shift</td>
            <td>Section B</td>
        </tr>
        <tr>
            <td>Trina islam</td>
            <td>Null</td>
            <td>trina@gmail.com</td>
            <td>Science</td>
            <td>Null</td>
            <td>Null</td>
            <td>Null</td>
        </tr>
        <tr>
            <td>arohi tabassum</td>
            <td>120134</td>
            <td>tabassum@gmail.com</td>
            <td>Science</td>
            <td>10th</td>
            <td>First Shift</td>
            <td>Section A</td>
        </tr> --}}

      </table>
    </div>

    <hr>


    
    <h1>Total Teacher's: {{ count($teacher) }} </h1>
    <span class="h4">total Physics teacher's : {{ count($teacher->where('department','Physics')) }} |</span>
    <span class="h4">total Math teacher's : {{ count($teacher->where('department','Math')) }} |</span>
    <span class="h4">total Bangla teacher's : {{ count($teacher->where('department','Bangla')) }} |</span>
    <span class="h4">total English teacher's : {{ count($teacher->where('department','English')) }} |</span>
    <span class="h4">total  History teacher's : {{ count($teacher->where('department','History')) }} |</span>
    <span class="h4">total Biology teacher's : {{ count($teacher->where('department','Biology')) }} |</span>
    <span class="h4">total Computer teacher's : {{ count($teacher->where('department','Computer')) }} </span>
    <hr>
    <div id="table-wrapper">
    <table class="table text-center table-borderless" data-aos="zoom-in-up">
        <tr>
            <th>Photo</th>
            <th>Name</th>
            <th>Number</th>
            <th>Email</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Section</th>
            <th>Department</th>
            <th>Detail</th>
        </tr>


            
        @foreach ($teacher as $teachers)

        <tr>
            <td><img class="rounded-circle" src="{{ asset('/upload/teacher')}}/{{$teachers->photo }}" alt="photo" height="50" width="50"></td>
            <td>{{ $teachers->name }}</td>
            <td>{{ $teachers ->number }}</td>
            <td>{{ $teachers->email }}</td>
            <td>{{ $teachers->address }}</td>
            <td>{{ $teachers->gender }}</td>
            <td>{{ $teachers->section }}</td>
            <td>{{ $teachers->department }}</td>
            <td><a href="{{ url('teacher-profile',$teachers->id) }}"   class="nav-link"><button class="btn btn-success">View</button></a></td>
        </tr>

        @endforeach

    </table>
    </div>


<h3 style=" text-decoration: underline;">Lorem ipsum dolor sit amet.</h3>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit ad animi laudantium, fugiat cumque praesentium ex vitae eum! Deleniti eum ab, aut optio eius assumenda temporibus ex error. Iste, hic.</p>

<!-- =========================================table design end is here==================================== -->
<hr>




@endsection