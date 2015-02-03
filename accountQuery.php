<?php
/**
 * Example Application
 *
 * @package Example-application
 */

require 'commonfunctions.php';

//echo $_SESSION['username'];
//checking the session values of user
if($_SESSION['username']!="" && $_SESSION['password']!="")

{
	$smarty->assign('home', 'set');
	//$smarty->assign('home', 'nset');
	$smarty->display('Account_Query.tpl');
}
else{
	session_destroy();
	header("Location: https://".$appUrl."/".$projPage);
		
}
?>