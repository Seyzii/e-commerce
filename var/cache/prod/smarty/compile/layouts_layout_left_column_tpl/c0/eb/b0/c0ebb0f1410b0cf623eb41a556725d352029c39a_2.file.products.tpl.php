<?php
/* Smarty version 3.1.33, created on 2019-07-27 16:33:44
  from '/var/www/html/e-commerce/themes/leo_nunica/templates/catalog/_partials/products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3c7ce850ff09_52991263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0ebb0f1410b0cf623eb41a556725d352029c39a' => 
    array (
      0 => '/var/www/html/e-commerce/themes/leo_nunica/templates/catalog/_partials/products.tpl',
      1 => 1564241097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/leo_col_products.tpl' => 1,
    'file:_partials/pagination.tpl' => 1,
  ),
),false)) {
function content_5d3c7ce850ff09_52991263 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="js-product-list">
  <div class="products">  
    <?php $_smarty_tpl->_assignInScope('leo_page', 'category');?>
    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/leo_col_products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['listing']->value['products']), 0, false);
?>   
  </div>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_131585235d3c7ce850e4f3_97167063', 'pagination');
?>


  </div>
<?php }
/* {block 'pagination'} */
class Block_131585235d3c7ce850e4f3_97167063 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination' => 
  array (
    0 => 'Block_131585235d3c7ce850e4f3_97167063',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:_partials/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']), 0, false);
?>
  <?php
}
}
/* {/block 'pagination'} */
}
