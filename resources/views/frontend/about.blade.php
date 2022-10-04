<!DOCTYPE html>
<html class="no-js" lang="zxx">

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
                    <h1>About Us</h1>
                    <p><a href="{{url('/')}}">Home</a>/ <span>Features</span>/ <span>About Us</span></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Breadcrubm area end-->

<!--counter part area start-->
<div class="educa-about-part-area-start space">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-6">
                <div class="educa-single-counter-part">
                    <strong class="counter">500000</strong>
                    <span><i class="fal fa-heart"></i> Followers</span>
                </div>
            </div>

            <div class="col-md-3 col-6">
                <div class="educa-single-counter-part">
                    <strong class="counter">50000</strong>
                    <span><i class="fal fa-user"></i> subscriber</span>
                </div>
            </div>

            <div class="col-md-3 col-6">
                <div class="educa-single-counter-part">
                    <strong class="counter">15000</strong>
                    <span><i class="fal fa-users"></i> enroll students</span>
                </div>
            </div>

            <div class="col-md-3 col-6">
                <div class="educa-single-counter-part">
                    <strong class="counter">4500</strong>
                    <span><i class="fal fa-book"></i> completed courses</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--counter part area end-->

@php


$abouts = App\Models\About::get()



@endphp

<!--about slider area start-->
<div class="educa-about-slider-area-start">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="educa-about-slider owl-carousel owl-theme">
                    <img src="  {{ asset('uploads/about/'.$abouts[1]->image_cover_one)}}  " alt="About Slider">
                    <img src="  {{ asset('uploads/about/'.$abouts[1]->image_cover_two)}}  " alt="About Slider">
                    <img src="  {{ asset('uploads/about/'.$abouts[1]->image_cover_three)}}  " alt="About Slider">
                </div>
            </div>
        </div>
    </div>
</div>
<!--about slider area end-->

<!--About content start-->
<section class="educa-about-main-content space">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-6 col-xl-6">
                <div class="educa-about-main-single">
                    <h3>Who we are ?</h3>
                    <p>{{$abouts[0]->who_we_are}}</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto molestiae nisi totam possimus voluptate error mollitia, dolores, placeat maxime repudiandae corrupti id, odit ullam voluptates pariatur non! Vitae vel enim iusto voluptates. Provident, totam neque unde distinctio, quod facilis adipisci. Fugiat dolore sunt rem deserunt quas iste dolor eius nobis.</p>
                    <p>Amet excepturi perferendis aperiam! Nihil magni totam similique eligendi dolore laboriosam, reprehenderit neque corporis ex blanditiis, iure rem perferendis repellat ratione fugiat.</p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-xl-6">
                <div class="educa-about-main-single">
                    <h3>What we do ?</h3>
                    <p>{{$abouts[0]->what_we_do}}</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt aliquam laboriosam maxime praesentium voluptas nemo ut earum! Vel ut nesciunt labore accusamus soluta. Sit animi reiciendis unde eos tenetur perferendis nihil beatae doloribus nulla, temporibus et perspiciatis iure dolore mollitia error quam maxime praesentium eum ab sequi harum optio laboriosam corporis accusamus aperiam? Nemo exercitationem eligendi reiciendis veritatis, nulla, officiis.</p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-xl-6">
                <div class="educa-about-main-single">
                    <h3>Why you join ?</h3>
                    <p>{{$abouts[0]->why_you_join}}</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto molestiae nisi totam possimus voluptate error mollitia, dolores, placeat maxime repudiandae corrupti id, odit ullam voluptates pariatur non! Vitae vel enim iusto voluptates. Provident, totam neque unde distinctio, quod facilis adipisci. Fugiat dolore sunt rem deserunt quas iste dolor eius nobis.</p>
                    <p>Amet excepturi perferendis aperiam! Nihil magni totam similique eligendi dolore laboriosam, reprehenderit neque corporis ex blanditiis, iure rem perferendis repellat ratione fugiat.</p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-xl-6">
                <div class="educa-about-main-single">
                    <h3>What our goal ?</h3>
                    <p>{{$abouts[0]->why_our_goal}}</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt aliquam laboriosam maxime praesentium voluptas nemo ut earum! Vel ut nesciunt labore accusamus soluta. Sit animi reiciendis unde eos tenetur perferendis nihil beatae doloribus nulla, temporibus et perspiciatis iure dolore mollitia error quam maxime praesentium eum ab sequi harum optio laboriosam corporis accusamus aperiam? Nemo exercitationem eligendi reiciendis veritatis, nulla, officiis.</p>
                </div>
            </div>

        </div>
    </div>
</section>
<!--About content end-->
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
