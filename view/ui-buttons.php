<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Buttons | Hyper - Responsive Bootstrap 4 Admin Dashboard</title>
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">UI Kit</a></li>
                                            <li class="breadcrumb-item active">Buttons</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Buttons</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-lg-6">  
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Default Buttons</h4>
                                        <p class="text-muted font-14">Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.</p>
                                        
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#default-buttons-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#default-buttons-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="default-buttons-preview">
                                                <div class="button-list">
                                                    <button type="button" class="btn btn-primary">Primary</button>
                                                    <button type="button" class="btn btn-secondary">Secondary</button>
                                                    <button type="button" class="btn btn-success">Success</button>
                                                    <button type="button" class="btn btn-danger">Danger</button>
                                                    <button type="button" class="btn btn-warning">Warning</button>
                                                    <button type="button" class="btn btn-info">Info</button>
                                                    <button type="button" class="btn btn-light">Light</button>
                                                    <button type="button" class="btn btn-dark">Dark</button>
                                                    <button type="button" class="btn btn-link">Link</button>
                                                </div>
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="default-buttons-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Primary&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Secondary&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;Success&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot;&gt;Danger&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-warning&quot;&gt;Warning&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;Info&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;Light&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-dark&quot;&gt;Dark&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-link&quot;&gt;Link&lt;/button&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                            <div class="col-lg-6">  
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Button Outline</h4>
                                        <p class="text-muted font-14">Use a classes <code>.btn-outline-**</code> to quickly create a bordered buttons.</p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#outline-buttons-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#outline-buttons-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="outline-buttons-preview">
                                                <div class="button-list">
                                                    <button type="button" class="btn btn-outline-primary">Primary</button>
                                                    <button type="button" class="btn btn-outline-secondary">Secondary</button>
                                                    <button type="button" class="btn btn-outline-success"><i class="uil-cloud-computing"></i> Success</button>
                                                    <button type="button" class="btn btn-outline-danger">Danger</button>
                                                    <button type="button" class="btn btn-outline-warning">Warning</button>
                                                    <button type="button" class="btn btn-outline-info"><i class="uil-circuit"></i> Info</button>
                                                    <button type="button" class="btn btn-outline-light">Light</button>
                                                    <button type="button" class="btn btn-outline-dark">Dark</button>
                                                </div>
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="outline-buttons-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Primary&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot;&gt;Secondary&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-success&quot;&gt;&lt;i class=&quot;uil-cloud-computing&quot;&gt;&lt;/i&gt; Success&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-danger&quot;&gt;Danger&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-warning&quot;&gt;Warning&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-info&quot;&gt;&lt;i class=&quot;uil-circuit&quot;&gt;&lt;/i&gt; Info&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-light&quot;&gt;Light&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-dark&quot;&gt;Dark&lt;/button&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div> <!-- end row -->


                        <div class="row">
                            <div class="col-lg-6">  
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Button-Rounded</h4>
                                        <p class="text-muted font-14">Add <code>.btn-rounded</code> to default button to get rounded corners.</p>
                                        
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#rounded-buttons-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#rounded-buttons-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="rounded-buttons-preview">
                                                <div class="button-list">
                                                    <button type="button" class="btn btn-primary btn-rounded">Primary</button>
                                                    <button type="button" class="btn btn-secondary btn-rounded">Secondary</button>
                                                    <button type="button" class="btn btn-success btn-rounded">Success</button>
                                                    <button type="button" class="btn btn-danger btn-rounded">Danger</button>
                                                    <button type="button" class="btn btn-warning btn-rounded">Warning</button>
                                                    <button type="button" class="btn btn-info btn-rounded">Info</button>
                                                    <button type="button" class="btn btn-light btn-rounded">Light</button>
                                                    <button type="button" class="btn btn-dark btn-rounded">Dark</button>
                                                    <button type="button" class="btn btn-link btn-rounded">Link</button>
                                                </div>
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="rounded-buttons-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-rounded&quot;&gt;Primary&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary btn-rounded&quot;&gt;Secondary&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-success btn-rounded&quot;&gt;Success&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-danger btn-rounded&quot;&gt;Danger&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-warning btn-rounded&quot;&gt;Warning&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-info btn-rounded&quot;&gt;Info&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light btn-rounded&quot;&gt;Light&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-dark btn-rounded&quot;&gt;Dark&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-link btn-rounded&quot;&gt;Link&lt;/button&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                            <div class="col-lg-6">  
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Button Outline Rounded</h4>
                                        <p class="text-muted font-14">Use a classes <code>.btn-outline-**</code> to quickly create a bordered buttons.</p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#outline-rounded-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#outline-rounded-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="outline-rounded-preview">
                                                <div class="button-list">
                                                    <button type="button" class="btn btn-outline-primary btn-rounded">Primary</button>
                                                    <button type="button" class="btn btn-outline-secondary btn-rounded">Secondary</button>
                                                    <button type="button" class="btn btn-outline-success btn-rounded"><i class="uil-cloud-computing"></i> Success</button>
                                                    <button type="button" class="btn btn-outline-danger btn-rounded">Danger</button>
                                                    <button type="button" class="btn btn-outline-warning btn-rounded">Warning</button>
                                                    <button type="button" class="btn btn-outline-info btn-rounded"><i class="uil-circuit"></i> Info</button>
                                                    <button type="button" class="btn btn-outline-light btn-rounded">Light</button>
                                                    <button type="button" class="btn btn-outline-dark btn-rounded">Dark</button>
                                                </div>
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="outline-rounded-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary btn-rounded&quot;&gt;Primary&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary btn-rounded&quot;&gt;Secondary&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-success btn-rounded&quot;&gt;&lt;i class=&quot;uil-cloud-computing&quot;&gt;&lt;/i&gt; Success&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-danger btn-rounded&quot;&gtgt;Danger&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-warning btn-rounded&quot;&gt;Warning&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-info btn-rounded&quot;&gt;&lt;i class=&quot;uil-circuit&quot;&gt;&lt;/i&gt; Info&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-light btn-rounded&quot;&gt;Light&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-dark btn-rounded&quot;&gt;Dark&lt;/button&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div> <!-- end row -->


                        <div class="row">
                            <div class="col-lg-6">  
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Button-Sizes</h4>
                                        <p class="text-muted font-14">
                                            Add <code>.btn-lg</code>, <code>.btn-sm</code> for additional sizes.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#button-sizes-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#button-sizes-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="button-sizes-preview">
                                                <div class="button-list">
                                                    <button type="button" class="btn btn-primary btn-lg">Large</button>
                                                    <button type="button" class="btn btn-info">Normal</button>
                                                    <button type="button" class="btn btn-success btn-sm">Small</button>
                                                </div>
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="button-sizes-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-lg&quot;&gt;Large&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;Normal&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-success btn-sm&quot;&gt;Small&lt;/button&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                            <div class="col-lg-6">  
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Button-Disabled</h4>
                                        <p class="text-muted font-14">
                                            Add the <code>disabled</code> attribute to <code>&lt;button&gt;</code> buttons.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#button-disabled-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#button-disabled-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="button-disabled-preview">
                                                <div class="button-list">
                                                    <button type="button" class="btn btn-info" disabled>Info</button>
                                                    <button type="button" class="btn btn-success" disabled>Success</button>
                                                    <button type="button" class="btn btn-danger" disabled>Danger</button>
                                                    <button type="button" class="btn btn-dark" disabled>Dark</button>
                                                </div>
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="button-disabled-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot; disabled&gt;Info&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot; disabled&gt;Success&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot; disabled&gt;Danger&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-dark&quot; disabled&gt;Dark&lt;/button&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div> <!-- end row -->


                        <div class="row">
                            <div class="col-lg-6">  
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Icon Buttons</h4>
                                        <p class="text-muted font-14">
                                            Icon only button.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#icon-buttons-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#icon-buttons-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="icon-buttons-preview">
                                                <div class="button-list">
                                                    <button type="button" class="btn btn-light"><i class="mdi mdi-heart-outline"></i> </button>
                                                    <button type="button" class="btn btn-danger"><i class="mdi mdi-window-close"></i> </button>
                                                    <button type="button" class="btn btn-dark"><i class="mdi mdi-music"></i> </button>
                                                    <button type="button" class="btn btn-primary"><i class="mdi mdi-star"></i> </button>
                                                    <button type="button" class="btn btn-success"><i class="mdi mdi-thumb-up-outline"></i> </button>
                                                    <button type="button" class="btn btn-info"><i class="mdi mdi-keyboard"></i> </button>
                                                    <button type="button" class="btn btn-warning"><i class="mdi mdi-wrench"></i> </button>
                                                    <br>
                                                    <button type="button" class="btn btn-light"><i class="mdi mdi-heart mr-1"></i> <span>Like</span> </button>
                                                    <button type="button" class="btn btn-warning"><i class="mdi mdi-rocket mr-1"></i> <span>Launch</span> </button>
                                                    <button type="button" class="btn btn-info"><i class="mdi mdi-cloud mr-1"></i> <span>Cloud Hosting</span> </button>
                                                    <br>
                                                    <button type="button" class="btn btn-outline-success"><i class="uil-money-withdrawal"></i> Money</button>
                                                    <button type="button" class="btn btn-outline-primary"><i class="uil-paypal"></i> PayPal</button>
                                                    <button type="button" class="btn btn-outline-danger"><i class="uil-cog"></i> Settings</button>
                                                </div>
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="icon-buttons-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;&lt;i class=&quot;mdi mdi-heart-outline&quot;&gt;&lt;/i&gt; &lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot;&gt;&lt;i class=&quot;mdi mdi-window-close&quot;&gt;&lt;/i&gt; &lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-dark&quot;&gt;&lt;i class=&quot;mdi mdi-music&quot;&gt;&lt;/i&gt; &lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;&lt;i class=&quot;mdi mdi-star&quot;&gt;&lt;/i&gt; &lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;&lt;i class=&quot;mdi mdi-thumb-up-outline&quot;&gt;&lt;/i&gt; &lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;&lt;i class=&quot;mdi mdi-keyboard&quot;&gt;&lt;/i&gt; &lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-warning&quot;&gt;&lt;i class=&quot;mdi mdi-wrench&quot;&gt;&lt;/i&gt; &lt;/button&gt;
                                                        
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;&lt;i class=&quot;mdi mdi-heart mr-1&quot;&gt;&lt;/i&gt; &lt;span&gt;Like&lt;/span&gt; &lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-warning&quot;&gt;&lt;i class=&quot;mdi mdi-rocket mr-1&quot;&gt;&lt;/i&gt; &lt;span&gt;Launch&lt;/span&gt; &lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;&lt;i class=&quot;mdi mdi-cloud mr-1&quot;&gt;&lt;/i&gt; &lt;span&gt;Cloud Hosting&lt;/span&gt; &lt;/button&gt;
                                                        
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-success&quot;&gt;&lt;i class=&quot;uil-money-withdrawal&quot;&gt;&lt;/i&gt; Money&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;&lt;i class=&quot;uil-paypal&quot;&gt;&lt;/i&gt; PayPal&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-danger&quot;&gt;&lt;i class=&quot;uil-cog&quot;&gt;&lt;/i&gt; Settings&lt;/button&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                            <div class="col-lg-6">  
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Block Button</h4>

                                        <p class="text-muted font-14">
                                            Create block level buttons,with by adding add <code>.btn-block</code>.
                                        </p>
                                        
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#block-buttons-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#block-buttons-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="block-buttons-preview">
                                                <button type="button" class="btn btn-block btn-primary">Block Button</button>
                                                <button type="button" class="btn btn-block btn-sm btn-info">Block Button</button>
                                                <button type="button" class="btn btn-block btn-xs btn-success">Block Button</button>
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="block-buttons-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-block btn-primary&quot;&gt;Block Button&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-block btn-sm btn-info&quot;&gt;Block Button&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-block btn-xs btn-success&quot;&gt;Block Button&lt;/button&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div> <!-- end row -->


                        <div class="row">
                            <div class="col-lg-6">  
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Button Group</h4>

                                        <p class="text-muted font-14">
                                            Wrap a series of buttons with <code>.btn</code> in <code>.btn-group</code>.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#button-group-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#button-group-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="button-group-preview">
                                                <div class="btn-group mb-2">
                                                    <button type="button" class="btn btn-light">Left</button>
                                                    <button type="button" class="btn btn-light">Middle</button>
                                                    <button type="button" class="btn btn-light">Right</button>
                                                </div>

                                                <br>
            
                                                <div class="btn-group mb-2">
                                                    <button type="button" class="btn btn-light">1</button>
                                                    <button type="button" class="btn btn-light">2</button>
                                                    <button type="button" class="btn btn-light">3</button>
                                                    <button type="button" class="btn btn-light">4</button>
                                                </div>

                                                <div class="btn-group mb-2">
                                                    <button type="button" class="btn btn-light">5</button>
                                                    <button type="button" class="btn btn-light">6</button>
                                                    <button type="button" class="btn btn-light">7</button>
                                                </div>

                                                <div class="btn-group mb-2">
                                                    <button type="button" class="btn btn-light">8</button>
                                                </div>

                                                <br>

                                                <div class="btn-group mb-2">
                                                    <button type="button" class="btn btn-light">1</button>
                                                    <button type="button" class="btn btn-primary">2</button>
                                                    <button type="button" class="btn btn-light">3</button>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Dropdown <span class="caret"></span> </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Dropdown link</a>
                                                            <a class="dropdown-item" href="#">Dropdown link</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="btn-group-vertical mb-2">
                                                            <button type="button" class="btn btn-light">Top</button>
                                                            <button type="button" class="btn btn-light">Middle</button>
                                                            <button type="button" class="btn btn-light">Bottom</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="btn-group-vertical mb-2">
                                                            <button type="button" class="btn btn-light">Button 1</button>
                                                            <button type="button" class="btn btn-light">Button 2</button>
                                                            <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Button 3 <span class="caret"></span> </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="button-group-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Button Group --&gt;
                                                        &lt;div class=&quot;btn-group mb-2&quot;&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;Left&lt;/button&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;Middle&lt;/button&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;Right&lt;/button&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;!-- Button Group with Dropdowns--&gt;
                                                        &lt;div class=&quot;btn-group mb-2&quot;&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;1&lt;/button&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;2&lt;/button&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;3&lt;/button&gt;
                                                            &lt;div class=&quot;btn-group&quot;&gt;
                                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-light dropdown-toggle&quot; data-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt; Dropdown &lt;span class=&quot;caret&quot;&gt;&lt;/span&gt; &lt;/button&gt;
                                                                &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Dropdown link&lt;/a&gt;
                                                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Dropdown link&lt;/a&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;!-- Button Group Vertical--&gt;
                                                        &lt;div class=&quot;btn-group-vertical mb-2&quot;&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;Top&lt;/button&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;Middle&lt;/button&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;Bottom&lt;/button&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;!-- Button Group Vertical with Dropdowns--&gt;
                                                        &lt;div class=&quot;btn-group-vertical mb-2&quot;&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;Button 1&lt;/button&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;Button 2&lt;/button&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light dropdown-toggle&quot; data-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt; Button 3 &lt;/button&gt;
                                                            &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Dropdown link&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Dropdown link&lt;/a&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                            
                        </div> <!-- end row -->
                        
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
