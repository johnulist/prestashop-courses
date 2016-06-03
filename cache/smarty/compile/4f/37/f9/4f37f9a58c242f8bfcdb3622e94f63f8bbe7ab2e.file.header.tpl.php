<?php /* Smarty version Smarty-3.1.19, created on 2016-05-31 07:39:56
         compiled from "/Applications/MAMP/htdocs/prestashop/modules/appagebuilder/views/templates/hook/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:543187895574d780c4217f6-86246605%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f37f9a58c242f8bfcdb3622e94f63f8bbe7ab2e' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/modules/appagebuilder/views/templates/hook/header.tpl',
      1 => 1464694749,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '543187895574d780c4217f6-86246605',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ap_header_config' => 0,
    'leo_customajax' => 0,
    'leo_customajax_pn' => 0,
    'leo_customajax_img' => 0,
    'leo_customajax_tran' => 0,
    'leo_customajax_count' => 0,
    'leo_customajax_acolor' => 0,
    'homeSize' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_574d780c46ae27_36449829',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574d780c46ae27_36449829')) {function content_574d780c46ae27_36449829($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\header -->
<?php if (isset($_smarty_tpl->tpl_vars['ap_header_config']->value)&&isset($_smarty_tpl->tpl_vars['leo_customajax']->value)) {?>
<script type='text/javascript'>
        var leoOption = {
		productNumber:<?php if ($_smarty_tpl->tpl_vars['leo_customajax_pn']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_customajax_pn']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>0<?php }?>,
		productInfo:<?php if ($_smarty_tpl->tpl_vars['leo_customajax_img']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_customajax_img']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>0<?php }?>,
		productTran:<?php if ($_smarty_tpl->tpl_vars['leo_customajax_tran']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_customajax_tran']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>0<?php }?>,
		productCdown: <?php if ($_smarty_tpl->tpl_vars['leo_customajax_count']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_customajax_count']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>0<?php }?>,
		productColor: <?php if ($_smarty_tpl->tpl_vars['leo_customajax_acolor']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_customajax_acolor']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>0<?php }?>,
		homeWidth: <?php if ($_smarty_tpl->tpl_vars['homeSize']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homeSize']->value['width'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>0<?php }?>,
		homeheight: <?php if ($_smarty_tpl->tpl_vars['homeSize']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homeSize']->value['height'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>0<?php }?>,
	}

        $(document).ready(function(){	
            var leoCustomAjax = new $.LeoCustomAjax();
            leoCustomAjax.processAjax();
        });
	<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ap_header_config']->value, ENT_QUOTES, 'UTF-8', true);?>

</script>
<?php }?><?php }} ?>
