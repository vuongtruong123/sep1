<?php
/* Smarty version 3.1.30, created on 2019-06-24 06:42:53
  from "C:\xampp\htdocs\booked\tpl\json_data.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d1054cdc71af8_26735651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '210c417ef79a8e3725ceab8823ad79805cdd1aba' => 
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
function content_5d1054cdc71af8_26735651 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['data']->value != '') {
echo $_smarty_tpl->tpl_vars['data']->value;?>

<?php }
if ($_smarty_tpl->tpl_vars['error']->value != '') {
echo $_smarty_tpl->tpl_vars['error']->value;?>

<?php }
}
}
