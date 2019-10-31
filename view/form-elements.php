<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Form Elements | Hyper - Responsive Bootstrap 4 Admin Dashboard</title>
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
                                            <li class="breadcrumb-item active">Form Elements</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Form Elements</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Input Types</h4>
                                        <p class="text-muted font-14">
                                            Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#input-types-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#input-types-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->

                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="input-types-preview">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <form>
                                                            <div class="form-group mb-3">
                                                                <label for="simpleinput">Text</label>
                                                                <input type="text" id="simpleinput" class="form-control">
                                                            </div>
        
                                                            <div class="form-group mb-3">
                                                                <label for="example-email">Email</label>
                                                                <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                                                            </div>
        
                                                            <div class="form-group mb-3">
                                                                <label for="example-password">Password</label>
                                                                <input type="password" id="example-password" class="form-control" value="password">
                                                            </div>
                
                                                            <div class="form-group mb-3">
                                                                <label for="example-palaceholder">Placeholder</label>
                                                                <input type="text" id="example-palaceholder" class="form-control" placeholder="placeholder">
                                                            </div>
        
                                                            <div class="form-group mb-3">
                                                                <label for="example-textarea">Text area</label>
                                                                <textarea class="form-control" id="example-textarea" rows="5"></textarea>
                                                            </div>
                
                                                            <div class="form-group mb-3">
                                                                <label for="example-readonly">Readonly</label>
                                                                <input type="text" id="example-readonly" class="form-control" readonly="" value="Readonly value">
                                                            </div>
        
                                                            <div class="form-group mb-3">
                                                                <label for="example-disable">Disabled</label>
                                                                <input type="text" class="form-control" id="example-disable" disabled="" value="Disabled value">
                                                            </div>
            
                                                            <div class="form-group mb-3">
                                                                <label for="example-static">Static control</label>
                                                                <input type="text" readonly class="form-control-plaintext" id="example-static" value="email@example.com">
                                                            </div>
        
                                                            <div class="form-group mb-0">
                                                                <label for="example-helping">Helping text</label>
                                                                <input type="text" id="example-helping" class="form-control" placeholder="Helping text">
                                                                <span class="help-block"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span>
                                                            </div>
                
                                                        </form>
                                                    </div> <!-- end col -->
        
                                                    <div class="col-lg-6">
                                                        <form>
                
                                                            <div class="form-group mb-3">
                                                                <label for="example-select">Input Select</label>
                                                                <select class="form-control" id="example-select">
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                </select>
                                                            </div>
        
                                                            <div class="form-group mb-3">
                                                                <label for="example-multiselect">Multiple Select</label>
                                                                <select id="example-multiselect" multiple class="form-control">
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                </select>
                                                            </div>
                
                                                            <div class="form-group mb-3">
                                                                <label for="example-fileinput">Default file input</label>
                                                                <input type="file" id="example-fileinput" class="form-control-file">
                                                            </div>
                
                                                            <div class="form-group mb-3">
                                                                <label for="example-date">Date</label>
                                                                <input class="form-control" id="example-date" type="date" name="date">
                                                            </div>
                
                                                            <div class="form-group mb-3">
                                                                <label for="example-month">Month</label>
                                                                <input class="form-control" id="example-month" type="month" name="month">
                                                            </div>
                
                                                            <div class="form-group mb-3">
                                                                <label for="example-time">Time</label>
                                                                <input class="form-control" id="example-time" type="time" name="time">
                                                            </div>
                
                                                            <div class="form-group mb-3">
                                                                <label for="example-week">Week</label>
                                                                <input class="form-control" id="example-week" type="week" name="week">
                                                            </div>
                
                                                            <div class="form-group mb-3">
                                                                <label for="example-number">Number</label>
                                                                <input class="form-control" id="example-number" type="number" name="number">
                                                            </div>
                
                                                            <div class="form-group mb-3">
                                                                <label for="example-color">Color</label>
                                                                <input class="form-control" id="example-color" type="color" name="color" value="#727cf5">
                                                            </div>
                
                                                            <div class="form-group mb-0">
                                                                <label for="example-range">Range</label>
                                                                <input class="custom-range" id="example-range" type="range" name="range" min="0" max="100">
                                                            </div>
                
                                                        </form>
                                                    </div> <!-- end col -->
                                                </div>
                                                <!-- end row-->                      
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="input-types-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label for=&quot;simpleinput&quot;&gt;Text&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; id=&quot;simpleinput&quot; class=&quot;form-control&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label for=&quot;example-email&quot;&gt;Email&lt;/label&gt;
                                                            &lt;input type=&quot;email&quot; id=&quot;example-email&quot; name=&quot;example-email&quot; class=&quot;form-control&quot; placeholder=&quot;Email&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label for=&quot;example-password&quot;&gt;Password&lt;/label&gt;
                                                            &lt;input type=&quot;password&quot; id=&quot;example-password&quot; class=&quot;form-control&quot; value=&quot;password&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label for=&quot;example-palaceholder&quot;&gt;Placeholder&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; id=&quot;example-palaceholder&quot; class=&quot;form-control&quot; placeholder=&quot;placeholder&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label for=&quot;example-textarea&quot;&gt;Text area&lt;/label&gt;
                                                            &lt;textarea class=&quot;form-control&quot; id=&quot;example-textarea&quot; rows=&quot;5&quot;&gt;&lt;/textarea&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label for=&quot;example-readonly&quot;&gt;Readonly&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; id=&quot;example-readonly&quot; class=&quot;form-control&quot; readonly=&quot;&quot; value=&quot;Readonly value&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label for=&quot;example-disable&quot;&gt;Disabled&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;example-disable&quot; disabled=&quot;&quot; value=&quot;Disabled value&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label for=&quot;example-static&quot;&gt;Static control&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; readonly class=&quot;form-control-plaintext&quot; id=&quot;example-static&quot; value=&quot;email@example.com&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label for=&quot;example-helping&quot;&gt;Helping text&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; id=&quot;example-helping&quot; class=&quot;form-control&quot; placeholder=&quot;Helping text&quot;&gt;
                                                            &lt;span class=&quot;help-block&quot;&gt;&lt;small&gt;A block of help text that breaks onto a new line and may extend beyond one line.&lt;/small&gt;&lt;/span&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label for=&quot;example-select&quot;&gt;Input Select&lt;/label&gt;
                                                            &lt;select class=&quot;form-control&quot; id=&quot;example-select&quot;&gt;
                                                                &lt;option&gt;1&lt;/option&gt;
                                                                &lt;option&gt;2&lt;/option&gt;
                                                                &lt;option&gt;3&lt;/option&gt;
                                                                &lt;option&gt;4&lt;/option&gt;
                                                                &lt;option&gt;5&lt;/option&gt;
                                                            &lt;/select&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label for=&quot;example-multiselect&quot;&gt;Multiple Select&lt;/label&gt;
                                                            &lt;select id=&quot;example-multiselect&quot; multiple class=&quot;form-control&quot;&gt;
                                                                &lt;option&gt;1&lt;/option&gt;
                                                                &lt;option&gt;2&lt;/option&gt;
                                                                &lt;option&gt;3&lt;/option&gt;
                                                                &lt;option&gt;4&lt;/option&gt;
                                                                &lt;option&gt;5&lt;/option&gt;
                                                            &lt;/select&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label for=&quot;example-fileinput&quot;&gt;Default file input&lt;/label&gt;
                                                            &lt;input type=&quot;file&quot; id=&quot;example-fileinput&quot; class=&quot;form-control-file&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label for=&quot;example-date&quot;&gt;Date&lt;/label&gt;
                                                            &lt;input class=&quot;form-control&quot; id=&quot;example-date&quot; type=&quot;date&quot; name=&quot;date&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label for=&quot;example-month&quot;&gt;Month&lt;/label&gt;
                                                            &lt;input class=&quot;form-control&quot; id=&quot;example-month&quot; type=&quot;month&quot; name=&quot;month&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label for=&quot;example-time&quot;&gt;Time&lt;/label&gt;
                                                            &lt;input class=&quot;form-control&quot; id=&quot;example-time&quot; type=&quot;time&quot; name=&quot;time&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label for=&quot;example-week&quot;&gt;Week&lt;/label&gt;
                                                            &lt;input class=&quot;form-control&quot; id=&quot;example-week&quot; type=&quot;week&quot; name=&quot;week&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label for=&quot;example-number&quot;&gt;Number&lt;/label&gt;
                                                            &lt;input class=&quot;form-control&quot; id=&quot;example-number&quot; type=&quot;number&quot; name=&quot;number&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label for=&quot;example-color&quot;&gt;Color&lt;/label&gt;
                                                            &lt;input class=&quot;form-control&quot; id=&quot;example-color&quot; type=&quot;color&quot; name=&quot;color&quot; value=&quot;#727cf5&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group mb-0&quot;&gt;
                                                            &lt;label for=&quot;example-range&quot;&gt;Range&lt;/label&gt;
                                                            &lt;input class=&quot;custom-range&quot; id=&quot;example-range&quot; type=&quot;range&quot; name=&quot;range&quot; min=&quot;0&quot; max=&quot;100&quot;&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <h4 class="header-title">Custom select</h4>
                                                <p class="text-muted font-14">
                                                    Custom <code>&lt;select&gt;</code> menus need only a custom class, <code>.custom-select</code> to trigger the custom styles.
                                                </p>

                                                <ul class="nav nav-tabs nav-bordered mb-3">
                                                    <li class="nav-item">
                                                        <a href="#custom-select-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                            Preview
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#custom-select-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                            Code
                                                        </a>
                                                    </li>
                                                </ul> <!-- end nav-->
                                                <div class="tab-content">
                                                    <div class="tab-pane show active" id="custom-select-preview">
                                                        <select class="custom-select mb-3">
                                                            <option selected>Open this select menu</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>     
                                                        <select class="custom-select custom-select-lg mb-3">
                                                            <option selected>Open this select menu</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                            
                                                        <select class="custom-select custom-select-sm mb-3">
                                                            <option selected>Open this select menu</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select> 
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                                            </div>
                                                            <select class="custom-select" id="inputGroupSelect01">
                                                                <option selected>Choose...</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                        </div>   
                                                        <div class="input-group">
                                                            <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                                                <option selected>Choose...</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                            <div class="input-group-append">
                                                                <button class="btn btn-outline-secondary" type="button">Button</button>
                                                            </div>
                                                        </div>                                
                                                    </div> <!-- end preview-->
                                                
                                                    <div class="tab-pane" id="custom-select-code">
                                                        <pre class="mb-0">
                                                            <span class="html escape">
                                                                &lt;select class=&quot;custom-select mb-3&quot;&gt;
                                                                    &lt;option selected&gt;Open this select menu&lt;/option&gt;
                                                                    &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
                                                                    &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
                                                                    &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
                                                                &lt;/select&gt;     
                                                                &lt;select class=&quot;custom-select custom-select-lg mb-3&quot;&gt;
                                                                    &lt;option selected&gt;Open this select menu&lt;/option&gt;
                                                                    &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
                                                                    &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
                                                                    &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
                                                                &lt;/select&gt;
                                                                    
                                                                &lt;select class=&quot;custom-select custom-select-sm mb-3&quot;&gt;
                                                                    &lt;option selected&gt;Open this select menu&lt;/option&gt;
                                                                    &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
                                                                    &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
                                                                    &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
                                                                &lt;/select&gt; 
                                                                &lt;div class=&quot;input-group mb-3&quot;&gt;
                                                                    &lt;div class=&quot;input-group-prepend&quot;&gt;
                                                                        &lt;label class=&quot;input-group-text&quot; for=&quot;inputGroupSelect01&quot;&gt;Options&lt;/label&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;select class=&quot;custom-select&quot; id=&quot;inputGroupSelect01&quot;&gt;
                                                                        &lt;option selected&gt;Choose...&lt;/option&gt;
                                                                        &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
                                                                        &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
                                                                        &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
                                                                    &lt;/select&gt;
                                                                &lt;/div&gt;   
                                                                &lt;div class=&quot;input-group&quot;&gt;
                                                                    &lt;select class=&quot;custom-select&quot; id=&quot;inputGroupSelect04&quot; aria-label=&quot;Example select with button addon&quot;&gt;
                                                                        &lt;option selected&gt;Choose...&lt;/option&gt;
                                                                        &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
                                                                        &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
                                                                        &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
                                                                    &lt;/select&gt;
                                                                    &lt;div class=&quot;input-group-append&quot;&gt;
                                                                        &lt;button class=&quot;btn btn-outline-secondary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            </span>
                                                        </pre> <!-- end highlight-->
                                                    </div> <!-- end preview code-->
                                                </div> <!-- end tab-content-->

                                                <h4 class="header-title mt-4">Switches</h4>
                                                <p class="text-muted font-14">
                                                    A switch has the markup of a custom checkbox but uses the <code>.custom-switch</code> class to render a toggle switch. Switches also support the <code>disabled</code> attribute.
                                                </p>

                                                <ul class="nav nav-tabs nav-bordered mb-3">
                                                    <li class="nav-item">
                                                        <a href="#custom-switch-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                            Preview
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#custom-switch-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                            Code
                                                        </a>
                                                    </li>
                                                </ul> <!-- end nav-->
                                                <div class="tab-content">
                                                    <div class="tab-pane show active" id="custom-switch-preview">
                                                        <div class="custom-control custom-switch">
                                                            <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                                            <label class="custom-control-label" for="customSwitch1">Toggle this switch element</label>
                                                        </div>
                                                        <div class="custom-control custom-switch mt-1">
                                                            <input type="checkbox" class="custom-control-input" disabled id="customSwitch2">
                                                            <label class="custom-control-label" for="customSwitch2">Disabled switch element</label>
                                                        </div>                                           
                                                    </div> <!-- end preview-->
                                                
                                                    <div class="tab-pane" id="custom-switch-code">
                                                        <pre class="mb-0">
                                                            <span class="html escape">
                                                                &lt;!-- Custom Switch --&gt;
                                                                &lt;div class=&quot;custom-control custom-switch&quot;&gt;
                                                                    &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;customSwitch1&quot;&gt;
                                                                    &lt;label class=&quot;custom-control-label&quot; for=&quot;customSwitch1&quot;&gt;Toggle this switch element&lt;/label&gt;
                                                                &lt;/div&gt;
                                                                
                                                                &lt;!-- Custom Switch Disabled --&gt;
                                                                &lt;div class=&quot;custom-control custom-switch&quot;&gt;
                                                                    &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; disabled id=&quot;customSwitch2&quot;&gt;
                                                                    &lt;label class=&quot;custom-control-label&quot; for=&quot;customSwitch2&quot;&gt;Disabled switch element&lt;/label&gt;
                                                                &lt;/div&gt; 
                                                            </span>
                                                        </pre> <!-- end highlight-->
                                                    </div> <!-- end preview code-->
                                                </div> <!-- end tab-content-->

                                            </div> <!-- end col -->
    
                                            <div class="col-lg-6">
                                                <h4 class="header-title mt-5 mt-lg-0">Checkboxes and radios</h4>
                                                <p class="text-muted font-14">
                                                    Each checkbox and radio <code>&lt;input&gt;</code> and <code>&lt;label&gt;</code> pairing is wrapped in a <code>&lt;div&gt;</code> to create our custom control. Structurally, this is the same approach as our default <code>.form-check</code>.
                                                </p>

                                                <ul class="nav nav-tabs nav-bordered mb-3">
                                                    <li class="nav-item">
                                                        <a href="#checkbox-radio-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                            Preview
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#checkbox-radio-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                            Code
                                                        </a>
                                                    </li>
                                                </ul> <!-- end nav-->
                                                <div class="tab-content">
                                                    <div class="tab-pane show active" id="checkbox-radio-preview">
                                                        <h6 class="font-15">Checkboxes</h6>
                                                        <div class="mt-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                                <label class="custom-control-label" for="customCheck2">Check this custom checkbox</label>
                                                            </div>
                                                        </div>

                                                        <h6 class="font-15 mt-3">Inline</h6>

                                                        <div class="mt-2">
                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                                <label class="custom-control-label" for="customCheck3">Check this custom checkbox</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                                <label class="custom-control-label" for="customCheck4">Check this custom checkbox</label>
                                                            </div>
                                                        </div>

                                                        <h6 class="font-15 mt-3">Disabled</h6>

                                                        <div class="mt-2">
                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck5" checked disabled>
                                                                <label class="custom-control-label" for="customCheck5">Check this custom checkbox</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck6" disabled>
                                                                <label class="custom-control-label" for="customCheck6">Check this custom checkbox</label>
                                                            </div>
                                                        </div>

                                                        <h6 class="font-15 mt-3">Radios</h6>

                                                        <div class="mt-3">
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
                                                            </div>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadio2">Or toggle this other custom radio</label>
                                                            </div>
                                                        </div> 
                                                        
                                                        <h6 class="font-15 mt-3">Inline</h6>

                                                        <div class="mt-2">
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="customRadio3" name="customRadio1" class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadio3">Toggle this custom radio</label>
                                                            </div>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="customRadio4" name="customRadio1" class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadio4">Or toggle this other custom radio</label>
                                                            </div>
                                                        </div>

                                                        <h6 class="font-15 mt-3">Disabled</h6>

                                                        <div class="mt-2">
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="customRadio5" name="customRadio2" class="custom-control-input" disabled>
                                                                <label class="custom-control-label" for="customRadio5">Toggle this custom radio</label>
                                                            </div>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="customRadio6" name="customRadio2" class="custom-control-input" checked disabled>
                                                                <label class="custom-control-label" for="customRadio6">Or toggle this other custom radio</label>
                                                            </div>
                                                        </div>

                                                    </div> <!-- end preview-->
                                                
                                                    <div class="tab-pane" id="checkbox-radio-code">
                                                        <pre class="mb-0">
                                                            <span class="html escape">
                                                                &lt;!-- Checkboxes--&gt; 
                                                                &lt;div class=&quot;mt-3&quot;&gt;
                                                                    &lt;div class=&quot;custom-control custom-checkbox&quot;&gt;
                                                                        &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;customCheck1&quot;&gt;
                                                                        &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck1&quot;&gt;Check this custom checkbox&lt;/label&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;custom-control custom-checkbox&quot;&gt;
                                                                        &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;customCheck2&quot;&gt;
                                                                        &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck2&quot;&gt;Check this custom checkbox&lt;/label&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                                
                                                                &lt;!-- Inline--&gt; 
                                                                
                                                                &lt;div class=&quot;mt-2&quot;&gt;
                                                                    &lt;div class=&quot;custom-control custom-checkbox custom-control-inline&quot;&gt;
                                                                        &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;customCheck3&quot;&gt;
                                                                        &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck3&quot;&gt;Check this custom checkbox&lt;/label&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;custom-control custom-checkbox custom-control-inline&quot;&gt;
                                                                        &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;customCheck4&quot;&gt;
                                                                        &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck4&quot;&gt;Check this custom checkbox&lt;/label&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                                
                                                                &lt;!-- Disabled--&gt; 
                                                                
                                                                &lt;div class=&quot;mt-2&quot;&gt;
                                                                    &lt;div class=&quot;custom-control custom-checkbox custom-control-inline&quot;&gt;
                                                                        &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;customCheck5&quot; checked disabled&gt;
                                                                        &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck5&quot;&gt;Check this custom checkbox&lt;/label&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;custom-control custom-checkbox custom-control-inline&quot;&gt;
                                                                        &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;customCheck6&quot; disabled&gt;
                                                                        &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck6&quot;&gt;Check this custom checkbox&lt;/label&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                                
                                                                &lt;!-- Radios--&gt; 
                                                                
                                                                &lt;div class=&quot;mt-3&quot;&gt;
                                                                    &lt;div class=&quot;custom-control custom-radio&quot;&gt;
                                                                        &lt;input type=&quot;radio&quot; id=&quot;customRadio1&quot; name=&quot;customRadio&quot; class=&quot;custom-control-input&quot;&gt;
                                                                        &lt;label class=&quot;custom-control-label&quot; for=&quot;customRadio1&quot;&gt;Toggle this custom radio&lt;/label&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;custom-control custom-radio&quot;&gt;
                                                                        &lt;input type=&quot;radio&quot; id=&quot;customRadio2&quot; name=&quot;customRadio&quot; class=&quot;custom-control-input&quot;&gt;
                                                                        &lt;label class=&quot;custom-control-label&quot; for=&quot;customRadio2&quot;&gt;Or toggle this other custom radio&lt;/label&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt; 
                                                                
                                                                &lt;!-- Inline--&gt; 
                                                                
                                                                &lt;div class=&quot;mt-2&quot;&gt;
                                                                    &lt;div class=&quot;custom-control custom-radio custom-control-inline&quot;&gt;
                                                                        &lt;input type=&quot;radio&quot; id=&quot;customRadio3&quot; name=&quot;customRadio1&quot; class=&quot;custom-control-input&quot;&gt;
                                                                        &lt;label class=&quot;custom-control-label&quot; for=&quot;customRadio3&quot;&gt;Toggle this custom radio&lt;/label&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;custom-control custom-radio custom-control-inline&quot;&gt;
                                                                        &lt;input type=&quot;radio&quot; id=&quot;customRadio4&quot; name=&quot;customRadio1&quot; class=&quot;custom-control-input&quot;&gt;
                                                                        &lt;label class=&quot;custom-control-label&quot; for=&quot;customRadio4&quot;&gt;Or toggle this other custom radio&lt;/label&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                                
                                                                &lt;!-- Disabled--&gt; 
                                                                
                                                                &lt;div class=&quot;mt-2&quot;&gt;
                                                                    &lt;div class=&quot;custom-control custom-radio custom-control-inline&quot;&gt;
                                                                        &lt;input type=&quot;radio&quot; id=&quot;customRadio5&quot; name=&quot;customRadio2&quot; class=&quot;custom-control-input&quot; disabled&gt;
                                                                        &lt;label class=&quot;custom-control-label&quot; for=&quot;customRadio5&quot;&gt;Toggle this custom radio&lt;/label&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;custom-control custom-radio custom-control-inline&quot;&gt;
                                                                        &lt;input type=&quot;radio&quot; id=&quot;customRadio6&quot; name=&quot;customRadio2&quot; class=&quot;custom-control-input&quot; checked disabled&gt;
                                                                        &lt;label class=&quot;custom-control-label&quot; for=&quot;customRadio6&quot;&gt;Or toggle this other custom radio&lt;/label&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            </span>
                                                        </pre> <!-- end highlight-->
                                                    </div> <!-- end preview code-->
                                                </div> <!-- end tab-content-->
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->

                                    </div> <!-- end card-body-->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Input Sizes</h4>
                                        <p class="text-muted font-14">
                                            Set heights using classes like <code>.input-lg</code>, and set widths using grid column classes like <code>.col-lg-*</code>.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#input-sizes-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#input-sizes-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="input-sizes-preview">
                                                <form>
                                                    <div class="form-group mb-3">
                                                        <label for="example-input-small">Small</label>
                                                        <input type="text" id="example-input-small" name="example-input-small" class="form-control form-control-sm" placeholder=".input-sm">
                                                    </div>
        
                                                    <div class="form-group mb-3">
                                                        <label for="example-input-normal">Normal</label>
                                                        <input type="text" id="example-input-normal" name="example-input-normal" class="form-control" placeholder="Normal">
                                                    </div>
        
                                                    <div class="form-group mb-3">
                                                        <label for="example-input-large">Large</label>
                                                        <input type="text" id="example-input-large" name="example-input-large" class="form-control form-control-lg" placeholder=".input-lg">
                                                    </div>
        
                                                    <div class="form-group mb-2">
                                                        <label for="example-gridsize">Grid Sizes</label>
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <input type="text" id="example-gridsize" class="form-control" placeholder=".col-sm-4">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>                                           
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="input-sizes-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;form-group mb-3&quot;&gt;
                                                            &lt;label for=&quot;example-input-small&quot;&gt;Small&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; id=&quot;example-input-small&quot; name=&quot;example-input-small&quot; class=&quot;form-control form-control-sm&quot; placeholder=&quot;.input-sm&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group mb-3&quot;&gt;
                                                            &lt;label for=&quot;example-input-normal&quot;&gt;Normal&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; id=&quot;example-input-normal&quot; name=&quot;example-input-normal&quot; class=&quot;form-control&quot; placeholder=&quot;Normal&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group mb-3&quot;&gt;
                                                            &lt;label for=&quot;example-input-large&quot;&gt;Large&lt;/label&gt;
                                                            &lt;input type=&quot;text&quot; id=&quot;example-input-large&quot; name=&quot;example-input-large&quot; class=&quot;form-control form-control-lg&quot; placeholder=&quot;.input-lg&quot;&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group mb-2&quot;&gt;
                                                            &lt;label for=&quot;example-gridsize&quot;&gt;Grid Sizes&lt;/label&gt;
                                                            &lt;div class=&quot;row&quot;&gt;
                                                                &lt;div class=&quot;col-sm-4&quot;&gt;
                                                                    &lt;input type=&quot;text&quot; id=&quot;example-gridsize&quot; class=&quot;form-control&quot; placeholder=&quot;.col-sm-4&quot;&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Input Group</h4>
                                        <p class="text-muted font-14">
                                            Easily extend form controls by adding text, buttons, or button groups on either side of textual inputs, custom selects, and custom file inputs
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#input-group-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#input-group-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="input-group-preview">
                                                <form>
                                                    <div class="form-group mb-3">
                                                        <label>Static</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">@</span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
        
                                                    <div class="form-group mb-3">
                                                        <label>Dropdowns</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <button class="btn btn-primary   dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                                </div>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
        
                                                    <div class="form-group mb-3">
                                                        <label>Buttons</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username">
                                                            <div class="input-group-append">
                                                                <button class="btn btn-dark  " type="button">Button</button>
                                                            </div>
                                                        </div>
                                                    </div>
        
                                                    <div class="form-group mb-0">
                                                        <label>Custom file input</label>
                                                        <div class="input-group">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" id="inputGroupFile04">
                                                                <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>                                           
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="input-group-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;Static&lt;/label&gt;
                                                            &lt;div class=&quot;input-group&quot;&gt;
                                                                &lt;div class=&quot;input-group-prepend&quot;&gt;
                                                                    &lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon1&quot;&gt;@&lt;/span&gt;
                                                                &lt;/div&gt;
                                                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Username&quot; aria-label=&quot;Username&quot; aria-describedby=&quot;basic-addon1&quot;&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;Dropdowns&lt;/label&gt;
                                                            &lt;div class=&quot;input-group&quot;&gt;
                                                                &lt;div class=&quot;input-group-prepend&quot;&gt;
                                                                    &lt;button class=&quot;btn btn-primary   dropdown-toggle&quot; type=&quot;button&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/button&gt;
                                                                    &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
                                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;&quot; aria-label=&quot;&quot; aria-describedby=&quot;basic-addon1&quot;&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;Buttons&lt;/label&gt;
                                                            &lt;div class=&quot;input-group&quot;&gt;
                                                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Recipient's username&quot; aria-label=&quot;Recipient's username&quot;&gt;
                                                                &lt;div class=&quot;input-group-append&quot;&gt;
                                                                    &lt;button class=&quot;btn btn-dark  &quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;div class=&quot;form-group&quot;&gt;
                                                            &lt;label&gt;Custom file input&lt;/label&gt;
                                                            &lt;div class=&quot;input-group&quot;&gt;
                                                                &lt;div class=&quot;custom-file&quot;&gt;
                                                                    &lt;input type=&quot;file&quot; class=&quot;custom-file-input&quot; id=&quot;inputGroupFile04&quot;&gt;
                                                                    &lt;label class=&quot;custom-file-label&quot; for=&quot;inputGroupFile04&quot;&gt;Choose file&lt;/label&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Basic Example</h4>
                                        <p class="text-muted font-14">Here’s a quick example to demonstrate Bootstrap’s form styles. Keep reading for documentation on required classes, form layout, and more.</p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#basic-form-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#basic-form-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="basic-form-preview">
                                                <form>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Email address</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Password</label>
                                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="checkmeout0">
                                                            <label class="custom-control-label" for="checkmeout0">Check me out !</label>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </form>                                      
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="basic-form-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;form&gt;
                                                            &lt;div class=&quot;form-group&quot;&gt;
                                                                &lt;label for=&quot;exampleInputEmail1&quot;&gt;Email address&lt;/label&gt;
                                                                &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;exampleInputEmail1&quot; aria-describedby=&quot;emailHelp&quot; placeholder=&quot;Enter email&quot;&gt;
                                                                &lt;small id=&quot;emailHelp&quot; class=&quot;form-text text-muted&quot;&gt;We'll never share your email with anyone else.&lt;/small&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;form-group&quot;&ggt;
                                                                &lt;label for=&quot;exampleInputPassword1&quot;&gt;Password&lt;/label&gt;
                                                                &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;exampleInputPassword1&quot; placeholder=&quot;Password&quot;&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;form-group mb-3&quot;&gt;
                                                                &lt;div class=&quot;custom-control custom-checkbox&quot;&gt;
                                                                    &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;checkmeout0&quot;&gt;
                                                                    &lt;label class=&quot;custom-control-label&quot; for=&quot;checkmeout0&quot;&gt;Check me out !&lt;/label&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Submit&lt;/button&gt;
                                                        &lt;/form&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div>
                            <!-- end col -->

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Horizontal form</h4>
                                        <p class="text-muted font-14">Create horizontal forms with the grid by adding the <code>.row</code> class to form groups and using the <code>.col-*-*</code> classes to specify the width of your labels and controls. Be sure to add <code>.col-form-label</code> to your <code>&lt;label&gt;</code>s as well so they’re vertically centered with their associated form controls.</p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#horizontal-form-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#horizontal-form-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="horizontal-form-preview">
                                                <form class="form-horizontal">
                                                    <div class="form-group row mb-3">
                                                        <label for="inputEmail3" class="col-3 col-form-label">Email</label>
                                                        <div class="col-9">
                                                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-3">
                                                        <label for="inputPassword3" class="col-3 col-form-label">Password</label>
                                                        <div class="col-9">
                                                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-3">
                                                        <label for="inputPassword5" class="col-3 col-form-label">Re Password</label>
                                                        <div class="col-9">
                                                            <input type="password" class="form-control" id="inputPassword5" placeholder="Retype Password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-3 justify-content-end">
                                                        <div class="col-9">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="checkmeout">
                                                                <label class="custom-control-label" for="checkmeout">Check me out !</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-0 justify-content-end row">
                                                        <div class="col-9">
                                                            <button type="submit" class="btn btn-info  ">Sign in</button>
                                                        </div>
                                                    </div>
                                                </form>                                            
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="horizontal-form-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;form class=&quot;form-horizontal&quot;&gt;
                                                            &lt;div class=&quot;form-group row mb-3&quot;&gt;
                                                                &lt;label for=&quot;inputEmail3&quot; class=&quot;col-3 col-form-label&quot;&gt;Email&lt;/label&gt;
                                                                &lt;div class=&quot;col-9&quot;&gt;
                                                                    &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;inputEmail3&quot; placeholder=&quot;Email&quot;&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;form-group row mb-3&quot;&gt;
                                                                &lt;label for=&quot;inputPassword3&quot; class=&quot;col-3 col-form-label&quot;&gt;Password&lt;/label&gt;
                                                                &lt;div class=&quot;col-9&quot;&gt;
                                                                    &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;inputPassword3&quot; placeholder=&quot;Password&quot;&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;form-group row mb-3&quot;&gt;
                                                                &lt;label for=&quot;inputPassword5&quot; class=&quot;col-3 col-form-label&quot;&gt;Re Password&lt;/label&gt;
                                                                &lt;div class=&quot;col-9&quot;&gt;
                                                                    &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;inputPassword5&quot; placeholder=&quot;Retype Password&quot;&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;form-group row mb-3 justify-content-end&quot;&gt;
                                                                &lt;div class=&quot;col-9&quot;&gt;
                                                                    &lt;div class=&quot;custom-control custom-checkbox&quot;&gt;
                                                                        &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;checkmeout&quot;&gt;
                                                                        &lt;label class=&quot;custom-control-label&quot; for=&quot;checkmeout&quot;&gt;Check me out !&lt;/label&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;form-group mb-0 justify-content-end row&quot;&gt;
                                                                &lt;div class=&quot;col-9&quot;&gt;
                                                                    &lt;button type=&quot;submit&quot; class=&quot;btn btn-info  &quot;&gt;Sign in&lt;/button&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/form&gt; 
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div>  <!-- end card-body -->
                                </div>  <!-- end card -->
                            </div>  <!-- end col -->

                        </div>
                        <!-- end row -->


                        <!-- Inline Form -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Inline Form</h4>
                                        <p class="text-muted font-14">
                                            Use the <code>.form-inline</code> class to display a series of labels, form controls, and buttons on a single horizontal row. Form controls within inline forms vary slightly from their default states. Controls only appear inline in viewports that are at least 576px wide to account for narrow viewports on mobile devices.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#inline-form-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#inline-form-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="inline-form-preview">
                                                <form class="form-inline">
                                                    <div class="form-group">
                                                        <label for="staticEmail2" class="sr-only">Email</label>
                                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="email@example.com">
                                                    </div>
                                                    <div class="form-group mx-sm-3">
                                                        <label for="inputPassword2" class="sr-only">Password</label>
                                                        <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Confirm identity</button>
                                                </form>
            
                                                <h6 class="font-13 mt-3">Auto-sizing</h6>
            
                                                <form>
                                                    <div class="form-row align-items-center">
                                                        <div class="col-auto">
                                                            <label class="sr-only" for="inlineFormInput">Name</label>
                                                            <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Jane Doe">
                                                        </div>
                                                        <div class="col-auto">
                                                            <label class="sr-only" for="inlineFormInputGroup">Username</label>
                                                            <div class="input-group mb-2">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">@</div>
                                                                </div>
                                                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                                                            </div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="custom-control custom-checkbox mb-2">
                                                                <input type="checkbox" class="custom-control-input" id="autoSizingCheck">
                                                                <label class="custom-control-label" for="autoSizingCheck">Remember me</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <button type="submit" class="btn btn-primary mb-2">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>                                            
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="inline-form-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;form class=&quot;form-inline&quot;&gt;
                                                            &lt;div class=&quot;form-group&quot;&gt;
                                                                &lt;label for=&quot;staticEmail2&quot; class=&quot;sr-only&quot;&gt;Email&lt;/label&gt;
                                                                &lt;input type=&quot;text&quot; readonly class=&quot;form-control-plaintext&quot; id=&quot;staticEmail2&quot; value=&quot;email@example.com&quot;&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;form-group mx-sm-3&quot;&gt;
                                                                &lt;label for=&quot;inputPassword2&quot; class=&quot;sr-only&quot;&gt;Password&lt;/label&gt;
                                                                &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;inputPassword2&quot; placeholder=&quot;Password&quot;&gt;
                                                            &lt;/div&gt;
                                                            &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Confirm identity&lt;/button&gt;
                                                        &lt;/form&gt;
                                                        
                                                        &lt;!-- Auto-sizing --&gt;
                                                        
                                                        &lt;form&gt;
                                                            &lt;div class=&quot;form-row align-items-center&quot;&gt;
                                                                &lt;div class=&quot;col-auto&quot;&gt;
                                                                    &lt;label class=&quot;sr-only&quot; for=&quot;inlineFormInput&quot;&gt;Name&lt;/label&gt;
                                                                    &lt;input type=&quot;text&quot; class=&quot;form-control mb-2&quot; id=&quot;inlineFormInput&quot; placeholder=&quot;Jane Doe&quot;&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;col-auto&quot;&gt;
                                                                    &lt;label class=&quot;sr-only&quot; for=&quot;inlineFormInputGroup&quot;&gt;Username&lt;/label&gt;
                                                                    &lt;div class=&quot;input-group mb-2&quot;&gt;
                                                                        &lt;div class=&quot;input-group-prepend&quot;&gt;
                                                                            &lt;div class=&quot;input-group-text&quot;&gt;@&lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inlineFormInputGroup&quot; placeholder=&quot;Username&quot;&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;col-auto&quot;&gt;
                                                                    &lt;div class=&quot;custom-control custom-checkbox mb-2&quot;&gt;
                                                                        &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;autoSizingCheck&quot;&gt;
                                                                        &lt;label class=&quot;custom-control-label&quot; for=&quot;autoSizingCheck&quot;&gt;Remember me&lt;/label&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;col-auto&quot;&gt;
                                                                    &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary mb-2&quot;&gt;Submit&lt;/button&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/form&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Horizontal form label sizing</h4>
                                        <p class="text-muted font-14">Be sure to use <code>.col-form-label-sm</code> or <code>.col-form-label-lg</code> to your <code>&lt;label&gt;</code>s or <code>&lt;legend&gt;</code>s to correctly follow the size of <code>.form-control-lg</code> and <code>.form-control-sm</code>.</p>
                        
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#label-sizing-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#label-sizing-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="label-sizing-preview">
                                                <form>
                                                    <div class="form-group row">
                                                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                                                        <div class="col-sm-10">
                                                        <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                                                        <div class="col-sm-10">
                                                        <input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-0">
                                                        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
                                                        <div class="col-sm-10">
                                                        <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="col-form-label-lg">
                                                        </div>
                                                    </div>
                                                </form>                                        
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="label-sizing-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;form&gt;
                                                            &lt;div class=&quot;form-group row&quot;&gt;
                                                                &lt;label for=&quot;colFormLabelSm&quot; class=&quot;col-sm-2 col-form-label col-form-label-sm&quot;&gt;Email&lt;/label&gt;
                                                                &lt;div class=&quot;col-sm-10&quot;&gt;
                                                                &lt;input type=&quot;email&quot; class=&quot;form-control form-control-sm&quot; id=&quot;colFormLabelSm&quot; placeholder=&quot;col-form-label-sm&quot;&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;form-group row&quot;&gt;
                                                                &lt;label for=&quot;colFormLabel&quot; class=&quot;col-sm-2 col-form-label&quot;&gt;Email&lt;/label&gt;
                                                                &lt;div class=&quot;col-sm-10&quot;&gt;
                                                                &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;colFormLabel&quot; placeholder=&quot;col-form-label&quot;&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;form-group row&quot;&gt;
                                                                &lt;label for=&quot;colFormLabelLg&quot; class=&quot;col-sm-2 col-form-label col-form-label-lg&quot;&gt;Email&lt;/label&gt;
                                                                &lt;div class=&quot;col-sm-10&quot;&gt;
                                                                &lt;input type=&quot;email&quot; class=&quot;form-control form-control-lg&quot; id=&quot;colFormLabelLg&quot; placeholder=&quot;col-form-label-lg&quot;&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/form&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <!-- Form row -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Form Row</h4>
                                        <p class="text-muted font-14">
                                            You may also swap <code>.row</code> for <code>.form-row</code>, a variation of our standard grid row that overrides the default column gutters for tighter and more compact layouts.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#form-row-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#form-row-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="form-row-preview">
                                                <form>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="inputEmail4" class="col-form-label">Email</label>
                                                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="inputPassword4" class="col-form-label">Password</label>
                                                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                                        </div>
                                                    </div>
        
                                                    <div class="form-group">
                                                        <label for="inputAddress" class="col-form-label">Address</label>
                                                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                                    </div>
        
                                                    <div class="form-group">
                                                        <label for="inputAddress2" class="col-form-label">Address 2</label>
                                                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                                    </div>
        
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="inputCity" class="col-form-label">City</label>
                                                            <input type="text" class="form-control" id="inputCity">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="inputState" class="col-form-label">State</label>
                                                            <select id="inputState" class="form-control">
                                                                <option>Choose</option>
                                                                <option>Option 1</option>
                                                                <option>Option 2</option>
                                                                <option>Option 3</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-2">
                                                            <label for="inputZip" class="col-form-label">Zip</label>
                                                            <input type="text" class="form-control" id="inputZip">
                                                        </div>
                                                    </div>
        
                                                    <div class="form-group">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck11">
                                                            <label class="custom-control-label" for="customCheck11">Check this custom checkbox</label>
                                                        </div>
                                                    </div>
        
                                                    <button type="submit" class="btn btn-primary">Sign in</button>
        
                                                </form>                      
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="form-row-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;form&gt;
                                                            &lt;div class=&quot;form-row&quot;&gt;
                                                                &lt;div class=&quot;form-group col-md-6&quot;&gt;
                                                                    &lt;label for=&quot;inputEmail4&quot; class=&quot;col-form-label&quot;&gt;Email&lt;/label&gt;
                                                                    &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;inputEmail4&quot; placeholder=&quot;Email&quot;&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;form-group col-md-6&quot;&gt;
                                                                    &lt;label for=&quot;inputPassword4&quot; class=&quot;col-form-label&quot;&gt;Password&lt;/label&gt;
                                                                    &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;inputPassword4&quot; placeholder=&quot;Password&quot;&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                
                                                            &lt;div class=&quot;form-group&quot;&gt;
                                                                &lt;label for=&quot;inputAddress&quot; class=&quot;col-form-label&quot;&gt;Address&lt;/label&gt;
                                                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputAddress&quot; placeholder=&quot;1234 Main St&quot;&gt;
                                                            &lt;/div&gt;
                
                                                            &lt;div class=&quot;form-group&quot;&gt;
                                                                &lt;label for=&quot;inputAddress2&quot; class=&quot;col-form-label&quot;&gt;Address 2&lt;/label&gt;
                                                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputAddress2&quot; placeholder=&quot;Apartment, studio, or floor&quot;&gt;
                                                            &lt;/div&gt;
                
                                                            &lt;div class=&quot;form-row&quot;&gt;
                                                                &lt;div class=&quot;form-group col-md-6&quot;&gt;
                                                                    &lt;label for=&quot;inputCity&quot; class=&quot;col-form-label&quot;&gt;City&lt;/label&gt;
                                                                    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputCity&quot;&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;form-group col-md-4&quot;&gt;
                                                                    &lt;label for=&quot;inputState&quot; class=&quot;col-form-label&quot;&gt;State&lt;/label&gt;
                                                                    &lt;select id=&quot;inputState&quot; class=&quot;form-control&quot;&gt;
                                                                        &lt;option&gt;Choose&lt;/option&gt;
                                                                        &lt;option&gt;Option 1&lt;/option&gt;
                                                                        &lt;option&gt;Option 2&lt;/option&gt;
                                                                        &lt;option&gt;Option 3&lt;/option&gt;
                                                                    &lt;/select&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;form-group col-md-2&quot;&gt;
                                                                    &lt;label for=&quot;inputZip&quot; class=&quot;col-form-label&quot;&gt;Zip&lt;/label&gt;
                                                                    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputZip&quot;&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                
                                                            &lt;div class=&quot;form-group&quot;&gt;
                                                                &lt;div class=&quot;custom-control custom-checkbox&quot;&gt;
                                                                    &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;customCheck11&quot;&gt;
                                                                    &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck11&quot;&gt;Check this custom checkbox&lt;/label&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                
                                                            &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Sign in&lt;/button&gt;
                
                                                        &lt;/form&gt;
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