<?php /* Smarty version Smarty-3.1.19, created on 2016-05-31 07:39:56
         compiled from "/Applications/MAMP/htdocs/prestashop/modules/leobootstrapmenu/views/widgets/widget_html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:756030010574d780c731ee6-35347157%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad30b2e544082bbd21b91a1ab290b2377e951926' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/modules/leobootstrapmenu/views/widgets/widget_html.tpl',
      1 => 1464694749,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '756030010574d780c731ee6-35347157',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'html' => 0,
    'widget_heading' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_574d780c747f54_96923391',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574d780c747f54_96923391')) {function content_574d780c747f54_96923391($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['html']->value)) {?>
<div class="widget-html">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<div class="menu-title">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</div>
	<?php }?>
	<div class="widget-inner">
		<?php echo $_smarty_tpl->tpl_vars['html']->value;?>

	</div>
</div>
<?php }?><?php }} ?>
