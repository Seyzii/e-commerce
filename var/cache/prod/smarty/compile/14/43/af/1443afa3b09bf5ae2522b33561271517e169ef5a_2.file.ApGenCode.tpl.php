<?php
/* Smarty version 3.1.33, created on 2019-07-27 16:20:45
  from '/var/www/html/e-commerce/modules/appagebuilder/views/templates/hook/ApGenCode.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3c79dd3909d8_46498824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1443afa3b09bf5ae2522b33561271517e169ef5a' => 
    array (
      0 => '/var/www/html/e-commerce/modules/appagebuilder/views/templates/hook/ApGenCode.tpl',
      1 => 1564241096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3c79dd3909d8_46498824 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\hook\ApGenCode -->

<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['tpl_file']) && !empty($_smarty_tpl->tpl_vars['formAtts']->value['tpl_file'])) {?>
	<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['formAtts']->value['tpl_file'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>

<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['error_file']) && !empty($_smarty_tpl->tpl_vars['formAtts']->value['error_file'])) {?>
	<?php echo $_smarty_tpl->tpl_vars['formAtts']->value['error_message'];
}
}
}
