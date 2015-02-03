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
	$transfer = new TransationsBiz();	
	
	$amount = $_REQUEST['amount'];
	$destAcctNum = $_REQUEST['account_number'];

//checking the destination account no is valid
	if(empty($transfer->validateAccNum($_REQUEST['account_number'])))
	{
		echo 'invalid account no -- pls provide the valid account number';
		return false;
	}
	
	$srcAcctNum = $_SESSION['account_number'];
	
	// Input validations
	if(($transfer->moneyTransfer($srcAcctNum, $destAcctNum, $amount)) == true)
	{	
		header("Location: https://".$appUrl."/".$projPage."/button.php");
	}
	
	else
		echo 'Fail';
}
else{
	$_SESSION = array();
	session_destroy();
	header("Location: http://".$appUrl."/".$projPage);
}?>