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
                    <h1>Quiz</h1>
                    <p><a href="{{url('/')}}">Home</a>/ <span>Quiz</span></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Breadcrubm area end-->

<!-- Quiz area start -->
<section class="educa-quiz-area-start space">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="educa-quiz-filters">
                    <form action="#" method="POST">
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select name="category" id="category" class="form-control">
                                <option value="0">English</option>
                                <option value="1">Chemistry</option>
                                <option value="2">Biology</option>
                                <option value="3">Literature</option>
                                <option value="4">Practical</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="level">Level</label>
                            <select name="level" id="level" class="form-control">
                                <option value="0">Form One</option>
                                <option value="1">Form Two</option>
                                <option value="2">Form Three</option>
                                <option value="3">Form Four</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="price">Quiz Price</label>
                            <select name="price" id="price" class="form-control">
                                <option value="0">Paid Quiz</option>
                                <option value="1">Free Quiz</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="filter-btn"><i class="fal fa-filter"></i> Filter</button>
                        </div>
                    </form>
                </div>
            </div>
            @foreach($quizzes as $quiz)

                <div class="col-md-4 col-lg-3">
                    <div class="educa-single-quiz-context">
                        <img src="https://media.istockphoto.com/vectors/electrolysis-of-water-vector-id1271622587?k=20&m=1271622587&s=612x612&w=0&h=CNgTEd8gcPO-e4VRFX4EuZ6Urt_ivUVvRKh4dRuzshg=" alt="Quiz">
                        <a href="{{url('quiz/'.$quiz->id)}}">{{$quiz->quiz}}</a>
                        <p class="educa-quiz-context">
                            <span><i class="fal fa-book"></i> {{$quiz->questions->count()}} Questions</span>
                            <span><i class="fal fa-user"></i> 100 Students</span>
                        </p>
                        <span class="educa-price">1500</span> 
                    </div>
                </div>
            @endforeach
            <div class="col-md-12">
                <div class="educa-pagination-area-start">
                    <ul class="educa-paginate">
                        <li><a href="javascript:void(0)"><i class="fal fa-angle-left"></i></a></li>
                        <li><a href="javascript:void(0)">1</a></li>
                        <li><a href="javascript:void(0)">2</a></li>
                        <li class="active"><a href="javascript:void(0)">3</a></li>
                        <li><a href="javascript:void(0)">4</a></li>
                        <li><a href="javascript:void(0)">5</a></li>
                        <li><a href="javascript:void(0)">6</a></li>
                        <li><a href="javascript:void(0)"><i class="fal fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Quiz area end -->
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
