<?php /* Smarty version Smarty-3.1.14, created on 2014-07-30 11:47:09
         compiled from "C:\wamp\www\padrao3\modules\cpfmodule\cpfmodule.tpl" */ ?>
<?php /*%%SmartyHeaderCode:282753d8f75dc82100-38002734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c13ccec5360fb7ac46d88729532517ed5a421d18' => 
    array (
      0 => 'C:\\wamp\\www\\padrao3\\modules\\cpfmodule\\cpfmodule.tpl',
      1 => 1406028829,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '282753d8f75dc82100-38002734',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this_path_ssl' => 0,
    'required' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53d8f75df16384_14333101',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d8f75df16384_14333101')) {function content_53d8f75df16384_14333101($_smarty_tpl) {?><!-- MODULE CPF-->
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['this_path_ssl']->value;?>
js/maskedinput.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['this_path_ssl']->value;?>
js/functions.js"></script>
<script type="text/javascript">
    var urlValidatecnpj = '<?php echo $_smarty_tpl->tpl_vars['this_path_ssl']->value;?>
validate2.php?cnpj=';
    var urlValidatecpf = '<?php echo $_smarty_tpl->tpl_vars['this_path_ssl']->value;?>
validate2.php?cpf=';
    var urlCep = '<?php echo $_smarty_tpl->tpl_vars['this_path_ssl']->value;?>
getCep.php?cep=';
</script>
<?php if ($_smarty_tpl->tpl_vars['required']->value=="1"){?>
<script type="text/javascript">

$("#account-creation_form").submit(function() {
    if(document.getElementById("id_pf").checked){ 
        return validateCpf();
        //executa validação de cpf, caso o mesmo seja invalido e nao deixa submeter o formulario     
        if($.trim($("#cpf").val()) == "")
            {
                document.getElementById("alertcpf").style.color = "red";
                document.getElementById("alertcpf").innerHTML = "CPF é de preenchimento obrigatório!";
                return false;  
            }
            if($.trim($("#rg").val()) == "")
            {
                 document.getElementById("alertrg").style.color = "red";
                 document.getElementById("alertrg").innerHTML = "RG é de preenchimento obrigatório!";
                 return false;
            }
            return true; 
    }
    else{ 
        //executa validação de cnpj, caso o mesmo seja invalido e nao deixa submeter o formulario
        return validateCnpj();                
        if($.trim($("#cnpj").val()) == "")
            {
                document.getElementById("alertcnpj").style.color = "red";
                document.getElementById("alertcnpj").innerHTML = "CNPJ é de preenchimento obrigatório!";
                return false;  
            }
            if($.trim($("#ie").val()) == "")
            {
                 document.getElementById("alertie").style.color = "red";
                 document.getElementById("alertie").innerHTML = "Número da inscrição estadual é de preenchimento obrigatório!";
                 return false;
            }
            return true;
    }

});

  

</script>
<?php }?>
<?php $_smarty_tpl->tpl_vars["sl_country"] = new Smarty_variable("58", null, 0);?>
<?php $_smarty_tpl->tpl_vars["v.id_country"] = new Smarty_variable("58", null, 0);?>

		<fieldset class="account_creation">
			<h3><?php echo smartyTranslate(array('s'=>'Informações do cliente ou da empresa:','mod'=>'cpfmodule'),$_smarty_tpl);?>
</h3>
           <table width="90%">
           <tr>
           <td>
           <p class="checkbox"> <span style="font-weight:bold;"><?php echo smartyTranslate(array('s'=>'Tipo de Registro:','mod'=>'cpfmodule'),$_smarty_tpl);?>
</span></td>
                 <td><input type="radio" name="citizen" id="id_pj" value="1" onclick="checkMixed(this);" <?php if (isset($_POST['citizen'])&&$_POST['citizen']=='1'){?>checked="checked"<?php }?>/></td>
                 <td><label for="id_pj"><?php echo smartyTranslate(array('s'=>'Pessoa Jurídica','mod'=>'cpfmodule'),$_smarty_tpl);?>
</label></td>
                 <td><input type="radio" name="citizen" id="id_pf" value="2" onclick="checkMixed(this);" <?php if ($_POST['citizen']==null||$_POST['citizen']=='2'){?>checked="checked"<?php }?>/></td>
                 <td><label for="id_pf"><?php echo smartyTranslate(array('s'=>'Pessoa Física','mod'=>'cpfmodule'),$_smarty_tpl);?>
</label></td>
                 </tr>
                 </table>
            </p>
			<div id="cpfdiv" <?php if (isset($_POST['citizen'])&&$_POST['citizen']=='1'){?>style="display:none"<?php }else{ ?>style="display:block"<?php }?>>
			<p class="required text">
				<label for="cpf"  style="font-weight:bold;"><?php echo smartyTranslate(array('s'=>'Número de CPF:','mod'=>'cpfmodule'),$_smarty_tpl);?>
</label>
				<input type="text" class="text" name="cpf" id="cpf" onkepress="validaCPF2(event)" maxlength="14" value="<?php if (isset($_POST['cpf'])){?><?php echo $_POST['cpf'];?>
<?php }?>" onBlur="validateCpf()"  />
    			<sup>*</sup>                                               
                <span style="display:block">
                <span class="form_info"><?php echo smartyTranslate(array('s'=>'(somente números)','mod'=>'cpfmodule'),$_smarty_tpl);?>
</span>
                <span id="alertcpf" class="alertcpf" name="alertcpf" ></span>
                <div style="clear:both"></div>
                </span> 
  			</p><br />
  			<p class="required text">
                <label for="rg"  style="font-weight:bold;"><?php echo smartyTranslate(array('s'=>'Número de RG:','mod'=>'cpfmodule'),$_smarty_tpl);?>
</label>
				<input type="text" class="text" name="rg" id="rg" maxlength="11" value="<?php if (isset($_POST['rg'])){?><?php echo $_POST['rg'];?>
<?php }?>" />
    			<sup>*</sup>               
                <span id="alertrg" class="alertrg" name="alertrg" style="position:absolute;"></span>
  			</p>
            </div>
            <div id="cnpjdiv" <?php if (isset($_POST['citizen'])&&$_POST['citizen']=='1'){?>style="display:block"<?php }else{ ?>style="display:none"<?php }?>>
   		    <p class="required text">
			    <label for="cnpj"  style="font-weight:bold;"><?php echo smartyTranslate(array('s'=>'Número de CNPJ:','mod'=>'cpfmodule'),$_smarty_tpl);?>
</label>
			    <input type="text" class="text" name="cnpj" id="cnpj" maxlength="19" value="<?php if (isset($_POST['cnpj'])){?><?php echo $_POST['cnpj'];?>
<?php }?>" onBlur="validateCnpj()" />
    			<sup>*</sup>
                <span style="display:block">
                <span class="form_info"><?php echo smartyTranslate(array('s'=>'(somente números)','mod'=>'cpfmodule'),$_smarty_tpl);?>
</span>
                <span id="alertcnpj" class="alertcnpj" name="alertcnpj"></span>
                <div style="clear:both"></div>
                </span>
			</p><br />
     		<p class="required text">
                <label for="ie"  style="font-weight:bold;"><?php echo smartyTranslate(array('s'=>'Número de IE:','mod'=>'cpfmodule'),$_smarty_tpl);?>
</label>
				<input type="text" class="text" name="ie" id="ie" maxlength="11" value="<?php if (isset($_POST['ie'])){?><?php echo $_POST['ie'];?>
<?php }?>" />
    			<sup>*</sup>                
                <span id="alertie" class="alertie" name="alertie" style="position:absolute;"></span>
  			</p>
            </div>
            <br />
		</fieldset>
<!-- /MODULE CPF-->
<?php }} ?>