<?php
/* Smarty version 3.1.33, created on 2019-07-27 16:43:42
  from '/var/www/html/e-commerce/modules/ps_mbo/views/templates/admin/admin-end-content-theme.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3c7f3edeb966_31132692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd973aec86f6390733044e1353dabf3cd62599ee0' => 
    array (
      0 => '/var/www/html/e-commerce/modules/ps_mbo/views/templates/admin/admin-end-content-theme.tpl',
      1 => 1562673323,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3c7f3edeb966_31132692 (Smarty_Internal_Template $_smarty_tpl) {
?> 
<div class="panel clearfix" id="prestastore-content"></div>
<?php echo '<script'; ?>
 type="text/javascript">
	$.ajax({
		type: 'POST',
		headers: { "cache-control": "no-cache" },
		url: '<?php echo $_smarty_tpl->tpl_vars['admin_module_ajax_url_psmbo']->value;?>
',
		async: true,
		cache: false,
		dataType : "html",
		data: {
			ajax: '1',
			action:'getMboAddonsThemes',
		},
		success: function(htmlData) {
			$("#prestastore-content").html("<h3><i class='icon-picture-o'></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Live from PrestaShop Addons!'),$_smarty_tpl ) );?>
</h3>"+htmlData);
		}
	});

	// These variable will move the form to another location
	var formToMove = "appearance";
	var formDestination = "js_theme_form_container";
<?php echo '</script'; ?>
><?php }
}
