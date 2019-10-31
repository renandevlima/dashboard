<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Dripicons | Hyper - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app-modern.min.css" rel="stylesheet" type="text/css" id="light-style" />
        <link href="assets/css/app-modern-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />

    </head>

    <body data-layout="detached" class="loading">

        <!-- Topbar Start -->
        <div class="navbar-custom topnav-navbar topnav-navbar-dark">
            <div class="container-fluid">

                <!-- LOGO -->
                <a href="index.html" class="topnav-logo">
                    <span class="topnav-logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="16">
                    </span>
                    <span class="topnav-logo-sm">
                        <img src="assets/images/logo_sm.png" alt="" height="16">
                    </span>
                </a>

                <ul class="list-unstyled topbar-right-menu float-right mb-0">

                    <li class="dropdown notification-list">
                        <a class="nav-link right-bar-toggle" href="javascript: void(0);">
                            <i class="dripicons-gear noti-icon"></i>
                        </a>
                    </li>
                    <li class="dropdown notification-list topbar-dropdown d-none d-lg-block">
                        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" id="topbar-languagedrop" href="#"
                            role="button" aria-haspopup="true" aria-expanded="false">
                            <img src="assets/images/flags/us.jpg" alt="user-image" class="mr-1" height="12"> <span
                                class="align-middle">English</span> <i class="mdi mdi-chevron-down"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu"
                            aria-labelledby="topbar-languagedrop">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="assets/images/flags/germany.jpg" alt="user-image" class="mr-1" height="12"> <span
                                    class="align-middle">German</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="assets/images/flags/italy.jpg" alt="user-image" class="mr-1" height="12"> <span
                                    class="align-middle">Italian</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="assets/images/flags/spain.jpg" alt="user-image" class="mr-1" height="12"> <span
                                    class="align-middle">Spanish</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="assets/images/flags/russia.jpg" alt="user-image" class="mr-1" height="12"> <span
                                    class="align-middle">Russian</span>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" id="topbar-notifydrop"
                            role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="dripicons-bell noti-icon"></i>
                            <span class="noti-icon-badge"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg"
                            aria-labelledby="topbar-notifydrop">

                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="m-0">
                                    <span class="float-right">
                                        <a href="javascript: void(0);" class="text-dark">
                                            <small>Clear All</small>
                                        </a>
                                    </span>Notification
                                </h5>
                            </div>

                            <div class="slimscroll" style="max-height: 230px;">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary">
                                        <i class="mdi mdi-comment-account-outline"></i>
                                    </div>
                                    <p class="notify-details">Caleb Flakelar commented on Admin
                                        <small class="text-muted">1 min ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info">
                                        <i class="mdi mdi-account-plus"></i>
                                    </div>
                                    <p class="notify-details">New user registered.
                                        <small class="text-muted">5 hours ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon">
                                        <img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" />
                                    </div>
                                    <p class="notify-details">Cristina Pride</p>
                                    <p class="text-muted mb-0 user-msg">
                                        <small>Hi, How are you? What about our next meeting</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary">
                                        <i class="mdi mdi-comment-account-outline"></i>
                                    </div>
                                    <p class="notify-details">Caleb Flakelar commented on Admin
                                        <small class="text-muted">4 days ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon">
                                        <img src="assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" />
                                    </div>
                                    <p class="notify-details">Karen Robinson</p>
                                    <p class="text-muted mb-0 user-msg">
                                        <small>Wow ! this admin looks good and awesome design</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info">
                                        <i class="mdi mdi-heart"></i>
                                    </div>
                                    <p class="notify-details">Carlos Crouch liked
                                        <b>Admin</b>
                                        <small class="text-muted">13 days ago</small>
                                    </p>
                                </a>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                View All
                            </a>

                        </div>
                    </li>
            
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" id="topbar-userdrop"
                            href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="account-user-avatar">
                                <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                            </span>
                            <span>
                                <span class="account-user-name">Dominic Keller</span>
                                <span class="account-position">Founder</span>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown"
                            aria-labelledby="topbar-userdrop">
                            <!-- item-->
                            <div class=" dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-circle mr-1"></i>
                                <span>My Account</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-edit mr-1"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-lifebuoy mr-1"></i>
                                <span>Support</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-lock-outline mr-1"></i>
                                <span>Lock Screen</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-logout mr-1"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>

                </ul>
                <a class="button-menu-mobile disable-btn">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <div class="app-search">
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="mdi mdi-magnify"></span>
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end Topbar -->
        
        <!-- Start Content-->
        <div class="container-fluid">

            <!-- Begin page -->
            <div class="wrapper">

                <!-- ========== Left Sidebar Start ========== -->
                <div class="left-side-menu left-side-menu-detached">

                    <div class="leftbar-user">
                        <a href="javascript: void(0);">
                            <img src="assets/images/users/avatar-1.jpg" alt="user-image" height="42" class="rounded-circle shadow-sm">
                            <span class="leftbar-user-name">Dominic Keller</span>
                        </a>
                    </div>

                    <!--- Sidemenu -->
                    <ul class="metismenu side-nav">

                        <li class="side-nav-title side-nav-item">Navigation</li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <span class="badge badge-info badge-pill float-right">4</span>
                                <span> Dashboards </span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="dashboard-analytics.html">Analytics</a>
                                </li>
                                <li>
                                    <a href="dashboard-crm.html">CRM</a>
                                </li>
                                <li>
                                    <a href="index.html">Ecommerce</a>
                                </li>
                                <li>
                                    <a href="dashboard-projects.html">Projects</a>
                                </li>
                            </ul>
                        </li>

                        <li class="side-nav-title side-nav-item">Apps</li>

                        <li class="side-nav-item">
                            <a href="apps-calendar.html" class="side-nav-link">
                                <i class="uil-calender"></i>
                                <span> Calendar </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="apps-chat.html" class="side-nav-link">
                                <i class="uil-comments-alt"></i>
                                <span> Chat </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-store"></i>
                                <span> Ecommerce </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="apps-ecommerce-products.html">Products</a>
                                </li>
                                <li>
                                    <a href="apps-ecommerce-products-details.html">Products Details</a>
                                </li>
                                <li>
                                    <a href="apps-ecommerce-orders.html">Orders</a>
                                </li>
                                <li>
                                    <a href="apps-ecommerce-orders-details.html">Order Details</a>
                                </li>
                                <li>
                                    <a href="apps-ecommerce-customers.html">Customers</a>
                                </li>
                                <li>
                                    <a href="apps-ecommerce-shopping-cart.html">Shopping Cart</a>
                                </li>
                                <li>
                                    <a href="apps-ecommerce-checkout.html">Checkout</a>
                                </li>
                                <li>
                                    <a href="apps-ecommerce-sellers.html">Sellers</a>
                                </li>
                            </ul>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-envelope"></i>
                                <span> Email </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="apps-email-inbox.html">Inbox</a>
                                </li>
                                <li>
                                    <a href="apps-email-read.html">Read Email</a>
                                </li>
                            </ul>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-briefcase"></i>
                                <span> Projects </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="apps-projects-list.html">List</a>
                                </li>
                                <li>
                                    <a href="apps-projects-details.html">Details</a>
                                </li>
                                <li>
                                    <a href="apps-projects-gantt.html">Gantt <span class="badge badge-pill badge-dark-lighten font-10 float-right">New</span></a>
                                </li>
                                <li>
                                    <a href="apps-projects-add.html">Create Project <span class="badge badge-pill badge-success-lighten font-10 float-right">New</span></a>
                                </li>
                            </ul>
                        </li>

                        <li class="side-nav-item">
                            <a href="apps-social-feed.html" class="side-nav-link">
                                <i class="uil-rss"></i>
                                <span> Social Feed </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-clipboard-alt"></i>
                                <span> Tasks </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="apps-tasks.html">List</a>
                                </li>
                                <li>
                                    <a href="apps-tasks-details.html">Details</a>
                                </li>
                                <li>
                                    <a href="apps-kanban.html">Kanban Board</a>
                                </li>
                            </ul>
                        </li>

                        <li class="side-nav-title side-nav-item">Custom</li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-copy-alt"></i>
                                <span> Pages </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="pages-profile.html">Profile</a>
                                </li>
                                <li>
                                    <a href="pages-profile-2.html">Profile 2</a>
                                </li>
                                <li>
                                    <a href="pages-invoice.html">Invoice</a>
                                </li>
                                <li>
                                    <a href="pages-faq.html">FAQ</a>
                                </li>
                                <li>
                                    <a href="pages-pricing.html">Pricing</a>
                                </li>
                                <li>
                                    <a href="pages-maintenance.html">Maintenance</a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="javascript: void(0);" aria-expanded="false">Authentication
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="side-nav-third-level" aria-expanded="false">
                                        <li>
                                            <a href="pages-login.html">Login</a>
                                        </li>
                                        <li>
                                            <a href="pages-login-2.html">Login 2</a>
                                        </li>
                                        <li>
                                            <a href="pages-register.html">Register</a>
                                        </li>
                                        <li>
                                            <a href="pages-register-2.html">Register 2</a>
                                        </li>
                                        <li>
                                            <a href="pages-logout.html">Logout</a>
                                        </li>
                                        <li>
                                            <a href="pages-logout-2.html">Logout 2</a>
                                        </li>
                                        <li>
                                            <a href="pages-recoverpw.html">Recover Password</a>
                                        </li>
                                        <li>
                                            <a href="pages-recoverpw-2.html">Recover Password 2</a>
                                        </li>
                                        <li>
                                            <a href="pages-lock-screen.html">Lock Screen</a>
                                        </li>
                                        <li>
                                            <a href="pages-lock-screen-2.html">Lock Screen 2</a>
                                        </li>
                                        <li>
                                            <a href="pages-confirm-mail.html">Confirm Mail</a>
                                        </li>
                                        <li>
                                            <a href="pages-confirm-mail-2.html">Confirm Mail 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="side-nav-item">
                                    <a href="javascript: void(0);" aria-expanded="false">Error
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="side-nav-third-level" aria-expanded="false">
                                        <li>
                                            <a href="pages-404.html">Error 404</a>
                                        </li>
                                        <li>
                                            <a href="pages-404-alt.html">Error 404-alt</a>
                                        </li>
                                        <li>
                                            <a href="pages-500.html">Error 500</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="pages-starter.html">Starter Page</a>
                                </li>
                                <li>
                                    <a href="pages-preloader.html">With Preloader</a>
                                </li>
                                <li>
                                    <a href="pages-timeline.html">Timeline</a>
                                </li>
                            </ul>
                        </li>

                        <li class="side-nav-item">
                            <a href="landing.html" target="_blank" class="side-nav-link">
                                <i class="uil-globe"></i>
                                <span class="badge badge-light float-right">New</span>
                                <span> Landing </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-window"></i>
                                <span> Layouts </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="layouts-horizontal.html">Horizontal</a>
                                </li>
                                <li>
                                    <a href="layouts-vertical.html">Vertical</a>
                                </li>
                            </ul>
                        </li>
        
                        <li class="side-nav-title side-nav-item mt-1">Components</li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-box"></i>
                                <span> Base UI </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="ui-accordions.html">Accordions</a>
                                </li>
                                <li>
                                    <a href="ui-alerts.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="ui-avatars.html">Avatars</a>
                                </li>
                                <li>
                                    <a href="ui-badges.html">Badges</a>
                                </li>
                                <li>
                                    <a href="ui-breadcrumb.html">Breadcrumb</a>
                                </li>
                                <li>
                                    <a href="ui-buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="ui-cards.html">Cards</a>
                                </li>
                                <li>
                                    <a href="ui-carousel.html">Carousel</a>
                                </li>
                                <li>
                                    <a href="ui-dropdowns.html">Dropdowns</a>
                                </li>
                                <li>
                                    <a href="ui-embed-video.html">Embed Video</a>
                                </li>
                                <li>
                                    <a href="ui-grid.html">Grid</a>
                                </li>
                                <li>
                                    <a href="ui-list-group.html">List Group</a>
                                </li>
                                <li>
                                    <a href="ui-media-object.html">Media Object</a>
                                </li>
                                <li>
                                    <a href="ui-modals.html">Modals</a>
                                </li>
                                <li>
                                    <a href="ui-notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="ui-pagination.html">Pagination</a>
                                </li>
                                <li>
                                    <a href="ui-popovers.html">Popovers</a>
                                </li>
                                <li>
                                    <a href="ui-progress.html">Progress</a>
                                </li>
                                <li>
                                    <a href="ui-ribbons.html">Ribbons</a>
                                </li>
                                <li>
                                    <a href="ui-spinners.html">Spinners</a>
                                </li>
                                <li>
                                    <a href="ui-tabs.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="ui-tooltips.html">Tooltips</a>
                                </li>
                                <li>
                                    <a href="ui-typography.html">Typography</a>
                                </li>
                            </ul>
                        </li>
        
                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-package"></i>
                                <span> Extended UI </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="extended-dragula.html">Dragula</a>
                                </li>
                                <li>
                                    <a href="extended-range-slider.html">Range Slider</a>
                                </li>
                                <li>
                                    <a href="extended-ratings.html">Ratings</a>
                                </li>
                                <li>
                                    <a href="extended-scrollbar.html">Scrollbar</a>
                                </li>
                                <li>
                                    <a href="extended-scrollspy.html">Scrollspy</a>
                                </li>
                            </ul>
                        </li>

                        <li class="side-nav-item">
                            <a href="widgets.html" class="side-nav-link">
                                <i class="uil-layer-group"></i>
                                <span> Widgets </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-streering"></i>
                                <span> Icons </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="icons-dripicons.html">Dripicons</a>
                                </li>
                                <li>
                                    <a href="icons-mdi.html">Material Design</a>
                                </li>
                                <li>
                                    <a href="icons-unicons.html">Unicons</a>
                                </li>
                            </ul>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-document-layout-center"></i>
                                <span> Forms </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="form-elements.html">Basic Elements</a>
                                </li>
                                <li>
                                    <a href="form-advanced.html">Form Advanced</a>
                                </li>
                                <li>
                                    <a href="form-validation.html">Validation</a>
                                </li>
                                <li>
                                    <a href="form-wizard.html">Wizard</a>
                                </li>
                                <li>
                                    <a href="form-fileuploads.html">File Uploads</a>
                                </li>
                                <li>
                                    <a href="form-editors.html">Editors</a>
                                </li>
                            </ul>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-chart"></i>
                                <span> Charts </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li class="side-nav-item">
                                    <a href="javascript: void(0);" aria-expanded="false">Apex Charts
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="side-nav-third-level" aria-expanded="false">
                                        <li>
                                            <a href="charts-apex-area.html">Area</a>
                                        </li>
                                        <li>
                                            <a href="charts-apex-bar.html">Bar</a>
                                        </li>
                                        <li>
                                            <a href="charts-apex-bubble.html">Bubble</a>
                                        </li>
                                        <li>
                                            <a href="charts-apex-candlestick.html">Candlestick</a>
                                        </li>
                                        <li>
                                            <a href="charts-apex-column.html">Column</a>
                                        </li>
                                        <li>
                                            <a href="charts-apex-heatmap.html">Heatmap</a>
                                        </li>
                                        <li>
                                            <a href="charts-apex-line.html">Line</a>
                                        </li>
                                        <li>
                                            <a href="charts-apex-mixed.html">Mixed</a>
                                        </li>
                                        <li>
                                            <a href="charts-apex-pie.html">Pie</a>
                                        </li>
                                        <li>
                                            <a href="charts-apex-radar.html">Radar</a>
                                        </li>
                                        <li>
                                            <a href="charts-apex-radialbar.html">RadialBar</a>
                                        </li>
                                        <li>
                                            <a href="charts-apex-scatter.html">Scatter</a>
                                        </li>
                                        <li>
                                            <a href="charts-apex-sparklines.html">Sparklines</a>
                                        </li>
                        
                                    </ul>
                                </li>
                                <li>
                                    <a href="charts-brite.html">Britecharts</a>
                                </li>
                                <li>
                                    <a href="charts-chartjs.html">Chartjs</a>
                                </li>
                                <li>
                                    <a href="charts-sparkline.html">Sparklines</a>
                                </li>
                            </ul>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-table"></i>
                                <span> Tables </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="tables-basic.html">Basic Tables</a>
                                </li>
                                <li>
                                    <a href="tables-datatable.html">Data Tables</a>
                                </li>
                            </ul>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-location-point"></i>
                                <span> Maps </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="maps-google.html">Google Maps</a>
                                </li>
                                <li>
                                    <a href="maps-vector.html">Vector Maps</a>
                                </li>
                            </ul>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="uil-folder-plus"></i>
                                <span> Multi Level </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li class="side-nav-item">
                                    <a href="javascript: void(0);" aria-expanded="false">Second Level
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="side-nav-third-level" aria-expanded="false">
                                        <li>
                                            <a href="javascript: void(0);">Item 1</a>
                                        </li>
                                        <li>
                                            <a href="javascript: void(0);">Item 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="side-nav-item">
                                    <a href="javascript: void(0);" aria-expanded="false">Third Level
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="side-nav-third-level" aria-expanded="false">
                                        <li>
                                            <a href="javascript: void(0);">Item 1</a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="javascript: void(0);" aria-expanded="false">Item 2
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <ul class="side-nav-forth-level" aria-expanded="false">
                                                <li>
                                                    <a href="javascript: void(0);">Item 2.1</a>
                                                </li>
                                                <li>
                                                    <a href="javascript: void(0);">Item 2.2</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
        
                    </ul>

                    <!-- Help Box -->
                    <div class="help-box text-center">
                        <a href="javascript: void(0);" class="float-right close-btn text-body">
                            <i class="mdi mdi-close"></i>
                        </a>
                        <img src="assets/images/help-icon.svg" height="90" alt="Helper Icon Image" />
                        <h5 class="mt-3">Unlimited Access</h5>
                        <p class="mb-3">Upgrade to plan to get access to unlimited reports</p>
                        <a href="javascript: void(0);" class="btn btn-outline-primary btn-sm">Upgrade</a>
                    </div>
                    <!-- end Help Box -->
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>
                    <!-- Sidebar -left -->

                </div>
                <!-- Left Sidebar End -->

                <div class="content-page">
                    <div class="content">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Icons</a></li>
                                            <li class="breadcrumb-item active">Dripicons</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Dripicons</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">

                                    <div class="card-body">
                                        <h4 class="m-t-0 header-title">Examples</h4>
                                        <p class="text-muted font-14">Use Class <code>&lt;i class="dripicons-alarm">&lt;/i></code></p>

                                        <div class="row icons-list-demo">
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-alarm"></i> dripicons-alarm
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-align-center"></i> dripicons-align-center
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-align-justify"></i> dripicons-align-justify
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-align-left"></i> dripicons-align-left
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-align-right"></i> dripicons-align-right
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-anchor"></i> dripicons-anchor
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-archive"></i> dripicons-archive
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-arrow-down"></i> dripicons-arrow-down
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-arrow-left"></i> dripicons-arrow-left
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-arrow-right"></i> dripicons-arrow-right
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-arrow-thin-down"></i> dripicons-arrow-thin-down
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-arrow-thin-left"></i> dripicons-arrow-thin-left
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-arrow-thin-right"></i> dripicons-arrow-thin-right
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-arrow-thin-up"></i> dripicons-arrow-thin-up
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-arrow-up"></i> dripicons-arrow-up
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-article"></i> dripicons-article
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-backspace"></i> dripicons-backspace
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-basket"></i> dripicons-basket
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-basketball"></i> dripicons-basketball
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-battery-empty"></i> dripicons-battery-empty
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-battery-full"></i> dripicons-battery-full
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-battery-low"></i> dripicons-battery-low
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-battery-medium"></i> dripicons-battery-medium
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-bell"></i> dripicons-bell
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-blog"></i> dripicons-blog
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-bluetooth"></i> dripicons-bluetooth
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-bold"></i> dripicons-bold
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-bookmark"></i> dripicons-bookmark
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-bookmarks"></i> dripicons-bookmarks
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-box"></i> dripicons-box
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-briefcase"></i> dripicons-briefcase
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-brightness-low"></i> dripicons-brightness-low
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-brightness-max"></i> dripicons-brightness-max
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-brightness-medium"></i> dripicons-brightness-medium
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-broadcast"></i> dripicons-broadcast
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-browser"></i> dripicons-browser
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-browser-upload"></i> dripicons-browser-upload
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-brush"></i> dripicons-brush
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-calendar"></i> dripicons-calendar
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-camcorder"></i> dripicons-camcorder
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-camera"></i> dripicons-camera
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-card"></i> dripicons-card
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-cart"></i> dripicons-cart
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-checklist"></i> dripicons-checklist
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-checkmark"></i> dripicons-checkmark
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-chevron-down"></i> dripicons-chevron-down
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-chevron-left"></i> dripicons-chevron-left
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-chevron-right"></i> dripicons-chevron-right
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-chevron-up"></i> dripicons-chevron-up
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-clipboard"></i> dripicons-clipboard
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-clock"></i> dripicons-clock
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-clockwise"></i> dripicons-clockwise
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-cloud"></i> dripicons-cloud
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-cloud-download"></i> dripicons-cloud-download
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-cloud-upload"></i> dripicons-cloud-upload
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-code"></i> dripicons-code
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-contract"></i> dripicons-contract
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-contract-2"></i> dripicons-contract-2
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-conversation"></i> dripicons-conversation
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-copy"></i> dripicons-copy
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-crop"></i> dripicons-crop
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-cross"></i> dripicons-cross
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-crosshair"></i> dripicons-crosshair
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-cutlery"></i> dripicons-cutlery
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-device-desktop"></i> dripicons-device-desktop
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-device-mobile"></i> dripicons-device-mobile
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-device-tablet"></i> dripicons-device-tablet
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-direction"></i> dripicons-direction
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-disc"></i> dripicons-disc
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-document"></i> dripicons-document
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-document-delete"></i> dripicons-document-delete
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-document-edit"></i> dripicons-document-edit
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-document-new"></i> dripicons-document-new
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-document-remove"></i> dripicons-document-remove
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-dot"></i> dripicons-dot
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-dots-2"></i> dripicons-dots-2
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-dots-3"></i> dripicons-dots-3
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-download"></i> dripicons-download
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-duplicate"></i> dripicons-duplicate
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-enter"></i> dripicons-enter
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-exit"></i> dripicons-exit
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-expand"></i> dripicons-expand
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-expand-2"></i> dripicons-expand-2
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-experiment"></i> dripicons-experiment
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-export"></i> dripicons-export
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-feed"></i> dripicons-feed
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-flag"></i> dripicons-flag
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-flashlight"></i> dripicons-flashlight
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-folder"></i> dripicons-folder
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-folder-open"></i> dripicons-folder-open
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-forward"></i> dripicons-forward
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-gaming"></i> dripicons-gaming
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-gear"></i> dripicons-gear
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-graduation"></i> dripicons-graduation
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-graph-bar"></i> dripicons-graph-bar
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-graph-line"></i> dripicons-graph-line
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-graph-pie"></i> dripicons-graph-pie
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-headset"></i> dripicons-headset
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-heart"></i> dripicons-heart
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-help"></i> dripicons-help
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-home"></i> dripicons-home
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-hourglass"></i> dripicons-hourglass
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-inbox"></i> dripicons-inbox
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-information"></i> dripicons-information
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-italic"></i> dripicons-italic
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-jewel"></i> dripicons-jewel
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-lifting"></i> dripicons-lifting
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-lightbulb"></i> dripicons-lightbulb
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-link"></i> dripicons-link
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-link-broken"></i> dripicons-link-broken
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-list"></i> dripicons-list
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-loading"></i> dripicons-loading
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-location"></i> dripicons-location
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-lock"></i> dripicons-lock
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-lock-open"></i> dripicons-lock-open
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-mail"></i> dripicons-mail
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-map"></i> dripicons-map
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-media-loop"></i> dripicons-media-loop
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-media-next"></i> dripicons-media-next
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-media-pause"></i> dripicons-media-pause
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-media-play"></i> dripicons-media-play
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-media-previous"></i> dripicons-media-previous
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-media-record"></i> dripicons-media-record
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-media-shuffle"></i> dripicons-media-shuffle
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-media-stop"></i> dripicons-media-stop
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-medical"></i> dripicons-medical
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-menu"></i> dripicons-menu
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-message"></i> dripicons-message
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-meter"></i> dripicons-meter
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-microphone"></i> dripicons-microphone
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-minus"></i> dripicons-minus
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-monitor"></i> dripicons-monitor
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-move"></i> dripicons-move
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-music"></i> dripicons-music
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-network-1"></i> dripicons-network-1
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-network-2"></i> dripicons-network-2
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-network-3"></i> dripicons-network-3
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-network-4"></i> dripicons-network-4
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-network-5"></i> dripicons-network-5
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-pamphlet"></i> dripicons-pamphlet
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-paperclip"></i> dripicons-paperclip
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-pencil"></i> dripicons-pencil
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-phone"></i> dripicons-phone
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-photo"></i> dripicons-photo
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-photo-group"></i> dripicons-photo-group
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-pill"></i> dripicons-pill
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-pin"></i> dripicons-pin
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-plus"></i> dripicons-plus
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-power"></i> dripicons-power
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-preview"></i> dripicons-preview
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-print"></i> dripicons-print
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-pulse"></i> dripicons-pulse
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-question"></i> dripicons-question
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-reply"></i> dripicons-reply
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-reply-all"></i> dripicons-reply-all
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-return"></i> dripicons-return
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-retweet"></i> dripicons-retweet
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-rocket"></i> dripicons-rocket
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-scale"></i> dripicons-scale
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-search"></i> dripicons-search
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-shopping-bag"></i> dripicons-shopping-bag
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-skip"></i> dripicons-skip
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-stack"></i> dripicons-stack
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-star"></i> dripicons-star
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-stopwatch"></i> dripicons-stopwatch
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-store"></i> dripicons-store
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-suitcase"></i> dripicons-suitcase
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-swap"></i> dripicons-swap
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-tag"></i> dripicons-tag
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-tag-delete"></i> dripicons-tag-delete
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-tags"></i> dripicons-tags
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-thumbs-down"></i> dripicons-thumbs-down
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-thumbs-up"></i> dripicons-thumbs-up
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-ticket"></i> dripicons-ticket
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-time-reverse"></i> dripicons-time-reverse
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-to-do"></i> dripicons-to-do
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-toggles"></i> dripicons-toggles
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-trash"></i> dripicons-trash
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-trophy"></i> dripicons-trophy
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-upload"></i> dripicons-upload
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-user"></i> dripicons-user
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-user-group"></i> dripicons-user-group
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-user-id"></i> dripicons-user-id
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-vibrate"></i> dripicons-vibrate
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-view-apps"></i> dripicons-view-apps
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-view-list"></i> dripicons-view-list
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-view-list-large"></i> dripicons-view-list-large
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-view-thumb"></i> dripicons-view-thumb
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-volume-full"></i> dripicons-volume-full
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-volume-low"></i> dripicons-volume-low
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-volume-medium"></i> dripicons-volume-medium
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-volume-off"></i> dripicons-volume-off
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-wallet"></i> dripicons-wallet
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-warning"></i> dripicons-warning
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-web"></i> dripicons-web
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-weight"></i> dripicons-weight
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-wifi"></i> dripicons-wifi
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-wrong"></i> dripicons-wrong
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-zoom-in"></i> dripicons-zoom-in
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <i class="dripicons-zoom-out"></i> dripicons-zoom-out
                                            </div>
            
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        
                    </div> <!-- End Content -->

                    <!-- Footer Start -->
                    <footer class="footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                    2018 - 2019 © Hyper - Coderthemes.com
                                </div>
                                <div class="col-md-6">
                                    <div class="text-md-right footer-links d-none d-md-block">
                                        <a href="javascript: void(0);">About</a>
                                        <a href="javascript: void(0);">Support</a>
                                        <a href="javascript: void(0);">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- end Footer -->

                </div> <!-- content-page -->

            </div> <!-- end wrapper-->
        </div>
        <!-- END Container -->


        <!-- Right Sidebar -->
        <div class="right-bar">

            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="dripicons-cross noti-icon"></i>
                </a>
                <h5 class="m-0">Settings</h5>
            </div>

            <div class="slimscroll-menu rightbar-content">

                <div class="p-3">
                    <div class="alert alert-warning" role="alert">
                        <strong>Customize </strong> the overall color scheme, sidebar menu, etc. Note that, Hyper stores the
                        preferences
                        in local storage.
                    </div>

                    <!-- Settings -->
                    <h5 class="mt-3">Color Scheme</h5>
                    <hr class="mt-1" />

                    <div class="custom-control custom-switch mb-1">
                        <input type="radio" class="custom-control-input" name="color-scheme-mode" value="light"
                            id="light-mode-check" checked />
                        <label class="custom-control-label" for="light-mode-check">Light Mode</label>
                    </div>

                    <div class="custom-control custom-switch mb-1">
                        <input type="radio" class="custom-control-input" name="color-scheme-mode" value="dark"
                            id="dark-mode-check" />
                        <label class="custom-control-label" for="dark-mode-check">Dark Mode</label>
                    </div>

                    <!-- Left Sidebar-->
                    <h5 class="mt-4">Left Sidebar</h5>
                    <hr class="mt-1" />

                    <div class="custom-control custom-switch mb-1">
                        <input type="radio" class="custom-control-input" name="compact" value="fixed" id="fixed-check"
                            checked />
                        <label class="custom-control-label" for="fixed-check">Scrollable</label>
                    </div>

                    <div class="custom-control custom-switch mb-1">
                        <input type="radio" class="custom-control-input" name="compact" value="condensed"
                            id="condensed-check" />
                        <label class="custom-control-label" for="condensed-check">Condensed</label>
                    </div>

                    <button class="btn btn-primary btn-block mt-4" id="resetBtn">Reset to Default</button>

                    <a href="https://themes.getbootstrap.com/product/hyper-responsive-admin-dashboard-template/"
                        class="btn btn-danger btn-block mt-3" target="_blank"><i class="mdi mdi-basket mr-1"></i> Purchase
                        Now</a>
                </div> <!-- end padding-->

            </div>
        </div>

        <div class="rightbar-overlay"></div>
        <!-- /Right-bar -->


        <!-- bundle -->
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>
        
    </body>
</html>