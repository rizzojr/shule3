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
                    <h1>Contact Us</h1>
                    <p><a href="{{url('/')}}">Home</a>/ <span>Contact Us</span></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Breadcrubm area end-->

<!-- Contact area start -->
<section class="educa-contact-area-start space">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="educa-contact-context">
                    <div class="educa-contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.8507198765415!2d90.39277511534476!3d23.75270219460451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8983f79fa27%3A0xeddafd73d038bc2f!2sKarwan%20Bazar%2C%20Dhaka%201215!5e0!3m2!1sen!2sbd!4v1632555885548!5m2!1sen!2sbd" width="100" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="educa-contact-content">
                        <h2>Contact Us</h2>
                        <p>For any enquiries please check us on.</p>
                        <p><i class="fal fa-phone"></i>+255 759 366 141</p>
                        <p><i class="fal fa-envelope"></i> <a href="mailto:info@theSchool.edu">info@theSchool.edu</a></p>

                        <form action="{{ route('contact.save')}}" method="post">

                           @if(Session::get('success'))

                           <div class="alert alert-success">
                            {{Session::get('success')}}
                           </div>

                           @endif

                           @if(Session::get('fail'))


                           <div class="alert alert-danger">
                            {{Session::get('fail')}}
                           </div>

                           @endif

                           @csrf
                            <input type="text" name="uname" placeholder="Your name" class="form-control" value="{{old ('uname')}}">
                             <span class="text-danger">@error("uname"){{$message}}@enderror</span>
                            <input type="email" name="email" placeholder="Your email" class="form-control" value="{{old ('email')}}">
                            <span class="text-danger">@error("email"){{$message}}@enderror</span>
                            <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Your message" value="{{old ('message')}}"></textarea>
                            <span class="text-danger">@error("message"){{$message}}@enderror</span>
                            <button type="submit" class="contact-btn"><i class="fal fa-envelope"></i> Message me</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact area end -->
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
