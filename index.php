<?php
/**
 * Example Application
 *
 * @package Example-application
 */

require 'commonfunctions.php';
//echo $_SERVER['REQUEST_URI'].'-------';	

if(isset($_REQUEST['user']) && isset($_REQUEST['password'])){
	include_once 'biz/indexbiz.php';
	$ind = new indexbiz();	
	
	$user = $_REQUEST['user'];		
	$password = $_REQUEST['password'];
	
	// Input validations
	if($ind->validateUser($user,$password)==1)
	{
	
		if(!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == ""){
		$redirect = "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		header("Location: $redirect");
		}
		
		
		//Creating session for username and zipcode.
		session_regenerate_id();
		$_SESSION['username'] = $user;
		$_SESSION['password'] = $password ;
		echo $_SESSION['role'];
		return false;
		session_write_close();



		//redirect the page to the user records page.

		header("Location: https://".$appUrl."/".$projPage."/accountQuery.php");
	}
	else
		{
			$smarty->assign('loginerr', 'Login is not valid');
			$smarty->assign('home', 'set');
			$smarty->assign('err', 'yes');
			
		}
}
else
	$smarty->assign('home', 'set');


$smarty->display('index.tpl');
?>