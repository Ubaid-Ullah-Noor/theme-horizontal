<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App Favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

        <!-- App title -->
        <title>Uplon - Bootstrap 4 Responsive Admin Dashboard Template</title>

        <!-- Switchery css -->
        <link href="{{asset('plugins/switchery/switchery.min.css')}}" rel="stylesheet" />

        <!-- Bootstrap CSS -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- App CSS -->
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />

        <!-- Modernizr js -->
        <script src="{{asset('assets/js/modernizr.min.js')}}"></script>

    </head>


    <body>

        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container">

                    <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="{{Route('index')}}" class="logo">
                            <i class="zmdi zmdi-group-work icon-c-logo"></i>
                            <span>Uplon</span>
                        </a>
                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras navbar-topbar">

                        <ul class="list-inline float-right mb-0">

                            <li class="list-inline-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>

                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <i class="zmdi zmdi-notifications-none noti-icon"></i>
                                    <span class="noti-icon-badge"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5><small><span class="badge badge-danger float-right">7</span>Notification</small></h5>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-success"><i class="icon-bubble"></i></div>
                                        <p class="notify-details">Robert S. Taylor commented on Admin<small class="text-muted">1min ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info"><i class="icon-user"></i></div>
                                        <p class="notify-details">New user registered.<small class="text-muted">1min ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-danger"><i class="icon-like"></i></div>
                                        <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">1min ago</small></p>
                                    </a>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                                        View All
                                    </a>

                                </div>
                            </li>

                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <i class="zmdi zmdi-email noti-icon"></i>
                                    <span class="noti-icon-badge"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg" aria-labelledby="Preview">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title bg-success">
                                        <h5><small><span class="badge badge-danger float-right">7</span>Messages</small></h5>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-faded">
                                            <img src="{{asset('assets/images/users/avatar-2.jpg')}}" alt="img" class="rounded-circle img-fluid">
                                        </div>
                                        <p class="notify-details">
                                            <b>Robert Taylor</b>
                                            <span>New tasks needs to be done</span>
                                            <small class="text-muted">1min ago</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-faded">
                                            <img src="{{asset('assets/images/users/avatar-3.jpg')}}" alt="img" class="rounded-circle img-fluid">
                                        </div>
                                        <p class="notify-details">
                                            <b>Carlos Crouch</b>
                                            <span>New tasks needs to be done</span>
                                            <small class="text-muted">1min ago</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-faded">
                                            <img src="{{asset('assets/images/users/avatar-4.jpg')}}" alt="img" class="rounded-circle img-fluid">
                                        </div>
                                        <p class="notify-details">
                                            <b>Robert Taylor</b>
                                            <span>New tasks needs to be done</span>
                                            <small class="text-muted">1min ago</small>
                                        </p>
                                    </a>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                                        View All
                                    </a>

                                </div>
                            </li>

                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link waves-effect waves-light right-bar-toggle" href="javascript:void(0);">
                                    <i class="zmdi zmdi-format-subject noti-icon"></i>
                                </a>
                            </li>

                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="{{asset('assets/images/users/avatar-1.jpg')}}" alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="text-overflow"><small>Welcome ! John</small> </h5>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="zmdi zmdi-account-circle"></i> <span>Profile</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="zmdi zmdi-settings"></i> <span>Settings</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="zmdi zmdi-lock-open"></i> <span>Lock Screen</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="zmdi zmdi-power"></i> <span>Logout</span>
                                    </a>

                                </div>
                            </li>

                        </ul>

                    </div> <!-- end menu-extras -->
                    <div class="clearfix"></div>

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->


            <div class="navbar-custom">
                <div class="container">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">
                            <li>
                                <a href="{{Route('index')}}"><i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard </span> </a>
                            </li>
                            <li class="has-submenu">
                                <a href="#"><i class="zmdi zmdi-format-underlined"></i> <span> User Interface </span> </a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="{{Route('ui-buttons')}}">Buttons</a></li>
                                            <li><a href="{{Route('ui-cards')}}">Cards</a></li>
                                            <li><a href="{{Route('ui-dropdowns')}}">Dropdowns</a></li>
                                            <li><a href="{{Route('ui-checkbox-radio')}}">Checkboxs-Radios</a></li>
                                            <li><a href="{{Route('ui-navs')}}">Navs</a></li>
                                            <li><a href="{{Route('ui-progress')}}">Progress</a></li>
                                            <li><a href="{{Route('ui-modals')}}">Modals</a></li>
                                            <li><a href="{{Route('ui-alerts')}}">Alerts</a></li>
                                            <li><a href="{{Route('ui-bootstrap')}}">Bootstrap UI</a></li>
                                            <li><a href="{{Route('ui-typography')}}">Typography</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="{{Route('ui-notification')}}">Notification</a></li>
                                            <li><a href="{{Route('ui-carousel')}}">Carousel</a></li>
                                            <li><a href="{{Route('components-grid')}}">Grid</a></li>
                                            <li><a href="{{Route('components-range-sliders')}}">Range sliders</a></li>
                                            <li><a href="{{Route('components-sweet-alert')}}">Sweet Alerts</a></li>
                                            <li><a href="{{Route('components-ratings')}}">Ratings</a></li>
                                            <li><a href="{{Route('components-treeview')}}">Treeview</a></li>
                                            <li><a href="{{Route('components-tour')}}">Tour</a></li>
                                            <li><a href="{{Route('widgets-tiles')}}">Tile Box</a></li>
                                            <li><a href="{{Route('widgets-charts')}}">Chart Widgets</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="zmdi zmdi-album"></i> <span> Icons </span> </a>
                                <ul class="submenu">
                                    <li><a href="{{Route('icons-materialdesign')}}">Material Design</a></li>
                                    <li><a href="{{Route('icons-ionicons')}}">Ion Icons</a></li>
                                    <li><a href="{{Route('icons-fontawesome')}}">Font awesome</a></li>
                                    <li><a href="{{Route('icons-themify')}}">Themify Icons</a></li>
                                    <li><a href="{{Route('icons-simple-line')}}">Simple line Icons</a></li>
                                    <li><a href="{{Route('icons-weather')}}">Weather Icons</a></li>
                                    <li><a href="{{Route('icons-pe7')}}">PE7 Icons</a></li>
                                    <li><a href="{{Route('icons-typicons')}}">Typicons</a></li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="zmdi zmdi-collection-text"></i><span> Forms </span> </a>
                                <ul class="submenu">
                                   <li><a href="{{Route('form-elements')}}">General Elements</a></li>
                                    <li><a href="{{Route('form-advanced')}}">Advanced Form</a></li>
                                    <li><a href="{{Route('form-validation')}}">Form Validation</a></li>
                                    <li><a href="{{Route('form-pickers')}}">Form Pickers</a></li>
                                    <li><a href="{{Route('form-wizard')}}">Form Wizard</a></li>
                                    <li><a href="{{Route('form-mask')}}">Form Masks</a></li>
                                    <li><a href="{{Route('form-uploads')}}">Multiple File Upload</a></li>
                                    <li><a href="{{Route('form-xeditable')}}">X-editable</a></li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="zmdi zmdi-format-list-bulleted"></i> <span> Tables </span> </a>
                                <ul class="submenu">
                                    <li><a href="{{Route('tables-basic')}}">Basic Tables</a></li>
                                    <li><a href="{{Route('tables-datatable')}}">Data Table</a></li>
                                    <li><a href="{{Route('tables-responsive')}}">Responsive Table</a></li>
                                    <li><a href="{{Route('tables-tablesaw')}}">Tablesaw</a></li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="zmdi zmdi-chart"></i><span> Charts </span> </a>
                                <ul class="submenu">
                                    <li><a href="{{Route('chart-flot')}}">Flot Chart</a></li>
                                    <li><a href="{{Route('chart-morris')}}">Morris Chart</a></li>
                                    <li><a href="{{Route('chart-chartjs')}}">Chartjs</a></li>
                                    <li><a href="{{Route('chart-peity')}}">Peity Charts</a></li>
                                    <li><a href="{{Route('chart-chartist')}}">Chartist Charts</a></li>
                                    <li><a href="{{Route('chart-c3')}}">C3 Charts</a></li>
                                    <li><a href="{{Route('chart-sparkline')}}">Sparkline charts</a></li>
                                    <li><a href="{{Route('chart-knob')}}">Jquery Knob</a></li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="zmdi zmdi-collection-item"></i> <span> Pages </span> </a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="{{Route('calendar')}}">Calendar</a></li>
                                            <li><a href="{{Route('pages-starter')}}">Starter Page</a></li>
                                            <li><a href="{{Route('pages-login')}}">Login</a></li>
                                            <li><a href="{{Route('pages-register')}}">Register</a></li>
                                            <li><a href="{{Route('pages-recoverpw')}}">Recover Password</a></li>
                                            <li><a href="{{Route('pages-lock-screen')}}">Lock Screen</a></li>
                                            <li><a href="{{Route('pages-404')}}">Error 404</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="{{Route('pages-500')}}">Error 500</a></li>
                                            <li><a href="{{Route('pages-timeline')}}">Timeline</a></li>
                                            <li><a href="{{Route('pages-invoice')}}">Invoice</a></li>
                                            <li><a href="{{Route('pages-pricing')}}">Pricing</a></li>
                                            <li><a href="{{Route('pages-gallery')}}">Gallery</a></li>
                                            <li><a href="{{Route('pages-maintenance')}}">Maintenance</a></li>
                                            <li><a href="{{Route('pages-comingsoon')}}">Coming Soon</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                        <!-- End navigation menu  -->
                    </div>
                </div>
            </div>
        </header>
        <!-- End Navigation Bar-->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group float-right m-t-15">
                                <button type="button" class="btn btn-custom dropdown-toggle waves-effect waves-light"
                                        data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i
                                        class="fa fa-cog"></i></span></button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>

                            </div>
                            <h4 class="page-title">Weather Icons</h4>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="">

                            <div class="card-box">

                                <h4 class="page-header mt-0">26 New 2.0 Icons</h4>
                                <div class="row icon-list-demo">
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-day-cloudy-high"></i> wi wi-day-cloudy-high
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moonrise"></i>wi wi-moonrise
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-na"></i>wi wi-na
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-volcano"></i>wi wi-volcano
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-day-light-wind"></i>wi wi-day-light-wind
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moonset"></i>wi wi-moonset
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-flood"></i>wi wi-flood
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-train"></i>wi wi-train
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-day-sleet"></i>wi wi-day-sleet
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-night-sleet"></i>wi wi-night-sleet
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-sandstorm"></i>wi wi-sandstorm
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-small-craft-advisory"></i>wi wi-small-craft-advisory
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-day-haze"></i>wi wi-day-haze
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-night-alt-sleet"></i>wi wi-night-alt-sleet
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-tsunami"></i>wi wi-tsunami
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-gale-warning"></i>wi wi-gale-warning
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-night-cloudy-high"></i>wi wi-night-cloudy-high
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-raindrop"></i>wi wi-raindrop
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-earthquake"></i>wi wi-earthquake
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-storm-warning"></i>wi wi-storm-warning
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-night-alt-partly-cloudy"></i>wi wi-night-alt-partly-cloudy
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-barometer"></i>wi wi-barometer
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-fire"></i>wi wi-fire
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-hurricane-warning"></i>wi wi-hurricane-warning
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-sleet"></i>wi wi-sleet
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-humidity"></i>wi wi-humidity
                                    </div>


                                </div>
                                <!-- End row -->

                                <h4 class="page-header">Daytime Icons</h4>
                                <div class="row icon-list-demo">
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-day-sunny"></i> wi wi-day-sunny
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-day-cloudy"></i> wi wi-day-cloudy
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-day-cloudy-gusts"></i> wi wi-day-cloudy-gusts
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-day-cloudy-windy"></i> wi wi-day-cloudy-windy
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-day-fog"></i> wi wi-day-fog
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-day-hail"></i> wi wi-day-hail
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-day-haze"></i> wi wi-day-haze
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-day-lightning"></i> wi wi-day-lightning
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-day-rain"></i> wi wi-day-rain
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-day-rain-mix"></i> wi wi-day-rain-mix
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-day-rain-wind"></i> wi wi-day-rain-wind
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-day-showers"></i> wi wi-day-showers
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-day-sleet"></i> wi wi-day-sleet
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-day-sleet-storm"></i> wi wi-day-sleet-storm
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-day-snow"></i> wi wi-day-snow
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-day-snow-thunderstorm"></i> wi wi-day-snow-thunderstorm
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-day-snow-wind"></i> wi wi-day-snow-wind
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-day-sprinkle"></i> wi wi-day-sprinkle
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-day-storm-showers"></i> wi wi-day-storm-showers
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-day-sunny-overcast"></i> wi wi-day-sunny-overcast
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-day-thunderstorm"></i> wi wi-day-thunderstorm
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-day-windy"></i> wi wi-day-windy
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-solar-eclipse"></i> wi wi-solar-eclipse
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-hot"></i> wi wi-hot
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-day-cloudy-high"></i> wi wi-day-cloudy-high
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-day-light-wind"></i> wi wi-day-light-wind
                                    </div>

                                </div>
                                <!-- End row -->

                                <h4 class="page-header">Nighttime Icons</h4>
                                <div class="row icon-list-demo">

                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-night-clear"></i> wi wi-night-clear
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-night-alt-cloudy"></i> wi wi-night-alt-cloudy
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-night-alt-cloudy-gusts"></i> wi wi-night-alt-cloudy-gusts
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-night-alt-cloudy-windy"></i> wi wi-night-alt-cloudy-windy
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-night-alt-hail"></i> wi wi-night-alt-hail
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-night-alt-lightning"></i> wi wi-night-alt-lightning
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-night-alt-rain"></i> wi wi-night-alt-rain
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-night-alt-rain-mix"></i> wi wi-night-alt-rain-mix
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-night-alt-rain-wind"></i> wi wi-night-alt-rain-wind
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-night-alt-showers"></i> wi wi-night-alt-showers
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-night-alt-sleet"></i> wi wi-night-alt-sleet
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-night-alt-sleet-storm"></i> wi wi-night-alt-sleet-storm
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-night-alt-snow"></i> wi wi-night-alt-snow
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-night-alt-snow-thunderstorm"></i> wi wi-night-alt-snow-thunderstorm
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-night-alt-snow-wind"></i> wi wi-night-alt-snow-wind
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-night-alt-sprinkle"></i> wi wi-night-alt-sprinkle
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-night-alt-storm-showers"></i> wi wi-night-alt-storm-showers
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-night-alt-thunderstorm"></i> wi wi-night-alt-thunderstorm
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-night-cloudy"></i> wi wi-night-cloudy
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-night-cloudy-gusts"></i> wi wi-night-cloudy-gusts
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-night-cloudy-windy"></i> wi wi-night-cloudy-windy
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-night-fog"></i> wi wi-night-fog
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-night-hail"></i> wi wi-night-hail
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-night-lightning"></i> wi wi-night-lightning
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-night-partly-cloudy"></i> wi wi-night-partly-cloudy
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-night-rain"></i> wi wi-night-rain
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-night-rain-mix"></i> wi wi-night-rain-mix
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-night-rain-wind"></i> wi wi-night-rain-wind
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-night-showers"></i> wi wi-night-showers
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-night-sleet"></i> wi wi-night-sleet
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-night-sleet-storm"></i> wi wi-night-sleet-storm
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-night-snow"></i> wi wi-night-snow
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-night-snow-thunderstorm"></i> wi wi-night-snow-thunderstorm
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-night-snow-wind"></i> wi wi-night-snow-wind
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-night-sprinkle"></i> wi wi-night-sprinkle
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-night-storm-showers"></i> wi wi-night-storm-showers
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-night-thunderstorm"></i> wi wi-night-thunderstorm
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-lunar-eclipse"></i> wi wi-lunar-eclipse
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-stars"></i> wi wi-stars
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-storm-showers"></i> wi wi-storm-showers
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-thunderstorm"></i> wi wi-thunderstorm
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-night-alt-cloudy-high"></i> wi wi-night-alt-cloudy-high
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-night-cloudy-high"></i> wi wi-night-cloudy-high
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-night-alt-partly-cloudy"></i> wi wi-night-alt-partly-cloudy
                                    </div>

                                </div>
                                <!-- End row -->

                                <h4 class="page-header">Neutral Icons</h4>
                                <div class="row icon-list-demo">

                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-cloud"></i> wi wi-cloud
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-cloudy"></i> wi wi-cloudy
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-cloudy-gusts"></i> wi wi-cloudy-gusts
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-cloudy-windy"></i> wi wi-cloudy-windy
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-fog"></i> wi wi-fog
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-hail"></i> wi wi-hail
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-rain"></i> wi wi-rain
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-rain-mix"></i> wi wi-rain-mix
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-rain-wind"></i> wi wi-rain-wind
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-showers"></i> wi wi-showers
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-sleet"></i> wi wi-sleet
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-snow"></i> wi wi-snow
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-sprinkle"></i> wi wi-sprinkle
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-storm-showers"></i> wi wi-storm-showers
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-thunderstorm"></i> wi wi-thunderstorm
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-snow-wind"></i> wi wi-snow-wind
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-snow"></i> wi wi-snow
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-smog"></i> wi wi-smog
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-smoke"></i> wi wi-smoke
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-lightning"></i> wi wi-lightning
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-raindrops"></i> wi wi-raindrops
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-raindrop"></i> wi wi-raindrop
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-dust"></i> wi wi-dust
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-snowflake-cold"></i> wi wi-snowflake-cold
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-windy"></i> wi wi-windy
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-strong-wind"></i> wi wi-strong-wind
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-sandstorm"></i> wi wi-sandstorm
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-earthquake"></i> wi wi-earthquake
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-fire"></i> wi wi-fire
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-flood"></i> wi wi-flood
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-meteor"></i> wi wi-meteor
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-tsunami"></i> wi wi-tsunami
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-volcano"></i> wi wi-volcano
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-hurricane"></i> wi wi-hurricane
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-tornado"></i> wi wi-tornado
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-small-craft-advisory"></i> wi wi-small-craft-advisory
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-gale-warning"></i> wi wi-gale-warning
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-storm-warning"></i> wi wi-storm-warning
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-hurricane-warning"></i> wi wi-hurricane-warning
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-wind-direction"></i> wi wi-wind-direction
                                    </div>


                                </div>
                                <!-- End row -->

                                <h4 class="page-header">Miscellaneous Icons</h4>
                                <div class="row icon-list-demo">

                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-alien"></i> wi wi-alien
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-celsius"></i> wi wi-celsius
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-fahrenheit"></i> wi wi-fahrenheit
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-degrees"></i> wi wi-degrees
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-thermometer"></i> wi wi-thermometer
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-thermometer-exterior"></i> wi wi-thermometer-exterior
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-thermometer-internal"></i> wi wi-thermometer-internal
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-cloud-down"></i> wi wi-cloud-down
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-cloud-up"></i> wi wi-cloud-up
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-cloud-refresh"></i> wi wi-cloud-refresh
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-horizon"></i> wi wi-horizon
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-horizon-alt"></i> wi wi-horizon-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-sunrise"></i> wi wi-sunrise
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-sunset"></i> wi wi-sunset
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moonrise"></i> wi wi-moonrise
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moonset"></i> wi wi-moonset
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-refresh"></i> wi wi-refresh
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-refresh-alt"></i> wi wi-refresh-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-umbrella"></i> wi wi-umbrella
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-barometer"></i> wi wi-barometer
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-humidity"></i> wi wi-humidity
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-na"></i> wi wi-na
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-train"></i> wi wi-train
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi "></i> wi
                                    </div>


                                </div>
                                <!-- End row -->

                                <h4 class="page-header">Moon Phases Icons</h4>
                                <div class="alert alert-success">
                                    The moons are split into 28 icons, to correspond neatly with the 28 day moon cycle. There is a primary
                                    set and alternate set. The primary set is meant to be interpreted as: where there are pixels, that is the
                                    illuminated part of the moon. The alternate set is meant to be interpreted as: where there are pixels,
                                    that is the shadowed part of the moon.
                                </div>
                                <div class="row icon-list-demo">

                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-new"></i> wi wi-moon-new
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-waxing-cresent-1"></i> wi wi-moon-waxing-cresent-1
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-waxing-cresent-2"></i> wi wi-moon-waxing-cresent-2
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-waxing-cresent-3"></i> wi wi-moon-waxing-cresent-3
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-waxing-cresent-4"></i> wi wi-moon-waxing-cresent-4
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-waxing-cresent-5"></i> wi wi-moon-waxing-cresent-5
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-waxing-cresent-6"></i> wi wi-moon-waxing-cresent-6
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-first-quarter"></i> wi wi-moon-first-quarter
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-waxing-gibbous-1"></i> wi wi-moon-waxing-gibbous-1
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-waxing-gibbous-2"></i> wi wi-moon-waxing-gibbous-2
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-waxing-gibbous-3"></i> wi wi-moon-waxing-gibbous-3
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-waxing-gibbous-4"></i> wi wi-moon-waxing-gibbous-4
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-waxing-gibbous-5"></i> wi wi-moon-waxing-gibbous-5
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-waxing-gibbous-6"></i> wi wi-moon-waxing-gibbous-6
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-full"></i> wi wi-moon-full
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-waning-gibbous-1"></i> wi wi-moon-waning-gibbous-1
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-waning-gibbous-2"></i> wi wi-moon-waning-gibbous-2
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-waning-gibbous-3"></i> wi wi-moon-waning-gibbous-3
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-waning-gibbous-4"></i> wi wi-moon-waning-gibbous-4
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-waning-gibbous-5"></i> wi wi-moon-waning-gibbous-5
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-waning-gibbous-6"></i> wi wi-moon-waning-gibbous-6
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-third-quarter"></i> wi wi-moon-third-quarter
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-waning-crescent-1"></i> wi wi-moon-waning-crescent-1
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-waning-crescent-2"></i> wi wi-moon-waning-crescent-2
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-waning-crescent-3"></i> wi wi-moon-waning-crescent-3
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-waning-crescent-4"></i> wi wi-moon-waning-crescent-4
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-waning-crescent-5"></i> wi wi-moon-waning-crescent-5
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-waning-crescent-6"></i> wi wi-moon-waning-crescent-6
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-alt-new"></i> wi wi-moon-alt-new
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-alt-waxing-cresent-1"></i> wi wi-moon-alt-waxing-cresent-1
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-alt-waxing-cresent-2"></i> wi wi-moon-alt-waxing-cresent-2
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-alt-waxing-cresent-3"></i> wi wi-moon-alt-waxing-cresent-3
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-alt-waxing-cresent-4"></i> wi wi-moon-alt-waxing-cresent-4
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-alt-waxing-cresent-5"></i> wi wi-moon-alt-waxing-cresent-5
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-alt-waxing-cresent-6"></i> wi wi-moon-alt-waxing-cresent-6
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-alt-first-quarter"></i> wi wi-moon-alt-first-quarter
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-alt-waxing-gibbous-1"></i> wi wi-moon-alt-waxing-gibbous-1
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-alt-waxing-gibbous-2"></i> wi wi-moon-alt-waxing-gibbous-2
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-alt-waxing-gibbous-3"></i> wi wi-moon-alt-waxing-gibbous-3
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-alt-waxing-gibbous-4"></i> wi wi-moon-alt-waxing-gibbous-4
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-alt-waxing-gibbous-5"></i> wi wi-moon-alt-waxing-gibbous-5
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-alt-waxing-gibbous-6"></i> wi wi-moon-alt-waxing-gibbous-6
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-alt-full"></i> wi wi-moon-alt-full
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-alt-waning-gibbous-1"></i> wi wi-moon-alt-waning-gibbous-1
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-alt-waning-gibbous-2"></i> wi wi-moon-alt-waning-gibbous-2
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-alt-waning-gibbous-3"></i> wi wi-moon-alt-waning-gibbous-3
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-alt-waning-gibbous-4"></i> wi wi-moon-alt-waning-gibbous-4
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-alt-waning-gibbous-5"></i> wi wi-moon-alt-waning-gibbous-5
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-alt-waning-gibbous-6"></i> wi wi-moon-alt-waning-gibbous-6
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-alt-third-quarter"></i> wi wi-moon-alt-third-quarter
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-alt-waning-crescent-1"></i> wi wi-moon-alt-waning-crescent-1
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-alt-waning-crescent-2"></i> wi wi-moon-alt-waning-crescent-2
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-alt-waning-crescent-3"></i> wi wi-moon-alt-waning-crescent-3
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-alt-waning-crescent-4"></i> wi wi-moon-alt-waning-crescent-4
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-alt-waning-crescent-5"></i> wi wi-moon-alt-waning-crescent-5
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-moon-alt-waning-crescent-6"></i> wi wi-moon-alt-waning-crescent-6
                                    </div>


                                </div>
                                <!-- End row -->

                                <h4 class="page-header">Time Icons</h4>

                                <div class="row icon-list-demo">

                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-time-1"></i> wi wi-time-1
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-time-2"></i> wi wi-time-2
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-time-3"></i> wi wi-time-3
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-time-4"></i> wi wi-time-4
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-time-5"></i> wi wi-time-5
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-time-6"></i> wi wi-time-6
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-time-7"></i> wi wi-time-7
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-time-8"></i> wi wi-time-8
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-time-9"></i> wi wi-time-9
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-time-10"></i> wi wi-time-10
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-time-11"></i> wi wi-time-11
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-time-12"></i> wi wi-time-12
                                    </div>

                                </div>
                                <!-- End row -->

                                <h4 class="page-header">Directional Arrows</h4>

                                <div class="row icon-list-demo">

                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-direction-up"></i> wi wi-direction-up
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-direction-up-right"></i> wi wi-direction-up-right
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-direction-right"></i> wi wi-direction-right
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-direction-down-right"></i> wi wi-direction-down-right
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-direction-down"></i> wi wi-direction-down
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-direction-down-left"></i> wi wi-direction-down-left
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-direction-left"></i> wi wi-direction-left
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="wi wi-direction-up-left"></i> wi wi-direction-up-left
                                    </div>


                                </div>
                                <!-- End row -->

                                <h4 class="page-header">Utility Classes</h4>
                                <div class="alert alert-success">
                                    Use these special, built-in utility classes to flip, rotate, or assign a fixed width to any icon.
                                </div>
                                <div class="row">

                                    <div class="col-sm-4">
                                        <h5>Flip</h5>
                                        <p>
                                            <code>
                                                wi-flip-horizontal</code>
                                        </p>
                                        <p>
                                            <code>
                                                wi-flip-vertical</code>
                                        </p>
                                    </div>

                                    <div class="col-sm-4">
                                        <h5>Rotate</h5>
                                        <p>
                                            <code>
                                                wi-rotate-90</code>
                                        </p>
                                        <p>
                                            <code>
                                                wi-rotate-180</code>
                                        </p>
                                        <p>
                                            <code>
                                                wi-rotate-270</code>
                                        </p>
                                    </div>

                                    <div class="col-sm-4">
                                        <h5>Fixed Width</h5>
                                        <p>
                                            <code>
                                                wi-fw</code>
                                        </p>
                                    </div>

                                </div>
                                <!-- End row -->

                            </div> <!-- end panel-body -->
                        </div> <!-- Panel-default-->
                    </div> <!-- col-->
                </div> <!-- End row -->

            </div> <!-- container -->


            <!-- Footer -->
            <footer class="footer">
                2016 - 2019 © Uplon.
            </footer>
            <!-- End Footer -->



            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <div class="nicescroll">
                    <ul class="nav nav-pills nav-justified">
                        <li class="nav-item">
                            <a href="#home-2"  class="nav-link active" data-toggle="tab" aria-expanded="false">
                                Activity
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#messages-2" class="nav-link" data-toggle="tab" aria-expanded="true">
                                Settings
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="home-2">
                            <div class="timeline-2">
                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">5 minutes ago</small>
                                        <p><strong><a href="#" class="text-info">John Doe</a></strong> Uploaded a photo <strong>"DSC000586.jpg"</strong></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">30 minutes ago</small>
                                        <p><a href="" class="text-info">Lorem</a> commented your post.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">59 minutes ago</small>
                                        <p><a href="" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">1 hour ago</small>
                                        <p><strong><a href="#" class="text-info">John Doe</a></strong>Uploaded 2 new photos</p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">3 hours ago</small>
                                        <p><a href="" class="text-info">Lorem</a> commented your post.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">5 hours ago</small>
                                        <p><a href="" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="messages-2">

                            <div class="row m-t-10">
                                <div class="col-8">
                                    <h5 class="m-0">Notifications</h5>
                                    <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                                </div>
                                <div class="col-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small"/>
                                </div>
                            </div>

                            <div class="row m-t-10">
                                <div class="col-8">
                                    <h5 class="m-0">API Access</h5>
                                    <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                                </div>
                                <div class="col-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small"/>
                                </div>
                            </div>

                            <div class="row m-t-10">
                                <div class="col-8">
                                    <h5 class="m-0">Auto Updates</h5>
                                    <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                                </div>
                                <div class="col-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small"/>
                                </div>
                            </div>

                            <div class="row m-t-10">
                                <div class="col-8">
                                    <h5 class="m-0">Online Status</h5>
                                    <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                                </div>
                                <div class="col-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small"/>
                                </div>
                            </div>

                        </div>
                    </div>
                </div> <!-- end nicescroll -->
            </div>
            <!-- /Right-bar -->



        </div> <!-- End wrapper -->




        

        <!-- jQuery  -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/js/waves.js')}}"></script>
        <script src="{{asset('assets/js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('plugins/switchery/switchery.min.js')}}"></script>


        <!-- App js -->
        <script src="{{asset('assets/js/jquery.core.js')}}"></script>
        <script src="{{asset('assets/js/jquery.app.js')}}"></script>

    </body>
</html>