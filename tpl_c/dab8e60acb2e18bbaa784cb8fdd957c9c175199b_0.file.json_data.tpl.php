<?php
/* Smarty version 3.1.30, created on 2019-07-03 09:22:39
  from "C:\xampp\htdocs\sep1\tpl\json_data.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d1c57bf93b7c1_60803667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dab8e60acb2e18bbaa784cb8fdd957c9c175199b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sep1\\tpl\\json_data.tpl',
      1 => 1562118978,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1c57bf93b7c1_60803667 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['data']->value != '') {
echo $_smarty_tpl->tpl_vars['data']->value;?>

<?php }
if ($_smarty_tpl->tpl_vars['error']->value != '') {
echo $_smarty_tpl->tpl_vars['error']->value;?>

<?php }
}
}
