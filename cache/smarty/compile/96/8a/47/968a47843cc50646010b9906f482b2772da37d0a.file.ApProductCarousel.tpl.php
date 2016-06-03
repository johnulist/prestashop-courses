<?php /* Smarty version Smarty-3.1.19, created on 2016-05-31 07:39:56
         compiled from "/Applications/MAMP/htdocs/prestashop/themes/ap_juice/modules/appagebuilder/views/templates/hook/view-producthome/ApProductCarousel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:327707601574d780c971ce5-64446262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '968a47843cc50646010b9906f482b2772da37d0a' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/themes/ap_juice/modules/appagebuilder/views/templates/hook/view-producthome/ApProductCarousel.tpl',
      1 => 1464694748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '327707601574d780c971ce5-64446262',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formAtts' => 0,
    'apLiveEdit' => 0,
    'products' => 0,
    'apLiveEditEnd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_574d780c99f047_35645062',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574d780c99f047_35645062')) {function content_574d780c99f047_35645062($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApProductCarousel -->
<div class="block products_block exclusive appagebuilder <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['class'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['class'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
	<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>

	<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])&&!empty($_smarty_tpl->tpl_vars['formAtts']->value['title'])) {?>
	<h4 class="title_block">
		<?php echo $_smarty_tpl->tpl_vars['formAtts']->value['title'];?>

	</h4>
	<?php }?>
	<div class="block_content">	
            <?php if (!empty($_smarty_tpl->tpl_vars['products']->value)) {?>
                <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['carousel_type']=="boostrap") {?>
                    <?php echo $_smarty_tpl->getSubTemplate ('./ProductCarousel.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->getSubTemplate ('./ProductOwlCarousel.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php }?>
            <?php } else { ?>
                <p class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No products at this time.','mod'=>'appagebuilder'),$_smarty_tpl);?>
</p>	
            <?php }?>
	</div>
	<?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>

</div><?php }} ?>
