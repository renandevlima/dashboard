<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Dropdowns | Hyper - Responsive Bootstrap 4 Admin Dashboard</title>
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
                                            <li class="breadcrumb-item active">Dropdowns</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Dropdowns</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Single button dropdowns</h4>
                                        <p class="text-muted font-14">
                                            Any single <code
                                                >.btn</code> can be turned into a dropdown
                                            toggle with some markup changes. Here’s how you can put them to work
                                            with either <code>&lt;button&gt;</code>
                                            elements:
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#single-button-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#single-button-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="single-button-preview">
                                                <div class="row">
                                                    <div class="col-auto">
                                                        <div class="dropdown">
                                                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Dropdown button
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                    <div class="col-auto">
                                                        <div class="dropdown">
                                                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Dropdown link
                                                            </a>
                                                            
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="single-button-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Default Drodown --&gt;
                                                        &lt;div class=&quot;dropdown&quot;&gt;
                                                            &lt;button class=&quot;btn btn-light dropdown-toggle&quot; type=&quot;button&quot; id=&quot;dropdownMenuButton&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                                Dropdown button
                                                            &lt;/button&gt;
                                                            &lt;div class=&quot;dropdown-menu&quot; aria-labelledby=&quot;dropdownMenuButton&quot;&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;!-- Link with Dropdown --&gt;
                                                        &lt;div class=&quot;dropdown&quot;&gt;
                                                            &lt;a class=&quot;btn btn-secondary dropdown-toggle&quot; href=&quot;#&quot; role=&quot;button&quot; id=&quot;dropdownMenuLink&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                                Dropdown link
                                                            &lt;/a&gt;
                                                            
                                                            &lt;div class=&quot;dropdown-menu&quot; aria-labelledby=&quot;dropdownMenuLink&quot;&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Variant</h4>
                                        <p class="text-muted font-14">The best part is you can do this with any button variant, too:</p>
                        
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#variant-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#variant-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="variant-preview">
                                                <div class="btn-group mb-2">
                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Primary</button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div><!-- /btn-group -->
                                                <div class="btn-group mb-2">
                                                    <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Secondary</button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div><!-- /btn-group -->
                                                <div class="btn-group mb-2">
                                                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Success</button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div><!-- /btn-group -->
                                                <div class="btn-group mb-2">
                                                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Info</button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div><!-- /btn-group -->
                                                <div class="btn-group mb-2">
                                                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Warning</button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div><!-- /btn-group -->
                                                <div class="btn-group mb-2">
                                                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Danger</button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div><!-- /btn-group -->
        
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="variant-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Light --&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light dropdown-toggle&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Light&lt;/button&gt;
                                                        &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                            &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;!-- Secondary --&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary dropdown-toggle&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Secondary&lt;/button&gt;
                                                        &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                            &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                                                        &lt;/div&gt;
                                                        
                                                        
                                                        &lt;!-- Primary --&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary dropdown-toggle&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Primary&lt;/button&gt;
                                                        &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                            &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;!-- Success --&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-success dropdown-toggle&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Success&lt;/button&gt;
                                                        &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                            &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;!-- Info --&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-info dropdown-toggle&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Info&lt;/button&gt;
                                                        &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                            &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;!-- Warning --&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-warning dropdown-toggle&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Warning&lt;/button&gt;
                                                        &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                            &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;!-- Danger --&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-danger dropdown-toggle&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Danger&lt;/button&gt;
                                                        &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                            &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;!-- Dark --&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-dark dropdown-toggle&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Dark&lt;/button&gt;
                                                        &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                            &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Animated Dropdown</h4>
                                        <p class="text-muted font-14">
                                                Add <code>.dropdown-menu-animated</code>
                                                to a <code>.dropdown-menu</code> to have animated dropdown menu.</p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#animated-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#animated-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="animated-preview">
                                                <div class="dropdown">
                                                    <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Animated Dropdown
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-animated">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </div>

                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="animated-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;dropdown&quot;&gt;
                                                            &lt;button class=&quot;btn btn-light dropdown-toggle&quot; type=&quot;button&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                                Animated Dropdown
                                                            &lt;/button&gt;
                                                            &lt;div class=&quot;dropdown-menu dropdown-menu-animated&quot;&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Dropup variation</h4>
                                        <p class="text-muted font-14">Trigger dropdown menus above elements
                                                by adding <code>.dropup</code> to the parent
                                                element.</p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#dropup-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#dropup-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="dropup-preview">
                                                <!-- Default dropup button -->
                                                <div class="btn-group dropup">
                                                    <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropup</button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
    
                                                <!-- Split dropup button -->
                                                <div class="btn-group dropup">
                                                    <button type="button" class="btn btn-light">
                                                        Split dropup
                                                    </button>
                                                    <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                            
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="dropup-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Default dropup button --&gt;
                                                        &lt;div class=&quot;btn-group dropup&quot;&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light dropdown-toggle&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Dropup&lt;/button&gt;
                                                            &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
                                                                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
            
                                                        &lt;!-- Split dropup button --&gt;
                                                        &lt;div class=&quot;btn-group dropup&quot;&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;
                                                                Split dropup
                                                            &lt;/button&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light dropdown-toggle&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                                &lt;span class=&quot;sr-only&quot;&gt;Toggle Dropdown&lt;/span&gt;
                                                            &lt;/button&gt;
                                                            &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
                                                                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Dropright variation</h4>
                                        <p class="text-muted font-14">Trigger dropdown menus at the right of the elements by adding <code>.dropright</code> to the parent element.</p>
                        
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#dropright-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#dropright-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="dropright-preview">
                                                <!-- Default dropright button -->
                                                <div class="btn-group mb-2 dropright">
                                                    <button type="button" class="btn btn-primary   dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropright
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
    
                                                <!-- Split dropright button -->
                                                <div class="btn-group mb-2 dropright">
                                                    <button type="button" class="btn btn-primary  ">
                                                        Split dropright
                                                    </button>
                                                    <button type="button" class="btn btn-primary   dropdown-toggle-split dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="sr-only">Toggle Dropright</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                            
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="dropright-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Default dropright button --&gt;
                                                        &lt;div class=&quot;btn-group mb-2 dropright&quot;&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-primary   dropdown-toggle&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                                Dropright
                                                            &lt;/button&gt;
                                                            &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
                                                                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
            
                                                        &lt;!-- Split dropright button --&gt;
                                                        &lt;div class=&quot;btn-group mb-2 dropright&quot;&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-primary  &quot;&gt;
                                                                Split dropright
                                                            &lt;/button&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-primary   dropdown-toggle-split dropdown-toggle&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                                &lt;span class=&quot;sr-only&quot;&gt;Toggle Dropright&lt;/span&gt;
                                                            &lt;/button&gt;
                                                            &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
                                                                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Disabled Item</h4>
                                        <p class="text-muted font-14">Add <code>.disabled</code> to items in the dropdown to <strong>style them as disabled</strong>.</p>
                        
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#disabled-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#disabled-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="disabled-preview">
                                                <!-- Disabled -->
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary   dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Disabled
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Regular link</a>
                                                        <a class="dropdown-item disabled" href="#" tabindex="-1" aria-disabled="true">Disabled link</a>
                                                        <a class="dropdown-item" href="#">Another link</a>
                                                    </div>
                                                </div>
                                            
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="disabled-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Disabled --&gt;
                                                        &lt;div class=&quot;btn-group&quot;&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-primary   dropdown-toggle&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                                Disabled
                                                            &lt;/button&gt;
                                                            &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Regular link&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item disabled&quot; href=&quot;#&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;Disabled link&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another link&lt;/a&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Text</h4>
                                        <p class="text-muted font-14">Place any freeform text within a dropdown menu with text and use spacing utilities. Note that you’ll likely need additional sizing styles to constrain the menu width.</p>
                        
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#text-dropdown-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#text-dropdown-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="text-dropdown-preview">
                                                <!-- Text Example -->
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary   dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Text Dropdown
                                                    </button>
                                                    <div class="dropdown-menu p-3 text-muted" style="max-width: 200px;">
                                                        <p>
                                                            Some example text that's free-flowing within the dropdown menu.
                                                        </p>
                                                        <p class="mb-0">
                                                            And this is more example text.
                                                        </p>
                                                    </div>
                                                </div>
                                            
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="text-dropdown-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Text Example --&gt;
                                                        &lt;div class=&quot;btn-group&quot;&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-primary   dropdown-toggle&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                                Text Dropdown
                                                            &lt;/button&gt;
                                                            &lt;div class=&quot;dropdown-menu p-3 text-muted&quot; style=&quot;max-width: 200px;&quot;&gt;
                                                                &lt;p&gt;
                                                                    Some example text that's free-flowing within the dropdown menu.
                                                                &lt;/p&gt;
                                                                &lt;p class=&quot;mb-0&quot;&gt;
                                                                    And this is more example text.
                                                                &lt;/p&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                            </div> <!-- end col -->

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Menu alignment</h4>
                                        <p class="text-muted font-14">
                                            Add <code>.dropdown-menu-right</code>
                                            to a <code>.dropdown-menu</code> to right
                                            align the dropdown menu.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#menu-alignment-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#menu-alignment-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="menu-alignment-preview">
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Right-aligned menu
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </div>
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="menu-alignment-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;dropdown&quot;&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light dropdown-toggle&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                                Right-aligned menu
                                                            &lt;/button&gt;
                                                            &lt;div class=&quot;dropdown-menu dropdown-menu-right&quot;&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Split button dropdowns</h4>
                                        <p class="text-muted font-14">
                                            Similarly, create split button dropdowns with virtually the same markup as single button dropdowns, but with the addition of <code>.dropdown-toggle-split</code> for proper spacing around the dropdown caret.
                                        </p>
                        
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#split-button-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#split-button-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="split-button-preview">
                                                <div class="btn-group mb-2">
                                                    <button type="button" class="btn btn-primary">Primary</button>
                                                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div><!-- /btn-group -->
                                                <div class="btn-group mb-2">
                                                    <button type="button" class="btn btn-light">Secondary</button>
                                                    <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div><!-- /btn-group -->
                                                <div class="btn-group mb-2">
                                                    <button type="button" class="btn btn-success">Success</button>
                                                    <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div><!-- /btn-group -->
                                                <div class="btn-group mb-2">
                                                    <button type="button" class="btn btn-info">Info</button>
                                                    <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div><!-- /btn-group -->
                                                <div class="btn-group mb-2">
                                                    <button type="button" class="btn btn-warning">Warning</button>
                                                    <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div><!-- /btn-group -->
                                                <div class="btn-group mb-2">
                                                    <button type="button" class="btn btn-danger">Danger</button>
                                                    <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div><!-- /btn-group -->
                                            
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="split-button-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;btn-group&quot;&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Primary&lt;/button&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-primary dropdown-toggle dropdown-toggle-split&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                                &lt;span class=&quot;sr-only&quot;&gt;Toggle Dropdown&lt;/span&gt;
                                                            &lt;/button&gt;
                                                            &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
                                                                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;&lt;!-- /btn-group --&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Sizing</h4>
                                        <p class="text-muted font-14">Button dropdowns work with buttons of all sizes, including default and split dropdown buttons.</p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#sizing-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#sizing-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="sizing-preview">
                                                <!-- Large button groups (default and split) -->
                                                <div class="btn-group">
                                                    <button class="btn btn-light btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Large button
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                                <div class="btn-group">
                                                    <button class="btn btn-light btn-lg" type="button">
                                                        Large button
                                                    </button>
                                                    <button type="button" class="btn btn-lg btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
    
                                                <!-- Small button groups (default and split) -->
                                                <div class="btn-group">
                                                    <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Small button
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                                <div class="btn-group">
                                                    <button class="btn btn-light btn-sm" type="button">
                                                        Small button
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                        
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="sizing-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Large button groups (default and split) --&gt;
                                                        &lt;div class=&quot;btn-group&quot;&gt;
                                                            &lt;button class=&quot;btn btn-light btn-lg dropdown-toggle&quot; type=&quot;button&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                                Large button
                                                            &lt;/button&gt;
                                                            &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
                                                                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;btn-group&quot;&gt;
                                                            &lt;button class=&quot;btn btn-light btn-lg&quot; type=&quot;button&quot;&gt;
                                                                Large button
                                                            &lt;/button&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-lg btn-light dropdown-toggle dropdown-toggle-split&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                                &lt;span class=&quot;sr-only&quot;&gt;Toggle Dropdown&lt;/span&gt;
                                                            &lt;/button&gt;
                                                            &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
                                                                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
            
                                                        &lt;!-- Small button groups (default and split) --&gt;
                                                        &lt;div class=&quot;btn-group&quot;&gt;
                                                            &lt;button class=&quot;btn btn-light btn-sm dropdown-toggle&quot; type=&quot;button&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                                Small button
                                                            &lt;/button&gt;
                                                            &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
                                                                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;btn-group&quot;&gt;
                                                            &lt;button class=&quot;btn btn-light btn-sm&quot; type=&quot;button&quot;&gt;
                                                                Small button
                                                            &lt;/button&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-light dropdown-toggle dropdown-toggle-split&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                                &lt;span class=&quot;sr-only&quot;&gt;Toggle Dropdown&lt;/span&gt;
                                                            &lt;/button&gt;
                                                            &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
                                                                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Dropleft variation</h4>
                                        <p class="text-muted font-14">Trigger dropdown menus at the right of the elements by adding <code>.dropleft</code> to the parent element.</p>
                        
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#dropleft-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#dropleft-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="dropleft-preview">
                                                <!-- Default dropleft button -->
                                                <div class="btn-group dropleft">
                                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropleft
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                                
                                                <!-- Split dropleft button -->
                                                <div class="btn-group">
                                                    <div class="btn-group dropleft" role="group">
                                                        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropleft</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn btn-secondary">
                                                        Split dropleft
                                                    </button>
                                                </div>
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="dropleft-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Default dropleft button --&gt;
                                                        &lt;div class=&quot;btn-group dropleft&quot;&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary dropdown-toggle&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                                Dropleft
                                                            &lt;/button&gt;
                                                            &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
                                                                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;!-- Split dropleft button --&gt;
                                                        &lt;div class=&quot;btn-group&quot;&gt;
                                                            &lt;div class=&quot;btn-group dropleft&quot; role=&quot;group&quot;&gt;
                                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary dropdown-toggle dropdown-toggle-split&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot;
                                                                    aria-expanded=&quot;false&quot;&gt;
                                                                    &lt;span class=&quot;sr-only&quot;&gt;Toggle Dropleft&lt;/span&gt;
                                                                &lt;/button&gt;
                                                                &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                                                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
                                                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
                                                                    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;
                                                                Split dropleft
                                                            &lt;/button&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Active Item</h4>
                                        <p class="text-muted font-14">Add <code>.active</code> to item in the dropdown to <strong>style them as active</strong>.</p>
                        
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#active-item-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#active-item-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="active-item-preview">
                                                <!-- Active Item -->
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Active Item
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Regular link</a>
                                                        <a class="dropdown-item active" href="#">Active link</a>
                                                        <a class="dropdown-item" href="#">Another link</a>
                                                    </div>
                                                </div>
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="active-item-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Active Item --&gt;
                                                        &lt;div class=&quot;btn-group&quot;&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary dropdown-toggle&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                                Active Menu
                                                            &lt;/button&gt;
                                                            &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Regular link&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item active&quot; href=&quot;#&quot;&gt;Active link&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another link&lt;/a&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Headers</h4>
                                        <p class="text-muted font-14">Add a header to label sections of actions in any dropdown menu.</p>
                        
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#headers-item-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#headers-item-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="headers-item-preview">
                                                <!-- Header Item -->
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Header
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <h6 class="dropdown-header">Dropdown header</h6>
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                    </div>
                                                </div>
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="headers-item-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Header Item --&gt;
                                                        &lt;div class=&quot;btn-group&quot;&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary dropdown-toggle&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                                Header
                                                            &lt;/button&gt;
                                                            &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                                &lt;h6 class=&quot;dropdown-header&quot;&gt;Dropdown header&lt;/h6&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Forms</h4>
                                        <p class="text-muted font-14">Put a form within a dropdown menu, or make it into a dropdown menu, and use margin or padding utilities to give it the negative space you require.</p>
                        
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#dropdown-form-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#dropdown-form-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="dropdown-form-preview">
                                                <!-- Forms -->
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Form
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <form class="px-4 py-3">
                                                            <div class="form-group">
                                                                <label for="exampleDropdownFormEmail1">Email address</label>
                                                                <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleDropdownFormPassword1">Password</label>
                                                                <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                                                    <label class="form-check-label" for="dropdownCheck">
                                                                        Remember me
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Sign in</button>
                                                        </form>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">New around here? Sign up</a>
                                                        <a class="dropdown-item" href="#">Forgot password?</a>
                                                    </div>
                                                </div>
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="dropdown-form-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Forms --&gt;
                                                        &lt;div class=&quot;dropdown&quot;&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary dropdown-toggle&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                                Form
                                                            &lt;/button&gt;
                                                            &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                                &lt;form class=&quot;px-4 py-3&quot;&gt;
                                                                    &lt;div class=&quot;form-group&quot;&gt;
                                                                        &lt;label for=&quot;exampleDropdownFormEmail1&quot;&gt;Email address&lt;/label&gt;
                                                                        &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;exampleDropdownFormEmail1&quot; placeholder=&quot;email@example.com&quot;&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;form-group&quot;&gt;
                                                                        &lt;label for=&quot;exampleDropdownFormPassword1&quot;&gt;Password&lt;/label&gt;
                                                                        &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;exampleDropdownFormPassword1&quot; placeholder=&quot;Password&quot;&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;form-group&quot;&gt;
                                                                        &lt;div class=&quot;form-check&quot;&gt;
                                                                            &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;dropdownCheck&quot;&gt;
                                                                            &lt;label class=&quot;form-check-label&quot; for=&quot;dropdownCheck&quot;&gt;
                                                                                Remember me
                                                                            &lt;/label&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Sign in&lt;/button&gt;
                                                                &lt;/form&gt;
                                                                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;New around here? Sign up&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Forgot password?&lt;/a&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                        
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