<?php
/* Smarty version 3.1.33, created on 2020-08-02 19:44:24
  from '/var/www/html/ko/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f26ed6855d7f0_75696701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28ba6ec2e701032e6dd4c3f99a6f7a08001c33a5' => 
    array (
      0 => '/var/www/html/ko/themes/classic/templates/index.tpl',
      1 => 1574688556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f26ed6855d7f0_75696701 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10109254805f26ed68557cb7_72313133', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_11434329435f26ed68558ad2_60878803 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_3833137885f26ed6855aa13_63874708 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_20330409885f26ed68559de9_80609404 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3833137885f26ed6855aa13_63874708', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_10109254805f26ed68557cb7_72313133 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_10109254805f26ed68557cb7_72313133',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_11434329435f26ed68558ad2_60878803',
  ),
  'page_content' => 
  array (
    0 => 'Block_20330409885f26ed68559de9_80609404',
  ),
  'hook_home' => 
  array (
    0 => 'Block_3833137885f26ed6855aa13_63874708',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11434329435f26ed68558ad2_60878803', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20330409885f26ed68559de9_80609404', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
