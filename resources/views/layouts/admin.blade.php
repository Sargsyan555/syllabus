<!DOCTYPE html>
<!--
Template Name: FlexAdmin - Bootstrap 5 Admin Template
Version: 1.0.1
Author: TEachProd.
Website: https://teachprod.com
-->

<html lang="en">

<!-- Mirrored from flexadmin2.web.app/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Feb 2021 10:07:07 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="E-commerce Dashboard">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <meta property="og:image" content="../www.teachprod.com/wp-content/uploads/2020/10/carrot.jpg">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')-Roulette Syllabus</title>
    <link rel="icon" type="image/png" sizes="56x56" href="{{asset('assets/images/logo.png')}}">
    <link href="{{asset('assets_admin/css/vendor_app.css')}}" rel="stylesheet">
    <link href="{{asset('assets_admin/css/app.css')}}" rel="stylesheet">
    <link href="{{asset('assets_admin/css/ecommerce.css')}}" rel="stylesheet">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-180917586-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-180917586-1');
    </script>
    <script src="{{asset('assets/js/theme.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js" integrity="sha512-zlWWyZq71UMApAjih4WkaRpikgY9Bz1oXIW5G0fED4vk14JjGlQ1UmkGM392jEULP8jbNMiwLWdM8Z87Hu88Fw==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.css" integrity="sha512-8D+M+7Y6jVsEa7RD6Kv/Z7EImSpNpQllgaEIQAtqHcI0H6F4iZknRj0Nx1DCdB+TwBaS+702BGWYC0Ze2hpExQ==" crossorigin="anonymous" />


</head>
<!-- Possible Body Attributes
    * data-theme-header-fixed = 'true'       - For fixed Header
    * data-theme-header-fixed = 'false'      - For static Header
    * data-theme-sidebar-fixed = 'true'      - For fixed Left Navigation
    * data-theme-sidebar-fixed = 'false'     - For static Left Navigation
    * data-theme-sidebar-shrinked = 'true'   - For shrinking Left Navigation
    * data-theme-footer-fixed = 'true'       - For fixed Footer
    * data-theme-footer-fixed = 'false'      - For static Footer
    * data-theme-mode = 'dark-mode'          - For Dark Mode
-->

<body>
<!-- apply javascript before page content be loaded -->
<script>
    'use strict';
    var defaultConfig = {
        fixedLeftSidebar: true,
        fixedHeader: false,
        fixedFooter: false,
        isShrinked: false,
        themeColor: 'app-theme-facebook',
        themeMode: 'default-mode'
    };
    var globalConfigs = JSON.parse(localStorage.getItem('ABCADMIN_CONFIG')) || defaultConfig;
    var appThemeMode = globalConfigs.themeMode;
    var isShrinked = globalConfigs.isShrinked;
    var body = document.getElementsByTagName("body")[0];
    body.setAttribute("data-theme-mode", appThemeMode);
    body.setAttribute("data-theme-sidebar-shrinked", isShrinked)
</script>

<div class="container-fluid p-lg-0">

    <nav id="left-sidebar" class="left-sidebar">
        <!-- start sidebar-header -->
        <div class="sidebar-header">
            <div class="logo">
                <h3><a href="/home">
                        <span class="fw-700">Syllabus</span>
                    </a>
                </h3>
            </div>
            <a class="sidebar-toggle-btn">
                <i class="far fa-bars"></i>
            </a>
        </div>
        <!-- end sidebar-header -->
        <div class="sidebar-wrapper">
            <!-- start sidebar-body -->
            <div class="sidebar-body">
                <div class="nav-filter align-items-center justify-content-center flex-row mb-4 p-2">
                    <input type="text" placeholder="Quick search" class="w-100 form-control" tabindex="0">
                </div>
                <!-- end nav-profile -->
                <!-- start sidebar-block -->
                <div class="sidebar-block">
                    <div class="sidebar-title">MAIN</div>
                    <ul class="list-unstyled sidebar-content">
                        <li class="sidebar-item">
                            <a href="/home" >
                                <i class="fal fa-tachometer"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        @if(auth()->user()->hasRole('admin'))
                        <li class="sidebar-item">
                            <a href="/users">
                                <i class="fas fa-user"></i>
                                <span>Users</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/subscribers">
                                <i class="fas fa-users"></i>
                                <span>Subscribers</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/members_videos">
                                <i class="fas fa-video"></i>
                                <span>Edit Members Videos</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/simple_videos">
                                <i class="fas fa-video"></i>
                                <span>Simple Videos</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/training_videos">
                                <i class="fas fa-video"></i>
                                <span>Training Videos</span>
                            </a>
                        </li>
                        @endif
                        @if( Auth::user()->status == 1)
                            <li class="sidebar-item">
                                <a href="/use_of_software">
                                    <i class="fas fa-video"></i>
                                    <span>Use of Software</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="/manually_setup">
                                    <i class="fas fa-video"></i>
                                    <span>Manually Setup</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="/automated_setup">
                                    <i class="fas fa-video"></i>
                                    <span>Automated Setup</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="/run_simulation">
                                    <i class="fas fa-video"></i>
                                    <span>Run Simulation</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="/flat_bet_and_videos">
                                    <i class="fas fa-video"></i>
                                    <span>Flat Bet And Videos</span>
                                </a>
                            </li>
                    @endif
                        <!-- end sidebar-item -->
                    </ul>
                </div>      <!-- end sidebar-block -->
            </div>
            <!-- end sidebar-body -->
            <div class="align-items-center justify-content-center sidebar-footer">
                <ul class="d-flex justify-content-around list-unstyled">
                    <li>
                        <a href="#">
                            <i class="fal fa-comments" data-bs-original-title="Chat History" data-bs-toggle="tooltip"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fal fa-life-ring" data-bs-original-title="Support" data-bs-toggle="tooltip"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fal fa-question-circle" data-bs-original-title="Helper" data-bs-toggle="tooltip"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- end sidebar-footer -->
        </div><!-- end sidebar-wrapper -->
    </nav>
    <div class="page-container">
        <nav class="navbar topbar">
            <div class="top-left-menu">
                <div id="form-global-search" class="rounded">
                    <form>
                        <div class="input-group position-relative">
                            <input type="text" class="form-control" placeholder="Search..." id="top-search">
                            <button type="submit">
                                <i class="fal fa-search text-highlight"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <ul class="list-unstyled top-right-menu">
                <li class="nav-item topbar-dropdown">
                    <a class="nav-link dropdown-toggle"  href="/" role="button" aria-haspopup="false" aria-expanded="false" id="emailsDropdown">
                        <i class="fas fa-home"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="nav-item user-setting-list topbar-dropdown">
                    <a class="nav-link dropdown-toggle nav-profile" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="{{asset('assets_admin//images/avatar.png')}}" alt="user-image" class="rounded-circle">
                        <span class="ms-1 d-none d-lg-inline">
                             <span class="user-name">Hi, {{Auth::user()->first_name}}</span>
                         </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown dropdown-animate">
                        <a href="/logout" class="dropdown-item">
                            <i class="fal fa-sign-out me-1"></i>
                            <span>Sign out</span>
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#right-sidebar" class="nav-link" data-bs-toggle="modal"  id="modalSetting">
                        <i class="fal fa-cog rotate"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- end navbar -->
    @yield('content')
    <!-- end page content -->

        <footer id="footer" class="d-flex align-items-center">
            <div class="row w-100">
                <div class="footer-nav col-md-8 col-sm-6">

                </div>
                <div class="copyright text-end col-md-4 col-sm-6">
                    <?php echo date('Y'); ?>&nbsp;©&nbsp;<a href="/home" target="_blank">Syllabus</a>
                </div>
            </div>
        </footer>
    </div>
    <!-- end page-container -->
    <div class="modal right fade" id="right-sidebar" tabindex="-1" aria-labelledby="modalSetting" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="align-items-center bg-trans-gradient justify-content-center modal-header rounded-0 w-100">
                    <h4 class="m-0 text-center text-white fw-700">
                        Settings
                        <small class="mb-0 opacity-80">User Interface Settings</small>
                    </h4>
                    <a href="#" class="pos-top-right text-white p-2 m-1 me-2 fs-md" data-dismiss="modal" aria-label="Close"><i class="fal fa-times"></i></a>
                </div>
                <div class="modal-body p-0">
                    <div class="settings-panel">
                        <div class="mx-3 mt-2">
                            <p class="text-muted fs-base">Customize layout, left sidebar menu, etc. FlexAdmin stores the preferences in local storage.</p>
                        </div>
                        <div class="mt-4 ps-3 pe-2">
                            <h5 class="p-0 fw-700">
                                Layout Options
                            </h5>
                        </div>
                        <div class="ps-3 pe-2">
                            <div class="d-flex mb-2">
                                <div class="custom-switcher custom-switcher-info">
                                    <input type="checkbox" name="app-shrinking-left-sidebar" id="app-shrinking-left-sidebar">
                                    <label for="app-shrinking-left-sidebar"></label>
                                </div>
                                <div class="ms-3"><label for="app-shrinking-left-sidebar">Shrinking Left Navigation</label></div>
                            </div>
                            <div class="d-flex mb-2">
                                <div class="custom-switcher custom-switcher-info">
                                    <input type="checkbox" name="app-fixed-header" id="app-fixed-header" value=true>
                                    <label for="app-fixed-header"></label>
                                </div>
                                <div class="ms-3"><label for="app-fixed-header">Fixed Header</label></div>
                            </div>
                            <div class="d-flex mb-2">
                                <div class="custom-switcher custom-switcher-info">
                                    <input type="checkbox" name="app-fixed-left-sidebar" id="app-fixed-left-sidebar">
                                    <label for="app-fixed-left-sidebar"></label>
                                </div>
                                <div class="ms-3"><label for="app-fixed-left-sidebar">Fixed Navigation</label></div>
                            </div>
                            <div class="d-flex mb-2">
                                <div class="custom-switcher custom-switcher-info">
                                    <input type="checkbox" name="app-fixed-footer" id="app-fixed-footer">
                                    <label for="app-fixed-footer"></label>
                                </div>
                                <div class="ms-3"><label for="app-fixed-footer">Fixed Footer</label></div>
                            </div>
                        </div>
                        <div class="mt-4 ps-3 pe-2">
                            <h5 class="p-0 fw-700">
                                Theme Colors
                            </h5>
                        </div>
                        <div class="theme-colors ps-3 pe-2">
                            <ul class="m-0 p-0">
                                <li>
                                    <a href="#" class="bg-anchor" data-theme-color="app-theme-anchor" data-bs-toggle="tooltip" data-bs-original-title="Anchor"></a>
                                </li>
                                <li>
                                    <a href="#" class="bg-maroon" data-theme-color="app-theme-maroon" data-bs-toggle="tooltip" data-bs-original-title="Maroon"></a>
                                </li>
                                <li>
                                    <a href="#" class="bg-carrot" data-theme-color="app-theme-carrot" data-bs-toggle="tooltip" data-bs-original-title="Carrot"></a>
                                </li>
                                <li>
                                    <a href="#" class="bg-lollipop" data-theme-color="app-theme-lollipop" data-bs-toggle="tooltip" data-bs-original-title="Lollipop"></a>
                                </li>
                                <li>
                                    <a href="#" class="bg-gold" data-theme-color="app-theme-gold" data-bs-toggle="tooltip" data-bs-original-title="Gold"></a>
                                </li>
                                <li>
                                    <a href="#" class="bg-forest" data-theme-color="app-theme-forest" data-bs-toggle="tooltip" data-bs-original-title="Forest"></a>
                                </li>
                                <li>
                                    <a href="#" class="bg-hoki" data-theme-color="app-theme-hoki" data-bs-toggle="tooltip" data-bs-original-title="Hoki"></a>
                                </li>
                                <li>
                                    <a href="#" class="bg-facebook" data-theme-color="app-theme-facebook" data-bs-toggle="tooltip" data-bs-original-title="Facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="bg-purple" data-theme-color="app-theme-purple" data-bs-toggle="tooltip" data-bs-original-title="Purple"></a>
                                </li>
                                <li>
                                    <a href="#" class="bg-indigo" data-theme-color="app-theme-indigo" data-bs-toggle="tooltip" data-bs-original-title="Indigo"></a>
                                </li>
                                <li>
                                    <a href="#" class="bg-cafe" data-theme-color="app-theme-cafe" data-bs-toggle="tooltip" data-bs-original-title="Cafe"></a>
                                </li>
                                <li>
                                    <a href="#" class="bg-charcoal" data-theme-color="app-theme-charcoal" data-bs-toggle="tooltip" data-bs-original-title="Charcoal"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-4 ps-3 pe-2">
                            <h5 class="p-0 fw-700">
                                Theme Modes
                            </h5>
                        </div>
                        <div class="theme-modes ps-3 pe-2">
                            <div class="row">
                                <div class="col-6 pe-2 text-center">
                                    <div data-theme-mode="default-mode" class="theme-mode-config d-flex bg-white border border-secondary rounded overflow-hidden text-success" style="height: 100px">
                                        <div class="map-left-sidebar px-2 pt-0 border-right"></div>
                                        <div class="d-flex w-100 flex-column flex-1">
                                            <div class="bg-white border-bottom py-1"></div>
                                            <div class="bg-white h-100 flex-1 pt-3 pb-3 px-2">
                                                <div class="py-3 h-100" style="background:url('{{asset('assets_admin/images/website-layout.jpg')}}') top left no-repeat;background-size: 100%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    Default
                                </div>
                                <div class="col-6 ps-2 text-center">
                                    <div data-theme-mode="dark-mode" class="theme-mode-config d-flex border border-white rounded overflow-hidden text-success bg-dark" style="height: 100px">
                                        <div class="px-2 pt-0 border-right"></div>
                                        <div class="d-flex w-100 flex-column flex-1">
                                            <div class="border-bottom py-1"></div>
                                            <div class="flex-1 h-100 pt-3 pb-3 px-2">
                                                <div class="py-3 h-100" style="background:url('{{asset('assets_admin/images/website-layout.jpg')}}') top left no-repeat;background-size: 100%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    Dark
                                </div>
                            </div>
                        </div>          <div class="d-flex justify-content-center mt-4 pt-4">
                            <button id="reset-setting" type="button" class="btn btn-warning btn-rounded d-block w-75">Reset</button>
                        </div>
                        <div class="d-flex justify-content-center mt-4 mb-4">
                            <a class="btn btn-rose btn-rounded d-block w-75" href="https://codecanyon.net/item/flexadmin-bootstrap-5-admin-template/29011667" target="_blank">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal-content -->
        </div>
        <!-- end modal-dialog -->
    </div>
</div>
<!-- end right-sidebar -->
<script src="{{asset('assets_admin/js/vendor_app_dashboard_analytics_dashboard_ecommerce_demo_add_product_demo_calendar_demo_datatable_dem_cf3c0e0d.js')}}"></script>
<script src="{{asset('assets_admin/js/vendor_app.js')}}"></script>
<script src="{{asset('assets_admin/js/app.js')}}"></script>
<script src="{{asset('assets_admin/js/vendor_dashboard_analytics_dashboard_ecommerce_demo_add_product_demo_chartjs_demo_dropzone_demo_widg_79dfae0c.js')}}"></script>
<script src="{{asset('assets_admin/js/ecommerce.js')}}"></script>

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

<!-- Mirrored from flexadmin2.web.app/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Feb 2021 10:07:56 GMT -->
</html>
