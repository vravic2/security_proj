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
	include_once 'biz/TransactionsBiz.php';
	$deposit = new TransationsBiz();	
	
	 $amount = $_REQUEST['Amount'];
		
	$accNum = $_SESSION['account_number'];
	
	// Input validations
	if(($deposit->deposit($accNum, $amount)) == true)
	{	
		header("Location: https://".$appUrl."/".$projPage."/button.php");
	}

}
else{
	$_SESSION = array();
	session_destroy();
	header("Location: http://".$appUrl."/".$projPage);
}
?>