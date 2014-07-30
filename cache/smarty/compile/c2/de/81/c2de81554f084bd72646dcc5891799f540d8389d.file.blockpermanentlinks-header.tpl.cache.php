<?php /* Smarty version Smarty-3.1.14, created on 2014-07-30 02:31:24
         compiled from "C:\wamp\www\padrao3\themes\theme593\modules\blockpermanentlinks\blockpermanentlinks-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2515153d8751c305e82-33936221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2de81554f084bd72646dcc5891799f540d8389d' => 
    array (
      0 => 'C:\\wamp\\www\\padrao3\\themes\\theme593\\modules\\blockpermanentlinks\\blockpermanentlinks-header.tpl',
      1 => 1406694523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2515153d8751c305e82-33936221',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53d8751c45db03_15078565',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d8751c45db03_15078565')) {function content_53d8751c45db03_15078565($_smarty_tpl) {?><!-- Block permanent links module HEADER -->
<section class="header-box blockpermanentlinks-header">
    <ul id="header_links">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index.php');?>
" class="header_links_home"><?php echo smartyTranslate(array('s'=>'home','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a></li>
        <li><a  href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('stores');?>
" class="header_links_store"><?php echo smartyTranslate(array('s'=>'Our stores'),$_smarty_tpl);?>
</a></li>
        <li ><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getCMSLink('4','About Us');?>
" class="header_links_about"><?php echo smartyTranslate(array('s'=>'About Us'),$_smarty_tpl);?>
</a></li>
        <li ><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getCMSLink('1','Delivery');?>
" class="header_links_delivery"><?php echo smartyTranslate(array('s'=>'Delivery'),$_smarty_tpl);?>
</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true);?>
" class="header_links_contact"  title="<?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a></li>

        
    </ul>

    <div class="mobile-link-top">
        <h4>
             <span class="title-hed"></span><span class="arrow_header_top_menu"></span>
        </h4>
        <ul id="mobilelink" class="list_header">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index.php');?>
" class="header_links_home"><?php echo smartyTranslate(array('s'=>'home','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a></li>
        <li><a  href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('stores');?>
" class="header_links_store"><?php echo smartyTranslate(array('s'=>'Our stores'),$_smarty_tpl);?>
</a></li>
               <li ><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getCMSLink('4','About Us');?>
" class="header_links_about"><?php echo smartyTranslate(array('s'=>'About Us'),$_smarty_tpl);?>
</a></li>
    	    <li ><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getCMSLink('1','Delivery');?>
" class="header_links_delivery">Delivery</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true);?>
" class="header_links_contact"  title="<?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a></li>

        </ul>
    </div>
</section>
<!-- /Block permanent links module HEADER -->


<?php }} ?>