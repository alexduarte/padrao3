<?php /* Smarty version Smarty-3.1.14, created on 2014-07-30 11:43:09
         compiled from "C:\wamp\www\padrao3\modules\blockadvertising\blockadvertising.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2908153d8f66d9b7385-37055632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c08083a42dca64068a3b96a5225f417c4a1b1a1b' => 
    array (
      0 => 'C:\\wamp\\www\\padrao3\\modules\\blockadvertising\\blockadvertising.tpl',
      1 => 1406663514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2908153d8f66d9b7385-37055632',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adv_link' => 0,
    'adv_title' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53d8f66d9f1d03_60470564',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d8f66d9f1d03_60470564')) {function content_53d8f66d9f1d03_60470564($_smarty_tpl) {?>

<!-- MODULE Block advertising -->
<div class="advertising_block">
	<a href="<?php echo $_smarty_tpl->tpl_vars['adv_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" width="155"  height="163" /></a>
</div>
<!-- /MODULE Block advertising -->
<?php }} ?>