<?php
/* Smarty version 3.1.30, created on 2019-06-26 17:32:10
  from "C:\xampp\htdocs\booked\tpl\Dashboard\announcements.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d138ffa69d5b7_58961742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07a4ff9aed33cbfff627350f67fd4e08b7246aca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\booked\\tpl\\Dashboard\\announcements.tpl',
      1 => 1555329032,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d138ffa69d5b7_58961742 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="dashboard" id="announcementsDashboard">
	<div class="dashboardHeader">
		<div class="pull-left"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Announcements"),$_smarty_tpl);?>
 <span class="badge"><?php echo count($_smarty_tpl->tpl_vars['Announcements']->value);?>
</span></div>
		<div class="pull-right">
			<a href="#" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ShowHide'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Announcements"),$_smarty_tpl);?>
">
				<i class="glyphicon"></i>
                <span class="no-show">Expand/Collapse</span>
            </a>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="dashboardContents">
		<ul>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Announcements']->value, 'each');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['each']->value) {
?>
				<li><?php echo nl2br($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['url2link'][0][0]->CreateUrl(html_entity_decode($_smarty_tpl->tpl_vars['each']->value->Text())));?>
</li>
				<?php
}
} else {
?>

				<div class="noresults"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"NoAnnouncements"),$_smarty_tpl);?>
</div>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</ul>
	</div>
</div>
<?php }
}
