<?php
/* Smarty version 3.1.33, created on 2019-07-27 16:21:58
  from '/var/www/html/e-commerce/themes/leo_nunica/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3c7a26f01ec3_22660212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0d7ecc564b98777a4cb385b44b9433acdad27d8' => 
    array (
      0 => '/var/www/html/e-commerce/themes/leo_nunica/templates/page.tpl',
      1 => 1564241097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3c7a26f01ec3_22660212 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4128903495d3c7a26efe127_44304028', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_18312962035d3c7a26efeb71_57046828 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_16768829845d3c7a26efe5d0_21251393 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18312962035d3c7a26efeb71_57046828', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_11662976835d3c7a26efffb7_89711626 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_17554622965d3c7a26f005d5_59332648 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_16268616745d3c7a26effb69_98427036 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11662976835d3c7a26efffb7_89711626', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17554622965d3c7a26f005d5_59332648', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_773014475d3c7a26f01415_65226848 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_3245010335d3c7a26f01004_00445031 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_773014475d3c7a26f01415_65226848', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_4128903495d3c7a26efe127_44304028 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4128903495d3c7a26efe127_44304028',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_16768829845d3c7a26efe5d0_21251393',
  ),
  'page_title' => 
  array (
    0 => 'Block_18312962035d3c7a26efeb71_57046828',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_16268616745d3c7a26effb69_98427036',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_11662976835d3c7a26efffb7_89711626',
  ),
  'page_content' => 
  array (
    0 => 'Block_17554622965d3c7a26f005d5_59332648',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_3245010335d3c7a26f01004_00445031',
  ),
  'page_footer' => 
  array (
    0 => 'Block_773014475d3c7a26f01415_65226848',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16768829845d3c7a26efe5d0_21251393', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16268616745d3c7a26effb69_98427036', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3245010335d3c7a26f01004_00445031', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
