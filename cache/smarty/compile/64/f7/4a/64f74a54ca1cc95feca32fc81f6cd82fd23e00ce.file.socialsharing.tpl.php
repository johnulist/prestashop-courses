<?php /* Smarty version Smarty-3.1.19, created on 2016-05-31 07:40:23
         compiled from "/Applications/MAMP/htdocs/prestashop/themes/ap_juice/modules/socialsharing/views/templates/hook/socialsharing.tpl" */ ?>
<?php /*%%SmartyHeaderCode:473015351574d782746b1d8-36002005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64f74a54ca1cc95feca32fc81f6cd82fd23e00ce' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/themes/ap_juice/modules/socialsharing/views/templates/hook/socialsharing.tpl',
      1 => 1464694748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '473015351574d782746b1d8-36002005',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PS_SC_TWITTER' => 0,
    'PS_SC_FACEBOOK' => 0,
    'PS_SC_GOOGLE' => 0,
    'PS_SC_PINTEREST' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_574d782748d562_94049231',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574d782748d562_94049231')) {function content_574d782748d562_94049231($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['PS_SC_TWITTER']->value||$_smarty_tpl->tpl_vars['PS_SC_FACEBOOK']->value||$_smarty_tpl->tpl_vars['PS_SC_GOOGLE']->value||$_smarty_tpl->tpl_vars['PS_SC_PINTEREST']->value) {?>
	<p class="socialsharing_product list-inline no-print">
		<?php if ($_smarty_tpl->tpl_vars['PS_SC_TWITTER']->value) {?>
			<button  data-type="twitter" type="button" class="btn btn-outline btn-twitter social-sharing">
				<i class="fa fa-twitter"></i><span><?php echo smartyTranslate(array('s'=>"Tweet",'mod'=>'socialsharing'),$_smarty_tpl);?>
</span>
			</button>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['PS_SC_FACEBOOK']->value) {?>
			<button  data-type="facebook" type="button" class="btn btn-outline btn-facebook  social-sharing">
				<i class="fa fa-facebook"></i><span><?php echo smartyTranslate(array('s'=>"Share",'mod'=>'socialsharing'),$_smarty_tpl);?>
</span>
			</button>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['PS_SC_GOOGLE']->value) {?>
			<button data-type="google-plus" type="button" class="btn btn-outline btn-google-plus  social-sharing">
				<i class="fa fa-google-plus"></i><span><?php echo smartyTranslate(array('s'=>"Google+",'mod'=>'socialsharing'),$_smarty_tpl);?>
</span>
			</button>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['PS_SC_PINTEREST']->value) {?>
			<button data-type="pinterest" type="button" class="btn btn-outline btn-pinterest  social-sharing">
				<i class="fa fa-pinterest"></i><span><?php echo smartyTranslate(array('s'=>"Pinterest",'mod'=>'socialsharing'),$_smarty_tpl);?>
</span>
			</button>
		<?php }?>
	</p>
<?php }?><?php }} ?>
