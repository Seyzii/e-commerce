<?php
/* Smarty version 3.1.33, created on 2019-07-27 16:23:22
  from '/var/www/html/e-commerce/modules/appagebuilder/views/templates/admin/guide.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3c7a7a308184_70399246',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b0bff62fe07d5911da7c809d861ab520f8351bf' => 
    array (
      0 => '/var/www/html/e-commerce/modules/appagebuilder/views/templates/admin/guide.tpl',
      1 => 1564241096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3c7a7a308184_70399246 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\admin\guide -->
<div class="alert alert-onboarding"><div class="" id="onboarding-starter">
	<div class="row">
		<div class="col-md-12">
			<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Getting Started with AP PAGE BUILDER','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 col-md-3 col-md-offset-2">
			<div class="onboarding-step step-first <?php if ($_smarty_tpl->tpl_vars['step']->value == 1) {?>active step-in-progress<?php } elseif ($_smarty_tpl->tpl_vars['step']->value > 1) {?>active step-success<?php } else { ?>step-todo<?php }?>"></div>
		</div>
		<div class="col-xs-4 col-md-3">
			<div class="onboarding-step <?php if ($_smarty_tpl->tpl_vars['step']->value == 2) {?>active step-in-progress<?php } elseif ($_smarty_tpl->tpl_vars['step']->value > 2) {?>active step-success<?php } else { ?>step-todo<?php }?>"></div>
		</div>
		<div class="col-xs-4 col-md-3">
			<div class="onboarding-step step-final <?php if ($_smarty_tpl->tpl_vars['step']->value == 3) {?>active step-in-progress<?php } else { ?>step-todo<?php }?>"></div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 col-md-3 col-md-offset-2 text-center">
			<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url1']->value,'html','UTF-8' ));?>
" style=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configure Module','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a>
		</div>
		<div class="col-xs-4 col-md-3 text-center">
			<?php if ($_smarty_tpl->tpl_vars['step']->value >= 2) {?>
			<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url2']->value,'html','UTF-8' ));?>
" style="">
			<?php } else { ?>
			<a style=" color:gray; text-decoration:none ">
			<?php }?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add profile','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a>
		</div>
		<div class="col-xs-4 col-md-3 text-center">
			<?php if ($_smarty_tpl->tpl_vars['step']->value >= 3) {?>
			<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url3']->value,'html','UTF-8' ));?>
" style="">
			<?php } else { ?>
			<a style=" color:gray; text-decoration:none ">
			<?php }
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add widget','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-lg-8 <?php if ($_smarty_tpl->tpl_vars['step']->value != 1) {?>hidden<?php }?>">
			<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Establish default parameters','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</h4>
			<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This module provides a way to generate more website templates homepage, quickly changing your website, the list displays the product, multiple widgets with many selling feature for your shop (all in one).','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</p>
		</div>
		<div class="col-lg-8 <?php if ($_smarty_tpl->tpl_vars['step']->value != 2) {?>hidden<?php }?>">
			<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create new a profile','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</h4>
			<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can create multiple profiles, only one profile, the default will be triggered when the website is published. Each profile you can customize the interface to change independently of each other website, JavaScript and Css code to be edited directly here should become more flexible.','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</p>
			<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'How to create a new profile screen: From the menu on the left "Ap Manage Profiles" to the next screen lists Profile; Click the button "Add new +"','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</p>
		</div>
		<div class="col-lg-8 <?php if ($_smarty_tpl->tpl_vars['step']->value != 3) {?>hidden<?php }?>">
			<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add new widgets and modules to build Web sites in a profile.','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</h4>
			<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This module also supply many widgets to build features for sales, intuitive user interface flexibility. Also integrate your existing modules in this module, you only need to build a site built just here and become faster page.','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</p>
			<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'How to create a new profile screen: From the menu on the left "Ap Manage Profiles" to the next screen lists Profile; click the button "View" in the list of profiles.','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</p>
		</div>
		<div class="col-lg-4 onboarding-action-container">
			<a class="btn btn-default btn-lg quick-start-button pull-right" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['next_step']->value,'html','UTF-8' ));
if ($_smarty_tpl->tpl_vars['step']->value == 3) {?>&done=1<?php }?>">
				<?php if ($_smarty_tpl->tpl_vars['step']->value == 3) {?>
					<i class="icon icon-check icon-lg"></i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'DONE  ','mod'=>'appagebuilder'),$_smarty_tpl ) );?>

				<?php } else { ?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'I\'m done, take me to next step  ','mod'=>'appagebuilder'),$_smarty_tpl ) );?>

					<i class="icon icon-angle-right icon-lg"></i>
				<?php }?>
			</a>
			<?php if ($_smarty_tpl->tpl_vars['step']->value < 3) {?>
				<a class="btn btn-lg quick-start-button pull-right" href="<?php if ($_smarty_tpl->tpl_vars['step']->value == 1) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url1']->value,'html','UTF-8' ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url2']->value,'html','UTF-8' ));
}?>&skip=1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Skip  ','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a>
			<?php }?>
		</div>
	</div>
</div></div><?php }
}
