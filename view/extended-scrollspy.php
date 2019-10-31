<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Scrollspy | Hyper - Responsive Bootstrap 4 Admin Dashboard</title>
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Extended UI</a></li>
                                            <li class="breadcrumb-item active">Scrollspy</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Scrollspy</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Example in navbar</h4>
                                        <p class="text-muted font-14">Scroll the area below the navbar and watch the active
                                            class change. The dropdown items will be highlighted as well.</p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#navbar-example-preview" data-toggle="tab" aria-expanded="false"
                                                    class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#navbar-example-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="navbar-example-preview">
                                                <nav id="navbar-example2" class="navbar navbar-light bg-light">
                                                    <a class="navbar-brand" href="#">Navbar</a>
                                                    <ul class="nav nav-pills">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="#fat">@fat</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#mdo">@mdo</a>
                                                        </li>
                                                        <li class="nav-item dropdown">
                                                            <a class="nav-link dropdown-toggle arrow-none"
                                                                data-toggle="dropdown" href="#" role="button"
                                                                aria-haspopup="true" aria-expanded="false">Dropdown <i
                                                                    class="mdi mdi-chevron-down"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#one">one</a>
                                                                <a class="dropdown-item" href="#two">two</a>
                                                                <div role="separator" class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#three">three</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </nav>
                                                <div data-spy="scroll" data-target="#navbar-example2" data-offset="0"
                                                    class="scrollspy-example">
                                                    <h4 id="fat">@fat</h4>
                                                    <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr
                                                        enim lo-fi before they sold out qui. Tumblr farm-to-table bicycle
                                                        rights whatever. Anim keffiyeh carles cardigan. Velit seitan
                                                        mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean
                                                        shorts, williamsburg hoodie minim qui you probably haven't heard of
                                                        them et cardigan trust fund culpa biodiesel wes anderson aesthetic.
                                                        Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan
                                                        ullamco consequat.</p>
                                                    <h4 id="mdo">@mdo</h4>
                                                    <p>Veniam marfa mustache skateboard, adipisicing fugiat velit pitchfork
                                                        beard. Freegan beard aliqua cupidatat mcsweeney's vero. Cupidatat
                                                        four loko nisi, ea helvetica nulla carles. Tattooed cosby sweater
                                                        food truck, mcsweeney's quis non freegan vinyl. Lo-fi wes anderson
                                                        +1 sartorial. Carles non aesthetic exercitation quis gentrify.
                                                        Brooklyn adipisicing craft beer vice keytar deserunt.</p>
                                                    <h4 id="one">one</h4>
                                                    <p>Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard
                                                        ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next
                                                        level locavore single-origin coffee in magna veniam. High life id
                                                        vinyl, echo park consequat quis aliquip banh mi pitchfork. Vero VHS
                                                        est adipisicing. Consectetur nisi DIY minim messenger bag. Cred ex
                                                        in, sustainable delectus consectetur fanny pack iphone.</p>
                                                    <h4 id="two">two</h4>
                                                    <p>In incididunt echo park, officia deserunt mcsweeney's proident master
                                                        cleanse thundercats sapiente veniam. Excepteur VHS elit, proident
                                                        shoreditch +1 biodiesel laborum craft beer. Single-origin coffee
                                                        wayfarers irure four loko, cupidatat terry richardson master
                                                        cleanse. Assumenda you probably haven't heard of them art party
                                                        fanny pack, tattooed nulla cardigan tempor ad. Proident wolf
                                                        nesciunt sartorial keffiyeh eu banh mi sustainable. Elit wolf
                                                        voluptate, lo-fi ea portland before they sold out four loko.
                                                        Locavore enim nostrud mlkshk brooklyn nesciunt.</p>
                                                    <h4 id="three">three</h4>
                                                    <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr
                                                        enim lo-fi before they sold out qui. Tumblr farm-to-table bicycle
                                                        rights whatever. Anim keffiyeh carles cardigan. Velit seitan
                                                        mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean
                                                        shorts, williamsburg hoodie minim qui you probably haven't heard of
                                                        them et cardigan trust fund culpa biodiesel wes anderson aesthetic.
                                                        Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan
                                                        ullamco consequat.</p>
                                                    <p>Keytar twee blog, culpa messenger bag marfa whatever delectus food
                                                        truck. Sapiente synth id assumenda. Locavore sed helvetica cliche
                                                        irony, thundercats you probably haven't heard of them consequat
                                                        hoodie gluten-free lo-fi fap aliquip. Labore elit placeat before
                                                        they sold out, terry richardson proident brunch nesciunt quis cosby
                                                        sweater pariatur keffiyeh ut helvetica artisan. Cardigan craft beer
                                                        seitan readymade velit. VHS chambray laboris tempor veniam. Anim
                                                        mollit minim commodo ullamco thundercats.
                                                    </p>
                                                </div>
                                            </div> <!-- end preview-->

                                            <div class="tab-pane" id="navbar-example-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;nav id=&quot;navbar-example2&quot; class=&quot;navbar navbar-light bg-light&quot;&gt;
                                                            &lt;a class=&quot;navbar-brand&quot; href=&quot;#&quot;&gt;Navbar&lt;/a&gt;
                                                            &lt;ul class=&quot;nav nav-pills&quot;&gt;
                                                                &lt;li class=&quot;nav-item&quot;&gt;
                                                                    &lt;a class=&quot;nav-link active&quot; href=&quot;#fat&quot;&gt;@fat&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li class=&quot;nav-item&quot;&gt;
                                                                    &lt;a class=&quot;nav-link&quot; href=&quot;#mdo&quot;&gt;@mdo&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li class=&quot;nav-item dropdown&quot;&gt;
                                                                    &lt;a class=&quot;nav-link dropdown-toggle arrow-none&quot;
                                                                        data-toggle=&quot;dropdown&quot; href=&quot;#&quot; role=&quot;button&quot;
                                                                        aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Dropdown &lt;i
                                                                            class=&quot;mdi mdi-chevron-down&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                    &lt;div class=&quot;dropdown-menu dropdown-menu-right&quot;&gt;
                                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;#one&quot;&gt;one&lt;/a&gt;
                                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;#two&quot;&gt;two&lt;/a&gt;
                                                                        &lt;div role=&quot;separator&quot; class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;#three&quot;&gt;three&lt;/a&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/li&gt;
                                                            &lt;/ul&gt;
                                                        &lt;/nav&gt;
                                                        
                                                        &lt;div data-spy=&quot;scroll&quot; data-target=&quot;#navbar-example2&quot; data-offset=&quot;0&quot;
                                                            class=&quot;scrollspy-example&quot;&gt;
                                                            &lt;h4 id=&quot;fat&quot;&gt;@fat&lt;/h4&gt;
                                                            &lt;p&gt;...&lt;/p&gt;
                                                            &lt;h4 id=&quot;mdo&quot;&gt;@mdo&lt;/h4&gt;
                                                            &lt;p&gt;...&lt;/p&gt;
                                                            &lt;h4 id=&quot;one&quot;&gt;one&lt;/h4&gt;
                                                            &lt;p&gt;...&lt;/p&gt;
                                                            &lt;h4 id=&quot;two&quot;&gt;two&lt;/h4&gt;
                                                            &lt;p&gt;...&lt;/p&gt;
                                                            &lt;h4 id=&quot;three&quot;&gt;three&lt;/h4&gt;
                                                            &lt;p&gt;...&lt;/p&gt;
                                                            &lt;p&gt;...&lt;/p&gt;
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


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Example with nested nav</h4>
                                        <p class="text-muted font-14">Scrollspy also works with nested <code>.nav</code>s.
                                            If a nested <code>.nav</code> is <code>.active</code>, its parents will also be
                                            <code>.active</code>. Scroll the area next to the navbar and watch the active
                                            class change.</p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#nested-example-preview" data-toggle="tab" aria-expanded="false"
                                                    class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#nested-example-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="nested-example-preview">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <nav id="navbar-example3" class="navbar navbar-light flex-column">
                                                            <a class="navbar-brand" href="#">Navbar</a>
                                                            <nav class="nav nav-pills flex-column">
                                                                <a class="nav-link active" href="#item-1">Item 1</a>
                                                                <nav class="nav nav-pills flex-column">
                                                                    <a class="nav-link ml-3 my-1 active"
                                                                        href="#item-1-1">Item 1-1</a>
                                                                    <a class="nav-link ml-3 my-1" href="#item-1-2">Item
                                                                        1-2</a>
                                                                </nav>
                                                                <a class="nav-link" href="#item-2">Item 2</a>
                                                                <a class="nav-link" href="#item-3">Item 3</a>
                                                                <nav class="nav nav-pills flex-column">
                                                                    <a class="nav-link ml-3 my-1" href="#item-3-1">Item
                                                                        3-1</a>
                                                                    <a class="nav-link ml-3 my-1" href="#item-3-2">Item
                                                                        3-2</a>
                                                                </nav>
                                                            </nav>
                                                        </nav>
                                                    </div>
                                                    <div class="col-8">
                                                        <div data-spy="scroll" data-target="#navbar-example3"
                                                            data-offset="0" class="scrollspy-example"
                                                            style="height: 350px;">
                                                            <h4 id="item-1">Item 1</h4>
                                                            <p>Ex consequat commodo adipisicing exercitation aute excepteur
                                                                occaecat ullamco duis aliqua id magna ullamco eu. Do aute
                                                                ipsum ipsum ullamco cillum consectetur ut et aute
                                                                consectetur labore. Fugiat laborum incididunt tempor eu
                                                                consequat enim dolore proident. Qui laborum do non excepteur
                                                                nulla magna eiusmod consectetur in. Aliqua et aliqua officia
                                                                quis et incididunt voluptate non anim reprehenderit
                                                                adipisicing dolore ut consequat deserunt mollit dolore.
                                                                Aliquip nulla enim veniam non fugiat id cupidatat nulla elit
                                                                cupidatat commodo velit ut eiusmod cupidatat elit dolore.
                                                            </p>
                                                            <h5 id="item-1-1">Item 1-1</h5>
                                                            <p>Amet tempor mollit aliquip pariatur excepteur commodo do ea
                                                                cillum commodo Lorem et occaecat elit qui et. Aliquip labore
                                                                ex ex esse voluptate occaecat Lorem ullamco deserunt. Aliqua
                                                                cillum excepteur irure consequat id quis ea. Sit proident
                                                                ullamco aute magna pariatur nostrud labore. Reprehenderit
                                                                aliqua commodo eiusmod aliquip est do duis amet proident
                                                                magna consectetur consequat eu commodo fugiat non quis. Enim
                                                                aliquip exercitation ullamco adipisicing voluptate excepteur
                                                                minim exercitation minim minim commodo adipisicing
                                                                exercitation officia nisi adipisicing. Anim id duis qui
                                                                consequat labore adipisicing sint dolor elit cillum anim et
                                                                fugiat.</p>
                                                            <h5 id="item-1-2">Item 1-2</h5>
                                                            <p>Cillum nisi deserunt magna eiusmod qui eiusmod velit
                                                                voluptate pariatur laborum sunt enim. Irure laboris mollit
                                                                consequat incididunt sint et culpa culpa incididunt
                                                                adipisicing magna magna occaecat. Nulla ipsum cillum eiusmod
                                                                sint elit excepteur ea labore enim consectetur in labore
                                                                anim. Proident ullamco ipsum esse elit ut Lorem eiusmod
                                                                dolor et eiusmod. Anim occaecat nulla in non consequat
                                                                eiusmod velit incididunt.</p>
                                                            <h4 id="item-2">Item 2</h4>
                                                            <p>Quis magna Lorem anim amet ipsum do mollit sit cillum
                                                                voluptate ex nulla tempor. Laborum consequat non elit enim
                                                                exercitation cillum aliqua consequat id aliqua. Esse ex
                                                                consectetur mollit voluptate est in duis laboris ad sit
                                                                ipsum anim Lorem. Incididunt veniam velit elit elit veniam
                                                                Lorem aliqua quis ullamco deserunt sit enim elit aliqua esse
                                                                irure. Laborum nisi sit est tempor laborum mollit labore
                                                                officia laborum excepteur commodo non commodo dolor
                                                                excepteur commodo. Ipsum fugiat ex est consectetur ipsum
                                                                commodo tempor sunt in proident.</p>
                                                            <h4 id="item-3">Item 3</h4>
                                                            <p>Quis anim sit do amet fugiat dolor velit sit ea ea do
                                                                reprehenderit culpa duis. Nostrud aliqua ipsum fugiat minim
                                                                proident occaecat excepteur aliquip culpa aute tempor
                                                                reprehenderit. Deserunt tempor mollit elit ex pariatur
                                                                dolore velit fugiat mollit culpa irure ullamco est ex
                                                                ullamco excepteur.</p>
                                                            <h5 id="item-3-1">Item 3-1</h5>
                                                            <p>Deserunt quis elit Lorem eiusmod amet enim enim amet minim
                                                                Lorem proident nostrud. Ea id dolore anim exercitation aute
                                                                fugiat labore voluptate cillum do laboris labore. Ex velit
                                                                exercitation nisi enim labore reprehenderit labore nostrud
                                                                ut ut. Esse officia sunt duis aliquip ullamco tempor eiusmod
                                                                deserunt irure nostrud irure. Ullamco proident veniam
                                                                laboris ea consectetur magna sunt ex exercitation aliquip
                                                                minim enim culpa occaecat exercitation. Est tempor excepteur
                                                                aliquip laborum consequat do deserunt laborum esse eiusmod
                                                                irure proident ipsum esse qui.</p>
                                                            <h5 id="item-3-2">Item 3-2</h5>
                                                            <p>Labore sit culpa commodo elit adipisicing sit aliquip elit
                                                                proident voluptate minim mollit nostrud aute reprehenderit
                                                                do. Mollit excepteur eu Lorem ipsum anim commodo sint labore
                                                                Lorem in exercitation velit incididunt. Occaecat consectetur
                                                                nisi in occaecat proident minim enim sunt reprehenderit
                                                                exercitation cupidatat et do officia. Aliquip consequat ad
                                                                labore labore mollit ut amet. Sit pariatur tempor proident
                                                                in veniam culpa aliqua excepteur elit magna fugiat eiusmod
                                                                amet officia.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end preview-->

                                            <div class="tab-pane" id="nested-example-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;row&quot;&gt;
                                                            &lt;div class=&quot;col-4&quot;&gt;
                                                                &lt;nav id=&quot;navbar-example3&quot; class=&quot;navbar navbar-light flex-column&quot;&gt;
                                                                    &lt;a class=&quot;navbar-brand&quot; href=&quot;#&quot;&gt;Navbar&lt;/a&gt;
                                                                    &lt;nav class=&quot;nav nav-pills flex-column&quot;&gt;
                                                                        &lt;a class=&quot;nav-link active&quot; href=&quot;#item-1&quot;&gt;Item 1&lt;/a&gt;
                                                                        &lt;nav class=&quot;nav nav-pills flex-column&quot;&gt;
                                                                            &lt;a class=&quot;nav-link ml-3 my-1 active&quot;
                                                                                href=&quot;#item-1-1&quot;&gt;Item 1-1&lt;/a&gt;
                                                                            &lt;a class=&quot;nav-link ml-3 my-1&quot; href=&quot;#item-1-2&quot;&gt;Item
                                                                                1-2&lt;/a&gt;
                                                                        &lt;/nav&gt;
                                                                        &lt;a class=&quot;nav-link&quot; href=&quot;#item-2&quot;&gt;Item 2&lt;/a&gt;
                                                                        &lt;a class=&quot;nav-link&quot; href=&quot;#item-3&quot;&gt;Item 3&lt;/a&gt;
                                                                        &lt;nav class=&quot;nav nav-pills flex-column&quot;&gt;
                                                                            &lt;a class=&quot;nav-link ml-3 my-1&quot; href=&quot;#item-3-1&quot;&gt;Item
                                                                                3-1&lt;/a&gt;
                                                                            &lt;a class=&quot;nav-link ml-3 my-1&quot; href=&quot;#item-3-2&quot;&gt;Item
                                                                                3-2&lt;/a&gt;
                                                                        &lt;/nav&gt;
                                                                    &lt;/nav&gt;
                                                                &lt;/nav&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;col-8&quot;&gt;
                                                                &lt;div data-spy=&quot;scroll&quot; data-target=&quot;#navbar-example3&quot;
                                                                    data-offset=&quot;0&quot; class=&quot;scrollspy-example&quot;
                                                                    style=&quot;height: 350px;&quot;&gt;
                                                                    &lt;h4 id=&quot;item-1&quot;&gt;Item 1&lt;/h4&gt;
                                                                    &lt;p&gt;...&lt;/p&gt;
                                                                    &lt;h5 id=&quot;item-1-1&quot;&gt;Item 1-1&lt;/h5&gt;
                                                                    &lt;p&gt;...&lt;/p&gt;
                                                                    &lt;h5 id=&quot;item-1-2&quot;&gt;Item 1-2&lt;/h5&gt;
                                                                    &lt;p&gt;...&lt;/p&gt;
                                                                    &lt;h4 id=&quot;item-2&quot;&gt;Item 2&lt;/h4&gt;
                                                                    &lt;p&gt;...&lt;/p&gt;
                                                                    &lt;h4 id=&quot;item-3&quot;&gt;Item 3&lt;/h4&gt;
                                                                    &lt;p&gt;...&lt;/p&gt;
                                                                    &lt;h5 id=&quot;item-3-1&quot;&gt;Item 3-1&lt;/h5&gt;
                                                                    &lt;p&gt;...&lt;/p&gt;
                                                                    &lt;h5 id=&quot;item-3-2&quot;&gt;Item 3-2&lt;/h5&gt;
                                                                    &lt;p&gt;...&lt;/p&gt;
                                                                &lt;/div&gt;
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

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Example with list-group</h4>
                                        <p class="text-muted font-14">Scrollspy also works with nested <code>.nav</code>s.
                                            If a nested <code>.nav</code> is <code>.active</code>, its parents will also be
                                            <code>.active</code>. Scroll the area next to the navbar and watch the active
                                            class change.</p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#list-group-example-preview" data-toggle="tab" aria-expanded="false"
                                                    class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#list-group-example-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="list-group-example-preview">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div id="list-example" class="list-group">
                                                            <a class="list-group-item list-group-item-action active"
                                                                href="#list-item-1">Item 1</a>
                                                            <a class="list-group-item list-group-item-action"
                                                                href="#list-item-2">Item 2</a>
                                                            <a class="list-group-item list-group-item-action"
                                                                href="#list-item-3">Item 3</a>
                                                            <a class="list-group-item list-group-item-action"
                                                                href="#list-item-4">Item 4</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-8">
                                                        <div data-spy="scroll" data-target="#list-example" data-offset="0"
                                                            class="scrollspy-example">
                                                            <h4 id="list-item-1">Item 1</h4>
                                                            <p>Ex consequat commodo adipisicing exercitation aute excepteur
                                                                occaecat ullamco duis aliqua id magna ullamco eu. Do aute
                                                                ipsum ipsum ullamco cillum consectetur ut et aute
                                                                consectetur labore. Fugiat laborum incididunt tempor eu
                                                                consequat enim dolore proident. Qui laborum do non excepteur
                                                                nulla magna eiusmod consectetur in. Aliqua et aliqua officia
                                                                quis et incididunt voluptate non anim reprehenderit
                                                                adipisicing dolore ut consequat deserunt mollit dolore.
                                                                Aliquip nulla enim veniam non fugiat id cupidatat nulla elit
                                                                cupidatat commodo velit ut eiusmod cupidatat elit dolore.
                                                            </p>
                                                            <h4 id="list-item-2">Item 2</h4>
                                                            <p>Quis magna Lorem anim amet ipsum do mollit sit cillum
                                                                voluptate ex nulla tempor. Laborum consequat non elit enim
                                                                exercitation cillum aliqua consequat id aliqua. Esse ex
                                                                consectetur mollit voluptate est in duis laboris ad sit
                                                                ipsum anim Lorem. Incididunt veniam velit elit elit veniam
                                                                Lorem aliqua quis ullamco deserunt sit enim elit aliqua esse
                                                                irure. Laborum nisi sit est tempor laborum mollit labore
                                                                officia laborum excepteur commodo non commodo dolor
                                                                excepteur commodo. Ipsum fugiat ex est consectetur ipsum
                                                                commodo tempor sunt in proident.</p>
                                                            <h4 id="list-item-3">Item 3</h4>
                                                            <p>Quis anim sit do amet fugiat dolor velit sit ea ea do
                                                                reprehenderit culpa duis. Nostrud aliqua ipsum fugiat minim
                                                                proident occaecat excepteur aliquip culpa aute tempor
                                                                reprehenderit. Deserunt tempor mollit elit ex pariatur
                                                                dolore velit fugiat mollit culpa irure ullamco est ex
                                                                ullamco excepteur.</p>
                                                            <h4 id="list-item-4">Item 4</h4>
                                                            <p>Quis anim sit do amet fugiat dolor velit sit ea ea do
                                                                reprehenderit culpa duis. Nostrud aliqua ipsum fugiat minim
                                                                proident occaecat excepteur aliquip culpa aute tempor
                                                                reprehenderit. Deserunt tempor mollit elit ex pariatur
                                                                dolore velit fugiat mollit culpa irure ullamco est ex
                                                                ullamco excepteur.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end preview-->

                                            <div class="tab-pane" id="list-group-example-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;row&quot;&gt;
                                                            &lt;div class=&quot;col-4&quot;&gt;
                                                                &lt;div id=&quot;list-example&quot; class=&quot;list-group&quot;&gt;
                                                                    &lt;a class=&quot;list-group-item list-group-item-action active&quot;
                                                                        href=&quot;#list-item-1&quot;&gt;Item 1&lt;/a&gt;
                                                                    &lt;a class=&quot;list-group-item list-group-item-action&quot;
                                                                        href=&quot;#list-item-2&quot;&gt;Item 2&lt;/a&gt;
                                                                    &lt;a class=&quot;list-group-item list-group-item-action&quot;
                                                                        href=&quot;#list-item-3&quot;&gt;Item 3&lt;/a&gt;
                                                                    &lt;a class=&quot;list-group-item list-group-item-action&quot;
                                                                        href=&quot;#list-item-4&quot;&gt;Item 4&lt;/a&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;col-8&quot;&gt;
                                                                &lt;div data-spy=&quot;scroll&quot; data-target=&quot;#list-example&quot; data-offset=&quot;0&quot;
                                                                    class=&quot;scrollspy-example&quot;&gt;
                                                                    &lt;h4 id=&quot;list-item-1&quot;&gt;Item 1&lt;/h4&gt;
                                                                    &lt;p&gt;...&lt;/p&gt;
                                                                    &lt;h4 id=&quot;list-item-2&quot;&gt;Item 2&lt;/h4&gt;
                                                                    &lt;p&gt;...&lt;/p&gt;
                                                                    &lt;h4 id=&quot;list-item-3&quot;&gt;Item 3&lt;/h4&gt;
                                                                    &lt;p&gt;...&lt;/p&gt;
                                                                    &lt;h4 id=&quot;list-item-4&quot;&gt;Item 4&lt;/h4&gt;
                                                                    &lt;p&gt;...&lt;/p&gt;
                                                                &lt;/div&gt;
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