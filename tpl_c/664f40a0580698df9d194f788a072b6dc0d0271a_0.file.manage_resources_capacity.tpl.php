<?php
/* Smarty version 3.1.30, created on 2019-07-15 05:49:47
  from "C:\xampp\htdocs\sep1\tpl\Admin\Resources\manage_resources_capacity.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d2bf7db53d8e4_00439251',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '664f40a0580698df9d194f788a072b6dc0d0271a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sep1\\tpl\\Admin\\Resources\\manage_resources_capacity.tpl',
      1 => 1563162001,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d2bf7db53d8e4_00439251 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="maxParticipants"
	 data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxParticipants();?>
">
	<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasMaxParticipants()) {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceCapacity','args'=>$_smarty_tpl->tpl_vars['resource']->value->GetMaxParticipants()),$_smarty_tpl);?>

	<?php } else { ?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceCapacityNone'),$_smarty_tpl);?>

	<?php }?>
</div><?php }
}
