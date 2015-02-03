<?php /*%%SmartyHeaderCode:14461546fb14751d029-40376194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1401742044,
      2 => 'file',
    ),
    '1be7ff7fdee636597edd726ee98dfef4bfd55d1f' => 
    array (
      0 => '.\\templates\\footer.tpl',
      1 => 1400788575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14461546fb14751d029-40376194',
  'variables' => 
  array (
    'valid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_546fb1477ad427_85882451',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546fb1477ad427_85882451')) {function content_546fb1477ad427_85882451($_smarty_tpl) {?><script>
function signup()
{
alert('da');
//fancybox-item fancybox-close
}
</script>


<div class="container">

      <form name="login" class="form-signin" role="form" action="http://localhost/gamescheduler/login" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input id="email" name="email" type="email" class="form-control" placeholder="Email address" required autofocus>
        <input id="password" name="password" type="password" class="form-control" placeholder="Password" required>
		Not a member yet?&nbsp;<a href="#inline1" class="fancybox">Register here</a> <br><br>
        <button name="login" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>		
     </form>
	 <br />
<b>Notice</b>:  Undefined index: valid in <b>C:\xampp\htdocs\gamescheduler\libs\sysplugins\smarty_internal_templatebase.php(151) : eval()'d code</b> on line <b>44</b><br />
<br />
<b>Notice</b>:  Trying to get property of non-object in <b>C:\xampp\htdocs\gamescheduler\libs\sysplugins\smarty_internal_templatebase.php(151) : eval()'d code</b> on line <b>44</b><br />

	 <div id="inline1" style="height:430px;width:390px;display: none;">
		<h3>Sign up</h3>
		<form name="signup"  role="form" action="index.php" method="post">
			<hr>
			<input id="signname" name="signname" type="name" class="form-control" placeholder="Name" style="width:80%"  ><br>
			<input id="signcreatepassword" name="signcreatepassword" type="password" class="form-control" placeholder="Password" style="width:80%" ><br>
			<input id="signconfirmpassword" name="signconfirmpassword" type="password" class="form-control" placeholder="Confirm Password" style="width:80%" ><br>
			<input id="signemail" name="signemail" type="email" class="form-control" placeholder="Email address" style="width:80%"  ><br>
			<input id="signage" name="signage" type="number" class="form-control" placeholder="Age" style="width:80%"  ><br>
			<input id="signzip" name="signzip" type="number" class="form-control" placeholder="Zipcode" style="width:80%"  ><br>			
			<div class="col-sm-6"><button name="signups" class="btn btn-lg btn-primary btn-block" style="width: 200px;" type="submit"  >Register</button></div>		
		</form>
		</div>

    </div> <!-- /container -->

</BODY>
</HTML>

<?php }} ?>
