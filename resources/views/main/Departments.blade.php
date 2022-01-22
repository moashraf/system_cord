@extends('main.master')
@section('content')
 

    
    <!-- ====================== start Department Info  ====================== -->
    <div class="department">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="title-department">
                        <h3> {!! $Products_id->name  !!}</h3>
                        <p class="lead">  {!! $Products_id->body  !!} </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ URL::to('/').'/images/'.$Products_id->single_photo}}"     alt="   {!! $Products_id->name  !!}    ">
                </div>
            </div>
        </div>
    </div>
    <!-- ====================== end Department   ====================== -->
    
    <!-- ====================== start Department-info  ====================== -->
    <div class="department-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="department-info-title">
                        <h3>   {!! $Products_id->name  !!} </h3>
                        <p>  {!! $Products_id->body  !!} </p>
                       
                    </div>
                </div>
               <div class="col-lg-4">
                   <h3 class="d">Head Doctors</h3>
                   <div class="box-department-info-img">
                       <img src="{{ URL::to('/').'/images/'.$Products_id->single_photo}}" alt=" {!! $Products_id->name  !!}  ">
                       <p>MEDICAL DOCTOR</p>
                    </div>
               </div>
            </div>
        </div>
    </div>
    <!-- ====================== end Department-Info  ====================== -->
    
    <!-- ====================== start Department-apper  ====================== -->
    <div class="department-apper">
        <div class="container">
<div class="row">
            <div class="col-lg-7">
                <div class="box-department-slider">
                        <div class="owl-carousel owl-theme" id="department">
                                <div class="item">
                                    <div class="box-slider">
                                        <img src="{{ URL::to('/').'/images/'.$Products_id->single_photo}}" alt="cord">
                                        <h4>  Department</h4>
                                    </div>
                                </div>
                              

                            </div>
                </div>
            </div>
            <div class="col-lg-5 appointment">
                    <div class="left">
                        <div class="box-left">
                            <h2>Make an Appointment</h2>
                            <select>
                                <option value="1">option 1</option>
                                <option value="2">option 2</option>
                                <option value="3">option 3</option>
                                <option value="4">option 4</option>
                                <option value="5">option 5</option>
                            </select>
                            <label for="">Name</label>
                            <input type="text" placeholder="Full Name">
                            <label for="">Phone Number</label>
                            <input type="text" placeholder="Phone Number">
                            <label for="">mm/dd/yyy</label>
                            <input type="text" placeholder="mm/dd/yyy">
                            <a href="#">Send request</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ====================== end Department-apper  ====================== -->



























   @endsection
