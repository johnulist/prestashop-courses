<?php /* Smarty version Smarty-3.1.19, created on 2016-05-31 08:15:00
         compiled from "/Applications/MAMP/htdocs/prestashop/modules/appagebuilder/views/templates/admin/ap_page_builder_shortcodes/ApColumn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1718818408574d80442abb41-80000062%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a7e6474c0998a5fd2bb08181a9cee5ee04640d8' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/modules/appagebuilder/views/templates/admin/ap_page_builder_shortcodes/ApColumn.tpl',
      1 => 1464694749,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1718818408574d80442abb41-80000062',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'apInfo' => 0,
    'colClass' => 0,
    'formAtts' => 0,
    'widthList' => 0,
    'itemWidth' => 0,
    'apContent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_574d8044332028_88901704',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574d8044332028_88901704')) {function content_574d8044332028_88901704($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/Applications/MAMP/htdocs/prestashop/tools/smarty/plugins/modifier.replace.php';
if (!is_callable('smarty_function_math')) include '/Applications/MAMP/htdocs/prestashop/tools/smarty/plugins/function.math.php';
?>
<!-- @file modules\appagebuilder\views\templates\admin\ap_page_builder_shortcodes\ApColumn -->
<div <?php if (!isset($_smarty_tpl->tpl_vars['apInfo']->value)) {?>id="default_column"<?php }?> class="column-row<?php if (!isset($_smarty_tpl->tpl_vars['apInfo']->value)) {?> col-sp-12 col-xs-12 col-sm-12 col-md-12 col-lg-12<?php }?><?php if (isset($_smarty_tpl->tpl_vars['colClass']->value)) {?> <?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['colClass']->value,'.','-'), ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value)) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['form_id'], ENT_QUOTES, 'UTF-8', true);?>
<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['active'])&&!$_smarty_tpl->tpl_vars['formAtts']->value['active']) {?> deactive<?php } else { ?> active<?php }?><?php }?>">
	<div class="cover-column">
		<div class="column-controll-top">
			<a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo smartyTranslate(array('s'=>'Drag to sort Column','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="column-action caction-drag label-tooltip"><i class="icon-move"></i> </a>
			&nbsp;
			<div class="btn-group">
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
					<span><?php echo smartyTranslate(array('s'=>'Column','mod'=>'appagebuilder'),$_smarty_tpl);?>
</span> <span class="caret"></span>
				</button>
				<ul class="dropdown-menu for-column-row" role="menu">
					<li><a href="javascript:void(0)" title="<?php echo smartyTranslate(array('s'=>'Add new Widget','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="column-action btn-new-widget "><i class="icon-plus-sign"></i> <?php echo smartyTranslate(array('s'=>'Add new Widget','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a></li>
					<li><a href="javascript:void(0)" title="<?php echo smartyTranslate(array('s'=>'Edit Column','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="column-action btn-edit " data-type="ApColumn" data-for=".column-row"><i class="icon-pencil"></i> <?php echo smartyTranslate(array('s'=>'Edit Column','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a></li>
					<li><a href="javascript:void(0)" title="<?php echo smartyTranslate(array('s'=>'Delete Column','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="column-action btn-delete "><i class="icon-trash"></i> <?php echo smartyTranslate(array('s'=>'Delete Column','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a></li>
					<li><a href="javascript:void(0)" title="<?php echo smartyTranslate(array('s'=>'Duplicate Group','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="column-action btn-duplicate "><i class="icon-paste"></i> <?php echo smartyTranslate(array('s'=>'Duplicate Column','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a></li>
					<li><a href="javascript:void(0)" title="<?php echo smartyTranslate(array('s'=>'Disable or Enable Column','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="column-action btn-status <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['active'])&&!$_smarty_tpl->tpl_vars['formAtts']->value['active']) {?> deactive<?php } else { ?> active<?php }?>"><i class="icon-ok"></i> <?php echo smartyTranslate(array('s'=>'Disable or Enable Column','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a></li>
				</ul>
			</div> 
		</div>
		<div class="column-controll-right pull-right">
			<a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo smartyTranslate(array('s'=>'Reduce size','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="column-action btn-change-colwidth" data-value="-1"><i class="icon-minus-sign-alt"></i></a>
			<div class="btn-group">
				<button type="button" class="btn" tabindex="-1" data-toggle="dropdown">
					<span class="width-val ap-w-6"></span>
				</button>
				<ul class="dropdown-menu dropdown-menu-right">
					<?php  $_smarty_tpl->tpl_vars['itemWidth'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemWidth']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['widthList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemWidth']->key => $_smarty_tpl->tpl_vars['itemWidth']->value) {
$_smarty_tpl->tpl_vars['itemWidth']->_loop = true;
?>
					<li class="col-<?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['itemWidth']->value,'.','-'), ENT_QUOTES, 'UTF-8', true);?>
">
						<a class="change-colwidth" data-width="<?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['itemWidth']->value,'.','-'), ENT_QUOTES, 'UTF-8', true);?>
" href="javascript:void(0);" tabindex="-1">                                          
							<span data-width="<?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['itemWidth']->value,'.','-'), ENT_QUOTES, 'UTF-8', true);?>
" class="width-val ap-w-<?php if (htmlspecialchars(strpos($_smarty_tpl->tpl_vars['itemWidth']->value,"."), ENT_QUOTES, 'UTF-8', true)) {?><?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['itemWidth']->value,'.','-'), ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['itemWidth']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['itemWidth']->value, ENT_QUOTES, 'UTF-8', true);?>
/12 - ( <?php echo smarty_function_math(array('equation'=>"x/y*100",'x'=>$_smarty_tpl->tpl_vars['itemWidth']->value,'y'=>12,'format'=>"%.2f"),$_smarty_tpl);?>
 % )</span>
						</a>
					</li>
					<?php } ?>
				</ul>
			</div>
			<a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo smartyTranslate(array('s'=>'Increase size','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="column-action btn-change-colwidth" data-value="1"><i class="icon-plus-sign-alt"></i></a>
		</div>
		<div class="column-content">
			<?php if (isset($_smarty_tpl->tpl_vars['apInfo']->value)) {?><?php echo $_smarty_tpl->tpl_vars['apContent']->value;?>
<?php }?>
		</div>
		<div class="column-controll-bottom">
			<a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo smartyTranslate(array('s'=>'Add new Widget','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="column-action btn-new-widget label-tooltip"><i class="icon-plus-sign"></i></a>
			<a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo smartyTranslate(array('s'=>'Edit Column','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="column-action btn-edit label-tooltip" data-type="ApColumn"><i class="icon-pencil"></i></a>
		</div>
	</div>
</div><?php }} ?>
