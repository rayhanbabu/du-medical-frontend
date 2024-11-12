<!DOCTYPE html>
<html lang="en">


<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Educom - Education & LMS Template">

    <!-- ========== Page Title ========== -->
    <title> Dr. Mohammad Mortoza Medical Center | University of Dhaka</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{asset('frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/assets/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/assets/css/flaticon-set.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/assets/css/themify-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/assets/css/magnific-popup.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/assets/css/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/assets/css/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/assets/css/animate.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/assets/css/bootsnav.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/style.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/css/responsive.css')}}" rel="stylesheet" />
<!-- News Tricker Block -->

<!-- <link href="assets/newstricker/styles/style.css" rel="stylesheet" type="text/css" /> -->
<!-- <link href="styles/ticker-style.css" rel="stylesheet" type="text/css" /> -->
<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>  -->
<!-- <script src="includes/jquery.ticker.js" type="text/javascript"></script> -->



    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">

</head>

<body>



    <!-- Start Header Top
    ============================================= -->
    <div class="top-bar-area bg-dark text-light">
        <div class="container">
            <div class="row">
             
                <div class="col-md-12">
                    <a href="#"> <span
                            class="deptHeading">  Shahid Buddhijibe Dr. Muhammad Mortaza Medical Centre   </span> 
                    </a>

                 
               </div>

            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header
    ============================================= -->
<!-- ================== Header  =========================== -->
<header id="home">
    <nav class="navbar navbar-default attr-border navbar-sticky bootsnav">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="https://www.du.ac.bd/fontView/assets/img/dulogo-black.png" class="logo logo-scrolled"
                         style="height: 70px;" alt="Logo">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-left" data-in="#" data-out="#">
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">DU Home</a>
                    </li>

                    <li>
                        <a href="{{url('/DUM')}}" class="dropdown-toggle" data-toggle="dropdown">Home</a>
                        <ul class="dropdown-menu">
                            <li></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Visitors & Patient</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('officePage/DUM/Outdoor')}}"> Outdoor Service </a></li>
                            <li><a href="{{url('officePage/DUM/Pathologist')}}"> Pathologist Service </a></li>
                            <li><a href="{{url('officePage/DUM/WardPolicy')}}"> Ward Service </a></li>
                            <li><a href="{{url('officePage/DUM/Ambulance')}}"> Ambulance Service </a></li>
                            <li><a href="{{url('officePage/DUM/OnCallService')}}"> On Call Service</a></li>
                            <li><a href="{{url('officePage/DUM/NursingService')}}"> Nursing  Service</a></li>
                            <li><a href="{{url('officePage/DUM/Equipment')}}"> Equipment's </a></li>  
                          
                        </ul>
                    </li>




                    <li>
                        <a href="{{url('schedule/DUM')}}" class="dropdown-toggle" data-toggle="dropdown"> Duty Schedule</a>
                    </li>

                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">People</a>
                          <ul class="dropdown-menu">
                               <li><a href="{{url('people/DUM/Doctor')}}"> Doctor </a></li>
                               <li><a href="{{url('people/DUM/Staff')}}"> Office & Staff </a></li>
                         </ul>
                     </li>


                    <li>
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Make Appointment</a>
                  </li>


                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- End Header -->

<!--main-container-part-->

    

@yield('content')


     
    
    <!-- Start Footer 
    ============================================= -->
    <footer class="bg-dark text-light">
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <!-- Single item -->
                    <div class="col-md-4 col-sm-6 item equal-height">
                        <div class="f-item about">
                            <h4>About</h4>
                            <p>
                                Excellence decisively nay man yet impression for contrasted remarkably. There spoke happy for you are out. Fertile how old address.
                            </p>
                            <ul>
                                <li>
                                    <p>Email <span><a href="mailto:info@example.com">info@example.com</a></span></p>
                                </li>
                                <li>
                                    <p>Office <span>123 6th St. Melbourne, FL 32904</span></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single item -->

                    <!-- Single item -->
                    <div class="col-md-2 col-sm-6 item equal-height">
                        <div class="f-item link">
                            <h4>Categories</h4>
                            <ul>
                                <li>
                                    <a href="#"><i class="ti-angle-right"></i> All Courses</a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-angle-right"></i> Event</a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-angle-right"></i> Digital Marketing</a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-angle-right"></i> Design & Branding</a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-angle-right"></i> Storytelling</a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-angle-right"></i> Education</a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-angle-right"></i> Geography</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single item -->

                    <!-- Single item -->
                    <div class="col-md-2 col-sm-6 item equal-height">
                        <div class="f-item link">
                            <h4>Support</h4>
                            <ul>
                                <li>
                                    <a href="#"><i class="ti-angle-right"></i> Documentation</a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-angle-right"></i> Forums</a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-angle-right"></i> Language Packs</a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-angle-right"></i> Release Status</a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-angle-right"></i> LearnPress</a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-angle-right"></i> Feedback</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single item -->

                    <!-- Single item -->
                    <div class="col-md-4 col-sm-6 item equal-height">
                        <div class="f-item popular-courses">
                            <h4>Popular Courses</h4>
                          
                        </div>
                    </div>
                    <!-- End Single item -->
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; Copyright 2020. <a href="#">University of Dhaka</a>, All Rights Reserved</p>
                    </div>
                    <div class="col-md-6 text-right link">
                        <ul>
                            <li>
                                <a href="#">Terms of user</a>
                            </li>
                            <li>
                                <a href="#">License</a>
                            </li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{asset('frontend/assets/js/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/equal-height.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.appear.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/modernizr.custom.13711.js')}}"></script>
    <script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/js/wow.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/progress-bar.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/count-to.js')}}"></script>
    <script src="{{asset('frontend/assets/js/YTPlayer.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/loopcounter.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/bootsnav.js')}}"></script>
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>
    <!-- News Tricker -->
<!-- <link href="assets/newstricker/styles/ticker-style.css" rel="stylesheet" type="text/css" /> -->
<!-- <script type="text/javascript"> -->
    <!-- $(function () { -->
        <!-- $('#js-news').ticker(); -->
    <!-- }); -->
<!-- </script> -->
    <!-- <script src="assets/newstricker/includes/jquery.ticker.js" type="text/javascript"></script> -->
    <!-- <script src="assets/newstricker/includes/site.js" type="text/javascript"></script> -->
</body>

<!-- Mirrored from validtemplate.com/themeforest/educom/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Aug 2020 21:53:43 GMT -->

</html>