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
                                        <h1> Duty Schedile</h1>
                                    <ul class="breadcrumb">
                    <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li class="active"> Duty Schedule</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->




   <!-- Start Blog 
    ============================================= -->
    <div class="blog-area default-padding bottom-less">
        <div class="container">
   
            <div class="row">
                <div class="blog-items">


                 @foreach($data as $row)
                    <!-- Single Item -->
                    <div class="col-md-4 single-item" style="border-radius: 7px;" >
                        <div class="item ">
                            <div class="thumb" style="padding: 10px;">
                                
                            </div>
                            <div class="info">
                             
                                <div class="content" style="display: flex; flex-direction: column; align-items: center;">
                                  
                                    <h4 class="text-center">
                                        <a href="#" class="text-center" style="text-align: center;"> {{$row['service_name']}}
                                        </a>
                                    </h4>
                                   
                                    <a href="{{url('scheduleDetail/DUM/'.$row["service_name"])}}"><i class="fas fa-plus"></i> View Schedule</a>
                                 
                                 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                @endforeach

                   


                   

            
                </div>
            </div>
        </div>
        
    </div>

    
    


   


@endsection 