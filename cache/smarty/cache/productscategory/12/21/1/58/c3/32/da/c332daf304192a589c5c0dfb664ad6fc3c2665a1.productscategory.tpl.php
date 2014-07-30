<?php /*%%SmartyHeaderCode:879453d8fa9de7dde3-98417682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c332daf304192a589c5c0dfb664ad6fc3c2665a1' => 
    array (
      0 => 'C:\\wamp\\www\\padrao3\\themes\\theme593\\modules\\productscategory\\productscategory.tpl',
      1 => 1406694523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '879453d8fa9de7dde3-98417682',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53d903740cd489_30956572',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d903740cd489_30956572')) {function content_53d903740cd489_30956572($_smarty_tpl) {?>	<section class="page_product_box blockproductscategory">
		<h3>1 outras opções<span class="icon-toggle"></span></h3>
    	<div id="block-category-slider" class="carusel-inner responsive  toggle_content">
        	<ul id="carouselproduct" class="carousel-ul">
			                <li class="item">
                    <a href="http://localhost:8080/padrao3/feminino/11-CALVIN-KLEIN-JEANS.html" class="lnk_img" title="CALVIN KLEIN JEANS"><img src="http://localhost:8080/padrao3/27-medium_default/CALVIN-KLEIN-JEANS.jpg" alt="CALVIN KLEIN JEANS" /></a>
                        <a class="product_link" href="http://localhost:8080/padrao3/feminino/11-CALVIN-KLEIN-JEANS.html" title="CALVIN KLEIN JEANS">CALVIN KLEIN...</a>
                                    </li>
			        	</ul>

            	<a class="prev" id="cat_prev" href="#"></a>
				<a class="next" id="cat_next" href="#"></a>
            </div>
</section>
<script type="text/javascript">
	$("#carouselproduct").carouFredSel({
		debug: true,
		circular: true,
        infinite: true,
		responsive: true,
		align   : "center",
		width: '100%',
	    auto	: {
    		play	: 1,
	    	timeoutDuration :15000
	    },
		
	    items	: {
					
		visible: {
					min: 2,
					max: 6
					 },
					 width:167,
		
		},		
		scroll	: {
			items	: 1,
			pauseOnHover:false
		},
		prev	: {
			button	: "#cat_prev"
		},
		next	: {
			button	: "#cat_next"
		},
		swipe: {
					onMouse: true,
					onTouch: true
			   }
	}, 
	{
	    classnames		: {
		    selected		: "selected",
		    hidden			: "hidden",
		    disabled		: "disabled",
		    paused			: "paused",
		    stopped			: "stopped"
	    },

	});
	</script>
<?php }} ?>