<?php
/* Smarty version 3.1.33, created on 2019-07-27 16:20:45
  from '/var/www/html/e-commerce/modules/appagebuilder/views/templates/hook/ApModule.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3c79dd2fa114_43785432',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '947def8120cd970a7f457d8cc8d98c74300e9ee3' => 
    array (
      0 => '/var/www/html/e-commerce/modules/appagebuilder/views/templates/hook/ApModule.tpl',
      1 => 1564241096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3c79dd2fa114_43785432 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\hook\ApModule -->
<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';
echo $_smarty_tpl->tpl_vars['apContent']->value;
echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';
}
}
