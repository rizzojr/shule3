<!DOCTYPE html>
<html class="no-js" lang="en">

@include('layouts.head')

<body id="home">
  <body id="home">

    <!-- start of theSchool to-header -->
    @include('layouts.topheader')
  <!-- End of theSchool top-header -->

  <!-- Start of theSchool Navbar -->
  @include('layouts.nav')


<!-- Event hero area start -->
<section class="educa-event-hero-area-start space" style="background: url('assets/images/about-slider/slider-1.jpg') no-repeat top center / cover;" >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="educa-event-hero-context text-center">
                    <h1>Upcoming Event</h1>
                    <p>Do you want to be part of this?</p>
                    <div class="countdown-timer-wrapper">
                        <div class="timer" id="countdown"></div>
                    </div>
                    <h2>Chemistry Practical Boot Camp</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Event hero area end -->


<!--event area start-->
<div class="educa-event-area-start space">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="educa-project-title">
                    <div class="educa-project-text">
                        <h2>Upcoming Events</h2>
                        <span>Pass Ordinary Level Practicals, <br>Join the move both virtual and physical</span>
                    </div>
                </div>
            </div>

            @foreach ($events as $event )
            <div class="col-md-12">
                <div class="educa-single-event">
                    <div class="educa-event-date">
                        <strong>{{ $event->date }}</strong>
                        <span>{{ $event->month }}</span>
                    </div>
                    <div class="educa-event-content">
                        <a href="javascript:void(0)" class="educa-event-title">{{ $event->name }}</a>
                        <p class="educa-event-info"><span><i class="fal fa-clock"></i> {{Carbon\Carbon::parse($event->start_time)->format('h:i A') }} - {{Carbon\Carbon::parse($event->end_time)->format('h:i A') }}</span> <span><i class="fal fa-map-marker"></i> {{ $event->location }}</span></p>
                        {{ $event->description }}
                    </div>
                    <div class="educa-event-img">
                        <img src="{{ asset('uploads/event/'.$event->image)}}" alt="event">
                    </div>
                </div>
            </div>
            @endforeach
            <!-- <div class="col-md-12">
                <div class="educa-single-event">
                    <div class="educa-event-date">
                        <strong>12</strong>
                        <span>AUGUST</span>
                    </div>
                    <div class="educa-event-content">
                        <a href="javascript:void(0)" class="educa-event-title">Web development security and testing</a>
                        <p class="educa-event-info"><span><i class="fal fa-clock"></i> 08:00PM - 10.00 PM</span> <span><i class="fal fa-map-marker"></i> Dhaka, Bangladesh</span></p>
                        Tech you how to build a complete Learning Management System with WordPress and LearnPress.
                    </div>
                    <div class="educa-event-img">
                        <img src="assets/images/courses/4.jpg" alt="event">
                    </div>
                </div>
            </div> -->


        </div>
    </div>
</div>
<!--event area end-->
<!--footer area start-->

<!-- start of theSchool bottom footer area -->
@include('layouts.footer')
<!-- End of theSchool Bottom footer Area -->

<a href="#home" class="nav-link js-scroll-trigger btm-to-top"><i class="fal fa-long-arrow-up"></i></a>

<!-- Modernizr ( Cross-Browser Capability ) JS-->
<script src="{{ asset('allassets/js/vendor/modernizr-3.11.2.min.js')}}"></script>

<!-- Moment JS-->
<script src="{{ asset('allassets/js/moment.min.js')}}"></script>

<!-- jQuery ( Dependency ) JS-->
<script src="{{ asset('allassets/js/jquery.min.js')}}"></script>
<!--AOS JS-->
<script src="{{ asset('allassets/js/vendor/aos.min.js')}}"></script>

<!-- Bootstrap JS-->
<script src="{{ asset('allassets/js/vendor/bootstrap.min.js')}}"></script>

<!--Waypoints JS-->
<script src="{{ asset('allassets/js/vendor/waypoints.min.js')}}"></script>

<!--Counter-UP JS-->
<script src="{{ asset('allassets/js/vendor/counterup.min.js')}}"></script>

<!--Owl Carousel JS-->
<script src="{{ asset('allassets/js/vendor/owl.carousle.min.js')}}"></script>

<!--Easing JS-->
<script src="{{ asset('allassets/js/vendor/easing.min.js')}}"></script>

<!--Scrolling Nav JS-->
<script src="{{ asset('allassets/js/vendor/scrolling.nav.min.js')}}"></script>

<!--Iscroll JS-->
<script src="{{ asset('allassets/js/vendor/iscroll.min.js')}}"></script>

<!--Slicknav JS-->
<script src="{{ asset('allassets/js/vendor/jquery.slicknav.min.js')}}"></script>

<!--Parallax JS-->
<script src="{{ asset('allassets/js/vendor/parallax.min.js')}}"></script>

<!--Modal Video JS-->
<script src="{{ asset('allassets/js/vendor/modal.video.min.js')}}"></script>

<!--Vanilla Tilt JS-->
<script src="{{ asset('allassets/js/vendor/vanillatilt.min.js')}}"></script>

<!--Newsscoller JS-->
<script src="{{ asset('allassets/js/scroller.js')}}"></script>

<!--Selectize JS-->
<script src="{{ asset('allassets/js/selectize.min.js')}}"></script>

<!--Chart JS-->
<script src="{{ asset('allassets/js/Chart.min.js')}}"></script>

<!--FlexSlider JS-->
<script src="{{ asset('allassets/js/jquery.flexslider-min.js')}}"></script>

<!--Calendar JS-->
<script src="{{ asset('allassets/js/jquery-ui.custom.min.js')}}"></script>
<script src="{{ asset('allassets/js/fullcalendar.js')}}"></script>

<!--Canvas js-->
<script src="{{ asset('allassets/js/jquery.canvasjs.min.js')}}"></script>

<!--Canvas js-->
<script src="{{ asset('allassets/js/vendor/countdown-timer.js')}}"></script>

<!-- Main JS-->
<script src="{{ asset('allassets/js/main.js')}}"></script>

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
