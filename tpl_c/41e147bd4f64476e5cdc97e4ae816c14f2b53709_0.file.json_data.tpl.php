<?php
/* Smarty version 3.1.30, created on 2019-06-26 16:15:05
  from "C:\xampp\htdocs\booked\tpl\json_data.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d137de9b446a6_88452654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41e147bd4f64476e5cdc97e4ae816c14f2b53709' => 
    array (
      0 => 'C:\\xampp\\htdocs\\booked\\tpl\\json_data.tpl',
      1 => 1555329034,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d137de9b446a6_88452654 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['data']->value != '') {
echo $_smarty_tpl->tpl_vars['data']->value;?>

<?php }
if ($_smarty_tpl->tpl_vars['error']->value != '') {
echo $_smarty_tpl->tpl_vars['error']->value;?>

<?php }
}
}
