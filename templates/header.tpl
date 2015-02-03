
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




{if $curPage eq 'index.php'}
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
{/if}


{if $curPage eq 'deposit.php'}
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
{/if}



{if $curPage eq 'withdraw.php'}
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
{/if}


{if $curPage eq 'transfer.php'}
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
{/if}


{if $curPage eq 'accountQuery.php'}
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
{/if}


  </head>

  <body>

<div class="container">
<center>

<h1>Secured Bank Application</h1>

{if $home neq 'set'}

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

{/if}
