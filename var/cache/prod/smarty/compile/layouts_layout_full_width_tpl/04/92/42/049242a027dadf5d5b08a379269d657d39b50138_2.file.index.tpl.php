<?php
/* Smarty version 3.1.33, created on 2020-11-22 08:28:26
  from 'C:\laragon\www\ps17\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fba677ad2bce5_97305327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '049242a027dadf5d5b08a379269d657d39b50138' => 
    array (
      0 => 'C:\\laragon\\www\\ps17\\themes\\classic\\templates\\index.tpl',
      1 => 1606050376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fba677ad2bce5_97305327 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18355998815fba677ad25de6_64371059', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_19036426905fba677ad26c97_54367350 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_13890850225fba677ad28da0_87913761 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_9130085335fba677ad28106_48197806 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13890850225fba677ad28da0_87913761', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_18355998815fba677ad25de6_64371059 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_18355998815fba677ad25de6_64371059',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_19036426905fba677ad26c97_54367350',
  ),
  'page_content' => 
  array (
    0 => 'Block_9130085335fba677ad28106_48197806',
  ),
  'hook_home' => 
  array (
    0 => 'Block_13890850225fba677ad28da0_87913761',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19036426905fba677ad26c97_54367350', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9130085335fba677ad28106_48197806', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
