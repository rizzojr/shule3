

<div class="headerclass mobile-menu-start">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mobile-menu">
                    <div class="mobile-menu-logo">
                        <a href="{{url('/')}}"><img src="{{ asset('allassets/images/logo/logo.png') }}" alt="Mobile Logo"></a>
                    </div>
                    <div class="mobile-menu-link">
                        <a href="{{ url('/auth/register')}}"><i class="fal fa-user"></i> Register</a>
                        <a href="{{ url('/auth/login')}}"><i class="fal fa-sign-in-alt"></i> Login</a>
                    </div>
                    <div id="mobile-menu-here"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="headerclass large-version-hearer">
    <!--Header top area start-->
    <div class="educa-header-top-area-start">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-9 col-lg-7">
                    <div class="educa-header-top-left">
                        Have any Question?

                        <div id="phone"><i class="fal fa-phone"></i>
                          @php


                           $contacts = App\Models\Contact::get()


                           @endphp

                        <a href="tell:+255 759 366 141">{{$contacts[0]->phone}}</a></div>
                        <div id="email"><i class="fal fa-envelope"></i> <a href="mailto:info@theSchool.edu"><{{$contacts[0]->email}}</a></div>
                        <div id="profile"><i class="fal fa-user"></i> <a href="javascript:void(0)">Hello, theSchool</a></div>
                    </div>
                </div>

                <div class="col-md-3 col-lg-5">
                    <div class="educa-header-top-right">
                        <a href="{{ route('auth.register')}}">register</a>
                        <a href="{{ route('auth.login')}}">login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Header top area end-->
