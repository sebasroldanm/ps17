<?php
/* Smarty version 3.1.33, created on 2020-11-25 08:01:59
  from 'C:\laragon\www\ps17\themes\classic\templates\_partials\form-errors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fbe55c706a5d9_49576894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13bb58a181e419ed57201cbfb2080e88f4727957' => 
    array (
      0 => 'C:\\laragon\\www\\ps17\\themes\\classic\\templates\\_partials\\form-errors.tpl',
      1 => 1606050377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbe55c706a5d9_49576894 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (count($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <div class="help-block">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17019790305fbe55c7067852_05676612', 'form_errors');
?>

  </div>
<?php }
}
/* {block 'form_errors'} */
class Block_17019790305fbe55c7067852_05676612 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_errors' => 
  array (
    0 => 'Block_17019790305fbe55c7067852_05676612',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
          <li class="alert alert-danger"><?php echo nl2br($_smarty_tpl->tpl_vars['error']->value);?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    <?php
}
}
/* {/block 'form_errors'} */
}
