<?php /* Smarty version Smarty-3.1.19, created on 2016-05-31 07:44:15
         compiled from "/Applications/MAMP/htdocs/prestashop/themes/ap_juice/modules/blockviewed/blockviewed.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1173507996574d790f1fa2f3-54036963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0cd97a67d18fa6dc2f63b83ab86ad3e3f817e8f' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/themes/ap_juice/modules/blockviewed/blockviewed.tpl',
      1 => 1464694748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1173507996574d790f1fa2f3-54036963',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'productsViewedObj' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_574d790f201515_45180862',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574d790f201515_45180862')) {function content_574d790f201515_45180862($_smarty_tpl) {?>

<!-- Block Viewed products -->
<div id="viewed-products_block_left" class="block">
	<h4 class="title_block"><?php echo smartyTranslate(array('s'=>'Viewed products','mod'=>'blockviewed'),$_smarty_tpl);?>
</h4>
	<div class="block_content">
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./sub/product/sidebar-obj.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['productsViewedObj']->value,'mod'=>'blockspecials'), 0);?>
 
	</div>
</div>
<?php }} ?>
