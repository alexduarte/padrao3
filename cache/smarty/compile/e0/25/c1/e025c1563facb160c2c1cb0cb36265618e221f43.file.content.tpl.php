<?php /* Smarty version Smarty-3.1.14, created on 2014-07-30 11:42:50
         compiled from "C:\wamp\www\padrao3\admin6340\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2495153d8f65af3d489-77249734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e025c1563facb160c2c1cb0cb36265618e221f43' => 
    array (
      0 => 'C:\\wamp\\www\\padrao3\\admin6340\\themes\\default\\template\\content.tpl',
      1 => 1406028791,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2495153d8f65af3d489-77249734',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53d8f65b022182_73428374',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d8f65b022182_73428374')) {function content_53d8f65b022182_73428374($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>

<?php if (isset($_smarty_tpl->tpl_vars['content']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }?>
<?php }} ?>