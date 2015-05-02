<!DOCTYPE html>
<html lang="en">
<head>
    <!--
        ===
        This comment should NOT be removed.

        Charisma v2.0.0

        Copyright 2012-2014 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0

        http://usman.it
        http://twitter.com/halalit_usman
        ===
    -->
    <meta charset="utf-8">
    <title>AdminSM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Administrative system of Recicladora S.M.">
    <meta name="author" content="Andrey Castro">

    <!-- The styles -->
    <link id="bs-css" href="../resources/css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="../resources/css/charisma-app.css" rel="stylesheet">
    <link href='../resources/bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='../resources/bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='../resources/bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='../resources/bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='../resources/bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='../resources/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='../resources/css/jquery.noty.css' rel='stylesheet'>
    <link href='../resources/css/noty_theme_default.css' rel='stylesheet'>
    <link href='../resources/css/elfinder.min.css' rel='stylesheet'>
    <link href='../resources/css/elfinder.theme.css' rel='stylesheet'>
    <link href='../resources/css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='../resources/css/uploadify.css' rel='stylesheet'>
    <link href='../resources/css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="../resources/bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="../resources/http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="../resources/img/favicon.ico">

</head>

<body>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../resources/index.html"> <img alt="Charisma Logo" src="../resources/img/logo20.png" class="hidden-xs"/>
                <span>Charisma</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs">{$user}</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="../resources/#">Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="../resources/login.html">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->
        </div>
    </div>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Menú Principal</li>
                        <li><a href="../Dashboard/"><i class="glyphicon glyphicon-home"></i><span> Inicio</span></a>
                        </li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-list-alt"></i><span> Planillas</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="../Payroll/?page=weekly">Planilla Semanal</a></li>
                                <li><a href="../Payroll/?page=insurance">Planilla INS</a></li>
                                <li><a href="../Payroll/?page=loans">Prestamos</a></li>
                                <li><a href="../Payroll/?page=employee">Empleados</a></li>
                            </ul>
                        </li>
                        <li><a href="../Containers/"><i class="glyphicon glyphicon-camera"></i><span> Contenedores</span></a>
                        </li>
                        <li><a href="../Contacts/"><i class="glyphicon glyphicon-book"></i><span> Contactos</span></a>
                        </li>
                        <li><a href="../Reports/"><i class="glyphicon glyphicon-signal"></i><span> Reportes</span></a>
                        </li>
                        <li><a href="../Calendar/"><i class="glyphicon glyphicon-calendar"></i><span> Calendario</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->
        <div class="col-sm-10 col-lg-10">
        <!-- navigation -->
        {$navigation}
        <!-- navigation ends -->
    <hr>
        <!-- content -->
        {$content}
        <!-- content ends -->
        </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="../resources/#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="../resources/#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="row">
        
    </footer>

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="../resources/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management 
<script src="../resources/js/jquery.cookie.js"></script>-->
<!-- calender plugin -->
<script src='../resources/bower_components/moment/min/moment.min.js'></script>
<script src='../resources/bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='../resources/js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="../resources/bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="../resources/bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="../resources/js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="../resources/bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="../resources/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="../resources/js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="../resources/js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="../resources/js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="../resources/js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="../resources/js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="../resources/js/charisma.js"></script>


</body>
</html>

