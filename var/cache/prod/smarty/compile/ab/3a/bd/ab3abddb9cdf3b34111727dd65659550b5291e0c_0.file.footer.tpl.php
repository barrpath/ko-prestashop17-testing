<?php
/* Smarty version 3.1.33, created on 2020-08-02 19:52:39
  from '/var/www/html/ko/adminko/themes/new-theme/template/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f26ef57977617_14420982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab3abddb9cdf3b34111727dd65659550b5291e0c' => 
    array (
      0 => '/var/www/html/ko/adminko/themes/new-theme/template/footer.tpl',
      1 => 1574688556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f26ef57977617_14420982 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="footer" class="bootstrap">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayBackOfficeFooter"),$_smarty_tpl ) );?>

</div>
<?php }
}
