<?php /* Smarty version Smarty-3.1.19, created on 2016-05-31 07:39:56
         compiled from "/Applications/MAMP/htdocs/prestashop/modules/appagebuilder/views/templates/hook/htab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:467771744574d780ccdb232-66270911%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21c3ba0bebb3aae078931dc2a64a8bf3969e965c' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/modules/appagebuilder/views/templates/hook/htab.tpl',
      1 => 1464694749,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '467771744574d780ccdb232-66270911',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ap_header_config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_574d780cce5328_21929887',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574d780cce5328_21929887')) {function content_574d780cce5328_21929887($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\htab -->
<?php if (isset($_smarty_tpl->tpl_vars['ap_header_config']->value)) {?>
<script type='text/javascript'>
	<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ap_header_config']->value, ENT_QUOTES, 'UTF-8', true);?>

</script>
<?php }?><?php }} ?>
