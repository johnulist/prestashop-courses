<?php /* Smarty version Smarty-3.1.19, created on 2016-05-31 08:14:49
         compiled from "/Applications/MAMP/htdocs/prestashop/modules/appagebuilder/views/templates/admin/ap_page_builder_profiles/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1199669313574d80392a26a2-42987296%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ecb5ccff0196f97452be969679ba15b65ade1326' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/modules/appagebuilder/views/templates/admin/ap_page_builder_profiles/list.tpl',
      1 => 1464694749,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1199669313574d80392a26a2-42987296',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list_profile' => 0,
    'item' => 0,
    'nameProfile' => 0,
    'url_live_edit' => 0,
    'id_default' => 0,
    'url_preview' => 0,
    'url_edit_profile' => 0,
    'url_profile_detail' => 0,
    'url_edit_profile_token' => 0,
    'profile_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_574d8039341688_12017025',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574d8039341688_12017025')) {function content_574d8039341688_12017025($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\admin\ap_page_builder_profiles\list -->
<?php $_smarty_tpl->tpl_vars['id_default'] = new Smarty_variable(0, null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['list_profile']->value)&&$_smarty_tpl->tpl_vars['list_profile']->value) {?>
	<ul class="source-profile hidden">
	<?php $_smarty_tpl->tpl_vars['nameProfile'] = new Smarty_variable('', null, 0);?>
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_profile']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		<li class="<?php if ($_smarty_tpl->tpl_vars['item']->value['active']==1) {?>active<?php }?>">=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['id_appagebuilder_profiles'], ENT_QUOTES, 'UTF-8', true);?>
</li>
		<?php if ($_smarty_tpl->tpl_vars['item']->value['active']==1) {?>
		<?php $_smarty_tpl->tpl_vars['id_default'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['id_appagebuilder_profiles'], null, 0);?>
		<?php $_smarty_tpl->tpl_vars['nameProfile'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['name'], null, 0);?>
		<?php }?>
	<?php } ?>
	</ul>
	<div id="cover-live-iframe" class="">
		<div class="ap-live-tool"><?php echo smartyTranslate(array('s'=>'Mode Live Edit','mod'=>'appagebuilder'),$_smarty_tpl);?>
 <span id="name-profile"><?php if ($_smarty_tpl->tpl_vars['nameProfile']->value) {?> for <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nameProfile']->value, ENT_QUOTES, 'UTF-8', true);?>
</b><?php }?></span>&nbsp;
			<a href="javascript:;" id="btn-change-mode" class="label-tooltip" title="<?php echo smartyTranslate(array('s'=>'Expand/Compress','mod'=>'appagebuilder'),$_smarty_tpl);?>
" data-placement="left"><i class="icon-expand"></i></a>
			<a href="javascript:;" id="btn-reload-live" class="label-tooltip" title="<?php echo smartyTranslate(array('s'=>'Reload content','mod'=>'appagebuilder'),$_smarty_tpl);?>
" data-placement="left"><i class="icon-refresh"></i></a>
			<a href="javascript:;" id="btn-preview" class="label-tooltip" title="<?php echo smartyTranslate(array('s'=>'Preview this profile','mod'=>'appagebuilder'),$_smarty_tpl);?>
" data-placement="left"><i class="icon-zoom-in"></i></a>
			<a href="javascript:;" id="btn-design-layout" class="label-tooltip" title="<?php echo smartyTranslate(array('s'=>'Mode design layout','mod'=>'appagebuilder'),$_smarty_tpl);?>
" data-placement="left"><i class="icon-desktop"></i></a>
		</div>
		<iframe id="live-edit-iframe" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_live_edit']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['id_default']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_default']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" 
				idProfile="<?php if ($_smarty_tpl->tpl_vars['id_default']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_default']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
		</iframe>
	</div>
<div id="ap_loading" class="ap-loading">
    <div class="spinner">
        <div class="cube1"></div>
        <div class="cube2"></div>
    </div>
</div>
<script language="javascript" type="text/javascript">
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('urlLiveEdit'=>$_smarty_tpl->tpl_vars['url_live_edit']->value),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('urlPreview'=>$_smarty_tpl->tpl_vars['url_preview']->value),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('urlEditProfile'=>$_smarty_tpl->tpl_vars['url_edit_profile']->value),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('urlProfileDetail'=>$_smarty_tpl->tpl_vars['url_profile_detail']->value),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('urlEditProfileToken'=>$_smarty_tpl->tpl_vars['url_edit_profile_token']->value),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('idProfile'=>$_smarty_tpl->tpl_vars['id_default']->value),$_smarty_tpl);?>

	function resize() {
		//$("#live-edit-iframe").width($(window).width() - 80);
		$("#live-edit-iframe").height($("body").height() - 
				$("#header_infos").height() - $(".page-head").height() - 
				$("#form-appagebuilder_profiles").height() - $(".ap-live-tool").height() - 
				$("#footer").height() - 80 - ($(".bootstrap .alert").length > 0 ? ($(".bootstrap .alert").height() + 20) : 0));
		
	}
	function changeProfilePreview(obj) {
		$("#ap_loading").show();
		if($('.table-responsive-row .row-selector').length){
			var td = $(obj).closest("tr").find("td:nth-child(2)");
			var tdName = $(obj).closest("tr").find("td:nth-child(3)");
		}else{
			var td = $(obj).closest("tr").find("td:nth-child(1)");
			var tdName = $(obj).closest("tr").find("td:nth-child(2)");
		}
		
		var d = new Date();
		idProfile = $.trim($(td).text());
		$("#name-profile b").text($.trim($(tdName).text()));
		$("#live-edit-iframe").attr("idProfile", idProfile);
		$("#live-edit-iframe").attr("src", urlLiveEdit + "&ap_edit_token=" + urlEditProfileToken + "&id_appagebuilder_profiles=" + idProfile + "&t=" + d.getTime());
	}
	$(function() {
		// Add button preview, tooltip for row
		totalTr = $(".appagebuilder_profiles tbody tr").length;
		$(".appagebuilder_profiles tbody tr").each(function() {
			$(this).attr("title", "<?php echo smartyTranslate(array('s'=>'When you click any profiles in profile list, this will be shown at the same screen below in mode live edit','mod'=>'appagebuilder'),$_smarty_tpl);?>
");
			// Add button preview
			if(totalTr <=1)
					var idProfile = $.trim($(this).find("td:nth-child(1)").text());
			else
				var idProfile = $.trim($(this).find("td:nth-child(2)").text());
                        
                        var url = urlProfileDetail + "&submitBulkinsertLangappagebuilder_profiles&id=" + idProfile;
			$(this).find(".pull-right ul").prepend("<li><a title='<?php echo smartyTranslate(array('s'=>'Copy data from default language to other','mod'=>'appagebuilder'),$_smarty_tpl);?>
' href='" + url + "'><i class='icon-copy'></i> <?php echo smartyTranslate(array('s'=>'Copy to Other Language','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a></li>");
                        
			url = urlEditProfile + "&id_appagebuilder_profiles=" + idProfile;
			$(this).find(".pull-right ul").prepend("<li><a title='<?php echo smartyTranslate(array('s'=>'Edit in mode design layout','mod'=>'appagebuilder'),$_smarty_tpl);?>
' target='_blank' href='" + url + "'><i class='icon-desktop'></i> <?php echo smartyTranslate(array('s'=>'Edit Design Layout','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a></li>");
                        
                        
                        
			url = urlPreview + "?id_appagebuilder_profiles=" + idProfile;
			$(this).find(".pull-right ul").prepend("<li><a title='<?php echo smartyTranslate(array('s'=>'Preview','mod'=>'appagebuilder'),$_smarty_tpl);?>
' target='_blank' href='" + url + "'><i class='icon-search-plus'></i> <?php echo smartyTranslate(array('s'=>'Preview','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a></li>");
		});
		$(".appagebuilder_profiles tbody tr").tooltip();
		//$("#ap_loading").show();
		$(window).resize(function() {
			resize();
		});
		var d = new Date();
		if($('.table-responsive-row .row-selector').length){
			var listTd = ".appagebuilder_profiles tr td:nth-child(2)," + 
				".appagebuilder_profiles tr td:nth-child(3), .appagebuilder_profiles tr td:nth-child(4)";
		}else{
			var listTd = ".appagebuilder_profiles tr td:nth-child(1)," + 
				".appagebuilder_profiles tr td:nth-child(2), .appagebuilder_profiles tr td:nth-child(3)";
		}
		$("#live-edit-iframe").attr("src", urlLiveEdit + "&ap_edit_token=" + urlEditProfileToken + "&id_appagebuilder_profiles=" + idProfile + "&t=" + d.getTime());
		
		$(listTd).each(function() {
			$(this).attr("onclick", "return changeProfilePreview(this);");
		});
		$("#btn-reload-live").click(function() {
			$("#ap_loading").show();
			var d = new Date();	
			$("#live-edit-iframe").attr("src", urlLiveEdit + "&ap_edit_token=" + urlEditProfileToken + "&id_appagebuilder_profiles=" + idProfile + "&t=" + d.getTime());
		});
		$("#btn-preview").click(function() {
			window.open(urlPreview + "?id_appagebuilder_profiles=" + idProfile, "_blank");
		});
		$("#btn-design-layout").click(function() {
			window.open(urlEditProfile + "&id_appagebuilder_profiles=" + idProfile, "_blank");
		});
		$("#btn-change-mode").click(function() {
			if($(this).hasClass("full-screen")) {
				$("#cover-live-iframe").removeClass("full-screen");
				$(this).removeClass("full-screen");
				$(this).find("i").attr("class", "icon-expand");
			} else {
				$("#cover-live-iframe").addClass("full-screen");
				$(this).addClass("full-screen");
				$(this).find("i").attr("class", "icon-compress");
			}
		});
		$("#live-edit-iframe").load(function() {
			$("#ap_loading").hide();
		});
		$("body").addClass("page-sidebar-closed");
		resize();
	});
</script>
<?php } else { ?>
	<hr/>
	<center><p><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['profile_link']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="btn btn btn-primary"><i class="icon-file-text"></i> <?php echo smartyTranslate(array('s'=>'Create first Profile >>','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a>
	</p></center>
	<script type="text/javascript">
		$(function() {
			$(".appagebuilder_profiles td:first-child").attr("colspan", $(".appagebuilder_profiles th").length);
		});
	</script>
<?php }?><?php }} ?>
