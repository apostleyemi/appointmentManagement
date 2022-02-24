
<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Appointment system 	</title>
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style-liberty.css')}}">
    <!-- Template CSS -->
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Template CSS -->
   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>

    <meta name="csrf-token" content="{{ csrf_token() }}" />

</head>

<body>
<!--w3l-header-->
<section class="w3l-top-header-content">
    <div class="hny-top-menu">
        <div class="container">
            <div class="row">
                <div class="top-left col-lg-6">
                    <ul class="accounts">
                        <li class="top_li"><span class=""></span> <a href="#" class="fa fa-phone">+2349075063725</a>
                        </li>
                        <li class="top_li"><span class="top_li mr-lg-0"></span> <a href="https://api.whatsapp.com/send?phone=2348067013148" class="fa fa-whatsapp fa-2x" style="color: springgreen"></a>
                        </li>
                        <li class="top_li mr-lg-0"><span class="fa fa-envelope-o"></span> <a
                                href="mailto:info@itps.com.ng" class="mail"> info@itps.com.ng</a>

                        </li>
                    </ul>
                </div>

                <div class="social-top col-lg-6 mt-lg-0 mt-sm-3">
                @guest()

                    <div class="top-bar-text"><a class="bk-button" href="{{ route('register') }}"><button class="btn btn-sm btn-success">Create Account</button></a> /<a href="{{ route('login') }}"> <button class="btn btn-sm btn-info">Login</button></a></div>

                @else
                       {{-- <a class="btn btn-info" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>--}}

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                           <a class="btn btn-info" :href="route('logout')"
                                             onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>

                        </form>
                    <div class="top-bar-text"><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form></div>
                        <div class="top-bar-text">{{ Auth::user()->name }}</div>
                       <div class="top-bar-text">{{ Auth::user()->email }}</div>
                @endguest
                </div>
            </div>
        </div>
    </div>
</section>
<!--//top-header-content-->
<!--w3l-header-->
<header class="w3l-header-nav">
    <!--/nav-->
    <nav class="navbar navbar-expand-lg navbar-light px-lg-0 py-0 px-3 stroke">
        <div class="container">
           {{-- <a class="navbar-brand" href="/index"><span>it</span>ps</a>--}}
            <!-- if logo is image enable this-->
                    <a class="navbar-brand" href="index">
                        <img src="{{ asset('assets/images/logo2.jpeg')}}" alt="Your logo" title="Your logo" style="height:50px;" />
                    </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="fa icon-expand fa-bars"></span>
                <span class="fa icon-close fa-times"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-lg-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.html">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="avaialble.html">Internship Vacancies</a>
                    </li>

                </ul>
                <!--/search-right-->
                <div class="search-right">
                    <a href="#search" title="search"><span class="fa fa-search" aria-hidden="true"></span></a>
                    <!-- search popup -->
                    <div id="search" class="pop-overlay">
                        <div class="popup">

                            <form action="#" method="post" class="search-box">
                                <input type="search" placeholder="Saerch your Keyword" name="search"
                                       required="required" autofocus="">
                                <button type="submit" class="btn"><span class="fa fa-search"
                                                                        aria-hidden="true"></span></button>
                            </form>

                        </div>
                        <a class="close" href="#close">×</a>
                    </div>
                    <!-- /search popup -->
                </div>
                <!--//search-right-->
                <div class="call-support">
                    <p>Call us for any question</p>
                    <h5><span class="fa fa-phone">+23490123456789</span></h5>
                </div>
            </div>
        </div>
    </nav>
    <!--//nav-->
</header>
<!-- //w3l-header -->
