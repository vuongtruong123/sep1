<?php
/* Smarty version 3.1.30, created on 2019-07-03 09:30:13
  from "C:\xampp\htdocs\sep1\tpl\json_data.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d1c5985e99fd9_20959801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '872621d0543809d0ff3c04f3d55d904ebd9f0e70' => 
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
function content_5d1c5985e99fd9_20959801 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['data']->value != '') {
echo $_smarty_tpl->tpl_vars['data']->value;?>

<?php }
if ($_smarty_tpl->tpl_vars['error']->value != '') {
echo $_smarty_tpl->tpl_vars['error']->value;?>

<?php }
}
}
