<?php /* Smarty version Smarty-3.1.18, created on 2014-12-12 14:01:40
         compiled from "./templates/Money_transfer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1502929091548ac71c0faff1-25551967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '614254db909c98c9dc09b67ec1e359dff5111f4d' => 
    array (
      0 => './templates/Money_transfer.tpl',
      1 => 1418389296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1502929091548ac71c0faff1-25551967',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_548ac71c11e595_29471302',
  'variables' => 
  array (
    'balance' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548ac71c11e595_29471302')) {function content_548ac71c11e595_29471302($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>


<form action="transferCall.php" role="form" method="post">
<fieldset>
<legend>Money Transfer:</legend>
Sender Account No:<br>
<input type="text" name="account_number" value="">
<br>

Amount:<br>
<input type="text" id="amount" name="amount" value="">
<br>
Balance:<br>
<input type="text" name="balance" disabled="true" value=<?php echo $_smarty_tpl->tpl_vars['balance']->value;?>
 >
<br><br>
<input type="submit" id="transferbutton" value="Submit"></fieldset>
</form>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>
<?php }} ?>
