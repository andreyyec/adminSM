

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
    <meta name="description" content="Admin Tool made for Recicladora San Miguel">
    <meta name="author" content="Andrey Castro">

    <!-- The styles -->
    <link id="bs-css" href="../resources/css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="../resources/css/charisma-app.css" rel="stylesheet">
    <link href='../resources/css/jquery.noty.css' rel='stylesheet'>
    <link href='../resources/css/noty_theme_default.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="../resources/bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body>
<a id="status" hidden>{$status}</a>
<div class="ch-container">
    <div class="row">
    <div class="col-md-12">  
    <div class="row">
        <div class="col-md-12 center login-header">
            <h2>AdminSM</h2>
        </div>
        <!--/span-->
    </div><!--/row-->

    <div class="row">
        <div class="well col-md-5 center login-box">
            <form class="form-horizontal" action="./loginActions.php" method="POST">
                <fieldset>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input name="user" id="user"type="text" class="form-control" placeholder="Usuario">
                    </div>
                    <div class="clearfix"></div><br>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                        <input name="pass" id="pass" type="password" class="form-control" placeholder="Contraseña">
                    </div>
                    <div class="clearfix"></div>

                    <div class="input-prepend">
                        <label class="remember" for="remember"><input type="checkbox" id="remember">Recordarme</label>
                    </div>
                    <div class="clearfix"></div>

                    <p class="center col-md-51">
                        <button type="submit" class="btn btn-primary">Ingresar</button>
                    </p>
                </fieldset>
            </form>
        </div>
        <!--/span-->
        </div>
    </div><!--/row-->
</div><!--/fluid-row-->

</div><!--/.fluid-container-->

<!-- external javascript -->

<!-- notification plugin -->
<script src="../resources/js/jquery.noty.js"></script>


<script type="text/javascript">
    
    $( document ).ready(function() {        
        if ($("#status").html() == "Error") {
            var n = noty({ldelim}"text":"Usuario o contraseña incorrectos","layout":"topRight","type":"error"{rdelim});
        };
    });

</script>
</body>
</html>
