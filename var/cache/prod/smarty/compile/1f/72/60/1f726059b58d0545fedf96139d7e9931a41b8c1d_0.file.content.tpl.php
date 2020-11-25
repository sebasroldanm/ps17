<?php
/* Smarty version 3.1.33, created on 2020-11-22 08:30:26
  from 'C:\laragon\www\ps17\admin007oro9df\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fba67f2b4a4c1_52604860',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f726059b58d0545fedf96139d7e9931a41b8c1d' => 
    array (
      0 => 'C:\\laragon\\www\\ps17\\admin007oro9df\\themes\\default\\template\\content.tpl',
      1 => 1606050347,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fba67f2b4a4c1_52604860 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
