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
                            <h4 class="page-title">Checkboxes and Radios</h4>
                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-12">
                        <div class="">
                            <div class="card-box">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <h4 class="m-t-0 header-title">Basic</h4>

                                        <p class="text-muted font-13 m-b-30">
                                            Supports bootstrap brand colors: <code>.checkbox-primary</code>, <code>.checkbox-info</code> etc.
                                        </p>
                                        <div class="checkbox">
                                            <input id="checkbox0" type="checkbox">
                                            <label for="checkbox0">
                                                Default
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-custom">
                                            <input id="checkbox11" type="checkbox" checked>
                                            <label for="checkbox11">
                                                Custom
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox2" type="checkbox" checked>
                                            <label for="checkbox2">
                                                Primary
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-success">
                                            <input id="checkbox3" type="checkbox">
                                            <label for="checkbox3">
                                                Success
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-info">
                                            <input id="checkbox4" type="checkbox">
                                            <label for="checkbox4">
                                                Info
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-warning">
                                            <input id="checkbox5" type="checkbox" checked>
                                            <label for="checkbox5">
                                                Warning
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-danger">
                                            <input id="checkbox6" type="checkbox" checked>
                                            <label for="checkbox6">
                                                Danger
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-purple">
                                            <input id="checkbox6a" type="checkbox">
                                            <label for="checkbox6a">
                                                Purple
                                            </label>
                                        </div>

                                        <div class="checkbox checkbox-pink">
                                            <input id="checkbox6b" type="checkbox" checked>
                                            <label for="checkbox6b">
                                                Pink
                                            </label>
                                        </div>

                                        <div class="checkbox checkbox-inverse">
                                            <input id="checkbox6c" type="checkbox">
                                            <label for="checkbox6c">
                                                Inverse
                                            </label>
                                        </div>



                                        <p class="text-muted font-13 m-b-15 m-t-20">Checkboxes without label text <code>.checkbox-single</code></p>
                                        <div class="checkbox checkbox-single">
                                            <input type="checkbox" id="singleCheckbox1" value="option1" aria-label="Single checkbox One">
                                            <label></label>
                                        </div>
                                        <div class="checkbox checkbox-primary checkbox-single">
                                            <input type="checkbox" id="singleCheckbox2" value="option2" checked aria-label="Single checkbox Two">
                                            <label></label>
                                        </div>

                                        <p class="text-muted font-13 m-b-15 m-t-20">Inline checkboxes</p>
                                        <div class="checkbox form-check-inline">
                                            <input type="checkbox" id="inlineCheckbox1" value="option1">
                                            <label for="inlineCheckbox1"> Inline One </label>
                                        </div>
                                        <div class="checkbox checkbox-success form-check-inline">
                                            <input type="checkbox" id="inlineCheckbox2" value="option1" checked>
                                            <label for="inlineCheckbox2"> Inline Two </label>
                                        </div>
                                        <div class="checkbox checkbox-pink form-check-inline">
                                            <input type="checkbox" id="inlineCheckbox3" value="option1">
                                            <label for="inlineCheckbox3"> Inline Three </label>
                                        </div>
                                    </div>


                                    <div class="col-lg-4 m-t-sm-40">
                                        <h4 class="m-t-0 header-title">Circled</h4>

                                        <p class="text-muted font-13 m-b-30">
                                            <code>.checkbox-circle</code> for roundness.
                                        </p>
                                        <div class="checkbox checkbox-circle">
                                            <input id="checkbox7" type="checkbox">
                                            <label for="checkbox7">
                                                Simply Rounded
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-custom checkbox-circle">
                                            <input id="checkbox71" type="checkbox" checked>
                                            <label for="checkbox71">
                                                Custom
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-info checkbox-circle">
                                            <input id="checkbox8" type="checkbox" checked>
                                            <label for="checkbox8">
                                                Info
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-primary checkbox-circle">
                                            <input id="checkbox-9" type="checkbox">
                                            <label for="checkbox-9">
                                                Primary
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-success checkbox-circle">
                                            <input id="checkbox-10" type="checkbox" checked>
                                            <label for="checkbox-10">
                                                Success
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-warning checkbox-circle">
                                            <input id="checkbox-11" type="checkbox">
                                            <label for="checkbox-11">
                                                Warning
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-danger checkbox-circle">
                                            <input id="checkbox-12" type="checkbox" checked>
                                            <label for="checkbox-12">
                                                Danger
                                            </label>
                                        </div>

                                        <div class="checkbox checkbox-purple checkbox-circle">
                                            <input id="checkbox-13" type="checkbox" checked>
                                            <label for="checkbox-13">
                                                Purple
                                            </label>
                                        </div>

                                        <div class="checkbox checkbox-pink checkbox-circle">
                                            <input id="checkbox-14" type="checkbox">
                                            <label for="checkbox-14">
                                                Pink
                                            </label>
                                        </div>

                                        <div class="checkbox checkbox-inverse checkbox-circle">
                                            <input id="checkbox-15" type="checkbox" checked>
                                            <label for="checkbox-15">
                                                Inverse
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 m-t-sm-40">
                                        <h4 class="m-t-0 header-title">Disabled</h4>

                                        <p class="text-muted font-13 m-b-30">
                                            Disabled state also supported.
                                        </p>
                                        <div class="checkbox">
                                            <input id="checkbox9" type="checkbox" disabled>
                                            <label for="checkbox9">
                                                Can't check this
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-custom">
                                            <input id="checkbox10" type="checkbox" disabled checked>
                                            <label for="checkbox10">
                                                This too
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-warning checkbox-circle">
                                            <input id="checkbox110" type="checkbox" disabled checked>
                                            <label for="checkbox110">
                                                And this
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-info">
                                            <input id="checkbox12" type="checkbox" disabled checked>
                                            <label for="checkbox12">
                                                Can't check this
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-pink">
                                            <input id="checkbox13" type="checkbox" disabled checked>
                                            <label for="checkbox13">
                                                This too
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-purple checkbox-circle">
                                            <input id="checkbox14" type="checkbox" disabled checked>
                                            <label for="checkbox14">
                                                And this
                                            </label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- end row -->


                <!-- RADIOS -->

                <div class="row">
                    <div class="col-12">
                        <div class="">
                            <div class="card-box">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <h4 class="m-t-0 header-title">Basic</h4>

                                        <p class="text-muted font-13 m-b-30">
                                            Supports bootstrap brand colors: <code>.radio-primary</code>, <code>.radio-danger</code> etc.
                                        </p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="radio">
                                                    <input type="radio" name="radio" id="radio1" value="option1" checked>
                                                    <label for="radio1">
                                                        Default
                                                    </label>
                                                </div>
                                                <div class="radio radio-custom">
                                                    <input type="radio" name="radio" id="radio2" value="option2">
                                                    <label for="radio2">
                                                        Custom
                                                    </label>
                                                </div>
                                                <div class="radio radio-primary">
                                                    <input type="radio" name="radio" id="radio3" value="option3">
                                                    <label for="radio3">
                                                        Primary
                                                    </label>
                                                </div>
                                                <div class="radio radio-success">
                                                    <input type="radio" name="radio" id="radio4" value="option4">
                                                    <label for="radio4">
                                                        Success
                                                    </label>
                                                </div>
                                                <div class="radio radio-info">
                                                    <input type="radio" name="radio" id="radio5" value="option5">
                                                    <label for="radio5">
                                                        Info
                                                    </label>
                                                </div>
                                                <div class="radio radio-danger">
                                                    <input type="radio" name="radio" id="radio6" value="option6">
                                                    <label for="radio6">
                                                        Danger
                                                    </label>
                                                </div>
                                                <div class="radio radio-warning">
                                                    <input type="radio" name="radio" id="radio7" value="option7">
                                                    <label for="radio7">
                                                        Warning
                                                    </label>
                                                </div>
                                                <div class="radio radio-purple">
                                                    <input type="radio" name="radio" id="radio8" value="option8">
                                                    <label for="radio8">
                                                        Purple
                                                    </label>
                                                </div>
                                                <div class="radio radio-pink">
                                                    <input type="radio" name="radio" id="radio9" value="option9">
                                                    <label for="radio9">
                                                        Pink
                                                    </label>
                                                </div>

                                            </div>

                                            <div class="col-md-6">
                                                <div class="radio">
                                                    <input type="radio" name="radio1" id="radio11" value="option1" checked>
                                                    <label for="radio11">
                                                        Default
                                                    </label>
                                                </div>
                                                <div class="radio radio-custom">
                                                    <input type="radio" name="radio2" id="radio12" value="option2">
                                                    <label for="radio12">
                                                        Custom
                                                    </label>
                                                </div>
                                                <div class="radio radio-primary">
                                                    <input type="radio" name="radio3" id="radio13" value="option3">
                                                    <label for="radio13">
                                                        Primary
                                                    </label>
                                                </div>
                                                <div class="radio radio-success">
                                                    <input type="radio" name="radio4" id="radio14" value="option4" checked>
                                                    <label for="radio14">
                                                        Success
                                                    </label>
                                                </div>
                                                <div class="radio radio-info">
                                                    <input type="radio" name="radio5" id="radio15" value="option5" checked>
                                                    <label for="radio15">
                                                        Info
                                                    </label>
                                                </div>
                                                <div class="radio radio-danger">
                                                    <input type="radio" name="radio6" id="radio16" value="option6">
                                                    <label for="radio16">
                                                        Danger
                                                    </label>
                                                </div>
                                                <div class="radio radio-warning">
                                                    <input type="radio" name="radio7" id="radio17" value="option7" checked>
                                                    <label for="radio17">
                                                        Warning
                                                    </label>
                                                </div>
                                                <div class="radio radio-purple">
                                                    <input type="radio" name="radio8" id="radio18" value="option8">
                                                    <label for="radio18">
                                                        Purple
                                                    </label>
                                                </div>
                                                <div class="radio radio-pink">
                                                    <input type="radio" name="radio9" id="radio19" value="option9" checked>
                                                    <label for="radio19">
                                                        Pink
                                                    </label>
                                                </div>

                                            </div>

                                        </div>

                                        <p class="text-muted font-13 m-b-15 m-t-20">Radios without label text <code>.radio-single</code></p>
                                        <div class="radio radio-single">
                                            <input type="radio" id="singleRadio1" value="option1.1" name="radioSingle1" aria-label="Single radio One">
                                            <label></label>
                                        </div>
                                        <div class="radio radio-success radio-single">
                                            <input type="radio" id="singleRadio2" value="option2.1" name="radioSingle1" checked aria-label="Single radio Two">
                                            <label></label>
                                        </div>


                                        <p class="text-muted font-13 m-b-15 m-t-20">Inline radios</p>
                                        <div class="radio radio-info form-check-inline">
                                            <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked>
                                            <label for="inlineRadio1"> Inline One </label>
                                        </div>
                                        <div class="radio form-check-inline">
                                            <input type="radio" id="inlineRadio2" value="option2" name="radioInline">
                                            <label for="inlineRadio2"> Inline Two </label>
                                        </div>
                                    </div>


                                    <div class="col-lg-4 m-t-xs-40">
                                        <h4 class="m-t-0 header-title">Disabled</h4>

                                        <p class="text-muted font-13 m-b-30">
                                            Disabled state also supported.
                                        </p>
                                        <div class="radio radio-danger">
                                            <input type="radio" name="radio31" id="radio51" value="option1" checked disabled>
                                            <label for="radio51">
                                                Next
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <input type="radio" name="radio41" id="radio61" value="option2" checked disabled>
                                            <label for="radio61">
                                                One
                                            </label>
                                        </div>
                                        <div class="radio radio-custom">
                                            <input type="radio" name="radio51" id="radio71" value="option3" checked disabled>
                                            <label for="radio71">
                                                Next
                                            </label>
                                        </div>
                                        <div class="radio radio-pink">
                                            <input type="radio" name="radio61" id="radio81" value="option4" checked disabled>
                                            <label for="radio81">
                                                One
                                            </label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end row -->


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