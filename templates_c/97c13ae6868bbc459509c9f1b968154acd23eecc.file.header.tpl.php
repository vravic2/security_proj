<?php /* Smarty version Smarty-3.1.18, created on 2014-12-12 14:09:37
         compiled from "./templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2067379982547d3d115503d4-52602669%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97c13ae6868bbc459509c9f1b968154acd23eecc' => 
    array (
      0 => './templates/header.tpl',
      1 => 1418389776,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2067379982547d3d115503d4-52602669',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_547d3d1155b403_70056917',
  'variables' => 
  array (
    'curPage' => 0,
    'home' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547d3d1155b403_70056917')) {function content_547d3d1155b403_70056917($_smarty_tpl) {?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  

    <title>Secured Bank</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
	
	  <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
	
	<!-- Add jQuery library -->
	<script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
	<!--<script type="text/javascript" src="js/jquery.validate.js"></script>-->
	<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.min.js"></script>




<?php if ($_smarty_tpl->tpl_vars['curPage']->value=='index.php') {?>
<script>//validation for login

$( document ).ready(function() {
var regx = /^[A-Za-z0-9 _.-]+$/;
if($("#user").val()==0)
	$("#loginButton").attr("disabled","true");

$('#user').keyup(function() {
	var user = $("#user").val();
    if ((!regx.test(this.value)) || (user.length < 3))
    	$("#loginButton").attr("disabled","true");

    else  
    	$("#loginButton").removeAttr("disabled");
});
});
</script>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['curPage']->value=='deposit.php') {?>
<script>//validation for deposit
$( document ).ready(function() {
var regx = /^\d+$/;
if($("#Amount").val()==0)
	$("#depositButton").attr("disabled","true");
$('#Amount').keyup(function() {
	var user = $("#Amount").val();
    if ((!regx.test(this.value)) || (user.length < 0 ) || user ==0)
    	$("#depositButton").attr("disabled","true");

    else  
    	$("#depositButton").removeAttr("disabled");
});
});
</script>
<?php }?>



<?php if ($_smarty_tpl->tpl_vars['curPage']->value=='withdraw.php') {?>
<script>//validation for withdraw
$( document ).ready(function() {
var regx = /^\d+$/;
if($("#amount").val()==0)
	$("#withdrawbutton").attr("disabled","true");
$('#amount').keyup(function() {
	var user = $("#amount").val();
    if ((!regx.test(this.value)) || (user.length < 0 ) || user ==0)
    	$("#withdrawbutton").attr("disabled","true");

    else  
    	$("#withdrawbutton").removeAttr("disabled");
});
});
</script>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['curPage']->value=='transfer.php') {?>
<script>//validation for transfer
$( document ).ready(function() {
var regx = /^\d+$/;
if($("#amount").val()==0)
	$("#transferbutton").attr("disabled","true");
$('#amount').keyup(function() {
	var user = $("#amount").val();
    if ((!regx.test(this.value)) || (user.length < 0 ) || user ==0)
    	$("#transferbutton").attr("disabled","true");

    else  
    	$("#transferbutton").removeAttr("disabled");
});
});
</script>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['curPage']->value=='accountQuery.php') {?>
<script>//validation for transfer
$( document ).ready(function() {

var regx = /^\d+$/;
if($("#firstname").val()==0)
	$("#accountbut").attr("disabled","true");
$('#firstname').keyup(function() {
	var user = $("#firstname").val();
    if ((!regx.test(this.value)) || (user.length < 4 ) || user ==0)
    	$("#accountbut").attr("disabled","true");

    else  
    	$("#accountbut").removeAttr("disabled");
});
});
</script>
<?php }?>


  </head>

  <body>

<div class="container">
<center>

<h1>Secured Bank Application</h1>

<?php if ($_smarty_tpl->tpl_vars['home']->value!='set') {?>

<legend>Account Information:</legend>
	<table align="center" width="100%" border="0" class="brdr"> 
	  <tr class="bord"> 
	    <td colspan="2" class="bord"><p class="hdr"> <center> UIC BANK INC </center> </p> </td> 
	  </tr> 
	  <tr> 
	    <td width="90%" valign="top">
	     
	    <table width="100%" border="0"> 
	      <tr> 
	        <a href="logout.php"><input type="submit" value="Logout"></a> 
	      	<a href="button.php"><input type="submit" value="Customer Info"></a> 
	      	<a href="deposit.php"><input type="submit" value="Deposit"></a>
			<a href="withdraw.php"><input type="submit" value="withdraw"></a>
            <a href="transfer.php"><input type="submit" value="Transfer"></a>
            <a href="accountQuery.php"><input type="submit" value="Account Query"></a>
             </tr>
	    </table> 
	    
	    
	       
	    </td> 
	  </tr> 
	  <tr> 
	    <td colspan="2"> </td> 
	  </tr> 
	</table> 

<?php }?>
<?php }} ?>
