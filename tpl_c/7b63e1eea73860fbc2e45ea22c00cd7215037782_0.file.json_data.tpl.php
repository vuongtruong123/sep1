<?php
/* Smarty version 3.1.30, created on 2019-07-22 04:46:02
  from "C:\xampp\htdocs\SEP\sep1\tpl\json_data.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d35236aab5f07_03427963',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b63e1eea73860fbc2e45ea22c00cd7215037782' => 
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
function content_5d35236aab5f07_03427963 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['data']->value != '') {
echo $_smarty_tpl->tpl_vars['data']->value;?>

<?php }
if ($_smarty_tpl->tpl_vars['error']->value != '') {
echo $_smarty_tpl->tpl_vars['error']->value;?>

<?php }
}
}
