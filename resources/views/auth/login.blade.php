<!DOCTYPE html>
<html class="no-js" lang="en">

@include('layouts.head')

<body id="home">
 <!-- start of theSchool to-header -->
 @include('layouts.topheader')
  <!-- End of theSchool top-header -->

  <!-- Start of theSchool Navbar -->
  @include('layouts.nav')


<!-- Register area start -->
<div class="educa-register-area-start">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="educa-register-context">
                    <div class="educa-register-left">
                        <h2>Welcome Again</h2>
                        <p>we provide the best learning content customized to meet all level of secondary students!</p>
                    </div>
                    <div class="educa-register-right">
                        <h2>Login Now</h2>
                        <!-- <img src="assets/images/logo/logo.png" alt="Logo"> -->
                        <form action="{{ route('login') }}" method="POST">
                        @csrf
                            <input type="email" name="email" placeholder="Your email" class="form-control  @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
                            <input type="password" name="password" placeholder="Password" class="form-control  @error('password') is-invalid @enderror" required autocomplete="current-password">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <button type="submit" class="educa-register-btn">Login Now <i class="fal fa-sign-out"></i></button>
                        </form>

                        <p>
                            <a href="#"><i class="fab fa-facebook facebook"></i></a>
                            <a href="#"><i class="fab fa-google google"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Register area end -->




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
