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
                    <h1>{{$data->quiz}}</h1>
                    <p><a href="{{url('/check/'.$data)}}">Home</a>/ <span>{{$data->quiz}}</span></p>
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
                    <!-- <div class="educa-single-quiz-header">
                        <h2>{{$data->quiz}}</h2>
                    </div> -->
                    <div class="educa-single-quiz-body">
                        <p><strong>Questions: </strong> {{$data->questions->count()}}</p>
                        <!-- <p><strong>Duration: </strong> 5 Minutes time</p> -->
                        <!-- <button type="submit" class="quiz-btn">Start Quiz</button> -->
                    </div>
                </div>

                <form action="{{ url('submit/'.$data->id) }}" method="POST" class="disable-form">
                @csrf
                    @method('GET')

                    @php $i=1; $q=1 @endphp
                    @foreach($data->questions as $question)
                    <div class="educa-single-breadcrumb mt-3">
                        <div class="educa-single-quiz-header">
                            <label for=""><h2>{{$i++}}){{$question->question}}</h2></label>
                         
                            
                        </div>
                        @foreach($question->answers as $answer)
                        @php $a=1;$q=1 @endphp
                        <div class="educa-single-quiz-body">
                            <p> <label for="">{{$answer->answer}}</label>
                                <input type="radio" name="questionAns[{{$question->id}}]" value="{{$answer->id}}">
                            </p>
                        </div>
                        @endforeach
                    </div>
                    @endforeach
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
