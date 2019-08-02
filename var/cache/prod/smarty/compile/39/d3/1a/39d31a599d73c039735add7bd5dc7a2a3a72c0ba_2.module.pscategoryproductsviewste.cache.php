<?php
/* Smarty version 3.1.33, created on 2019-07-27 16:20:45
  from 'module:pscategoryproductsviewste' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3c79dda2c971_52893183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39d31a599d73c039735add7bd5dc7a2a3a72c0ba' => 
    array (
      0 => 'module:pscategoryproductsviewste',
      1 => 1564241097,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_5d3c79dda2c971_52893183 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '19791930735d3c79dda22013_23549103';
?>
<section class="category-products block button-middle button-hover clearfix">
  <h2 class="products-section-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Related products','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h2>
  <p class="count-same-category">
    <?php if (count($_smarty_tpl->tpl_vars['products']->value) == 1) {?>
      (<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There is %s other product in the same category','sprintf'=>array(count($_smarty_tpl->tpl_vars['products']->value)),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
)
    <?php } else { ?>
      (<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are %s other products in the same category','sprintf'=>array(count($_smarty_tpl->tpl_vars['products']->value)),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
)
    <?php }?>
  </p>
  <?php $_smarty_tpl->_assignInScope('itemscolumn', 1);?>
  <?php $_smarty_tpl->_assignInScope('itempercolumn', 4);?>
  <?php $_smarty_tpl->_assignInScope('itemsDesktop', 4);?>
  <?php $_smarty_tpl->_assignInScope('itemsDesktopSmall', 3);?>
  <?php $_smarty_tpl->_assignInScope('itemsTablet', 2);?>
  <?php $_smarty_tpl->_assignInScope('itemsMobile', 1);?>
  <div class="block_content">
    <div class="products">
      <div class="owl-row">
        <div class="timeline-wrapper prepare"
          data-item="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['itempercolumn']->value, ENT_QUOTES, 'UTF-8');?>
" 
          data-xl="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['itemsDesktop']->value, ENT_QUOTES, 'UTF-8');?>
" 
          data-lg="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['itemsDesktop']->value, ENT_QUOTES, 'UTF-8');?>
" 
          data-md="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['itemsDesktopSmall']->value, ENT_QUOTES, 'UTF-8');?>
" 
          data-sm="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['itemsTablet']->value, ENT_QUOTES, 'UTF-8');?>
" 
          data-m="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['itemsMobile']->value, ENT_QUOTES, 'UTF-8');?>
"
        >
          <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['itempercolumn']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['itempercolumn']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>     
            <div class="timeline-parent">
              <?php
$_smarty_tpl->tpl_vars['foo_child'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo_child']->step = 1;$_smarty_tpl->tpl_vars['foo_child']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo_child']->step > 0 ? $_smarty_tpl->tpl_vars['itemscolumn']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['itemscolumn']->value)+1)/abs($_smarty_tpl->tpl_vars['foo_child']->step));
if ($_smarty_tpl->tpl_vars['foo_child']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo_child']->value = 1, $_smarty_tpl->tpl_vars['foo_child']->iteration = 1;$_smarty_tpl->tpl_vars['foo_child']->iteration <= $_smarty_tpl->tpl_vars['foo_child']->total;$_smarty_tpl->tpl_vars['foo_child']->value += $_smarty_tpl->tpl_vars['foo_child']->step, $_smarty_tpl->tpl_vars['foo_child']->iteration++) {
$_smarty_tpl->tpl_vars['foo_child']->first = $_smarty_tpl->tpl_vars['foo_child']->iteration === 1;$_smarty_tpl->tpl_vars['foo_child']->last = $_smarty_tpl->tpl_vars['foo_child']->iteration === $_smarty_tpl->tpl_vars['foo_child']->total;?>
                <div class="timeline-item ">
                  <div class="animated-background">         
                    <div class="background-masker content-top"></div>             
                    <div class="background-masker content-second-line"></div>             
                    <div class="background-masker content-third-line"></div>              
                    <div class="background-masker content-fourth-line"></div>
                  </div>
                </div>
              <?php }
}
?>
            </div>
          <?php }
}
?>
        </div>
        <div id="category-products" class="owl-carousel owl-theme owl-loading">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, NULL, 'mypLoop', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_mypLoop']->value['index']++;
?>
            <div class="item<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_mypLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_mypLoop']->value['index'] : null) == 0) {?> first<?php }?>">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4647384625d3c79dda29312_75716703', 'product_miniature');
?>

            </div>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php echo '<script'; ?>
 type="text/javascript">
  ap_list_functions_loaded.push(
    function(){
      if($('#category-products').parents('.tab-pane').length)
      {   
          if(!$('#category-products').parents('.tab-pane').hasClass('active'))
          {
              var width_owl_active_tab = $('#category-products').parents('.tab-pane').siblings('.active').find('.owl-carousel').width();    
              $('#category-products').width(width_owl_active_tab);
          }
      }
      $('#category-products').imagesLoaded( function() {
        $('#category-products').owlCarousel({
          <?php if (isset($_smarty_tpl->tpl_vars['IS_RTL']->value) && $_smarty_tpl->tpl_vars['IS_RTL']->value) {?>
            direction:'rtl',
          <?php } else { ?>
            direction:'ltr',
          <?php }?>
          items : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['itempercolumn']->value, ENT_QUOTES, 'UTF-8');?>
,
          itemsCustom : false,
          itemsDesktop : [1200,<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['itemsDesktop']->value, ENT_QUOTES, 'UTF-8');?>
],
          itemsDesktopSmall : [992, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['itemsDesktopSmall']->value, ENT_QUOTES, 'UTF-8');?>
],
          itemsTablet : [768, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['itemsTablet']->value, ENT_QUOTES, 'UTF-8');?>
],
          itemsMobile : [480, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['itemsMobile']->value, ENT_QUOTES, 'UTF-8');?>
],
          singleItem : false,         // true : show only 1 item
          itemsScaleUp : false,
          slideSpeed : 200,  //  change speed when drag and drop a item
          paginationSpeed :800, // change speed when go next page

          autoPlay : false,   // time to show each item
          stopOnHover : false,
          navigation : true,
          navigationText : ["&lsaquo;", "&rsaquo;"],

          scrollPerPage :true,
          responsive :true,
          
          pagination : false,
          paginationNumbers : false,
          
          addClassActive : true,
          
          mouseDrag : true,
          touchDrag : true,

          addClassActive :    true,
          afterInit: OwlLoaded,
          afterAction : SetOwlCarouselFirstLast,

        });
      });
    }
  ); 
  function OwlLoaded(el){
    el.removeClass('owl-loading').addClass('owl-loaded').parents('.owl-row').addClass('hide-loading');
    if ($(el).parents('.tab-pane').length && !$(el).parents('.tab-pane').hasClass('active'))
        el.width('100%');
  };
<?php echo '</script'; ?>
><?php }
/* {block 'product_miniature'} */
class Block_4647384625d3c79dda29312_75716703 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature' => 
  array (
    0 => 'Block_4647384625d3c79dda29312_75716703',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if (isset($_smarty_tpl->tpl_vars['productProfileDefault']->value) && $_smarty_tpl->tpl_vars['productProfileDefault']->value) {?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoProfileProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'profile'=>$_smarty_tpl->tpl_vars['productProfileDefault']->value),$_smarty_tpl ) );?>

                <?php } else { ?>
                  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
                <?php }?>
              <?php
}
}
/* {/block 'product_miniature'} */
}
