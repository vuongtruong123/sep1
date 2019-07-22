<?php
/* Smarty version 3.1.30, created on 2019-07-22 03:54:46
  from "C:\xampp\htdocs\SEP\sep1\tpl\Calendar\mycalendar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d351766938dc4_86707700',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9025cfe23dd237804d3ba993a2187d4484229976' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SEP\\sep1\\tpl\\Calendar\\mycalendar.tpl',
      1 => 1563745866,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Calendar/calendar-page-base.tpl' => 1,
  ),
),false)) {
function content_5d351766938dc4_86707700 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php ob_start();
echo Pages::MY_CALENDAR;
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('pageUrl', $_prefixVariable1);
$_smarty_tpl->_assignInScope('pageIdSuffix', "my-calendar");
$_smarty_tpl->_assignInScope('subscriptionTpl', "mycalendar.subscription.tpl");
$_smarty_tpl->_subTemplateRender("file:Calendar/calendar-page-base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
