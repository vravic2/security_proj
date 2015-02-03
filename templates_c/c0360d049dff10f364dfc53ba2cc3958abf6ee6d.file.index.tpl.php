<?php /* Smarty version Smarty-3.1.18, created on 2014-12-12 07:12:28
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1853294289547d3d11523743-34103531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1418364746,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1853294289547d3d11523743-34103531',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_547d3d1154a8f3_92700108',
  'variables' => 
  array (
    'loginerr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547d3d1154a8f3_92700108')) {function content_547d3d1154a8f3_92700108($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>


      <form name="login" id="login" class="form-signin" role="form" action="index.php" method="post">
        <h2 class="form-signin-heading">Please sign in:</h2><br>
		<fieldset><br>
        Bank User-Id:&nbsp;<input id="user" name="user" type="text" maxlength="10"><br><br>
        Password: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="password"  name="password" maxlength="10" type="password"><br>
		
        <button id="loginButton"  name="loginButton" class="btn btn-lg btn-primary btn-block"  type="submit" >Sign in</button>		
		</fieldset>
     </form>
     <?php if ($_smarty_tpl->tpl_vars['loginerr']->value!='') {?>
        <p style="color:red"> Login details are not valid!!</p>
     <?php }?>
</center>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>


    </div> <!-- /container -->

<?php }} ?>
