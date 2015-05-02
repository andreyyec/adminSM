<?php /* Smarty version Smarty-3.1.16, created on 2015-04-26 18:12:11
         compiled from "../Login/view/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2360805465503cdd2abd266-27861727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9d0cf26bd78e0c33d1e289783c9b01f3e32a401' => 
    array (
      0 => '../Login/view/login.tpl',
      1 => 1430093527,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2360805465503cdd2abd266-27861727',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5503cdd2af6a56_32809482',
  'variables' => 
  array (
    'status' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5503cdd2af6a56_32809482')) {function content_5503cdd2af6a56_32809482($_smarty_tpl) {?><!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>AdminSM</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../resources/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="../resources/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../resources/css/admin-lte.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-black">

        <div class="form-box" id="login-box">
            <div class="header">AdminSM</div>
            <form action="./loginActions.php" method="post">
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="userid" class="form-control" placeholder="Nombre de usuario"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Contraseña"/>
                    </div>          
                    <div class="form-group">
                        <input type="checkbox" name="remember_me"/> No cerrar sesión
                    </div>
                </div>
                <div class="footer">                                                               
                    <button type="submit" class="btn bg-olive btn-block">Iniciar Sesión</button>  
                    
                    <p><a href="#">Olvide mi contraseña</a></p>
                    
                </div>
            </form>
        </div>
        <a id="status" hidden><?php echo $_smarty_tpl->tpl_vars['status']->value;?>
</a>
 

        <!-- jQuery 2.0.2 -->
        <script src="../resources/js/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../resources/js/bootstrap.min.js" type="text/javascript"></script>        
        <!-- Noty -->
        <script src="../resources/js/noty/packaged/jquery.noty.packaged.min.js" type="text/javascript"></script>

        <script type="text/javascript">

$(document).ready(function () {
    if ($("#status").html() == "Error") {
       var n = noty({
                    text        : 'Credenciales incorrectos',
                    type        : 'error',
                    dismissQueue: true,
                    layout      : 'topRight',
                    closeWith   : ['hover'],
                    timeout     :  5000
        });
    };
});


/*
        function generate(type, text) {

            var n = noty({
                text        : text,
                type        : type,
                dismissQueue: true,
                layout      : 'topLeft',
                closeWith   : ['click'],
                theme       : 'relax',
                maxVisible  : 10,
                animation   : {
                    open  : 'animated bounceInLeft',
                    close : 'animated bounceOutLeft',
                    easing: 'swing',
                    speed : 500
                }
            });
            console.log('html: ' + n.options.id);
        }

        function generateAll() {
            generate('warning', notification_html[0]);
            generate('error', notification_html[1]);
            generate('information', notification_html[2]);
            generate('success', notification_html[3]);
//            generate('notification');
//            generate('success');
        }

        $(document).ready(function () {

            setTimeout(function() {
                generateAll();
            }, 500);

        });
*/
    </script>
        
    </body>
</html>
<?php }} ?>
