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
                            <h4 class="page-title">Rating</h4>
                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card-box">

                            <div class="row">
                                <div class="col-lg-4">
                                    <h4 class="header-title m-t-0">Default</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        You need just to have a <code>div</code> to build the Raty.
                                    </p>
                                    <div id="default"></div>
                                </div>

                                <div class="col-lg-4 m-t-sm-40">
                                    <h4 class="header-title m-t-0">Score</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        Used when we want to start with a saved rating.
                                    </p>
                                    <div id="score"></div>
                                </div>

                                <div class="col-lg-4 m-t-sm-40">
                                    <h4 class="header-title m-t-0">Score callback</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        If you need to start you score depending of a dynamic value, you can to
                                        use callback for it.
                                        You can pass any value for it, not necessarily a data- value. You can
                                        use a field value for example.
                                    </p>
                                    <div id="score-callback" data-score="1"></div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row m-t-50">
                                <div class="col-lg-4 m-t-20">
                                    <h4 class="header-title m-t-0">Score Name</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        Changes the name of the hidden score field.
                                    </p>
                                    <div id="scoreName"></div>
                                </div>

                                <div class="col-lg-4 m-t-20">
                                    <h4 class="header-title m-t-0">Number</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        Changes the number of stars.
                                    </p>
                                    <div id="number"></div>
                                </div>

                                <div class="col-lg-4 m-t-20">
                                    <h4 class="header-title m-t-0">Number callback</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        You can receive the number of stars dynamic using callback to set it.
                                    </p>
                                    <div id="number-callback" data-number="3"></div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row m-t-50">
                                <div class="col-lg-4 m-t-20">
                                    <h4 class="header-title m-t-0">Number Max</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        Change the maximum of start that can be created.
                                    </p>
                                    <div id="numberMax"></div>
                                </div>

                                <div class="col-lg-4 m-t-20">
                                    <h4 class="header-title m-t-0">Read Only</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        You can prevent users to vote. It can be applied with or without score
                                        and all stars will receives the hint corresponding of the selected star.
                                        Stop the mouse over the stars to see:
                                    </p>
                                    <div id="readOnly"></div>
                                </div>

                                <div class="col-lg-4 m-t-20">
                                    <h4 class="header-title m-t-0">Read Only callback</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        You can decide if the rating will be readOnly dynamically returning true of false on callback.
                                    </p>
                                    <div id="readOnly-callback" data-number="3"></div>
                                </div>
                            </div>
                            <!-- end row -->


                            <div class="row m-t-50">
                                <div class="col-lg-4 m-t-20">
                                    <h4 class="header-title m-t-0">No Rated Message</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        If readOnly is enabled and there is no score, the hint "Not rated yet!"
                                        will be shown for all stars. But you can change it.
                                        Stop the mouse over the star to see:
                                    </p>
                                    <div id="noRatedMsg"></div>
                                </div>

                                <div class="col-lg-4 m-t-20">
                                    <h4 class="header-title m-t-0">Half Show</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        You can represent a float score as a half star icon.
                                    </p>
                                    <div id="halfShow-true"></div>
                                </div>

                                <div class="col-lg-4 m-t-20">
                                    <h4 class="header-title m-t-0">Half Show <small>Disabled</small></h4>
                                    <p class="text-muted m-b-20 font-13">
                                        You can decide if the rating will be readOnly dynamically returning true of false on callback.
                                    </p>
                                    <div id="halfShow-false"></div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row m-t-50">
                                <div class="col-lg-4 m-t-20">
                                    <h4 class="header-title m-t-0">Round</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        We changed the default interval [x.25 .. x.76], now x.26 will round down instead of to be a half star.
                                        Remember that the full attribute is used only when halfShow is disabled.
                                    </p>
                                    <div id="round"></div>
                                </div>

                                <div class="col-lg-4 m-t-20">
                                    <h4 class="header-title m-t-0">Half</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        Enables the half star mouseover to be possible vote with half values.
                                    </p>
                                    <div id="half"></div>
                                </div>

                                <div class="col-lg-4 m-t-20">
                                    <h4 class="header-title m-t-0">Star Half</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        Changes the name of the half star.
                                    </p>
                                    <div id="starHalf"></div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row m-t-50">
                                <div class="col-lg-4 m-t-20">
                                    <h4 class="header-title m-t-0">Click</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        Callback to handle the score and the click event on click action.
                                        You can mension the Raty element (DOM) itself using this.
                                    </p>
                                    <div id="click"></div>
                                </div>

                                <div class="col-lg-4 m-t-20">
                                    <h4 class="header-title m-t-0">Hints</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        Changes the hint for each star by it position on array.
                                    </p>
                                    <div id="hints"></div>
                                </div>

                                <div class="col-lg-4 m-t-20">
                                    <h4 class="header-title m-t-0">Star Off and Star On</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        Changes the name of the star on and star off.
                                    </p>
                                    <div id="star-off-and-star-on"></div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row m-t-50">
                                <div class="col-lg-4 m-t-20">
                                    <h4 class="header-title m-t-0">Cancel</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        Add a cancel button on the left side of the stars to cacel the score.
                                        Inside the click callback the argument code receives the value null when we click on cancel button.
                                    </p>
                                    <div id="cancel"></div>
                                </div>

                                <div class="col-lg-4 m-t-20">
                                    <h4 class="header-title m-t-0">Cancel Hint</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        Like the stars, the cancel button have a hint too, and you can change it.
                                    </p>
                                    <div id="cancelHint"></div>
                                </div>

                                <div class="col-lg-4 m-t-20">
                                    <h4 class="header-title m-t-0">Cancel Place</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        Changes the cancel button to the right side.
                                    </p>
                                    <div id="cancelPlace"></div>
                                </div>
                            </div>
                            <!-- end row -->


                            <div class="row m-t-50">
                                <div class="col-lg-4 m-t-20">
                                    <h4 class="header-title m-t-0">Cancel off and Cancel On</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        Changes the on and off icon of the cancel button.
                                    </p>
                                    <div id="cancel-off-and-cancel-on"></div>
                                </div>

                                <div class="col-lg-4 m-t-20">
                                    <h4 class="header-title m-t-0">Icon Range</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        It's an array of objects where each one represents a custom icon.
                                        The range attribute is until wich position the icon will be displayed.
                                    </p>
                                    <div id="iconRange"></div>
                                </div>

                                <div class="col-lg-4 m-t-20">
                                    <h4 class="header-title m-t-0">Size</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        The size of the icons are controlled by the css property font-size as
                                        all icons are text. The plugin tries to calculate the font size
                                        automatically, but should that fail, you can provide a size (in pixels)
                                        with the size option.
                                    </p>
                                    <div id="size-md" class="rating-md"></div>

                                    <div id="size-lg" class="rating-lg m-t-20"></div>
                                </div>
                            </div>
                            <!-- end row -->


                            <div class="row m-t-50">
                                <div class="col-lg-4 m-t-20">
                                    <h4 class="header-title m-t-0">Target</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        Some place to display the hints or the cancelHint.<b id="target-div-hint"></b>
                                    </p>
                                    <div id="target-div"></div>
                                </div>

                                <div class="col-lg-4 m-t-20">
                                    <h4 class="header-title m-t-0">Target Type</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        You have the option hint or score to chosse. <b id="targetType-hint" class="badge badge-success"></b>
                                    </p>
                                    <div id="targetType"></div>
                                </div>

                                <div class="col-lg-4 m-t-20">
                                    <h4 class="header-title m-t-0">Target Format</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        You can choose a template to be merged with your hints and displayed on target.
                                    </p>

                                    <div class="text-center">
                                        <div id="targetFormat" class="rating-md"></div>

                                        <input type="text" class="form-control mt-3" id="targetFormat-hint" />
                                    </div>

                                </div>
                            </div>
                            <!-- end row -->


                            <div class="row m-t-50">
                                <div class="col-lg-4 m-t-20">
                                    <h4 class="header-title m-t-0">Mouseover</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        You can handle the action on mouseover.
                                    </p>
                                    <div id="mouseover"></div>
                                </div>

                                <div class="col-lg-4 m-t-20">
                                    <h4 class="header-title m-t-0">Mouseout</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        You can handle the action on mouseout.
                                    </p>
                                    <div id="mouseout"></div>
                                </div>
                            </div>
                            <!-- end row -->

                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container -->


            <!-- Footer -->
            <footer class="footer">
                2016 - 2019 ?? Uplon.
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

        <!-- Rating js -->
        <script src="{{asset('plugins/raty-fa/jquery.raty-fa.js')}}"></script>
        <!-- init -->
        <script src="{{asset('assets/pages/jquery.rating.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets/js/jquery.core.js')}}"></script>
        <script src="{{asset('assets/js/jquery.app.js')}}"></script>

    </body>
</html>