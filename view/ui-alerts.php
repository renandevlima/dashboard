<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Alerts | Hyper - Responsive Bootstrap 4 Admin Dashboard</title>
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Base UI</a></li>
                                            <li class="breadcrumb-item active">Alerts</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Alerts</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Default Alert</h4>
                                        <p class="text-muted font-14 mb-3">
                                            Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages.
                                            Alerts are available for any length of text, as well as an optional dismiss
                                            button. 
                                        </p>
                                        <p>
                                            For proper styling, use one of the eight
                                            <strong>required</strong> contextual classes (e.g.,
                                            <code>.alert-success</code>). For background color use class
                                            <code>.bg-* </code>, <code>.text-white </code>
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#default-alert-preview" data-toggle="tab" aria-expanded="false"
                                                    class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#default-alert-code" data-toggle="tab" aria-expanded="true"
                                                    class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->

                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="default-alert-preview">
                                                <div class="alert alert-primary" role="alert">
                                                    <strong>Primary - </strong> A simple primary alert—check it out!
                                                </div>
                                                <div class="alert alert-secondary" role="alert">
                                                    <strong>Secondary - </strong> A simple secondary alert—check it out!
                                                </div>
                                                <div class="alert alert-success" role="alert">
                                                    <strong>Success - </strong> A simple success alert—check it out!
                                                </div>
                                                <div class="alert alert-danger" role="alert">
                                                    <strong>Error - </strong> A simple danger alert—check it out!
                                                </div>
                                                <div class="alert alert-warning bg-warning text-white border-0"
                                                    role="alert">
                                                    <strong>Warning - </strong> A simple warning alert—check it out!
                                                </div>
                                                <div class="alert alert-info bg-info text-white border-0" role="alert">
                                                    <strong>Info - </strong> A simple info alert—check it out!
                                                </div>
                                                <div class="alert alert-light bg-light text-dark border-0" role="alert">
                                                    <strong>Light - </strong> A simple light alert—check it out!
                                                </div>
                                                <div class="alert alert-dark bg-dark text-white border-0 mb-0" role="alert">
                                                    <strong>Dark - </strong> A simple dark alert—check it out!
                                                </div>
                                            </div> <!-- end preview-->

                                            <div class="tab-pane" id="default-alert-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;alert alert-primary&quot; role=&quot;alert&quot;&gt;
                                                            &lt;strong&gt;Primary - &lt;/strong&gt; A simple primary alert&mdash;check it out!
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;alert alert-secondary&quot; role=&quot;alert&quot;&gt;
                                                            &lt;strong&gt;Secondary - &lt;/strong&gt; A simple secondary alert&mdash;check it out!
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;alert alert-success&quot; role=&quot;alert&quot;&gt;
                                                            &lt;strong&gt;Success - &lt;/strong&gt; A simple success alert&mdash;check it out!
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;alert alert-danger&quot; role=&quot;alert&quot;&gt;
                                                            &lt;strong&gt;Error - &lt;/strong&gt; A simple danger alert&mdash;check it out!
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;alert alert-warning bg-warning text-white border-0&quot; role=&quot;alert&quot;&gt;
                                                            &lt;strong&gt;Warning - &lt;/strong&gt; A simple warning alert&mdash;check it out!
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;alert alert-info bg-info text-white border-0&quot; role=&quot;alert&quot;&gt;
                                                            &lt;strong&gt;Info - &lt;/strong&gt; A simple info alert&mdash;check it out!
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;alert alert-light bg-light text-dark border-0&quot; role=&quot;alert&quot;&gt;
                                                            &lt;strong&gt;Light - &lt;/strong&gt; A simple light alert&mdash;check it out!
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;alert alert-dark bg-dark text-white border-0 mb-0&quot; role=&quot;alert&quot;&gt;
                                                            &lt;strong&gt;Dark - &lt;/strong&gt; A simple dark alert&mdash;check it out!
                                                        &lt;/div&gt; 
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Dismissing Alerts</h4>
                                        <p class="text-muted font-14 mb-3">
                                            Add a dismiss button and the <code>.alert-dismissible</code> class, which adds
                                            extra padding to the right of the alert
                                            and positions the <code>.close</code> button.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#dismissing-alerts-preview" data-toggle="tab" aria-expanded="false"
                                                    class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#dismissing-alerts-code" data-toggle="tab" aria-expanded="true"
                                                    class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="dismissing-alerts-preview">
                                                <div class="alert alert-primary alert-dismissible bg-primary text-white border-0 fade show"
                                                    role="alert">
                                                    <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <strong>Primary - </strong> A simple primary alert—check it out!
                                                </div>
                                                <div class="alert alert-secondary alert-dismissible bg-secondary text-white border-0 fade show"
                                                    role="alert">
                                                    <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <strong>Secondary - </strong> A simple secondary alert—check it out!
                                                </div>
                                                <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"
                                                    role="alert">
                                                    <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <strong>Success - </strong> A simple success alert—check it out!
                                                </div>
                                                <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"
                                                    role="alert">
                                                    <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <strong>Error - </strong> A simple danger alert—check it out!
                                                </div>
                                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <strong>Warning - </strong> A simple warning alert—check it out!
                                                </div>
                                                <div class="alert alert-info alert-dismissible fade show" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <strong>Info - </strong> A simple info alert—check it out!
                                                </div>
                                                <div class="alert alert-light alert-dismissible fade show" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <strong>Light - </strong> A simple light alert—check it out!
                                                </div>
                                                <div class="alert alert-dark alert-dismissible fade show mb-0" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <strong>Dark - </strong> A simple dark alert—check it out!
                                                </div>
                                            </div> <!-- end preview-->

                                            <div class="tab-pane" id="dismissing-alerts-code">
                                                <div class="highlight">
                                                    <pre class="mb-0">
                                                        <span class="html escape">
                                                            &lt;div class=&quot;alert alert-primary alert-dismissible bg-primary text-white border-0 fade show&quot; role=&quot;alert&quot;&gt;
                                                                &lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;
                                                                    &lt;span aria-hidden=&quot;true&quot;&gt;&amp;times;&lt;/span&gt;
                                                                &lt;/button&gt;
                                                                &lt;strong&gt;Primary - &lt;/strong&gt; A simple primary alert&mdash;check it out!
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;alert alert-secondary alert-dismissible bg-secondary text-white border-0 fade show&quot; role=&quot;alert&quot;&gt;
                                                                &lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;
                                                                    &lt;span aria-hidden=&quot;true&quot;&gt;&amp;times;&lt;/span&gt;
                                                                &lt;/button&gt;
                                                                &lt;strong&gt;Secondary - &lt;/strong&gt; A simple secondary alert&mdash;check it out!
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;alert alert-success alert-dismissible bg-success text-white border-0 fade show&quot; role=&quot;alert&quot;&gt;
                                                                &lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;
                                                                    &lt;span aria-hidden=&quot;true&quot;&gt;&amp;times;&lt;/span&gt;
                                                                &lt;/button&gt;
                                                                &lt;strong&gt;Success - &lt;/strong&gt; A simple success alert&mdash;check it out!
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;alert alert-danger alert-dismissible bg-danger text-white border-0 fade show&quot; role=&quot;alert&quot;&gt;
                                                                &lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;
                                                                    &lt;span aria-hidden=&quot;true&quot;&gt;&amp;times;&lt;/span&gt;
                                                                &lt;/button&gt;
                                                                &lt;strong&gt;Error - &lt;/strong&gt; A simple danger alert&mdash;check it out!
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;alert alert-warning alert-dismissible fade show&quot; role=&quot;alert&quot;&gt;
                                                                &lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;
                                                                    &lt;span aria-hidden=&quot;true&quot;&gt;&amp;times;&lt;/span&gt;
                                                                &lt;/button&gt;
                                                                &lt;strong&gt;Warning - &lt;/strong&gt; A simple warning alert&mdash;check it out!
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;alert alert-info alert-dismissible fade show&quot; role=&quot;alert&quot;&gt;
                                                                &lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;
                                                                    &lt;span aria-hidden=&quot;true&quot;&gt;&amp;times;&lt;/span&gt;
                                                                &lt;/button&gt;
                                                                &lt;strong&gt;Info - &lt;/strong&gt; A simple info alert&mdash;check it out!
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;alert alert-light alert-dismissible fade show&quot; role=&quot;alert&quot;&gt;
                                                                &lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;
                                                                    &lt;span aria-hidden=&quot;true&quot;&gt;&amp;times;&lt;/span&gt;
                                                                &lt;/button&gt;
                                                                &lt;strong&gt;Light - &lt;/strong&gt; A simple light alert&mdash;check it out!
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;alert alert-dark alert-dismissible fade show mb-0&quot; role=&quot;alert&quot;&gt;
                                                                &lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;
                                                                    &lt;span aria-hidden=&quot;true&quot;&gt;&amp;times;&lt;/span&gt;
                                                                &lt;/button&gt;
                                                                &lt;strong&gt;Dark - &lt;/strong&gt; A simple dark alert&mdash;check it out!
                                                            &lt;/div&gt;
                                                        </span>
                                                    </pre> <!-- end pre -->
                                                </div> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Custom Alerts</h4>
                                        <p class="text-muted font-14 mb-3">
                                            Display alert with transparent background and with contextual text color. Use
                                            classes
                                            <code>.bg-white</code>, and <code>.text-*</code>. E.g. <code>bg-white
                                                text-primary</code>.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#custom-alerts-preview" data-toggle="tab" aria-expanded="false"
                                                    class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#custom-alerts-code" data-toggle="tab" aria-expanded="true"
                                                    class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="custom-alerts-preview">
                                                <div class="alert alert-primary bg-white text-primary" role="alert">
                                                    This is a <strong>primary</strong> alert—check it out!
                                                </div>
                                                <div class="alert alert-secondary bg-white text-secondary" role="alert">
                                                    This is a <strong>secondary</strong> alert—check it out!
                                                </div>
                                                <div class="alert alert-success bg-white text-success" role="alert">
                                                    This is a <strong>success</strong> alert—check it out!
                                                </div>
                                                <div class="alert alert-info bg-white text-info" role="alert">
                                                    This is a <strong>info</strong> alert—check it out!
                                                </div>
                                                <div class="alert alert-warning bg-white text-warning" role="alert">
                                                    This is a <strong>warning</strong> alert—check it out!
                                                </div>
                                                <div class="alert alert-danger bg-white text-danger" role="alert">
                                                    This is a <strong>danger</strong> alert—check it out!
                                                </div>
                                                <div class="alert alert-light bg-white text-light" role="alert">
                                                    This is a <strong>light</strong> alert—check it out!
                                                </div>
                                                <div class="alert alert-dark bg-white text-dark mb-0" role="alert">
                                                    This is a <strong>dark</strong> alert—check it out!
                                                </div>
                                            </div>

                                            <div class="tab-pane" id="custom-alerts-code">
                                                <div class="highlight">
                                                    <pre class="mb-0">
                                                        <span class="html escape">
                                                            &lt;div class=&quot;alert alert-primary bg-white text-primary&quot; role=&quot;alert&quot;&gt;
                                                                This is a &lt;strong&gt;primary&lt;/strong&gt; alert&mdash;check it out!
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;alert alert-secondary bg-white text-secondary&quot; role=&quot;alert&quot;&gt;
                                                                This is a &lt;strong&gt;secondary&lt;/strong&gt; alert&mdash;check it out!
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;alert alert-success bg-white text-success&quot; role=&quot;alert&quot;&gt;
                                                                This is a &lt;strong&gt;success&lt;/strong&gt; alert&mdash;check it out!
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;alert alert-info bg-white text-info&quot; role=&quot;alert&quot;&gt;
                                                                This is a &lt;strong&gt;info&lt;/strong&gt; alert&mdash;check it out!
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;alert alert-warning bg-white text-warning&quot; role=&quot;alert&quot;&gt;
                                                                This is a &lt;strong&gt;warning&lt;/strong&gt; alert&mdash;check it out!
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;alert alert-danger bg-white text-danger&quot; role=&quot;alert&quot;&gt;
                                                                This is a &lt;strong&gt;danger&lt;/strong&gt; alert&mdash;check it out!
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;alert alert-light bg-white text-light&quot; role=&quot;alert&quot;&gt;
                                                                This is a &lt;strong&gt;light&lt;/strong&gt; alert&mdash;check it out!
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;alert alert-dark bg-white text-dark&quot; role=&quot;alert&quot;&gt;
                                                                This is a &lt;strong&gt;dark&lt;/strong&gt; alert&mdash;check it out!
                                                            &lt;/div&gt;
                                                        </span>
                                                    </pre> <!-- end pre -->
                                                </div> <!-- end highlight-->
                                            </div>
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Link Color</h4>
                                        <p class="text-muted font-14 mb-3">
                                            Use the <code>.alert-link</code> utility class to quickly provide matching
                                            colored links within any alert.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#link-color-preview" data-toggle="tab" aria-expanded="false"
                                                    class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#link-color-code" data-toggle="tab" aria-expanded="true"
                                                    class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="link-color-preview">
                                                <div class="alert alert-primary" role="alert">
                                                    A simple primary alert with <a href="#" class="alert-link">an example
                                                        link</a>. Give it a click if you like.
                                                </div>
                                                <div class="alert alert-secondary" role="alert">
                                                    A simple secondary alert with <a href="#" class="alert-link">an example
                                                        link</a>. Give it a click if you like.
                                                </div>
                                                <div class="alert alert-success" role="alert">
                                                    A simple success alert with <a href="#" class="alert-link">an example
                                                        link</a>. Give it a click if you like.
                                                </div>
                                                <div class="alert alert-danger" role="alert">
                                                    A simple danger alert with <a href="#" class="alert-link">an example
                                                        link</a>. Give it a click if you like.
                                                </div>
                                                <div class="alert alert-warning" role="alert">
                                                    A simple warning alert with <a href="#" class="alert-link">an example
                                                        link</a>. Give it a click if you like.
                                                </div>
                                                <div class="alert alert-info" role="alert">
                                                    A simple info alert with <a href="#" class="alert-link">an example
                                                        link</a>. Give it a click if you like.
                                                </div>
                                                <div class="alert alert-light" role="alert">
                                                    A simple light alert with <a href="#" class="alert-link">an example
                                                        link</a>. Give it a click if you like.
                                                </div>
                                                <div class="alert alert-dark" role="alert">
                                                    A simple dark alert with <a href="#" class="alert-link">an example
                                                        link</a>. Give it a click if you like.
                                                </div>
                                            </div>

                                            <div class="tab-pane" id="link-color-code">
                                                <div class="highlight">
                                                    <pre class="mb-0">
                                                        <span class="html escape">
                                                            &lt;div class=&quot;alert alert-primary&quot; role=&quot;alert&quot;&gt;
                                                                A simple primary alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;alert alert-secondary&quot; role=&quot;alert&quot;&gt;
                                                                A simple secondary alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;alert alert-success&quot; role=&quot;alert&quot;&gt;
                                                                A simple success alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;alert alert-danger&quot; role=&quot;alert&quot;&gt;
                                                                A simple danger alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;alert alert-warning&quot; role=&quot;alert&quot;&gt;
                                                                A simple warning alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;alert alert-info&quot; role=&quot;alert&quot;&gt;
                                                                A simple info alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;alert alert-light&quot; role=&quot;alert&quot;&gt;
                                                                A simple light alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;alert alert-dark&quot; role=&quot;alert&quot;&gt;
                                                                A simple dark alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
                                                            &lt;/div&gt;
                                                        </span>
                                                    </pre> <!-- end pre -->
                                                </div> <!-- end highlight-->
                                            </div>
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Icons with Alerts</h4>
                                        <p class="text-muted font-14 mb-3">
                                            You can also include additional elements like icons, heading, etc along side the actual message.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#icon-alerts-preview" data-toggle="tab" aria-expanded="false"
                                                    class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#icon-alerts-code" data-toggle="tab" aria-expanded="true"
                                                    class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="icon-alerts-preview">
                                                <div class="alert alert-success" role="alert">
                                                    <i class="dripicons-checkmark mr-2"></i> This is a
                                                    <strong>success</strong> alert - check it out!
                                                </div>
                                                <div class="alert alert-danger" role="alert">
                                                    <i class="dripicons-wrong mr-2"></i> This is a <strong>danger</strong>
                                                    alert - check it out!
                                                </div>
                                                <div class="alert alert-warning" role="alert">
                                                    <i class="dripicons-warning mr-2"></i> This is a
                                                    <strong>warning</strong> alert - check it out!
                                                </div>
                                                <div class="alert alert-info mb-0" role="alert">
                                                    <i class="dripicons-information mr-2"></i> This is a
                                                    <strong>info</strong> alert - check it out!
                                                </div>
                                            </div>

                                            <div class="tab-pane" id="icon-alerts-code">
                                                <div class="highlight">
                                                    <pre class="mb-0">
                                                        <span class="html escape">
                                                            &lt;div class=&quot;alert alert-success&quot; role=&quot;alert&quot;&gt;
                                                                &lt;i class=&quot;dripicons-checkmark mr-2&quot;&gt;&lt;/i&gt; This is a &lt;strong&gt;success&lt;/strong&gt; alert - check it out!
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;alert alert-danger&quot; role=&quot;alert&quot;&gt;
                                                                &lt;i class=&quot;dripicons-wrong mr-2&quot;&gt;&lt;/i&gt; This is a &lt;strong&gt;danger&lt;/strong&gt; alert - check it out!
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;alert alert-warning&quot; role=&quot;alert&quot;&gt;
                                                                &lt;i class=&quot;dripicons-warning mr-2&quot;&gt;&lt;/i&gt; This is a &lt;strong&gt;warning&lt;/strong&gt; alert - check it out!
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;alert alert-info&quot; role=&quot;alert&quot;&gt;
                                                                &lt;i class=&quot;dripicons-information mr-2&quot;&gt;&lt;/i&gt; This is a &lt;strong&gt;info&lt;/strong&gt; alert - check it out!
                                                            &lt;/div&gt;
                                                        </span>
                                                    </pre> <!-- end pre -->
                                                </div> <!-- end highlight-->
                                            </div>
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Additional content</h4>
                                        <p class="text-muted font-14 mb-3">
                                            Alerts can also contain additional HTML elements like headings, paragraphs and
                                            dividers.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#additional-content-preview" data-toggle="tab"
                                                    aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#additional-content-code" data-toggle="tab" aria-expanded="true"
                                                    class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="additional-content-preview">
                                                <div class="alert alert-success mb-0" role="alert">
                                                    <h4 class="alert-heading">Well done!</h4>
                                                    <p>Aww yeah, you successfully read this important alert message. This
                                                        example text is going to run a bit longer so that you can see how
                                                        spacing within an alert works with this kind of content.</p>
                                                    <hr>
                                                    <p class="mb-0">Whenever you need to, be sure to use margin utilities to
                                                        keep things nice and tidy.</p>
                                                </div>
                                            </div>

                                            <div class="tab-pane" id="additional-content-code">
                                                <div class="highlight">
                                                    <pre class="mb-0">
                                                        <span class="html escape">
                                                            &lt;div class=&quot;alert alert-success&quot; role=&quot;alert&quot;&gt;
                                                                &lt;h4 class=&quot;alert-heading&quot;&gt;Well done!&lt;/h4&gt;
                                                                &lt;p&gt;Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.&lt;/p&gt;
                                                                &lt;hr&gt;
                                                                &lt;p class=&quot;mb-0&quot;&gt;Whenever you need to, be sure to use margin utilities to keep things nice and tidy.&lt;/p&gt;
                                                            &lt;/div&gt;
                                                        </span>
                                                    </pre> <!-- end pre -->
                                                </div> <!-- end highlight-->
                                            </div>
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->
                        
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