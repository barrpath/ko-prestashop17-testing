<?php
/* Smarty version 3.1.33, created on 2020-08-02 19:52:39
  from '/var/www/html/ko/adminko/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f26ef578ee3b2_75519529',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '946096326f52825c1178259b04dd616585967b29' => 
    array (
      0 => '/var/www/html/ko/adminko/themes/new-theme/template/content.tpl',
      1 => 1574688556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f26ef578ee3b2_75519529 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
