<?php /* Smarty version Smarty-3.1.19, created on 2016-05-31 08:15:00
         compiled from "/Applications/MAMP/htdocs/prestashop/modules/appagebuilder/views/templates/admin/ap_page_builder_shortcodes/ApTabs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1645067597574d8044a78e22-47439491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd74eaea8c039bd7094bf33b000a28c9db2ccd393' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/modules/appagebuilder/views/templates/admin/ap_page_builder_shortcodes/ApTabs.tpl',
      1 => 1464694749,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1645067597574d8044a78e22-47439491',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isSubTab' => 0,
    'apInfo' => 0,
    'formAtts' => 0,
    'foo' => 0,
    'subTabContent' => 0,
    'subTab' => 0,
    'apContent' => 0,
    'tabID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_574d8044af4305_51983241',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574d8044af4305_51983241')) {function content_574d8044af4305_51983241($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\admin\ap_page_builder_shortcodes\ApTabs -->
<?php if (!isset($_smarty_tpl->tpl_vars['isSubTab']->value)) {?>
<div <?php if (!isset($_smarty_tpl->tpl_vars['apInfo']->value)) {?>id="default_ApTabs"<?php }?> class="widget-row clearfix ApTabs<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value)) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['form_id'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" data-type='ApTabs'>
    <div class="float-center-control text-center">
        <a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo smartyTranslate(array('s'=>'Drag to sort group','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="tab-action waction-drag label-tooltip"><i class="icon-move"></i> </a>
        <span><?php echo smartyTranslate(array('s'=>'Widget Tab','mod'=>'appagebuilder'),$_smarty_tpl);?>
</span>
        
        <a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo smartyTranslate(array('s'=>'Edit Tabs','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="tab-action btn-edit label-tooltip" data-type="ApTabs"><i class="icon-edit"></i></a>
        <a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo smartyTranslate(array('s'=>'Delete Tabs','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="tab-action btn-delete label-tooltip"><i class="icon-trash"></i></a>
        <a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo smartyTranslate(array('s'=>'Duplicate Tabs','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="tab-action btn-duplicate label-tooltip"><i class="icon-paste"></i></a>
        <a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo smartyTranslate(array('s'=>'Disable or Enable Tab','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="tab-action btn-status label-tooltip<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['active'])&&!$_smarty_tpl->tpl_vars['formAtts']->value['active']) {?> deactive<?php } else { ?> active<?php }?>"><i class="icon-ok"></i></a>
    </div>
<?php if (!isset($_smarty_tpl->tpl_vars['apInfo']->value)) {?>
    <ul class="widget-container-heading nav nav-tabs" role="tablist">
        <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 3+1 - (1) : 1-(3)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
            <li <?php if ($_smarty_tpl->tpl_vars['foo']->value==3) {?>id="default_tabnav"<?php }?> class="<?php if ($_smarty_tpl->tpl_vars['foo']->value==1) {?>active<?php }?>">
                <a href="#tab<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value, ENT_QUOTES, 'UTF-8', true);?>
" role="tab" data-toggle="tab"><?php if ($_smarty_tpl->tpl_vars['foo']->value==3) {?><?php echo smartyTranslate(array('s'=>'New Tab','mod'=>'appagebuilder'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Tab','mod'=>'appagebuilder'),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></a></li>
        <?php }} ?>
        <li class="tab-button"><a href="javascript:void(0)" class="btn-add-tab"><i class="icon-plus"></i> <?php echo smartyTranslate(array('s'=>'Add','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a></li>
    </ul>
    
    <div class="tab-content widget-container-content">
        <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 3+1 - (1) : 1-(3)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
            <div <?php if ($_smarty_tpl->tpl_vars['foo']->value==3) {?>id="default_tabcontent"<?php } else { ?>id="tab<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['foo']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> class="tab-pane<?php if ($_smarty_tpl->tpl_vars['foo']->value==1) {?> active<?php }?> widget-wrapper-content">
                <div class="text-center tab-content-control">
                    <span><?php echo smartyTranslate(array('s'=>'Tab','mod'=>'appagebuilder'),$_smarty_tpl);?>
</span>
                    <a href="javascript:void(0)" class="tabcontent-action btn-new-widget label-tooltip" title=""><i class="icon-plus-sign"></i></a>
                    <a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo smartyTranslate(array('s'=>'Edit Tab','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="tabcontent-action btn-edit label-tooltip" data-type="apSubTabs"><i class="icon-edit"></i></a>
                    <a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo smartyTranslate(array('s'=>'Delete Tab','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="tabcontent-action btn-delete label-tooltip tab"><i class="icon-trash"></i></a>
                    <a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo smartyTranslate(array('s'=>'Duplicate Tab','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="tabcontent-action btn-duplicate label-tooltip"><i class="icon-paste"></i></a>
                </div>
                <div class="subwidget-content">
                    
                </div>
            </div>
        <?php }} ?>
    </div>
<?php } else { ?>
    <ul class="widget-container-heading nav nav-tabs" role="tablist">
        <?php  $_smarty_tpl->tpl_vars['subTab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subTab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subTabContent']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subTab']->key => $_smarty_tpl->tpl_vars['subTab']->value) {
$_smarty_tpl->tpl_vars['subTab']->_loop = true;
?>
            <li class="">
                <a href="#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subTab']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subTab']->value['form_id'], ENT_QUOTES, 'UTF-8', true);?>
" role="tab" data-toggle="tab">
                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subTab']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                </a>
            </li>
        <?php } ?>
        <li class="tab-button"><a href="javascript:void(0)" class="btn-add-tab"><i class="icon-plus"></i> <?php echo smartyTranslate(array('s'=>'Add','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a></li>
    </ul>

    <div class="tab-content">
        <?php echo $_smarty_tpl->tpl_vars['apContent']->value;?>

    </div>
<?php }?>
</div>
<?php } else { ?>
    <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tabID']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="tab-pane widget-wrapper-content">
        <div class="text-center tab-content-control">
            <span><?php echo smartyTranslate(array('s'=>'Tab','mod'=>'appagebuilder'),$_smarty_tpl);?>
</span>
            <a href="javascript:void(0)" class="tabcontent-action btn-new-widget label-tooltip" title=""><i class="icon-plus-sign"></i></a>
            <a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo smartyTranslate(array('s'=>'Edit Tab','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="tabcontent-action btn-edit label-tooltip" data-type="apSubTabs"><i class="icon-edit"></i></a>
            <a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo smartyTranslate(array('s'=>'Delete Tab','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="tabcontent-action btn-delete label-tooltip tab"><i class="icon-trash"></i></a>
            <a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo smartyTranslate(array('s'=>'Duplicate Tab','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="tabcontent-action btn-duplicate label-tooltip"><i class="icon-paste"></i></a>
        </div>
        <div class="subwidget-content">
            <?php echo $_smarty_tpl->tpl_vars['apContent']->value;?>

        </div>
    </div>
<?php }?>
<?php }} ?>
