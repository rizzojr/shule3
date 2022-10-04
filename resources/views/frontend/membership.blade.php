<!DOCTYPE html>
<html class="no-js" lang="en">
@include('layouts.head')

<body id="home">
  <!-- start of theSchool to-header -->
  @include('layouts.topheader')
  <!-- End of theSchool top-header -->

  <!-- Start of theSchool Navbar -->


@include('layouts.nav')


  <!-- End of theSchool Navbar -->

<!--Breadcrubm area start-->
<section class="educa-breadcrumb-area-start space">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="educa-breadcrumb-content">
                    <h1>Membership</h1>
                    <p><a href="{{url('/')}}">Home</a>/ <span>Features</span>/ <span>Membership</span></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Breadcrubm area end-->

<div class="educa-memebership-area-start space">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="educa-project-title">
                    <div class="educa-project-text">
                        <h2>Simple, Transparent membership Plan</h2>
                        <span>consequatur doloribus obcaecati nemo modi, <br>esse eaque numquam recusandae libero porro non?</span>
                    </div>
                    <div class="educa-project-link">
                        <a href="javascript:void(0)">Contact Us <i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="educa-membership-plan-context">
                    <div class="educa-membership-single">
                        <div class="educa-plan-header">
                            <i class="fad fa-globe-asia"></i>
                            <div class="educa-plan-head-right">
                                <h5>Contact Us</h5>
                                <a href="javascript:void(0)">Get Started <i class="fal fa-share"></i></a>
                            </div>
                        </div>
                        <div class="educa-plan-body">
                            <ul class="educa-plan-lists">
                                <li><a href="javascript:void(0)">All limited links</a></li>
                                <li><a href="javascript:void(0)">Own analytic platforms</a></li>
                                <li><a href="javascript:void(0)">Chat supports</a></li>
                                <li><a href="javascript:void(0)">Optimize course plan</a></li>
                                <li><a href="javascript:void(0)">Unlimited Download</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="educa-membership-single change-active">
                        <div class="educa-plan-head">
                            <h6 class="educa-plan-name">Intro</h6>
                            <h1>$16 <small>/Month</small></h1>
                            <a href="javascript:void(0)">Choose Plan</a>
                        </div>
                        <div class="educa-plan-body-context">
                            <ul class="educa-plan-list-context">
                                <li><i class="fal fa-check"></i></li>
                                <li><i class="fal fa-check"></i></li>
                                <li><i class="fal fa-times"></i></li>
                                <li><i class="fal fa-times"></i></li>
                                <li><i class="fal fa-times"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="educa-membership-single change-active">
                        <div class="educa-plan-head">
                            <h6 class="educa-plan-name">Base</h6>
                            <h1>$16 <small>/Month</small></h1>
                            <a href="javascript:void(0)">Choose Plan</a>
                        </div>
                        <div class="educa-plan-body-context">
                            <ul class="educa-plan-list-context">
                                <li><i class="fal fa-check"></i></li>
                                <li><i class="fal fa-check"></i></li>
                                <li><i class="fal fa-check"></i></li>
                                <li><i class="fal fa-times"></i></li>
                                <li><i class="fal fa-times"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="educa-membership-single change-active active">
                        <div class="educa-plan-head">
                            <h6 class="educa-plan-name">Popular</h6>
                            <h1>$16 <small>/Month</small></h1>
                            <a href="javascript:void(0)">Choose Plan</a>
                        </div>
                        <div class="educa-plan-body-context">
                            <ul class="educa-plan-list-context">
                                <li><i class="fal fa-check"></i></li>
                                <li><i class="fal fa-check"></i></li>
                                <li><i class="fal fa-check"></i></li>
                                <li><i class="fal fa-check"></i></li>
                                <li><i class="fal fa-times"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="educa-membership-single change-active">
                        <div class="educa-plan-head">
                            <h6 class="educa-plan-name">Enterprise</h6>
                            <h1>$16 <small>/Month</small></h1>
                            <a href="javascript:void(0)">Choose Plan</a>
                        </div>
                        <div class="educa-plan-body-context">
                            <ul class="educa-plan-list-context">
                                <li><i class="fal fa-check"></i></li>
                                <li><i class="fal fa-check"></i></li>
                                <li><i class="fal fa-check"></i></li>
                                <li><i class="fal fa-check"></i></li>
                                <li><i class="fal fa-check"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- start of theSchool bottom footer area -->
@include('layouts.footer')
<!-- End of theSchool Bottom footer Area -->

<a href="#home" class="nav-link js-scroll-trigger btm-to-top"><i class="fal fa-long-arrow-up"></i></a>

<!-- Modernizr ( Cross-Browser Capability ) JS-->
<script src="{{('allassets/js/vendor/modernizr-3.11.2.min.js')}}"></script>

<!-- Moment JS-->
<script src="{{('allassets/js/moment.min.js')}}"></script>

<!-- jQuery ( Dependency ) JS-->
<script src="{{('allassets/js/jquery.min.js')}}"></script>
<!--AOS JS-->
<script src="{{('allassets/js/vendor/aos.min.js')}}"></script>

<!-- Bootstrap JS-->
<script src="{{('allassets/js/vendor/bootstrap.min.js')}}"></script>

<!--Waypoints JS-->
<script src="{{('allassets/js/vendor/waypoints.min.js')}}"></script>

<!--Counter-UP JS-->
<script src="{{('allassets/js/vendor/counterup.min.js')}}"></script>

<!--Owl Carousel JS-->
<script src="{{('allassets/js/vendor/owl.carousle.min.js')}}"></script>

<!--Easing JS-->
<script src="{{('allassets/js/vendor/easing.min.js')}}"></script>

<!--Scrolling Nav JS-->
<script src="{{('allassets/js/vendor/scrolling.nav.min.js')}}"></script>

<!--Iscroll JS-->
<script src="{{('allassets/js/vendor/iscroll.min.js')}}"></script>

<!--Slicknav JS-->
<script src="{{('allassets/js/vendor/jquery.slicknav.min.js')}}"></script>

<!--Parallax JS-->
<script src="{{('allassets/js/vendor/parallax.min.js')}}"></script>

<!--Modal Video JS-->
<script src="{{('allassets/js/vendor/modal.video.min.js')}}"></script>

<!--Vanilla Tilt JS-->
<script src="{{('allassets/js/vendor/vanillatilt.min.js')}}"></script>

<!--Newsscoller JS-->
<script src="{{('allassets/js/scroller.js')}}"></script>

<!--Selectize JS-->
<script src="{{('allassets/js/selectize.min.js')}}"></script>

<!--Chart JS-->
<script src="{{('allassets/js/Chart.min.js')}}"></script>

<!--FlexSlider JS-->
<script src="{{('allassets/js/jquery.flexslider-min.js')}}"></script>

<!--Calendar JS-->
<script src="{{('allassets/js/jquery-ui.custom.min.js')}}"></script>
<script src="{{('allassets/js/fullcalendar.js')}}"></script>

<!--Canvas js-->
<script src="{{('allassets/js/jquery.canvasjs.min.js')}}"></script>

<!--Canvas js-->
<script src="{{('allassets/js/vendor/countdown-timer.js')}}"></script>

<!-- Main JS-->
<script src="{{('allassets/js/main.js')}}"></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga = function() {
        ga.q.push(arguments)
    };
    ga.q = [];
    ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto');
    ga('set', 'anonymizeIp', true);
    ga('set', 'transport', 'beacon');
    ga('send', 'pageview')

</script>
<script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
