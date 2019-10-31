<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Tasks | Hyper - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Summernote css -->
        <link href="assets/css/vendor/summernote-bs4.css" rel="stylesheet" type="text/css" />

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
                        
                        <div class="row">
                            <div class="col-xl-8">
                                <!-- start page title -->
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <div class="app-search">
                                            <form>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search..." />
                                                    <span class="mdi mdi-magnify"></span>
                                                    <div class="input-group-append">
                                                        <button class="btn btn-secondary dropdown-toggle"
                                                            type="button" data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class='uil uil-sort-amount-down'></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Due Date</a>
                                                            <a class="dropdown-item" href="#">Added Date</a>
                                                            <a class="dropdown-item" href="#">Assignee</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <h4 class="page-title">Tasks <a href="#" class="btn btn-success btn-sm ml-3">Add New</a></h4>
                                </div>
                                <!-- end page title -->

                                <!-- tasks panel -->
                                <div class="mt-2">
                                    <a class="text-dark" data-toggle="collapse" href="#todayTasks" aria-expanded="false"
                                        aria-controls="todayTasks">
                                        <h5 class="m-0 pb-2">
                                            <i class='uil uil-angle-down font-18'></i>Today <span class="text-muted">(10)</span>
                                        </h5>
                                    </a>

                                    <div class="collapse show" id="todayTasks">
                                        <div class="card mb-0">
                                            <div class="card-body">
                                                <!-- task -->
                                                <div class="row justify-content-sm-between">
                                                    <div class="col-sm-6 mb-2 mb-sm-0">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="task1">
                                                            <label class="custom-control-label" for="task1">
                                                                Draft the new contract document for sales team
                                                            </label>
                                                        </div> <!-- end checkbox -->
                                                    </div> <!-- end col -->
                                                    <div class="col-sm-6">
                                                        <div class="d-flex justify-content-between">
                                                            <div>
                                                                <img src="assets/images/users/avatar-9.jpg" alt="image"
                                                                class="avatar-xs rounded-circle mr-1" data-toggle="tooltip"
                                                                data-placement="bottom" title="Assigned to Arya S" />
                                                            </div>
                                                            <div>
                                                                <ul class="list-inline font-13 text-right">
                                                                    <li class="list-inline-item">
                                                                        <i class='uil uil-schedule font-16 mr-1'></i> Today 10am
                                                                    </li>
                                                                    <li class="list-inline-item ml-1">
                                                                        <i class='uil uil-align-alt font-16 mr-1'></i> 3/7
                                                                    </li>
                                                                    <li class="list-inline-item ml-1">
                                                                        <i class='uil uil-comment-message font-16 mr-1'></i> 21
                                                                    </li>
                                                                    <li class="list-inline-item ml-2">
                                                                        <span class="badge badge-danger-lighten p-1">High</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div> <!-- end .d-flex-->
                                                    </div> <!-- end col -->
                                                </div>
                                                <!-- end task -->
    
                                                <!-- task -->
                                                <div class="row justify-content-sm-between mt-2">
                                                    <div class="col-sm-6 mb-2 mb-sm-0">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="task2">
                                                            <label class="custom-control-label" for="task2">
                                                                iOS App home page
                                                            </label>
                                                        </div> <!-- end checkbox -->
                                                    </div> <!-- end col -->
                                                    <div class="col-sm-6">
                                                        <div class="d-flex justify-content-between">
                                                            <div>
                                                                <img src="assets/images/users/avatar-2.jpg" alt="image"
                                                                class="avatar-xs rounded-circle mr-1" data-toggle="tooltip"
                                                                data-placement="bottom" title="Assigned to James B" />
                                                            </div>
                                                            <div>
                                                                <ul class="list-inline font-13 text-right">
                                                                    <li class="list-inline-item">
                                                                        <i class='uil uil-schedule font-16 mr-1'></i> Today 4pm
                                                                    </li>
                                                                    <li class="list-inline-item ml-1">
                                                                        <i class='uil uil-align-alt font-16 mr-1'></i> 2/7
                                                                    </li>
                                                                    <li class="list-inline-item ml-1">
                                                                        <i class='uil uil-comment-message font-16 mr-1'></i> 48
                                                                    </li>
                                                                    <li class="list-inline-item ml-2">
                                                                        <span class="badge badge-danger-lighten p-1">High</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div> <!-- end .d-flex-->
                                                    </div> <!-- end col -->
                                                </div>
                                                <!-- end task -->
    
                                                <!-- task -->
                                                <div class="row justify-content-sm-between mt-2">
                                                    <div class="col-sm-6 mb-2 mb-sm-0">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="task3">
                                                            <label class="custom-control-label" for="task3">
                                                                Write a release note
                                                            </label>
                                                        </div> <!-- end checkbox -->
                                                    </div> <!-- end col -->
                                                    <div class="col-sm-6">
                                                        <div class="d-flex justify-content-between">
                                                            <div>
                                                                <img src="assets/images/users/avatar-4.jpg" alt="image"
                                                                class="avatar-xs rounded-circle mr-1" data-toggle="tooltip"
                                                                data-placement="bottom" title="Assigned to Kevin C" />
                                                            </div>
                                                            <div>
                                                                <ul class="list-inline font-13 text-right mb-0">
                                                                    <li class="list-inline-item">
                                                                        <i class='uil uil-schedule font-16 mr-1'></i> Today 6pm
                                                                    </li>
                                                                    <li class="list-inline-item ml-1">
                                                                        <i class='uil uil-align-alt font-16 mr-1'></i> 18/21
                                                                    </li>
                                                                    <li class="list-inline-item ml-1">
                                                                        <i class='uil uil-comment-message font-16 mr-1'></i> 73
                                                                    </li>
                                                                    <li class="list-inline-item ml-2">
                                                                        <span class="badge badge-info-lighten p-1">Medium</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div> <!-- end .d-flex-->
                                                    </div> <!-- end col -->
                                                </div>
                                                <!-- end task -->
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card -->
                                    </div> <!-- end .collapse-->
                                </div> <!-- end .mt-2-->

                                <!-- upcoming tasks -->
                                <div class="mt-4">

                                    <a class="text-dark" data-toggle="collapse" href="#upcomingTasks" aria-expanded="false" aria-controls="upcomingTasks">
                                        <h5 class="m-0 pb-2">
                                            <i class='uil uil-angle-down font-18'></i>Upcoming <span class="text-muted">(5)</span>
                                        </h5>
                                    </a>

                                    <div class="collapse show" id="upcomingTasks">
                                        <div class="card mb-0">
                                            <div class="card-body">
                                                <!-- task -->
                                                <div class="row justify-content-sm-between">
                                                    <div class="col-sm-6 mb-2 mb-sm-0">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="task4">
                                                            <label class="custom-control-label" for="task4">
                                                                Invite user to a project
                                                            </label>
                                                        </div> <!-- end checkbox -->
                                                    </div> <!-- end col -->
                                                    <div class="col-sm-6">
                                                        <div class="d-flex justify-content-between">
                                                            <div>
                                                                <img src="assets/images/users/avatar-2.jpg" alt="image"
                                                                class="avatar-xs rounded-circle mr-1" data-toggle="tooltip"
                                                                data-placement="bottom" title="Assigned to James B" />
                                                            </div>
                                                            <div>
                                                                <ul class="list-inline font-13 text-right">
                                                                    <li class="list-inline-item">
                                                                        <i class='uil uil-schedule font-16 mr-1'></i> Tomorrow 7am
                                                                    </li>
                                                                    <li class="list-inline-item ml-1">
                                                                        <i class='uil uil-align-alt font-16 mr-1'></i> 1/12
                                                                    </li>
                                                                    <li class="list-inline-item ml-1">
                                                                        <i class='uil uil-comment-message font-16 mr-1'></i> 36
                                                                    </li>
                                                                    <li class="list-inline-item ml-2">
                                                                        <span class="badge badge-danger-lighten p-1">High</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div> <!-- end .d-flex-->
                                                    </div> <!-- end col -->
                                                </div>
                                                <!-- end task -->
    
                                                <!-- task -->
                                                <div class="row justify-content-sm-between mt-2">
                                                    <div class="col-sm-6 mb-2 mb-sm-0">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="task5">
                                                            <label class="custom-control-label" for="task5">
                                                                Enable analytics tracking
                                                            </label>
                                                        </div> <!-- end checkbox -->
                                                    </div> <!-- end col -->
                                                    <div class="col-sm-6">
                                                        <div class="d-flex justify-content-between">
                                                            <div>
                                                                <img src="assets/images/users/avatar-2.jpg" alt="image"
                                                                class="avatar-xs rounded-circle mr-1" data-toggle="tooltip"
                                                                data-placement="bottom" title="Assigned to James B" />
                                                            </div>
                                                            <div>
                                                                <ul class="list-inline font-13 text-right">
                                                                    <li class="list-inline-item">
                                                                        <i class='uil uil-schedule font-16 mr-1'></i> 27 Aug 10am
                                                                    </li>
                                                                    <li class="list-inline-item ml-1">
                                                                        <i class='uil uil-align-alt font-16 mr-1'></i> 13/72
                                                                    </li>
                                                                    <li class="list-inline-item ml-1">
                                                                        <i class='uil uil-comment-message font-16 mr-1'></i> 211
                                                                    </li>
                                                                    <li class="list-inline-item ml-2">
                                                                        <span class="badge badge-success-lighten p-1">Low</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div> <!-- end .d-flex-->
                                                    </div> <!-- end col -->
                                                </div>
                                                <!-- end task -->
    
                                                <!-- task -->
                                                <div class="row justify-content-sm-between mt-2">
                                                    <div class="col-sm-6 mb-2 mb-sm-0">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="task6">
                                                            <label class="custom-control-label" for="task6">
                                                                Code HTML email template
                                                            </label>
                                                        </div> <!-- end checkbox -->
                                                    </div> <!-- end col -->
                                                    <div class="col-sm-6">
                                                        <div class="d-flex justify-content-between">
                                                            <div>
                                                                <img src="assets/images/users/avatar-7.jpg" alt="image"
                                                                class="avatar-xs rounded-circle mr-1" data-toggle="tooltip"
                                                                data-placement="bottom" title="Assigned to Edward S" />
                                                            </div>
                                                            <div>
                                                                <ul class="list-inline font-13 text-right mb-0">
                                                                    <li class="list-inline-item">
                                                                        <i class='uil uil-schedule font-16 mr-1'></i> No Due Date
                                                                    </li>
                                                                    <li class="list-inline-item ml-1">
                                                                        <i class='uil uil-align-alt font-16 mr-1'></i> 0/7
                                                                    </li>
                                                                    <li class="list-inline-item ml-1">
                                                                        <i class='uil uil-comment-message font-16 mr-1'></i> 0
                                                                    </li>
                                                                    <li class="list-inline-item ml-2">
                                                                        <span class="badge badge-info-lighten p-1">Medium</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div> <!-- end .d-flex-->
                                                    </div> <!-- end col -->
                                                </div>
                                                <!-- end task -->
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card -->
                                    </div> <!-- end collapse-->
                                </div>
                                <!-- end upcoming tasks -->

                                <!-- start other tasks -->
                                <div class="mt-4 mb-4">
                                    <a class="text-dark" data-toggle="collapse" href="#otherTasks" aria-expanded="false" aria-controls="otherTasks">
                                        <h5 class="m-0 pb-2">
                                            <i class='uil uil-angle-down font-18'></i>Other <span class="text-muted">(3)</span>
                                        </h5>
                                    </a>

                                    <div class="collapse show" id="otherTasks">
                                        <div class="card mb-0">
                                            <div class="card-body">
                                                <!-- task -->
                                                <div class="row justify-content-sm-between">
                                                    <div class="col-sm-6 mb-2 mb-sm-0">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="task7">
                                                            <label class="custom-control-label" for="task7">
                                                                Coordinate with business development
                                                            </label>
                                                        </div> <!-- end checkbox -->
                                                    </div> <!-- end col -->
                                                    <div class="col-sm-6">
                                                        <div class="d-flex justify-content-between">
                                                            <div>
                                                                <img src="assets/images/users/avatar-9.jpg" alt="image"
                                                                class="avatar-xs rounded-circle mr-1" data-toggle="tooltip"
                                                                data-placement="bottom" title="Assigned to Arya S" />
                                                            </div>
                                                            <div>
                                                                <ul class="list-inline font-13 text-right">
                                                                    <li class="list-inline-item">
                                                                        <i class='uil uil-schedule font-16 mr-1'></i> Today 10am
                                                                    </li>
                                                                    <li class="list-inline-item ml-1">
                                                                        <i class='uil uil-align-alt font-16 mr-1'></i> 5/14
                                                                    </li>
                                                                    <li class="list-inline-item ml-1">
                                                                        <i class='uil uil-comment-message font-16 mr-1'></i> 71
                                                                    </li>
                                                                    <li class="list-inline-item ml-2">
                                                                        <span class="badge badge-info-lighten p-1">Medium</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div> <!-- end .d-flex-->
                                                    </div> <!-- end col -->
                                                </div>
                                                <!-- end task -->
    
                                                <!-- task -->
                                                <div class="row justify-content-sm-between mt-2">
                                                    <div class="col-sm-6 mb-2 mb-sm-0">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="task8">
                                                            <label class="custom-control-label" for="task8">
                                                                Kanban board design
                                                            </label>
                                                        </div> <!-- end checkbox -->
                                                    </div> <!-- end col -->
                                                    <div class="col-sm-6">
                                                        <div class="d-flex justify-content-between">
                                                            <div>
                                                                <img src="assets/images/users/avatar-2.jpg" alt="image"
                                                                class="avatar-xs rounded-circle mr-1" data-toggle="tooltip"
                                                                data-placement="bottom" title="Assigned to James B" />
                                                            </div>
                                                            <div>
                                                                <ul class="list-inline font-13 text-right">
                                                                    <li class="list-inline-item">
                                                                        <i class='uil uil-schedule font-16 mr-1'></i> No Due Date
                                                                    </li>
                                                                    <li class="list-inline-item ml-1">
                                                                        <i class='uil uil-align-alt font-16 mr-1'></i> 0/8
                                                                    </li>
                                                                    <li class="list-inline-item ml-1">
                                                                        <i class='uil uil-comment-message font-16 mr-1'></i> 0
                                                                    </li>
                                                                    <li class="list-inline-item ml-2">
                                                                        <span class="badge badge-info-lighten p-1">Medium</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div> <!-- end .d-flex-->
                                                    </div> <!-- end col -->
                                                </div>
                                                <!-- end task -->
    
                                                <!-- task -->
                                                <div class="row justify-content-sm-between mt-2">
                                                    <div class="col-sm-6 mb-2 mb-sm-0">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="task9">
                                                            <label class="custom-control-label" for="task9">
                                                                Code HTML email template for sales outreach
                                                            </label>
                                                        </div> <!-- end checkbox -->
                                                    </div> <!-- end col -->
                                                    <div class="col-sm-6">
                                                        <div class="d-flex justify-content-between">
                                                            <div>
                                                                <img src="assets/images/users/avatar-5.jpg" alt="image"
                                                                class="avatar-xs rounded-circle mr-1" data-toggle="tooltip"
                                                                data-placement="bottom" title="Assigned to Gary H" />
                                                            </div>
                                                            <div>
                                                                <ul class="list-inline font-13 text-right mb-0">
                                                                    <li class="list-inline-item">
                                                                        <i class='uil uil-schedule font-16 mr-1'></i> 10 Sep 3pm
                                                                    </li>
                                                                    <li class="list-inline-item ml-1">
                                                                        <i class='uil uil-align-alt font-16 mr-1'></i> 0/58
                                                                    </li>
                                                                    <li class="list-inline-item ml-1">
                                                                        <i class='uil uil-comment-message font-16 mr-1'></i> 9
                                                                    </li>
                                                                    <li class="list-inline-item ml-2">
                                                                        <span class="badge badge-success-lighten p-1">Low</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div> <!-- end .d-flex-->
                                                    </div> <!-- end col -->
                                                </div>
                                                <!-- end task -->
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card -->
                                    </div>
                                </div>
                            </div> <!-- end col -->

                            <!-- task details -->
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown card-widgets">
                                            <a href="#" class="dropdown-toggle arrow-none" data-toggle="dropdown" aria-expanded="false">
                                                <i class='uil uil-ellipsis-h'></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class='uil uil-file-upload mr-1'></i>Attachment
                                                </a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class='uil uil-edit mr-1'></i>Edit
                                                </a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class='uil uil-file-copy-alt mr-1'></i>Mark as Duplicate
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item text-danger">
                                                    <i class='uil uil-trash-alt mr-1'></i>Delete
                                                </a>
                                            </div> <!-- end dropdown menu-->
                                        </div> <!-- end dropdown-->
                                        
                                        <div class="custom-control custom-checkbox float-left">
                                            <input type="checkbox" class="custom-control-input" id="completedCheck">
                                            <label class="custom-control-label" for="completedCheck">
                                                Mark as completed
                                            </label>
                                        </div> <!-- end custom-checkbox-->

                                        <hr class="mt-4 mb-2" />

                                        <div class="row">
                                            <div class="col">

                                                <h4>Draft the new contract document for sales team</h4>

                                                <div class="row">
                                                    <div class="col-6">
                                                        <!-- assignee -->
                                                        <p class="mt-2 mb-1 text-muted">Assigned To</p>
                                                        <div class="media">
                                                            <img src="assets/images/users/avatar-9.jpg" alt="Arya S" class="rounded-circle mr-2" height="24" />
                                                            <div class="media-body">
                                                                <h5 class="mt-1 font-14">
                                                                    Arya Stark
                                                                </h5>
                                                            </div>
                                                        </div>
                                                        <!-- end assignee -->
                                                    </div> <!-- end col -->

                                                    <div class="col-6">
                                                        <!-- start due date -->
                                                        <p class="mt-2 mb-1 text-muted">Due Date</p>
                                                        <div class="media">
                                                            <i class='uil uil-schedule font-18 text-success mr-1'></i>
                                                            <div class="media-body">
                                                                <h5 class="mt-1 font-14">
                                                                    Today 10am
                                                                </h5>
                                                            </div>
                                                        </div>
                                                        <!-- end due date -->
                                                    </div> <!-- end col -->
                                                </div> <!-- end row -->

                                                <!-- task description -->
                                                <div class="row mt-3">
                                                    <div class="col">
                                                        <div id="taskDesk">
                                                            <p>This is a task description with markup support</p>
                                                            <ul>
                                                                <li>Select a text to reveal the toolbar.</li>
                                                                <li>Edit rich document on-the-fly, so elastic!</li>
                                                            </ul>
                                                            <p>End of air-mode area</p>
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div>
                                                <!-- end task description -->

                                                <!-- start sub tasks/checklists -->
                                                <h5 class="mt-4 mb-2 font-16">Checklists/Sub-tasks</h5>
                                                <div class="custom-control custom-checkbox mt-1">
                                                    <input type="checkbox" class="custom-control-input" id="checklist1">
                                                    <label class="custom-control-label strikethrough" for="checklist1">
                                                        Find out the old contract documents
                                                    </label>
                                                </div>

                                                <div class="custom-control custom-checkbox mt-1">
                                                    <input type="checkbox" class="custom-control-input" id="checklist2">
                                                    <label class="custom-control-label strikethrough" for="checklist2">
                                                        Organize meeting sales associates to understand need in detail
                                                    </label>
                                                </div>

                                                <div class="custom-control custom-checkbox mt-1">
                                                    <input type="checkbox" class="custom-control-input" id="checklist3">
                                                    <label class="custom-control-label strikethrough" for="checklist3">
                                                        Make sure to cover every small details
                                                    </label>
                                                </div>
                                                <!-- end sub tasks/checklists -->

                                                <!-- start attachments -->
                                                <h5 class="mt-4 mb-2 font-16">Attachments</h5>
                                                <div class="card mb-2 shadow-none border">
                                                    <div class="p-1">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <div class="avatar-sm">
                                                                    <span class="avatar-title rounded">
                                                                        .ZIP
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col pl-0">
                                                                <a href="javascript:void(0);" class="text-muted font-weight-bold">sales-assets.zip</a>
                                                                <p class="mb-0">2.3 MB</p>
                                                            </div>
                                                            <div class="col-auto">
                                                                <!-- Button -->
                                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" title="Download"
                                                                    class="btn btn-link text-muted btn-lg p-0">
                                                                    <i class='uil uil-cloud-download'></i>
                                                                </a>
                                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" title="Delete"
                                                                    class="btn btn-link text-danger btn-lg p-0">
                                                                    <i class='uil uil-multiply'></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card mb-2 shadow-none border">
                                                    <div class="p-1">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <img src="assets/images/projects/project-1.jpg"
                                                                    class="avatar-sm rounded" alt="file-image">
                                                            </div>
                                                            <div class="col pl-0">
                                                                <a href="javascript:void(0);" class="text-muted font-weight-bold">new-contarcts.docx</a>
                                                                <p class="mb-0">1.25 MB</p>
                                                            </div>
                                                            <div class="col-auto">
                                                                <!-- Button -->
                                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" title="Download"
                                                                    class="btn btn-link text-muted btn-lg p-0">
                                                                    <i class='uil uil-cloud-download'></i>
                                                                </a>
                                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" title="Delete"
                                                                    class="btn btn-link text-danger btn-lg p-0">
                                                                    <i class='uil uil-multiply'></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end attachments -->

                                                <!-- comments -->
                                                <div class="row mt-3">
                                                    <div class="col">
                                                        <h5 class="mb-2 font-16">Comments</h5>

                                                        <div class="media mt-3 p-1">
                                                            <img src="assets/images/users/avatar-9.jpg" class="mr-2 rounded-circle"
                                                                height="36" alt="Arya Stark" />
                                                            <div class="media-body">
                                                                <h5 class="mt-0 mb-0">
                                                                    <span class="float-right text-muted font-12">4:30am</span>
                                                                    Arya Stark
                                                                </h5>
                                                                <p class="mt-1 mb-0 text-muted">
                                                                    Should I review the last 3 years legal documents as well?
                                                                </p>
                                                            </div>
                                                        </div> <!-- end comment -->

                                                        <hr />

                                                        <div class="media mt-2 p-1">
                                                            <img src="assets/images/users/avatar-5.jpg"
                                                                class="mr-2 rounded-circle" height="36" alt="Dominc B" />
                                                            <div class="media-body">
                                                                <h5 class="mt-0 mb-0">
                                                                    <span class="float-right text-muted font-12">3:30am</span>
                                                                    Gary Somya
                                                                </h5>
                                                                <p class="mt-1 mb-0 text-muted">
                                                                    @Arya FYI..I have created some general guidelines last year.
                                                                </p>
                                                            </div>
                                                        </div> <!-- end comment-->

                                                        <hr />

                                                    </div> <!-- end col -->
                                                </div> <!-- end row -->

                                                <div class="row mt-2">
                                                    <div class="col">
                                                        <div class="border rounded">
                                                            <form action="#" class="comment-area-box">
                                                                <textarea rows="3" class="form-control border-0 resize-none"
                                                                placeholder="Your comment..."></textarea>
                                                                <div class="p-2 bg-light">
                                                                    <div class="float-right">
                                                                        <button type="submit" class="btn btn-sm btn-success"><i class='uil uil-message mr-1'></i>Submit</button>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#" class="btn btn-sm px-1 btn-light"><i class='uil uil-cloud-upload'></i></a>
                                                                        <a href="#" class="btn btn-sm px-1 btn-light"><i class='uil uil-at'></i></a>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div> <!-- end .border-->
                                                    </div> <!-- end col-->
                                                </div> <!-- end row-->
                                                <!-- end comments -->
                                            </div> <!-- end col -->
                                        </div> <!-- end row-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
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

        <!-- Summernote js -->
        <script src="assets/js/vendor/summernote-bs4.min.js"></script>
        
        <script>
            $(document).ready(function(e) {
                $('#taskDesk').summernote({
                    airMode: true,
                    callbacks: {
                        // fix broken checkbox on link modal
                        onInit: function onInit(e) {
                            var editor = $(e.editor);
                            editor.find('.custom-control-description').addClass('custom-control-label').parent().removeAttr('for');
                        }
                    }
                });
            });
        </script>

    </body>
</html>