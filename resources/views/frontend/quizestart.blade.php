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
                    <h1>Biology</h1>
                    <p><a href="{{url('/')}}">Home</a>/ <span>Biology</span></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Breadcrubm area end-->

<!-- Educa quiz area start -->
<div class="educa-single-page-quiz-area-start space">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="educa-single-breadcrumb">
                    <div class="educa-single-quiz-header">
                        <h2>Coordiantion in Animals</h2>
                    </div>
                    <div class="educa-single-quiz-body">
                        <p><strong>Questions: </strong> 10 Questions</p>
                        <p><strong>Duration: </strong> 5 Minutes time</p>
                        <button type="submit" class="quiz-btn">Start Quiz</button>
                    </div>
                </div>

                <form action="#" method="POST" class="disable-form">
                    <div class="educa-single-breadcrumb mt-3">
                        <div class="educa-single-quiz-header">
                            <h2>1) Officia voluptas voluptatum fugit temporibus nemo deserunt!</h2>
                        </div>
                        <div class="educa-single-quiz-body">
                            <p><input type="radio" name="one" id="oone"> <label for="oone">One Way</label></p>
                            <p><input type="radio" name="one" id="otwo"> <label for="otwo">Two Way</label></p>
                            <p><input type="radio" name="one" id="othree"> <label for="othree">Three Way</label></p>
                            <p><input type="radio" name="one" id="ofour"> <label for="ofour">Four Way</label></p>
                        </div>
                    </div>
                    <div class="educa-single-breadcrumb mt-3">
                        <div class="educa-single-quiz-header">
                            <h2>2) Officia voluptas voluptatum fugit temporibus nemo deserunt!</h2>
                        </div>
                        <div class="educa-single-quiz-body">
                            <p><input type="radio" name="two" id="tone"> <label for="tone">One Way</label></p>
                            <p><input type="radio" name="two" id="ttwo"> <label for="ttwo">Two Way</label></p>
                            <p><input type="radio" name="two" id="tthree"> <label for="tthree">Three Way</label></p>
                            <p><input type="radio" name="two" id="tfour"> <label for="tfour">Four Way</label></p>
                        </div>
                    </div>
                    <div class="educa-single-breadcrumb mt-3">
                        <div class="educa-single-quiz-header">
                            <h2>3) Officia voluptas voluptatum fugit temporibus nemo deserunt!</h2>
                        </div>
                        <div class="educa-single-quiz-body">
                            <p><input type="radio" name="three" id="thone"> <label for="thone">One Way</label></p>
                            <p><input type="radio" name="three" id="thtwo"> <label for="thtwo">Two Way</label></p>
                            <p><input type="radio" name="three" id="ththree"> <label for="ththree">Three Way</label></p>
                            <p><input type="radio" name="three" id="thfour"> <label for="thfour">Four Way</label></p>
                        </div>
                    </div>
                    <div class="educa-single-breadcrumb mt-3">
                        <div class="educa-single-quiz-header">
                            <h2>4) Officia voluptas voluptatum fugit temporibus nemo deserunt!</h2>
                        </div>
                        <div class="educa-single-quiz-body">
                            <p><input type="radio" name="four" id="fone"> <label for="fone">One Way</label></p>
                            <p><input type="radio" name="four" id="ftwo"> <label for="ftwo">Two Way</label></p>
                            <p><input type="radio" name="four" id="fthree"> <label for="fthree">Three Way</label></p>
                            <p><input type="radio" name="four" id="ffour"> <label for="ffour">Four Way</label></p>
                        </div>
                    </div>
                    <div class="educa-single-breadcrumb mt-3">
                        <div class="educa-single-quiz-header">
                            <h2>5) Officia voluptas voluptatum fugit temporibus nemo deserunt!</h2>
                        </div>
                        <div class="educa-single-quiz-body">
                            <p><input type="radio" name="five" id="fione"> <label for="fione">One Way</label></p>
                            <p><input type="radio" name="five" id="fitwo"> <label for="fitwo">Two Way</label></p>
                            <p><input type="radio" name="five" id="fithree"> <label for="fithree">Three Way</label></p>
                            <p><input type="radio" name="five" id="fifour"> <label for="fifour">Four Way</label></p>
                        </div>
                    </div>
                    <div class="educa-single-breadcrumb mt-3">
                        <div class="educa-single-quiz-header">
                            <h2>6) Officia voluptas voluptatum fugit temporibus nemo deserunt!</h2>
                        </div>
                        <div class="educa-single-quiz-body">
                            <p><input type="radio" name="six" id="sone"> <label for="sone">One Way</label></p>
                            <p><input type="radio" name="six" id="stwo"> <label for="stwo">Two Way</label></p>
                            <p><input type="radio" name="six" id="sthree"> <label for="sthree">Three Way</label></p>
                            <p><input type="radio" name="six" id="sfour"> <label for="sfour">Four Way</label></p>
                        </div>
                    </div>
                    <div class="educa-single-breadcrumb mt-3">
                        <div class="educa-single-quiz-header">
                            <h2>7) Officia voluptas voluptatum fugit temporibus nemo deserunt!</h2>
                        </div>
                        <div class="educa-single-quiz-body">
                            <p><input type="radio" name="seven" id="seone"> <label for="seone">One Way</label></p>
                            <p><input type="radio" name="seven" id="setwo"> <label for="setwo">Two Way</label></p>
                            <p><input type="radio" name="seven" id="sethree"> <label for="sethree">Three Way</label></p>
                            <p><input type="radio" name="seven" id="sefour"> <label for="sefour">Four Way</label></p>
                        </div>
                    </div>
                    <p class="text-center"><button type="submit" class="submit-btn">Submit Quiz</button></p>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Educa quiz area end -->
@include('layouts.footer')
<!-- End of theSchool Bottom footer Area -->

<a href="#home" class="nav-link js-scroll-trigger btm-to-top"><i class="fal fa-long-arrow-up"></i></a>

!-- Modernizr ( Cross-Browser Capability ) JS-->
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
