<?php /* Smarty version Smarty-3.1.19, created on 2016-05-31 07:44:15
         compiled from "/Applications/MAMP/htdocs/prestashop/themes/ap_juice/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1984070351574d790f3a66d4-57983337%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e50f90c3081d90ff6a6f7143f6cf4c28da7e3e82' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/themes/ap_juice/category-count.tpl',
      1 => 1464694748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1984070351574d790f3a66d4-57983337',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_574d790f3ce195_34556870',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574d790f3ce195_34556870')) {function content_574d790f3ce195_34556870($_smarty_tpl) {?>
<span class="heading-counter"><?php if ((isset($_smarty_tpl->tpl_vars['category']->value)&&$_smarty_tpl->tpl_vars['category']->value->id==1)||(isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==0)) {?><?php echo smartyTranslate(array('s'=>'There are no products in this category.'),$_smarty_tpl);?>
<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==1) {?><?php echo smartyTranslate(array('s'=>'There is 1 product.'),$_smarty_tpl);?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['nb_products']->value)) {?><?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }?><?php }?></span>
<?php }} ?>
