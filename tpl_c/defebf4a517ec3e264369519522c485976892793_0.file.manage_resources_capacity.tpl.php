<?php
<<<<<<< HEAD
/* Smarty version 3.1.30, created on 2019-07-17 04:52:36
=======
/* Smarty version 3.1.30, created on 2019-07-17 05:36:04
>>>>>>> 2bb7d987d09843d169e445b045b45eb5c1999198
  from "C:\xampp\htdocs\sep1\tpl\Admin\Resources\manage_resources_capacity.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
<<<<<<< HEAD
  'unifunc' => 'content_5d2e8d746b2996_90454816',
=======
  'unifunc' => 'content_5d2e97a40b1065_24978758',
>>>>>>> 2bb7d987d09843d169e445b045b45eb5c1999198
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'defebf4a517ec3e264369519522c485976892793' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sep1\\tpl\\Admin\\Resources\\manage_resources_capacity.tpl',
<<<<<<< HEAD
      1 => 1563162001,
=======
      1 => 1563302068,
>>>>>>> 2bb7d987d09843d169e445b045b45eb5c1999198
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_5d2e8d746b2996_90454816 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5d2e97a40b1065_24978758 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 2bb7d987d09843d169e445b045b45eb5c1999198
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
