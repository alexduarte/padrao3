<?php /*%%SmartyHeaderCode:2736053d8f66d759c07-16610687%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98fb308361e440305162154c61846fcf79d0087f' => 
    array (
      0 => 'C:\\wamp\\www\\padrao3\\themes\\theme593\\modules\\blocksupplier\\blocksupplier.tpl',
      1 => 1406694523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2736053d8f66d759c07-16610687',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53d8fa95ea4ee5_73398806',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d8fa95ea4ee5_73398806')) {function content_53d8fa95ea4ee5_73398806($_smarty_tpl) {?><!-- Block suppliers module -->
<section id="suppliers_block_left" class="block blocksupplier column_box">
	<h4 class="title_block"><span>Fornecedores</span><span class="column_icon_toggle"></span></h4>
	<div class="block_content toggle_content">
		<ul class="store_list">
					<li class="last_item">
			<a href="http://localhost:8080/padrao3/1__fashion-supplier" title="Encontre mais sobre Fashion Supplier"><i class="icon-ok"></i>Fashion Supplier</a>
		</li>
				</ul>
				<form action="/padrao3/index.php" method="get">
			<p>
				<select id="supplier_list" onchange="autoUrl('supplier_list', '');">
					<option value="0">Todos os fornecedores</option>
									<option value="http://localhost:8080/padrao3/1__fashion-supplier">Fashion Supplier</option>
								</select>
			</p>
		</form>
		</div>
</section>
<!-- /Block suppliers module -->
<?php }} ?>