<?php

//error_reporting(E_PARSE);

session_start();


require '../_config/database/Conexion.php';
$conn = new Conexion();

require ("../_config/mvc/configMVC.php");
$smarty = new configMVC();

require 'model/dashboardModel.php';
$model = new dashboardModel($conn->db);      

if (isset($_GET['page'])) {
	$page = $_GET['page'];
}else{
	$page = 'dashboard';
}



switch ($page) {
	case 'dashboard':
		$smarty->assign("header","Inicio");
		$smarty->assign("section","Tablero");
		$smarty->setModule("Dashboard");
		$content = $smarty->fetch("dashboard.tpl");
		$smarty->setModule("_includes");
		$smarty->assign("user"," ".$_SESSION['user']);
		$smarty->assign("content",$content);
		$smarty->display("masterPage.tpl");
	break;

	default:
		echo "Error page not found";
	break;
}







/*

    // Inclusiones necesarias en el proyecto //


require '../_config/database/Conexion.php';
$conn = new Conexion();

require ("../_config/mvc/configMVC.php");
$smarty = new configMVC();

require 'model/model.php';
$model = new Model($conn->db);        
        
    

    // Codigo Smarty para Back-End //


$smarty->setModule("_includes");
$content = $smarty->fetch("contentAdminDenominations.tpl");
$smarty->assign("content",$content);
$smarty->display("masterPage.tpl");




    // Codigo Smarty para Front-End //

{section loop=$var name=c}
    
    {var[c].value}
    
    {if $var[c].active == "Y"}
        
    {else}
        
    {/if}

{/section}


*/



