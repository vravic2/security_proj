<?php /* Smarty version Smarty-3.1.18, created on 2014-12-12 12:05:56
         compiled from "./templates/button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:541600911548aa3357ebaf8-39283797%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '604e5426a1d9c811dee6c8583d13c3c78a89438e' => 
    array (
      0 => './templates/button.tpl',
      1 => 1418382267,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '541600911548aa3357ebaf8-39283797',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_548aa335804c00_23501832',
  'variables' => 
  array (
    'custName' => 0,
    'balance' => 0,
    'phoneNo' => 0,
    'email' => 0,
    'zipcode' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548aa335804c00_23501832')) {function content_548aa335804c00_23501832($_smarty_tpl) {?> 
	<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>
 
	<form>
<fieldset>
   <h2>Customer Information</h2>
    <li>customer-Name: <?php echo $_smarty_tpl->tpl_vars['custName']->value;?>
</li>
    <li>customer-balance: <?php echo $_smarty_tpl->tpl_vars['balance']->value;?>
</li>
    <li>phone No: <?php echo $_smarty_tpl->tpl_vars['phoneNo']->value;?>
</li>
    <li>Email Id: <?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</li>
    <li>zipcode: <?php echo $_smarty_tpl->tpl_vars['zipcode']->value;?>
</li>
</fieldset>
</form>
	    
	       <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>

	<?php }} ?>
