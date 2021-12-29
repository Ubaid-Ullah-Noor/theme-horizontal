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
                            <h4 class="page-title">Icons PE 7</h4>
                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-md-12">
                        <div id="all-icons">

                            <div class="card-box">

                                <div class="row icon-list-demo icon-list-pe7">
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-album"></i> pe-7s-album
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-arc"></i>pe-7s-arc
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-back-2"></i>pe-7s-back-2
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-bandaid"></i>pe-7s-bandaid
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-car"></i>pe-7s-car
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-diamond"></i>pe-7s-diamond
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-door-lock"></i>pe-7s-door-lock
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-eyedropper"></i>pe-7s-eyedropper
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-female"></i>pe-7s-female
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-gym"></i>pe-7s-gym
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-hammer"></i>pe-7s-hammer
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-headphones"></i>pe-7s-headphones
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-helm"></i>pe-7s-helm
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-hourglass"></i>pe-7s-hourglass
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-leaf"></i>pe-7s-leaf
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-magic-wand"></i>pe-7s-magic-wand
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-male"></i>pe-7s-male
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-map-2"></i>pe-7s-map-2
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-next-2"></i>pe-7s-next-2
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-paint-bucket"></i>pe-7s-paint-bucket
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-pendrive"></i>pe-7s-pendrive
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-photo"></i>pe-7s-photo
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-piggy"></i>pe-7s-piggy
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-plugin"></i>pe-7s-plugin
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-refresh-2"></i>pe-7s-refresh-2
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-rocket"></i>pe-7s-rocket
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-settings"></i>pe-7s-settings
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-shield"></i>pe-7s-shield
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-smile"></i>pe-7s-smile
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-usb"></i>pe-7s-usb
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-vector"></i>pe-7s-vector
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-wine"></i>pe-7s-wine
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-cloud-upload"></i>pe-7s-cloud-upload
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-cash"></i>pe-7s-cash
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-close"></i>pe-7s-close
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-bluetooth"></i>pe-7s-bluetooth
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-cloud-download"></i>pe-7s-cloud-download
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-way"></i>pe-7s-way
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-close-circle"></i>pe-7s-close-circle
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-id"></i>pe-7s-id
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-angle-up"></i>pe-7s-angle-up
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-wristwatch"></i>pe-7s-wristwatch
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-angle-up-circle"></i>pe-7s-angle-up-circle
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-world"></i>pe-7s-world
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-angle-right"></i>pe-7s-angle-right
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-volume"></i>pe-7s-volume
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-angle-right-circle"></i>pe-7s-angle-right-circle
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-users"></i>pe-7s-users
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-angle-left"></i>pe-7s-angle-left
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-user-female"></i>pe-7s-user-female
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-angle-left-circle"></i>pe-7s-angle-left-circle
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-up-arrow"></i>pe-7s-up-arrow
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-angle-down"></i>pe-7s-angle-down
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-switch"></i>pe-7s-switch
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-angle-down-circle"></i>pe-7s-angle-down-circle
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-scissors"></i>pe-7s-scissors
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-wallet"></i>pe-7s-wallet
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-safe"></i>pe-7s-safe
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-volume2"></i>pe-7s-volume2
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-volume1"></i>pe-7s-volume1
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-voicemail"></i>pe-7s-voicemail
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-video"></i>pe-7s-video
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-user"></i>pe-7s-user
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-upload"></i>pe-7s-upload
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-unlock"></i>pe-7s-unlock
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-umbrella"></i>pe-7s-umbrella
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-trash"></i>pe-7s-trash
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-tools"></i>pe-7s-tools
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-timer"></i>pe-7s-timer
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-ticket"></i>pe-7s-ticket
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-target"></i>pe-7s-target
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-sun"></i>pe-7s-sun
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-study"></i>pe-7s-study
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-stopwatch"></i>pe-7s-stopwatch
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-star"></i>pe-7s-star
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-speaker"></i>pe-7s-speaker
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-signal"></i>pe-7s-signal
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-shuffle"></i>pe-7s-shuffle
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-shopbag"></i>pe-7s-shopbag
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-share"></i>pe-7s-share
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-server"></i>pe-7s-server
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-search"></i>pe-7s-search
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-film"></i>pe-7s-film
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-science"></i>pe-7s-science
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-disk"></i>pe-7s-disk
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-ribbon"></i>pe-7s-ribbon
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-repeat"></i>pe-7s-repeat
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-refresh"></i>pe-7s-refresh
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-add-user"></i>pe-7s-add-user
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-refresh-cloud"></i>pe-7s-refresh-cloud
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-paperclip"></i>pe-7s-paperclip
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-radio"></i>pe-7s-radio
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-note2"></i>pe-7s-note2
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-print"></i>pe-7s-print
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-network"></i>pe-7s-network
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-prev"></i>pe-7s-prev
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-mute"></i>pe-7s-mute
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-power"></i>pe-7s-power
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-medal"></i>pe-7s-medal
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-portfolio"></i>pe-7s-portfolio
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-like2"></i>pe-7s-like2
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-plus"></i>pe-7s-plus
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-left-arrow"></i>pe-7s-left-arrow
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-play"></i>pe-7s-play
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-key"></i>pe-7s-key
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-plane"></i>pe-7s-plane
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-joy"></i>pe-7s-joy
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-photo-gallery"></i>pe-7s-photo-gallery
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-pin"></i>pe-7s-pin
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-phone"></i>pe-7s-phone
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-plug"></i>pe-7s-plug
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-pen"></i>pe-7s-pen
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-right-arrow"></i>pe-7s-right-arrow
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-paper-plane"></i>pe-7s-paper-plane
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-delete-user"></i>pe-7s-delete-user
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-paint"></i>pe-7s-paint
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-bottom-arrow"></i>pe-7s-bottom-arrow
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-notebook"></i>pe-7s-notebook
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-note"></i>pe-7s-note
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-next"></i>pe-7s-next
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-news-paper"></i>pe-7s-news-paper
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-musiclist"></i>pe-7s-musiclist
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-music"></i>pe-7s-music
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-mouse"></i>pe-7s-mouse
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-more"></i>pe-7s-more
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-moon"></i>pe-7s-moon
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-monitor"></i>pe-7s-monitor
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-micro"></i>pe-7s-micro
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-menu"></i>pe-7s-menu
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-map"></i>pe-7s-map
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-map-marker"></i>pe-7s-map-marker
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-mail"></i>pe-7s-mail
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-mail-open"></i>pe-7s-mail-open
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-mail-open-file"></i>pe-7s-mail-open-file
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-magnet"></i>pe-7s-magnet
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-loop"></i>pe-7s-loop
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-look"></i>pe-7s-look
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-lock"></i>pe-7s-lock
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-lintern"></i>pe-7s-lintern
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-link"></i>pe-7s-link
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-like"></i>pe-7s-like
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-light"></i>pe-7s-light
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-less"></i>pe-7s-less
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-keypad"></i>pe-7s-keypad
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-junk"></i>pe-7s-junk
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-info"></i>pe-7s-info
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-home"></i>pe-7s-home
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-help2"></i>pe-7s-help2
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-help1"></i>pe-7s-help1
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-graph3"></i>pe-7s-graph3
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-graph2"></i>pe-7s-graph2
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-graph1"></i>pe-7s-graph1
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-graph"></i>pe-7s-graph
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-global"></i>pe-7s-global
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-gleam"></i>pe-7s-gleam
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-glasses"></i>pe-7s-glasses
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-gift"></i>pe-7s-gift
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-folder"></i>pe-7s-folder
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-flag"></i>pe-7s-flag
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-filter"></i>pe-7s-filter
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-file"></i>pe-7s-file
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-expand1"></i>pe-7s-expand1
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-exapnd2"></i>pe-7s-exapnd2
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-edit"></i>pe-7s-edit
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-drop"></i>pe-7s-drop
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-drawer"></i>pe-7s-drawer
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-download"></i>pe-7s-download
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-display2"></i>pe-7s-display2
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-display1"></i>pe-7s-display1
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-diskette"></i>pe-7s-diskette
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-date"></i>pe-7s-date
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-cup"></i>pe-7s-cup
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-culture"></i>pe-7s-culture
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-crop"></i>pe-7s-crop
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-credit"></i>pe-7s-credit
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-copy-file"></i>pe-7s-copy-file
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-config"></i>pe-7s-config
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-compass"></i>pe-7s-compass
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-comment"></i>pe-7s-comment
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-coffee"></i>pe-7s-coffee
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-cloud"></i>pe-7s-cloud
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-clock"></i>pe-7s-clock
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-check"></i>pe-7s-check
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-chat"></i>pe-7s-chat
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-cart"></i>pe-7s-cart
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-camera"></i>pe-7s-camera
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-call"></i>pe-7s-call
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-calculator"></i>pe-7s-calculator
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-browser"></i>pe-7s-browser
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-box2"></i>pe-7s-box2
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-box1"></i>pe-7s-box1
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-bookmarks"></i>pe-7s-bookmarks
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-bicycle"></i>pe-7s-bicycle
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-bell"></i>pe-7s-bell
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-battery"></i>pe-7s-battery
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-ball"></i>pe-7s-ball
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-back"></i>pe-7s-back
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-attention"></i>pe-7s-attention
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-anchor"></i>pe-7s-anchor
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-albums"></i>pe-7s-albums
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-alarm"></i>pe-7s-alarm
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <i class="pe-7s-airplay"></i>pe-7s-airplay
                                    </div>

                                </div>
                                <!-- End row -->
                            </div> <!-- end card-box -->
                        </div> <!-- end #all icons-->
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