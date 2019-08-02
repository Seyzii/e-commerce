<?php
/* Smarty version 3.1.33, created on 2019-07-27 16:33:44
  from 'module:psnewproductsviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3c7ce8403ea4_63890980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a8df44403a47041b050fac755e17268c2a7c3e7' => 
    array (
      0 => 'module:psnewproductsviewstemplat',
      1 => 1564241097,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/leo_col_products.tpl' => 1,
  ),
),false)) {
function content_5d3c7ce8403ea4_63890980 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1554366995d3c7ce84011e3_57334686';
?>

<section class="featured-products clearfix block">
  	<h2 class="h2 products-section-title title_block">
  		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New products','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

  	</h2>
  	<div class="block_content">
	  	<div class="products">
	    	<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/leo_col_products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['products']->value), 0, false);
?>
	  	</div>
	  	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allNewProductsLink']->value, ENT_QUOTES, 'UTF-8');?>
" class="all-product-link float-xs-left btn btn-outline">
	  		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View All','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

	  	</a>
  	</div>
</section>

<?php }
}
