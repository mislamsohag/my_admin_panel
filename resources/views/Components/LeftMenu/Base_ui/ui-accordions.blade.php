<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


<!-- Mirrored from themesbrand.com/velzon/html/minimal/ui-accordions.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Nov 2023 23:29:55 GMT -->
<head>

    <meta charset="utf-8" />
    <title>Accordions | Velzon - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />


</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box horizontal-logo">
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-dark.png" alt="" height="17">
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-light.png" alt="" height="17">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

                <!-- App Search-->
                <form class="app-search d-none d-md-block">
                    <div class="position-relative">
                        <input type="text" class="form-control" placeholder="Search..." autocomplete="off" id="search-options" value="">
                        <span class="mdi mdi-magnify search-widget-icon"></span>
                        <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none" id="search-close-options"></span>
                    </div>
                    <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
                        <div data-simplebar style="max-height: 320px;">
                            <!-- item-->
                            <div class="dropdown-header">
                                <h6 class="text-overflow text-muted mb-0 text-uppercase">Recent Searches</h6>
                            </div>

                            <div class="dropdown-item bg-transparent text-wrap">
                                <a href="index.html" class="btn btn-soft-secondary btn-sm rounded-pill">how to setup <i class="mdi mdi-magnify ms-1"></i></a>
                                <a href="index.html" class="btn btn-soft-secondary btn-sm rounded-pill">buttons <i class="mdi mdi-magnify ms-1"></i></a>
                            </div>
                            <!-- item-->
                            <div class="dropdown-header mt-2">
                                <h6 class="text-overflow text-muted mb-1 text-uppercase">Pages</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="ri-bubble-chart-line align-middle fs-18 text-muted me-2"></i>
                                <span>Analytics Dashboard</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="ri-lifebuoy-line align-middle fs-18 text-muted me-2"></i>
                                <span>Help Center</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="ri-user-settings-line align-middle fs-18 text-muted me-2"></i>
                                <span>My account settings</span>
                            </a>

                            <!-- item-->
                            <div class="dropdown-header mt-2">
                                <h6 class="text-overflow text-muted mb-2 text-uppercase">Members</h6>
                            </div>

                            <div class="notification-list">
                                <!-- item -->
                                <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                    <div class="d-flex">
                                        <img src="assets/images/users/avatar-2.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="flex-grow-1">
                                            <h6 class="m-0">Angela Bernier</h6>
                                            <span class="fs-11 mb-0 text-muted">Manager</span>
                                        </div>
                                    </div>
                                </a>
                                <!-- item -->
                                <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                    <div class="d-flex">
                                        <img src="assets/images/users/avatar-3.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="flex-grow-1">
                                            <h6 class="m-0">David Grasso</h6>
                                            <span class="fs-11 mb-0 text-muted">Web Designer</span>
                                        </div>
                                    </div>
                                </a>
                                <!-- item -->
                                <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                    <div class="d-flex">
                                        <img src="assets/images/users/avatar-5.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="flex-grow-1">
                                            <h6 class="m-0">Mike Bunch</h6>
                                            <span class="fs-11 mb-0 text-muted">React Developer</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="text-center pt-3 pb-1">
                            <a href="pages-search-results.html" class="btn btn-primary btn-sm">View All Results <i class="ri-arrow-right-line ms-1"></i></a>
                        </div>
                    </div>
                </form>
            </div>

            <div class="d-flex align-items-center">

                <div class="dropdown d-md-none topbar-head-dropdown header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-search fs-22"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
                        <form class="p-3">
                            <div class="form-group m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="dropdown ms-1 topbar-head-dropdown header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img id="header-lang-img" src="assets/images/flags/us.svg" alt="Header Language" height="20" class="rounded">
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language py-2" data-lang="en" title="English">
                            <img src="assets/images/flags/us.svg" alt="user-image" class="me-2 rounded" height="18">
                            <span class="align-middle">English</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp" title="Spanish">
                            <img src="assets/images/flags/spain.svg" alt="user-image" class="me-2 rounded" height="18">
                            <span class="align-middle">Española</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr" title="German">
                            <img src="assets/images/flags/germany.svg" alt="user-image" class="me-2 rounded" height="18"> <span class="align-middle">Deutsche</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it" title="Italian">
                            <img src="assets/images/flags/italy.svg" alt="user-image" class="me-2 rounded" height="18">
                            <span class="align-middle">Italiana</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru" title="Russian">
                            <img src="assets/images/flags/russia.svg" alt="user-image" class="me-2 rounded" height="18">
                            <span class="align-middle">русский</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ch" title="Chinese">
                            <img src="assets/images/flags/china.svg" alt="user-image" class="me-2 rounded" height="18">
                            <span class="align-middle">中国人</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="fr" title="French">
                            <img src="assets/images/flags/french.svg" alt="user-image" class="me-2 rounded" height="18">
                            <span class="align-middle">français</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ar" title="Arabic">
                            <img src="assets/images/flags/ae.svg" alt="user-image" class="me-2 rounded" height="18">
                            <span class="align-middle">Arabic</span>
                        </a>
                    </div>
                </div>

                <div class="dropdown topbar-head-dropdown ms-1 header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class='bx bx-category-alt fs-22'></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg p-0 dropdown-menu-end">
                        <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="m-0 fw-semibold fs-15"> Web Apps </h6>
                                </div>
                                <div class="col-auto">
                                    <a href="#!" class="btn btn-sm btn-soft-info"> View All Apps
                                        <i class="ri-arrow-right-s-line align-middle"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="p-2">
                            <div class="row g-0">
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#!">
                                        <img src="assets/images/brands/github.png" alt="Github">
                                        <span>GitHub</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#!">
                                        <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                                        <span>Bitbucket</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#!">
                                        <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                        <span>Dribbble</span>
                                    </a>
                                </div>
                            </div>

                            <div class="row g-0">
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#!">
                                        <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                        <span>Dropbox</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#!">
                                        <img src="assets/images/brands/mail_chimp.png" alt="mail_chimp">
                                        <span>Mail Chimp</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#!">
                                        <img src="assets/images/brands/slack.png" alt="slack">
                                        <span>Slack</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dropdown topbar-head-dropdown ms-1 header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-cart-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                        <i class='bx bx-shopping-bag fs-22'></i>
                        <span class="position-absolute topbar-badge cartitem-badge fs-10 translate-middle badge rounded-pill bg-info">5</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end p-0 dropdown-menu-cart" aria-labelledby="page-header-cart-dropdown">
                        <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="m-0 fs-16 fw-semibold"> My Cart</h6>
                                </div>
                                <div class="col-auto">
                                    <span class="badge bg-warning-subtle text-warning fs-13"><span class="cartitem-badge">7</span>
                                        items</span>
                                </div>
                            </div>
                        </div>
                        <div data-simplebar style="max-height: 300px;">
                            <div class="p-2">
                                <div class="text-center empty-cart" id="empty-cart">
                                    <div class="avatar-md mx-auto my-3">
                                        <div class="avatar-title bg-info-subtle text-info fs-36 rounded-circle">
                                            <i class='bx bx-cart'></i>
                                        </div>
                                    </div>
                                    <h5 class="mb-3">Your Cart is Empty!</h5>
                                    <a href="apps-ecommerce-products.html" class="btn btn-success w-md mb-3">Shop Now</a>
                                </div>
                                <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/products/img-1.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                        <div class="flex-grow-1">
                                            <h6 class="mt-0 mb-1 fs-14">
                                                <a href="apps-ecommerce-product-details.html" class="text-reset">Branded
                                                    T-Shirts</a>
                                            </h6>
                                            <p class="mb-0 fs-12 text-muted">
                                                Quantity: <span>10 x $32</span>
                                            </p>
                                        </div>
                                        <div class="px-2">
                                            <h5 class="m-0 fw-normal">$<span class="cart-item-price">320</span></h5>
                                        </div>
                                        <div class="ps-2">
                                            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/products/img-2.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                        <div class="flex-grow-1">
                                            <h6 class="mt-0 mb-1 fs-14">
                                                <a href="apps-ecommerce-product-details.html" class="text-reset">Bentwood Chair</a>
                                            </h6>
                                            <p class="mb-0 fs-12 text-muted">
                                                Quantity: <span>5 x $18</span>
                                            </p>
                                        </div>
                                        <div class="px-2">
                                            <h5 class="m-0 fw-normal">$<span class="cart-item-price">89</span></h5>
                                        </div>
                                        <div class="ps-2">
                                            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/products/img-3.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                        <div class="flex-grow-1">
                                            <h6 class="mt-0 mb-1 fs-14">
                                                <a href="apps-ecommerce-product-details.html" class="text-reset">
                                                    Borosil Paper Cup</a>
                                            </h6>
                                            <p class="mb-0 fs-12 text-muted">
                                                Quantity: <span>3 x $250</span>
                                            </p>
                                        </div>
                                        <div class="px-2">
                                            <h5 class="m-0 fw-normal">$<span class="cart-item-price">750</span></h5>
                                        </div>
                                        <div class="ps-2">
                                            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/products/img-6.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                        <div class="flex-grow-1">
                                            <h6 class="mt-0 mb-1 fs-14">
                                                <a href="apps-ecommerce-product-details.html" class="text-reset">Gray
                                                    Styled T-Shirt</a>
                                            </h6>
                                            <p class="mb-0 fs-12 text-muted">
                                                Quantity: <span>1 x $1250</span>
                                            </p>
                                        </div>
                                        <div class="px-2">
                                            <h5 class="m-0 fw-normal">$ <span class="cart-item-price">1250</span></h5>
                                        </div>
                                        <div class="ps-2">
                                            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/products/img-5.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                        <div class="flex-grow-1">
                                            <h6 class="mt-0 mb-1 fs-14">
                                                <a href="apps-ecommerce-product-details.html" class="text-reset">Stillbird Helmet</a>
                                            </h6>
                                            <p class="mb-0 fs-12 text-muted">
                                                Quantity: <span>2 x $495</span>
                                            </p>
                                        </div>
                                        <div class="px-2">
                                            <h5 class="m-0 fw-normal">$<span class="cart-item-price">990</span></h5>
                                        </div>
                                        <div class="ps-2">
                                            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 border-bottom-0 border-start-0 border-end-0 border-dashed border" id="checkout-elem">
                            <div class="d-flex justify-content-between align-items-center pb-3">
                                <h5 class="m-0 text-muted">Total:</h5>
                                <div class="px-2">
                                    <h5 class="m-0" id="cart-item-total">$1258.58</h5>
                                </div>
                            </div>

                            <a href="apps-ecommerce-checkout.html" class="btn btn-success text-center w-100">
                                Checkout
                            </a>
                        </div>
                    </div>
                </div>

                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-toggle="fullscreen">
                        <i class='bx bx-fullscreen fs-22'></i>
                    </button>
                </div>

                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
                        <i class='bx bx-moon fs-22'></i>
                    </button>
                </div>

                <div class="dropdown topbar-head-dropdown ms-1 header-item" id="notificationDropdown">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                        <i class='bx bx-bell fs-22'></i>
                        <span class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger">3<span class="visually-hidden">unread messages</span></span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">

                        <div class="dropdown-head bg-primary bg-pattern rounded-top">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0 fs-16 fw-semibold text-white"> Notifications </h6>
                                    </div>
                                    <div class="col-auto dropdown-tabs">
                                        <span class="badge bg-light-subtle text-body fs-13"> 4 New</span>
                                    </div>
                                </div>
                            </div>

                            <div class="px-2 pt-2">
                                <ul class="nav nav-tabs dropdown-tabs nav-tabs-custom" data-dropdown-tabs="true" id="notificationItemsTab" role="tablist">
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#all-noti-tab" role="tab" aria-selected="true">
                                            All (4)
                                        </a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link" data-bs-toggle="tab" href="#messages-tab" role="tab" aria-selected="false">
                                            Messages
                                        </a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link" data-bs-toggle="tab" href="#alerts-tab" role="tab" aria-selected="false">
                                            Alerts
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <div class="tab-content position-relative" id="notificationItemsTabContent">
                            <div class="tab-pane fade show active py-2 ps-2" id="all-noti-tab" role="tabpanel">
                                <div data-simplebar style="max-height: 300px;" class="pe-2">
                                    <div class="text-reset notification-item d-block dropdown-item position-relative">
                                        <div class="d-flex">
                                            <div class="avatar-xs me-3 flex-shrink-0">
                                                <span class="avatar-title bg-info-subtle text-info rounded-circle fs-16">
                                                    <i class="bx bx-badge-check"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-2 lh-base">Your <b>Elite</b> author Graphic
                                                        Optimization <span class="text-secondary">reward</span> is
                                                        ready!
                                                    </h6>
                                                </a>
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                    <span><i class="mdi mdi-clock-outline"></i> Just 30 sec ago</span>
                                                </p>
                                            </div>
                                            <div class="px-2 fs-15">
                                                <div class="form-check notification-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="all-notification-check01">
                                                    <label class="form-check-label" for="all-notification-check01"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-reset notification-item d-block dropdown-item position-relative">
                                        <div class="d-flex">
                                            <img src="assets/images/users/avatar-2.jpg" class="me-3 rounded-circle avatar-xs flex-shrink-0" alt="user-pic">
                                            <div class="flex-grow-1">
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-1 fs-13 fw-semibold">Angela Bernier</h6>
                                                </a>
                                                <div class="fs-13 text-muted">
                                                    <p class="mb-1">Answered to your comment on the cash flow forecast's
                                                        graph 🔔.</p>
                                                </div>
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                    <span><i class="mdi mdi-clock-outline"></i> 48 min ago</span>
                                                </p>
                                            </div>
                                            <div class="px-2 fs-15">
                                                <div class="form-check notification-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="all-notification-check02">
                                                    <label class="form-check-label" for="all-notification-check02"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-reset notification-item d-block dropdown-item position-relative">
                                        <div class="d-flex">
                                            <div class="avatar-xs me-3 flex-shrink-0">
                                                <span class="avatar-title bg-danger-subtle text-danger rounded-circle fs-16">
                                                    <i class='bx bx-message-square-dots'></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-2 fs-13 lh-base">You have received <b class="text-success">20</b> new messages in the conversation
                                                    </h6>
                                                </a>
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                    <span><i class="mdi mdi-clock-outline"></i> 2 hrs ago</span>
                                                </p>
                                            </div>
                                            <div class="px-2 fs-15">
                                                <div class="form-check notification-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="all-notification-check03">
                                                    <label class="form-check-label" for="all-notification-check03"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-reset notification-item d-block dropdown-item position-relative">
                                        <div class="d-flex">
                                            <img src="assets/images/users/avatar-8.jpg" class="me-3 rounded-circle avatar-xs flex-shrink-0" alt="user-pic">
                                            <div class="flex-grow-1">
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-1 fs-13 fw-semibold">Maureen Gibson</h6>
                                                </a>
                                                <div class="fs-13 text-muted">
                                                    <p class="mb-1">We talked about a project on linkedin.</p>
                                                </div>
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                    <span><i class="mdi mdi-clock-outline"></i> 4 hrs ago</span>
                                                </p>
                                            </div>
                                            <div class="px-2 fs-15">
                                                <div class="form-check notification-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="all-notification-check04">
                                                    <label class="form-check-label" for="all-notification-check04"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="my-3 text-center view-all">
                                        <button type="button" class="btn btn-soft-success waves-effect waves-light">View
                                            All Notifications <i class="ri-arrow-right-line align-middle"></i></button>
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane fade py-2 ps-2" id="messages-tab" role="tabpanel" aria-labelledby="messages-tab">
                                <div data-simplebar style="max-height: 300px;" class="pe-2">
                                    <div class="text-reset notification-item d-block dropdown-item">
                                        <div class="d-flex">
                                            <img src="assets/images/users/avatar-3.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-grow-1">
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-1 fs-13 fw-semibold">James Lemire</h6>
                                                </a>
                                                <div class="fs-13 text-muted">
                                                    <p class="mb-1">We talked about a project on linkedin.</p>
                                                </div>
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                    <span><i class="mdi mdi-clock-outline"></i> 30 min ago</span>
                                                </p>
                                            </div>
                                            <div class="px-2 fs-15">
                                                <div class="form-check notification-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="messages-notification-check01">
                                                    <label class="form-check-label" for="messages-notification-check01"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-reset notification-item d-block dropdown-item">
                                        <div class="d-flex">
                                            <img src="assets/images/users/avatar-2.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-grow-1">
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-1 fs-13 fw-semibold">Angela Bernier</h6>
                                                </a>
                                                <div class="fs-13 text-muted">
                                                    <p class="mb-1">Answered to your comment on the cash flow forecast's
                                                        graph 🔔.</p>
                                                </div>
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                    <span><i class="mdi mdi-clock-outline"></i> 2 hrs ago</span>
                                                </p>
                                            </div>
                                            <div class="px-2 fs-15">
                                                <div class="form-check notification-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="messages-notification-check02">
                                                    <label class="form-check-label" for="messages-notification-check02"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-reset notification-item d-block dropdown-item">
                                        <div class="d-flex">
                                            <img src="assets/images/users/avatar-6.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-grow-1">
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-1 fs-13 fw-semibold">Kenneth Brown</h6>
                                                </a>
                                                <div class="fs-13 text-muted">
                                                    <p class="mb-1">Mentionned you in his comment on 📃 invoice #12501.
                                                    </p>
                                                </div>
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                    <span><i class="mdi mdi-clock-outline"></i> 10 hrs ago</span>
                                                </p>
                                            </div>
                                            <div class="px-2 fs-15">
                                                <div class="form-check notification-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="messages-notification-check03">
                                                    <label class="form-check-label" for="messages-notification-check03"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-reset notification-item d-block dropdown-item">
                                        <div class="d-flex">
                                            <img src="assets/images/users/avatar-8.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-grow-1">
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-1 fs-13 fw-semibold">Maureen Gibson</h6>
                                                </a>
                                                <div class="fs-13 text-muted">
                                                    <p class="mb-1">We talked about a project on linkedin.</p>
                                                </div>
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                    <span><i class="mdi mdi-clock-outline"></i> 3 days ago</span>
                                                </p>
                                            </div>
                                            <div class="px-2 fs-15">
                                                <div class="form-check notification-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="messages-notification-check04">
                                                    <label class="form-check-label" for="messages-notification-check04"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="my-3 text-center view-all">
                                        <button type="button" class="btn btn-soft-success waves-effect waves-light">View
                                            All Messages <i class="ri-arrow-right-line align-middle"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade p-4" id="alerts-tab" role="tabpanel" aria-labelledby="alerts-tab"></div>

                            <div class="notification-actions" id="notification-actions">
                                <div class="d-flex text-muted justify-content-center">
                                    Select <div id="select-content" class="text-body fw-semibold px-1">0</div> Result <button type="button" class="btn btn-link link-danger p-0 ms-3" data-bs-toggle="modal" data-bs-target="#removeNotificationModal">Remove</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dropdown ms-sm-3 header-item topbar-user">
                    <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg" alt="Header Avatar">
                            <span class="text-start ms-xl-2">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Anna Adame</span>
                                <span class="d-none d-xl-block ms-1 fs-12 user-name-sub-text">Founder</span>
                            </span>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <h6 class="dropdown-header">Welcome Anna!</h6>
                        <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                        <a class="dropdown-item" href="apps-chat.html"><i class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Messages</span></a>
                        <a class="dropdown-item" href="apps-tasks-kanban.html"><i class="mdi mdi-calendar-check-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Taskboard</span></a>
                        <a class="dropdown-item" href="pages-faqs.html"><i class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Help</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-wallet text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Balance : <b>$5971.67</b></span></a>
                        <a class="dropdown-item" href="pages-profile-settings.html"><span class="badge bg-success-subtle text-success mt-1 float-end">New</span><i class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Settings</span></a>
                        <a class="dropdown-item" href="auth-lockscreen-basic.html"><i class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Lock screen</span></a>
                        <a class="dropdown-item" href="auth-logout-basic.html"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- removeNotificationModal -->
<div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>Are you sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="" height="17">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="17">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                <i data-feather="home" class="icon-dual"></i> <span data-key="t-dashboards">Dashboards</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarDashboards">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="dashboard-analytics.html" class="nav-link" data-key="t-analytics"> Analytics </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashboard-crm.html" class="nav-link" data-key="t-crm"> CRM </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index.html" class="nav-link" data-key="t-ecommerce"> Ecommerce </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashboard-crypto.html" class="nav-link" data-key="t-crypto"> Crypto </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashboard-projects.html" class="nav-link" data-key="t-projects"> Projects </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashboard-nft.html" class="nav-link" data-key="t-nft"> NFT</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashboard-job.html" class="nav-link" data-key="t-job">Job</a>
                                    </li>
                                </ul>
                            </div>
                        </li> <!-- end Dashboard Menu -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                                <i data-feather="grid" class="icon-dual"></i> <span data-key="t-apps">Apps</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarApps">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="#sidebarCalendar" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCalendar" data-key="t-calender">
                                            Calendar
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarCalendar">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="apps-calendar.html" class="nav-link" data-key="t-main-calender"> Main Calender </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-calendar-month-grid.html" class="nav-link" data-key="t-month-grid"> Month Grid </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="apps-chat.html" class="nav-link" data-key="t-chat"> Chat </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#sidebarEmail" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarEmail" data-key="t-email">
                                            Email
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarEmail">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="apps-mailbox.html" class="nav-link" data-key="t-mailbox"> Mailbox </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#sidebaremailTemplates" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebaremailTemplates" data-key="t-email-templates">
                                                        Email Templates
                                                    </a>
                                                    <div class="collapse menu-dropdown" id="sidebaremailTemplates">
                                                        <ul class="nav nav-sm flex-column">
                                                            <li class="nav-item">
                                                                <a href="apps-email-basic.html" class="nav-link" data-key="t-basic-action"> Basic Action </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="apps-email-ecommerce.html" class="nav-link" data-key="t-ecommerce-action"> Ecommerce Action </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#sidebarEcommerce" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarEcommerce" data-key="t-ecommerce">Ecommerce
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarEcommerce">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="apps-ecommerce-products.html" class="nav-link" data-key="t-products"> Products </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-ecommerce-product-details.html" class="nav-link" data-key="t-product-Details"> Product Details </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-ecommerce-add-product.html" class="nav-link" data-key="t-create-product"> Create Product </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-ecommerce-orders.html" class="nav-link" data-key="t-orders"> Orders </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-ecommerce-order-details.html" class="nav-link" data-key="t-order-details"> Order Details </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-ecommerce-customers.html" class="nav-link" data-key="t-customers"> Customers </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-ecommerce-cart.html" class="nav-link" data-key="t-shopping-cart"> Shopping Cart </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-ecommerce-checkout.html" class="nav-link" data-key="t-checkout"> Checkout </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-ecommerce-sellers.html" class="nav-link" data-key="t-sellers"> Sellers </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-ecommerce-seller-details.html" class="nav-link" data-key="t-sellers-details"> Seller Details </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#sidebarProjects" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProjects" data-key="t-projects"> Projects
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarProjects">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="apps-projects-list.html" class="nav-link" data-key="t-list"> List </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-projects-overview.html" class="nav-link" data-key="t-overview"> Overview </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-projects-create.html" class="nav-link" data-key="t-create-project"> Create Project </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#sidebarTasks" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTasks" data-key="t-tasks"> Tasks
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarTasks">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="apps-tasks-kanban.html" class="nav-link" data-key="t-kanbanboard"> Kanban Board </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-tasks-list-view.html" class="nav-link" data-key="t-list-view"> List View </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-tasks-details.html" class="nav-link" data-key="t-task-details"> Task Details </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#sidebarCRM" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCRM" data-key="t-crm"> CRM
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarCRM">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="apps-crm-contacts.html" class="nav-link" data-key="t-contacts"> Contacts </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-crm-companies.html" class="nav-link" data-key="t-companies"> Companies </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-crm-deals.html" class="nav-link" data-key="t-deals"> Deals </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-crm-leads.html" class="nav-link" data-key="t-leads"> Leads </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#sidebarCrypto" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCrypto" data-key="t-crypto"> Crypto
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarCrypto">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="apps-crypto-transactions.html" class="nav-link" data-key="t-transactions"> Transactions </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-crypto-buy-sell.html" class="nav-link" data-key="t-buy-sell"> Buy & Sell </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-crypto-orders.html" class="nav-link" data-key="t-orders"> Orders </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-crypto-wallet.html" class="nav-link" data-key="t-my-wallet"> My Wallet </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-crypto-ico.html" class="nav-link" data-key="t-ico-list"> ICO List </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-crypto-kyc.html" class="nav-link" data-key="t-kyc-application"> KYC Application </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#sidebarInvoices" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarInvoices" data-key="t-invoices"> Invoices
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarInvoices">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="apps-invoices-list.html" class="nav-link" data-key="t-list-view"> List View </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-invoices-details.html" class="nav-link" data-key="t-details"> Details </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-invoices-create.html" class="nav-link" data-key="t-create-invoice"> Create Invoice </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#sidebarTickets" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTickets" data-key="t-supprt-tickets"> Support Tickets
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarTickets">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="apps-tickets-list.html" class="nav-link" data-key="t-list-view"> List View </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-tickets-details.html" class="nav-link" data-key="t-ticket-details"> Ticket Details </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#sidebarnft" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarnft" data-key="t-nft-marketplace">
                                            NFT Marketplace
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarnft">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="apps-nft-marketplace.html" class="nav-link" data-key="t-marketplace"> Marketplace </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-nft-explore.html" class="nav-link" data-key="t-explore-now"> Explore Now </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-nft-auction.html" class="nav-link" data-key="t-live-auction"> Live Auction </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-nft-item-details.html" class="nav-link" data-key="t-item-details"> Item Details </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-nft-collections.html" class="nav-link" data-key="t-collections"> Collections </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-nft-creators.html" class="nav-link" data-key="t-creators"> Creators </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-nft-ranking.html" class="nav-link" data-key="t-ranking"> Ranking </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-nft-wallet.html" class="nav-link" data-key="t-wallet-connect"> Wallet Connect </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-nft-create.html" class="nav-link" data-key="t-create-nft"> Create NFT </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="apps-file-manager.html" class="nav-link"> <span data-key="t-file-manager">File Manager</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="apps-todo.html" class="nav-link"> <span data-key="t-to-do">To Do</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#sidebarjobs" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarjobs" data-key="t-jobs"> Jobs</a>
                                        <div class="collapse menu-dropdown" id="sidebarjobs">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="apps-job-statistics.html" class="nav-link" data-key="t-statistics"> Statistics </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#sidebarJoblists" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarJoblists" data-key="t-job-lists">
                                                        Job Lists
                                                    </a>
                                                    <div class="collapse menu-dropdown" id="sidebarJoblists">
                                                        <ul class="nav nav-sm flex-column">
                                                            <li class="nav-item">
                                                                <a href="apps-job-lists.html" class="nav-link" data-key="t-list"> List
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="apps-job-grid-lists.html" class="nav-link" data-key="t-grid"> Grid </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="apps-job-details.html" class="nav-link" data-key="t-overview"> Overview</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#sidebarCandidatelists" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCandidatelists" data-key="t-candidate-lists">
                                                        Candidate Lists
                                                    </a>
                                                    <div class="collapse menu-dropdown" id="sidebarCandidatelists">
                                                        <ul class="nav nav-sm flex-column">
                                                            <li class="nav-item">
                                                                <a href="apps-job-candidate-lists.html" class="nav-link" data-key="t-list-view"> List View
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="apps-job-candidate-grid.html" class="nav-link" data-key="t-grid-view"> Grid View</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-job-application.html" class="nav-link" data-key="t-application"> Application </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-job-new.html" class="nav-link" data-key="t-new-job"> New Job </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-job-companies-lists.html" class="nav-link" data-key="t-companies-list"> Companies List </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-job-categories.html" class="nav-link" data-key="t-job-categories"> Job Categories</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="apps-api-key.html" class="nav-link" data-key="t-api-key">API Key</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                                <i data-feather="layout" class="icon-dual"></i> <span data-key="t-layouts">Layouts</span> <span class="badge badge-pill bg-danger" data-key="t-hot">Hot</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarLayouts">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="layouts-horizontal.html" target="_blank" class="nav-link" data-key="t-horizontal">Horizontal</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="layouts-detached.html" target="_blank" class="nav-link" data-key="t-detached">Detached</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="layouts-two-column.html" target="_blank" class="nav-link" data-key="t-two-column">Two Column</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="layouts-vertical-hovered.html" target="_blank" class="nav-link" data-key="t-hovered">Hovered</a>
                                    </li>
                                </ul>
                            </div>
                        </li> <!-- end Dashboard Menu -->

                        <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Pages</span></li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarAuth" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuth">
                                <i data-feather="users" class="icon-dual"></i> <span data-key="t-authentication">Authentication</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarAuth">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="#sidebarSignIn" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSignIn" data-key="t-signin"> Sign In
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarSignIn">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="auth-signin-basic.html" class="nav-link" data-key="t-basic"> Basic </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="auth-signin-cover.html" class="nav-link" data-key="t-cover"> Cover </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#sidebarSignUp" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSignUp" data-key="t-signup"> Sign Up
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarSignUp">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="auth-signup-basic.html" class="nav-link" data-key="t-basic"> Basic </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="auth-signup-cover.html" class="nav-link" data-key="t-cover"> Cover </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#sidebarResetPass" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarResetPass" data-key="t-password-reset"> Password Reset
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarResetPass">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="auth-pass-reset-basic.html" class="nav-link" data-key="t-basic"> Basic </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="auth-pass-reset-cover.html" class="nav-link" data-key="t-cover"> Cover </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#sidebarchangePass" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarchangePass" data-key="t-password-create">
                                            Password Create
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarchangePass">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="auth-pass-change-basic.html" class="nav-link" data-key="t-basic">
                                                        Basic </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="auth-pass-change-cover.html" class="nav-link" data-key="t-cover">
                                                        Cover </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#sidebarLockScreen" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLockScreen" data-key="t-lock-screen"> Lock Screen
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarLockScreen">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="auth-lockscreen-basic.html" class="nav-link" data-key="t-basic"> Basic </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="auth-lockscreen-cover.html" class="nav-link" data-key="t-cover"> Cover </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#sidebarLogout" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLogout" data-key="t-logout"> Logout
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarLogout">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="auth-logout-basic.html" class="nav-link" data-key="t-basic"> Basic </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="auth-logout-cover.html" class="nav-link" data-key="t-cover"> Cover </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#sidebarSuccessMsg" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSuccessMsg" data-key="t-success-message"> Success Message
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarSuccessMsg">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="auth-success-msg-basic.html" class="nav-link" data-key="t-basic"> Basic </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="auth-success-msg-cover.html" class="nav-link" data-key="t-cover"> Cover </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#sidebarTwoStep" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTwoStep" data-key="t-two-step-verification"> Two Step Verification
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarTwoStep">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="auth-twostep-basic.html" class="nav-link" data-key="t-basic"> Basic </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="auth-twostep-cover.html" class="nav-link" data-key="t-cover"> Cover </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#sidebarErrors" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarErrors" data-key="t-errors"> Errors
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarErrors">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="auth-404-basic.html" class="nav-link" data-key="t-404-basic"> 404 Basic </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="auth-404-cover.html" class="nav-link" data-key="t-404-cover"> 404 Cover </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="auth-404-alt.html" class="nav-link" data-key="t-404-alt"> 404 Alt </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="auth-500.html" class="nav-link" data-key="t-500"> 500 </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="auth-offline.html" class="nav-link" data-key="t-offline-page"> Offline Page </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                                <i data-feather="command" class="icon-dual"></i> <span data-key="t-pages">Pages</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarPages">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="pages-starter.html" class="nav-link" data-key="t-starter"> Starter </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#sidebarProfile" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProfile" data-key="t-profile"> Profile
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarProfile">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="pages-profile.html" class="nav-link" data-key="t-simple-page"> Simple Page </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="pages-profile-settings.html" class="nav-link" data-key="t-settings"> Settings </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages-team.html" class="nav-link" data-key="t-team"> Team </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages-timeline.html" class="nav-link" data-key="t-timeline"> Timeline </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages-faqs.html" class="nav-link" data-key="t-faqs"> FAQs </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages-pricing.html" class="nav-link" data-key="t-pricing"> Pricing </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages-gallery.html" class="nav-link" data-key="t-gallery"> Gallery </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages-maintenance.html" class="nav-link" data-key="t-maintenance"> Maintenance </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages-coming-soon.html" class="nav-link" data-key="t-coming-soon"> Coming Soon </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages-sitemap.html" class="nav-link" data-key="t-sitemap"> Sitemap </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages-search-results.html" class="nav-link" data-key="t-search-results"> Search Results </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages-privacy-policy.html" class="nav-link" data-key="t-privacy-policy">Privacy Policy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages-term-conditions.html" class="nav-link" data-key="t-term-conditions">Term & Conditions</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarLanding" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLanding">
                                <i class="ri-rocket-line"></i> <span data-key="t-landing">Landing</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarLanding">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="landing.html" class="nav-link" data-key="t-one-page"> One Page </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="nft-landing.html" class="nav-link" data-key="t-nft-landing"> NFT Landing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="job-landing.html" class="nav-link" data-key="t-job">Job</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-components">Components</span></li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarUI">
                                <i data-feather="package" class="icon-dual"></i> <span data-key="t-base-ui">Base UI</span>
                            </a>
                            <div class="collapse menu-dropdown mega-dropdown-menu" id="sidebarUI">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="ui-alerts.html" class="nav-link" data-key="t-alerts">Alerts</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="ui-badges.html" class="nav-link" data-key="t-badges">Badges</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="ui-buttons.html" class="nav-link" data-key="t-buttons">Buttons</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="ui-colors.html" class="nav-link" data-key="t-colors">Colors</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="ui-cards.html" class="nav-link" data-key="t-cards">Cards</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="ui-carousel.html" class="nav-link" data-key="t-carousel">Carousel</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="ui-dropdowns.html" class="nav-link" data-key="t-dropdowns">Dropdowns</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="ui-grid.html" class="nav-link" data-key="t-grid">Grid</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="ui-images.html" class="nav-link" data-key="t-images">Images</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="ui-tabs.html" class="nav-link" data-key="t-tabs">Tabs</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="ui-accordions.html" class="nav-link" data-key="t-accordion-collapse">Accordion & Collapse</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="ui-modals.html" class="nav-link" data-key="t-modals">Modals</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="ui-offcanvas.html" class="nav-link" data-key="t-offcanvas">Offcanvas</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="ui-placeholders.html" class="nav-link" data-key="t-placeholders">Placeholders</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="ui-progress.html" class="nav-link" data-key="t-progress">Progress</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="ui-notifications.html" class="nav-link" data-key="t-notifications">Notifications</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="ui-media.html" class="nav-link" data-key="t-media-object">Media object</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="ui-embed-video.html" class="nav-link" data-key="t-embed-video">Embed Video</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="ui-typography.html" class="nav-link" data-key="t-typography">Typography</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="ui-lists.html" class="nav-link" data-key="t-lists">Lists</a>
                                            </li>
                                            <li class="nav-item">
        										<a href="ui-links.html" class="nav-link"><span data-key="t-links">Links</span> <span class="badge badge-pill bg-success" data-key="t-new">New</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="ui-general.html" class="nav-link" data-key="t-general">General</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="ui-ribbons.html" class="nav-link" data-key="t-ribbons">Ribbons</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="ui-utilities.html" class="nav-link" data-key="t-utilities">Utilities</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarAdvanceUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAdvanceUI">
                                <i data-feather="layers" class="icon-dual"></i> <span data-key="t-advance-ui">Advance UI</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarAdvanceUI">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="advance-ui-sweetalerts.html" class="nav-link" data-key="t-sweet-alerts">Sweet Alerts</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="advance-ui-nestable.html" class="nav-link" data-key="t-nestable-list">Nestable List</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="advance-ui-scrollbar.html" class="nav-link" data-key="t-scrollbar">Scrollbar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="advance-ui-animation.html" class="nav-link" data-key="t-animation">Animation</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="advance-ui-tour.html" class="nav-link" data-key="t-tour">Tour</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="advance-ui-swiper.html" class="nav-link" data-key="t-swiper-slider">Swiper Slider</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="advance-ui-ratings.html" class="nav-link" data-key="t-ratings">Ratings</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="advance-ui-highlight.html" class="nav-link" data-key="t-highlight">Highlight</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="advance-ui-scrollspy.html" class="nav-link" data-key="t-scrollSpy">ScrollSpy</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="widgets.html">
                                <i data-feather="copy" class="icon-dual"></i> <span data-key="t-widgets">Widgets</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarForms" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarForms">
                                <i data-feather="file-text" class="icon-dual"></i> <span data-key="t-forms">Forms</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarForms">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="forms-elements.html" class="nav-link" data-key="t-basic-elements">Basic Elements</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="forms-select.html" class="nav-link" data-key="t-form-select"> Form Select </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="forms-checkboxs-radios.html" class="nav-link" data-key="t-checkboxs-radios">Checkboxs & Radios</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="forms-pickers.html" class="nav-link" data-key="t-pickers"> Pickers </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="forms-masks.html" class="nav-link" data-key="t-input-masks">Input Masks</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="forms-advanced.html" class="nav-link" data-key="t-advanced">Advanced</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="forms-range-sliders.html" class="nav-link" data-key="t-range-slider"> Range Slider </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="forms-validation.html" class="nav-link" data-key="t-validation">Validation</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="forms-wizard.html" class="nav-link" data-key="t-wizard">Wizard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="forms-editors.html" class="nav-link" data-key="t-editors">Editors</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="forms-file-uploads.html" class="nav-link" data-key="t-file-uploads">File Uploads</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="forms-layouts.html" class="nav-link" data-key="t-form-layouts">Form Layouts</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="forms-select2.html" class="nav-link" data-key="t-select2">Select2</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarTables" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTables">
                                <i data-feather="database" class="icon-dual"></i> <span data-key="t-tables">Tables</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarTables">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="tables-basic.html" class="nav-link" data-key="t-basic-tables">Basic Tables</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="tables-gridjs.html" class="nav-link" data-key="t-grid-js">Grid Js</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="tables-listjs.html" class="nav-link" data-key="t-list-js">List Js</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="tables-datatables.html" class="nav-link" data-key="t-datatables">Datatables</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarCharts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCharts">
                                <i data-feather="pie-chart" class="icon-dual"></i> <span data-key="t-charts">Charts</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarCharts">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="#sidebarApexcharts" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApexcharts" data-key="t-apexcharts"> Apexcharts
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarApexcharts">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="charts-apex-line.html" class="nav-link" data-key="t-line"> Line </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="charts-apex-area.html" class="nav-link" data-key="t-area"> Area </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="charts-apex-column.html" class="nav-link" data-key="t-column"> Column </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="charts-apex-bar.html" class="nav-link" data-key="t-bar"> Bar </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="charts-apex-mixed.html" class="nav-link" data-key="t-mixed"> Mixed
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="charts-apex-timeline.html" class="nav-link" data-key="t-timeline">
                                                        Timeline </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="charts-apex-range-area.html" class="nav-link"><span data-key="t-range-area">Range Area</span> <span class="badge badge-pill bg-success" data-key="t-new">New</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="charts-apex-funnel.html" class="nav-link"><span data-key="t-funnel">Funnel</span> <span class="badge badge-pill bg-success" data-key="t-new">New</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="charts-apex-candlestick.html" class="nav-link" data-key="t-candlstick"> Candlstick </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="charts-apex-boxplot.html" class="nav-link" data-key="t-boxplot"> Boxplot </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="charts-apex-bubble.html" class="nav-link" data-key="t-bubble"> Bubble </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="charts-apex-scatter.html" class="nav-link" data-key="t-scatter"> Scatter </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="charts-apex-heatmap.html" class="nav-link" data-key="t-heatmap"> Heatmap </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="charts-apex-treemap.html" class="nav-link" data-key="t-treemap"> Treemap </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="charts-apex-pie.html" class="nav-link" data-key="t-pie"> Pie </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="charts-apex-radialbar.html" class="nav-link" data-key="t-radialbar"> Radialbar </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="charts-apex-radar.html" class="nav-link" data-key="t-radar"> Radar </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="charts-apex-polar.html" class="nav-link" data-key="t-polar-area"> Polar Area </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="charts-chartjs.html" class="nav-link" data-key="t-chartjs"> Chartjs </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="charts-echarts.html" class="nav-link" data-key="t-echarts"> Echarts </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarIcons" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarIcons">
                                <i data-feather="archive" class="icon-dual"></i> <span data-key="t-icons">Icons</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarIcons">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="icons-remix.html" class="nav-link"><span data-key="t-remix">Remix</span> <span class="badge badge-pill bg-info">v3.5</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="icons-boxicons.html" class="nav-link"><span data-key="t-boxicons">Boxicons</span> <span class="badge badge-pill bg-info">v2.1.4</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="icons-materialdesign.html" class="nav-link"><span data-key="t-material-design">Material Design</span> <span class="badge badge-pill bg-info">v7.2.96</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="icons-lineawesome.html" class="nav-link" data-key="t-line-awesome">Line Awesome</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="icons-feather.html" class="nav-link"><span data-key="t-feather">Feather</span> <span class="badge badge-pill bg-info">v4.29</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="icons-crypto.html" class="nav-link"> <span data-key="t-crypto-svg">Crypto SVG</span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarMaps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMaps">
                                <i data-feather="map-pin" class="icon-dual"></i> <span data-key="t-maps">Maps</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarMaps">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="maps-google.html" class="nav-link" data-key="t-google">
                                            Google
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="maps-vector.html" class="nav-link" data-key="t-vector">
                                            Vector
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="maps-leaflet.html" class="nav-link" data-key="t-leaflet">
                                            Leaflet
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarMultilevel" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMultilevel">
                                <i data-feather="share-2" class="icon-dual"></i> <span data-key="t-multi-level">Multi Level</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarMultilevel">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link" data-key="t-level-1.1"> Level 1.1 </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#sidebarAccount" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAccount" data-key="t-level-1.2"> Level 1.2
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarAccount">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link" data-key="t-level-2.1"> Level 2.1 </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#sidebarCrm" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCrm" data-key="t-level-2.2"> Level 2.2
                                                    </a>
                                                    <div class="collapse menu-dropdown" id="sidebarCrm">
                                                        <ul class="nav nav-sm flex-column">
                                                            <li class="nav-item">
                                                                <a href="#" class="nav-link" data-key="t-level-3.1"> Level 3.1 </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="#" class="nav-link" data-key="t-level-3.2"> Level 3.2 </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Accordions</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Base UI</a></li>
                                        <li class="breadcrumb-item active">Accordions</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xxl-6">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Default Accordion</h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                            <label for="default-base-showcode" class="form-label text-muted">Show Code</label>
                                            <input class="form-check-input code-switcher" type="checkbox" id="default-base-showcode">
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Use the <code>accordion</code> class to expand/collapse the accordion content.</p>
                                    <div class="live-preview">
                                        <div class="accordion" id="default-accordion-example">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        How to create a group booking ?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#default-accordion-example">
                                                    <div class="accordion-body">
                                                        Although you probably won’t get into any legal trouble if you do it just once, why risk it? If you made your subscribers a promise, you should honor that. If not, you run the risk of a drastic increase in opt outs, which will only hurt you in the long run.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Why do we use it ?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#default-accordion-example">
                                                    <div class="accordion-body">
                                                        No charges are put in place by SlickText when subscribers join your text list. This does not mean however that charges 100% will not occur. Charges that may occur fall under part of the compliance statement stating "Message and Data rates may apply."
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Where does it come from ?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#default-accordion-example">
                                                    <div class="accordion-body">
                                                        Now that you have a general idea of the amount of texts you will need per month, simply find a plan size that allows you to have this allotment, plus some extra for growth. Don't worry, there are no mistakes to be made here. You can always upgrade and downgrade.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none code-view">
                                        <pre class="language-markup" style="height: 275px;">
<code>&lt;!-- Base Example --&gt;
&lt;div class=&quot;accordion&quot; id=&quot;default-accordion-example&quot;&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot; id=&quot;headingOne&quot;&gt;
            &lt;button class=&quot;accordion-button&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseOne&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;collapseOne&quot;&gt;
                How to create a group booking ?
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;collapseOne&quot; class=&quot;accordion-collapse collapse show&quot; aria-labelledby=&quot;headingOne&quot; data-bs-parent=&quot;#default-accordion-example&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
            Although you probably won’t get into any legal trouble if you do it just once, why risk it? If you made your subscribers a promise, you should honor that. If not, you run the risk of a drastic increase in opt outs, which will only hurt you in the long run.
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;/div&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot; id=&quot;headingTwo&quot;&gt;
            &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseTwo&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseTwo&quot;&gt;
                Why do we use it ?
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;collapseTwo&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;headingTwo&quot; data-bs-parent=&quot;#default-accordion-example&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
            No charges are put in place by SlickText when subscribers join your text list. This does not mean however that charges 100% will not occur. Charges that may occur fall under part of the compliance statement stating "Message and Data rates may apply."
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot; id=&quot;headingThree&quot;&gt;
            &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseThree&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseThree&quot;&gt;
                Where does it come from ?
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;collapseThree&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;headingThree&quot; data-bs-parent=&quot;#default-accordion-example&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
            Now that you have a general idea of the amount of texts you will need per month, simply find a plan size that allows you to have this allotment, plus some extra for growth. Don't worry, there are no mistakes to be made here. You can always upgrade and downgrade.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->

                        <div class="col-xxl-6">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Accordion Flush </h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                            <label for="accordion-flush" class="form-label text-muted">Show Code</label>
                                            <input class="form-check-input code-switcher" type="checkbox" id="accordion-flush">
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <p class="text-muted">Use <code>accordion-flush</code> class to remove the default background-color, some borders, and some rounded corners to render accordions edge-to-edge with their parent container.</p>
                                    <div class="live-preview">
                                        <div class="accordion accordion-flush" id="accordionFlushExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingOne">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                                                        How do I set up my profile ?
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        The renewal of your SlickText service happens on the anniversary of your original paid sign up date. Upgrading in the middle of your billing period will not change the billing date. Upgrading does however force an immediate, pro-rated charge to take place on your account.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingTwo">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                        What can I do with my project ?
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        If you had signed up on a free account with Slicktext, then upgraded to a paid plan at a later date, your bill will renew based on the date you had upgraded to a paid plan. All invoices are able to be viewed under your plan options in your SlickText account.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingThree">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                        Where can I go to edit voice settings
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        No, we cannot provide this information. Opting out from a list is an anonymous, private act. This prevents further harassment. Providing this information is considered bad practice, and further communication after they opt out would be considered against compliance.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none code-view">
                                        <pre class="language-markup" style="height: 275px;">
<code>&lt;!-- Accordion Flush Example --&gt;
&lt;div class=&quot;accordion accordion-flush&quot; id=&quot;accordionFlushExample&quot;&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot; id=&quot;flush-headingOne&quot;&gt;
            &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot;
                data-bs-target=&quot;#flush-collapseOne&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;flush-collapseOne&quot;&gt;
                How do I set up my profile ?
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;flush-collapseOne&quot; class=&quot;accordion-collapse collapse show&quot; aria-labelledby=&quot;flush-headingOne&quot;
            data-bs-parent=&quot;#accordionFlushExample&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;The renewal of your SlickText service happens on the anniversary of your original paid sign up date. Upgrading in the middle of your billing period will not change the billing date. Upgrading does however force an immediate, pro-rated charge to take place on your account.&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot; id=&quot;flush-headingTwo&quot;&gt;
            &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot;
                data-bs-target=&quot;#flush-collapseTwo&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;flush-collapseTwo&quot;&gt;
                What can I do with my project ?
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;flush-collapseTwo&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;flush-headingTwo&quot;
            data-bs-parent=&quot;#accordionFlushExample&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;If you had signed up on a free account with Slicktext, then upgraded to a paid plan at a later date, your bill will renew based on the date you had upgraded to a paid plan. All invoices are able to be viewed under your plan options in your SlickText account.&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot; id=&quot;flush-headingThree&quot;&gt;
            &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot;
                data-bs-target=&quot;#flush-collapseThree&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;flush-collapseThree&quot;&gt;
                Where can I go to edit voice settings
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;flush-collapseThree&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;flush-headingThree&quot;
            data-bs-parent=&quot;#accordionFlushExample&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;No, we cannot provide this information. Opting out from a list is an anonymous, private act. This prevents further harassment. Providing this information is considered bad practice, and further communication after they opt out would be considered against compliance.&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <div class="row">
                        <div class="col-xxl-6">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Accordions with Icons</h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                            <label for="accordion-icon" class="form-label text-muted">Show Code</label>
                                            <input class="form-check-input code-switcher" type="checkbox" id="accordion-icon">
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <p class="text-muted">Use <code>custom-accordionwithicon</code> class to show custom icon at accordion.</p>
                                    <div class="live-preview">
                                        <div class="accordion custom-accordionwithicon accordion-secondary" id="accordionWithicon">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="accordionwithiconExample1">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accor_iconExamplecollapse1" aria-expanded="true" aria-controls="accor_iconExamplecollapse1">
                                                        <i class="ri-global-line me-2"></i> How Does Age Verification Work?
                                                    </button>
                                                </h2>
                                                <div id="accor_iconExamplecollapse1" class="accordion-collapse collapse show" aria-labelledby="accordionwithiconExample1" data-bs-parent="#accordionWithicon">
                                                    <div class="accordion-body">
                                                        Increase or decrease the letter spacing depending on the situation and try, try again until it looks right, and each assumenda labore aes Homo nostrud organic, assumenda labore aesthetic magna elements, buttons, everything.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="accordionwithiconExample2">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accor_iconExamplecollapse2" aria-expanded="false" aria-controls="accor_iconExamplecollapse2">
                                                        <i class="ri-user-location-line me-2"></i> How Does Link Tracking Work?
                                                    </button>
                                                </h2>
                                                <div id="accor_iconExamplecollapse2" class="accordion-collapse collapse" aria-labelledby="accordionwithiconExample2" data-bs-parent="#accordionWithicon">
                                                    <div class="accordion-body">
                                                        Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="accordionwithiconExample3">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accor_iconExamplecollapse3" aria-expanded="false" aria-controls="accor_iconExamplecollapse3">
                                                        <i class="ri-pen-nib-line me-2"></i> How Do I Set Up the Drip Feature?
                                                    </button>
                                                </h2>
                                                <div id="accor_iconExamplecollapse3" class="accordion-collapse collapse" aria-labelledby="accordionwithiconExample3" data-bs-parent="#accordionWithicon">
                                                    <div class="accordion-body">
                                                        Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis aliquam ultrices mauris.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none code-view">
                                        <pre class="language-markup" style="height: 275px;">
<code>&lt;!-- Accordions with Icons --&gt;
&lt;div class=&quot;accordion custom-accordionwithicon&quot; id=&quot;accordionWithicon&quot;&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot; id=&quot;accordionwithiconExample1&quot;&gt;
            &lt;button class=&quot;accordion-button&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#accor_iconExamplecollapse1&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;accor_iconExamplecollapse1&quot;&gt;
                &lt;i class=&quot;ri-global-line&quot;&gt;&lt;/i&gt; How Does Age Verification Work?
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;accor_iconExamplecollapse1&quot; class=&quot;accordion-collapse collapse show&quot; aria-labelledby=&quot;accordionwithiconExample1&quot; data-bs-parent=&quot;#accordionWithicon&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
            Increase or decrease the letter spacing depending on the situation and try, try again until it looks right, and each assumenda labore aes Homo nostrud organic, assumenda labore aesthetic magna elements, buttons, everything.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot; id=&quot;accordionwithiconExample2&quot;&gt;
            &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#accor_iconExamplecollapse2&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;accor_iconExamplecollapse2&quot;&gt;
                &lt;i class=&quot;ri-user-location-line&quot;&gt;&lt;/i&gt; How Does Link Tracking Work?
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;accor_iconExamplecollapse2&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;accordionwithiconExample2&quot; data-bs-parent=&quot;#accordionWithicon&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
                Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot; id=&quot;accordionwithiconExample3&quot;&gt;
            &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#accor_iconExamplecollapse3&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;accor_iconExamplecollapse3&quot;&gt;
                &lt;i class=&quot;ri-pen-nib-line&quot;&gt;&lt;/i&gt; How Do I Set Up the Drip Feature?
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;accor_iconExamplecollapse3&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;accordionwithiconExample3&quot; data-bs-parent=&quot;#accordionWithicon&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
                Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis aliquam ultrices mauris.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->

                        <div class="col-xxl-6">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Accordions without Icons</h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                            <label for="accordion-without-icon-showcode" class="form-label text-muted">Show Code</label>
                                            <input class="form-check-input code-switcher" type="checkbox" id="accordion-without-icon-showcode">
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <p class="text-muted">Use <code>accordion-icon-none</code> class to remove icon at accordion.</p>
                                    <div class="live-preview">
                                        <div class="accordion accordion-icon-none" id="accordionWithouticon">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="accordionwithouticonExample1">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accor_withouticoncollapse1" aria-expanded="true" aria-controls="accor_withouticoncollapse1">
                                                        <i class="ri-global-line me-2"></i> How Does Age Verification Work?
                                                    </button>
                                                </h2>
                                                <div id="accor_withouticoncollapse1" class="accordion-collapse collapse show" aria-labelledby="accordionwithouticonExample1" data-bs-parent="#accordionWithouticon">
                                                    <div class="accordion-body">
                                                        Each design is a new, unique piece of art birthed into this world, and while you have the opportunity to be creative and make your own style choices. For that very reason, I went on a quest and spoke to many different professional graphic designers.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="accordionwithouticonExample2">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accor_withouticoncollapse2" aria-expanded="false" aria-controls="accor_withouticoncollapse2">
                                                        <i class="ri-user-location-line me-2"></i> How Does Link Tracking Work?
                                                    </button>
                                                </h2>
                                                <div id="accor_withouticoncollapse2" class="accordion-collapse collapse" aria-labelledby="accordionwithouticonExample2" data-bs-parent="#accordionWithouticon">
                                                    <div class="accordion-body">
                                                        When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="accordionwithouticonExample3">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accor_withouticoncollapse3" aria-expanded="false" aria-controls="accor_withouticoncollapse3">
                                                        <i class="ri-pen-nib-line me-2"></i> How Do I Set Up the Drip Feature?
                                                    </button>
                                                </h2>
                                                <div id="accor_withouticoncollapse3" class="accordion-collapse collapse" aria-labelledby="accordionwithouticonExample3" data-bs-parent="#accordionWithouticon">
                                                    <div class="accordion-body">
                                                        Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis aliquam ultrices mauris.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none code-view">
                                        <pre class="language-markup" style="height: 275px;">
<code>&lt;!-- Accordions with Icons --&gt;
&lt;div class=&quot;accordion custom-accordionwithicon&quot; id=&quot;accordionWithicon&quot;&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot; id=&quot;accordionwithiconExample1&quot;&gt;
            &lt;button class=&quot;accordion-button&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#accor_withouticoncollapse1&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;accor_iconExamplecollapse1&quot;&gt;
                &lt;i class=&quot;ri-global-line&quot;&gt;&lt;/i&gt; How Does Age Verification Work?
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;accor_iconExamplecollapse1&quot; class=&quot;accordion-collapse collapse show&quot; aria-labelledby=&quot;accordionwithiconExample1&quot; data-bs-parent=&quot;#accordionWithicon&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua nulla assumenda shoreditch et.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot; id=&quot;accordionwithiconExample2&quot;&gt;
            &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#accor_iconExamplecollapse2&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;accor_iconExamplecollapse2&quot;&gt;
                &lt;i class=&quot;ri-user-location-line&quot;&gt;&lt;/i&gt; How Does Link Tracking Work?
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;accor_iconExamplecollapse2&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;accordionwithiconExample2&quot; data-bs-parent=&quot;#accordionWithicon&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
                Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot; id=&quot;accordionwithiconExample3&quot;&gt;
            &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#accor_iconExamplecollapse3&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;accor_iconExamplecollapse3&quot;&gt;
                &lt;i class=&quot;ri-pen-nib-line&quot;&gt;&lt;/i&gt; How Do I Set Up the Drip Feature?
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;accor_iconExamplecollapse3&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;accordionwithiconExample3&quot; data-bs-parent=&quot;#accordionWithicon&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
                Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis aliquam ultrices mauris.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->

                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Accordions with Plus Icon</h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                            <label for="withplusiconaccordion-showcode" class="form-label text-muted">Show Code</label>
                                            <input class="form-check-input code-switcher" type="checkbox" id="withplusiconaccordion-showcode">
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <p class="text-muted">Use <code>custom-accordionwithicon-plus</code> class to show plus icon at the accordion.</p>
                                    <div class="live-preview">
                                        <div class="accordion custom-accordionwithicon-plus" id="accordionWithplusicon">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="accordionwithplusExample1">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accor_plusExamplecollapse1" aria-expanded="true" aria-controls="accor_plusExamplecollapse1">
                                                        What is User Interface Design?
                                                    </button>
                                                </h2>
                                                <div id="accor_plusExamplecollapse1" class="accordion-collapse collapse show" aria-labelledby="accordionwithplusExample1" data-bs-parent="#accordionWithplusicon">
                                                    <div class="accordion-body">
                                                        Big July earthquakes confound zany experimental vow. My girl wove six dozen plaid jackets before she quit. Six big devils from Japan quickly forgot how to waltz. try again until it looks right, and each assumenda labore aes Homo nostrud organic, assumenda labore aesthetic magna elements, buttons, everything.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="accordionwithplusExample2">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accor_plusExamplecollapse2" aria-expanded="false" aria-controls="accor_plusExamplecollapse2">
                                                        What is Digital Marketing?
                                                    </button>
                                                </h2>
                                                <div id="accor_plusExamplecollapse2" class="accordion-collapse collapse" aria-labelledby="accordionwithplusExample2" data-bs-parent="#accordionWithplusicon">
                                                    <div class="accordion-body">
                                                        It makes a statement, it’s impressive graphic design. Increase or decrease the letter spacing depending on the situation and try, try again until it looks right, and each letter has the perfect spot of its own. commodo enim craft beer mlkshk aliquip jean shorts ullamco.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="accordionwithplusExample3">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accor_plusExamplecollapse3" aria-expanded="false" aria-controls="accor_plusExamplecollapse3">
                                                        Where does it come from ?
                                                    </button>
                                                </h2>
                                                <div id="accor_plusExamplecollapse3" class="accordion-collapse collapse" aria-labelledby="accordionwithplusExample3" data-bs-parent="#accordionWithplusicon">
                                                    <div class="accordion-body">
                                                        Spacing depending on the situation and try, try again until it looks right, and each. next level wes anderson artisan four loko farm-to-table craft beer twee. commodo enim craft beer mlkshk aliquip jean shorts ullamco. omo nostrud organic, assumenda labore aesthetic magna delectus. pposites attract, and that’s a fact.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none code-view">
                                        <pre class="language-markup" style="height: 275px;">
<code>&lt;!-- Accordions with Plus Icon --&gt;
&lt;div class=&quot;accordion custom-accordionwithicon-plus&quot; id=&quot;accordionWithplusicon&quot;&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot; id=&quot;accordionwithplusExample1&quot;&gt;
            &lt;button class=&quot;accordion-button&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#accor_plusExamplecollapse1&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;accor_plusExamplecollapse1&quot;&gt;
                What is User Interface Design?
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;accor_plusExamplecollapse1&quot; class=&quot;accordion-collapse collapse show&quot; aria-labelledby=&quot;accordionwithplusExample1&quot; data-bs-parent=&quot;#accordionWithplusicon&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
            Big July earthquakes confound zany experimental vow. My girl wove six dozen plaid jackets before she quit. Six big devils from Japan quickly forgot how to waltz. try again until it looks right, and each assumenda labore aes Homo nostrud organic, assumenda labore aesthetic magna elements, buttons, everything.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot; id=&quot;accordionwithplusExample2&quot;&gt;
            &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#accor_plusExamplecollapse2&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;accor_plusExamplecollapse2&quot;&gt;
                What is Digital Marketing?
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;accor_plusExamplecollapse2&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;accordionwithplusExample2&quot; data-bs-parent=&quot;#accordionWithplusicon&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
            It makes a statement, it’s impressive graphic design. Increase or decrease the letter spacing depending on the situation and try, try again until it looks right, and each letter has the perfect spot of its own. commodo enim craft beer mlkshk aliquip jean shorts ullamco.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot; id=&quot;accordionwithplusExample3&quot;&gt;
            &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#accor_plusExamplecollapse3&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;accor_plusExamplecollapse3&quot;&gt;
                Where does it come from ?
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;accor_plusExamplecollapse3&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;accordionwithplusExample3&quot; data-bs-parent=&quot;#accordionWithplusicon&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
            Spacing depending on the situation and try, try again until it looks right, and each. next level wes anderson artisan four loko farm-to-table craft beer twee. commodo enim craft beer mlkshk aliquip jean shorts ullamco. omo nostrud organic, assumenda labore aesthetic magna delectus. pposites attract, and that’s a fact.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->

                    </div>
                    <!--end row-->

                    <div class="row">
                        <div class="col-xxl-6">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Left Icon Accordions</h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                            <label for="accordion-lefticon-showcode" class="form-label text-muted">Show Code</label>
                                            <input class="form-check-input code-switcher" type="checkbox" id="accordion-lefticon-showcode">
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <p class="text-muted">Use <code>lefticon-accordion</code> class to show the icon on the left side of the accordion.</p>
                                    <div class="live-preview">
                                        <div class="accordion lefticon-accordion custom-accordionwithicon accordion-border-box" id="accordionlefticon">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="accordionlefticonExample1">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accor_lefticonExamplecollapse1" aria-expanded="true" aria-controls="accor_lefticonExamplecollapse1">
                                                        What is User Interface Design?
                                                    </button>
                                                </h2>
                                                <div id="accor_lefticonExamplecollapse1" class="accordion-collapse collapse show" aria-labelledby="accordionlefticonExample1" data-bs-parent="#accordionlefticon">
                                                    <div class="accordion-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua nulla assumenda shoreditch et.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="accordionlefticonExample2">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accor_lefticonExamplecollapse2" aria-expanded="false" aria-controls="accor_lefticonExamplecollapse2">
                                                        What is Digital Marketing?
                                                    </button>
                                                </h2>
                                                <div id="accor_lefticonExamplecollapse2" class="accordion-collapse collapse" aria-labelledby="accordionlefticonExample2" data-bs-parent="#accordionlefticon">
                                                    <div class="accordion-body">
                                                        Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="accordionlefticonExample3">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accor_lefticonExamplecollapse3" aria-expanded="false" aria-controls="accor_lefticonExamplecollapse3">
                                                        Where does it come from ?
                                                    </button>
                                                </h2>
                                                <div id="accor_lefticonExamplecollapse3" class="accordion-collapse collapse" aria-labelledby="accordionlefticonExample3" data-bs-parent="#accordionlefticon">
                                                    <div class="accordion-body">
                                                        Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis aliquam ultrices mauris.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none code-view">
                                        <pre class="language-markup" style="height: 275px;">
<code>&lt;!-- Left Icon Accordions --&gt;
&lt;div class=&quot;accordion lefticon-accordion custom-accordionwithicon accordion-border-box&quot; id=&quot;accordionlefticon&quot;&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot; id=&quot;accordionlefticonExample1&quot;&gt;
            &lt;button class=&quot;accordion-button&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#accor_lefticonExamplecollapse1&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;accor_lefticonExamplecollapse1&quot;&gt;
                What is User Interface Design?
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;accor_lefticonExamplecollapse1&quot; class=&quot;accordion-collapse collapse show&quot; aria-labelledby=&quot;accordionlefticonExample1&quot; data-bs-parent=&quot;#accordionlefticon&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua nulla assumenda shoreditch et.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;accordion-item mt-2&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot; id=&quot;accordionlefticonExample2&quot;&gt;
            &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#accor_lefticonExamplecollapse2&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;accor_lefticonExamplecollapse2&quot;&gt;
                What is Digital Marketing?
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;accor_lefticonExamplecollapse2&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;accordionlefticonExample2&quot; data-bs-parent=&quot;#accordionlefticon&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
                Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;accordion-item mt-2&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot; id=&quot;accordionlefticonExample3&quot;&gt;
            &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#accor_lefticonExamplecollapse3&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;accor_lefticonExamplecollapse3&quot;&gt;
                Where does it come from ?
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;accor_lefticonExamplecollapse3&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;accordionlefticonExample3&quot; data-bs-parent=&quot;#accordionlefticon&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
                Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis aliquam ultrices mauris.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->

                        <div class="col-xxl-6">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Accordions Bordered</h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                            <label for="accordion-bordered-showcode" class="form-label text-muted">Show Code</label>
                                            <input class="form-check-input code-switcher" type="checkbox" id="accordion-bordered-showcode">
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <p class="text-muted">Use <code>custom-accordion-border</code> class to create the border at the accordion.</p>
                                    <div class="live-preview">
                                        <div class="accordion custom-accordionwithicon custom-accordion-border accordion-border-box accordion-success" id="accordionBordered">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="accordionborderedExample1">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accor_borderedExamplecollapse1" aria-expanded="true" aria-controls="accor_borderedExamplecollapse1">
                                                        What is User Interface Design?
                                                    </button>
                                                </h2>
                                                <div id="accor_borderedExamplecollapse1" class="accordion-collapse collapse show" aria-labelledby="accordionborderedExample1" data-bs-parent="#accordionBordered">
                                                    <div class="accordion-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua nulla assumenda shoreditch et.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="accordionborderedExample2">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accor_borderedExamplecollapse2" aria-expanded="false" aria-controls="accor_borderedExamplecollapse2">
                                                        What is Digital Marketing?
                                                    </button>
                                                </h2>
                                                <div id="accor_borderedExamplecollapse2" class="accordion-collapse collapse" aria-labelledby="accordionborderedExample2" data-bs-parent="#accordionBordered">
                                                    <div class="accordion-body">
                                                        Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="accordionborderedExample3">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accor_borderedExamplecollapse3" aria-expanded="false" aria-controls="accor_borderedExamplecollapse3">
                                                        Where does it come from ?
                                                    </button>
                                                </h2>
                                                <div id="accor_borderedExamplecollapse3" class="accordion-collapse collapse" aria-labelledby="accordionborderedExample3" data-bs-parent="#accordionBordered">
                                                    <div class="accordion-body">
                                                        Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis aliquam ultrices mauris.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none code-view">
                                        <pre class="language-markup" style="height: 275px;">
<code>&lt;!-- Accordions Bordered --&gt;
&lt;div class=&quot;accordion custom-accordionwithicon custom-accordion-border accordion-border-box accordion-secondary&quot; id=&quot;accordionBordered&quot;&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot; id=&quot;accordionborderedExample1&quot;&gt;
            &lt;button class=&quot;accordion-button&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#accor_borderedExamplecollapse1&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;accor_borderedExamplecollapse1&quot;&gt;
                What is User Interface Design?
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;accor_borderedExamplecollapse1&quot; class=&quot;accordion-collapse collapse show&quot; aria-labelledby=&quot;accordionborderedExample1&quot; data-bs-parent=&quot;#accordionBordered&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua nulla assumenda shoreditch et.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;accordion-item mt-2&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot; id=&quot;accordionborderedExample2&quot;&gt;
            &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#accor_borderedExamplecollapse2&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;accor_borderedExamplecollapse2&quot;&gt;
                What is Digital Marketing?
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;accor_borderedExamplecollapse2&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;accordionborderedExample2&quot; data-bs-parent=&quot;#accordionBordered&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
                Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;accordion-item mt-2&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot; id=&quot;accordionborderedExample3&quot;&gt;
            &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#accor_borderedExamplecollapse3&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;accor_borderedExamplecollapse3&quot;&gt;
                Where does it come from ?
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;accor_borderedExamplecollapse3&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;accordionborderedExample3&quot; data-bs-parent=&quot;#accordionBordered&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
                Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis aliquam ultrices mauris.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Nesting Accordions</h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                            <label for="accordion-nesting-showcode" class="form-label text-muted">Show Code</label>
                                            <input class="form-check-input code-switcher" type="checkbox" id="accordion-nesting-showcode">
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <p class="text-muted">Use <code>nesting-accordion</code> class to create a nesting accordion.</p>
                                    <div class="live-preview">
                                        <div class="accordion custom-accordionwithicon accordion-border-box" id="accordionnesting">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="accordionnestingExample1">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accor_nestingExamplecollapse1" aria-expanded="true" aria-controls="accor_nestingExamplecollapse1">
                                                        How Do I Add Contacts/Subscribers?
                                                    </button>
                                                </h2>
                                                <div id="accor_nestingExamplecollapse1" class="accordion-collapse collapse show" aria-labelledby="accordionnestingExample1" data-bs-parent="#accordionnesting">
                                                    <div class="accordion-body">
                                                        This opt in method is perfect for those looking to integrate a different software such Shopify or Hubspot with Slicktext. For example, upon cashing out online, a subscriber may submit to have their mobile number to receive marketing messages. The API will pass this information from said software over to Slicktext via API integration.
                                                        <div class="accordion nesting2-accordion custom-accordionwithicon accordion-border-box mt-3" id="accordionnesting2">
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="accordionnesting2Example1">
                                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accor_nesting2Examplecollapse1" aria-expanded="true" aria-controls="accor_nesting2Examplecollapse1">
                                                                        How Do I Search For Contacts?
                                                                    </button>
                                                                </h2>
                                                                <div id="accor_nesting2Examplecollapse1" class="accordion-collapse collapse show" aria-labelledby="accordionnesting2Example1" data-bs-parent="#accordionnesting2">
                                                                    <div class="accordion-body">
                                                                        When you are in need of finding a specific subscriber, you will want to use the help of SlickText's search navigation tool, located under the Contacts tab of your Slicktext account. Once here, you will have options to sort by, filter, and search your contacts.
                                                                        <div class="accordion nesting4-accordion custom-accordionwithicon accordion-border-box mt-3" id="accordionnesting4">
                                                                            <div class="accordion-item">
                                                                                <h2 class="accordion-header" id="accordionnesting4Example2">
                                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accor_nesting4Examplecollapse2" aria-expanded="false" aria-controls="accor_nesting4Examplecollapse2">
                                                                                        How do I reset my digital tide watch ?
                                                                                    </button>
                                                                                </h2>
                                                                                <div id="accor_nesting4Examplecollapse2" class="accordion-collapse collapse" aria-labelledby="accordionnesting4Example2" data-bs-parent="#accordionnesting4">
                                                                                    <div class="accordion-body">
                                                                                        Opting out a subscriber will allow SlickText to maintain the history of the subscriber as it pertains to the textword you are opting them out of. If this user was to text to join again, the initial text they are met with will be a "welcome back" message instead of the auto reply.
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="accordionnesting2Example2">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accor_nesting2Examplecollapse2" aria-expanded="false" aria-controls="accor_nesting2Examplecollapse2">
                                                                        How Do I Delete a Contact From My List?
                                                                    </button>
                                                                </h2>
                                                                <div id="accor_nesting2Examplecollapse2" class="accordion-collapse collapse" aria-labelledby="accordionnesting2Example2" data-bs-parent="#accordionnesting2">
                                                                    <div class="accordion-body">
                                                                        Opting out a subscriber will allow SlickText to maintain the history of the subscriber as it pertains to the textword you are opting them out of. If this user was to text to join again, the initial text they are met with will be a "welcome back" message instead of the auto reply.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="accordionnestingExample2">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accor_nestingExamplecollapse2" aria-expanded="false" aria-controls="accor_nestingExamplecollapse2">
                                                        How Does Personalization Work?
                                                    </button>
                                                </h2>
                                                <div id="accor_nestingExamplecollapse2" class="accordion-collapse collapse" aria-labelledby="accordionnestingExample2" data-bs-parent="#accordionnesting">
                                                    <div class="accordion-body">
                                                        Personalization allows you to provide a personal touch to your outbound text marketing campaigns. SlickText uses merge tags as placeholders that are replaced with contact-specific information when a text message is sent. These merge tags may also be known as personalization fields.
                                                        <div class="accordion nesting3-accordion custom-accordionwithicon accordion-border-box mt-3" id="accordionnesting3">
                                                            <div class="accordion-item mt-2">
                                                                <h2 class="accordion-header" id="accordionnesting3Example2">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accor_nesting3Examplecollapse2" aria-expanded="false" aria-controls="accor_nesting3Examplecollapse2">
                                                                        Howe does temperature impact my watch?
                                                                    </button>
                                                                </h2>
                                                                <div id="accor_nesting3Examplecollapse2" class="accordion-collapse collapse" aria-labelledby="accordionnesting3Example2" data-bs-parent="#accordionnesting3">
                                                                    <div class="accordion-body">
                                                                        Opting out a subscriber will allow SlickText to maintain the history of the subscriber as it pertains to the textword you are opting them out of. If this user was to text to join again, the initial text they are met with will be a "welcome back" message instead of the auto reply.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="accordionnestingExample3">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accor_nestingExamplecollapse3" aria-expanded="false" aria-controls="accor_nestingExamplecollapse3">
                                                        What Happens When I Run Out of Messages?
                                                    </button>
                                                </h2>
                                                <div id="accor_nestingExamplecollapse3" class="accordion-collapse collapse" aria-labelledby="accordionnestingExample3" data-bs-parent="#accordionnesting">
                                                    <div class="accordion-body">
                                                        When you run out of messages, you will not be able to send any outbound campaigns. This would include any scheduled messages, drip campaigns, and birthday messages. However, we will continue to deliver your auto-reply messages to allow your subscriber list to continue to grow.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none code-view">
                                        <pre class="language-markup" style="height: 275px;">
<code>&lt;!-- Nesting Accordions --&gt;
&lt;div class=&quot;accordion nesting-accordion custom-accordionwithicon accordion-border-box&quot; id=&quot;accordionnesting&quot;&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot; id=&quot;accordionnestingExample1&quot;&gt;
            &lt;button class=&quot;accordion-button&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#accor_nestingExamplecollapse1&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;accor_nestingExamplecollapse1&quot;&gt;
                How Do I Add Contacts/Subscribers?
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;accor_nestingExamplecollapse1&quot; class=&quot;accordion-collapse collapse show&quot; aria-labelledby=&quot;accordionnestingExample1&quot; data-bs-parent=&quot;#accordionnesting&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
                This opt in method is perfect for those looking to integrate a different software such Shopify or Hubspot with Slicktext. For example, upon cashing out online, a subscriber may submit to have their mobile number to receive marketing messages. The API will pass this information from said software over to Slicktext via API integration.
                &lt;div class=&quot;accordion nesting2-accordion custom-accordionwithicon accordion-border-box mt-3&quot; id=&quot;accordionnesting2&quot;&gt;
                    &lt;div class=&quot;accordion-item&quot;&gt;
                        &lt;h2 class=&quot;accordion-header&quot; id=&quot;accordionnesting2Example1&quot;&gt;
                            &lt;button class=&quot;accordion-button&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#accor_nesting2Examplecollapse1&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;accor_nesting2Examplecollapse1&quot;&gt;
                                How Do I Search For Contacts?
                            &lt;/button&gt;
                        &lt;/h2&gt;
                        &lt;div id=&quot;accor_nesting2Examplecollapse1&quot; class=&quot;accordion-collapse collapse show&quot; aria-labelledby=&quot;accordionnesting2Example1&quot; data-bs-parent=&quot;#accordionnesting2&quot;&gt;
                            &lt;div class=&quot;accordion-body&quot;&gt;
                                When you are in need of finding a specific subscriber, you will want to use the help of SlickText's search navigation tool, located under the Contacts tab of your Slicktext account. Once here, you will have options to sort by, filter, and search your contacts.
                                &lt;div class=&quot;accordion nesting4-accordion custom-accordionwithicon accordion-border-box mt-3&quot; id=&quot;accordionnesting4&quot;&gt;
                                    &lt;div class=&quot;accordion-item&quot;&gt;
                                        &lt;h2 class=&quot;accordion-header&quot; id=&quot;accordionnesting4Example2&quot;&gt;
                                            &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#accor_nesting4Examplecollapse2&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;accor_nesting4Examplecollapse2&quot;&gt;
                                                How do I reset my digital tide watch ?
                                            &lt;/button&gt;
                                        &lt;/h2&gt;
                                        &lt;div id=&quot;accor_nesting4Examplecollapse2&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;accordionnesting4Example2&quot; data-bs-parent=&quot;#accordionnesting4&quot;&gt;
                                            &lt;div class=&quot;accordion-body&quot;&gt;
                                                Opting out a subscriber will allow SlickText to maintain the history of the subscriber as it pertains to the textword you are opting them out of. If this user was to text to join again, the initial text they are met with will be a &quot;welcome back&quot; message instead of the auto reply.
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;accordion-item&quot;&gt;
                        &lt;h2 class=&quot;accordion-header&quot; id=&quot;accordionnesting2Example2&quot;&gt;
                            &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#accor_nesting2Examplecollapse2&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;accor_nesting2Examplecollapse2&quot;&gt;
                                How Do I Delete a Contact From My List?
                            &lt;/button&gt;
                        &lt;/h2&gt;
                        &lt;div id=&quot;accor_nesting2Examplecollapse2&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;accordionnesting2Example2&quot; data-bs-parent=&quot;#accordionnesting2&quot;&gt;
                            &lt;div class=&quot;accordion-body&quot;&gt;
                                Opting out a subscriber will allow SlickText to maintain the history of the subscriber as it pertains to the textword you are opting them out of. If this user was to text to join again, the initial text they are met with will be a &quot;welcome back&quot; message instead of the auto reply.
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot; id=&quot;accordionnestingExample2&quot;&gt;
            &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#accor_nestingExamplecollapse2&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;accor_nestingExamplecollapse2&quot;&gt;
                How Does Personalization Work?
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;accor_nestingExamplecollapse2&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;accordionnestingExample2&quot; data-bs-parent=&quot;#accordionnesting&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
                Personalization allows you to provide a personal touch to your outbound text marketing campaigns. SlickText uses merge tags as placeholders that are replaced with contact-specific information when a text message is sent. These merge tags may also be known as personalization fields.
                &lt;div class=&quot;accordion nesting3-accordion custom-accordionwithicon accordion-border-box mt-3&quot; id=&quot;accordionnesting3&quot;&gt;
                    &lt;div class=&quot;accordion-item mt-2&quot;&gt;
                        &lt;h2 class=&quot;accordion-header&quot; id=&quot;accordionnesting3Example2&quot;&gt;
                            &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#accor_nesting3Examplecollapse2&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;accor_nesting3Examplecollapse2&quot;&gt;
                                Howe does temperature impact my watch?
                            &lt;/button&gt;
                        &lt;/h2&gt;
                        &lt;div id=&quot;accor_nesting3Examplecollapse2&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;accordionnesting3Example2&quot; data-bs-parent=&quot;#accordionnesting3&quot;&gt;
                            &lt;div class=&quot;accordion-body&quot;&gt;
                                Opting out a subscriber will allow SlickText to maintain the history of the subscriber as it pertains to the textword you are opting them out of. If this user was to text to join again, the initial text they are met with will be a &quot;welcome back&quot; message instead of the auto reply.
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot; id=&quot;accordionnestingExample3&quot;&gt;
            &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#accor_nestingExamplecollapse3&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;accor_nestingExamplecollapse3&quot;&gt;
                What Happens When I Run Out of Messages?
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;accor_nestingExamplecollapse3&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;accordionnestingExample3&quot; data-bs-parent=&quot;#accordionnesting&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
                When you run out of messages, you will not be able to send any outbound campaigns. This would include any scheduled messages, drip campaigns, and birthday messages. However, we will continue to deliver your auto-reply messages to allow your subscriber list to continue to grow.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Accordions Fill Colored</h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                            <label for="accordion-fill-color-showcode" class="form-label text-muted">Show Code</label>
                                            <input class="form-check-input code-switcher" type="checkbox" id="accordion-fill-color-showcode">
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <p class="text-muted">Use <code>accordion-fill-</code> class with modifier class to the color accordion.</p>
                                    <div class="live-preview">
                                        <div class="row">
                                            <div class="col-xxl-6">
                                                <div class="accordion custom-accordionwithicon accordion-fill-primary" id="accordionFill">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="accordionFillExample1">
                                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accor_fill1" aria-expanded="true" aria-controls="accor_fill1">
                                                                What are webhooks?
                                                            </button>
                                                        </h2>
                                                        <div id="accor_fill1" class="accordion-collapse collapse show" aria-labelledby="accordionFillExample1" data-bs-parent="#accordionFill">
                                                            <div class="accordion-body">
                                                                Webhooks allow you to gather real time data on key interactions that happen with your Slick Text account. Simply provide us with a url where you'd like the data to be sent, choose which events you'd like to be informed of, and click save.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="accordionFillExample2">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accor_fill2" aria-expanded="false" aria-controls="accor_fill2">
                                                                Where can I find my Textword ID?
                                                            </button>
                                                        </h2>
                                                        <div id="accor_fill2" class="accordion-collapse collapse" aria-labelledby="accordionFillExample2" data-bs-parent="#accordionFill">
                                                            <div class="accordion-body">
                                                                Head over to the Textwords page. Click options on the right hand side, and then click Settings. This will redirect you to your Textword Setting page. Now, go check your url, and the textword ID will be the number after "word=". Too much or too little spacing, as in the example below.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="accordionFillExample3">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accor_fill3" aria-expanded="false" aria-controls="accor_fill3">
                                                                Where is your API documentation?
                                                            </button>
                                                        </h2>
                                                        <div id="accor_fill3" class="accordion-collapse collapse" aria-labelledby="accordionFillExample3" data-bs-parent="#accordionFill">
                                                            <div class="accordion-body">
                                                                You always want to make sure that your fonts work well together and try to limit the number of fonts you use to three or less. Experiment and play around with the fonts that you already have in the software you’re working with reputable font websites.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-6">
                                                <div class="accordion custom-accordionwithicon accordion-flush accordion-fill-secondary" id="accordionFill2">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="accordionFill2Example1">
                                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accor_fill21" aria-expanded="true" aria-controls="accor_fill21">
                                                                How Does Age Verification Work?
                                                            </button>
                                                        </h2>
                                                        <div id="accor_fill21" class="accordion-collapse collapse show" aria-labelledby="accordionFill2Example1" data-bs-parent="#accordionFill2">
                                                            <div class="accordion-body">
                                                                Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="accordionFill2Example2">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accor_fill22" aria-expanded="false" aria-controls="accor_fill22">
                                                                What Kind of List Growth Should I Expect?
                                                            </button>
                                                        </h2>
                                                        <div id="accor_fill22" class="accordion-collapse collapse" aria-labelledby="accordionFill2Example2" data-bs-parent="#accordionFill2">
                                                            <div class="accordion-body">
                                                                Consistency is the one thing that can take all of the different elements in your design, and tie them all together and make them work. In an awareness campaign, it is vital for people to begin put 2 and 2 together and begin to recognize your cause. Consistency piques people’s interest.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="accordionFill2Example3">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accor_fill23" aria-expanded="false" aria-controls="accor_fill23">
                                                                How Do I Delete a Contact From My List?
                                                            </button>
                                                        </h2>
                                                        <div id="accor_fill23" class="accordion-collapse collapse" aria-labelledby="accordionFill2Example3" data-bs-parent="#accordionFill2">
                                                            <div class="accordion-body">
                                                                Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis aliquam ultrices mauris.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <div class="d-none code-view">
                                        <pre class="language-markup" style="height: 275px;">
<code>&lt;!-- Accordions Fill Colored --&gt;
&lt;div class=&quot;accordion custom-accordionwithicon accordion-fill-primary&quot; id=&quot;accordionFill&quot;&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot; id=&quot;accordionFillExample1&quot;&gt;
            &lt;button class=&quot;accordion-button&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#accor_fill1&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;accor_fill1&quot;&gt;
                What are webhooks?
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;accor_fill1&quot; class=&quot;accordion-collapse collapse show&quot; aria-labelledby=&quot;accordionFillExample1&quot; data-bs-parent=&quot;#accordionFill&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
                Webhooks allow you to gather real time data on key interactions that happen with your Slick Text account. Simply provide us with a url where you'd like the data to be sent, choose which events you'd like to be informed of, and click save.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot; id=&quot;accordionFillExample2&quot;&gt;
            &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#accor_fill2&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;accor_fill2&quot;&gt;
                Where can I find my Textword ID?
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;accor_fill2&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;accordionFillExample2&quot; data-bs-parent=&quot;#accordionFill&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
                Head over to the Textwords page. Click options on the right hand side, and then click Settings. This will redirect you to your Textword Setting page. Now, go check your url, and the textword ID will be the number after &quot;word=&quot;. Too much or too little spacing, as in the example below.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot; id=&quot;accordionFillExample3&quot;&gt;
            &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#accor_fill3&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;accor_fill3&quot;&gt;
                Where is your API documentation?
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;accor_fill3&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;accordionFillExample3&quot; data-bs-parent=&quot;#accordionFill&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
                You always want to make sure that your fonts work well together and try to limit the number of fonts you use to three or less. Experiment and play around with the fonts that you already have in the software you&rsquo;re working with reputable font websites.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code>

<code>&lt;div class=&quot;accordion custom-accordionwithicon accordion-flush accordion-fill-secondary&quot; id=&quot;accordionFill2&quot;&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot; id=&quot;accordionFill2Example1&quot;&gt;
            &lt;button class=&quot;accordion-button&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#accor_fill21&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;accor_fill21&quot;&gt;
                How Does Age Verification Work?
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;accor_fill21&quot; class=&quot;accordion-collapse collapse show&quot; aria-labelledby=&quot;accordionFill2Example1&quot; data-bs-parent=&quot;#accordionFill2&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
                Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot; id=&quot;accordionFill2Example2&quot;&gt;
            &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#accor_fill22&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;accor_fill22&quot;&gt;
                What Kind of List Growth Should I Expect?
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;accor_fill22&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;accordionFill2Example2&quot; data-bs-parent=&quot;#accordionFill2&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
                Consistency is the one thing that can take all of the different elements in your design, and tie them all together and make them work. In an awareness campaign, it is vital for people to begin put 2 and 2 together and begin to recognize your cause. Consistency piques people&rsquo;s interest.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot; id=&quot;accordionFill2Example3&quot;&gt;
            &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#accor_fill23&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;accor_fill23&quot;&gt;
                How Do I Delete a Contact From My List?
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;accor_fill23&quot; class=&quot;accordion-collapse collapse&quot; aria-labelledby=&quot;accordionFill2Example3&quot; data-bs-parent=&quot;#accordionFill2&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
                Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis aliquam ultrices mauris.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <div class="row">
                        <div class="col-xxl-6">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Collapse Example</h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                            <label for="collapse-showcode" class="form-label text-muted">Show Code</label>
                                            <input class="form-check-input code-switcher" type="checkbox" id="collapse-showcode">
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <p class="text-muted">
                                        You can use a link with the <code>href</code> attribute, or a button with the <code>data-bs-target</code> attribute. In both cases, the <code>data-bs-toggle="collapse"</code> is required.
                                    </p>
                                    <div class="live-preview">
                                        <div class="hstack gap-2 flex-wrap mb-3">
                                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true" aria-controls="collapseExample">
                                                Link with href
                                            </a>
                                            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                                Button with data-bs-target
                                            </button>
                                        </div>
                                        <div class="collapse show" id="collapseExample">
                                            <div class="card mb-0">
                                                <div class="card-body">
                                                    When designing, the goal is to draw someone’s attention and portray to them what you’re trying to say. You can make a big statement by using little tricks, like this one. Use contrasting fonts. you can use a bold sanserif font with a cursive.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none code-view">
                                        <pre class="language-markup" style="height: 275px;">
<code>&lt;!-- Collapse Example --&gt;
&lt;div class=&quot;hstack gap-2 flex-wrap mb-3&quot;&gt;
    &lt;a class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;collapse&quot; href=&quot;#collapseExample&quot; role=&quot;button&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;collapseExample&quot;&gt;
        Link with href
    &lt;/a&gt;
    &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseExample&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseExample&quot;&gt;
        Button with data-bs-target
    &lt;/button&gt;
&lt;/div&gt;

&lt;div class=&quot;collapse show&quot; id=&quot;collapseExample&quot;&gt;
    &lt;div class=&quot;card mb-0&quot;&gt;
        &lt;div class=&quot;card-body&quot;&gt;
            When designing, the goal is to draw someone’s attention and portray to them what you’re trying to say. You can make a big statement by using little tricks, like this one. Use contrasting fonts. you can use a bold sanserif font with a cursive.
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->
                        <div class="col-xxl-6">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Horizontal Collapse</h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                            <label for="horizontal-collapse-showcode" class="form-label text-muted">Show Code</label>
                                            <input class="form-check-input code-switcher" type="checkbox" id="horizontal-collapse-showcode">
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <p class="text-muted">Use the <code>collapse-horizontal</code> class to transition the <code>width</code> instead of <code>height</code> and set a <code>width</code> on the immediate child element for horizontal collapse.</p>
                                    <div class="live-preview">
                                        <div class="mb-3">
                                            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="true" aria-controls="collapseWidthExample">
                                                Toggle Width Collapse
                                            </button>
                                        </div>
                                        <div>
                                            <div class="collapse collapse-horizontal show" id="collapseWidthExample">
                                                <div class="card card-body mb-0" style="width: 300px;">
                                                    This is some placeholder content for a horizontal collapse. It's hidden by default and shown when triggered.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none code-view">
                                        <pre class="language-markup" style="height: 275px;">
<code>&lt;!-- Horizontal Collapse --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
    &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseWidthExample&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;collapseWidthExample&quot;&gt;
        Toggle width collapse
    &lt;/button&gt;
&lt;/div&gt;

&lt;div&gt;
    &lt;div class=&quot;collapse collapse-horizontal show&quot; id=&quot;collapseWidthExample&quot;&gt;
        &lt;div class=&quot;card card-body mb-0&quot; style=&quot;width: 300px;&quot;&gt;
            This is some placeholder content for a horizontal collapse. It's hidden by default and shown when triggered.
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <div class="row">
                        <div class="col-xxl-6">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Collapse with Icon</h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                            <label for="collapse-icon-showcode" class="form-label text-muted">Show Code</label>
                                            <input class="form-check-input code-switcher" type="checkbox" id="collapse-icon-showcode">
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <p class="text-muted">
                                        Here is the example of collapse in which the icon is wrapped within the button collapse toggle.
                                    </p>
                                    <div class="live-preview">
                                        <div class="hstack gap-3 mb-3">
                                            <a class="link-success" data-bs-toggle="collapse" href="#collapseWithicon" role="button" aria-expanded="true" aria-controls="collapseWithicon">
                                                <i class="ri-arrow-down-circle-line fs-16"></i>
                                            </a>
                                            <button class="btn btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWithicon2" aria-expanded="false" aria-controls="collapseWithicon2">
                                                <i class="ri-filter-2-line"></i>
                                            </button>
                                        </div>
                                        <div class="collapse show" id="collapseWithicon">
                                            <div class="card mb-0">
                                                <div class="card-body">
                                                    If you enter text including symbols in the search criteria, the search criteria is interpreted exactly as you entered it, and the search is case sensitive as a case insensitive search that contains certain text but does also provide a lot of search criteria options.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="collapse" id="collapseWithicon2">
                                            <div class="card mb-0 mt-3">
                                                <div class="card-body">
                                                    When you want to search for data, such as customer names, addresses, or product groups, you enter criteria. In search criteria you can use all the numbers and letters that you normally use in the specific field. In addition, you can use special symbols to further filter the results.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none code-view">
                                        <pre class="language-markup" style="height: 275px;">
<code>&lt;!-- Collapse with Icon --&gt;
&lt;div class=&quot;hstack gap-3 mb-3&quot;&gt;
    &lt;a class=&quot;link-success&quot; data-bs-toggle=&quot;collapse&quot; href=&quot;#collapseWithicon&quot; role=&quot;button&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;collapseWithicon&quot;&gt;
        &lt;i class=&quot;ri-arrow-down-circle-line fs-16&quot;&gt;&lt;/i&gt;
    &lt;/a&gt;
    &lt;button class=&quot;btn btn-light&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseWithicon2&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseWithicon2&quot;&gt;
        &lt;i class=&quot;ri-filter-2-line&quot;&gt;&lt;/i&gt;
    &lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;collapse show&quot; id=&quot;collapseWithicon&quot;&gt;
    &lt;div class=&quot;card mb-0&quot;&gt;
        &lt;div class=&quot;card-body&quot;&gt;
            If you enter text including symbols in the search criteria, the search criteria is interpreted exactly as you entered it, and the search is case sensitive as a case insensitive search that contains certain text but does also provide a lot of search criteria options.
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;collapse&quot; id=&quot;collapseWithicon2&quot;&gt;
    &lt;div class=&quot;card mb-0&quot;&gt;
        &lt;div class=&quot;card-body&quot;&gt;
            When you want to search for data, such as customer names, addresses, or product groups, you enter criteria. In search criteria you can use all the numbers and letters that you normally use in the specific field. In addition, you can use special symbols to further filter the results.
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->
                        <div class="col-xxl-6">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Inline & Block Element Collapse</h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                            <label for="inline-block-collapse-showcode" class="form-label text-muted">Show Code</label>
                                            <input class="form-check-input code-switcher" type="checkbox" id="inline-block-collapse-showcode">
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <p class="text-muted">Inline element collapse takes all horizontal space hence you can activate the collapse within by clicking on
                                        full-width horizontal space. Block element collapse can be activated by clicking on collapse toggle only.</p>
                                    <div class="live-preview">
                                        <div class="mb-3">
                                            <h6 class="text-primary" data-bs-toggle="collapse" data-bs-target="#collapseblock" aria-expanded="true" aria-controls="collapseblock">
                                                <code>&lt;h6&gt;</code> Inline Element Collapse
                                            </h6>
                                            <span role="button" class="text-primary fw-medium" data-bs-toggle="collapse" data-bs-target="#collapseinline" aria-expanded="true" aria-controls="collapseinline">
                                                <code>&lt;span&gt;</code> Block Element Collapse
                                            </span>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col-auto">
                                                <div class="collapse collapse-horizontal show" id="collapseblock">
                                                    <div class="card card-body mb-0" style="width: 300px;">
                                                        A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring heart.
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-auto">
                                                <div class="collapse collapse-horizontal show" id="collapseinline">
                                                    <div class="card card-body mb-0" style="width: 300px;">
                                                        When you have created a new account schedule and set up the rows, you must set up columns.
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <div class="d-none code-view">
                                        <pre class="language-markup" style="height: 275px;">
<code>&lt;!-- Inline & Block Element Collapse --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
    &lt;h6 class=&quot;text-primary&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseblock&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;collapseblock&quot;&gt;
        &lt;h6&gt; Inline Element Collapse
    &lt;/h6&gt;
    &lt;span class=&quot;text-primary fw-medium&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseinline&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;collapseinline&quot;&gt;
        &lt;span&gt; Block Element Collapse
    &lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;col-lg-6&quot;&gt;
        &lt;div class=&quot;collapse collapse-horizontal show&quot; id=&quot;collapseblock&quot;&gt;
            &lt;div class=&quot;card card-body mb-0&quot; style=&quot;width: 300px;&quot;&gt;
                A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring heart.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-lg-6&quot;&gt;
        &lt;div class=&quot;collapse collapse-horizontal show&quot; id=&quot;collapseinline&quot;&gt;
            &lt;div class=&quot;card card-body mb-0&quot; style=&quot;width: 300px;&quot;&gt;
                When you have created a new account schedule and set up the rows, you must set up columns.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Multiple Targets Collapse</h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                            <label for="multiple-collapse-showcode" class="form-label text-muted">Show Code</label>
                                            <input class="form-check-input code-switcher" type="checkbox" id="multiple-collapse-showcode">
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <p class="text-muted">
                                        A <code>&lt;button&gt;</code> or <code>&lt;a&gt;</code> can show and hide multiple elements by referencing them with a selector in its href or data-bs-target attribute. Multiple <code>&lt;button&gt;</code> or <code>&lt;a&gt;</code> can
                                        show and hide an element if they each reference it with their href or data-bs-target attribute.
                                    </p>
                                    <div class="live-preview">
                                        <div class="hstack gap-2 flex-wrap mb-3">
                                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle First Element</a>
                                            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle Second Element</button>
                                            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle Both Elements</button>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="collapse multi-collapse show" id="multiCollapseExample1">
                                                    <div class="card card-body mb-0">
                                                        Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="collapse multi-collapse show" id="multiCollapseExample2">
                                                    <div class="card card-body mb-0">
                                                        Some placeholder content for the second collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none code-view">
                                        <pre class="language-markup" style="height: 275px;">
<code>&lt;!-- Multiple Targets Example --&gt;
&lt;div class=&quot;hstack gap-2 flex-wrap mb-3&quot;&gt;
    &lt;a class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;collapse&quot; href=&quot;#multiCollapseExample1&quot; role=&quot;button&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;multiCollapseExample1&quot;&gt;Toggle first element&lt;/a&gt;
    &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#multiCollapseExample2&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;multiCollapseExample2&quot;&gt;Toggle second element&lt;/button&gt;
    &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;.multi-collapse&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;multiCollapseExample1 multiCollapseExample2&quot;&gt;Toggle both elements&lt;/button&gt;
&lt;/div&gt;

&lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;col&quot;&gt;
        &lt;div class=&quot;collapse multi-collapse show&quot; id=&quot;multiCollapseExample1&quot;&gt;
            &lt;div class=&quot;card card-body mb-0&quot;&gt;
                Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col&quot;&gt;
        &lt;div class=&quot;collapse multi-collapse show&quot; id=&quot;multiCollapseExample2&quot;&gt;
            &lt;div class=&quot;card card-body mb-0&quot;&gt;
                Some placeholder content for the second collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © Velzon.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <div class="customizer-setting d-none d-md-block">
        <div class="btn-primary rounded-pill shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
            <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
        </div>
    </div>

    <!-- Theme Settings -->
    <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-settings-offcanvas">
        <div class="d-flex align-items-center bg-primary bg-gradient p-3 offcanvas-header">
            <h5 class="m-0 me-2 text-white">Theme Customizer</h5>

            <button type="button" class="btn-close btn-close-white ms-auto" id="customizerclose-btn" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-0">
            <div data-simplebar class="h-100">
                <div class="p-4">
                    <h6 class="mb-0 fw-semibold text-uppercase">Layout</h6>
                    <p class="text-muted">Choose your layout</p>

                    <div class="row gy-3">
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input id="customizer-layout01" name="data-layout" type="radio" value="vertical" class="form-check-input">
                                <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout01">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Vertical</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input id="customizer-layout02" name="data-layout" type="radio" value="horizontal" class="form-check-input">
                                <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout02">
                                    <span class="d-flex h-100 flex-column gap-1">
                                        <span class="bg-light d-flex p-1 gap-1 align-items-center">
                                            <span class="d-block p-1 bg-primary-subtle rounded me-1"></span>
                                            <span class="d-block p-1 pb-0 px-2 bg-primary-subtle ms-auto"></span>
                                            <span class="d-block p-1 pb-0 px-2 bg-primary-subtle"></span>
                                        </span>
                                        <span class="bg-light d-block p-1"></span>
                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Horizontal</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input id="customizer-layout03" name="data-layout" type="radio" value="twocolumn" class="form-check-input">
                                <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout03">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1">
                                                <span class="d-block p-1 bg-primary-subtle mb-2"></span>
                                                <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Two Column</h5>
                        </div>
                        <!-- end col -->

                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input id="customizer-layout04" name="data-layout" type="radio" value="semibox" class="form-check-input">
                                <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout04">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0 p-1">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column pt-1 pe-2">
                                                <span class="bg-light d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Semi Box</h5>
                        </div>
                        <!-- end col -->
                    </div>

                    <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Color Scheme</h6>
                    <p class="text-muted">Choose Light or Dark Scheme.</p>

                    <div class="colorscheme-cardradio">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-mode-light" value="light">
                                    <label class="form-check-label p-0 avatar-md w-100" for="layout-mode-light">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Light</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check card-radio dark">
                                    <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-mode-dark" value="dark">
                                    <label class="form-check-label p-0 avatar-md w-100 bg-dark" for="layout-mode-dark">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-white bg-opacity-10 d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-white bg-opacity-10 rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-white bg-opacity-10 d-block p-1"></span>
                                                    <span class="bg-white bg-opacity-10 d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Dark</h5>
                            </div>
                        </div>
                    </div>

                    <div id="sidebar-visibility">
                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Sidebar Visibility</h6>
                        <p class="text-muted">Choose show or Hidden sidebar.</p>
                
                        <div class="row">
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-visibility" id="sidebar-visibility-show" value="show">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-visibility-show">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0 p-1">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column pt-1 pe-2">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Show</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-visibility" id="sidebar-visibility-hidden" value="hidden">
                                    <label class="form-check-label p-0 avatar-md w-100 px-2" for="sidebar-visibility-hidden">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column pt-1 px-2">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Hidden</h5>
                            </div>
                        </div>
                    </div>

                    <div id="layout-width">
                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Layout Width</h6>
                        <p class="text-muted">Choose Fluid or Boxed layout.</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-fluid" value="fluid">
                                    <label class="form-check-label p-0 avatar-md w-100" for="layout-width-fluid">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Fluid</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-boxed" value="boxed">
                                    <label class="form-check-label p-0 avatar-md w-100 px-2" for="layout-width-boxed">
                                        <span class="d-flex gap-1 h-100 border-start border-end">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Boxed</h5>
                            </div>
                        </div>
                    </div>

                    <div id="layout-position">
                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Layout Position</h6>
                        <p class="text-muted">Choose Fixed or Scrollable Layout Position.</p>

                        <div class="btn-group radio" role="group">
                            <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed" value="fixed">
                            <label class="btn btn-light w-sm" for="layout-position-fixed">Fixed</label>

                            <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-scrollable" value="scrollable">
                            <label class="btn btn-light w-sm ms-0" for="layout-position-scrollable">Scrollable</label>
                        </div>
                    </div>
                    <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Topbar Color</h6>
                    <p class="text-muted">Choose Light or Dark Topbar Color.</p>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-light" value="light">
                                <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-light">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Light</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-dark" value="dark">
                                <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-dark">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-primary d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Dark</h5>
                        </div>
                    </div>

                    <div id="sidebar-size">
                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Sidebar Size</h6>
                        <p class="text-muted">Choose a size of Sidebar.</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-default" value="lg">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-default">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Default</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-compact" value="md">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-compact">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Compact</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-small" value="sm">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-small">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1">
                                                    <span class="d-block p-1 bg-primary-subtle mb-2"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Small (Icon View)</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-small-hover" value="sm-hover">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-small-hover">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1">
                                                    <span class="d-block p-1 bg-primary-subtle mb-2"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Small Hover View</h5>
                            </div>
                        </div>
                    </div>

                    <div id="sidebar-view">
                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Sidebar View</h6>
                        <p class="text-muted">Choose Default or Detached Sidebar view.</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-default" value="default">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-view-default">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Default</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-detached" value="detached">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-view-detached">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-flex p-1 gap-1 align-items-center px-2">
                                                <span class="d-block p-1 bg-primary-subtle rounded me-1"></span>
                                                <span class="d-block p-1 pb-0 px-2 bg-primary-subtle ms-auto"></span>
                                                <span class="d-block p-1 pb-0 px-2 bg-primary-subtle"></span>
                                            </span>
                                            <span class="d-flex gap-1 h-100 p-1 px-2">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="bg-light d-block p-1 mt-auto px-2"></span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Detached</h5>
                            </div>
                        </div>
                    </div>
                    <div id="sidebar-color">
                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Sidebar Color</h6>
                        <p class="text-muted">Choose a color of Sidebar.</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show">
                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-light" value="light">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-color-light">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-white border-end d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Light</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show">
                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-dark" value="dark">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-color-dark">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-primary d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-white bg-opacity-10 rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Dark</h5>
                            </div>
                            <div class="col-4">
                                <button class="btn btn-link avatar-md w-100 p-0 overflow-hidden border collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient" aria-expanded="false" aria-controls="collapseBgGradient">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-vertical-gradient d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 bg-white bg-opacity-10 rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </button>
                                <h5 class="fs-13 text-center mt-2">Gradient</h5>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="collapse" id="collapseBgGradient">
                            <div class="d-flex gap-2 flex-wrap img-switch p-2 px-3 bg-light rounded">

                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient" value="gradient">
                                    <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient">
                                        <span class="avatar-title rounded-circle bg-vertical-gradient"></span>
                                    </label>
                                </div>
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-2" value="gradient-2">
                                    <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-2">
                                        <span class="avatar-title rounded-circle bg-vertical-gradient-2"></span>
                                    </label>
                                </div>
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-3" value="gradient-3">
                                    <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-3">
                                        <span class="avatar-title rounded-circle bg-vertical-gradient-3"></span>
                                    </label>
                                </div>
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-4" value="gradient-4">
                                    <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-4">
                                        <span class="avatar-title rounded-circle bg-vertical-gradient-4"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="sidebar-img">
                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Sidebar Images</h6>
                        <p class="text-muted">Choose a image of Sidebar.</p>

                        <div class="d-flex gap-2 flex-wrap img-switch">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-none" value="none">
                                <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-none">
                                    <span class="avatar-md w-auto bg-light d-flex align-items-center justify-content-center">
                                        <i class="ri-close-fill fs-20"></i>
                                    </span>
                                </label>
                            </div>

                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-01" value="img-1">
                                <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-01">
                                    <img src="assets/images/sidebar/img-1.jpg" alt="" class="avatar-md w-auto object-fit-cover">
                                </label>
                            </div>	

                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-02" value="img-2">
                                <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-02">
                                    <img src="assets/images/sidebar/img-2.jpg" alt="" class="avatar-md w-auto object-fit-cover">
                                </label>
                            </div>
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-03" value="img-3">
                                <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-03">
                                    <img src="assets/images/sidebar/img-3.jpg" alt="" class="avatar-md w-auto object-fit-cover">
                                </label>
                            </div>
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-04" value="img-4">
                                <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-04">
                                    <img src="assets/images/sidebar/img-4.jpg" alt="" class="avatar-md w-auto object-fit-cover">
                                </label>
                            </div>
                        </div>
                    </div>

                    <div id="preloader-menu">
                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Preloader</h6>
                        <p class="text-muted">Choose a preloader.</p>
                    
                        <div class="row">
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-preloader" id="preloader-view-custom" value="enable">
                                    <label class="form-check-label p-0 avatar-md w-100" for="preloader-view-custom">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                        <!-- <div id="preloader"> -->
                                        <div id="status" class="d-flex align-items-center justify-content-center">
                                            <div class="spinner-border text-primary avatar-xxs m-auto" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Enable</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-preloader" id="preloader-view-none" value="disable">
                                    <label class="form-check-label p-0 avatar-md w-100" for="preloader-view-none">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Disable</h5>
                            </div>
                        </div>
                    
                    </div>
                    <!-- end preloader-menu -->

                </div>
            </div>

        </div>
        <div class="offcanvas-footer border-top p-3 text-center">
            <div class="row">
                <div class="col-6">
                    <button type="button" class="btn btn-light w-100" id="reset-layout">Reset</button>
                </div>
                <div class="col-6">
                    <a href="https://1.envato.market/velzon-admin" target="_blank" class="btn btn-primary w-100">Buy Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!-- prismjs plugin -->
    <script src="assets/libs/prismjs/prism.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>

</body>


<!-- Mirrored from themesbrand.com/velzon/html/minimal/ui-accordions.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Nov 2023 23:29:55 GMT -->
</html>