<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="bootstrap 4, premium, multipurpose, sass, scss, saas, software" />
    <meta name="description" content="HTML5 Template" />
    <meta name="author" content="www.themeht.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')-Roulette Syllabus</title>
    <link rel="icon" type="image/png" sizes="56x56" href="{{asset('assets/images/logo.png')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- favicon icon -->

    <!-- inject css start -->

    <!--== bootstrap -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

    <!--== animate -->
    <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css" />

    <!--== fontawesome -->
    <link href="{{asset('assets/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css" />
    <!--== line-awesome -->
    <link href="{{asset('assets/css/line-awesome.min.css')}}" rel="stylesheet" type="text/css" />

    <!--== magnific-popup -->
    <link href="{{asset('assets/css/magnific-popup/magnific-popup.css')}}" rel="stylesheet" type="text/css" />

    <!--== base -->
    <link href="{{asset('assets/css/base.css')}}" rel="stylesheet" type="text/css" />

    <!--== shortcodes -->
    <link href="{{asset('assets/css/shortcodes.css')}}" rel="stylesheet" type="text/css" />

    <!--== default-theme -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"/>

    <!--== responsive -->
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
    <!--== color-customizer -->
    <link href="#" data-style="styles" rel="stylesheet">
    <link href="{{asset('assets/css/theme-color/color-4.css')}}"  rel="stylesheet" type="text/css" />
        <!-- inject css end -->
    <!--== jquery -->
    <script src="{{asset('assets/js/theme.js')}}"></script>
    <script>
        function killCopy(e){
            return false;
        }
        function reEnable(){
            return true;
        }
        document.onselectstart=new Function ("return false");
        if (window.sidebar){
            document.onmousedown=killCopy;
            document.onclick=reEnable;
        }
    </script>

</head>
<body class="home-4">

<!-- page wrapper start -->

<div class="page-wrapper">

    <!-- preloader start -->

    <div id="ht-preloader">
        <div class="loader clear-loader">
            <div class="loader-box"></div>
            <div class="loader-box"></div>
            <div class="loader-box"></div>
            <div class="loader-box"></div>
            <div class="loader-wrap-text">
                <div class="text"><span>S</span><span>Y</span><span>L</span><span>L</span><span>A</span><span>B</span><span>U</span><span>S</span>
                </div>
            </div>
        </div>
    </div>

    <!-- preloader end -->
    <!--header start-->
    <!--header start-->


    <header id="site-header" class="header"  style="position:relative; z-index: 999">
        <div id="header-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Navbar -->
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand logo" href="/">
                                <img id="logo-img"  src="{{asset('assets/images/logo.png')}}" alt="">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span></span>
                                <span></span>
                                <span></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <!-- Left nav -->
                                <ul id="main-menu" class="nav navbar-nav ml-auto mr-auto">
                                    <li class="nav-item">
                                        <a class="{{ Request::is('home*') ? 'nav-link active' : 'nav-link' }}" href="{{ url('/') }}" role="button">Home</a>
                                    </li>
                                    <li class="nav-item"><a class="{{ Request::is('casino-rng*') ? 'nav-link active' : 'nav-link' }}" href="{{ url('/casino-rng') }}" role="button">Casino RNG</a>
                                    </li>
                                    <li class="nav-item"><a class="{{ Request::is('faq*') ? 'nav-link active' : 'nav-link' }}" href="{{ url('/faq') }}" role="button">Faq</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="{{ Request::is('low-of-third*') ? 'nav-link active' : 'nav-link' }}" href="{{ url('/low-of-third') }}" role="button">Law Of Third</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="{{ Request::is('mobile-app*') ? 'nav-link active' : 'nav-link' }}" href="{{ url('/mobile-app') }}" role="button">Mobile App</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="{{ Request::is('contact*') ? 'nav-link active' : 'nav-link' }}" href="{{ url('/contact') }}" role="button">Contact</a>
                                    </li>
                                    @if (Auth::check())
                                    @else
                                    <li class="nav-item"> <a class="nav-link" href="#">Rergister</a>
                                        <ul>
                                            <li>
                                                <a class="{{ Request::is('register*')  }}" href="{{ url('/register') }}" role="button">Sing Up</a>
                                            </li>
                                            <li>
                                                <a class="{{ Request::is('login*') }}" href="{{ url('/login') }}" role="button">Login</a>
                                            </li>
                                        </ul>
                                    </li>
                                    @endif

                                </ul>
                            </div>
                            @if (Auth::check())
                                <a  href="/login" class="text-black" >
                                    <i class="fas fa-user"></i>
                                    <span class="text-black">{{{ Auth::user()->first_name}}}</span>
                                </a>
                            @else
                            <a class="btn border-0 btn-theme btn-circle  " href="/login" data-text="Login"> <span>L</span><span>o</span><span>g</span><span>i</span><span>n</span>
                            </a>
                            @endif

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--header end-->

 @yield('content')

@include('front/subscribe')
    <!--footer start-->
<footer class="footer bg-dark">
    <div class="primary-footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="footer-logo text-center">
                        <a href="/home">
                            <img id="footer-logo-img" src="{{asset('assets/images/logo.png')}}" class="img-center" alt="">
                        </a>
                        <h3>Roulette Syllabus</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pl-md-5 sm-mt-5 footer-list text-lg-left text-center">
                    <ul class="list-unstyled w-100">
                        <li><a href="/low-of-third">Low Of Third</a>
                        </li>
                        <li><a href="/faq">Faq</a>
                        </li>
                        <li><a href="/casino-rng">Casino Rng</a>
                        </li>
                        <li><a href="/mobile-app">Mobile App</a>
                        </li>
                        <li><a href="/contact">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-12 text-lg-left text-center">
                    <div class="ml-lg-5 ">
                        <h2>Verified by</h2>
                    </div>
                    <ul class="media-icon list-unstyled col-12  d-flex flex-wrap justify-content-center">
                        <li class="col  ">
                            <img class="img-center" src="{{asset('assets/images/footer/paypal.png')}}" alt="">
                        </li>
                        <li class="col ">
                            <img class="img-center"  src="{{asset('assets/images/footer/visacard1.png')}}" alt="">
                        </li>
                        <li class="col  ">
                            <img class="img-center"  src="{{asset('assets/images/footer/skrill1.png')}}" alt="">
                        </li>
                        <li class="col  ">
                            <img class="img-center"  src="{{asset('assets/images/footer/bitcoin.png')}}" alt="">
                        </li>
                        <li class="col  ">
                            <img class="img-center"  src="{{asset('assets/images/footer/postepay.png')}}" alt="">
                        </li>
                    </ul>
                </div>

            </div>

            <hr>

            <div class="row align-items-center">
                <div class="col-12 d-flex flex-column justify-content-center align-items-center">
                    <div class="social-icons social-border social-hover mt-3">
                        <ul class="list-inline d-flex flex-wrap justify-content-center">
                            <li >
                                <a href="https://roulettesyllabus.blogspot.com"><img class="img-fluid" src="{{asset('assets/images/footer/blog.png')}}" alt=""></a>
                            </li>
                            <li >
                                <a href="https://www.diigo.com/profile/roulettesyllabus"><img class="img-fluid" src="{{asset('assets/images/footer/diigo.png')}}" alt=""></a>
                            </li>
                            <li >
                                <a href="https://www.evernote.com/pub/gomestelmo86/roulettesyllabus"><img class="img-fluid" src="{{asset('assets/images/footer/inoreader.png')}}" alt=""></a>
                            </li>
                            <li >
                                <a href="http://www.newsblur.com/site/7222119/roulette-syllabus-softwares-youtube-videos"><img class="img-fluid" src="{{asset('assets/images/footer/newsblur.png')}}" alt=""></a>
                            </li>
                            <li >
                                <a href="https://s.nimbusweb.me/share/2250694/o0ggor7s9u0ulihmyy8o"><img class="img-fluid" src="{{asset('assets/images/footer/nimbusweb.png')}}" alt=""></a>
                            </li>
                            <li >
                                <a href="https://www.pinterest.co.uk/roulettesyllabus/roulette-syllabus"><img class="img-fluid" src="{{asset('assets/images/footer/pinterest.png')}}" alt=""></a>
                            </li>
                            <li ><a href="https://www.toodledo.com/public/td5be3713e0bc4a/0/3214957/RouletteSyllabus.html"><img class="img-fluid" src="{{asset('assets/images/footer/toodledot.png')}}" alt=""></a>
                            </li>
                            <li ><a href="https://trello.com/b/NS75z9lW/roulette-syllabus"><img class="img-fluid" src="{{asset('assets/images/footer/trello.png')}}" alt=""></a>
                            </li>
                            <li ><a href="https://roulettesyllabus.tumblr.com"><img class="img-fluid" src="{{asset('assets/images/footer/tumblr.png')}}" alt=""></a>
                            </li>
                            <li ><a href="https://www.youtube.com/channel/UC-bHAxZ2eXMCfS58ABAJ2xw"><img class="img-fluid" src="{{asset('assets/images/footer/youtube.png')}}" alt=""></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-12 text-center mt-3"> <span>Copyright <?php echo date('Y'); ?>
                        All rights reserved | Roulette Syllabus </span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</footer>
    <!--footer end-->


</div>

<!-- page wrapper end -->


<!--back-to-top start-->

<div class="scroll-top"><a class="smoothscroll" href="#top"><i class="flaticon-go-up-in-web"></i></a></div>

<!--back-to-top end-->

<!-- inject js start -->

<!--== menu -->
<script src="{{asset('assets/js/menu/jquery.smartmenus.js')}}"></script>

<!--== magnific-popup -->
<script src="{{asset('assets/js/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

<!--== counter -->
<script src="{{asset('assets/js/counter/counter.js')}}"></script>

<!--== countdown -->
<script src="{{asset('assets/js/countdown/jquery.countdown.min.js')}}"></script>

<!--==   -->
<script src="{{asset('assets/js/canvas.js')}}"></script>

<!--== contact-form +-->
<script src="{{asset('assets/js/contact-form/contact-form.js')}}"></script>

<!--== wow -->
<script src="{{asset('assets/js/wow.min.js')}}"></script>

<!--== theme-script -->
<script src="{{asset('assets/js/theme-script.js')}}"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<!-- inject js end -->
@yield('scripts')

</body>

</html>
