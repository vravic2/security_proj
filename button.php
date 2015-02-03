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
	$accno = $_SESSION['account_number'];
	$rowArray = $trans->displayCustInfo($accno);
		$smarty->assign('custName',$rowArray['userName']);
		$_SESSION['balance']=$rowArray['balance'];
	$smarty->assign('balance',$rowArray['balance']);

	$smarty->assign('phoneNo',$rowArray['phoneNo']);
	$smarty->assign('email',$rowArray['emailId']);
	$smarty->assign('zipcode',$rowArray['zipcode']);
	//$smarty->assign('info', $rowArray);
	$smarty->assign('flag', 'set');
	$smarty->display('button.tpl');
}
else
{
$_SESSION = array();
	session_destroy();
	header("Location: http://".$appUrl."/".$projPage);}
?>