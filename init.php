<?php
$tpl="include/tempaltes/";
$func="include/functions/";
$css= "layout/css/";
$img= "layout/images/";
$js= "layout/js/";

include("connect.php");
include $func."function.php";
include $tpl.'header.php';
if(!isset($nonavbar)){
include($tpl."navbar.php");
}
?>
