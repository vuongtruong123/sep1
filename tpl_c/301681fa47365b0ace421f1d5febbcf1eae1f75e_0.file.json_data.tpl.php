<?php
/* Smarty version 3.1.30, created on 2019-07-15 05:46:32
  from "C:\xampp\htdocs\sep1\tpl\json_data.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d2bf7180fcdf3_56663251',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '301681fa47365b0ace421f1d5febbcf1eae1f75e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sep1\\tpl\\json_data.tpl',
      1 => 1563162001,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d2bf7180fcdf3_56663251 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['data']->value != '') {
echo $_smarty_tpl->tpl_vars['data']->value;?>

<?php }
if ($_smarty_tpl->tpl_vars['error']->value != '') {
echo $_smarty_tpl->tpl_vars['error']->value;?>

<?php }
}
}
