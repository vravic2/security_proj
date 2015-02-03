<?php /* Smarty version Smarty-3.1.18, created on 2014-12-12 13:53:38
         compiled from "./templates/withdraw.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1261390969548ac7186873b2-22460179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15c83071235e5f196d87fa05c3d5cb7436890817' => 
    array (
      0 => './templates/withdraw.tpl',
      1 => 1418388801,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1261390969548ac7186873b2-22460179',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_548ac7186a8461_19620545',
  'variables' => 
  array (
    'balance' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548ac7186a8461_19620545')) {function content_548ac7186a8461_19620545($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>

<form role="form" action="withdrawCall.php" method="post">
<fieldset>
<legend>Withdraw:</legend>
Amount:<br>
<input type="text" id="amount" name="amount" value="">
<br>
Balance:<br>
<input type="text" name="firstname" value=<?php echo $_smarty_tpl->tpl_vars['balance']->value;?>
 disabled="true">
<br><br>
<input type="submit" id="withdrawbutton" value="Submit"></fieldset>
</form>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>
<?php }} ?>
