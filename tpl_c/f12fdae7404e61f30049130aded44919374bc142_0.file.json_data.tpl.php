<?php
/* Smarty version 3.1.30, created on 2019-07-22 05:17:17
  from "C:\xampp\htdocs\SEP\sep1\tpl\json_data.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d352abdf0d938_81938767',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f12fdae7404e61f30049130aded44919374bc142' => 
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
function content_5d352abdf0d938_81938767 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['data']->value != '') {
echo $_smarty_tpl->tpl_vars['data']->value;?>

<?php }
if ($_smarty_tpl->tpl_vars['error']->value != '') {
echo $_smarty_tpl->tpl_vars['error']->value;?>

<?php }
}
}
