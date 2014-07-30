<?php /* Smarty version Smarty-3.1.14, created on 2014-07-30 11:43:11
         compiled from "C:\wamp\www\padrao3\modules\addhomefeatured\addhomefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1306953d8f66f421887-84660201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95d333b14efc752dc9b800199f242072b9cd2461' => 
    array (
      0 => 'C:\\wamp\\www\\padrao3\\modules\\addhomefeatured\\addhomefeatured.tpl',
      1 => 1406694523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1306953d8f66f421887-84660201',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
    'link' => 0,
    'addimages' => 0,
    'k' => 0,
    'v' => 0,
    'restricted_country_mode' => 0,
    'PS_CATALOG_MODE' => 0,
    'priceDisplay' => 0,
    'add_prod_display' => 0,
    'static_token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53d8f66f8c8f03_11167695',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d8f66f8c8f03_11167695')) {function content_53d8f66f8c8f03_11167695($_smarty_tpl) {?><div class="clearfix"></div>
<!-- MODULE Home Featured Products -->
<section class="addhomefeatured">
  <h4><span><?php echo smartyTranslate(array('s'=>'Featured products','mod'=>'addhomefeatured'),$_smarty_tpl);?>
</span></h4> 
  	<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value){?>
         <ul class="row">
          <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['homeFeaturedProducts']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['homeFeaturedProducts']['iteration']++;
?>
          <li class="ajax_block_product span3  <?php if (!($_smarty_tpl->getVariable('smarty')->value['foreach']['homeFeaturedProducts']['iteration'] % 4)){?> omega<?php }?> num-<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['homeFeaturedProducts']['iteration'];?>
<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['homeFeaturedProducts']['iteration']==1||$_smarty_tpl->getVariable('smarty')->value['foreach']['homeFeaturedProducts']['iteration']==5||$_smarty_tpl->getVariable('smarty')->value['foreach']['homeFeaturedProducts']['iteration']==9){?> alpha<?php }?>">
                <div class="featured_li"> 
                    <a class="product_image" href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php if ($_smarty_tpl->tpl_vars['product']->value['price_without_reduction']!=$_smarty_tpl->tpl_vars['product']->value['price']){?><?php echo smartyTranslate(array('s'=>'Sale!','mod'=>'addhomefeatured'),$_smarty_tpl);?>
  <?php echo smartyTranslate(array('s'=>'and','mod'=>'addhomefeatured'),$_smarty_tpl);?>
  <?php }?><?php if (isset($_smarty_tpl->tpl_vars['product']->value['new'])&&$_smarty_tpl->tpl_vars['product']->value['new']==1){?>  <?php echo smartyTranslate(array('s'=>'New!','mod'=>'addhomefeatured'),$_smarty_tpl);?>
<?php }?>" rel="tooltip" data-placement="bottom" data-original-title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],45,'...'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" > 
                              <img  src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" class="main-img"/> 
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['addimages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                           <?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['product']->value['id_product']&&$_smarty_tpl->tpl_vars['v']->value!=''){?>
                           		<img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],(($_smarty_tpl->tpl_vars['product']->value['id_product']).("-")).($_smarty_tpl->tpl_vars['v']->value),'home_default');?>
"  alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" style="display:none;"  class="next-img" />
                            <?php }?>
                        <?php } ?> 
                    </a> 
                    <div>
                        <h5><a class="product_link" href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title=""><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],45,'...'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a></h5>
                            <p class="product_desc"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['description_short']),65,'...');?>
</p>                 
                                <div class="clearfix">
                                <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
                                    <span class="price">
                                    <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?>
                                    </span>
                                <?php }?>      
         <?php if ($_smarty_tpl->tpl_vars['product']->value['price_without_reduction']!=$_smarty_tpl->tpl_vars['product']->value['price']){?><span class="price-drop-feacherd"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_without_reduction']),$_smarty_tpl);?>
</span><?php }?>
         </div>
                   <?php if (($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']==0||(isset($_smarty_tpl->tpl_vars['add_prod_display']->value)&&($_smarty_tpl->tpl_vars['add_prod_display']->value==1)))&&$_smarty_tpl->tpl_vars['product']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['product']->value['minimal_quantity']==1&&$_smarty_tpl->tpl_vars['product']->value['customizable']!=2&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
                    <?php if (($_smarty_tpl->tpl_vars['product']->value['quantity']>0||$_smarty_tpl->tpl_vars['product']->value['allow_oosp'])){?> 
                        <a class="exclusive ajax_add_to_cart_button" rel="ajax_id_product_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('cart.php');?>
?qty=1&amp;id_product=<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
&amp;token=<?php echo $_smarty_tpl->tpl_vars['static_token']->value;?>
&amp;add">
                        <span><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'addhomefeatured'),$_smarty_tpl);?>
</span>
                        </a> 
                    <?php }else{ ?> 
                      <span class="exclusive"><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'addhomefeatured'),$_smarty_tpl);?>
</span> <?php }?>
                    <?php }?> 
                        <a class="button" href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
"  rel="tooltip" data-placement="bottom"><?php echo smartyTranslate(array('s'=>'View','mod'=>'addhomefeatured'),$_smarty_tpl);?>
</a>  
                      
                    </div>
                </div>
          </li>
          <?php } ?>
        </ul>
  <?php }else{ ?>
 	 <p><?php echo smartyTranslate(array('s'=>'No featured products','mod'=>'addhomefeatured'),$_smarty_tpl);?>
</p>
  <?php }?> 
</section>
 <script>
 	$(document).ready(function() {
$(this).find(".addhomefeatured ul li .main-img").mouseover(function () { 
   $(this).next(".addhomefeatured ul li .next-img").stop(true, true).fadeIn(600, 'linear'); 
  });  
  $(".addhomefeatured ul li .next-img").mouseleave(function () { 
      $(".addhomefeatured ul li .next-img").stop(true, true).fadeOut(600, 'linear');
  });
});
 </script>
<!-- /MODULE Home Featured Products --><?php }} ?>