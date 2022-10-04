<!DOCTYPE html>
<html class="no-js" lang="en">

@include('layouts.head')
<body id="home">
@include('layouts.topheader')

@include('layouts.nav')
    <!--header area end-->

<!--Breadcrubm area start-->
<section class="educa-breadcrumb-area-start space">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="educa-breadcrumb-content">
                    <h1>Instructors</h1>
                    <p><a href="{{url('/')}}">Home</a>/ <span>Instructors</span></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Breadcrubm area end-->

<!-- Instructor area start -->
<section class="educa-instructor-area-start space">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="educa-project-title">
                    <div class="educa-project-text">
                        <h2>All Instructors</h2>
                        <span>consequatur doloribus obcaecati nemo modi, <br>esse eaque numquam recusandae libero porro non?</span>
                    </div>
                </div>
            </div>



            <div class="col-md-12">
                <div class="educa-instructor-context">
                    <div class="educa-single-instructor">
                        <img src="{{ asset('allassets/images/client/1.png')}}" alt="Instructor">
                        <a href="single-instructor.html">Mr. Alex Hex</a>
                        <span>Web Development</span>
                    </div>
                    <div class="educa-single-instructor">
                        <img src="{{ asset('allassets/images/client/2.png')}}" alt="Instructor">
                        <a href="single-instructor.html">Anala Hex</a>
                        <span>Web Design</span>
                    </div>
                    <div class="educa-single-instructor">
                        <img src="{{ asset('allassets/images/client/3.png')}}" alt="Instructor">
                        <a href="single-instructor.html">Robert Pattinson</a>
                        <span>Apps Development</span>
                    </div>
                    <div class="educa-single-instructor">
                        <img src="{{ asset('allassets/images/client/4.jpg')}}" alt="Instructor">
                        <a href="single-instructor.html">Nexo Hex</a>
                        <span>Flutter Developer</span>
                    </div>
                    <div class="educa-single-instructor">
                        <img src="{{ asset('allassets/images/client/5.jpg')}}" alt="Instructor">
                        <a href="single-instructor.html">Johnny Depp</a>
                        <span>Software Development</span>
                    </div>
                    <div class="educa-single-instructor">
                        <img src="{{ asset('allassets/images/client/6.jpg')}}" alt="Instructor">
                        <a href="single-instructor.html">Leo Hex</a>
                        <span>Front-End Development</span>
                    </div>
                    <div class="educa-single-instructor">
                        <img src="{{ asset('allassets/images/client/1.png')}}" alt="Instructor">
                        <a href="single-instructor.html">Mr. Alex Hex</a>
                        <span>Web Development</span>
                    </div>
                    <div class="educa-single-instructor">
                        <img src="{{ asset('allassets/images/client/2.png')}}" alt="Instructor">
                        <a href="single-instructor.html">Anala Hex</a>
                        <span>Web Design</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Instructor area end -->

<!-- Become a instructor start -->
<section class="educa-createinstructor space" style="background: url('assets/images/hero-bg.jpg') no-repeat center right / cover">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="educa-create-instructor-context">
                    <div class="educa-createinstructor-context">
                        <h1>Become a Instructor.</h1>
                        <p>Teach what you love. Corrector gives you the tools to create a course.</p>
                    </div>
                    <div class="educa-instructor-create-btn">
                        <button type="button" class="create-btn">Becaome a Instructor</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Become a instructor end -->
<!--footer area start-->
@include('layouts.footer')
<!--footer area end-->

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
