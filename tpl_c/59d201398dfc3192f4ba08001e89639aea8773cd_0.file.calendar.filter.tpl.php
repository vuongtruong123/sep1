<?php
/* Smarty version 3.1.30, created on 2019-06-24 06:42:52
  from "C:\xampp\htdocs\booked\tpl\Calendar\calendar.filter.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d1054cc7e3260_68383439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59d201398dfc3192f4ba08001e89639aea8773cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\booked\\tpl\\Calendar\\calendar.filter.tpl',
      1 => 1555329032,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1054cc7e3260_68383439 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row form-inline">
    <div id="filter">

		<?php if ($_smarty_tpl->tpl_vars['GroupName']->value) {?>
		<span class="groupName"><?php echo $_smarty_tpl->tpl_vars['GroupName']->value;?>
</span>
		<?php } else { ?>
		<div>
            <div class="inline"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array('id'=>'loadingIndicator'),$_smarty_tpl);?>
</div>
			<label for="calendarFilter"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ChangeCalendar"),$_smarty_tpl);?>
</label>
			<select id="calendarFilter">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filters']->value->GetFilters(), 'filter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
?>
					<option value="s<?php echo $_smarty_tpl->tpl_vars['filter']->value->Id();?>
" class="schedule" <?php if ($_smarty_tpl->tpl_vars['filter']->value->Selected()) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['filter']->value->Name();?>
</option>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter']->value->GetFilters(), 'subfilter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subfilter']->value) {
?>
						<option value="r<?php echo $_smarty_tpl->tpl_vars['subfilter']->value->Id();?>
" class="resource" <?php if ($_smarty_tpl->tpl_vars['subfilter']->value->Selected()) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['subfilter']->value->Name();?>
</option>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				<?php }?>
			</select>
			<a href="#" id="showResourceGroups"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceGroups'),$_smarty_tpl);?>
</a>
		</div>
	</div>

	<div id="resourceGroupsContainer">
		<div id="resourceGroups"></div>
	</div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
	$(function(){
		$('#calendarFilter').select2();
	});

<?php echo '</script'; ?>
><?php }
}
