<?php /*%%SmartyHeaderCode:333753d8751f541726-11844785%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de7b952072469cf6d1a9094c6afb939428e0e23a' => 
    array (
      0 => 'C:\\wamp\\www\\padrao3\\themes\\theme593\\modules\\blockmanufacturer\\blockmanufacturer.tpl',
      1 => 1406694523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '333753d8751f541726-11844785',
  'variables' => 
  array (
    'display_link_manufacturer' => 0,
    'manufacturers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'manufacturer' => 0,
    'link' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53d8751f777e93_93752318',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d8751f777e93_93752318')) {function content_53d8751f777e93_93752318($_smarty_tpl) {?><!-- Block manufacturers module -->
<section id="manufacturers_block_left" class="block blockmanufacturer column_box">
	<h4 class="title_block"><span>Fabricantes</span><span class="column_icon_toggle"></span></h4>
	<div class="block_content toggle_content">
		<ul class="store_list">
					<li class="last_item"><a href="http://localhost:8080/padrao3/1_fashion-manufacturer" title="More about Fashion Manufacturer"><i class="icon-ok"></i>Fashion Manufacturer</a></li>
				</ul>
				<form action="/padrao3/index.php" method="get">
			<p>
				<select id="manufacturer_list" onchange="autoUrl('manufacturer_list', '');">
					<option value="0">Todos os fabricantes</option>
									<option value="http://localhost:8080/padrao3/1_fashion-manufacturer">Fashion Manufacturer</option>
								</select>
			</p>
		</form>
		</div>
</section>
<!-- /Block manufacturers module -->
<?php }} ?>