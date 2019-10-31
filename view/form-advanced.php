<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Form Advanced | Hyper - Responsive Bootstrap 4 Admin Dashboard</title>
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Form Advanced</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Form Advanced</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Select2</h4>
                                        <p class="text-muted font-14">Select2 gives you a customizable select box with support for searching, tagging, remote data sets, infinite scrolling, and many other highly used options.</p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#select2-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#select2-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="select2-preview">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <p class="mb-1 font-weight-bold text-muted">Single Select</p>
                                                        <p class="text-muted font-14">
                                                            Select2 can take a regular select box like this...
                                                        </p>
                    
                                                        <select class="form-control select2" data-toggle="select2">
                                                            <option>Select</option>
                                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                                <option value="AK">Alaska</option>
                                                                <option value="HI">Hawaii</option>
                                                            </optgroup>
                                                            <optgroup label="Pacific Time Zone">
                                                                <option value="CA">California</option>
                                                                <option value="NV">Nevada</option>
                                                                <option value="OR">Oregon</option>
                                                                <option value="WA">Washington</option>
                                                            </optgroup>
                                                            <optgroup label="Mountain Time Zone">
                                                                <option value="AZ">Arizona</option>
                                                                <option value="CO">Colorado</option>
                                                                <option value="ID">Idaho</option>
                                                                <option value="MT">Montana</option>
                                                                <option value="NE">Nebraska</option>
                                                                <option value="NM">New Mexico</option>
                                                                <option value="ND">North Dakota</option>
                                                                <option value="UT">Utah</option>
                                                                <option value="WY">Wyoming</option>
                                                            </optgroup>
                                                            <optgroup label="Central Time Zone">
                                                                <option value="AL">Alabama</option>
                                                                <option value="AR">Arkansas</option>
                                                                <option value="IL">Illinois</option>
                                                                <option value="IA">Iowa</option>
                                                                <option value="KS">Kansas</option>
                                                                <option value="KY">Kentucky</option>
                                                                <option value="LA">Louisiana</option>
                                                                <option value="MN">Minnesota</option>
                                                                <option value="MS">Mississippi</option>
                                                                <option value="MO">Missouri</option>
                                                                <option value="OK">Oklahoma</option>
                                                                <option value="SD">South Dakota</option>
                                                                <option value="TX">Texas</option>
                                                                <option value="TN">Tennessee</option>
                                                                <option value="WI">Wisconsin</option>
                                                            </optgroup>
                                                            <optgroup label="Eastern Time Zone">
                                                                <option value="CT">Connecticut</option>
                                                                <option value="DE">Delaware</option>
                                                                <option value="FL">Florida</option>
                                                                <option value="GA">Georgia</option>
                                                                <option value="IN">Indiana</option>
                                                                <option value="ME">Maine</option>
                                                                <option value="MD">Maryland</option>
                                                                <option value="MA">Massachusetts</option>
                                                                <option value="MI">Michigan</option>
                                                                <option value="NH">New Hampshire</option>
                                                                <option value="NJ">New Jersey</option>
                                                                <option value="NY">New York</option>
                                                                <option value="NC">North Carolina</option>
                                                                <option value="OH">Ohio</option>
                                                                <option value="PA">Pennsylvania</option>
                                                                <option value="RI">Rhode Island</option>
                                                                <option value="SC">South Carolina</option>
                                                                <option value="VT">Vermont</option>
                                                                <option value="VA">Virginia</option>
                                                                <option value="WV">West Virginia</option>
                                                            </optgroup>
                                                        </select>
                                                    </div> <!-- end col -->
        
                                                    <div class="col-lg-6">
                                                        <p class="mb-1 font-weight-bold text-muted">Multiple Select</p>
                                                        <p class="text-muted font-14">
                                                            Select2 can take a regular select box like this...
                                                        </p>
                    
                                                        <select class="select2 form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose ...">
                                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                                <option value="AK">Alaska</option>
                                                                <option value="HI">Hawaii</option>
                                                            </optgroup>
                                                            <optgroup label="Pacific Time Zone">
                                                                <option value="CA">California</option>
                                                                <option value="NV">Nevada</option>
                                                                <option value="OR">Oregon</option>
                                                                <option value="WA">Washington</option>
                                                            </optgroup>
                                                            <optgroup label="Mountain Time Zone">
                                                                <option value="AZ">Arizona</option>
                                                                <option value="CO">Colorado</option>
                                                                <option value="ID">Idaho</option>
                                                                <option value="MT">Montana</option>
                                                                <option value="NE">Nebraska</option>
                                                                <option value="NM">New Mexico</option>
                                                                <option value="ND">North Dakota</option>
                                                                <option value="UT">Utah</option>
                                                                <option value="WY">Wyoming</option>
                                                            </optgroup>
                                                            <optgroup label="Central Time Zone">
                                                                <option value="AL">Alabama</option>
                                                                <option value="AR">Arkansas</option>
                                                                <option value="IL">Illinois</option>
                                                                <option value="IA">Iowa</option>
                                                                <option value="KS">Kansas</option>
                                                                <option value="KY">Kentucky</option>
                                                                <option value="LA">Louisiana</option>
                                                                <option value="MN">Minnesota</option>
                                                                <option value="MS">Mississippi</option>
                                                                <option value="MO">Missouri</option>
                                                                <option value="OK">Oklahoma</option>
                                                                <option value="SD">South Dakota</option>
                                                                <option value="TX">Texas</option>
                                                                <option value="TN">Tennessee</option>
                                                                <option value="WI">Wisconsin</option>
                                                            </optgroup>
                                                            <optgroup label="Eastern Time Zone">
                                                                <option value="CT">Connecticut</option>
                                                                <option value="DE">Delaware</option>
                                                                <option value="FL">Florida</option>
                                                                <option value="GA">Georgia</option>
                                                                <option value="IN">Indiana</option>
                                                                <option value="ME">Maine</option>
                                                                <option value="MD">Maryland</option>
                                                                <option value="MA">Massachusetts</option>
                                                                <option value="MI">Michigan</option>
                                                                <option value="NH">New Hampshire</option>
                                                                <option value="NJ">New Jersey</option>
                                                                <option value="NY">New York</option>
                                                                <option value="NC">North Carolina</option>
                                                                <option value="OH">Ohio</option>
                                                                <option value="PA">Pennsylvania</option>
                                                                <option value="RI">Rhode Island</option>
                                                                <option value="SC">South Carolina</option>
                                                                <option value="VT">Vermont</option>
                                                                <option value="VA">Virginia</option>
                                                                <option value="WV">West Virginia</option>
                                                            </optgroup>
                                                        </select>
                                                    </div> <!-- end col -->
                                                </div> <!-- end row -->                                           
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="select2-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Single Select --&gt;
                                                        &lt;select class=&quot;form-control select2&quot; data-toggle=&quot;select2&quot;&gt;
                                                            &lt;option&gt;Select&lt;/option&gt;
                                                            &lt;optgroup label=&quot;Alaskan/Hawaiian Time Zone&quot;&gt;
                                                                &lt;option value=&quot;AK&quot;&gt;Alaska&lt;/option&gt;
                                                                &lt;option value=&quot;HI&quot;&gt;Hawaii&lt;/option&gt;
                                                            &lt;/optgroup&gt;
                                                            &lt;optgroup label=&quot;Pacific Time Zone&quot;&gt;
                                                                &lt;option value=&quot;CA&quot;&gt;California&lt;/option&gt;
                                                                &lt;option value=&quot;NV&quot;&gt;Nevada&lt;/option&gt;
                                                                &lt;option value=&quot;OR&quot;&gt;Oregon&lt;/option&gt;
                                                                &lt;option value=&quot;WA&quot;&gt;Washington&lt;/option&gt;
                                                            &lt;/optgroup&gt;
                                                        &lt;/select&gt;
                                                        
                                                        &lt;!-- Multiple Select --&gt;
                                                        &lt;select class=&quot;select2 form-control select2-multiple&quot; data-toggle=&quot;select2&quot; multiple=&quot;multiple&quot; data-placeholder=&quot;Choose ...&quot;&gt;
                                                            &lt;optgroup label=&quot;Alaskan/Hawaiian Time Zone&quot;&gt;
                                                                &lt;option value=&quot;AK&quot;&gt;Alaska&lt;/option&gt;
                                                                &lt;option value=&quot;HI&quot;&gt;Hawaii&lt;/option&gt;
                                                            &lt;/optgroup&gt;
                                                            &lt;optgroup label=&quot;Pacific Time Zone&quot;&gt;
                                                                &lt;option value=&quot;CA&quot;&gt;California&lt;/option&gt;
                                                                &lt;option value=&quot;NV&quot;&gt;Nevada&lt;/option&gt;
                                                                &lt;option value=&quot;OR&quot;&gt;Oregon&lt;/option&gt;
                                                                &lt;option value=&quot;WA&quot;&gt;Washington&lt;/option&gt;
                                                            &lt;/optgroup&gt;
                                                            &lt;optgroup label=&quot;Mountain Time Zone&quot;&gt;
                                                                &lt;option value=&quot;AZ&quot;&gt;Arizona&lt;/option&gt;
                                                                &lt;option value=&quot;CO&quot;&gt;Colorado&lt;/option&gt;
                                                                &lt;option value=&quot;ID&quot;&gt;Idaho&lt;/option&gt;
                                                                &lt;option value=&quot;MT&quot;&gt;Montana&lt;/option&gt;
                                                                &lt;option value=&quot;NE&quot;&gt;Nebraska&lt;/option&gt;
                                                                &lt;option value=&quot;NM&quot;&gt;New Mexico&lt;/option&gt;
                                                                &lt;option value=&quot;ND&quot;&gt;North Dakota&lt;/option&gt;
                                                                &lt;option value=&quot;UT&quot;&gt;Utah&lt;/option&gt;
                                                                &lt;option value=&quot;WY&quot;&gt;Wyoming&lt;/option&gt;
                                                            &lt;/optgroup&gt;
                                                        &lt;/select&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div> 
                        <!-- end row-->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Date Range Picker</h4>
                                        <p class="text-muted font-14">
                                            A JavaScript component for choosing date ranges, dates and times.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#daterange-picker-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#daterange-picker-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="daterange-picker-preview">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-3">
                                                            <label>Date Range</label>
                                                            <input type="text" class="form-control date" id="singledaterange" data-toggle="date-picker" data-cancel-class="btn-warning">
                                                        </div>
                                                    </div>
        
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-3">
                                                            <label>Date Range Picker With Times</label>
                                                            <input type="text" class="form-control date" id="daterangetime" data-toggle="date-picker" data-time-picker="true" data-locale="{'format': 'DD/MM hh:mm A'}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Single Date Picker</label>
                                                            <input type="text" class="form-control date" id="birthdatepicker" data-toggle="date-picker" data-single-date-picker="true">
                                                        </div>
                                                    </div>
        
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Predefined Date Ranges</label>
                                                            <div id="reportrange" class="form-control" data-toggle="date-picker-range" data-target-display="#selectedValue"  data-cancel-class="btn-light">
                                                                <i class="mdi mdi-calendar"></i>&nbsp;
                                                                <span id="selectedValue"></span> <i class="mdi mdi-menu-down"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                      
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="daterange-picker-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Date Range --&gt;
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;Date Range&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; class=&quot;form-control date&quot; id=&quot;singledaterange&quot; data-toggle=&quot;date-picker&quot; data-cancel-class=&quot;btn-warning&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;!-- Date Range Picker With Times --&gt;
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;Date Range Picker With Times&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; class=&quot;form-control date&quot; id=&quot;daterangetime&quot; data-toggle=&quot;date-picker&quot; data-time-picker=&quot;true&quot; data-locale=&quot;{'format': 'DD/MM hh:mm A'}&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;!-- Single Date Picker --&gt;
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;Single Date Picker&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; class=&quot;form-control date&quot; id=&quot;birthdatepicker&quot; data-toggle=&quot;date-picker&quot; data-single-date-picker=&quot;true&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;!-- Predefined Date Ranges --&gt;
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;Predefined Date Ranges&lt;/label&gt;
                                                            &lt;div id=&quot;reportrange&quot; class=&quot;form-control&quot; data-toggle=&quot;date-picker-range&quot; data-target-display=&quot;#selectedValue&quot;  data-cancel-class=&quot;btn-light&quot;&gt;
                                                                &lt;i class=&quot;mdi mdi-calendar&quot;&gt;&lt;/i&gt;&amp;nbsp;
                                                                &lt;span id=&quot;selectedValue&quot;&gt;&lt;/span&gt; &lt;i class=&quot;mdi mdi-menu-down&quot;&gt;&lt;/i&gt;
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
                                        <h4 class="header-title">Switch</h4>
                                        <p class="text-muted font-14">
                                            Here are a few types of switches.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-4">
                                            <li class="nav-item">
                                                <a href="#switches-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#switches-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="switches-preview">
                                                <!-- without label-->
                                                <input type="checkbox" id="switch0" data-switch="none"/>
                                                <label for="switch0" data-on-label="" data-off-label=""></label>

                                                <!-- Bool Switch-->
                                                <input type="checkbox" id="switch1" checked data-switch="bool"/>
                                                <label for="switch1" data-on-label="On" data-off-label="Off"></label>

                                                <!-- Primary Switch-->
                                                <input type="checkbox" id="switch2" checked data-switch="primary"/>
                                                <label for="switch2" data-on-label="On" data-off-label="Off"></label>

                                                <!-- Success Switch-->
                                                <input type="checkbox" id="switch3" checked data-switch="success"/>
                                                <label for="switch3" data-on-label="Yes" data-off-label="No"></label>

                                                <!-- Info Switch-->
                                                <input type="checkbox" id="switch4" checked data-switch="info"/>
                                                <label for="switch4" data-on-label="On" data-off-label="Off"></label>

                                                <!-- Warning Switch-->
                                                <input type="checkbox" id="switch5" checked data-switch="warning"/>
                                                <label for="switch5" data-on-label="Yes" data-off-label="No"></label>

                                                <!-- Danger Switch-->
                                                <input type="checkbox" id="switch6" checked data-switch="danger"/>
                                                <label for="switch6" data-on-label="On" data-off-label="Off"></label>

                                                <!-- Dark Switch-->
                                                <input type="checkbox" id="switch7" checked data-switch="secondary"/>
                                                <label for="switch7" data-on-label="Yes" data-off-label="No"></label>                      
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="switches-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Without label--&gt;
                                                        &lt;input type=&quot;checkbox&quot; id=&quot;switch0&quot; data-switch=&quot;none&quot;/&gt;
                                                        &lt;label for=&quot;switch0&quot; data-on-label=&quot;&quot; data-off-label=&quot;&quot;&gt;&lt;/label&gt;
        
                                                        &lt;!-- Bool Switch--&gt;
                                                        &lt;input type=&quot;checkbox&quot; id=&quot;switch1&quot; checked data-switch=&quot;bool&quot;/&gt;
                                                        &lt;label for=&quot;switch1&quot; data-on-label=&quot;On&quot; data-off-label=&quot;Off&quot;&gt;&lt;/label&gt;
        
                                                        &lt;!-- Primary Switch--&gt;
                                                        &lt;input type=&quot;checkbox&quot; id=&quot;switch2&quot; checked data-switch=&quot;primary&quot;/&gt;
                                                        &lt;label for=&quot;switch2&quot; data-on-label=&quot;On&quot; data-off-label=&quot;Off&quot;&gt;&lt;/label&gt;
        
                                                        &lt;!-- Success Switch--&gt;
                                                        &lt;input type=&quot;checkbox&quot; id=&quot;switch3&quot; checked data-switch=&quot;success&quot;/&gt;
                                                        &lt;label for=&quot;switch3&quot; data-on-label=&quot;Yes&quot; data-off-label=&quot;No&quot;&gt;&lt;/label&gt;
        
                                                        &lt;!-- Info Switch--&gt;
                                                        &lt;input type=&quot;checkbox&quot; id=&quot;switch4&quot; checked data-switch=&quot;info&quot;/&gt;
                                                        &lt;label for=&quot;switch4&quot; data-on-label=&quot;On&quot; data-off-label=&quot;Off&quot;&gt;&lt;/label&gt;
        
                                                        &lt;!-- Warning Switch--&gt;
                                                        &lt;input type=&quot;checkbox&quot; id=&quot;switch5&quot; checked data-switch=&quot;warning&quot;/&gt;
                                                        &lt;label for=&quot;switch5&quot; data-on-label=&quot;Yes&quot; data-off-label=&quot;No&quot;&gt;&lt;/label&gt;
        
                                                        &lt;!-- Danger Switch--&gt;
                                                        &lt;input type=&quot;checkbox&quot; id=&quot;switch6&quot; checked data-switch=&quot;danger&quot;/&gt;
                                                        &lt;label for=&quot;switch6&quot; data-on-label=&quot;On&quot; data-off-label=&quot;Off&quot;&gt;&lt;/label&gt;
        
                                                        &lt;!-- Dark Switch--&gt;
                                                        &lt;input type=&quot;checkbox&quot; id=&quot;switch7&quot; checked data-switch=&quot;secondary&quot;/&gt;
                                                        &lt;label for=&quot;switch7&quot; data-on-label=&quot;Yes&quot; data-off-label=&quot;No&quot;&gt;&lt;/label&gt;  
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
                                        <h4 class="header-title">Bootstrap Datepicker</h4>
                                        <p class="text-muted font-14">
                                            Bootstrap-datepicker provides a flexible datepicker widget in the Bootstrap style.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#datepicker-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#datepicker-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="datepicker-preview">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-3">
                                                            <label>Date Picker</label>
                                                            <input type="text" class="form-control" data-provide="datepicker">
                                                        </div>
                                                    </div>
        
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-3">
                                                            <label>Date View</label>
                                                            <input type="text" class="form-control" data-provide="datepicker" data-date-format="d-M-yyyy">
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Multi Datepicker</label>
                                                            <input type="text" class="form-control" data-provide="datepicker" data-date-multidate="true">
                                                        </div>
                                                    </div>
        
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Autoclose</label>
                                                            <input type="text" class="form-control" data-provide="datepicker" data-date-autoclose="true">
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Month View</label>
                                                            <input type="text" class="form-control" data-provide="datepicker" data-date-format="MM yyyy" data-date-min-view-mode="1">
                                                        </div>
                                                    </div>
        
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Year View</label>
                                                            <input type="text" class="form-control" data-provide="datepicker" data-date-min-view-mode="2">
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Inline Datepicker</label>
                                                            <div data-provide="datepicker-inline"></div>
                                                        </div>
                                                    </div>
                                                </div>                      
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="datepicker-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Date Picker --&gt;
                                                        &lt;div class=&quot;form-group mb-3&quot;&gt;
                                                            &lt;label&gt;Date Picker&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; data-provide=&quot;datepicker&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;!-- Date View --&gt;
                                                        &lt;div class=&quot;form-group mb-3&quot;&gt;
                                                            &lt;label&gt;Date View&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; data-provide=&quot;datepicker&quot; data-date-format=&quot;d-M-yyyy&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;!-- Multi Datepicker --&gt;
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;Multi Datepicker&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; data-provide=&quot;datepicker&quot; data-date-multidate=&quot;true&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;!-- Autoclose --&gt;
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;Autoclose&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; data-provide=&quot;datepicker&quot; data-date-autoclose=&quot;true&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;!-- Month View --&gt;
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;Month View&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; data-provide=&quot;datepicker&quot; data-date-format=&quot;MM yyyy&quot; data-date-min-view-mode=&quot;1&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;!-- Year View --&gt;
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;Year View&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; data-provide=&quot;datepicker&quot; data-date-min-view-mode=&quot;2&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;!-- Inline Datepicker --&gt;
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;Inline Datepicker&lt;/label&gt;
                                                            &lt;div data-provide=&quot;datepicker-inline&quot;&gt;&lt;/div&gt;
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
                                        <h4 class="header-title">Input Masks</h4>
                                        <p class="text-muted font-14">
                                            A jQuery Plugin to make masks on form fields and HTML elements.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#input-masks-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#input-masks-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="input-masks-preview">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <form action="#">
                                                            <div class="form-group">
                                                                <label>Date</label>
                                                                <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="00/00/0000">
                                                                <span class="font-13 text-muted">e.g "DD/MM/YYYY"</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Hour</label>
                                                                <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="00:00:00">
                                                                <span class="font-13 text-muted">e.g "HH:MM:SS"</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Date & Hour</label>
                                                                <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="00/00/0000 00:00:00">
                                                                <span class="font-13 text-muted">e.g "DD/MM/YYYY HH:MM:SS"</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>ZIP Code</label>
                                                                <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="00000-000">
                                                                <span class="font-13 text-muted">e.g "xxxxx-xxx"</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Crazy Zip Code</label>
                                                                <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="0-00-00-00">
                                                                <span class="font-13 text-muted">e.g "x-xx-xx-xx"</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Money</label>
                                                                <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="000.000.000.000.000,00" data-reverse="true">
                                                                <span class="font-13 text-muted">e.g "Your money"</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Money 2</label>
                                                                <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="#.##0,00" data-reverse="true">
                                                                <span class="font-13 text-muted">e.g "#.##0,00"</span>
                                                            </div>
                    
                                                        </form>
                                                    </div> <!-- end col -->
        
                                                    <div class="col-md-6">
                                                        <form action="#">
                                                            <div class="form-group">
                                                                <label>Telephone</label>
                                                                <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="0000-0000">
                                                                <span class="font-13 text-muted">e.g "xxxx-xxxx"</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Telephone with Code Area</label>
                                                                <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="(00) 0000-0000">
                                                                <span class="font-13 text-muted">e.g "(xx) xxxx-xxxx"</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>US Telephone</label>
                                                                <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="(000) 000-0000">
                                                                <span class="font-13 text-muted">e.g "(xxx) xxx-xxxx"</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>São Paulo Celphones</label>
                                                                <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="(00) 00000-0000">
                                                                <span class="font-13 text-muted">e.g "(xx) xxxxx-xxxx"</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>CPF</label>
                                                                <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="000.000.000-00" data-reverse="true">
                                                                <span class="font-13 text-muted">e.g "xxx.xxx.xxxx-xx"</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>CNPJ</label>
                                                                <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="00.000.000/0000-00" data-reverse="true">
                                                                <span class="font-13 text-muted">e.g "xx.xxx.xxx/xxxx-xx"</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>IP Address</label>
                                                                <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="099.099.099.099" data-reverse="true">
                                                                <span class="font-13 text-muted">e.g "xxx.xxx.xxx.xxx"</span>
                                                            </div>
                    
                                                        </form>
                                                    </div> <!-- end col -->
                                                </div>
                                                <!-- end row -->                      
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="input-masks-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;Date&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; data-toggle=&quot;input-mask&quot; data-mask-format=&quot;00/00/0000&quot;&gt;
                                                            &lt;span class=&quot;font-13 text-muted&quot;&gt;e.g &quot;DD/MM/YYYY&quot;&lt;/span&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;Hour&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; data-toggle=&quot;input-mask&quot; data-mask-format=&quot;00:00:00&quot;&gt;
                                                            &lt;span class=&quot;font-13 text-muted&quot;&gt;e.g &quot;HH:MM:SS&quot;&lt;/span&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;Date &amp; Hour&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; data-toggle=&quot;input-mask&quot; data-mask-format=&quot;00/00/0000 00:00:00&quot;&gt;
                                                            &lt;span class=&quot;font-13 text-muted&quot;&gt;e.g &quot;DD/MM/YYYY HH:MM:SS&quot;&lt;/span&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;ZIP Code&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; data-toggle=&quot;input-mask&quot; data-mask-format=&quot;00000-000&quot;&gt;
                                                            &lt;span class=&quot;font-13 text-muted&quot;&gt;e.g &quot;xxxxx-xxx&quot;&lt;/span&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;Crazy Zip Code&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; data-toggle=&quot;input-mask&quot; data-mask-format=&quot;0-00-00-00&quot;&gt;
                                                            &lt;span class=&quot;font-13 text-muted&quot;&gt;e.g &quot;x-xx-xx-xx&quot;&lt;/span&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;Money&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; data-toggle=&quot;input-mask&quot; data-mask-format=&quot;000.000.000.000.000,00&quot; data-reverse=&quot;true&quot;&gt;
                                                            &lt;span class=&quot;font-13 text-muted&quot;&gt;e.g &quot;Your money&quot;&lt;/span&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;Money 2&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; data-toggle=&quot;input-mask&quot; data-mask-format=&quot;#.##0,00&quot; data-reverse=&quot;true&quot;&gt;
                                                            &lt;span class=&quot;font-13 text-muted&quot;&gt;e.g &quot;#.##0,00&quot;&lt;/span&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;Telephone&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; data-toggle=&quot;input-mask&quot; data-mask-format=&quot;0000-0000&quot;&gt;
                                                            &lt;span class=&quot;font-13 text-muted&quot;&gt;e.g &quot;xxxx-xxxx&quot;&lt;/span&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;Telephone with Code Area&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; data-toggle=&quot;input-mask&quot; data-mask-format=&quot;(00) 0000-0000&quot;&gt;
                                                            &lt;span class=&quot;font-13 text-muted&quot;&gt;e.g &quot;(xx) xxxx-xxxx&quot;&lt;/span&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;US Telephone&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; data-toggle=&quot;input-mask&quot; data-mask-format=&quot;(000) 000-0000&quot;&gt;
                                                            &lt;span class=&quot;font-13 text-muted&quot;&gt;e.g &quot;(xxx) xxx-xxxx&quot;&lt;/span&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;S&atilde;o Paulo Celphones&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; data-toggle=&quot;input-mask&quot; data-mask-format=&quot;(00) 00000-0000&quot;&gt;
                                                            &lt;span class=&quot;font-13 text-muted&quot;&gt;e.g &quot;(xx) xxxxx-xxxx&quot;&lt;/span&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;CPF&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; data-toggle=&quot;input-mask&quot; data-mask-format=&quot;000.000.000-00&quot; data-reverse=&quot;true&quot;&gt;
                                                            &lt;span class=&quot;font-13 text-muted&quot;&gt;e.g &quot;xxx.xxx.xxxx-xx&quot;&lt;/span&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;CNPJ&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; data-toggle=&quot;input-mask&quot; data-mask-format=&quot;00.000.000/0000-00&quot; data-reverse=&quot;true&quot;&gt;
                                                            &lt;span class=&quot;font-13 text-muted&quot;&gt;e.g &quot;xx.xxx.xxx/xxxx-xx&quot;&lt;/span&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;IP Address&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; data-toggle=&quot;input-mask&quot; data-mask-format=&quot;099.099.099.099&quot; data-reverse=&quot;true&quot;&gt;
                                                            &lt;span class=&quot;font-13 text-muted&quot;&gt;e.g &quot;xxx.xxx.xxx.xxx&quot;&lt;/span&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div> <!-- end row --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Bootstrap Touchspin</h4>
                                        <p class="text-muted font-14">
                                            A mobile and touch friendly input spinner component for Bootstrap.
                                            Specify attribute <code>data-toggle="touchspin"</code> and your input would be conveterted into touch friendly spinner. 
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#touchspin-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#touchspin-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="touchspin-preview">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-3">
                                                            <label>Using data attributes</label>
                                                            <input data-toggle="touchspin" type="text" value="55">
                                                        </div>
        
                                                        <div class="form-group mb-3">
                                                            <label>Example with postfix (large)</label>
                                                            <input data-toggle="touchspin" value="18.20" type="text" data-step="0.1" data-decimals="2" data-bts-postfix="%">
                                                        </div>
        
                                                        <div class="form-group mb-3">
                                                            <label>With prefix</label>
                                                            <input data-toggle="touchspin" type="text" data-bts-prefix="$">
                                                        </div>
        
                                                        <div class="form-group mb-0">
                                                            <label>Change button class</label>
                                                            <input data-toggle="touchspin" value="77" type="text" data-bts-button-down-class="btn btn-danger" data-bts-button-up-class="btn btn-info">
                                                        </div>
                                                    </div> <!-- end col -->
        
                                                    <div class="col-lg-6 mt-3 mt-lg-0">
                                                        <div class="form-group mb-3">
                                                            <label>Init with empty value:</label>
                                                            <input data-toggle="touchspin" type="text">
                                                        </div>
        
                                                        <div class="form-group mb-3">
                                                            <label>Max value - (Default value 100)</label>
                                                            <input data-toggle="touchspin" data-bts-max="500" value="128" data-btn-vertical="true" type="text">
                                                        </div>
        
                                                        <div class="form-group mb-0">
                                                            <label>With prefix and postfix button</label>
                                                            <input data-toggle="touchspin" data-bts-prefix="A Button" data-bts-prefix-extra-class="btn btn-light"  data-bts-postfix="A Button" data-bts-postfix-extra-class="btn btn-light" type="text">
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div>
                                                <!-- end row -->                      
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="touchspin-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;Using data attributes&lt;/label&gt;
                                                            &lt;input data-toggle=&quot;touchspin&quot; type=&quot;text&quot; value=&quot;55&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;Example with postfix (large)&lt;/label&gt;
                                                            &lt;input data-toggle=&quot;touchspin&quot; value=&quot;18.20&quot; type=&quot;text&quot; data-step=&quot;0.1&quot; data-decimals=&quot;2&quot; data-bts-postfix=&quot;%&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;With prefix&lt;/label&gt;
                                                            &lt;input data-toggle=&quot;touchspin&quot; type=&quot;text&quot; data-bts-prefix=&quot;$&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;Change button class&lt;/label&gt;
                                                            &lt;input data-toggle=&quot;touchspin&quot; value=&quot;77&quot; type=&quot;text&quot; data-bts-button-down-class=&quot;btn btn-danger&quot; data-bts-button-up-class=&quot;btn btn-info&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;Init with empty value:&lt;/label&gt;
                                                            &lt;input data-toggle=&quot;touchspin&quot; type=&quot;text&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;Max value - (Default value 100)&lt;/label&gt;
                                                            &lt;input data-toggle=&quot;touchspin&quot; data-bts-max=&quot;500&quot; value=&quot;128&quot; data-btn-vertical=&quot;true&quot; type=&quot;text&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;With prefix and postfix button&lt;/label&gt;
                                                            &lt;input data-toggle=&quot;touchspin&quot; data-bts-prefix=&quot;A Button&quot; data-bts-prefix-extra-class=&quot;btn btn-light&quot;  data-bts-postfix=&quot;A Button&quot; data-bts-postfix-extra-class=&quot;btn btn-light&quot; type=&quot;text&quot;&gt;
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
                                        <h4 class="header-title">Bootstrap Maxlength</h4>
                                        <p class="text-muted font-14">
                                            Uses the HTML5 attribute "maxlength" to work. Just specify <code>data-toggle="maxlength"</code> attribute
                                            to have maxlength indication on any input.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#maxlength-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#maxlength-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="maxlength-preview">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-3">
                                                            <label>Default usage</label>
                                                            <p class="text-muted font-13">
                                                                The badge will show up by default when the remaining chars are 10 or less:
                                                            </p>
                                                            <input type="text" class="form-control" maxlength="25" data-toggle="maxlength">
                                                        </div>
        
                                                        <div class="form-group mb-3">
                                                            <label>Threshold value</label>
                                                            <p class="text-muted font-13">
                                                                Satrt displaying the indication when reached to some threshhold. Specift the data attribute <code>threshold</code>. E.g.
                                                                <code>data-threshold="12"</code>
                                                            </p>
                                                            <input type="text" class="form-control" maxlength="25" data-toggle="maxlength" data-threshold="12">
                                                        </div>
                                                    </div> <!-- end col -->
        
                                                    <div class="col-lg-6 mt-3 mt-lg-0">
                                                        <div class="form-group mb-3">
                                                            <label>Position</label>
                                                            <p class="text-muted font-13">
                                                                All you need to do is specify the data attribute <code>placement</code>. The possible positions are left, top, right, bottom-right, top-right, top-left, 
                                                                bottom, bottom-left and centered-right. If none is specified, the positioning will be defauted to 'bottom'.
                                                                E.g. <code>data-placement="top"</code>
                                                            </p>
                                                            <input type="text" class="form-control" maxlength="25" data-toggle="maxlength" data-placement="top">
                                                        </div>
        
                                                        <div class="form-group mb-0">
                                                            <label>Textareas</label>
                                                            <p class="text-muted font-13">
                                                                Bootstrap maxlength supports textarea as well as inputs. Even on old IE.
                                                            </p>
                                                            <textarea data-toggle="maxlength" class="form-control" maxlength="225" rows="3" 
                                                                placeholder="This textarea has a limit of 225 chars."></textarea>
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div>
                                                <!-- end row -->                      
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="maxlength-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;Default usage&lt;/label&gt;
                                                            &lt;p class=&quot;text-muted font-13&quot;&gt;
                                                                The badge will show up by default when the remaining chars are 10 or less:
                                                            &lt;/p&gt;
                                                            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; maxlength=&quot;25&quot; data-toggle=&quot;maxlength&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;Threshold value&lt;/label&gt;
                                                            &lt;p class=&quot;text-muted font-13&quot;&gt;
                                                                Satrt displaying the indication when reached to some threshhold. Specift the data attribute &lt;code&gt;threshold&lt;/code&gt;. E.g.
                                                                &lt;code&gt;data-threshold=&quot;12&quot;&lt;/code&gt;
                                                            &lt;/p&gt;
                                                            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; maxlength=&quot;25&quot; data-toggle=&quot;maxlength&quot; data-threshold=&quot;12&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;Position&lt;/label&gt;
                                                            &lt;p class=&quot;text-muted font-13&quot;&gt;
                                                                All you need to do is specify the data attribute &lt;code&gt;placement&lt;/code&gt;. The possible positions are left, top, right, bottom-right, top-right, top-left, 
                                                                bottom, bottom-left and centered-right. If none is specified, the positioning will be defauted to 'bottom'.
                                                                E.g. &lt;code&gt;data-placement=&quot;top&quot;&lt;/code&gt;
                                                            &lt;/p&gt;
                                                            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; maxlength=&quot;25&quot; data-toggle=&quot;maxlength&quot; data-placement=&quot;top&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;Textareas&lt;/label&gt;
                                                            &lt;p class=&quot;text-muted font-13&quot;&gt;
                                                                Bootstrap maxlength supports textarea as well as inputs. Even on old IE.
                                                            &lt;/p&gt;
                                                            &lt;textarea data-toggle=&quot;maxlength&quot; class=&quot;form-control&quot; maxlength=&quot;225&quot; rows=&quot;3&quot; 
                                                                placeholder=&quot;This textarea has a limit of 225 chars.&quot;&gt;&lt;/textarea&gt;
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
                                        <h4 class="header-title">Typeahead</h4>
                                        <p class="text-muted font-14">
                                            Typeahead.js is a fast and fully-featured autocomplete library.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#typeahead-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#typeahead-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="typeahead-preview">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-3">
                                                            <label>The Basics</label>
                                                            <input type="text" class="form-control" data-provide="typeahead" id="the-basics" placeholder="Basic Example">
                                                        </div>
                                                    </div> <!-- end col -->
        
                                                    <div class="col-lg-6 mt-3 mt-lg-0">
                                                        <div class="form-group mb-3">
                                                            <label>Bloodhound (Suggestion Engine)</label>
                                                            <input id="bloodhound" class="form-control" type="text" placeholder="States of USA">
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div>
                                                <!-- end row -->
        
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-3">
                                                            <label>Prefetch</label>
                                                            <input type="text" class="form-control" data-provide="typeahead" id="prefetch" placeholder="States of USA">
                                                        </div>
                                                    </div> <!-- end col -->
        
                                                    <div class="col-lg-6 mt-3 mt-lg-0">
                                                        <div class="form-group mb-3">
                                                            <label>Remote</label>
                                                            <input type="text" class="form-control" data-provide="typeahead" id="remote" placeholder="States of USA">
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div>
                                                <!-- end row -->
        
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-3">
                                                            <label>Custom Templates</label>
                                                            <input id="custom-templates" class="form-control" type="text" placeholder="States of USA">
                                                        </div>
                                                    </div> <!-- end col -->
        
                                                    <div class="col-lg-6 mt-3 mt-lg-0">
                                                        <div class="form-group mb-3">
                                                            <label>Default Suggestions</label>
                                                            <input type="text" class="form-control" data-provide="typeahead" id="default-suggestions">
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div>
                                                <!-- end row -->
        
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-0">
                                                            <label>Multiple Datasets</label>
                                                            <input type="text" class="form-control" data-provide="typeahead" id="multiple-datasets">
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div>
                                                <!-- end row -->                      
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="typeahead-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;The Basics&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; data-provide=&quot;typeahead&quot; id=&quot;the-basics&quot; placeholder=&quot;Basic Example&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;Bloodhound (Suggestion Engine)&lt;/label&gt;
                                                            &lt;input id=&quot;bloodhound&quot; class=&quot;form-control&quot; type=&quot;text&quot; placeholder=&quot;States of USA&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;Prefetch&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; data-provide=&quot;typeahead&quot; id=&quot;prefetch&quot; placeholder=&quot;States of USA&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;Remote&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; data-provide=&quot;typeahead&quot; id=&quot;remote&quot; placeholder=&quot;States of USA&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;Custom Templates&lt;/label&gt;
                                                            &lt;input id=&quot;custom-templates&quot; class=&quot;form-control&quot; type=&quot;text&quot; placeholder=&quot;States of USA&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;Default Suggestions&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; data-provide=&quot;typeahead&quot; id=&quot;default-suggestions&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;Multiple Datasets&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; data-provide=&quot;typeahead&quot; id=&quot;multiple-datasets&quot;&gt;
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
                                        <h4 class="header-title">Timepicker</h4>
                                        <p class="text-muted font-14">
                                            Easily select a time for a text input using your mouse or keyboards arrow keys. Specify attribute <code>data-toggle="timepicker"</code>
                                            and you would have nice timepicker input element.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#timepicker-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#timepicker-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="timepicker-preview">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-3">
                                                            <label>Default Time Picker</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" data-toggle='timepicker'>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text"><i class="dripicons-clock"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
        
                                                        <div class="form-group mb-0">
                                                            <label>24 Hour Mode Time Picker E.g. <code>data-show-meridian="false"</code></label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" data-toggle='timepicker' data-show-meridian="false">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text"><i class="dripicons-clock"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> <!-- end col -->
        
                                                    <div class="col-lg-6 mt-3 mt-lg-0">
                                                        <div class="form-group mb-0">
                                                            <label>Specify a step for the minute field E.g. <code>data-minute-step="5"</code></label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" data-toggle='timepicker' data-minute-step="5">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text"><i class="dripicons-clock"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div>
                                                <!-- end row -->                      
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="timepicker-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;Default Time Picker&lt;/label&gt;
                                                            &lt;div class=&quot;input-group&quot;&gt;
                                                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; data-toggle='timepicker'&gt;
                                                                &lt;div class=&quot;input-group-append&quot;&gt;
                                                                    &lt;span class=&quot;input-group-text&quot;&gt;&lt;i class=&quot;dripicons-clock&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;24 Hour Mode Time Picker E.g. &lt;code&gt;data-show-meridian=&quot;false&quot;&lt;/code&gt;&lt;/label&gt;
                                                            &lt;div class=&quot;input-group&quot;&gt;
                                                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; data-toggle='timepicker' data-show-meridian=&quot;false&quot;&gt;
                                                                &lt;div class=&quot;input-group-append&quot;&gt;
                                                                    &lt;span class=&quot;input-group-text&quot;&gt;&lt;i class=&quot;dripicons-clock&quot;&gt;&lt;/i&gt;&lt;/span&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;Specify a step for the minute field E.g. &lt;code&gt;data-minute-step=&quot;5&quot;&lt;/code&gt;&lt;/label&gt;
                                                            &lt;div class=&quot;input-group&quot;&gt;
                                                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; data-toggle='timepicker' data-minute-step=&quot;5&quot;&gt;
                                                                &lt;div class=&quot;input-group-append&quot;&gt;
                                                                    &lt;span class=&quot;input-group-text&quot;&gt;&lt;i class=&quot;dripicons-clock&quot;&gt;&lt;/i&gt;&lt;/span&gt;
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

        <!-- Typehead -->
        <script src="assets/js/vendor/handlebars.min.js"></script>
        <script src="assets/js/vendor/typeahead.bundle.min.js"></script>

        <!-- Demo -->
        <script src="assets/js/pages/demo.typehead.js"></script>
        
    </body>
</html>