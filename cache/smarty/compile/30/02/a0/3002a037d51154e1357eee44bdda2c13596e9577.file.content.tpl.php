<?php /* Smarty version Smarty-3.1.19, created on 2016-05-27 05:52:02
         compiled from "/Applications/MAMP/htdocs/prestashop/admin5085bpnls/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1857310859574818c2cbc117-93370067%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3002a037d51154e1357eee44bdda2c13596e9577' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/admin5085bpnls/themes/default/template/content.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1857310859574818c2cbc117-93370067',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_574818c2cc4ae4_14780887',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574818c2cc4ae4_14780887')) {function content_574818c2cc4ae4_14780887($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
