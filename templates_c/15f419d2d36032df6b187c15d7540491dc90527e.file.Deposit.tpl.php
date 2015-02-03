<?php /* Smarty version Smarty-3.1.18, created on 2014-12-12 13:43:27
         compiled from "./templates/Deposit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:429987392548ab71f52b7f4-42270927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15f419d2d36032df6b187c15d7540491dc90527e' => 
    array (
      0 => './templates/Deposit.tpl',
      1 => 1418388131,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '429987392548ab71f52b7f4-42270927',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_548ab71f54e109_00400930',
  'variables' => 
  array (
    'balance' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548ab71f54e109_00400930')) {function content_548ab71f54e109_00400930($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>

 <form name="deposit" id="deposit" class="form-signin" role="form" action="depositCall.php" method="post">
<fieldset>
<legend>Deposit:</legend>
<align="center" Amount:<br>
<input type="text" id="Amount" name="Amount" value="">
<br>
Balance:<br>
<input type="text" disabled id="customerbalance" name="firstname" value=<?php echo $_smarty_tpl->tpl_vars['balance']->value;?>
>
<br><br>
<input type="submit" id="depositButton" value="Submit"></fieldset>
</form>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>

<?php }} ?>
