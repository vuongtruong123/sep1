<?php
/* Smarty version 3.1.30, created on 2019-07-22 03:54:47
  from "C:\xampp\htdocs\SEP\sep1\tpl\json_data.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d351767ab58e0_34915852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '346ce1db9c9fdc3f2a5ac12f681554a1942f98ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SEP\\sep1\\tpl\\json_data.tpl',
      1 => 1563745867,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d351767ab58e0_34915852 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['data']->value != '') {
echo $_smarty_tpl->tpl_vars['data']->value;?>

<?php }
if ($_smarty_tpl->tpl_vars['error']->value != '') {
echo $_smarty_tpl->tpl_vars['error']->value;?>

<?php }
}
}
