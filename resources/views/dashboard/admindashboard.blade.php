@extends('home')
@section('dash-content')
<div class="row">
    <div class="col-lg-6 col-md-12 col-sm-12 ">
        <div style="background: green;" class="card d-flex flex-row p-2 justify-content-around align-items-center">
            <div class="count">
                <h3>Students</h3>
                <h3>3000</h3>
            </div>
            <img src="{{ asset('image/1.jpg') }}" alt="photo" class="rounded-circle border border-3 border-white" height="60" width="60">
        </div>
    </div>

    <div class="col-lg-6 col-md-12 col-sm-12 ">
        <div style="background: green;" class="card d-flex flex-row p-2 justify-content-around align-items-center">
            <div class="count">
                <h3>Teachers</h3>
                <h3>3000</h3>
            </div>
            <img src="{{ asset('image/1.jpg') }}" alt="photo" class="rounded-circle border border-3 border-white" height="60" width="60">
        </div>
    </div>

    
</div>

@endsection