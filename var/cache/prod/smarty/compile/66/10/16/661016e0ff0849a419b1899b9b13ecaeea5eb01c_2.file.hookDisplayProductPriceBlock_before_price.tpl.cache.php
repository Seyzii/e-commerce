<?php
/* Smarty version 3.1.33, created on 2019-07-27 16:21:54
  from '/var/www/html/e-commerce/modules/ps_legalcompliance/views/templates/hook/hookDisplayProductPriceBlock_before_price.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3c7a2237ac34_11784798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '661016e0ff0849a419b1899b9b13ecaeea5eb01c' => 
    array (
      0 => '/var/www/html/e-commerce/modules/ps_legalcompliance/views/templates/hook/hookDisplayProductPriceBlock_before_price.tpl',
      1 => 1562670307,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3c7a2237ac34_11784798 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '9382795015d3c7a22374376_35404744';
?>

<?php if (isset($_smarty_tpl->tpl_vars['smartyVars']->value)) {?>
        <?php if (isset($_smarty_tpl->tpl_vars['smartyVars']->value['before_price']) && isset($_smarty_tpl->tpl_vars['smartyVars']->value['before_price']['from_str_i18n'])) {?>
        <span class="aeuc_from_label">
            <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['smartyVars']->value['before_price']['from_str_i18n'],'htmlall' )), ENT_QUOTES, 'UTF-8');?>

        </span>
    <?php }
}
}
}
