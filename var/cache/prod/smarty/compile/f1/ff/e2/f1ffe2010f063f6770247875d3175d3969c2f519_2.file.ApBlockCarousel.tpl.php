<?php
/* Smarty version 3.1.33, created on 2019-07-27 16:21:54
  from '/var/www/html/e-commerce/themes/leo_nunica/modules/appagebuilder/views/templates/hook/testimonials/ApBlockCarousel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3c7a2281c877_51428658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1ffe2010f063f6770247875d3175d3969c2f519' => 
    array (
      0 => '/var/www/html/e-commerce/themes/leo_nunica/modules/appagebuilder/views/templates/hook/testimonials/ApBlockCarousel.tpl',
      1 => 1564241097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3c7a2281c877_51428658 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\hook\ApBlockCarousel -->
<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error']) && $_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error']) {?>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_error']) && $_smarty_tpl->tpl_vars['formAtts']->value['lib_error']) {?>
        <div class="alert alert-warning leo-lib-error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['lib_error'], ENT_QUOTES, 'UTF-8');?>
</div>
    <?php }
} else { ?>
    <div class="block block_carousel exclusive appagebuilder <?php echo htmlspecialchars(isset($_smarty_tpl->tpl_vars['formAtts']->value['class']) ? $_smarty_tpl->tpl_vars['formAtts']->value['class'] : call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( '','html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
        <?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>
        <div class="block_content">
            <?php if (!empty($_smarty_tpl->tpl_vars['formAtts']->value['slides'])) {?>
                <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['carousel_type'] == "slickcarousel") {?>
                    <?php $_smarty_tpl->_assignInScope('leo_include_file', $_smarty_tpl->tpl_vars['leo_helper']->value->getTplTemplate('ApBlockSlickCarouselItem.tpl',$_smarty_tpl->tpl_vars['formAtts']->value['override_folder']));?>
                    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['leo_include_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['carousel_type'] == 'boostrap') {?>
                        <?php $_smarty_tpl->_assignInScope('leo_include_file', $_smarty_tpl->tpl_vars['leo_helper']->value->getTplTemplate('ApBlockCarouselItem.tpl',$_smarty_tpl->tpl_vars['formAtts']->value['override_folder']));?>
                        <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['leo_include_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('leo_include_file', $_smarty_tpl->tpl_vars['leo_helper']->value->getTplTemplate('ApBlockOwlCarouselItem.tpl',$_smarty_tpl->tpl_vars['formAtts']->value['override_folder']));?>
                        <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['leo_include_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    <?php }?>
                <?php }?>
            <?php } else { ?>
                <p class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No slide at this time.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>
            <?php }?>
        </div>
        <?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>
    </div>
<?php }
}
}
