<?php /* Smarty version Smarty-3.1.14, created on 2014-07-30 12:29:57
         compiled from "C:\wamp\www\padrao3\admin6340\themes\default\template\layout-ajax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:394853d90165c5e380-40211222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbd47e14fdd56989c2c544d24118b19b9dd54b03' => 
    array (
      0 => 'C:\\wamp\\www\\padrao3\\admin6340\\themes\\default\\template\\layout-ajax.tpl',
      1 => 1406028793,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '394853d90165c5e380-40211222',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'json' => 0,
    'status' => 0,
    'confirmations' => 0,
    'hasresult' => 0,
    'informations' => 0,
    'errors' => 0,
    'warnings' => 0,
    'content' => 0,
    'page' => 0,
    'conf' => 0,
    'error' => 0,
    'info' => 0,
    'confirm' => 0,
    'warning' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53d90166161b81_45288196',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d90166161b81_45288196')) {function content_53d90166161b81_45288196($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['json']->value)){?>
{<?php if (isset($_smarty_tpl->tpl_vars['status']->value)&&trim($_smarty_tpl->tpl_vars['status']->value)!=''){?><?php $_smarty_tpl->tpl_vars['hasresult'] = new Smarty_variable('ok', null, 0);?>"status" : "<?php echo $_smarty_tpl->tpl_vars['status']->value;?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['confirmations']->value)&&count($_smarty_tpl->tpl_vars['confirmations']->value)>0){?><?php if ($_smarty_tpl->tpl_vars['hasresult']->value=='ok'){?>,<?php }?><?php $_smarty_tpl->tpl_vars['hasresult'] = new Smarty_variable('ok', null, 0);?>"confirmations" : <?php echo $_smarty_tpl->tpl_vars['confirmations']->value;?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['informations']->value)&&count($_smarty_tpl->tpl_vars['informations']->value)>0){?><?php if ($_smarty_tpl->tpl_vars['hasresult']->value=='ok'){?>,<?php }?><?php $_smarty_tpl->tpl_vars['hasresult'] = new Smarty_variable('ok', null, 0);?>"informations" : <?php echo $_smarty_tpl->tpl_vars['informations']->value;?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['errors']->value)&&count($_smarty_tpl->tpl_vars['errors']->value)>0){?><?php if ($_smarty_tpl->tpl_vars['hasresult']->value=='ok'){?>,<?php }?><?php $_smarty_tpl->tpl_vars['hasresult'] = new Smarty_variable('ok', null, 0);?>"error" : <?php echo $_smarty_tpl->tpl_vars['errors']->value;?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['warnings']->value)&&count($_smarty_tpl->tpl_vars['warnings']->value)>0){?><?php if ($_smarty_tpl->tpl_vars['hasresult']->value=='ok'){?>,<?php }?><?php $_smarty_tpl->tpl_vars['hasresult'] = new Smarty_variable('ok', null, 0);?>"warnings" : <?php echo $_smarty_tpl->tpl_vars['warnings']->value;?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['content']->value)&&trim($_smarty_tpl->tpl_vars['content']->value)!=''){?><?php if ($_smarty_tpl->tpl_vars['hasresult']->value=='ok'){?>,<?php }?><?php $_smarty_tpl->tpl_vars['hasresult'] = new Smarty_variable('ok', null, 0);?>"content" : <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php }?>}
<?php }else{ ?>
	<?php if (isset($_smarty_tpl->tpl_vars['conf']->value)){?>
		<div class="alert alert-success">
			<?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

		</div>
	<?php }?>

	<?php if (count($_smarty_tpl->tpl_vars['errors']->value)){?> 
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php if (count($_smarty_tpl->tpl_vars['errors']->value)==1){?>
				<?php echo $_smarty_tpl->tpl_vars['errors']->value[0];?>

			<?php }else{ ?>
				<?php echo smartyTranslate(array('s'=>'%d errors','sprintf'=>count($_smarty_tpl->tpl_vars['errors']->value)),$_smarty_tpl);?>

				<br/>
				<ul>
					<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
						<li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
					<?php } ?>
				</ul>
			<?php }?>
		</div>
	<?php }?>

	<?php if (isset($_smarty_tpl->tpl_vars['informations']->value)&&count($_smarty_tpl->tpl_vars['informations']->value)&&$_smarty_tpl->tpl_vars['informations']->value){?>
		<div class="alert alert-info" style="display:block;">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['informations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
				<?php echo $_smarty_tpl->tpl_vars['info']->value;?>
<br/>
			<?php } ?>
		</div>
	<?php }?>

	<?php if (isset($_smarty_tpl->tpl_vars['confirmations']->value)&&count($_smarty_tpl->tpl_vars['confirmations']->value)&&$_smarty_tpl->tpl_vars['confirmations']->value){?>
		<div class="alert alert-success" style="display:block;">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php  $_smarty_tpl->tpl_vars['confirm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['confirm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['confirmations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['confirm']->key => $_smarty_tpl->tpl_vars['confirm']->value){
$_smarty_tpl->tpl_vars['confirm']->_loop = true;
?>
				<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
<br />
			<?php } ?>
		</div>
	<?php }?>

	<?php if (count($_smarty_tpl->tpl_vars['warnings']->value)){?>
		<div class="alert alert-warning">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php if (count($_smarty_tpl->tpl_vars['warnings']->value)>1){?>
				<?php echo smartyTranslate(array('s'=>'There are %d warnings.','sprintf'=>count($_smarty_tpl->tpl_vars['warnings']->value)),$_smarty_tpl);?>

				<span style="margin-left:20px;" id="labelSeeMore">
					<a id="linkSeeMore" href="#" style="text-decoration:underline"><?php echo smartyTranslate(array('s'=>'Click here to see more'),$_smarty_tpl);?>
</a>
					<a id="linkHide" href="#" style="text-decoration:underline;display:none"><?php echo smartyTranslate(array('s'=>'Hide warning'),$_smarty_tpl);?>
</a>
				</span>
			<?php }else{ ?>
				<?php echo smartyTranslate(array('s'=>'There is %d warning.','sprintf'=>count($_smarty_tpl->tpl_vars['warnings']->value)),$_smarty_tpl);?>

			<?php }?>
			<ul style="display:<?php if (count($_smarty_tpl->tpl_vars['warnings']->value)>1){?>none<?php }else{ ?>block<?php }?>;" id="seeMore">
			<?php  $_smarty_tpl->tpl_vars['warning'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['warning']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['warnings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['warning']->key => $_smarty_tpl->tpl_vars['warning']->value){
$_smarty_tpl->tpl_vars['warning']->_loop = true;
?>
				<li><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
</li>
			<?php } ?>
			</ul>
		</div>
	<?php }?>
	<?php echo $_smarty_tpl->tpl_vars['page']->value;?>

<?php }?>
<?php }} ?>