<!DOCTYPE html>
<html class="no-js" lang="en">

@include('layouts.head')

<body id="home">
@include('layouts.topheader')

@include('layouts.nav')

    <!--Header top area end-->



    <!--header area end-->

<!--Breadcrubm area start-->
<section class="educa-breadcrumb-area-start space">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="educa-breadcrumb-content">
                    <h1>Forum</h1>
                    <p><a href="{{ url('/')}}">Home</a>/ <span>Features</span>/ <span>Forum</span></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Breadcrubm area end-->

<!--forum area start-->
<div class="educa-forum-area-start space">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="educa-forum-search">
                    <form action="#" method="post">
                        <input type="text" name="s" id="s" placeholder="SEARCH">
                        <button><i class="fal fa-search"></i></button>
                    </form>
                </div>

                <div class="educa-forum-body mt-5 table-responsive">
                    <table class="table table-hover table-striped  text-center table-bordered">
                        <thead class="bg-dark text-light">
                            <tr>
                                <th>Forum</th>
                                <th>Topics</th>
                                <th>Posts</th>
                                <th>Last Post</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td><a href="#">Educa Forum content 1</a></td>
                                <td>5</td>
                                <td>12</td>
                                <td><a href="#">4 years, 2 months ago</a> <span>Anonymous</span></td>
                            </tr>
                            <tr>
                                <td><a href="#">Educa Forum content 2</a></td>
                                <td>7</td>
                                <td>2</td>
                                <td><a href="#">3 years, 1 months ago</a> <span>Anonymous</span></td>
                            </tr>
                            <tr>
                                <td><a href="#">Educa Forum content 3</a></td>
                                <td>6</td>
                                <td>120</td>
                                <td><a href="#">3 years ago</a> <span>Anonymous</span></td>
                            </tr>
                            <tr>
                                <td><a href="#">Educa Forum content 4</a></td>
                                <td>5</td>
                                <td>121</td>
                                <td><a href="#">2 years, 2 months ago</a> <span>Anonymous</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-md-3">
                <aside class="educa-sidebar">
                    <div class="educa-sidebar-single-content">
                        <h4>Search</h4>
                        <form action="#" method="POST">
                            <input type="text" name="s" id="ss" placeholder="Search Anything ...">
                            <button type="submit" class="ser-btn"><i class="fal fa-search"></i></button>
                        </form>
                    </div>

                    <div class="educa-sidebar-single-content">
                        <h4>Categories</h4>
                        <ul class="sidebar-menu">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Design/ Branding</a></li>
                            <li><a href="#">Uncategories</a></li>
                        </ul>
                    </div>

                    <div class="educa-sidebar-single-content">
                        <h4>Latest Posts</h4>

                        <div class="educa-single-posts">
                            <div class="educa-post-img">
                                <a href="#"><img src="{{ asset('allassets/images/courses/1.jpg')}}" alt="blog posts"></a>
                            </div>
                            <div class="educa-post-content">
                                <a href="#">Online Learning Glossary</a>
                                <span>1 Jun, 2021</span>
                            </div>
                        </div>

                        <div class="educa-single-posts">
                            <div class="educa-post-img">
                                <a href="#"><img src="{{ asset('allassets/images/courses/2.jpg')}}" alt="blog posts"></a>
                            </div>
                            <div class="educa-post-content">
                                <a href="#">Online Learning Glossary</a>
                                <span>2 Jun, 2021</span>
                            </div>
                        </div>

                        <div class="educa-single-posts">
                            <div class="educa-post-img">
                                <a href="#"><img src="{{ asset('allassets/images/courses/3.jpg')}}" alt="blog posts"></a>
                            </div>
                            <div class="educa-post-content">
                                <a href="#">Online Learning Glossary</a>
                                <span>3 Jun, 2021</span>
                            </div>
                        </div>
                    </div>

                    <div class="educa-sidebar-single-content">
                        <div class="educa-adds" style="background: url('allassets/images/courses/4.jpg') no-repeat scroll center center/ cover">
                            <h3>Free WordPress Theme</h3>
                            <span>download</span>
                        </div>
                    </div>

                </aside>
            </div>
        </div>
    </div>
</div>
<!--forum area end-->
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

