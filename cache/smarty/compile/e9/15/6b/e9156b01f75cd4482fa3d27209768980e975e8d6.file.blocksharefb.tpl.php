<?php /* Smarty version Smarty-3.1.14, created on 2014-07-30 12:01:02
         compiled from "C:\wamp\www\padrao3\themes\theme593\modules\blocksharefb\blocksharefb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2084053d8fa9ee08ae8-86519455%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9156b01f75cd4482fa3d27209768980e975e8d6' => 
    array (
      0 => 'C:\\wamp\\www\\padrao3\\themes\\theme593\\modules\\blocksharefb\\blocksharefb.tpl',
      1 => 1406694523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2084053d8fa9ee08ae8-86519455',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_link' => 0,
    'product_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53d8fa9ee2bd62_93120240',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d8fa9ee2bd62_93120240')) {function content_53d8fa9ee2bd62_93120240($_smarty_tpl) {?>

<li id="left_share_fb">
	<a href="http://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['product_link']->value;?>
&amp;t=<?php echo $_smarty_tpl->tpl_vars['product_title']->value;?>
" class="js-new-window"><i class="icon-facebook-sign"></i><?php echo smartyTranslate(array('s'=>'Share on Facebook','mod'=>'blocksharefb'),$_smarty_tpl);?>
</a>
</li><?php }} ?>