<?php
/* Smarty version 3.1.30, created on 2019-07-03 09:22:38
  from "C:\xampp\htdocs\sep1\tpl\Calendar\mycalendar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d1c57bec54686_59925203',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ad1bb099c078ee00f572e776c29e5dce0cb0129' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sep1\\tpl\\Calendar\\mycalendar.tpl',
      1 => 1562118978,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Calendar/calendar-page-base.tpl' => 1,
  ),
),false)) {
function content_5d1c57bec54686_59925203 (Smarty_Internal_Template $_smarty_tpl) {
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
