<?php
/* Smarty version 3.1.33, created on 2020-08-02 19:51:10
  from '/var/www/html/ko/adminko/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f26eefe0f5055_79993668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36d6c7c918904d178e73895285bf3ac41ddc0665' => 
    array (
      0 => '/var/www/html/ko/adminko/themes/default/template/content.tpl',
      1 => 1574688556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f26eefe0f5055_79993668 (Smarty_Internal_Template $_smarty_tpl) {
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
