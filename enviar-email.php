
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Dastyle - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link href="plugins/summernote/summernote-bs4.css" rel="stylesheet" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/jquery-ui.min.css" rel="stylesheet">
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
        <link href="plugins/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="dark-sidenav">
        <!-- Left Sidenav -->
        <div class="left-sidenav">
            <!-- LOGO -->
            <div class="brand">
                <a href="crm-index.html" class="logo">
                    <span>
                        <img src="assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
                    </span>
                    <span>
                        <img src="assets/images/logo.png" alt="logo-large" class="logo-lg logo-light">
                        <img src="assets/images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark">
                    </span>
                </a>
            </div>
            <!--end logo-->
            <div class="menu-content h-100" data-simplebar>
                <ul class="metismenu left-sidenav-menu">
                    <li class="menu-label mt-0">Main</li>
                    <li>
                        <a href="javascript: void(0);"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Dashboard</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="index.html"><i class="ti-control-record"></i>Analytics</a></li>
                            <li class="nav-item"><a class="nav-link" href="crm-index.html"><i class="ti-control-record"></i>CRM</a></li>
                            <li class="nav-item"><a class="nav-link" href="helpdesk-index.html"><i class="ti-control-record"></i>Helpdesk</a></li>
                            <li class="nav-item"><a class="nav-link" href="sales-index.html"><i class="ti-control-record"></i>Sales</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i data-feather="grid" class="align-self-center menu-icon"></i><span>Apps</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Email <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="apps-email-inbox.html">Inbox</a></li>
                                    <li><a href="apps-email-read.html">Read Email</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="apps-chat.html"><i class="ti-control-record"></i>Chat</a></li>
                            <li class="nav-item"><a class="nav-link" href="apps-contact-list.html"><i class="ti-control-record"></i>Contact List</a></li>
                            <li class="nav-item"><a class="nav-link" href="apps-calendar.html"><i class="ti-control-record"></i>Calendar</a></li>
                            <li class="nav-item"><a class="nav-link" href="apps-files.html"><i class="ti-control-record"></i>File Manager</a></li>
                            <li class="nav-item"><a class="nav-link" href="apps-invoice.html"><i class="ti-control-record"></i>Invoice</a></li>
                            <li class="nav-item"><a class="nav-link" href="apps-tasks.html"><i class="ti-control-record"></i>Tasks</a></li>
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Projects <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="apps-project-overview.html">Overview</a></li>
                                    <li><a href="apps-project-projects.html">Projects</a></li>
                                    <li><a href="apps-project-board.html">Board</a></li>
                                    <li><a href="apps-project-teams.html">Teams</a></li>
                                    <li><a href="apps-project-files.html">Files</a></li>
                                    <li><a href="apps-new-project.html">New Project</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Ecommerce <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="apps-ecommerce-products.html">Products</a></li>
                                    <li><a href="apps-ecommerce-product-list.html">Product List</a></li>
                                    <li><a href="apps-ecommerce-product-detail.html">Product Detail</a></li>
                                    <li><a href="apps-ecommerce-cart.html">Cart</a></li>
                                    <li><a href="apps-ecommerce-checkout.html">Checkout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i data-feather="lock" class="align-self-center menu-icon"></i><span>Authentication</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="auth-login.html"><i class="ti-control-record"></i>Log in</a></li>
                            <li class="nav-item"><a class="nav-link" href="auth-register.html"><i class="ti-control-record"></i>Register</a></li>
                            <li class="nav-item"><a class="nav-link" href="auth-recover-pw.html"><i class="ti-control-record"></i>Recover Password</a></li>
                            <li class="nav-item"><a class="nav-link" href="auth-lock-screen.html"><i class="ti-control-record"></i>Lock Screen</a></li>
                            <li class="nav-item"><a class="nav-link" href="auth-404.html"><i class="ti-control-record"></i>Error 404</a></li>
                            <li class="nav-item"><a class="nav-link" href="auth-500.html"><i class="ti-control-record"></i>Error 500</a></li>
                        </ul>
                    </li>

                    <hr class="hr-dashed hr-menu">
                    <li class="menu-label my-2">Components & Extra</li>

                    <li>
                        <a href="javascript: void(0);"><i data-feather="box" class="align-self-center menu-icon"></i><span>UI Kit</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>UI Elements <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="ui-alerts.html">Alerts</a></li>
                                    <li><a href="ui-avatar.html">Avatar</a></li>
                                    <li><a href="ui-buttons.html">Buttons</a></li>
                                    <li><a href="ui-badges.html">Badges</a></li>
                                    <li><a href="ui-cards.html">Cards</a></li>
                                    <li><a href="ui-carousels.html">Carousels</a></li>
                                    <li><a href="ui-check-radio.html"><span>Check & Radio</span></a></li>
                                    <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                                    <li><a href="ui-grids.html">Grids</a></li>
                                    <li><a href="ui-images.html">Images</a></li>
                                    <li><a href="ui-list.html">List</a></li>
                                    <li><a href="ui-modals.html">Modals</a></li>
                                    <li><a href="ui-navs.html">Navs</a></li>
                                    <li><a href="ui-navbar.html">Navbar</a></li>
                                    <li><a href="ui-paginations.html">Paginations</a></li>
                                    <li><a href="ui-popover-tooltips.html">Popover & Tooltips</a></li>
                                    <li><a href="ui-progress.html">Progress</a></li>
                                    <li><a href="ui-spinners.html">Spinners</a></li>
                                    <li><a href="ui-tabs-accordions.html">Tabs & Accordions</a></li>
                                    <li><a href="ui-toasts.html">Toasts</a></li>
                                    <li><a href="ui-typography.html">Typography</a></li>
                                    <li><a href="ui-videos.html">Videos</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Advanced UI <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="advanced-animation.html">Animation</a></li>
                                    <li><a href="advanced-clipboard.html">Clip Board</a></li>
                                    <li><a href="advanced-highlight.html">Highlight</a></li>
                                    <li><a href="advanced-idle-timer.html">Idle Timer</a></li>
                                    <li><a href="advanced-kanban.html">Kanban</a></li>
                                    <li><a href="advanced-lightbox.html">Lightbox</a></li>
                                    <li><a href="advanced-nestable.html">Nestable List</a></li>
                                    <li><a href="advanced-rangeslider.html">Range Slider</a></li>
                                    <li><a href="advanced-ratings.html">Ratings</a></li>
                                    <li><a href="advanced-ribbons.html">Ribbons</a></li>
                                    <li><a href="advanced-session.html">Session Timeout</a></li>
                                    <li><a href="advanced-sweetalerts.html">Sweet Alerts</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Forms <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="forms-advanced.html">Advance Elements</a></li>
                                    <li><a href="forms-elements.html">Basic Elements</a></li>
                                    <li><a href="forms-editors.html">Editors</a></li>
                                    <li><a href="forms-uploads.html">File Upload</a></li>
                                    <li><a href="forms-repeater.html">Repeater</a></li>
                                    <li><a href="forms-validation.html">Validation</a></li>
                                    <li><a href="forms-wizard.html">Wizard</a></li>
                                    <li><a href="forms-x-editable.html">X Editable</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Charts <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="charts-apex.html">Apex</a></li>
                                    <li><a href="charts-chartjs.html">Chartjs</a></li>
                                    <li><a href="charts-flot.html">Flot</a></li>
                                    <li><a href="charts-morris.html">Morris</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Tables <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="tables-basic.html">Basic</a></li>
                                    <li><a href="tables-datatable.html">Datatables</a></li>
                                    <li><a href="tables-editable.html">Editable</a></li>
                                    <li><a href="tables-responsive.html">Responsive</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Icons <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">

                                    <li><a href="icons-dripicons.html">Dripicons</a></li>
                                    <li><a href="icons-feather.html">Feather</a></li>
                                    <li><a href="icons-fontawesome.html">Font awesome</a></li>
                                    <li><a href="icons-materialdesign.html">Material Design</a></li>
                                    <li><a href="icons-themify.html">Themify</a></li>
                                    <li><a href="icons-typicons.html">Typicons</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Maps <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="maps-google.html">Google Maps</a></li>
                                    <li><a href="maps-leaflet.html">Leaflet Maps</a></li>
                                    <li><a href="maps-vector.html">Vector Maps</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Email Template <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="email-templates-alert.html">Alert Email</a></li>
                                    <li><a href="email-templates-basic.html">Basic Action Email</a></li>
                                    <li><a href="email-templates-billing.html">Billing Email</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="widgets.html"><i data-feather="layers" class="align-self-center menu-icon"></i><span>Widgets</span><span class="badge badge-soft-success menu-arrow">New</span></a>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i data-feather="file-plus" class="align-self-center menu-icon"></i><span>Pages</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="pages-blogs.html"><i class="ti-control-record"></i>Blogs</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages-faqs.html"><i class="ti-control-record"></i>FAQs</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages-pricing.html"><i class="ti-control-record"></i>Pricing</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages-profile.html"><i class="ti-control-record"></i>Profile</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages-starter.html"><i class="ti-control-record"></i>Starter Page</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages-timeline.html"><i class="ti-control-record"></i>Timeline</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages-treeview.html"><i class="ti-control-record"></i>Treeview</a></li>
                        </ul>
                    </li>
                </ul>

                <div class="update-msg text-center">
                    <a href="javascript: void(0);" class="float-right close-btn text-white" data-dismiss="update-msg" aria-label="Close" aria-hidden="true">
                        <i class="mdi mdi-close"></i>
                    </a>
                    <h5 class="mt-3">Mannat Themes</h5>
                    <p class="mb-3">We Design and Develop Clean and High Quality Web Applications</p>
                    <a href="javascript: void(0);" class="btn btn-outline-warning btn-sm">Upgrade your plan</a>
                </div>
            </div>
        </div>
        <!-- end left-sidenav-->


        <div class="page-wrapper">
            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- Navbar -->
                <nav class="navbar-custom">
                    <ul class="list-unstyled topbar-nav float-right mb-0">
                        <li class="dropdown hide-phone">
                            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <i data-feather="search" class="topbar-icon"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right dropdown-lg p-0">
                                <!-- Top Search Bar -->
                                <div class="app-search-topbar">
                                    <form action="#" method="get">
                                        <input type="search" name="search" class="from-control top-search mb-0" placeholder="Type text...">
                                        <button type="submit"><i class="ti-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <i data-feather="bell" class="align-self-center topbar-icon"></i>
                                <span class="badge badge-danger badge-pill noti-icon-badge">2</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-lg pt-0">

                                <h6 class="dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center">
                                    Notifications <span class="badge badge-primary badge-pill">2</span>
                                </h6>
                                <div class="notification-menu" data-simplebar>
                                    <!-- item-->
                                    <a href="#" class="dropdown-item py-3">
                                        <small class="float-right text-muted pl-2">2 min ago</small>
                                        <div class="media">
                                            <div class="avatar-md bg-soft-primary">
                                                <i data-feather="shopping-cart" class="align-self-center icon-xs"></i>
                                            </div>
                                            <div class="media-body align-self-center ml-2 text-truncate">
                                                <h6 class="my-0 font-weight-normal text-dark">Your order is placed</h6>
                                                <small class="text-muted mb-0">Dummy text of the printing and industry.</small>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a><!--end-item-->
                                    <!-- item-->
                                    <a href="#" class="dropdown-item py-3">
                                        <small class="float-right text-muted pl-2">10 min ago</small>
                                        <div class="media">
                                            <div class="avatar-md bg-soft-primary">
                                                <img src="assets/images/users/user-4.jpg" alt="" class="thumb-sm rounded-circle">
                                            </div>
                                            <div class="media-body align-self-center ml-2 text-truncate">
                                                <h6 class="my-0 font-weight-normal text-dark">Meeting with designers</h6>
                                                <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a><!--end-item-->
                                    <!-- item-->
                                    <a href="#" class="dropdown-item py-3">
                                        <small class="float-right text-muted pl-2">40 min ago</small>
                                        <div class="media">
                                            <div class="avatar-md bg-soft-primary">
                                                <i data-feather="users" class="align-self-center icon-xs"></i>
                                            </div>
                                            <div class="media-body align-self-center ml-2 text-truncate">
                                                <h6 class="my-0 font-weight-normal text-dark">UX 3 Task complete.</h6>
                                                <small class="text-muted mb-0">Dummy text of the printing.</small>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a><!--end-item-->
                                    <!-- item-->
                                    <a href="#" class="dropdown-item py-3">
                                        <small class="float-right text-muted pl-2">1 hr ago</small>
                                        <div class="media">
                                            <div class="avatar-md bg-soft-primary">
                                                <img src="assets/images/users/user-5.jpg" alt="" class="thumb-sm rounded-circle">
                                            </div>
                                            <div class="media-body align-self-center ml-2 text-truncate">
                                                <h6 class="my-0 font-weight-normal text-dark">Your order is placed</h6>
                                                <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a><!--end-item-->
                                    <!-- item-->
                                    <a href="#" class="dropdown-item py-3">
                                        <small class="float-right text-muted pl-2">2 hrs ago</small>
                                        <div class="media">
                                            <div class="avatar-md bg-soft-primary">
                                                <i data-feather="check-circle" class="align-self-center icon-xs"></i>
                                            </div>
                                            <div class="media-body align-self-center ml-2 text-truncate">
                                                <h6 class="my-0 font-weight-normal text-dark">Payment Successfull</h6>
                                                <small class="text-muted mb-0">Dummy text of the printing.</small>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a><!--end-item-->
                                </div>
                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                                    View all <i class="fi-arrow-right"></i>
                                </a>
                            </div>
                        </li>

                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <span class="ml-1 nav-user-name hidden-sm">Nick</span>
                                <img src="assets/images/users/user-5.jpg" alt="profile-user" class="rounded-circle" />
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i data-feather="user" class="align-self-center icon-xs icon-dual mr-1"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings" class="align-self-center icon-xs icon-dual mr-1"></i> Settings</a>
                                <div class="dropdown-divider mb-0"></div>
                                <a class="dropdown-item" href="#"><i data-feather="power" class="align-self-center icon-xs icon-dual mr-1"></i> Logout</a>
                            </div>
                        </li>
                    </ul><!--end topbar-nav-->

                    <ul class="list-unstyled topbar-nav mb-0">
                        <li>
                            <button class="nav-link button-menu-mobile">
                                <i data-feather="menu" class="align-self-center topbar-icon"></i>
                            </button>
                        </li>
                        <li class="creat-btn">
                            <div class="nav-link">
                                <a class=" btn btn-sm btn-soft-primary" href="#" role="button"><i class="fas fa-plus mr-2"></i>New Task</a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- end navbar-->
            </div>
            <!-- Top Bar End -->

            <!-- Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="page-title">Bandeja</h4>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Dastyle</a></li>
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                            <li class="breadcrumb-item active">Inbox</li>
                                        </ol>
                                    </div><!--end col-->
                                    <div class="col-auto align-self-center">
                                        <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                                            <span class="day-name" id="Day_Name">Today:</span>&nbsp;
                                            <span class="" id="Select_date">Jan 11</span>
                                            <i data-feather="calendar" class="align-self-center icon-xs ml-1"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-outline-primary">
                                            <i data-feather="download" class="align-self-center icon-xs"></i>
                                        </a>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <!-- end page title end breadcrumb -->

                    <div class="row">
                        <div class="col-12">
                            <!-- Left sidebar -->
                            <div class="email-leftbar">
                                <button type="button" class="btn btn-primary btn-round btn-custom btn-block waves-effect waves-light" data-toggle="modal" data-animation="bounce" data-target=".compose-modal">
                                    <i class="fas fa-feather-alt mr-2"></i>Crear Email
                                </button>

                                <div class="card mt-3">
                                    <div class="card-body">
                                        <div class="mail-list">
                                            <a href="#" class="active pt-0">Inbox <span class="ml-1">(5)</span></a>
                                            <a href="#">Starred</a>
                                            <a href="#">Important</a>
                                            <a href="#">Draft</a>
                                            <a href="#">Sent Mail</a>
                                            <a href="#">Trash</a>
                                        </div>

                                        <p class="text-dark my-4 font-weight-bold">Labels</p>
                                        <div class="mail-list">
                                            <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-info float-right mt-1 mr-1"></span>Theme Support</a>
                                            <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-warning float-right mt-1 mr-1"></span>Freelance</a>
                                            <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-purple float-right mt-1 mr-1"></span>Social</a>
                                            <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-pink float-right mt-1 mr-1"></span>Friends</a>
                                            <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-success float-right mt-1 mr-1"></span>Family</a>
                                        </div>

                                        <p class="text-dark my-4 font-weight-bold">Chat</p>
                                        <div class="">
                                            <a href="#" class="media">
                                                <img class="d-flex mr-3 rounded-circle" src="assets/images/users/user-1.jpg" alt="Generic placeholder image" height="36">
                                                <div class="media-body chat-user-box">
                                                    <p class="user-title m-0">Scott Median</p>
                                                    <p class="text-muted">Hello</p>
                                                </div>
                                            </a>

                                            <a href="#" class="media">
                                                <img class="d-flex mr-3 rounded-circle" src="assets/images/users/user-2.jpg" alt="Generic placeholder image" height="36">
                                                <div class="media-body chat-user-box">
                                                    <p class="user-title m-0">Julian Rosa</p>
                                                    <p class="text-muted">What about our next..</p>
                                                </div>
                                            </a>

                                            <a href="#" class="media">
                                                <img class="d-flex mr-3 rounded-circle" src="assets/images/users/user-3.jpg" alt="Generic placeholder image" height="36">
                                                <div class="media-body chat-user-box">
                                                    <p class="user-title m-0">David Medina</p>
                                                    <p class="text-muted">Yeah everything is fine</p>
                                                </div>
                                            </a>

                                            <a href="#" class="media">
                                                <img class="d-flex mr-3 rounded-circle" src="assets/images/users/user-4.jpg" alt="Generic placeholder image" height="36">
                                                <div class="media-body chat-user-box">
                                                    <p class="user-title m-0">Jay Baker</p>
                                                    <p class="text-muted">Wow that's great</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div>
                            <!-- End Left sidebar -->


                            <!-- Right Sidebar -->
                            <div class="email-rightbar">
                                <div class="float-right d-flex justify-content-between">
                                    <div class="btn-group ml-1">
                                        <button type="button" class="btn btn-sm btn-outline-secondary waves-light waves-effect dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-question-circle"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Updates</a>
                                            <a class="dropdown-item" href="#">Social</a>
                                            <a class="dropdown-item" href="#">Team Manage</a>
                                        </div>
                                    </div>
                                    <div class="btn-group ml-1">
                                        <button type="button" class="btn btn-sm btn-outline-secondary waves-light waves-effect dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-cog"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Display density</a>
                                            <a class="dropdown-item" href="#">Themes</a>
                                            <a class="dropdown-item" href="#">Help</a>
                                        </div>
                                    </div>
                                </div><!-- end div -->
                                <div class="btn-toolbar" role="toolbar">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary waves-light waves-effect"><i class="fas fa-inbox"></i></button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary waves-light waves-effect"><i class="fas fa-exclamation-circle"></i></button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary waves-light waves-effect"><i class="fas fa-trash"></i></button>
                                    </div>
                                    <div class="btn-group ml-1">
                                        <button type="button" class="btn btn-sm btn-outline-secondary waves-light waves-effect dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-folder"></i><i class="mdi mdi-chevron-down ml-1"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Updates</a>
                                            <a class="dropdown-item" href="#">Social</a>
                                            <a class="dropdown-item" href="#">Team Manage</a>
                                        </div>
                                    </div>
                                    <div class="btn-group ml-1">
                                        <button type="button" class="btn btn-sm btn-outline-secondary waves-light waves-effect dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-tag"></i><i class="mdi mdi-chevron-down ml-1"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Updates</a>
                                            <a class="dropdown-item" href="#">Social</a>
                                            <a class="dropdown-item" href="#">Team Manage</a>
                                        </div>
                                    </div>

                                    <div class="btn-group ml-1">
                                        <button type="button" class="btn btn-sm btn-outline-secondary waves-light waves-effect dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            More<i class="mdi mdi-chevron-down ml-1"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Mark as Unread</a>
                                            <a class="dropdown-item" href="#">Mark as Important</a>
                                            <a class="dropdown-item" href="#">Add to Tasks</a>
                                            <a class="dropdown-item" href="#">Add Star</a>
                                            <a class="dropdown-item" href="#">Mute</a>
                                        </div>
                                    </div>
                                </div><!-- end toolbar -->


                                <div class="card my-3">
                                    <ul class="message-list">
                                        <li>
                                            <div class="col-mail col-mail-1">
                                                <div class="checkbox-wrapper-mail">
                                                    <input type="checkbox" id="chk19">
                                                    <label for="chk19" class="toggle"></label>
                                                </div>
                                                <a href="">
                                                    <p class="title">Peter, me (3)</p><span class="star-toggle far fa-star"></span>
                                                </a>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <a href="" class="subject">Hello &nbsp;–&nbsp; <span class="teaser">Trip home from 🎉 Colombo has been arranged, then Jenna will come get me from Stockholm. :)</span>
                                                </a>
                                                <div class="date">Mar. 6</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-mail col-mail-1">
                                                <div class="checkbox-wrapper-mail">
                                                    <input type="checkbox" id="chk20">
                                                    <label for="chk20" class="toggle"></label>
                                                </div>
                                                <a href="">
                                                    <p class="title">me, Susanna (7)</p><span class="star-toggle far fa-star"></span>
                                                </a>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <a href="" class="subject"><span class="badge-soft-warning badge mr-2">Freelance</span>Since you asked... and i'm
                                                    inconceivably bored at the train station &nbsp;–&nbsp;
                                                    <span class="teaser">Alright thanks. I'll have to re-book that somehow, i'll get back to you.</span>
                                                </a>
                                                <div class="date">Mar. 6</div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="col-mail col-mail-1">
                                                <div class="checkbox-wrapper-mail">
                                                    <input type="checkbox" id="chk6">
                                                    <label for="chk6" class="toggle"></label>
                                                </div>
                                                <a href="">
                                                    <p class="title">Web Support Dennis</p><span class="star-toggle far fa-star"></span>
                                                </a>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <a href="" class="subject">Re: New mail settings &nbsp;–&nbsp;
                                                    <span class="teaser">Will you answer him asap?</span>
                                                </a>
                                                <div class="date">Mar 7</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-mail col-mail-1">
                                                <div class="checkbox-wrapper-mail">
                                                    <input type="checkbox" id="chk7">
                                                    <label for="chk7" class="toggle"></label>
                                                </div>
                                                <a href="">
                                                    <p class="title">me, Peter (2)</p><span class="star-toggle far fa-star"></span>
                                                </a>

                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <a href="" class="subject"><span class="badge-soft-info badge mr-2">Support</span>Off on Thursday &nbsp;–&nbsp;
                                                    <span class="teaser">Eff that place, you might as well stay here with us instead! Sent from my iPhone 4 &gt; 4 mar 2014 at 5:55 pm</span>
                                                </a>
                                                <div class="date">Mar 4</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-mail col-mail-1">
                                                <div class="checkbox-wrapper-mail">
                                                    <input type="checkbox" id="chk8">
                                                    <label for="chk8" class="toggle"></label>
                                                </div>
                                                <a href="">
                                                    <p class="title">Medium</p><span class="star-toggle far fa-star"></span>
                                                </a>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <a href="" class="subject"><span class="badge-soft-purple badge mr-2">Social</span>This Week's Top Stories &nbsp;–&nbsp;
                                                    <span class="teaser">Our top pick for you on Medium this week The Man Who Destroyed America’s Ego</span>
                                                </a>
                                                <div class="date">Feb 28</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-mail col-mail-1">
                                                <div class="checkbox-wrapper-mail">
                                                    <input type="checkbox" id="chk9">
                                                    <label for="chk9" class="toggle"></label>
                                                </div>
                                                <a href="">
                                                    <p class="title">Death to Stock</p><span class="star-toggle far fa-star"></span>
                                                </a>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <a href="" class="subject">🎁 Montly High-Res Photos &nbsp;–&nbsp;
                                                    <span class="teaser">To create this month's pack, we hosted a party with local musician Jared Mahone here in Columbus, Ohio.</span>
                                                </a>
                                                <div class="date">Feb 28</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-mail col-mail-1">
                                                <div class="checkbox-wrapper-mail">
                                                    <input type="checkbox" checked id="chk3">
                                                    <label for="chk3" class="toggle"></label>
                                                </div>
                                                <a href="">
                                                    <p class="title">Randy, me (5)</p><span class="star-toggle fas fa-star text-warning"></span>
                                                </a>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <a href="" class="subject"><span class="badge-soft-success badge mr-2">Family</span>Last pic over my village &nbsp;–&nbsp;
                                                    <span class="teaser">Yeah i'd like that! Do you remember the video you showed me of your train ride between Colombo and Kandy? The one with the mountain view? I would love to see that one again!</span>
                                                </a>
                                                <div class="date">5:01 am</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-mail col-mail-1">
                                                <div class="checkbox-wrapper-mail">
                                                    <input type="checkbox" id="chk4">
                                                    <label for="chk4" class="toggle"></label>
                                                </div>
                                                <a href="">
                                                    <p class="title">Andrew Zimmer</p><span class="star-toggle far fa-star"></span>
                                                </a>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <a href="" class="subject">Mochila Beta: Subscription Confirmed
                                                    &nbsp;–&nbsp; <span class="teaser">You've been confirmed! Welcome to the ruling class of the inbox. For your records, here is a copy of the information you submitted to us...</span>
                                                </a>
                                                <div class="date">Mar 8</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-mail col-mail-1">
                                                <div class="checkbox-wrapper-mail">
                                                    <input type="checkbox" id="chk5">
                                                    <label for="chk5" class="toggle"></label>
                                                </div>
                                                <a href="">
                                                    <p class="title">Infinity HR</p><span class="star-toggle far fa-star"></span>
                                                </a>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <a href="" class="subject">Sveriges Hetaste sommarjobb &nbsp;–&nbsp; 👌
                                                    <span class="teaser">Hej Nicklas Sandell! Vi vill bjuda in dig till "First tour 2014", ett rekryteringsevent som erbjuder jobb på 16 semesterorter iSverige.</span>
                                                </a>
                                                <div class="date">Mar 8</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-mail col-mail-1">
                                                <div class="checkbox-wrapper-mail">
                                                    <input type="checkbox" id="chk10">
                                                    <label for="chk10" class="toggle"></label>
                                                </div>
                                                <a href="">
                                                    <p class="title">Revibe</p><span class="star-toggle far fa-star"></span>
                                                </a>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <a href="" class="subject"><span class="badge-soft-pink badge mr-2">Friends</span>Weekend on Revibe &nbsp;–&nbsp;
                                                    <span class="teaser">Today's Friday and we thought maybe you want some music inspiration for the weekend. Here are some trending tracks and playlists we think you should give a listen!</span>
                                                </a>
                                                <div class="date">Feb 27</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-mail col-mail-1">
                                                <div class="checkbox-wrapper-mail">
                                                    <input type="checkbox" id="chk11">
                                                    <label for="chk11" class="toggle"></label>
                                                </div>
                                                <a href="">
                                                    <p class="title">Erik, me (5)</p><span class="star-toggle far fa-star"></span>
                                                </a>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <a href="" class="subject">Regarding our meeting &nbsp;–&nbsp;
                                                    <span class="teaser">That's great, see you on Thursday!</span>
                                                </a>
                                                <div class="date">Feb 24</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-mail col-mail-1">
                                                <div class="checkbox-wrapper-mail">
                                                    <input type="checkbox" id="chk12">
                                                    <label for="chk12" class="toggle"></label>
                                                </div>
                                                <a href="">
                                                    <p class="title">KanbanFlow</p><span class="star-toggle far fa-star"></span>
                                                </a>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <a href="" class="subject"><span class="badge-soft-purple badge mr-2">Social</span>Task assigned: Clone ARP's website
                                                    &nbsp;–&nbsp; <span class="teaser">You have been assigned 💥 a task by Alex@Work on the board Web.</span>
                                                </a>
                                                <div class="date">Feb 24</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-mail col-mail-1">
                                                <div class="checkbox-wrapper-mail">
                                                    <input type="checkbox" id="chk13">
                                                    <label for="chk13" class="toggle"></label>
                                                </div>
                                                <a href="">
                                                    <p class="title">Tobias Berggren</p><span class="star-toggle far fa-star"></span>
                                                </a>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <a href="" class="subject">Let's go fishing! &nbsp;–&nbsp;
                                                    <span class="teaser">Hey, You wanna join me and Fred at the lake tomorrow? It'll be awesome.</span>
                                                </a>
                                                <div class="date">Feb 23</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-mail col-mail-1">
                                                <div class="checkbox-wrapper-mail">
                                                    <input type="checkbox" id="chk14">
                                                    <label for="chk14" class="toggle"></label>
                                                </div>
                                                <a href="">
                                                    <p class="title">Charukaw, me (7)</p><span class="star-toggle far fa-star"></span>
                                                </a>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <a href="" class="subject">Hey man &nbsp;–&nbsp; <span class="teaser">Nah man sorry i don't. Should i get it?</span>
                                                </a>
                                                <div class="date">Feb 23</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-mail col-mail-1">
                                                <div class="checkbox-wrapper-mail">
                                                    <input type="checkbox" checked id="chk15">
                                                    <label for="chk15" class="toggle"></label>
                                                </div>
                                                <a href="">
                                                    <p class="title">me, Peter (5)</p><span class="star-toggle fas fa-star text-warning"></span>
                                                </a>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <a href="" class="subject"><span class="badge-soft-info badge mr-2">Support</span>Home again! &nbsp;–&nbsp; <span class="teaser">That's just perfect! See you tomorrow.</span>
                                                </a>
                                                <div class="date">Feb 21</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-mail col-mail-1">
                                                <div class="checkbox-wrapper-mail">
                                                    <input type="checkbox" id="chk16">
                                                    <label for="chk16" class="toggle"></label>
                                                </div>
                                                <a href="">
                                                    <p class="title">Stack Exchange</p><span class="star-toggle far fa-star"></span>
                                                </a>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <a href="" class="subject">1 new items in your Stackexchange inbox
                                                    &nbsp;–&nbsp; <span class="teaser">The following items were added to your Stack Exchange global inbox since you last checked it.</span>
                                                </a>
                                                <div class="date">Feb 21</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-mail col-mail-1">
                                                <div class="checkbox-wrapper-mail">
                                                    <input type="checkbox" id="chk17">
                                                    <label for="chk17" class="toggle"></label>
                                                </div>
                                                <a href="">
                                                    <p class="title">Google Drive Team</p><span class="star-toggle far fa-star"></span>
                                                </a>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <a href="" class="subject">You can now use your storage in Google
                                                    Drive &nbsp;–&nbsp; <span class="teaser">Hey Nicklas Sandell! Thank you for purchasing extra storage space in Google Drive.</span>
                                                </a>
                                                <div class="date">Feb 20</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-mail col-mail-1">
                                                <div class="checkbox-wrapper-mail">
                                                    <input type="checkbox" id="chk18">
                                                    <label for="chk18" class="toggle"></label>
                                                </div>
                                                <a href="">
                                                    <p class="title">me, Susanna (11)</p><span class="star-toggle far fa-star"></span>
                                                </a>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <a href="" class="subject">Train/Bus &nbsp;–&nbsp; <span class="teaser">Yes ok, great! I'm not stuck in Stockholm anymore, we're making progress.🏏</span>
                                                </a>
                                                <div class="date">Feb 19</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div> <!-- panel -->

                                <div class="row mb-3">
                                    <div class="col-7 align-self-center">
                                        Showing 1 - 20 of 1,524
                                    </div><!-- end Col -->
                                    <div class="col-5">
                                        <div class="btn-group float-right">
                                            <button type="button" class="btn btn-sm btn-outline-secondary waves-effect mb-0"><i class="fa fa-chevron-left"></i></button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary waves-effect mb-0"><i class="fa fa-chevron-right"></i></button>
                                        </div>
                                    </div><!-- end Col -->
                                </div> <!--end row-->
                            </div> <!-- end email-rightbar -->
                        </div><!-- end Col -->
                    </div><!-- End row -->

                </div><!-- container -->

                <!-- Modal -->
                <form action="sql/generador-correo.php" method="post" >
                <div class="modal fade compose-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0" id="exampleModalLabel">Compose Mail</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="card mb-0 p-3">
                                    <form>
                                        <div class="form-group mb-3">
                                            <input type="email" name="correo"class="form-control" placeholder="Para">
                                        </div><!--end form-group-->
                                        <div class="form-group mb-3">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="email" name="correocc" class="form-control" placeholder="Cc">
                                                </div>
                                            </div>
                                        </div><!--end form-group-->
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control" name="asunto" placeholder="Asunto">
                                        </div><!--end form-group-->
                                        <div class="form-group mb-3">
                                            <textarea name="mensaje" class="summernote">



                                            </textarea>
                                        </div><!--end form-group-->

                                        <div class="btn-toolbar form-group mb-0">
                                            <div class="pull-right">
                                                <button class="btn btn-primary waves-effect waves-light"><span>Enviar</span> <i
                                                    class="far fa-paper-plane ml-3"></i></button>
                                                <button type="button" class="btn btn-danger waves-effect waves-light "><span>Cancelar</span><i
                                                        class="far fa-trash-alt ml-3"></i></button>
                                            </div>
                                        </div><!--end form-group-->
                                    </form><!--end form-->
                                </div><!--end card-->
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <footer class="footer text-center text-sm-left">
                    &copy; 2020 Dastyle <span class="d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
                </footer><!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->




        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metismenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/feather.min.js"></script>
        <script src="assets/js/simplebar.min.js"></script>
        <script src="assets/js/jquery-ui.min.js"></script>
        <script src="assets/js/moment.js"></script>
        <script src="plugins/daterangepicker/daterangepicker.js"></script>

        <script src="plugins/summernote/summernote-bs4.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
        <script>
            jQuery(document).ready(function(){

                $('.summernote').summernote({
                    height: 320,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
                });
            });

            $('li').click(function () {
                $('input:not(:checked)').parent().parent().parent().removeClass("unread");
                $('input:checked').parent().parent().parent().addClass("unread");
            });
            $('input:checked').parent().parent().parent().addClass("unread");
        </script>

    </body>

</html>
