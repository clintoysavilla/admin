<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <!-- Title and Favicon -->
    <title>Curva National High School</title>
    <link rel="icon" href="images/curva_logo.png" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>

    <head>

    <body>
        <!-- Layout wrapper -->
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">
                <!-- Menu -->
                <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                    <div class="app-brand demo">
                        <a href="/" class="app-brand-link">
                            <img src="../images/curva_logo.png" alt class="w-px-40 h-auto rounded-circle" />
                            <span class="demo menu-text fw-bolder ms-2">Curva NHS</span>
                        </a>

                        <a href="javascript:void(0);"
                            class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                            <i class="bx bx-chevron-left bx-sm align-middle"></i>
                        </a>
                    </div>

                    <div class="menu-inner-shadow"></div>

                    <ul class="menu-inner py-1">
                        <!-- Dashboard -->
                        <li class="menu-item active">
                            <a href="" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                                <div data-i18n="Analytics">Dashboard</div>
                            </a>
                        </li>

                        <!-- Layouts -->
                        <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                                <i class="menu-icon tf-icons bx bx-layout"></i>
                                <div data-i18n="Layouts">Layouts</div>
                            </a>

                            <ul class="menu-sub">
                                <li class="menu-item">
                                    <a href="layouts-without-menu.html" class="menu-link">
                                        <div data-i18n="Without menu">Without menu</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="layouts-without-navbar.html" class="menu-link">
                                        <div data-i18n="Without navbar">Without navbar</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="layouts-container.html" class="menu-link">
                                        <div data-i18n="Container">Container</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="layouts-fluid.html" class="menu-link">
                                        <div data-i18n="Fluid">Fluid</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="layouts-blank.html" class="menu-link">
                                        <div data-i18n="Blank">Blank</div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-header small text-uppercase">
                            <span class="menu-header-text">Documents</span>
                        </li>
                        <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                                <div data-i18n="Account Settings">Request a Document</div>
                            </a>
                            <ul class="menu-sub">
                                <li class="menu-item">
                                    <a href="" class="menu-link">
                                        <div data-i18n="Account">Document 1</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="" class="menu-link">
                                        <div data-i18n="Notifications">Document 2</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="" class="menu-link">
                                        <div data-i18n="Connections">Document 3</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                                <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                                <div data-i18n="Authentications">Authentications</div>
                            </a>
                            <ul class="menu-sub">
                                <li class="menu-item">
                                    <a href="auth-login-basic.html" class="menu-link" target="_blank">
                                        <div data-i18n="Basic">Login</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="auth-register-basic.html" class="menu-link" target="_blank">
                                        <div data-i18n="Basic">Register</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="auth-forgot-password-basic.html" class="menu-link" target="_blank">
                                        <div data-i18n="Basic">Forgot Password</div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Components -->
                        <li class="menu-header small text-uppercase"><span class="menu-header-text">Components</span>
                        </li>
                        <!-- Cards -->
                        <li class="menu-item">
                            <a href="cards-basic.html" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-collection"></i>
                                <div data-i18n="Basic">Cards</div>
                            </a>
                        </li>
                        <!-- User interface -->
                        <li class="menu-item">
                            <a href="javascript:void(0)" class="menu-link menu-toggle">
                                <i class="menu-icon tf-icons bx bx-box"></i>
                                <div data-i18n="User interface">User interface</div>
                            </a>
                            <ul class="menu-sub">
                                <li class="menu-item">
                                    <a href="ui-accordion.html" class="menu-link">
                                        <div data-i18n="Accordion">Accordion</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-alerts.html" class="menu-link">
                                        <div data-i18n="Alerts">Alerts</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-badges.html" class="menu-link">
                                        <div data-i18n="Badges">Badges</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-buttons.html" class="menu-link">
                                        <div data-i18n="Buttons">Buttons</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-carousel.html" class="menu-link">
                                        <div data-i18n="Carousel">Carousel</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-collapse.html" class="menu-link">
                                        <div data-i18n="Collapse">Collapse</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-dropdowns.html" class="menu-link">
                                        <div data-i18n="Dropdowns">Dropdowns</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-footer.html" class="menu-link">
                                        <div data-i18n="Footer">Footer</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-list-groups.html" class="menu-link">
                                        <div data-i18n="List Groups">List groups</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-modals.html" class="menu-link">
                                        <div data-i18n="Modals">Modals</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-navbar.html" class="menu-link">
                                        <div data-i18n="Navbar">Navbar</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-offcanvas.html" class="menu-link">
                                        <div data-i18n="Offcanvas">Offcanvas</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-pagination-breadcrumbs.html" class="menu-link">
                                        <div data-i18n="Pagination &amp; Breadcrumbs">Pagination &amp; Breadcrumbs
                                        </div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-progress.html" class="menu-link">
                                        <div data-i18n="Progress">Progress</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-spinners.html" class="menu-link">
                                        <div data-i18n="Spinners">Spinners</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-tabs-pills.html" class="menu-link">
                                        <div data-i18n="Tabs &amp; Pills">Tabs &amp; Pills</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-toasts.html" class="menu-link">
                                        <div data-i18n="Toasts">Toasts</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-tooltips-popovers.html" class="menu-link">
                                        <div data-i18n="Tooltips & Popovers">Tooltips &amp; popovers</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-typography.html" class="menu-link">
                                        <div data-i18n="Typography">Typography</div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Forms & Tables -->
                        <li class="menu-header small text-uppercase"><span class="menu-header-text">Forms &amp;
                                Tables</span></li>
                        <!-- Forms -->
                        <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                                <i class="menu-icon tf-icons bx bx-detail"></i>
                                <div data-i18n="Form Elements">Form Elements</div>
                            </a>
                            <ul class="menu-sub">
                                <li class="menu-item">
                                    <a href="forms-basic-inputs.html" class="menu-link">
                                        <div data-i18n="Basic Inputs">Basic Inputs</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="forms-input-groups.html" class="menu-link">
                                        <div data-i18n="Input groups">Input groups</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                                <i class="menu-icon tf-icons bx bx-detail"></i>
                                <div data-i18n="Form Layouts">Form Layouts</div>
                            </a>
                            <ul class="menu-sub">
                                <li class="menu-item">
                                    <a href="form-layouts-vertical.html" class="menu-link">
                                        <div data-i18n="Vertical Form">Vertical Form</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="form-layouts-horizontal.html" class="menu-link">
                                        <div data-i18n="Horizontal Form">Horizontal Form</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- Tables -->
                        <li class="menu-item">
                            <a href="tables-basic.html" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-table"></i>
                                <div data-i18n="Tables">Tables</div>
                            </a>
                        </li>
                    </ul>

                    <div class=" fixed-bottom0">
                        <li class="menu-item">
                            <a class="menu-link">
                                <i class="bx bx-cog me-2"></i>
                                <span class="align-middle">Settings</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link">
                                <i class="bx bx-power-off me-2"></i>
                                <span class="align-middle">Log Out</span>
                            </a>
                        </li>
                    </div>
                </aside>

                <div class="layout-page">
                    <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                        id="layout-navbar">
                        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                                <i class="bx bx-menu bx-sm"></i>
                            </a>
                        </div>

                        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

                            <ul class="navbar-nav flex-row align-items-center ms-auto">
                                <!-- Place this tag where you want the button to render. -->

                                <h5 class="m-2"> {{Auth::user()->name}}</h3>

                                <!-- User -->
                                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                        data-bs-toggle="dropdown">
                                        <div class="avatar avatar-online">
                                            <img src="../assets/img/avatars/1.png" alt
                                                class="w-px-40 h-auto rounded-circle" />
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar avatar-online">
                                                            <img src="../assets/img/avatars/1.png" alt
                                                                class="w-px-40 h-auto rounded-circle" />
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <span class="fw-semibold d-block"> {{Auth::user()->name}}</span>
                                                        <small class="text-muted">Admin</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <i class="bx bx-user me-2"></i>
                                                <span class="align-middle">My Profile</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <i class="bx bx-cog me-2"></i>
                                                <span class="align-middle">Settings</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <span class="d-flex align-items-center align-middle">
                                                    <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                                                    <span class="flex-grow-1 align-middle">Billing</span>
                                                    <span
                                                        class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{route('logout') }}">
                                                <i class="bx bx-power-off me-2"></i>
                                                <span class="align-middle">Log Out</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <!--/ User -->
                            </ul>
                        </div>
                    </nav>
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->
        <script src="../assets/vendor/libs/jquery/jquery.js"></script>
        <script src="../assets/vendor/libs/popper/popper.js"></script>
        <script src="../assets/vendor/js/bootstrap.js"></script>
        <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

        <script src="../assets/vendor/js/menu.js"></script>
        <!-- endbuild -->

        <!-- Vendors JS -->
        <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

        <!-- Main JS -->
        <script src="../assets/js/main.js"></script>

        <!-- Page JS -->
        <script src="../assets/js/dashboards-analytics.js"></script>

        <!-- Place this tag in your head or just before your close body tag. -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
    </body>

</html>
