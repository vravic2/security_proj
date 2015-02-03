<?php /* Smarty version Smarty-3.1.18, created on 2014-12-12 14:05:40
         compiled from "./templates/Account_Query.tpl" */ ?>
<?php /*%%SmartyHeaderCode:939007359547d4a07c532d9-70444945%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02481a8c5cefcc099f732b527e68ec8dfae0cd5d' => 
    array (
      0 => './templates/Account_Query.tpl',
      1 => 1418389536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '939007359547d4a07c532d9-70444945',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_547d4a07c75d12_84833162',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547d4a07c75d12_84833162')) {function content_547d4a07c75d12_84833162($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>




<form role="form" action="ValidateAccount.php" method="post">
<fieldset>
<legend>Account Query:</legend>
Account No:<br>
<input type="text" id="firstname" name="firstname" value="">
<br>

<input type="submit" id="accountbut" value="Submit"></fieldset>
</form>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>
<?php }} ?>
