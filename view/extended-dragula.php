<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Dragula | Hyper - Responsive Bootstrap 4 Admin Dashboard</title>
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
                                            <li class="breadcrumb-item active">Dragula</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Dragula</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Simple Drag and Drop Example</h4>
                                        <p class="text-muted font-14">
                                            Just specify the data attribute <code>data-plugin='dragula'</code> to have drag and drop support in your container.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered">
                                            <li class="nav-item">
                                                <a href="#simple-drag-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#simple-drag-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="simple-drag-preview">
                                                <div class="row" id="simple-dragula" data-plugin="dragula">
                                                    <div class="col-md-4">
                                                        <div class="card mb-0 mt-3 text-white bg-primary">
                                                            <div class="card-body">
                                                                <blockquote class="card-bodyquote mb-0">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                                        erat a ante.</p>
                                                                    <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                                                                    </footer>
                                                                </blockquote>
                                                            </div> <!-- end card-body-->
                                                        </div> <!-- end card-->
                                                    </div> <!-- end col-->
        
                                                    <div class="col-md-4">
                                                        <div class="card mb-0 mt-3 bg-secondary text-white">
                                                            <div class="card-body">
                                                                <blockquote class="card-bodyquote mb-0">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                                        erat a ante.</p>
                                                                    <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                                                                    </footer>
                                                                </blockquote>
                                                            </div> <!-- end card-body-->
                                                        </div> <!-- end card-->
                                                    </div> <!-- end col-->                    
                        
                                                    <div class="col-md-4">
                                                        <div class="card mb-0 mt-3 text-white bg-success">
                                                            <div class="card-body">
                                                                <blockquote class="card-bodyquote mb-0">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                                        erat a ante.</p>
                                                                    <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                                                                    </footer>
                                                                </blockquote>
                                                            </div> <!-- end card-body-->
                                                        </div> <!-- end card-->
                                                    </div> <!-- end col-->   
                                                    
                                                    <div class="col-md-4">
                                                        <div class="card mb-0 mt-3 text-white bg-info text-xs-center">
                                                            <div class="card-body">
                                                                <blockquote class="card-bodyquote mb-0">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                                        erat a ante.</p>
                                                                    <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                                                                    </footer>
                                                                </blockquote>
                                                            </div> <!-- end card-body-->
                                                        </div> <!-- end card-->
                                                    </div> <!-- end col-->
                        
                                                    <div class="col-md-4">
                                                        <div class="card mb-0 mt-3 text-white bg-warning text-xs-center">
                                                            <div class="card-body">
                                                                <blockquote class="card-bodyquote mb-0">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                                        erat a ante.</p>
                                                                    <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                                                                    </footer>
                                                                </blockquote>
                                                            </div> <!-- end card-body-->
                                                        </div> <!-- end card-->
                                                    </div> <!-- end col-->
                        
                                                    <div class="col-md-4">
                                                        <div class="card mb-0 mt-3 text-white bg-danger text-xs-center">
                                                            <div class="card-body">
                                                                <blockquote class="card-bodyquote mb-0">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                                        erat a ante.</p>
                                                                    <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                                                                    </footer>
                                                                </blockquote>
                                                            </div> <!-- end card-body-->
                                                        </div> <!-- end card-->
                                                    </div> <!-- end col--> 
        
                                                </div>
                                                <!-- end row-->                                           
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="simple-drag-code">
                                                <p class="mt-3">Make sure to include following js files at end of <code>body element</code></p>

                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;script src=&quot;assets/js/vendor/dragula.min.js&quot;&gt;&lt;/script&gt;
                                                        &lt;script src=&quot;assets/js/ui/component.dragula.js&quot;&gt;&lt;/script&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                                    
                                                <pre class="mb-0 mt-1">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;row&quot; id=&quot;simple-dragula&quot; data-plugin=&quot;dragula&quot;&gt;
                                                            &lt;div class=&quot;col-md-4&quot;&gt;
                                                                &lt;div class=&quot;card mb-0 mt-3 text-white bg-primary&quot;&gt;
                                                                    &lt;div class=&quot;card-body&quot;&gt;
                                                                        &lt;blockquote class=&quot;card-bodyquote mb-0&quot;&gt;
                                                                            &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                                                erat a ante.&lt;/p&gt;
                                                                            &lt;footer&gt;Someone famous in &lt;cite title=&quot;Source Title&quot;&gt;Source Title&lt;/cite&gt;
                                                                            &lt;/footer&gt;
                                                                        &lt;/blockquote&gt;
                                                                    &lt;/div&gt; &lt;!-- end card-body--&gt;
                                                                &lt;/div&gt; &lt;!-- end card--&gt;
                                                            &lt;/div&gt; &lt;!-- end col--&gt;
                
                                                            &lt;div class=&quot;col-md-4&quot;&gt;
                                                                &lt;div class=&quot;card mb-0 mt-3 bg-secondary text-white&quot;&gt;
                                                                    &lt;div class=&quot;card-body&quot;&gt;
                                                                        &lt;blockquote class=&quot;card-bodyquote mb-0&quot;&gt;
                                                                            &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                                                erat a ante.&lt;/p&gt;
                                                                            &lt;footer&gt;Someone famous in &lt;cite title=&quot;Source Title&quot;&gt;Source Title&lt;/cite&gt;
                                                                            &lt;/footer&gt;
                                                                        &lt;/blockquote&gt;
                                                                    &lt;/div&gt; &lt;!-- end card-body--&gt;
                                                                &lt;/div&gt; &lt;!-- end card--&gt;
                                                            &lt;/div&gt; &lt;!-- end col--&gt;                    
                                
                                                            &lt;div class=&quot;col-md-4&quot;&gt;
                                                                &lt;div class=&quot;card mb-0 mt-3 text-white bg-success&quot;&gt;
                                                                    &lt;div class=&quot;card-body&quot;&gt;
                                                                        &lt;blockquote class=&quot;card-bodyquote mb-0&quot;&gt;
                                                                            &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                                                erat a ante.&lt;/p&gt;
                                                                            &lt;footer&gt;Someone famous in &lt;cite title=&quot;Source Title&quot;&gt;Source Title&lt;/cite&gt;
                                                                            &lt;/footer&gt;
                                                                        &lt;/blockquote&gt;
                                                                    &lt;/div&gt; &lt;!-- end card-body--&gt;
                                                                &lt;/div&gt; &lt;!-- end card--&gt;
                                                            &lt;/div&gt; &lt;!-- end col--&gt;   
                                                            
                                                            &lt;div class=&quot;col-md-4&quot;&gt;
                                                                &lt;div class=&quot;card mb-0 mt-3 text-white bg-info text-xs-center&quot;&gt;
                                                                    &lt;div class=&quot;card-body&quot;&gt;
                                                                        &lt;blockquote class=&quot;card-bodyquote mb-0&quot;&gt;
                                                                            &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                                                erat a ante.&lt;/p&gt;
                                                                            &lt;footer&gt;Someone famous in &lt;cite title=&quot;Source Title&quot;&gt;Source Title&lt;/cite&gt;
                                                                            &lt;/footer&gt;
                                                                        &lt;/blockquote&gt;
                                                                    &lt;/div&gt; &lt;!-- end card-body--&gt;
                                                                &lt;/div&gt; &lt;!-- end card--&gt;
                                                            &lt;/div&gt; &lt;!-- end col--&gt;
                                
                                                            &lt;div class=&quot;col-md-4&quot;&gt;
                                                                &lt;div class=&quot;card mb-0 mt-3 text-white bg-warning text-xs-center&quot;&gt;
                                                                    &lt;div class=&quot;card-body&quot;&gt;
                                                                        &lt;blockquote class=&quot;card-bodyquote mb-0&quot;&gt;
                                                                            &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                                                erat a ante.&lt;/p&gt;
                                                                            &lt;footer&gt;Someone famous in &lt;cite title=&quot;Source Title&quot;&gt;Source Title&lt;/cite&gt;
                                                                            &lt;/footer&gt;
                                                                        &lt;/blockquote&gt;
                                                                    &lt;/div&gt; &lt;!-- end card-body--&gt;
                                                                &lt;/div&gt; &lt;!-- end card--&gt;
                                                            &lt;/div&gt; &lt;!-- end col--&gt;
                                
                                                            &lt;div class=&quot;col-md-4&quot;&gt;
                                                                &lt;div class=&quot;card mb-0 mt-3 text-white bg-danger text-xs-center&quot;&gt;
                                                                    &lt;div class=&quot;card-body&quot;&gt;
                                                                        &lt;blockquote class=&quot;card-bodyquote mb-0&quot;&gt;
                                                                            &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                                                erat a ante.&lt;/p&gt;
                                                                            &lt;footer&gt;Someone famous in &lt;cite title=&quot;Source Title&quot;&gt;Source Title&lt;/cite&gt;
                                                                            &lt;/footer&gt;
                                                                        &lt;/blockquote&gt;
                                                                    &lt;/div&gt; &lt;!-- end card-body--&gt;
                                                                &lt;/div&gt; &lt;!-- end card--&gt;
                                                            &lt;/div&gt; &lt;!-- end col--&gt; 
                                                        &lt;/div&gt;
                                                        &lt;!-- end row--&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div> <!-- end row -->


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Move stuff between containers</h4>
                                        <p class="text-muted font-14 mb-3"> 
                                                Just specify the data attribute
                                            <code>data-plugin='dragula'</code> and
                                            <code>data-containers='["first-container-id", "second-container-id"]'</code>.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#move-stuff-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#move-stuff-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="move-stuff-preview">
                                                <div class="row" data-plugin="dragula" data-containers='["company-list-left", "company-list-right"]'>
                                                    <div class="col-md-6">
                                                        <div class="bg-dragula p-2 p-lg-4">
                                                            <h5 class="mt-0">Part 1</h5>
                                                            <div id="company-list-left" class="py-2">
        
                                                                <div class="card mb-0 mt-2">
                                                                    <div class="card-body">
                                                                        <div class="media">
                                                                            <img src="assets/images/users/avatar-1.jpg" alt="image" class="mr-3 d-none d-sm-block avatar-sm rounded-circle">
                                                                            <div class="media-body">
                                                                                <h5 class="mb-1 mt-0">Louis K. Bond</h5>
                                                                                <p> Founder & CEO </p>
                                                                                <p class="mb-0 text-muted">
                                                                                    <span class="font-italic"><b>"</b>Disrupt pork belly poutine, asymmetrical tousled succulents selfies. You probably haven't heard of them tattooed master cleanse live-edge keffiyeh.</span>
                                                                                </p>
                                                                            </div> <!-- end media-body -->
                                                                        </div> <!-- end media -->
                                                                    </div> <!-- end card-body -->
                                                                </div> <!-- end col -->
        
                                                                <div class="card mb-0 mt-2">
                                                                    <div class="card-body">
                                                                        <div class="media">
                                                                            <img src="assets/images/users/avatar-2.jpg" alt="image" class="mr-3 d-none d-sm-block avatar-sm rounded-circle">
                                                                            <div class="media-body">
                                                                                <h5 class="mb-1 mt-0">Dennis N. Cloutier</h5>
                                                                                <p> Software Engineer </p>
                                                                                <p class="mb-0 text-muted">
                                                                                    <span class="font-italic"><b>"</b>Disrupt pork belly poutine, asymmetrical tousled succulents selfies. You probably haven't heard of them tattooed master cleanse live-edge keffiyeh.</span>
                                                                                </p>
                                                                            </div> <!-- end media-body -->
                                                                        </div> <!-- end media -->
                                                                    </div> <!-- end card-body -->
                                                                </div> <!-- end col -->
        
                                                                <div class="card mb-0 mt-2">
                                                                    <div class="card-body">
                                                                        <div class="media">
                                                                            <img src="assets/images/users/avatar-3.jpg" alt="image" class="mr-3 d-none d-sm-block avatar-sm rounded-circle">
                                                                            <div class="media-body">
                                                                                <h5 class="mb-1 mt-0">Susan J. Sander</h5>
                                                                                <p> Web Designer </p>
                                                                                <p class="mb-0 text-muted">
                                                                                    <span class="font-italic"><b>"</b>Disrupt pork belly poutine, asymmetrical tousled succulents selfies. You probably haven't heard of them tattooed master cleanse live-edge keffiyeh.</span>
                                                                                </p>
                                                                            </div> <!-- end media-body -->
                                                                        </div> <!-- end media -->
                                                                    </div> <!-- end card-body -->
                                                                </div> <!-- end col -->
                                                                
                                                            </div> <!-- end company-list-1-->
                                                        </div> <!-- end div.bg-light-->
                                                    </div> <!-- end col -->
        
                                                    <div class="col-md-6">
                                                        <div class="bg-dragula p-2 p-lg-4">
                                                            <h5 class="mt-0">Part 2</h5>
                                                            <div id="company-list-right" class="py-2">
                                                                <div class="card mb-0 mt-2">
        
                                                                    <div class="card-body p-3">
                                                                        <div class="media">
                                                                            <img src="assets/images/users/avatar-4.jpg" alt="image" class="mr-3 d-none d-sm-block avatar-sm rounded-circle">
                                                                            <div class="media-body">
                                                                                <h5 class="mb-1 mt-0">James M. Short</h5>
                                                                                <p> Web Developer </p>
                                                                                <p class="mb-0 text-muted">
                                                                                    <span class="font-italic"><b>"</b>Disrupt pork belly poutine, asymmetrical tousled succulents selfies. You probably haven't heard of them tattooed master cleanse live-edge keffiyeh </span>
                                                                                </p>
                                                                            </div> <!-- end media-body -->
                                                                        </div> <!-- end media -->
                                                                    </div> <!-- end card-body -->
                                                                </div> <!-- end col -->
        
                                                                <div class="card mb-0 mt-2">
                                                                    <div class="card-body p-3">
                                                                        <div class="media">
                                                                            <img src="assets/images/users/avatar-5.jpg" alt="image" class="mr-3 d-none d-sm-block avatar-sm rounded-circle">
                                                                            <div class="media-body">
                                                                                <h5 class="mb-1 mt-0">Gabriel J. Snyder</h5>
                                                                                <p> Business Analyst </p>
                                                                                <p class="mb-0 text-muted">
                                                                                    <span class="font-italic"><b>"</b>Disrupt pork belly poutine, asymmetrical tousled succulents selfies. You probably haven't heard of them tattooed master cleanse live-edge keffiyeh </span>
                                                                                </p>
                                                                            </div> <!-- end media-body -->
                                                                        </div> <!-- end media -->
                                                                    </div> <!-- end card-body -->
                                                                </div> <!-- end col -->
        
                                                                <div class="card mb-0 mt-2">
                                                                    <div class="card-body p-3">
                                                                        <div class="media">
                                                                            <img src="assets/images/users/avatar-6.jpg" alt="image" class="mr-3 d-none d-sm-block avatar-sm rounded-circle">
                                                                            <div class="media-body">
                                                                                <h5 class="mb-1 mt-0">Louie C. Mason</h5>
                                                                                <p>Human Resources</p>
                                                                                <p class="mb-0 text-muted">
                                                                                    <span class="font-italic"><b>"</b>Disrupt pork belly poutine, asymmetrical tousled succulents selfies. You probably haven't heard of them tattooed master cleanse live-edge keffiyeh </span>
                                                                                </p>
                                                                            </div> <!-- end media-body -->
                                                                        </div> <!-- end media -->
                                                                    </div> <!-- end card-body -->
                                                                </div> <!-- end col -->
                                                                
                                                            </div> <!-- end company-list-2-->
                                                        </div> <!-- end div.bg-light-->
                                                    </div> <!-- end col -->
        
                                                </div> <!-- end row -->                                           
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="move-stuff-code">
                                                <p>Make sure to include following js files at end of <code>body element</code></p>

                                                <pre>
                                                    <span class="html escape">
                                                        &lt;script src=&quot;assets/js/vendor/dragula.min.js&quot;&gt;&lt;/script&gt;
                                                        &lt;script src=&quot;assets/js/ui/component.dragula.js&quot;&gt;&lt;/script&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->

                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;row&quot; data-plugin=&quot;dragula&quot; data-containers='[&quot;company-list-left&quot;, &quot;company-list-right&quot;]'&gt;
                                                            &lt;div class=&quot;col-md-6&quot;&gt;
                                                                &lt;div class=&quot;bg-dragula p-2 p-lg-4&quot;&gt;
                                                                    &lt;h5 class=&quot;mt-0&quot;&gt;Part 1&lt;/h5&gt;
                                                                    &lt;div id=&quot;company-list-left&quot; class=&quot;py-2&quot;&gt;
                
                                                                        &lt;div class=&quot;card mb-0 mt-2&quot;&gt;
                                                                            &lt;div class=&quot;card-body&quot;&gt;
                                                                                &lt;div class=&quot;media&quot;&gt;
                                                                                    &lt;img src=&quot;assets/images/users/avatar-1.jpg&quot; alt=&quot;image&quot; class=&quot;mr-3 d-none d-sm-block avatar-sm rounded-circle&quot;&gt;
                                                                                    &lt;div class=&quot;media-body&quot;&gt;
                                                                                        &lt;h5 class=&quot;mb-1 mt-0&quot;&gt;Louis K. Bond&lt;/h5&gt;
                                                                                        &lt;p&gt; Founder &amp; CEO &lt;/p&gt;
                                                                                        &lt;p class=&quot;mb-0 text-muted&quot;&gt;
                                                                                            &lt;span class=&quot;font-italic&quot;&gt;&lt;b&gt;&quot;&lt;/b&gt;Disrupt pork belly poutine, asymmetrical tousled succulents selfies. You probably haven't heard of them tattooed master cleanse live-edge keffiyeh.&lt;/span&gt;
                                                                                        &lt;/p&gt;
                                                                                    &lt;/div&gt; &lt;!-- end media-body --&gt;
                                                                                &lt;/div&gt; &lt;!-- end media --&gt;
                                                                            &lt;/div&gt; &lt;!-- end card-body --&gt;
                                                                        &lt;/div&gt; &lt;!-- end col --&gt;
                
                                                                        &lt;div class=&quot;card mb-0 mt-2&quot;&gt;
                                                                            &lt;div class=&quot;card-body&quot;&gt;
                                                                                &lt;div class=&quot;media&quot;&gt;
                                                                                    &lt;img src=&quot;assets/images/users/avatar-2.jpg&quot; alt=&quot;image&quot; class=&quot;mr-3 d-none d-sm-block avatar-sm rounded-circle&quot;&gt;
                                                                                    &lt;div class=&quot;media-body&quot;&gt;
                                                                                        &lt;h5 class=&quot;mb-1 mt-0&quot;&gt;Dennis N. Cloutier&lt;/h5&gt;
                                                                                        &lt;p&gt; Software Engineer &lt;/p&gt;
                                                                                        &lt;p class=&quot;mb-0 text-muted&quot;&gt;
                                                                                            &lt;span class=&quot;font-italic&quot;&gt;&lt;b&gt;&quot;&lt;/b&gt;Disrupt pork belly poutine, asymmetrical tousled succulents selfies. You probably haven't heard of them tattooed master cleanse live-edge keffiyeh.&lt;/span&gt;
                                                                                        &lt;/p&gt;
                                                                                    &lt;/div&gt; &lt;!-- end media-body --&gt;
                                                                                &lt;/div&gt; &lt;!-- end media --&gt;
                                                                            &lt;/div&gt; &lt;!-- end card-body --&gt;
                                                                        &lt;/div&gt; &lt;!-- end col --&gt;
                
                                                                        &lt;div class=&quot;card mb-0 mt-2&quot;&gt;
                                                                            &lt;div class=&quot;card-body&quot;&gt;
                                                                                &lt;div class=&quot;media&quot;&gt;
                                                                                    &lt;img src=&quot;assets/images/users/avatar-3.jpg&quot; alt=&quot;image&quot; class=&quot;mr-3 d-none d-sm-block avatar-sm rounded-circle&quot;&gt;
                                                                                    &lt;div class=&quot;media-body&quot;&gt;
                                                                                        &lt;h5 class=&quot;mb-1 mt-0&quot;&gt;Susan J. Sander&lt;/h5&gt;
                                                                                        &lt;p&gt; Web Designer &lt;/p&gt;
                                                                                        &lt;p class=&quot;mb-0 text-muted&quot;&gt;
                                                                                            &lt;span class=&quot;font-italic&quot;&gt;&lt;b&gt;&quot;&lt;/b&gt;Disrupt pork belly poutine, asymmetrical tousled succulents selfies. You probably haven't heard of them tattooed master cleanse live-edge keffiyeh.&lt;/span&gt;
                                                                                        &lt;/p&gt;
                                                                                    &lt;/div&gt; &lt;!-- end media-body --&gt;
                                                                                &lt;/div&gt; &lt;!-- end media --&gt;
                                                                            &lt;/div&gt; &lt;!-- end card-body --&gt;
                                                                        &lt;/div&gt; &lt;!-- end col --&gt;
                                                                        
                                                                    &lt;/div&gt; &lt;!-- end company-list-1--&gt;
                                                                &lt;/div&gt; &lt;!-- end div.bg-light--&gt;
                                                            &lt;/div&gt; &lt;!-- end col --&gt;
                
                                                            &lt;div class=&quot;col-md-6&quot;&gt;
                                                                &lt;div class=&quot;bg-dragula p-2 p-lg-4&quot;&gt;
                                                                    &lt;h5 class=&quot;mt-0&quot;&gt;Part 2&lt;/h5&gt;
                                                                    &lt;div id=&quot;company-list-right&quot; class=&quot;py-2&quot;&gt;
                                                                        &lt;div class=&quot;card mb-0 mt-2&quot;&gt;
                
                                                                            &lt;div class=&quot;card-body p-3&quot;&gt;
                                                                                &lt;div class=&quot;media&quot;&gt;
                                                                                    &lt;img src=&quot;assets/images/users/avatar-4.jpg&quot; alt=&quot;image&quot; class=&quot;mr-3 d-none d-sm-block avatar-sm rounded-circle&quot;&gt;
                                                                                    &lt;div class=&quot;media-body&quot;&gt;
                                                                                        &lt;h5 class=&quot;mb-1 mt-0&quot;&gt;James M. Short&lt;/h5&gt;
                                                                                        &lt;p&gt; Web Developer &lt;/p&gt;
                                                                                        &lt;p class=&quot;mb-0 text-muted&quot;&gt;
                                                                                            &lt;span class=&quot;font-italic&quot;&gt;&lt;b&gt;&quot;&lt;/b&gt;Disrupt pork belly poutine, asymmetrical tousled succulents selfies. You probably haven't heard of them tattooed master cleanse live-edge keffiyeh &lt;/span&gt;
                                                                                        &lt;/p&gt;
                                                                                    &lt;/div&gt; &lt;!-- end media-body --&gt;
                                                                                &lt;/div&gt; &lt;!-- end media --&gt;
                                                                            &lt;/div&gt; &lt;!-- end card-body --&gt;
                                                                        &lt;/div&gt; &lt;!-- end col --&gt;
                
                                                                        &lt;div class=&quot;card mb-0 mt-2&quot;&gt;
                                                                            &lt;div class=&quot;card-body p-3&quot;&gt;
                                                                                &lt;div class=&quot;media&quot;&gt;
                                                                                    &lt;img src=&quot;assets/images/users/avatar-5.jpg&quot; alt=&quot;image&quot; class=&quot;mr-3 d-none d-sm-block avatar-sm rounded-circle&quot;&gt;
                                                                                    &lt;div class=&quot;media-body&quot;&gt;
                                                                                        &lt;h5 class=&quot;mb-1 mt-0&quot;&gt;Gabriel J. Snyder&lt;/h5&gt;
                                                                                        &lt;p&gt; Business Analyst &lt;/p&gt;
                                                                                        &lt;p class=&quot;mb-0 text-muted&quot;&gt;
                                                                                            &lt;span class=&quot;font-italic&quot;&gt;&lt;b&gt;&quot;&lt;/b&gt;Disrupt pork belly poutine, asymmetrical tousled succulents selfies. You probably haven't heard of them tattooed master cleanse live-edge keffiyeh &lt;/span&gt;
                                                                                        &lt;/p&gt;
                                                                                    &lt;/div&gt; &lt;!-- end media-body --&gt;
                                                                                &lt;/div&gt; &lt;!-- end media --&gt;
                                                                            &lt;/div&gt; &lt;!-- end card-body --&gt;
                                                                        &lt;/div&gt; &lt;!-- end col --&gt;
                
                                                                        &lt;div class=&quot;card mb-0 mt-2&quot;&gt;
                                                                            &lt;div class=&quot;card-body p-3&quot;&gt;
                                                                                &lt;div class=&quot;media&quot;&gt;
                                                                                    &lt;img src=&quot;assets/images/users/avatar-6.jpg&quot; alt=&quot;image&quot; class=&quot;mr-3 d-none d-sm-block avatar-sm rounded-circle&quot;&gt;
                                                                                    &lt;div class=&quot;media-body&quot;&gt;
                                                                                        &lt;h5 class=&quot;mb-1 mt-0&quot;&gt;Louie C. Mason&lt;/h5&gt;
                                                                                        &lt;p&gt;Human Resources&lt;/p&gt;
                                                                                        &lt;p class=&quot;mb-0 text-muted&quot;&gt;
                                                                                            &lt;span class=&quot;font-italic&quot;&gt;&lt;b&gt;&quot;&lt;/b&gt;Disrupt pork belly poutine, asymmetrical tousled succulents selfies. You probably haven't heard of them tattooed master cleanse live-edge keffiyeh &lt;/span&gt;
                                                                                        &lt;/p&gt;
                                                                                    &lt;/div&gt; &lt;!-- end media-body --&gt;
                                                                                &lt;/div&gt; &lt;!-- end media --&gt;
                                                                            &lt;/div&gt; &lt;!-- end card-body --&gt;
                                                                        &lt;/div&gt; &lt;!-- end col --&gt;
                                                                        
                                                                    &lt;/div&gt; &lt;!-- end company-list-2--&gt;
                                                                &lt;/div&gt; &lt;!-- end div.bg-light--&gt;
                                                            &lt;/div&gt; &lt;!-- end col --&gt;
                
                                                        &lt;/div&gt; &lt;!-- end row --&gt; 
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
                                        <h4 class="header-title">Move stuff between containers using handle</h4>
                                        <p class="text-muted font-14 mb-3">
                                                    Just specify the data attribute
                                                <code>data-plugin='dragula'</code>, 
                                                <code>data-containers='["first-container-id", "second-container-id"]'</code> and 
                                                <code>data-handle-class='dragula-handle'</code>.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#move-stuff-handle-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#move-stuff-handle-code" data-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="move-stuff-handle-preview">
                                                <div class="row" data-plugin="dragula" data-containers='["handle-dragula-left", "handle-dragula-right"]' data-handleClass="dragula-handle">
                                                    <div class="col-md-6">
                                                        <div class="bg-dragula p-2 p-lg-4">
                                                            <h5 class="mt-0">Part 1</h5>
                                                            <div id="handle-dragula-left" class="py-2">
        
                                                                <div class="card mb-0 mt-2">
                                                                    <div class="card-body">
                                                                        <div class="media">
                                                                            <img src="assets/images/users/avatar-7.jpg" alt="image" class="mr-3 d-none d-sm-block avatar-sm rounded-circle">
                                                                            <div class="media-body">
                                                                                <h5 class="mb-1 mt-1">Louis K. Bond</h5>
                                                                                <p class="mb-0"> Founder & CEO </p>
                                                                            </div> <!-- end media-body -->
                                                                            <span class="dragula-handle"></span>
                                                                        </div> <!-- end media -->
                                                                    </div> <!-- end card-body -->
                                                                </div> <!-- end col -->
        
                                                                <div class="card mb-0 mt-2">
                                                                    <div class="card-body">
                                                                        <div class="media">
                                                                            <img src="assets/images/users/avatar-8.jpg" alt="image" class="mr-3 d-none d-sm-block avatar-sm rounded-circle">
                                                                            <div class="media-body">
                                                                                <h5 class="mb-1 mt-1">Dennis N. Cloutier</h5>
                                                                                <p class="mb-0"> Software Engineer </p>
                                                                            </div> <!-- end media-body -->
                                                                            <span class="dragula-handle"></span>
                                                                        </div> <!-- end media -->
                                                                    </div> <!-- end card-body -->
                                                                </div> <!-- end col -->
        
                                                                <div class="card mb-0 mt-2">
                                                                    <div class="card-body">
                                                                        <div class="media">
                                                                            <img src="assets/images/users/avatar-9.jpg" alt="image" class="mr-3 d-none d-sm-block avatar-sm rounded-circle">
                                                                            <div class="media-body">
                                                                                <h5 class="mb-1 mt-1">Susan J. Sander</h5>
                                                                                <p class="mb-0"> Web Designer </p>
                                                                            </div> <!-- end media-body -->
                                                                            <span class="dragula-handle"></span>
                                                                        </div> <!-- end media -->
                                                                    </div> <!-- end card-body -->
                                                                </div> <!-- end col -->
                                                                
                                                            </div> <!-- end company-list-1-->
                                                        </div> <!-- end div.bg-light-->
                                                    </div> <!-- end col -->
        
                                                    <div class="col-md-6">
                                                        <div class="bg-dragula p-2 p-lg-4">
                                                            <h5 class="mt-0">Part 2</h5>
                                                            <div id="handle-dragula-right" class="py-2">
                                                                <div class="card mb-0 mt-2">
        
                                                                    <div class="card-body p-3">
                                                                        <div class="media">
                                                                            <img src="assets/images/users/avatar-10.jpg" alt="image" class="mr-3 d-none d-sm-block avatar-sm rounded-circle">
                                                                            <div class="media-body">
                                                                                <h5 class="mb-1 mt-1">James M. Short</h5>
                                                                                <p class="mb-0"> Web Developer </p>
                                                                            </div> <!-- end media-body -->
                                                                            <span class="dragula-handle"></span>
                                                                        </div> <!-- end media -->
                                                                    </div> <!-- end card-body -->
                                                                </div> <!-- end col -->
        
                                                                <div class="card mb-0 mt-2">
                                                                    <div class="card-body p-3">
                                                                        <div class="media">
                                                                            <img src="assets/images/users/avatar-5.jpg" alt="image" class="mr-3 d-none d-sm-block avatar-sm rounded-circle">
                                                                            <div class="media-body">
                                                                                <h5 class="mb-1 mt-1">Gabriel J. Snyder</h5>
                                                                                <p class="mb-0"> Business Analyst </p>
                                                                            </div> <!-- end media-body -->
                                                                            <span class="dragula-handle"></span>
                                                                        </div> <!-- end media -->
                                                                    </div> <!-- end card-body -->
                                                                </div> <!-- end col -->
        
                                                                <div class="card mb-0 mt-2">
                                                                    <div class="card-body p-3">
                                                                        <div class="media">
                                                                            <img src="assets/images/users/avatar-3.jpg" alt="image" class="mr-3 d-none d-sm-block avatar-sm rounded-circle">
                                                                            <div class="media-body">
                                                                                <h5 class="mb-1 mt-1">Louie C. Mason</h5>
                                                                                <p class="mb-0">Human Resources</p>
                                                                            </div> <!-- end media-body -->
                                                                            <span class="dragula-handle"></span>
                                                                        </div> <!-- end media -->
                                                                    </div> <!-- end card-body -->
                                                                </div> <!-- end col -->
                                                                
                                                            </div> <!-- end company-list-2-->
                                                        </div> <!-- end div.bg-light-->
                                                    </div> <!-- end col -->
        
                                                </div> <!-- end row -->                                         
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="move-stuff-handle-code">
                                                <p>Make sure to include following js files at end of <code>body element</code></p>

                                                <pre>
                                                    <span class="html escape">
                                                        &lt;script src=&quot;assets/js/vendor/dragula.min.js&quot;&gt;&lt;/script&gt;
                                                        &lt;script src=&quot;assets/js/ui/component.dragula.js&quot;&gt;&lt;/script&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->

                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;row&quot; data-plugin=&quot;dragula&quot; data-containers='[&quot;handle-dragula-left&quot;, &quot;handle-dragula-right&quot;]' data-handleClass=&quot;dragula-handle&quot;&gt;
                                                            &lt;div class=&quot;col-md-6&quot;&gt;
                                                                &lt;div class=&quot;bg-dragula p-2 p-lg-4&quot;&gt;
                                                                    &lt;h5 class=&quot;mt-0&quot;&gt;Part 1&lt;/h5&gt;
                                                                    &lt;div id=&quot;handle-dragula-left&quot; class=&quot;py-2&quot;&gt;
                
                                                                        &lt;div class=&quot;card mb-0 mt-2&quot;&gt;
                                                                            &lt;div class=&quot;card-body&quot;&gt;
                                                                                &lt;div class=&quot;media&quot;&gt;
                                                                                    &lt;img src=&quot;assets/images/users/avatar-7.jpg&quot; alt=&quot;image&quot; class=&quot;mr-3 d-none d-sm-block avatar-sm rounded-circle&quot;&gt;
                                                                                    &lt;div class=&quot;media-body&quot;&gt;
                                                                                        &lt;h5 class=&quot;mb-1 mt-1&quot;&gt;Louis K. Bond&lt;/h5&gt;
                                                                                        &lt;p class=&quot;mb-0&quot;&gt; Founder &amp; CEO &lt;/p&gt;
                                                                                    &lt;/div&gt; &lt;!-- end media-body --&gt;
                                                                                    &lt;span class=&quot;dragula-handle&quot;&gt;&lt;/span&gt;
                                                                                &lt;/div&gt; &lt;!-- end media --&gt;
                                                                            &lt;/div&gt; &lt;!-- end card-body --&gt;
                                                                        &lt;/div&gt; &lt;!-- end col --&gt;
                
                                                                        &lt;div class=&quot;card mb-0 mt-2&quot;&gt;
                                                                            &lt;div class=&quot;card-body&quot;&gt;
                                                                                &lt;div class=&quot;media&quot;&gt;
                                                                                    &lt;img src=&quot;assets/images/users/avatar-8.jpg&quot; alt=&quot;image&quot; class=&quot;mr-3 d-none d-sm-block avatar-sm rounded-circle&quot;&gt;
                                                                                    &lt;div class=&quot;media-body&quot;&gt;
                                                                                        &lt;h5 class=&quot;mb-1 mt-1&quot;&gt;Dennis N. Cloutier&lt;/h5&gt;
                                                                                        &lt;p class=&quot;mb-0&quot;&gt; Software Engineer &lt;/p&gt;
                                                                                    &lt;/div&gt; &lt;!-- end media-body --&gt;
                                                                                    &lt;span class=&quot;dragula-handle&quot;&gt;&lt;/span&gt;
                                                                                &lt;/div&gt; &lt;!-- end media --&gt;
                                                                            &lt;/div&gt; &lt;!-- end card-body --&gt;
                                                                        &lt;/div&gt; &lt;!-- end col --&gt;
                
                                                                        &lt;div class=&quot;card mb-0 mt-2&quot;&gt;
                                                                            &lt;div class=&quot;card-body&quot;&gt;
                                                                                &lt;div class=&quot;media&quot;&gt;
                                                                                    &lt;img src=&quot;assets/images/users/avatar-9.jpg&quot; alt=&quot;image&quot; class=&quot;mr-3 d-none d-sm-block avatar-sm rounded-circle&quot;&gt;
                                                                                    &lt;div class=&quot;media-body&quot;&gt;
                                                                                        &lt;h5 class=&quot;mb-1 mt-1&quot;&gt;Susan J. Sander&lt;/h5&gt;
                                                                                        &lt;p class=&quot;mb-0&quot;&gt; Web Designer &lt;/p&gt;
                                                                                    &lt;/div&gt; &lt;!-- end media-body --&gt;
                                                                                    &lt;span class=&quot;dragula-handle&quot;&gt;&lt;/span&gt;
                                                                                &lt;/div&gt; &lt;!-- end media --&gt;
                                                                            &lt;/div&gt; &lt;!-- end card-body --&gt;
                                                                        &lt;/div&gt; &lt;!-- end col --&gt;
                                                                        
                                                                    &lt;/div&gt; &lt;!-- end company-list-1--&gt;
                                                                &lt;/div&gt; &lt;!-- end div.bg-light--&gt;
                                                            &lt;/div&gt; &lt;!-- end col --&gt;
                
                                                            &lt;div class=&quot;col-md-6&quot;&gt;
                                                                &lt;div class=&quot;bg-dragula p-2 p-lg-4&quot;&gt;
                                                                    &lt;h5 class=&quot;mt-0&quot;&gt;Part 2&lt;/h5&gt;
                                                                    &lt;div id=&quot;handle-dragula-right&quot; class=&quot;py-2&quot;&gt;
                                                                        &lt;div class=&quot;card mb-0 mt-2&quot;&gt;
                
                                                                            &lt;div class=&quot;card-body p-3&quot;&gt;
                                                                                &lt;div class=&quot;media&quot;&gt;
                                                                                    &lt;img src=&quot;assets/images/users/avatar-10.jpg&quot; alt=&quot;image&quot; class=&quot;mr-3 d-none d-sm-block avatar-sm rounded-circle&quot;&gt;
                                                                                    &lt;div class=&quot;media-body&quot;&gt;
                                                                                        &lt;h5 class=&quot;mb-1 mt-1&quot;&gt;James M. Short&lt;/h5&gt;
                                                                                        &lt;p class=&quot;mb-0&quot;&gt; Web Developer &lt;/p&gt;
                                                                                    &lt;/div&gt; &lt;!-- end media-body --&gt;
                                                                                    &lt;span class=&quot;dragula-handle&quot;&gt;&lt;/span&gt;
                                                                                &lt;/div&gt; &lt;!-- end media --&gt;
                                                                            &lt;/div&gt; &lt;!-- end card-body --&gt;
                                                                        &lt;/div&gt; &lt;!-- end col --&gt;
                
                                                                        &lt;div class=&quot;card mb-0 mt-2&quot;&gt;
                                                                            &lt;div class=&quot;card-body p-3&quot;&gt;
                                                                                &lt;div class=&quot;media&quot;&gt;
                                                                                    &lt;img src=&quot;assets/images/users/avatar-5.jpg&quot; alt=&quot;image&quot; class=&quot;mr-3 d-none d-sm-block avatar-sm rounded-circle&quot;&gt;
                                                                                    &lt;div class=&quot;media-body&quot;&gt;
                                                                                        &lt;h5 class=&quot;mb-1 mt-1&quot;&gt;Gabriel J. Snyder&lt;/h5&gt;
                                                                                        &lt;p class=&quot;mb-0&quot;&gt; Business Analyst &lt;/p&gt;
                                                                                    &lt;/div&gt; &lt;!-- end media-body --&gt;
                                                                                    &lt;span class=&quot;dragula-handle&quot;&gt;&lt;/span&gt;
                                                                                &lt;/div&gt; &lt;!-- end media --&gt;
                                                                            &lt;/div&gt; &lt;!-- end card-body --&gt;
                                                                        &lt;/div&gt; &lt;!-- end col --&gt;
                
                                                                        &lt;div class=&quot;card mb-0 mt-2&quot;&gt;
                                                                            &lt;div class=&quot;card-body p-3&quot;&gt;
                                                                                &lt;div class=&quot;media&quot;&gt;
                                                                                    &lt;img src=&quot;assets/images/users/avatar-3.jpg&quot; alt=&quot;image&quot; class=&quot;mr-3 d-none d-sm-block avatar-sm rounded-circle&quot;&gt;
                                                                                    &lt;div class=&quot;media-body&quot;&gt;
                                                                                        &lt;h5 class=&quot;mb-1 mt-1&quot;&gt;Louie C. Mason&lt;/h5&gt;
                                                                                        &lt;p class=&quot;mb-0&quot;&gt;Human Resources&lt;/p&gt;
                                                                                    &lt;/div&gt; &lt;!-- end media-body --&gt;
                                                                                    &lt;span class=&quot;dragula-handle&quot;&gt;&lt;/span&gt;
                                                                                &lt;/div&gt; &lt;!-- end media --&gt;
                                                                            &lt;/div&gt; &lt;!-- end card-body --&gt;
                                                                        &lt;/div&gt; &lt;!-- end col --&gt;
                                                                        
                                                                    &lt;/div&gt; &lt;!-- end company-list-2--&gt;
                                                                &lt;/div&gt; &lt;!-- end div.bg-light--&gt;
                                                            &lt;/div&gt; &lt;!-- end col --&gt;
                
                                                        &lt;/div&gt; &lt;!-- end row --&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
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

        <!-- dragula js-->
        <script src="assets/js/vendor/dragula.min.js"></script>

        <!-- component js -->
        <script src="assets/js/ui/component.dragula.js"></script>
        
    </body>
</html>