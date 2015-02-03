<?php
require 'libs/Smarty.class.php';
session_start();
error_reporting(E_ERROR | E_PARSE);
$smarty->error_reporting = E_ALL & ~E_NOTICE;
error_reporting(E_ERROR | E_PARSE);
$smarty = new Smarty;

$tokens = explode('/', $_SERVER['REQUEST_URI']);
$appUrl = "localhost";
$curPage =  $tokens[sizeof($tokens)-1];
$projPage = $tokens[sizeof($tokens)-2];

if($curPage!=''){
	if(!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == ""){
		$redirect = "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		header("Location: $redirect");
		}
}

$smarty->assign('curPage', $curPage);
?>