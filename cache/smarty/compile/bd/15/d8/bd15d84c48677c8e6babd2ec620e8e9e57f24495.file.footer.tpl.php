<?php /* Smarty version Smarty-3.1.14, created on 2014-07-30 02:31:29
         compiled from "C:\wamp\www\padrao3\themes\theme593\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2929853d8752172e772-71535380%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd15d84c48677c8e6babd2ec620e8e9e57f24495' => 
    array (
      0 => 'C:\\wamp\\www\\padrao3\\themes\\theme593\\footer.tpl',
      1 => 1406694522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2929853d8752172e772-71535380',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53d87521765289_72315466',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d87521765289_72315466')) {function content_53d87521765289_72315466($_smarty_tpl) {?>		<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>
  </div>        	
  
  
	    
                         <aside id="right_column"  class="span3 column right_home">   
                               <?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>

                                </aside>
                     
                              
    
  </div>
</div></div>
 <div class="footer-bg-mob">
                <footer class="container ">
                        
                                
                                        <div class="row modules">
                                                <?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

                                        </div>
                                    
                         </div>
                </footer> 
      </div>          
                </div>
</div></div>
  <?php }?>

</body>
</html>
<?php }} ?>