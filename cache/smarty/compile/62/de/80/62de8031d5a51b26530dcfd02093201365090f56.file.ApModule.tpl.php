<?php /* Smarty version Smarty-3.1.19, created on 2016-05-31 08:15:00
         compiled from "/Applications/MAMP/htdocs/prestashop/modules/appagebuilder/views/templates/admin/ap_page_builder_shortcodes/ApModule.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1247571921574d80441ec961-69197371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62de8031d5a51b26530dcfd02093201365090f56' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/modules/appagebuilder/views/templates/admin/ap_page_builder_shortcodes/ApModule.tpl',
      1 => 1464694749,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1247571921574d80441ec961-69197371',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'apInfo' => 0,
    'formAtts' => 0,
    'moduleDir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_574d8044297889_73237210',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574d8044297889_73237210')) {function content_574d8044297889_73237210($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\admin\ap_page_builder_shortcodes\ApModule -->
<div <?php if (!isset($_smarty_tpl->tpl_vars['apInfo']->value)) {?>id="default_widget"<?php }?> class="widget-row clearfix<?php if (isset($_smarty_tpl->tpl_vars['apInfo']->value)) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['apInfo']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php if (isset($_smarty_tpl->tpl_vars['apInfo']->value['icon_class'])) {?> widget-icon<?php }?><?php }?><?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value)) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['form_id'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['apInfo']->value)) {?>data-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['apInfo']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>>
    <div class="widget-controll-top pull-right">
        <a href="javascript:void(0)" title="<?php echo smartyTranslate(array('s'=>'Drag to sort Widget','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="widget-action waction-drag label-tooltip"><i class="icon-move"></i> </a>
        <a href="javascript:void(0)" title="<?php echo smartyTranslate(array('s'=>'Disable or Enable Column','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="widget-action btn-status<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['active'])&&!$_smarty_tpl->tpl_vars['formAtts']->value['active']) {?> deactive<?php } else { ?> active<?php }?> label-tooltip"><i class="icon-ok"></i></a>
        <a href="javascript:void(0)" title="<?php echo smartyTranslate(array('s'=>'Edit Widget','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="widget-action btn-edit label-tooltip" <?php if (isset($_smarty_tpl->tpl_vars['apInfo']->value)) {?>data-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['apInfo']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>><i class="icon-pencil"></i></a>
        <a href="javascript:void(0)" title="<?php echo smartyTranslate(array('s'=>'Duplicate Widget','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="widget-action btn-duplicate label-tooltip"><i class="icon-paste"></i></a>
        <a href="javascript:void(0)" title="<?php echo smartyTranslate(array('s'=>'Delete Column','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="widget-action btn-delete label-tooltip"><i class="icon-trash"></i></a>
    </div>
    <div class="widget-content">
        <img class="w-img" width="16" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['moduleDir']->value, ENT_QUOTES, 'UTF-8', true);?>
appagebuilder/logo.gif" title="<?php echo smartyTranslate(array('s'=>'Appolo Widget','mod'=>'appagebuilder'),$_smarty_tpl);?>
" alt="<?php echo smartyTranslate(array('s'=>'Appolo Widget','mod'=>'appagebuilder'),$_smarty_tpl);?>
"/>
        <i class="icon w-icon<?php if (isset($_smarty_tpl->tpl_vars['apInfo']->value)&&isset($_smarty_tpl->tpl_vars['apInfo']->value['icon_class'])) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['apInfo']->value['icon_class'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"></i>
        <a href="javascript:void(0);" title="" class="widget-title">
			<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])&&$_smarty_tpl->tpl_vars['formAtts']->value['title']) {?><?php echo htmlspecialchars(rtrim($_smarty_tpl->tpl_vars['formAtts']->value['title']), ENT_QUOTES, 'UTF-8', true);?>
 - 
			<?php } elseif (isset($_smarty_tpl->tpl_vars['formAtts']->value['name_module'])&&$_smarty_tpl->tpl_vars['formAtts']->value['name_module']) {?><?php echo htmlspecialchars(htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['name_module'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8', true);?>
 - 
			<?php }?>
		
			<?php if (isset($_smarty_tpl->tpl_vars['apInfo']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['apInfo']->value['label'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></a>
    </div>
</div><?php }} ?>
