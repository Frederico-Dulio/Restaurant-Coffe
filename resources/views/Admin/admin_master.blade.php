<!doctype html>
<html lang="pt-PT">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap4 Dashboard Template">
    <!-- <meta name="author" content="ParkerThemes"> -->
    <link rel="shortcut icon" href="" />

    <!-- Title -->
    <title>Admin Dashboard</title>


    <!-- *************
   ************ Common Css Files *************
  ************ -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">

    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="{{ asset('admin/fonts/style.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('admin/css/main.css') }}">


    <!-- *************
   ************ Vendor Css Files *************
  ************ -->
    <!-- DateRange css -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/daterange/daterange.css') }}" />

    <!-- Chartist css -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/chartist/css/chartist.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/vendor/chartist/css/chartist-custom.css') }}" />

    <!-- Alert -->
    <link href="{{ asset('toatr.css') }}" rel="stylesheet" />

</head>

<body>

    <!-- Loading starts -->
    <div id="loading-wrapper">
        <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Loading ends -->


    <!-- *************
   ************ Header section start *************
  ************* -->

    <!-- Header start -->
    <header class="header">
        <div class="logo-wrapper">
            <a href="index.html" class="logo">
                <img src="" alt="Admin Dashboard" />
            </a>
            <a href="#" class="quick-links-btn" data-toggle="tooltip" data-placement="right" title=""
                data-original-title="Quick Links">
                <i class="icon-menu1"></i>
            </a>
        </div>
        <div class="header-items">
            <!-- Custom search start -->
            <div class="custom-search">
                <input type="text" class="search-query" placeholder="Search here ...">
                <i class="icon-search1"></i>
            </div>
            <!-- Custom search end -->

            <!-- Header actions start -->
            <ul class="header-actions">
                <li class="dropdown">
                    <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
                        <i class="icon-box"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right lrg" aria-labelledby="notifications">
                        <div class="dropdown-menu-header">
                            Tasks (05)
                        </div>
                        <ul class="header-tasks">
                            <li>
                                <p>#48 - Dashboard UI<span>90%</span></p>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="90"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                        <span class="sr-only">90% Complete (success)</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <p>#95 - Alignment Fix<span>60%</span></p>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="60"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60% Complete (success)</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <p>#7 - Broken Button<span>40%</span></p>
                                <div class="progress">
                                    <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="40"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40% Complete (success)</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
                        <i class="icon-bell"></i>
                        <span class="count-label">8</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right lrg" aria-labelledby="notifications">
                        <div class="dropdown-menu-header">
                            Notifications (40)
                        </div>
                        <ul class="header-notifications">
                            <li>
                                <a href="#">
                                    <div class="user-img away">
                                        <img src="img/user21.png" alt="User" />
                                    </div>
                                    <div class="details">
                                        <div class="user-title">Abbott</div>
                                        <div class="noti-details">Membership has been ended.</div>
                                        <div class="noti-date">Oct 20, 07:30 pm</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="user-img busy">
                                        <img src="img/user10.png" alt="User" />
                                    </div>
                                    <div class="details">
                                        <div class="user-title">Braxten</div>
                                        <div class="noti-details">Approved new design.</div>
                                        <div class="noti-date">Oct 10, 12:00 am</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="user-img online">
                                        <img src="img/user6.png" alt="User" />
                                    </div>
                                    <div class="details">
                                        <div class="user-title">Larkyn</div>
                                        <div class="noti-details">Check out every table in detail.</div>
                                        <div class="noti-date">Oct 15, 04:00 pm</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown"
                        aria-haspopup="true">
                        <span class="user-name">{{ Auth::guard('admin')->user()->name }}</span>
                        @php
                            $userNames = explode(' ', Auth::guard('admin')->user()->name);
                            $primeira_letra_nome = $userNames[0][0];
                            $primeira_letra_ultimo_nome = $userNames[count($userNames) - 1][0];
                        @endphp

                        <span class="avatar">{{$primeira_letra_nome.$primeira_letra_ultimo_nome}}<span class="status busy"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
                        <div class="header-profile-actions">
                            <div class="header-user-profile">
                                <div class="header-user">
                                    <img src="img/user.png" alt="Admin Template" />
                                </div>
                                <h5>Zyan Ferris</h5>
                                <p>Admin</p>
                            </div>
                            <a href="user-profile.html"><i class="icon-user1"></i> My Profile</a>
                            <a href="account-settings.html"><i class="icon-settings1"></i> Account Settings</a>
                            <a href="login.html"><i class="icon-log-out1"></i> Sign Out</a>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" class="quick-settings-btn" data-toggle="tooltip" data-placement="left"
                        title="" data-original-title="Quick Settings">
                        <i class="icon-list"></i>
                    </a>
                </li>
            </ul>
            <!-- Header actions end -->
        </div>
    </header>
    <!-- Header end -->

    <!-- Screen overlay start -->
    <div class="screen-overlay"></div>
    <!-- Screen overlay end -->

    <!-- Quicklinks box start -->
    <div class="quick-links-box">
        <div class="quick-links-header">
            Quick Links
            <a href="#" class="quick-links-box-close">
                <i class="icon-circle-with-cross"></i>
            </a>
        </div>

        <div class="quick-links-wrapper">
            <div class="fullHeight">
                <div class="quick-links-body">
                    <div class="container-fluid p-0">
                        <div class="row less-gutters">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <a href="documents.html" class="quick-tile blue">
                                    <i class="icon-file-text"></i>
                                    Documents
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                                <a href="crm-dashboard.html" class="quick-tile secondary">
                                    <i class="icon-pie-chart1"></i>
                                    CRM
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                                <a href="ecommerce-dashboard.html" class="quick-tile blue">
                                    <i class="icon-shopping-cart1"></i>
                                    Ecommerce
                                </a>
                            </div>
                        </div>
                        <div class="row less-gutters">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <a href="gallery2.html" class="quick-tile photos lg">
                                    Photos
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                                <a href="tasks.html" class="quick-tile">
                                    <i class="icon-check-circle"></i>
                                    Tasks
                                </a>
                                <a href="calendar-external-draggable.html" class="quick-tile blue">
                                    <i class="icon-calendar1"></i>
                                    Events
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                                <a href="chat.html" class="quick-tile blue">
                                    <i class="icon-message-circle"></i>
                                    Chat
                                </a>
                                <a href="default-layout.html" class="quick-tile">
                                    <i class="icon-grid"></i>
                                    Layout
                                </a>
                            </div>
                        </div>
                        <div class="row less-gutters">
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                                <a href="custom-alerts.html" class="quick-tile secondary">
                                    <i class="icon-alert-triangle"></i>
                                    Alerts
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                                <a href="google-maps.html" class="quick-tile blue">
                                    <i class="icon-map-pin"></i>
                                    Maps
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                                <a href="https://www.gmail.com" target="_blank" class="quick-tile white">
                                    <i class="icon-drafts"></i>
                                    Gmail
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                                <a href="https://www.youtube.com" target="_blank" class="quick-tile secondary">
                                    <i class="icon-youtube"></i>
                                    Youtube
                                </a>
                            </div>
                        </div>
                        <div class="row less-gutters">
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                                <a href="user-profile.html" class="quick-tile">
                                    <i class="icon-account_circle"></i>
                                    Profile
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                                <a href="contacts.html" class="quick-tile">
                                    <i class="icon-phone"></i>
                                    Contacts
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                                <a href="account-settings.html" class="quick-tile">
                                    <i class="icon-settings1"></i>
                                    Settings
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                                <a href="login.html" class="quick-tile">
                                    <i class="icon-lock2"></i>
                                    Logout
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quicklinks box end -->

    <!-- Quick settings start -->
    <div class="quick-settings-box">
        <div class="quick-settings-header">
            <div class="date-container">Today <span class="date" id="today-date"></span></div>
            <a href="#" class="quick-settings-box-close">
                <i class="icon-circle-with-cross"></i>
            </a>
        </div>
        <div class="quick-settings-body">
            <div class="fullHeight">
                <div class="quick-setting-list">
                    <h6 class="title">Events</h6>
                    <ul class="list-items">
                        <li>
                            <div class="list-title">Product Launch</div>
                            <div class="list-location">10:00 AM</div>
                        </li>
                        <li>
                            <div class="list-title">Team Meeting</div>
                            <div class="list-location">01:30 PM</div>
                        </li>
                        <li>
                            <div class="list-title">Q&A Session</div>
                            <div class="list-location">02:30 PM</div>
                        </li>
                    </ul>
                </div>
                <div class="quick-setting-list">
                    <h6 class="title">Notes</h6>
                    <ul class="list-items">
                        <li>
                            <div class="list-title">Refreshing the list</div>
                            <div class="list-location">03:15 PM</div>
                        </li>
                        <li>
                            <div class="list-title">Not able to click on button</div>
                            <div class="list-location">03:18 PM</div>
                        </li>
                    </ul>
                </div>
                <div class="quick-setting-list">
                    <h6 class="title">Quick Settings</h6>
                    <ul class="set-priority-list">
                        <li>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" checked id="systemUpdates">
                                <label class="custom-control-label" for="systemUpdates">System Updates</label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="noti">
                                <label class="custom-control-label" for="noti">Notifications</label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick settings end -->

    <!-- *************
   ************ Header section end *************
  ************* -->

    <!-- Container fluid start -->
    <div class="container-fluid">

        <!-- Navigation start -->
        <nav class="navbar navbar-expand-lg custom-navbar">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#WafiAdminNavbar"
                aria-controls="WafiAdminNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i></i>
                    <i></i>
                    <i></i>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="WafiAdminNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active-page" href="#" id="dashboardsDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-devices_other nav-icon"></i>
                            Dashboard
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dashboardsDropdown">
                            <li>
                                <a class="dropdown-item active-page" href="index.html">Admin Dashboard</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="project-dashboard.html">Project Management</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="sales-dashboard.html">Sales Dashboard</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="crm-dashboard.html">CRM Dashboard</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="ecommerce-dashboard.html">Ecommerce Dashboard</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="quick-dashboard.html">Quick Dashboard</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="smart-dashboard.html">Smart Dashboard</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="helpdesk-dashboard.html">Help Desk Dashboard</a>
                            </li>
                            <li>
                                <a class="dropdown-toggle sub-nav-link" href="#" id="layoutsDropdown"
                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Layouts
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="layoutsDropdown">
                                    <li>
                                        <a class="dropdown-item" href="default-layout.html">Default Layout</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="default-layout-light.html">Light Color
                                            Layout</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="fixed-layout.html">Fixed Layout</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="boxed-layout.html">Boxed Layout</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="card-options.html">Card Options</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="drag-drop-cards.html">Drag and Drop Cards</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-package nav-icon"></i>
                            Apps
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="appsDropdown">
                            <li>
                                <a class="dropdown-item" href="chat.html">Chat App</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="tasks.html">Tasks App</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="documents.html">Documents</a>
                            </li>
                            <li>
                                <a class="dropdown-toggle sub-nav-link" href="#" id="calendarsDropdown"
                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Calendars
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="calendarsDropdown">
                                    <li>
                                        <a class="dropdown-item" href="calendar.html">Daygrid View</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="calendar-external-draggable.html">External
                                            Draggable</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="calendar-google.html">Google Calendar</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="calendar-list-view.html">List View</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="calendar-selectable.html">Selectable</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="calendar-week-numbers.html">Week Numbers</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="dropdown-item" href="invoice.html">Invoice</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="contacts.html">Contacts</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="datepickers.html">Datepickers</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="comments.html">Comments</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="timeline.html">Timeline</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-book-open nav-icon"></i>
                            Pages
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="pagesDropdown">
                            <li>
                                <a class="dropdown-item" href="user-profile.html">User Profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="cards.html">Cards</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="pricing.html">Pricing Plans</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="faq.html">Faq</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="search-results.html">Search Results</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="blog.html">Blog</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="account-settings.html">Account Settings</a>
                            </li>
                            <li>
                                <a class="dropdown-toggle sub-nav-link" href="#" id="customGallery"
                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Gallery
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="customGallery">
                                    <li>
                                        <a class="dropdown-item" href="gallery.html">Gallery Slider</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="gallery2.html">Gallery Thumbnail</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="gallery3.html">Gallery Hover</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="dropdown-item" href="icons.html">Icons</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="typography.html">Typography</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="formsDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-edit1 nav-icon"></i>
                            Forms
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="formsDropdown">
                            <li>
                                <a class="dropdown-item" href="wizard.html">Wizards</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="bs-select.html">BS Select</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="input-tags.html">Input Tags</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="input-masks.html">Input Mask</a>
                            </li>
                            <li>
                                <a class="dropdown-toggle sub-nav-link" href="#" id="customDropdown"
                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Custom Forms
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
                                    <li>
                                        <a class="dropdown-item" href="contact.html">Contact Form</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="contact2.html">Contact Form #2</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="contact3.html">Contact Form #3</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="contact4.html">Contact Form #4</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="dropdown-item" href="form-inputs.html">Form Inputs</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="input-groups.html">Input Groups</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="check-radio.html">Check Boxes</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="range-sliders.html">Range Sliders</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="editor.html">Editor</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="uiElementsDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-image nav-icon"></i>
                            UI Elements
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="uiElementsDropdown">
                            <li>
                                <a class="dropdown-toggle sub-nav-link" href="#" id="buttonsDropdown"
                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Buttons
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="buttonsDropdown">
                                    <li>
                                        <a class="dropdown-item" href="buttons.html">Buttons</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="button-groups.html">Button Groups</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="dropdowns.html">Dropdowns</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="dropdown-toggle sub-nav-link" href="#" id="navsDropdown"
                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Navbars
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navsDropdown">
                                    <li>
                                        <a class="dropdown-item" href="nav.html">Nav</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="tabs.html">Tabs</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="dropdown-toggle sub-nav-link" href="#" id="componentsDropdown"
                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Components
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="componentsDropdown">
                                    <li>
                                        <a class="dropdown-item" href="jumbotron.html">Jumbotron</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="labels-badges.html">Labels &amp; Badges</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="list-items.html">List Items</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pagination.html">Paginations</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="progress.html">Progress Bars</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pills.html">Pills</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="spinners.html">Spinners</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="dropdown-toggle sub-nav-link" href="#" id="gridDropdown"
                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Grid
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="gridDropdown">
                                    <li>
                                        <a class="dropdown-item" href="grid.html">Grid</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="grid-doc.html">Grid Doc</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="dropdown-toggle sub-nav-link" href="#" id="imagesDropdown"
                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Images
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="imagesDropdown">
                                    <li>
                                        <a class="dropdown-item" href="avatars.html">Avatars</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="media-objects.html">Media Objects</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="images.html">Thumbnails</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="text-avatars.html">Text Avatars</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="dropdown-toggle sub-nav-link" href="#" id="accordionsDropdown"
                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Accordions
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="accordionsDropdown">
                                    <li>
                                        <a class="dropdown-item" href="accordion.html">Accordion</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="accordion-icons.html">Accordion Icons</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="accordion-arrows.html">Accordion Arrows</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="accordion-lg.html">Accordion Large</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="dropdown-toggle sub-nav-link" href="#" id="alertDropdown"
                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Notifications
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="alertDropdown">
                                    <li>
                                        <a class="dropdown-item" href="bootstrap-alerts.html">Default Alerts</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="custom-alerts.html">Custom Alerts</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="toasts.html">Toasts</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="dropdown-item" href="carousel.html">Carousels</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="modals.html">Modals</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="popovers-tooltips.html">Tooltips</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="tablesDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-border_all nav-icon"></i>
                            Tables
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="tablesDropdown">
                            <li>
                                <a class="dropdown-item" href="custom-tables.html">Custom Tables</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="default-table.html">Default Table</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="table-bordered.html">Table Bordered</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="table-hover.html">Table Hover</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="table-striped.html">Table Striped</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="table-small.html">Table Small</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="table-colors.html">Table Colors</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="data-tables.html">Data Tables</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="layoutsDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-layers2 nav-icon"></i>
                            Sub menu
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="layoutsDropdown">
                            <li>
                                <a class="dropdown-toggle sub-nav-link" href="#" id="submenuDropdown"
                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Opens Right
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="submenuDropdown">
                                    <li>
                                        <a class="dropdown-item" href="chat.html">Submenu 1</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="icons.html">Submenu 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="open-left">
                                <a class="dropdown-toggle sub-nav-link" href="#" id="submenuLeftDropdown"
                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Opens Left
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="submenuLeftDropdown">
                                    <li>
                                        <a class="dropdown-item" href="chat.html">Submenu 1</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="icons.html">Submenu 2</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="graphsDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-pie-chart1 nav-icon"></i>
                            Graphs
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="graphsDropdown">
                            <li class="open-left">
                                <a class="dropdown-toggle sub-nav-link" href="#" id="apexDropdown"
                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Apex Graphs
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="apexDropdown">
                                    <li>
                                        <a class="dropdown-item" href="area-graphs.html">Area Charts</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="bubble.html">Bubble Graphs</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="bar-graphs.html">Bar Charts</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="candlestick.html">Candlestick</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="column-graphs.html">Column Charts</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="donut-graphs.html">Donut Charts</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="line-graphs.html">Line Charts</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="mixed-graphs.html">Mixed Charts</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pie-graphs.html">Pie Charts</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="radial-chart.html">Radial Graph</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="dropdown-item" href="morris-graphs.html">Morris Graphs</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="flot-graphs.html">Flot Graphs</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="c3-graphs.html">C3 Graphs</a>
                            </li>
                            <li class="open-left">
                                <a class="dropdown-toggle sub-nav-link" href="#" id="mapsDropdown"
                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Vector Maps
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="mapsDropdown">
                                    <li>
                                        <a class="dropdown-item" href="vector-maps.html">Vector Maps</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="google-maps.html">Google Maps</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="loginDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-alert-triangle nav-icon"></i>
                            Login
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="loginDropdown">
                            <li>
                                <a class="dropdown-item" href="login.html">Login</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="signup.html">Signup</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="forgot-pwd.html">Forgot Password</a>
                            </li>
                            <li class="open-left">
                                <a class="dropdown-toggle sub-nav-link" href="#" id="subscribeDropdown"
                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Subscribe
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="subscribeDropdown">
                                    <li>
                                        <a class="dropdown-item" href="subscribe.html">Subscribe</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="subscribe2.html">Subscribe 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="open-left">
                                <a class="dropdown-toggle sub-nav-link" href="#" id="errorDropdown"
                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Error Pages
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="errorDropdown">
                                    <li>
                                        <a class="dropdown-item" href="error.html">404</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="error2.html">505</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Navigation end -->

        <!-- *************
    ************ Main container start *************
   ************* -->
        <div class="main-container">

            @yield('admin')

        </div>
        <!-- *************
    ************ Main container end *************
   ************* -->

        <!-- Footer start -->
        <footer class="main-footer">© Frederico Dulio 2023</footer>
        <!-- Footer end -->

    </div>
    <!-- Container fluid end -->

    <!-- *************
   ************ Required JavaScript Files *************
  ************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/js/moment.js') }}"></script>


    <!-- *************
   ************ Vendor Js Files *************
  ************* -->
    <!-- Slimscroll JS -->
    <script src="{{ asset('admin/vendor/slimscroll/slimscroll.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/slimscroll/custom-scrollbar.js') }}"></script>

    <!-- Daterange -->
    <script src="{{ asset('admin/vendor/daterange/daterange.js') }}"></script>
    <script src="{{ asset('admin/vendor/daterange/custom-daterange.js') }}"></script>

    <!-- Chartist JS -->
    <script src="{{ asset('admin/vendor/chartist/js/chartist.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/chartist/js/chartist-tooltip.js') }}"></script>
    <script src="{{ asset('admin/vendor/chartist/js/custom/threshold/threshold.js') }}"></script>
    <script src="{{ asset('admin/vendor/chartist/js/custom/bar/bar-chart-orders.js') }}"></script>

    <!-- jVector Maps -->
    <script src="{{ asset('admin/vendor/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/jvectormap/world-mill-en.js') }}"></script>
    <script src="{{ asset('admin/vendor/jvectormap/gdp-data.js') }}"></script>
    <script src="{{ asset('admin/vendor/jvectormap/custom/world-map-markers2.js') }}"></script>

    <!-- Rating JS -->
    <script src="{{ asset('admin/vendor/rating/raty.js') }}"></script>
    <script src="{{ asset('admin/vendor/rating/raty-custom.js') }}"></script>

    <!-- Main Js Required -->
    <script src="{{ asset('admin/js/main.js') }}"></script>
    {{-- Toast --}}
    <script src="{{ asset('toastr.min.js') }}"></script>
    <script>
        "use strict";
        var o = "rtl" === $("html").attr("data-textdirection");
        @if (session('error'))
            toastr.success("{{ session('error') }}",
                "{{ Auth::guard('admin')->user()->name }}", {
                    closeButton: !0,
                    tapToDismiss: !1,
                    progressBar: !0,
                    rtl: o
                }
            );
        @endif
    </script>

</body>

</html>
