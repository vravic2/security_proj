<?php
/**
 * Example Application
 *
 * @package Example-application
 */

require 'commonfunctions.php';
//echo $_SERVER['REQUEST_URI'].'-------';
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password'])){
	$smarty->assign('balance',$_SESSION['balance']);
$smarty->display('Money_transfer.tpl');
}
else{
	$_SESSION = array();
	session_destroy();
	header("Location: http://".$appUrl."/".$projPage);
}

?>