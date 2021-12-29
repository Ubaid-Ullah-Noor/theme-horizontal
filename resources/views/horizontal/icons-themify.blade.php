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
                            <h4 class="page-title">Themify Icons</h4>
                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-md-12">
                        <div class="">

                            <div class="card-box">
                                <h4 class="page-header mt-0">Arrows & Direction Icons</h4>
                                <p class="text-muted m-b-15 font-13">
                                    Use  <code>&lt;i class="ti-arrow-up"&gt;&lt;/i&gt;</code>.
                                </p>

                                <div class="row icon-list-demo">
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-arrow-up"></i> ti-arrow-up
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-arrow-right"></i> ti-arrow-right
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-arrow-left"></i> ti-arrow-left
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-arrow-down"></i> ti-arrow-down
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-arrows-vertical"></i> ti-arrows-vertical
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-arrows-horizontal"></i> ti-arrows-horizontal
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-angle-up"></i> ti-angle-up
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-angle-right"></i> ti-angle-right
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-angle-left"></i> ti-angle-left
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-angle-down"></i> ti-angle-down
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-angle-double-up"></i> ti-angle-double-up
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-angle-double-right"></i> ti-angle-double-right
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-angle-double-left"></i> ti-angle-double-left
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-angle-double-down"></i> ti-angle-double-down
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-move"></i> ti-move
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-fullscreen"></i> ti-fullscreen
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-arrow-top-right"></i> ti-arrow-top-right
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-arrow-top-left"></i> ti-arrow-top-left
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-arrow-circle-up"></i> ti-arrow-circle-up
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-arrow-circle-right"></i> ti-arrow-circle-right
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-arrow-circle-left"></i> ti-arrow-circle-left
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-arrow-circle-down"></i> ti-arrow-circle-down
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-arrows-corner"></i> ti-arrows-corner
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-split-v"></i> ti-split-v
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-split-v-alt"></i> ti-split-v-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-split-h"></i> ti-split-h
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-hand-point-up"></i> ti-hand-point-up
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-hand-point-right"></i> ti-hand-point-right
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-hand-point-left"></i> ti-hand-point-left
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-hand-point-down"></i> ti-hand-point-down
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-back-right"></i> ti-back-right
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-back-left"></i> ti-back-left
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-exchange-vertical"></i> ti-exchange-vertical
                                    </div>


                                </div>
                                <!-- End row -->




                                <h4 class="page-header">Web App Icons</h4>
                                <div class="row icon-list-demo">
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-wand"></i> ti-wand
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-save"></i> ti-save
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-save-alt"></i> ti-save-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-direction"></i> ti-direction
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-direction-alt"></i> ti-direction-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-user"></i> ti-user
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-link"></i> ti-link
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-unlink"></i> ti-unlink
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-trash"></i> ti-trash
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-target"></i> ti-target
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-tag"></i> ti-tag
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-desktop"></i> ti-desktop
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-tablet"></i> ti-tablet
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-mobile"></i> ti-mobile
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-email"></i> ti-email
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-star"></i> ti-star
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-spray"></i> ti-spray
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-signal"></i> ti-signal
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-shopping-cart"></i> ti-shopping-cart
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-shopping-cart-full"></i> ti-shopping-cart-full
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-settings"></i> ti-settings
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-search"></i> ti-search
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-zoom-in"></i> ti-zoom-in
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-zoom-out"></i> ti-zoom-out
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-cut"></i> ti-cut
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-ruler"></i> ti-ruler
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-ruler-alt-2"></i> ti-ruler-alt-2
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-ruler-pencil"></i> ti-ruler-pencil
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-ruler-alt"></i> ti-ruler-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-bookmark"></i> ti-bookmark
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-bookmark-alt"></i> ti-bookmark-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-reload"></i> ti-reload
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-plus"></i> ti-plus
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-minus"></i> ti-minus
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-close"></i> ti-close
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-pin"></i> ti-pin
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-pencil"></i> ti-pencil
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-pencil-alt"></i> ti-pencil-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-paint-roller"></i> ti-paint-roller
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-paint-bucket"></i> ti-paint-bucket
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-na"></i> ti-na
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-medall"></i> ti-medall
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-medall-alt"></i> ti-medall-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-marker"></i> ti-marker
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-marker-alt"></i> ti-marker-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-lock"></i> ti-lock
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-unlock"></i> ti-unlock
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-location-arrow"></i> ti-location-arrow
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout"></i> ti-layout
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layers"></i> ti-layers
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layers-alt"></i> ti-layers-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-key"></i> ti-key
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-image"></i> ti-image
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-heart"></i> ti-heart
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-heart-broken"></i> ti-heart-broken
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-hand-stop"></i> ti-hand-stop
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-hand-open"></i> ti-hand-open
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-hand-drag"></i> ti-hand-drag
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-flag"></i> ti-flag
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-flag-alt"></i> ti-flag-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-flag-alt-2"></i> ti-flag-alt-2
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-eye"></i> ti-eye
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-import"></i> ti-import
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-export"></i> ti-export
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-cup"></i> ti-cup
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-crown"></i> ti-crown
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-comments"></i> ti-comments
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-comment"></i> ti-comment
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-comment-alt"></i> ti-comment-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-thought"></i> ti-thought
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-clip"></i> ti-clip
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-check"></i> ti-check
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-check-box"></i> ti-check-box
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-camera"></i> ti-camera
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-announcement"></i> ti-announcement
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-brush"></i> ti-brush
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-brush-alt"></i> ti-brush-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-palette"></i> ti-palette
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-briefcase"></i> ti-briefcase
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-bolt"></i> ti-bolt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-bolt-alt"></i> ti-bolt-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-blackboard"></i> ti-blackboard
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-bag"></i> ti-bag
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-world"></i> ti-world
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-wheelchair"></i> ti-wheelchair
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-car"></i> ti-car
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-truck"></i> ti-truck
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-timer"></i> ti-timer
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-ticket"></i> ti-ticket
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-thumb-up"></i> ti-thumb-up
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-thumb-down"></i> ti-thumb-down
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-stats-up"></i> ti-stats-up
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-stats-down"></i> ti-stats-down
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-shine"></i> ti-shine
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-shift-right"></i> ti-shift-right
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-shift-left"></i> ti-shift-left
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-shift-right-alt"></i> ti-shift-right-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-shift-left-alt"></i> ti-shift-left-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-shield"></i> ti-shield
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-notepad"></i> ti-notepad
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-server"></i> ti-server
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-pulse"></i> ti-pulse
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-printer"></i> ti-printer
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-power-off"></i> ti-power-off
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-plug"></i> ti-plug
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-pie-chart"></i> ti-pie-chart
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-panel"></i> ti-panel
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-package"></i> ti-package
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-music"></i> ti-music
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-music-alt"></i> ti-music-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-mouse"></i> ti-mouse
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-mouse-alt"></i> ti-mouse-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-money"></i> ti-money
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-microphone"></i> ti-microphone
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-menu"></i> ti-menu
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-menu-alt"></i> ti-menu-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-map"></i> ti-map
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-map-alt"></i> ti-map-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-location-pin"></i> ti-location-pin
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-light-bulb"></i> ti-light-bulb
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-info"></i> ti-info
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-infinite"></i> ti-infinite
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-id-badge"></i> ti-id-badge
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-hummer"></i> ti-hummer
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-home"></i> ti-home
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-help"></i> ti-help
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-headphone"></i> ti-headphone
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-harddrives"></i> ti-harddrives
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-harddrive"></i> ti-harddrive
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-gift"></i> ti-gift
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-game"></i> ti-game
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-filter"></i> ti-filter
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-files"></i> ti-files
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-file"></i> ti-file
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-zip"></i> ti-zip
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-folder"></i> ti-folder
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-envelope"></i> ti-envelope
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-dashboard"></i> ti-dashboard
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-cloud"></i> ti-cloud
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-cloud-up"></i> ti-cloud-up
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-cloud-down"></i> ti-cloud-down
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-clipboard"></i> ti-clipboard
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-calendar"></i> ti-calendar
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-book"></i> ti-book
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-bell"></i> ti-bell
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-basketball"></i> ti-basketball
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-bar-chart"></i> ti-bar-chart
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-bar-chart-alt"></i> ti-bar-chart-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-archive"></i> ti-archive
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-anchor"></i> ti-anchor
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-alert"></i> ti-alert
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-alarm-clock"></i> ti-alarm-clock
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-agenda"></i> ti-agenda
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-write"></i> ti-write
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-wallet"></i> ti-wallet
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-video-clapper"></i> ti-video-clapper
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-video-camera"></i> ti-video-camera
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-vector"></i> ti-vector
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-support"></i> ti-support
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-stamp"></i> ti-stamp
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-slice"></i> ti-slice
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-shortcode"></i> ti-shortcode
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-receipt"></i> ti-receipt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-pin2"></i> ti-pin2
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-pin-alt"></i> ti-pin-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-pencil-alt2"></i> ti-pencil-alt2
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-eraser"></i> ti-eraser
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-more"></i> ti-more
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-more-alt"></i> ti-more-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-microphone-alt"></i> ti-microphone-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-magnet"></i> ti-magnet
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-line-double"></i> ti-line-double
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-line-dotted"></i> ti-line-dotted
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-line-dashed"></i> ti-line-dashed
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-ink-pen"></i> ti-ink-pen
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-info-alt"></i> ti-info-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-help-alt"></i> ti-help-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-headphone-alt"></i> ti-headphone-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-gallery"></i> ti-gallery
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-face-smile"></i> ti-face-smile
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-face-sad"></i> ti-face-sad
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-credit-card"></i> ti-credit-card
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-comments-smiley"></i> ti-comments-smiley
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-time"></i> ti-time
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-share"></i> ti-share
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-share-alt"></i> ti-share-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-rocket"></i> ti-rocket
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-new-window"></i> ti-new-window
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-rss"></i> ti-rss
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-rss-alt"></i> ti-rss-alt
                                    </div>

                                </div>
                                <!-- End row -->

                                <h4 class="page-header">Control Icons</h4>

                                <div class="row icon-list-demo">

                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-control-stop"></i> ti-control-stop
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-control-shuffle"></i> ti-control-shuffle
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-control-play"></i> ti-control-play
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-control-pause"></i> ti-control-pause
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-control-forward"></i> ti-control-forward
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-control-backward"></i> ti-control-backward
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-volume"></i> ti-volume
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-control-skip-forward"></i> ti-control-skip-forward
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-control-skip-backward"></i> ti-control-skip-backward
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-control-record"></i> ti-control-record
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-control-eject"></i> ti-control-eject
                                    </div>


                                </div>
                                <!-- End row -->


                                <h4 class="page-header">Text Editor</h4>

                                <div class="row icon-list-demo">

                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-paragraph"></i> ti-paragraph
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-uppercase"></i> ti-uppercase
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-underline"></i> ti-underline
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-text"></i> ti-text
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-Italic"></i> ti-Italic
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-smallcap"></i> ti-smallcap
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-list"></i> ti-list
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-list-ol"></i> ti-list-ol
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-align-right"></i> ti-align-right
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-align-left"></i> ti-align-left
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-align-justify"></i> ti-align-justify
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-align-center"></i> ti-align-center
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-quote-right"></i> ti-quote-right
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-quote-left"></i> ti-quote-left
                                    </div>

                                </div>
                                <!-- End row -->

                                <h4 class="page-header">Layout Icons</h4>

                                <div class="row icon-list-demo">

                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-width-full"></i> ti-layout-width-full
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-width-default"></i> ti-layout-width-default
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-width-default-alt"></i> ti-layout-width-default-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-tab"></i> ti-layout-tab
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-tab-window"></i> ti-layout-tab-window
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-tab-v"></i> ti-layout-tab-v
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-tab-min"></i> ti-layout-tab-min
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-slider"></i> ti-layout-slider
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-slider-alt"></i> ti-layout-slider-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-sidebar-right"></i> ti-layout-sidebar-right
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-sidebar-none"></i> ti-layout-sidebar-none
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-sidebar-left"></i> ti-layout-sidebar-left
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-placeholder"></i> ti-layout-placeholder
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-menu"></i> ti-layout-menu
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-menu-v"></i> ti-layout-menu-v
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-menu-separated"></i> ti-layout-menu-separated
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-menu-full"></i> ti-layout-menu-full
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-media-right"></i> ti-layout-media-right
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-media-right-alt"></i> ti-layout-media-right-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-media-overlay"></i> ti-layout-media-overlay
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-media-overlay-alt"></i> ti-layout-media-overlay-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-media-overlay-alt-2"></i> ti-layout-media-overlay-alt-2
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-media-left"></i> ti-layout-media-left
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-media-left-alt"></i> ti-layout-media-left-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-media-center"></i> ti-layout-media-center
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-media-center-alt"></i> ti-layout-media-center-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-list-thumb"></i> ti-layout-list-thumb
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-list-thumb-alt"></i> ti-layout-list-thumb-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-list-post"></i> ti-layout-list-post
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-list-large-image"></i> ti-layout-list-large-image
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-line-solid"></i> ti-layout-line-solid
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-grid4"></i> ti-layout-grid4
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-grid3"></i> ti-layout-grid3
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-grid2"></i> ti-layout-grid2
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-grid2-thumb"></i> ti-layout-grid2-thumb
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-cta-right"></i> ti-layout-cta-right
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-cta-left"></i> ti-layout-cta-left
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-cta-center"></i> ti-layout-cta-center
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-cta-btn-right"></i> ti-layout-cta-btn-right
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-cta-btn-left"></i> ti-layout-cta-btn-left
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-column4"></i> ti-layout-column4
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-column3"></i> ti-layout-column3
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-column2"></i> ti-layout-column2
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-accordion-separated"></i> ti-layout-accordion-separated
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-accordion-merged"></i> ti-layout-accordion-merged
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-accordion-list"></i> ti-layout-accordion-list
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-widgetized"></i> ti-widgetized
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-widget"></i> ti-widget
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-widget-alt"></i> ti-widget-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-view-list"></i> ti-view-list
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-view-list-alt"></i> ti-view-list-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-view-grid"></i> ti-view-grid
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-upload"></i> ti-upload
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-download"></i> ti-download
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-loop"></i> ti-loop
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-sidebar-2"></i> ti-layout-sidebar-2
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-grid4-alt"></i> ti-layout-grid4-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-grid3-alt"></i> ti-layout-grid3-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-grid2-alt"></i> ti-layout-grid2-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-column4-alt"></i> ti-layout-column4-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-column3-alt"></i> ti-layout-column3-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-layout-column2-alt"></i> ti-layout-column2-alt
                                    </div>


                                </div>
                                <!-- End row -->

                                <h4 class="page-header">Brand Icons</h4>

                                <div class="row icon-list-demo">

                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-flickr"></i> ti-flickr
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-flickr-alt"></i> ti-flickr-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-instagram"></i> ti-instagram
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-google"></i> ti-google
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-github"></i> ti-github
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-facebook"></i> ti-facebook
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-dropbox"></i> ti-dropbox
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-dropbox-alt"></i> ti-dropbox-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-dribbble"></i> ti-dribbble
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-apple"></i> ti-apple
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-android"></i> ti-android
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-yahoo"></i> ti-yahoo
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-trello"></i> ti-trello
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-stack-overflow"></i> ti-stack-overflow
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-soundcloud"></i> ti-soundcloud
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-sharethis"></i> ti-sharethis
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-sharethis-alt"></i> ti-sharethis-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-reddit"></i> ti-reddit
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-microsoft"></i> ti-microsoft
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-microsoft-alt"></i> ti-microsoft-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-linux"></i> ti-linux
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-jsfiddle"></i> ti-jsfiddle
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-joomla"></i> ti-joomla
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-html5"></i> ti-html5
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-css3"></i> ti-css3
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-drupal"></i> ti-drupal
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-wordpress"></i> ti-wordpress
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-tumblr"></i> ti-tumblr
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-tumblr-alt"></i> ti-tumblr-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-skype"></i> ti-skype
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-youtube"></i> ti-youtube
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-vimeo"></i> ti-vimeo
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-vimeo-alt"></i> ti-vimeo-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-twitter"></i> ti-twitter
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-twitter-alt"></i> ti-twitter-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-linkedin"></i> ti-linkedin
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-pinterest"></i> ti-pinterest
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-pinterest-alt"></i> ti-pinterest-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-themify-logo"></i> ti-themify-logo
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-themify-favicon"></i> ti-themify-favicon
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <i class="ti-themify-favicon-alt"></i> ti-themify-favicon-alt
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