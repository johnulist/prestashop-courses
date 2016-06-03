<?php /* Smarty version Smarty-3.1.19, created on 2016-05-31 07:39:57
         compiled from "/Applications/MAMP/htdocs/prestashop/modules/appagebuilder/views/templates/hook/ApSlideShow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:268098454574d780d98f731-02574557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '146a5af8e485532fa1e30c9ee34ac3deac031d7b' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/modules/appagebuilder/views/templates/hook/ApSlideShow.tpl',
      1 => 1464694749,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '268098454574d780d98f731-02574557',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formAtts' => 0,
    'content_slider' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_574d780d9a13c6_08532912',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574d780d9a13c6_08532912')) {function content_574d780d9a13c6_08532912($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApSlideShow -->
<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['isEnabled'])&&$_smarty_tpl->tpl_vars['formAtts']->value['isEnabled']==true) {?>
<div id="slideshow-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['form_id'], ENT_QUOTES, 'UTF-8', true);?>
" class="ApSlideShow">
	<?php if (isset($_smarty_tpl->tpl_vars['content_slider']->value)) {?>
		<?php echo $_smarty_tpl->tpl_vars['content_slider']->value;?>

	<?php }?>
</div>
<?php }?><?php }} ?>
