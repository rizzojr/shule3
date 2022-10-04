<!DOCTYPE html>
<html class="no-js" lang="en">

@include('layouts.head')
<body id="home">

  <!-- start of theSchool to-header -->

 @include('layouts.topheader')

<!-- End of theSchool top-header -->

 @include('layouts.nav')

<!-- Start of theSchool Navbar -->


<!-- End of theSchool Navbar -->

<!--Hero area start-->
<section class="educa-heroa-area-start space">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="educa-hero-area">
                    <h3>Learn all subjects Online</h3>
                    <p class="sub-title">No time for failure in your examination</p>
                    <form action="#" method="POST">
                        <input type="text" name="s" id="s" placeholder="What do want to learn today?">
                        <button type="submit" name="learn-btn" class="learn-btn"><i class="fal fa-search"></i></button>
                    </form>

                    <div class="educa-hero-param">
                        <div class="educa-single-param">
                            <i class="fal fa-users"></i>
                            <p>Over <span class="counter">7</span> K students</p>
                        </div>
                        <div class="educa-single-param">
                            <i class="fal fa-book"></i>
                            <p>More than <span class="counter">1</span> K courses</p>
                        </div>
                        <div class="educa-single-param">
                            <i class="fal fa-graduation-cap"></i>
                            <p>Over <span class="counter">20</span> course teachers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Hero area end-->


<!--course slider area start-->
<div class="educa-course-slider-area-start space">
    <div class="container">
        <div class="row">
            <div class="educa-course-slider owl-carousel owl-theme">
                <div class="educa-single-course-slider" style="background: url('https://thumbs.dreamstime.com/z/chemistry-complex-like-puzzle-pictured-as-word-chemistry-puzzle-pieces-to-show-chemistry-can-be-difficult-needs-164222878.jpg') no-repeat scroll center center / cover"><span></span></div>
                <div class="educa-single-course-slider" style="background: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYIp9JsZk4U3qfg9xIhwATaRvx-JuSwlVLeA&usqp=CAU') no-repeat scroll center center / cover"><span></span></div>
                <div class="educa-single-course-slider" style="background: url('https://www.itcglobaltranslations.com/wp-content/uploads/sites/5/2020/08/english-words.jpg') no-repeat scroll center center / cover"><span></span></div>
                <div class="educa-single-course-slider" style="background: url('https://image.shutterstock.com/image-illustration/civics-word-isolated-on-white-260nw-698212117.jpg') no-repeat scroll center center / cover"><span></span></div>
                <div class="educa-single-course-slider" style="background: url('https://cdn.vectorstock.com/i/1000x1000/78/36/children-rights-word-concepts-banner-vector-29127836.webp') no-repeat scroll center center / cover"><span></span></div>
                <div class="educa-single-course-slider" style="background: url('https://st2.depositphotos.com/4678737/10003/v/950/depositphotos_100034622-stock-illustration-gender-equality-word-cloud.jpg') no-repeat scroll center center / cover"><span></span></div>
                <div class="educa-single-course-slider" style="background: url('https://preventionconversation.org/wp-content/uploads/2019/05/720x368xsexual-health-wordle-transparent.jpg') no-repeat scroll center center / cover"><span></span></div>
                <!-- <div class="educa-single-course-slider" style="background: url('assets/images/courses/8.jpg') no-repeat scroll center center / cover"><span>VUE</span></div> -->
            </div>
        </div>
    </div>
</div>
<!--course slider area end-->

<!--course area start-->
<div class="educa-course-area-start space-btm">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="educa-project-title">
                    <div class="educa-project-text">
                        <h2>Popular courses</h2>
                        <span>Chemical Kinetics and Equilibrium, <br>Genetics as well as Classification</span>
                    </div>
                    <div class="educa-project-link">
                        <a href="javascript:void(0)">View More <i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            @php


       $cozes = App\Models\Coze::get()



       @endphp

       @foreach ($cozes as $coze)
            <div class="col-md-4">
                <div class="educa-single-course">
                    <div class="educa-course-image">
                        <a href="javascript:void(0)"><img src="{{ asset('uploads/coz/'.$coze->image_cover)}}" alt="course"></a>
                        <a href="javascript:void(0)" class="learn-more">learn more <i class="fal fa-angle-right"></i></a>
                    </div>
                    <div class="educa-course-instructor">
                              <img src="{{ asset('uploads/coz/'.$coze->image_instructor)}}" alt="Instructor">
                        <a href="javascript:void(0)">{{ $coze->instructor_name }}</a>
                    </div>

                    <a href="course-details.php" class="educa-course-title">{{ $coze->description }}</a>
                    <div class="educa-course-action">
                        <span>{{ $coze->cost }}</span>
                        <a href="javascript:void(0)" class="enroll">enroll now</a>
                    </div>
                </div>
            </div>
            @endforeach



        </div>
    </div>
</div>
<!--course area end-->

<!--counter part area start-->
<div class="educa-coounter-part-area-start space" style="background: url('allassets/images/counter-bg.jpg') no-repeat scroll center center/ cover">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-6">
                <div class="educa-single-counter-part">
                    <strong class="counter">100</strong>
                    <span>Students</span>
                </div>
            </div>

            <div class="col-md-3 col-6">
                <div class="educa-single-counter-part">
                    <strong class="counter">500</strong>
                    <span>subscriber</span>
                </div>
            </div>

            <div class="col-md-3 col-6">
                <div class="educa-single-counter-part">
                    <strong class="counter">700</strong>
                    <span>learners</span>
                </div>
            </div>

            <div class="col-md-3 col-6">
                <div class="educa-single-counter-part">
                    <strong class="counter">50</strong>
                    <span>courses</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--counter part area end-->


<!--client area start-->
<div class="educa-client-area-start space">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="educa-project-title">
                    <div class="educa-project-text">
                        <h2>What People says</h2>
                        <span>The school platform has helped most of the students from all over the country in achieving their dreams, <br>what are you waiting to use theSchool platform?</span>
                    </div>
                </div>
            </div>

            <div class="col-md-12">


                <div class="educa-client-slider owl-carousel owl-theme">



                    <div class="educa-single-client">
                        <img src="{{ asset('allassets/images/client/1.png') }}" alt="client">
                        <a href="javascript:void(0)">Mr. Lemmy Lucian</a>
                        <span>Advisor</span>
                        <p>theSchool is the best online learning platform, I encourage parents as well as students to use it for their career success.</p>
                    </div>

                    <div class="educa-single-client">
                        <img src="{{ asset('allassets/images/client/1.png') }}" alt="client">
                        <a href="javascript:void(0)">Mr. Lemmy Lucian</a>
                        <span>Advisor</span>
                        <p>theSchool is the best online learning platform, I encourage parents as well as students to use it for their career success.</p>
                    </div>

                    <div class="educa-single-client">
                        <img src="{{ asset('allassets/images/client/1.png') }}" alt="client">
                        <a href="javascript:void(0)">Mr. Lemmy Lucian</a>
                        <span>Advisor</span>
                        <p>theSchool is the best online learning platform, I encourage parents as well as students to use it for their career success.</p>
                    </div>

                    <div class="educa-single-client">
                        <img src="{{ asset('allassets/images/client/1.png') }}" alt="client">
                        <a href="javascript:void(0)">Mr. Lemmy Lucian</a>
                        <span>Advisor</span>
                        <p>theSchool is the best online learning platform, I encourage parents as well as students to use it for their career success.</p>
                    </div>

                    <div class="educa-single-client">
                        <img src="{{ asset('allassets/images/client/1.png') }}" alt="client">
                        <a href="javascript:void(0)">Mr. Lemmy Lucian</a>
                        <span>Advisor</span>
                        <p>theSchool is the best online learning platform, I encourage parents as well as students to use it for their career success.</p>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<!--client area end-->


<!-- start of theSchool subscribe area -->

@include('layouts.newsletterfooter')
<!-- End of theSchool Subscribe area -->

<!-- start of theSchool bottom footer area -->
@include('layouts.footer')
<!-- End of theSchool Bottom footer Area -->


<a href="#home" class="nav-link js-scroll-trigger btm-to-top"><i class="fal fa-long-arrow-up"></i></a>

<!-- Modernizr ( Cross-Browser Capability ) JS-->
<script src="{{ asset('allassets/js/vendor/modernizr-3.11.2.min.js') }}"></script>
<!-- Moment JS-->
<script src="{{ asset('allassets/js/moment.min.js') }}"></script>
<!-- jQuery ( Dependency ) JS-->
<script src="{{ asset('allassets/js/jquery.min.js') }}"></script>
<!--AOS JS-->
<script src="{{ asset('allassets/js/vendor/aos.min.js') }}"></script>
<!-- Bootstrap JS-->
<script src="{{ asset('allassets/js/vendor/bootstrap.min.js') }}"></script>
<!--Waypoints JS-->
<script src="{{ asset('allassets/js/vendor/waypoints.min.js') }}"></script>
<!--Counter-UP JS-->
<script src="{{ asset('allassets/js/vendor/counterup.min.js') }}"></script>
<!--Owl Carousel JS-->
<script src="{{ asset('allassets/js/vendor/owl.carousle.min.js') }}"></script>
<!--Easing JS-->
<script src="{{ asset('allassets/js/vendor/easing.min.js') }}"></script>
<!--Scrolling Nav JS-->
<script src="{{ asset('allassets/js/vendor/scrolling.nav.min.js') }}"></script>
<!--Iscroll JS-->
<script src="{{ asset('allassets/js/vendor/iscroll.min.js') }}"></script>
<!--Slicknav JS-->
<script src="{{ asset('allassets/js/vendor/jquery.slicknav.min.js') }}"></script>
<!--Parallax JS-->
<script src="{{ asset('allassets/js/vendor/parallax.min.js') }}"></script>
<!--Modal Video JS-->
<script src="{{ asset('allassets/js/vendor/modal.video.min.js') }}"></script>
<!--Vanilla Tilt JS-->
<script src="{{ asset('allassets/js/vendor/vanillatilt.min.js') }}"></script>
<!--Newsscoller JS-->
<script src="{{ asset('allassets/js/scroller.js') }}"></script>
<!--Selectize JS-->
<script src="{{ asset('allassets/js/selectize.min.js') }}"></script>
<!--Chart JS-->
<script src="{{ asset('allassets/js/Chart.min.js') }}"></script>
<!--FlexSlider JS-->
<script src="{{ asset('allassets/js/jquery.flexslider-min.js') }}"></script>
<!--Calendar JS-->
<script src="{{ asset('allassets/js/jquery-ui.custom.min.js') }}"></script>
<script src="{{ asset('allassets/js/fullcalendar.js') }}"></script>
<!--Canvas js-->
<script src="{{ asset('allassets/js/jquery.canvasjs.min.js') }}"></script>
<!--Canvas js-->
<script src="{{ asset('allassets/js/vendor/countdown-timer.js') }}"></script>
<!-- Main JS-->
<script src="{{ asset('allassets/js/main.js') }}"></script>

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
