<?php /* Smarty version Smarty-3.1.14, created on 2014-07-30 11:47:09
         compiled from "C:\wamp\www\padrao3\themes\theme593\modules\blockcustomerprivacy\blockcustomerprivacy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:687453d8f75dbbec05-25643596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d4c1edad446a74cc04e5b0a559929df8619aa45' => 
    array (
      0 => 'C:\\wamp\\www\\padrao3\\themes\\theme593\\modules\\blockcustomerprivacy\\blockcustomerprivacy.tpl',
      1 => 1406694523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '687453d8f75dbbec05-25643596',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'privacy_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53d8f75dbfd407_26567612',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d8f75dbfd407_26567612')) {function content_53d8f75dbfd407_26567612($_smarty_tpl) {?>

<div class="error_customerprivacy" style="color:red;"></div>
<fieldset class="account_creation customerprivacy titled_box">
	<h2><span><?php echo smartyTranslate(array('s'=>'Customer data privacy','mod'=>'blockcustomerprivacy'),$_smarty_tpl);?>
</span></h2>
	<p class="required">
		<input type="checkbox" value="1" id="customer_privacy" name="customer_privacy" style="float:left;margin: 15px;" />				
	</p>
	<label for="customer_privacy"><?php echo $_smarty_tpl->tpl_vars['privacy_message']->value;?>
</label>		
</fieldset><?php }} ?>