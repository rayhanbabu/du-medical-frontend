@extends('home.layout')
@section('content')


<!-- Start content ============================================= -->
<!-- Start Breadcrumb
============================================= -->
<div class="clearfix"></div>
<div class="breadcrumb-area shadow dark  text-center text-light" style="background-image: url(https://www.du.ac.bd/fontView/assets/img/details_info.jpg); height: 300px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                                        <h1> {{$data[0]['title']}}</h1>
                                    <ul class="breadcrumb">
                    <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li class="active"> {{$data[0]['pagecategory_id']}}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->


<!-- Start Course Details
    ============================================= -->
    <div class="course-details-area default-padding">
        <div class="container">
            <div class="row">
                <!-- Start Course Info -->
                <div class="col-md-12">
    
                    <div class="top-author">
                        <div class="author-items"
                            style="border-top: 3px solid #1C4370;box-shadow:0 0 10px rgba(50, 50, 50, .17);">
                                                    <div class="col-sm-3 col-lg-2">
                              
                            </div>
                            <div class="col-lg-10 col-sm-9">
                                <div class="row">
                                   
    
                                </div>
    
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-sm-12 text-justify margin-top-30px">

                                 <p>  {!! $data[0]['desc'] !!} </p>
                    
                          </div>
                                        
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


   


@endsection 