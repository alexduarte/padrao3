<?php /*%%SmartyHeaderCode:2285953d875207f5509-60165602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7d4798f9a68ef440ce2d6ee671aaeaea91194fd' => 
    array (
      0 => 'C:\\wamp\\www\\padrao3\\themes\\theme593\\modules\\blockmyaccountfooter\\blockmyaccountfooter.tpl',
      1 => 1406694523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2285953d875207f5509-60165602',
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53d87520a00cd0_46232945',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d87520a00cd0_46232945')) {function content_53d87520a00cd0_46232945($_smarty_tpl) {?><!-- Block myaccount module -->
<section class="block blockmyaccountfooter span4">
	<h4>Minha Conta</h4>
		<ul class="list-footer toggle_content clearfix">
			<li><a href="http://localhost:8080/padrao3/order-history" title="List of my orders" rel="nofollow">Minhas Compras</a></li>
						<li><a href="http://localhost:8080/padrao3/order-slip" title="List of my credit slips" rel="nofollow">Vales de créditos</a></li>
			<li><a href="http://localhost:8080/padrao3/addresses" title="List of my addresses" rel="nofollow">Meus endereços</a></li>
			<li><a href="http://localhost:8080/padrao3/identity" title="Gerenciar minhas informações pessoais" rel="nofollow">Minhas Informações</a></li>
						
		</ul>    		
</section>
<!-- /Block myaccount module -->
<?php }} ?>