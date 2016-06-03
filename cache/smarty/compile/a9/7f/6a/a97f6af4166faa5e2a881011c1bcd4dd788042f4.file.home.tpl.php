<?php /* Smarty version Smarty-3.1.19, created on 2016-05-31 08:15:00
         compiled from "/Applications/MAMP/htdocs/prestashop/modules/appagebuilder/views/templates/admin/ap_page_builder_home/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2023227108574d8044703192-67694429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a97f6af4166faa5e2a881011c1bcd4dd788042f4' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/modules/appagebuilder/views/templates/admin/ap_page_builder_home/home.tpl',
      1 => 1464694749,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2023227108574d8044703192-67694429',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errorText' => 0,
    'errorSubmit' => 0,
    'ajaxShortCodeUrl' => 0,
    'currentProfile' => 0,
    'profilesList' => 0,
    'ajaxHomeUrl' => 0,
    'profile' => 0,
    'exportItems' => 0,
    'position' => 0,
    'hookData' => 0,
    'hook' => 0,
    'positions' => 0,
    'listPositions' => 0,
    'currentPosition' => 0,
    'imgModuleLink' => 0,
    'imgController' => 0,
    'checkSaveMultithreading' => 0,
    'checkSaveSubmit' => 0,
    'dataForm' => 0,
    'shortcodeInfos' => 0,
    'languages' => 0,
    'lang_id' => 0,
    'idProfile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_574d8044801e11_40021617',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574d8044801e11_40021617')) {function content_574d8044801e11_40021617($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\admin\ap_page_builder_home\home -->
<?php if (isset($_smarty_tpl->tpl_vars['errorText']->value)&&$_smarty_tpl->tpl_vars['errorText']->value) {?>
<div class="error alert alert-danger">
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errorText']->value, ENT_QUOTES, 'UTF-8', true);?>

</div>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['errorSubmit']->value)&&$_smarty_tpl->tpl_vars['errorSubmit']->value) {?>
<div class="error alert alert-danger">
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errorSubmit']->value, ENT_QUOTES, 'UTF-8', true);?>

</div>
<?php }?>
<form id="form_data_profile" name="form_data_profile" action="<?php echo $_smarty_tpl->tpl_vars['ajaxShortCodeUrl']->value;?>
&submitSaveAndStay" method="post">
	<input id="data_profile" type="hidden" value="" name="data_profile" />
	<input id="data_id_profile" type="hidden" value="" name="data_id_profile" />
	<button class="hidden" type="submit">submit</button>
</form>
<div id="top_wrapper">
    <a class="btn btn-default btn-form-toggle" title="<?php echo smartyTranslate(array('s'=>'Expand or Colapse','mod'=>'appagebuilder'),$_smarty_tpl);?>
">
        <i class="icon-resize-small"></i>
    </a>
    <a class="btn btn-default btn-fwidth width-default" data-width="auto"><?php echo smartyTranslate(array('s'=>'Default','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a>
    <a class="btn btn-default btn-fwidth width-large" data-width="1200"><?php echo smartyTranslate(array('s'=>'Large','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a>
    <a class="btn btn-default btn-fwidth width-medium" data-width="992"><?php echo smartyTranslate(array('s'=>'Medium','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a>
    <a class="btn btn-default btn-fwidth width-small" data-width="768"><?php echo smartyTranslate(array('s'=>'Small','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a>
    <a class="btn btn-default btn-fwidth width-extra-small" data-width="603"><?php echo smartyTranslate(array('s'=>'Extra Small','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a>
    <a class="btn btn-default btn-fwidth width-mobile" data-width="480"><?php echo smartyTranslate(array('s'=>'Mobile','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a>
    <div class="pull-right control-right">
        <div class="dropdown">
            <a id="current_profile" class="btn btn-default" role="button" data-toggle="dropdown" data-target="#" data-id='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentProfile']->value['id_appagebuilder_profiles'], ENT_QUOTES, 'UTF-8', true);?>
'>
              <i class="icon-file-text"></i> <?php echo smartyTranslate(array('s'=>'Current Profile:','mod'=>'appagebuilder'),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentProfile']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['profilesList']->value) {?> <span class="caret"></span><?php }?>
            </a>
            <?php if ($_smarty_tpl->tpl_vars['profilesList']->value) {?>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                <?php  $_smarty_tpl->tpl_vars['profile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['profile']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profilesList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['profile']->key => $_smarty_tpl->tpl_vars['profile']->value) {
$_smarty_tpl->tpl_vars['profile']->_loop = true;
?>
                <li><a class="btn btn-select-profile" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajaxHomeUrl']->value, ENT_QUOTES, 'UTF-8', true);?>
&id_appagebuilder_profiles=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['profile']->value['id_appagebuilder_profiles'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['profile']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
                <?php } ?>
            </ul>
            <?php }?>
        </div>
        
        <a class="btn btn-default btn-form-action btn-import" data-text="<?php echo smartyTranslate(array('s'=>'Import Form','mod'=>'appagebuilder'),$_smarty_tpl);?>
"><i class="icon-cloud-upload"></i> <?php echo smartyTranslate(array('s'=>'Import','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a>
        <div class="dropdown">
            <a class="btn btn-default export_button" role="button" data-toggle="dropdown" data-target="#" href="/page.html">
              <i class="icon-cloud-download"></i> <?php echo smartyTranslate(array('s'=>'Export Data','mod'=>'appagebuilder'),$_smarty_tpl);?>
 <span class="caret"></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="dLabel">
                <li><a class="btn export-from btn-export" data-type="all"><strong><?php echo smartyTranslate(array('s'=>'Profile','mod'=>'appagebuilder'),$_smarty_tpl);?>
</strong></a></li>
                <?php  $_smarty_tpl->tpl_vars['hookData'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hookData']->_loop = false;
 $_smarty_tpl->tpl_vars['position'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['exportItems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hookData']->key => $_smarty_tpl->tpl_vars['hookData']->value) {
$_smarty_tpl->tpl_vars['hookData']->_loop = true;
 $_smarty_tpl->tpl_vars['position']->value = $_smarty_tpl->tpl_vars['hookData']->key;
?>
                <li><a class="btn export-from btn-export" data-type="position" data-position="<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['position']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
"><strong><?php echo smartyTranslate(array('s'=>'Position','mod'=>'appagebuilder'),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8', true);?>
</strong></a></li>
                    <?php  $_smarty_tpl->tpl_vars['hook'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hook']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hookData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hook']->key => $_smarty_tpl->tpl_vars['hook']->value) {
$_smarty_tpl->tpl_vars['hook']->_loop = true;
?>
                <li><a class="btn export-from btn-export" data-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value, ENT_QUOTES, 'UTF-8', true);?>
">-------- Hook <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value, ENT_QUOTES, 'UTF-8', true);?>
</a></li>
                    <?php } ?>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
<div id="home_wrapper" class="default">
    <div class="position-cover row" id="position-header">
    <?php echo $_smarty_tpl->getSubTemplate ('./position.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('position'=>'Header','config'=>$_smarty_tpl->tpl_vars['positions']->value['header'],'listPositions'=>$_smarty_tpl->tpl_vars['listPositions']->value['header'],'default'=>$_smarty_tpl->tpl_vars['currentPosition']->value['header']), 0);?>

    </div>
    <div class="position-cover row" id="position-content">
    <?php echo $_smarty_tpl->getSubTemplate ('./position.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('position'=>'Content','config'=>$_smarty_tpl->tpl_vars['positions']->value['content'],'listPositions'=>$_smarty_tpl->tpl_vars['listPositions']->value['content'],'default'=>$_smarty_tpl->tpl_vars['currentPosition']->value['content']), 0);?>

    </div>
    <div class="position-cover row" id="position-footer">
    <?php echo $_smarty_tpl->getSubTemplate ('./position.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('position'=>'Footer','config'=>$_smarty_tpl->tpl_vars['positions']->value['footer'],'listPositions'=>$_smarty_tpl->tpl_vars['listPositions']->value['footer'],'default'=>$_smarty_tpl->tpl_vars['currentPosition']->value['footer']), 0);?>

    </div>
    <div class="position-cover row" id="position-product">
    <?php echo $_smarty_tpl->getSubTemplate ('./position.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('position'=>'Product','config'=>$_smarty_tpl->tpl_vars['positions']->value['product'],'listPositions'=>$_smarty_tpl->tpl_vars['listPositions']->value['product'],'default'=>$_smarty_tpl->tpl_vars['currentPosition']->value['product']), 0);?>

    </div>
    
</div>
<div id="bottom_wrapper">
    <a class="btn btn-default btn-form-toggle" title="<?php echo smartyTranslate(array('s'=>'Expand or Colapse','mod'=>'appagebuilder'),$_smarty_tpl);?>
">
        <i class="icon-resize-small"></i>
    </a>
    <a class="btn btn-default btn-fwidth width-default" data-width="auto"><?php echo smartyTranslate(array('s'=>'Default','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a>
    <a class="btn btn-default btn-fwidth width-large" data-width="1200"><?php echo smartyTranslate(array('s'=>'Large','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a>
    <a class="btn btn-default btn-fwidth width-medium" data-width="992"><?php echo smartyTranslate(array('s'=>'Medium','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a>
    <a class="btn btn-default btn-fwidth width-small" data-width="768"><?php echo smartyTranslate(array('s'=>'Small','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a>
    <a class="btn btn-default btn-fwidth width-extra-small" data-width="603"><?php echo smartyTranslate(array('s'=>'Extra Small','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a>
    <a class="btn btn-default btn-fwidth width-mobile" data-width="480"><?php echo smartyTranslate(array('s'=>'Mobile','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a>
    
    <div class="pull-right control-right">
        <div class="dropdown">
            <a class="btn btn-default" role="button" data-toggle="dropdown" data-target="#" data-id='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentProfile']->value['id_appagebuilder_profiles'], ENT_QUOTES, 'UTF-8', true);?>
'>
              <i class="icon-file-text"></i> <?php echo smartyTranslate(array('s'=>'Current Profile:','mod'=>'appagebuilder'),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentProfile']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['profilesList']->value) {?><span class="caret"></span><?php }?>
            </a>
            <?php if ($_smarty_tpl->tpl_vars['profilesList']->value) {?>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                <?php  $_smarty_tpl->tpl_vars['profile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['profile']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profilesList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['profile']->key => $_smarty_tpl->tpl_vars['profile']->value) {
$_smarty_tpl->tpl_vars['profile']->_loop = true;
?>
                <li><a class="btn btn-select-profile" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajaxHomeUrl']->value, ENT_QUOTES, 'UTF-8', true);?>
&id_appagebuilder_profiles=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['profile']->value['id_appagebuilder_profiles'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['profile']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
                <?php } ?>
            </ul>
            <?php }?>
        </div>
        
        <a class="btn btn-default btn-form-action btn-import" data-text="<?php echo smartyTranslate(array('s'=>'Import Form','mod'=>'appagebuilder'),$_smarty_tpl);?>
"><i class="icon-cloud-upload"></i> <?php echo smartyTranslate(array('s'=>'Import','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a>
        <div class="dropdown dropup">
            <a class="btn btn-default export_button" role="button" data-toggle="dropdown" data-target="#">
              <i class="icon-cloud-download"></i> <?php echo smartyTranslate(array('s'=>'Export Data','mod'=>'appagebuilder'),$_smarty_tpl);?>
 <span class="caret"></span>
            </a>

            <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="dLabel">
                <li><a class="btn export-from btn-export" data-type="all"><strong><?php echo smartyTranslate(array('s'=>'Profile','mod'=>'appagebuilder'),$_smarty_tpl);?>
</strong></a></li>
                <?php  $_smarty_tpl->tpl_vars['hookData'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hookData']->_loop = false;
 $_smarty_tpl->tpl_vars['position'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['exportItems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hookData']->key => $_smarty_tpl->tpl_vars['hookData']->value) {
$_smarty_tpl->tpl_vars['hookData']->_loop = true;
 $_smarty_tpl->tpl_vars['position']->value = $_smarty_tpl->tpl_vars['hookData']->key;
?>
                <li><a class="btn export-from btn-export" data-type="position" data-position="<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['position']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
"><strong><?php echo smartyTranslate(array('s'=>'Position','mod'=>'appagebuilder'),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8', true);?>
</strong></a></li>
                    <?php  $_smarty_tpl->tpl_vars['hook'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hook']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hookData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hook']->key => $_smarty_tpl->tpl_vars['hook']->value) {
$_smarty_tpl->tpl_vars['hook']->_loop = true;
?>
                <li><a class="btn export-from btn-export" data-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value, ENT_QUOTES, 'UTF-8', true);?>
">-------- Hook <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value, ENT_QUOTES, 'UTF-8', true);?>
</a></li>
                    <?php } ?>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
<div id="ap_loading" class="ap-loading">
    <div class="spinner">
        <div class="cube1"></div>
        <div class="cube2"></div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplPath']->value)."/ap_page_builder_home/home_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script type="text/javascript">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('imgModuleLink'=>$_smarty_tpl->tpl_vars['imgModuleLink']->value),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('apAjaxShortCodeUrl'=>$_smarty_tpl->tpl_vars['ajaxShortCodeUrl']->value),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('apAjaxHomeUrl'=>$_smarty_tpl->tpl_vars['ajaxHomeUrl']->value),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('apImgController'=>$_smarty_tpl->tpl_vars['imgController']->value),$_smarty_tpl);?>

		
	var checkSaveMultithreading=<?php echo $_smarty_tpl->tpl_vars['checkSaveMultithreading']->value;?>
;	
	var checkSaveSubmit=<?php echo $_smarty_tpl->tpl_vars['checkSaveSubmit']->value;?>
;	
    $(document).ready(function(){
        var $apHomeBuilder = $(document).apPageBuilder();
        $apHomeBuilder.process('<?php echo $_smarty_tpl->tpl_vars['dataForm']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['shortcodeInfos']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['languages']->value;?>
');
        $apHomeBuilder.ajaxShortCodeUrl = apAjaxShortCodeUrl;
        $apHomeBuilder.ajaxHomeUrl = apAjaxHomeUrl;
        $apHomeBuilder.lang_id = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang_id']->value, ENT_QUOTES, 'UTF-8', true);?>
';
        $apHomeBuilder.imgController = apImgController;
        $apHomeBuilder.profileId = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['idProfile']->value, ENT_QUOTES, 'UTF-8', true);?>
';
    });
</script><?php }} ?>
