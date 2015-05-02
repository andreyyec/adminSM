<?php

require "../_config/mvc/configMVC.php";
$smarty = new configMVC();


$smarty->setModule("Login");
$smarty->display("login.tpl");


