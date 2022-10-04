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
                    <h1>Blog</h1>
                    <p><a href="{{url('/')}}">Home</a>/ <span>Blog</span></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Breadcrubm area end-->

<!-- Blog area start -->
<section class="educa-blog-page-area-start space">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                @foreach ($posts as $post )
                    <div class="col-md-6">
                        <div class="educa-single-blog-page">
                            <a href="single.html">
                                <div class="educa-blog-image">
                                    <img src="{{ asset('uploads/post/'.$post->image)}}" alt="Blog">
                                </div>
                                <a href="single.html" class="educa-blog-page-title"> {{ $post->name }}</a>
                                <p>{{ Str::limit($post->description, 200) }}</p>
                                @if ((Str::length($post->description) > 200) )

                               <p><span>{{Carbon\Carbon::parse($post->created_at)->format('d-m-Y') }}</span> <a href="{{ url('/blog_detail/'. $post->id)}}">Read more <i class="fal fa-angle-right"></i></a></p>
                               @endif
                            </a>
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

            <!-- Slide bar area start -->
            <div class="col-md-4">
                <aside class="educa-sidebar">
                    <div class="educa-sidebar-single-content">
                        <h4>Search</h4>
                        <form action="#" method="POST">
                            <input type="text" name="s" id="s" placeholder="Search Anything ...">
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
                                <a href="#"><img src="{{asset ('allassets/images/courses/1.jpg')}}" alt="blog posts"></a>
                            </div>
                            <div class="educa-post-content">
                                <a href="#">Online Learning Glossary</a>
                                <span>1 Jun, 2021</span>
                            </div>
                        </div>

                        <div class="educa-single-posts">
                            <div class="educa-post-img">
                                <a href="#"><img src="{{asset ('allassets/images/courses/2.jpg')}}" alt="blog posts"></a>
                            </div>
                            <div class="educa-post-content">
                                <a href="#">Online Learning Glossary</a>
                                <span>2 Jun, 2021</span>
                            </div>
                        </div>

                        <div class="educa-single-posts">
                            <div class="educa-post-img">
                                <a href="#"><img src="{{asset ('allassets/images/courses/3.jpg')}}" alt="blog posts"></a>
                            </div>
                            <div class="educa-post-content">
                                <a href="#">Online Learning Glossary</a>
                                <span>3 Jun, 2021</span>
                            </div>
                        </div>
                    </div>

                    <div class="educa-sidebar-single-content">
                        <div class="educa-adds" style="background: url('assets/images/courses/4.jpg') no-repeat scroll center center/ cover">
                            <h3>Free WordPress Theme</h3>
                            <span>download</span>
                        </div>
                    </div>

                </aside>
            </div>
            <!-- Slide bar area end -->

        </div>
    </div>
</section>
<!-- Blog area end -->
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

