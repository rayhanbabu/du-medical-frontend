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
                                        <h1> {{$data[0]['service_name']}} Schedule </h1>
                                    <ul class="breadcrumb">
                    <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li class="active"> Duty Schedule</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

 <!-- Start content ============================================= -->
<div class="course-details-area default-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="courses-info">
                    <div class="tab-info">
                        <div class="panel panel-primary">
                            <div class="panel-heading" id="heading-gradiant"> {{$data[0]['service_name']}} Schedule </div>
                            <div class="panel-body text-justify">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            
                                        </div>

                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="nocList" class="table table-bordered table-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                 <th> Name </th>
                                                 <th> Saturday  </th>
                                                 <th> Sunday </th>
                                                 <th> Monday </th>
                                                 <th> Tuesday </th>
                                                 <th> Wednesday </th>
                                                 <th> Thursday </th>
                                                 <th> Friday </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                         @foreach($data as $row) 
                                          <tr> 
                                              <td> {{$row['name']}} </td>
                                              <td> {{$row['Saturday']}} </td>
                                              <td> {{$row['Sunday']}} </td>
                                              <td> {{$row['Monday']}} </td>
                                              <td> {{$row['Tuesday']}} </td>
                                              <td> {{$row['Wednesday']}} </td>
                                              <td> {{$row['Thursday']}} </td>
                                              <td> {{$row['Friday']}} </td>
                                            
                                          </tr>
                                          @endforeach

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- End content ============================================= -->

   
    
    
   


@endsection 