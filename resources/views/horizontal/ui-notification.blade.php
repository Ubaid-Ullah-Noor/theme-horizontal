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

        <!-- Notification css (Toastr) -->
        <link href="{{asset('plugins/toastr/toastr.min.css')}}" rel="stylesheet" type="text/css" />

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
                            <h4 class="page-title">Notifications</h4>
                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="control-group">
                                        <div class="controls">
                                            <label class="control-label">Title</label>
                                            <input id="title" type="text" class="input-large form-control" placeholder="Enter a title ..." />
                                            <label class="control-label m-t-10">Message</label>
                                            <textarea class="input-large form-control" id="message" rows="3" placeholder="Enter a message ..."></textarea>
                                        </div>
                                    </div>
                                    <div class="control-group m-t-30">
                                        <div class="checkbox controls">
                                            <input id="closeButton" type="checkbox" value="checked" class="input-mini" />
                                            <label for="closeButton">
                                                Close Button
                                            </label>
                                        </div>

                                        <div class="checkbox controls">
                                            <input id="addBehaviorOnToastClick" type="checkbox" value="checked" class="input-mini" />
                                            <label for="addBehaviorOnToastClick">
                                                Add behavior on toast click
                                            </label>
                                        </div>

                                        <div class="checkbox controls">
                                            <input id="debugInfo" type="checkbox" value="checked" class="input-mini" />
                                            <label for="debugInfo">
                                                Debug
                                            </label>
                                        </div>

                                        <div class="controls checkbox">
                                            <input id="progressBar" type="checkbox" value="checked" class="input-mini" />
                                            <label for="progressBar">
                                                Progress Bar
                                            </label>
                                        </div>

                                        <div class="checkbox controls">
                                            <input id="preventDuplicates" type="checkbox" value="checked" class="input-mini" />
                                            <label for="preventDuplicates">
                                                Prevent Duplicates
                                            </label>
                                        </div>

                                        <div class="checkbox controls">
                                            <input id="addClear" type="checkbox" value="checked" class="input-mini" />
                                            <label for="addClear">
                                                Add button to force clearing a toast, ignoring focus
                                            </label>
                                        </div>

                                        <div class="checkbox controls">
                                            <input id="newestOnTop" type="checkbox" value="checked" class="input-mini" />
                                            <label for="newestOnTop">
                                                Newest on top
                                            </label>
                                        </div>


                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="control-group" id="toastTypeGroup">
                                        <div class="controls">
                                            <label>Toast Type</label>
                                            <div class="radio radio-success">
                                                <input type="radio" name="radio" id="radio1" value="success"
                                                       checked>
                                                <label for="radio1">
                                                    Success
                                                </label>
                                            </div>

                                            <div class="radio radio-info">
                                                <input type="radio" name="radio" id="radio2" value="info">
                                                <label for="radio2">
                                                    Info
                                                </label>
                                            </div>

                                            <div class="radio radio-warning">
                                                <input type="radio" name="radio" id="radio3" value="warning">
                                                <label for="radio3">
                                                    Warning
                                                </label>
                                            </div>

                                            <div class="radio radio-danger">
                                                <input type="radio" name="radio" id="radio4" value="error">
                                                <label for="radio4">
                                                    Error
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="control-group" id="positionGroup">
                                        <div class="controls">
                                            <label>Position</label>

                                            <div class="radio radio-custom">
                                                <input type="radio" name="positions" id="radio5" value="toast-top-right" checked />
                                                <label for="radio5">
                                                    Top Right
                                                </label>
                                            </div>

                                            <div class="radio radio-custom">
                                                <input type="radio" name="positions" id="radio6" value="toast-bottom-right" />
                                                <label for="radio6">
                                                    Bottom Right
                                                </label>
                                            </div>

                                            <div class="radio radio-custom">
                                                <input type="radio" name="positions" id="radio7" value="toast-bottom-left" />
                                                <label for="radio7">
                                                    Bottom Left
                                                </label>
                                            </div>

                                            <div class="radio radio-custom">
                                                <input type="radio" name="positions" id="radio8" value="toast-top-left" />
                                                <label for="radio8">
                                                    Top Left
                                                </label>
                                            </div>

                                            <div class="radio radio-custom">
                                                <input type="radio" name="positions" id="radio9" value="toast-top-full-width" />
                                                <label for="radio9">
                                                    Top Full Width
                                                </label>
                                            </div>

                                            <div class="radio radio-custom">
                                                <input type="radio" name="positions" id="radio10" value="toast-bottom-full-width" />
                                                <label for="radio10">
                                                    Bottom Full Width
                                                </label>
                                            </div>

                                            <div class="radio radio-custom">
                                                <input type="radio" name="positions" id="radio11" value="toast-top-center" />
                                                <label for="radio11">
                                                    Top Center
                                                </label>
                                            </div>

                                            <div class="radio radio-custom">
                                                <input type="radio" name="positions" id="radio12" value="toast-bottom-center" />
                                                <label for="radio12">
                                                    Bottom Center
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="control-group">
                                        <div class="controls">
                                            <label for="showEasing">Show Easing</label>
                                            <input id="showEasing" type="text" placeholder="swing, linear" class="input-mini form-control" value="swing" />

                                            <label for="hideEasing" class="m-t-10">Hide Easing</label>
                                            <input id="hideEasing" type="text" placeholder="swing, linear" class="input-mini form-control" value="linear" />

                                            <label for="showMethod" class="m-t-10">Show Method</label>
                                            <input id="showMethod" type="text" placeholder="show, fadeIn, slideDown" class="input-mini form-control" value="fadeIn" />

                                            <label for="hideMethod" class="m-t-10">Hide Method</label>
                                            <input id="hideMethod" type="text" placeholder="hide, fadeOut, slideUp" class="input-mini form-control" value="fadeOut" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="control-group">
                                        <div class="controls">
                                            <label for="showDuration">Show Duration</label>
                                            <input id="showDuration" type="text" placeholder="ms" class="input-mini form-control" value="300" />

                                            <label for="hideDuration" class="m-t-10">Hide Duration</label>
                                            <input id="hideDuration" type="text" placeholder="ms" class="input-mini form-control" value="1000" />

                                            <label for="timeOut" class="m-t-10">Time out</label>
                                            <input id="timeOut" type="text" placeholder="ms" class="input-mini form-control" value="5000" />

                                            <label for="extendedTimeOut" class="m-t-10">Extended time out</label>
                                            <input id="extendedTimeOut" type="text" placeholder="ms" class="input-mini form-control" value="1000" />
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end row -->

                            <div class="row m-t-30">
                                <div class="col-12">
                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="showtoast">Show Toast</button>
                                    <button type="button" class="btn btn-danger waves-effect waves-light" id="cleartoasts">Clear Toasts</button>
                                    <button type="button" class="btn btn-danger waves-effect waves-light" id="clearlasttoast">Clear Last Toast</button>
                                </div>
                            </div>

                            <div class="row m-t-30">
                                <div class="col-12">
                                    <pre id='toastrOptions' class="alerts-demo"></pre>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div>
                <!-- end row -->

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

        <!-- Toastr js -->
        <script src="{{asset('plugins/toastr/toastr.min.js')}}"></script>

        
        <!-- DEMO PURPOSE ONLY -->
        <script type="text/javascript">
            $(function () {
                var i = -1;
                var toastCount = 0;
                var $toastlast;

                var getMessage = function () {
                    var msgs = ['My name is Inigo Montoya. You killed my father. Prepare to die!',
                        'Are you the six fingered man?',
                        'Inconceivable!',
                        'I do not think that means what you think it means.',
                        'Have fun storming the castle!'
                    ];
                    i++;
                    if (i === msgs.length) {
                        i = 0;
                    }

                    return msgs[i];
                };

                var getMessageWithClearButton = function (msg) {
                    msg = msg ? msg : 'Clear itself?';
                    msg += '<br /><br /><button type="button" class="btn btn-secondary clear">Yes</button>';
                    return msg;
                };

                $('#showtoast').click(function () {
                    var shortCutFunction = $("#toastTypeGroup input:radio:checked").val();
                    var msg = $('#message').val();
                    var title = $('#title').val() || '';
                    var $showDuration = $('#showDuration');
                    var $hideDuration = $('#hideDuration');
                    var $timeOut = $('#timeOut');
                    var $extendedTimeOut = $('#extendedTimeOut');
                    var $showEasing = $('#showEasing');
                    var $hideEasing = $('#hideEasing');
                    var $showMethod = $('#showMethod');
                    var $hideMethod = $('#hideMethod');
                    var toastIndex = toastCount++;
                    var addClear = $('#addClear').prop('checked');

                    toastr.options = {
                        closeButton: $('#closeButton').prop('checked'),
                        debug: $('#debugInfo').prop('checked'),
                        newestOnTop: $('#newestOnTop').prop('checked'),
                        progressBar: $('#progressBar').prop('checked'),
                        positionClass: $('#positionGroup input:radio:checked').val() || 'toast-top-right',
                        preventDuplicates: $('#preventDuplicates').prop('checked'),
                        onclick: null
                    };

                    if ($('#addBehaviorOnToastClick').prop('checked')) {
                        toastr.options.onclick = function () {
                            alert('You can perform some custom action after a toast goes away');
                        };
                    }

                    if ($showDuration.val().length) {
                        toastr.options.showDuration = $showDuration.val();
                    }

                    if ($hideDuration.val().length) {
                        toastr.options.hideDuration = $hideDuration.val();
                    }

                    if ($timeOut.val().length) {
                        toastr.options.timeOut = addClear ? 0 : $timeOut.val();
                    }

                    if ($extendedTimeOut.val().length) {
                        toastr.options.extendedTimeOut = addClear ? 0 : $extendedTimeOut.val();
                    }

                    if ($showEasing.val().length) {
                        toastr.options.showEasing = $showEasing.val();
                    }

                    if ($hideEasing.val().length) {
                        toastr.options.hideEasing = $hideEasing.val();
                    }

                    if ($showMethod.val().length) {
                        toastr.options.showMethod = $showMethod.val();
                    }

                    if ($hideMethod.val().length) {
                        toastr.options.hideMethod = $hideMethod.val();
                    }

                    if (addClear) {
                        msg = getMessageWithClearButton(msg);
                        toastr.options.tapToDismiss = false;
                    }
                    if (!msg) {
                        msg = getMessage();
                    }

                    $('#toastrOptions').text('Command: toastr["'
                            + shortCutFunction
                            + '"]("'
                            + msg
                            + (title ? '", "' + title : '')
                            + '")\n\ntoastr.options = '
                            + JSON.stringify(toastr.options, null, 2)
                    );

                    var $toast = toastr[shortCutFunction](msg, title); // Wire up an event handler to a button in the toast, if it exists
                    $toastlast = $toast;

                    if (typeof $toast === 'undefined') {
                        return;
                    }

                    if ($toast.find('#okBtn').length) {
                        $toast.delegate('#okBtn', 'click', function () {
                            alert('you clicked me. i was toast #' + toastIndex + '. goodbye!');
                            $toast.remove();
                        });
                    }
                    if ($toast.find('#surpriseBtn').length) {
                        $toast.delegate('#surpriseBtn', 'click', function () {
                            alert('Surprise! you clicked me. i was toast #' + toastIndex + '. You could perform an action here.');
                        });
                    }
                    if ($toast.find('.clear').length) {
                        $toast.delegate('.clear', 'click', function () {
                            toastr.clear($toast, {force: true});
                        });
                    }
                });

                function getLastToast() {
                    return $toastlast;
                }

                $('#clearlasttoast').click(function () {
                    toastr.clear(getLastToast());
                });
                $('#cleartoasts').click(function () {
                    toastr.clear();
                });
            })
        </script>


    </body>
</html>