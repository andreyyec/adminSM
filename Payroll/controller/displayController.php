<?php

//error_reporting(E_PARSE);

session_start();

require '../_config/database/Conexion.php';
$conn = new Conexion();

require ("../_config/mvc/configMVC.php");
$smarty = new configMVC();

require 'model/payrollModel.php';
$model = new PayrollModel($conn->db); 

if (isset($_GET['page'])) {
	$page = $_GET['page'];
}else{
	$page = 'paysheets';
}

$smarty->assign("header","Planillas");

switch ($page) {
	case 'paysheets':
		$smarty->assign("section","Planilla Semanal");
		$smarty->setModule("Payroll");
		$content = $smarty->fetch("paysheets.tpl");
		$smarty->setModule("_includes");
		$smarty->assign("user"," ".$_SESSION['user']);
		$smarty->assign("content",$content);
		$smarty->display("masterPage.tpl");
	break;

	case 'insurances':
		$smarty->assign("section","INS");
		$smarty->setModule("Payroll");
		$content = $smarty->fetch("insurances.tpl");
		$smarty->setModule("_includes");
		$smarty->assign("user"," ".$_SESSION['user']);
		$smarty->assign("content",$content);
		$smarty->display("masterPage.tpl");
	break;

	case 'loans':
		$smarty->assign("section","Prestamos");
		$smarty->setModule("Payroll");
		$content = $smarty->fetch("loans.tpl");
		$smarty->setModule("_includes");
		$smarty->assign("user"," ".$_SESSION['user']);
		$smarty->assign("content",$content);
		$smarty->display("masterPage.tpl");
	break;

	case 'employees':
		$smarty->assign("section","Empleados");
		$smarty->setModule("Payroll");
		$content = $smarty->fetch("employees.tpl");
		$smarty->setModule("_includes");
		$smarty->assign("user"," ".$_SESSION['user']);
		$smarty->assign("content",$content);
		$smarty->display("masterPage.tpl");
	break;


	case 'ocupations':

		$tBody = $model->getOcupations();
		$smarty->assign("tBody",$tBody);
		$smarty->assign("section","Configuración-> ocupaciones");
		$smarty->setModule("Payroll");
		$content = $smarty->fetch("ocupations.tpl");
		$smarty->setModule("_includes");
		$smarty->assign("user"," ".$_SESSION['user']);
		$smarty->assign("content",$content);
		$smarty->display("masterPage.tpl");
	break;

	case 'insurancePolicies':
		$smarty->assign("section","Configuración-> pólizas");
		$smarty->setModule("Payroll");
		$content = $smarty->fetch("insurancePolicies.tpl");
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



