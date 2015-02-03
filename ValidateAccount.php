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
	$trans = new TransationsBiz();	
	$accNum = $_REQUEST['firstname'];
	//$_SESSION['account_number'] = $accNum;
	//echo $accNum;
	
	// Input validations
	$custinfo = $trans->validateAccNum($accNum);

	
	if(($custinfo) == true){
		$_SESSION['account_number'] = $custinfo[0]['accountNo'];
		$_SESSION['balance'] = $custinfo[0]['balance'];
		
		header("Location: http://".$appUrl."/".$projPage."/button.php");
	}
	else{
		echo "Invalid account number-- Please enter a valid one";
	}
}
else
{
	session_destroy();
	header("Location: http://".$appUrl."/".$projPage);
}
//$smarty->display('button.tpl');
?>