<?php /* Smarty version Smarty-3.1.19, created on 2016-05-31 08:27:44
         compiled from "/Applications/MAMP/htdocs/prestashop/themes/ap_juice/profiles/profile1453404375/id_gencode_56fcfa36507e1_1459419702.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1639897766574d780c7b2e37-45928082%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85cd03bfa05f17483e7571b9f1cff68c848a4b94' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/themes/ap_juice/profiles/profile1453404375/id_gencode_56fcfa36507e1_1459419702.tpl',
      1 => 1464697664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1639897766574d780c7b2e37-45928082',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_574d780c7cd8d9_67363138',
  'variables' => 
  array (
    'base_dir' => 0,
    'shop_name' => 0,
    'logo_url' => 0,
    'logo_image_width' => 0,
    'logo_image_height' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574d780c7cd8d9_67363138')) {function content_574d780c7cd8d9_67363138($_smarty_tpl) {?>                               <a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
">                                        <img class="logo img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['logo_image_width']->value)&&$_smarty_tpl->tpl_vars['logo_image_width']->value) {?> width="<?php echo $_smarty_tpl->tpl_vars['logo_image_width']->value;?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['logo_image_height']->value)&&$_smarty_tpl->tpl_vars['logo_image_height']->value) {?> height="<?php echo $_smarty_tpl->tpl_vars['logo_image_height']->value;?>
"<?php }?>/>                                    </a><?php }} ?>
