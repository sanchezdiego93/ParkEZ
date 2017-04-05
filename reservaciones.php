<!doctype html>
<html class="fixed">
<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Dashboard | ParkEZ</title>
    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
    <link rel="stylesheet" href="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
    <link rel="stylesheet" href="assets/vendor/morris/morris.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/stylesheets/theme.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

    <!-- Head Libs -->
    <script src="assets/vendor/modernizr/modernizr.js"></script>

</head>
<body>
<section class="body">

    <!-- start: header -->
    <header class="header">
        <div class="logo-container">
            <a href="#" class="logo">
                <img src="assets/images/logo.png" height="35" alt="Porto Admin" />
            </a>
            <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
            </div>
        </div>

        <!-- start: search & user box -->
        <div class="header-right">


            <span class="separator"></span>

            <div id="userbox" class="userbox">
                <a href="#" data-toggle="dropdown">
                    <figure class="profile-picture">
                        <img src="assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
                    </figure>
                    <div class="profile-info" data-lock-name="Admin" data-lock-email="johndoe@okler.com">
                        <span class="name">Admin</span>
                        <span class="role">administrador</span>
                    </div>

                    <i class="fa custom-caret"></i>
                </a>

                <div class="dropdown-menu">
                    <ul class="list-unstyled">
                        <li class="divider"></li>
                        <li>
                            <a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fa fa-power-off"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end: search & user box -->
    </header>
    <!-- end: header -->

    <div class="inner-wrapper">
        <!-- start: sidebar -->
        <aside id="sidebar-left" class="sidebar-left">

            <div class="sidebar-header">
                <div class="sidebar-title">
                    Navigation
                </div>
                <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                    <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>

            <div class="nano">
                <div class="nano-content">
                    <nav id="menu" class="nav-main" role="navigation">
                        <ul class="nav nav-main">
                            <li class="nav-active">
                                <a href="index.php">
                                    <i class="fa fa-home" aria-hidden="true"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="mailbox-folder.html">
                                    <i class="fa fa-align-left" aria-hidden="true"></i>
                                    <span>Reservaciones</span>
                                </a>
                            </li>
                            <li>
                                <a href="historial.php">
                                    <i class="fa fa-copy" aria-hidden="true"></i>
                                    <span>Historial</span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <span>Usuarios</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>

        </aside>
        <!-- end: sidebar -->

        <section role="main" class="content-body">
            <header class="page-header">
                <h2>Reservaciones</h2>
            </header>

            <!-- start: page -->
            <div class="row">
                <div class="col-lg-12">
                    <section role="main" class="panel">
                        <header class="page-header">
                            <h2>Reservaciones</h2>
                        </header>
                        <div class="col-lg-12">
                            <section class="panel">
                                <header class="panel-heading">
                                    <h2 class="panel-title">Reservaciones</h2>
                                </header>
                                <div class="panel-body">
                                    <form class="form-horizontal form-bordered" method="get">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Area </label>
                                            <div class="col-md-6">
                                                <select data-plugin-selectTwo class="form-control populate placeholder">
                                                    <option value="AK">Admimistracion</option>
                                                    <option value="HI">Capilla</option>
                                                    <option value="CA">Centro de Estudiantes</option>
                                                    <option value="NV">Biblioteca</option>
                                                    <option value="OR">Aulas 2</option>
                                                    <option value="WA">Ciencias de la salud</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Fecha</label>
                                            <div class="col-md-6">
                                                <div class="input-group">
															<span class="input-group-addon">
																<i class="fa fa-calendar"></i>
															</span>
                                                    <input id="date" data-plugin-masked-input data-input-mask="99/99/9999" placeholder="__/__/____" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Hora</label>
                                            <div class="col-md-6">
                                                <div class="input-daterange input-group">
														<span class="input-group-addon">
															<i class="fa fa-clock-o"></i>
														</span>
                                                    <input type="text" data-plugin-timepicker class="form-control">
                                                    <span class="input-group-addon">to</span>
                                                    <input type="text" data-plugin-timepicker class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-4 col-sm-offset-8">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-primary">Continuar</button>
                                                </span>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </section>
                        </div>
                </div>
            </div>

        <!-- end: page -->
    </section>
    </div>
</section>

<!-- Vendor -->
<script src="assets/vendor/jquery/jquery.js"></script>
<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

<!-- Specific Page Vendor -->
<script src="assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
<script src="assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
<script src="assets/vendor/jquery-appear/jquery.appear.js"></script>
<script src="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
<script src="assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
<script src="assets/vendor/flot/jquery.flot.js"></script>
<script src="assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
<script src="assets/vendor/flot/jquery.flot.pie.js"></script>
<script src="assets/vendor/flot/jquery.flot.categories.js"></script>
<script src="assets/vendor/flot/jquery.flot.resize.js"></script>
<script src="assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
<script src="assets/vendor/raphael/raphael.js"></script>
<script src="assets/vendor/morris/morris.js"></script>
<script src="assets/vendor/gauge/gauge.js"></script>
<script src="assets/vendor/snap-svg/snap.svg.js"></script>
<script src="assets/vendor/liquid-meter/liquid.meter.js"></script>
<script src="assets/vendor/jqvmap/jquery.vmap.js"></script>
<script src="assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
<script src="assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="assets/javascripts/theme.js"></script>

<!-- Theme Custom -->
<script src="assets/javascripts/theme.custom.js"></script>

<!-- Theme Initialization Files -->
<script src="assets/javascripts/theme.init.js"></script>


<!-- Examples -->
<script src="assets/javascripts/dashboard/examples.dashboard.js"></script>
<script src="assets/javascripts/forms/examples.advanced.form.js"></script>
</body>
</html>