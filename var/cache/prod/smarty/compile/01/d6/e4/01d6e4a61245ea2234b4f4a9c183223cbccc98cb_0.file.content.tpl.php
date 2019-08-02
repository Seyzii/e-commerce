<?php
/* Smarty version 3.1.33, created on 2019-07-27 16:21:23
  from '/var/www/html/e-commerce/admin020qtadsk/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3c7a035d3390_03882764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01d6e4a61245ea2234b4f4a9c183223cbccc98cb' => 
    array (
      0 => '/var/www/html/e-commerce/admin020qtadsk/themes/default/template/content.tpl',
      1 => 1562670307,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3c7a035d3390_03882764 (Smarty_Internal_Template $_smarty_tpl) {
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
