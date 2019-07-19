<?php
<<<<<<< HEAD
/* Smarty version 3.1.30, created on 2019-07-17 04:52:36
=======
/* Smarty version 3.1.30, created on 2019-07-17 05:36:04
>>>>>>> 2bb7d987d09843d169e445b045b45eb5c1999198
  from "C:\xampp\htdocs\sep1\tpl\Admin\Resources\manage_resources_groups.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
<<<<<<< HEAD
  'unifunc' => 'content_5d2e8d7477dbc4_53532090',
=======
  'unifunc' => 'content_5d2e97a4416242_25114170',
>>>>>>> 2bb7d987d09843d169e445b045b45eb5c1999198
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88b1f5d9eb83d9ec88bf6278b71006266035ec90' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sep1\\tpl\\Admin\\Resources\\manage_resources_groups.tpl',
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
function content_5d2e8d7477dbc4_53532090 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5d2e97a4416242_25114170 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 2bb7d987d09843d169e445b045b45eb5c1999198
?>

<?php if (count($_smarty_tpl->tpl_vars['resource']->value->GetResourceGroupIds()) == 0) {?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);?>

<?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resource']->value->GetResourceGroupIds(), 'resourceGroupId', false, NULL, 'eachGroup', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['resourceGroupId']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_eachGroup']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_eachGroup']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_eachGroup']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_eachGroup']->value['total'];
?>
	<span class="resourceGroupId" data-value="<?php echo $_smarty_tpl->tpl_vars['resourceGroupId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['ResourceGroupList']->value[$_smarty_tpl->tpl_vars['resourceGroupId']->value]->name;?>
</span><?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_eachGroup']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_eachGroup']->value['last'] : null)) {?>, <?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
}
}
