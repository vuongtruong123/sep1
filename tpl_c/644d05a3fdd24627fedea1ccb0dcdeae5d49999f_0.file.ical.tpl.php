<?php
/* Smarty version 3.1.30, created on 2019-07-22 04:31:24
  from "C:\xampp\htdocs\SEP\sep1\tpl\Export\ical.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d351ffc5c3ec2_00756126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '644d05a3fdd24627fedea1ccb0dcdeae5d49999f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SEP\\sep1\\tpl\\Export\\ical.tpl',
      1 => 1563745866,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d351ffc5c3ec2_00756126 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_regex_replace')) require_once 'C:\\xampp\\htdocs\\SEP\\sep1\\lib\\external\\Smarty\\plugins\\modifier.regex_replace.php';
?>
BEGIN:VCALENDAR
VERSION:2.0
METHOD:REQUEST
PRODID:-//BookedScheduler//NONSGML <?php echo $_smarty_tpl->tpl_vars['bookedVersion']->value;?>
//EN
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Reservations']->value, 'reservation');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['reservation']->value) {
?>
BEGIN:VEVENT
CLASS:PUBLIC
CREATED:<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->DateCreated,'key'=>'ical'),$_smarty_tpl);?>

DESCRIPTION:<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['reservation']->value->Description,"/\r\n|\n|\r/m","\n ");?>

DTSTAMP:<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->DateCreated,'key'=>'ical'),$_smarty_tpl);?>

DTSTART:<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->DateStart,'key'=>'ical'),$_smarty_tpl);?>

DTEND:<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->DateEnd,'key'=>'ical'),$_smarty_tpl);?>

LAST-MODIFIED:<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->LastModified,'key'=>'ical'),$_smarty_tpl);?>

LOCATION:<?php echo $_smarty_tpl->tpl_vars['reservation']->value->Location;?>

ORGANIZER;CN=<?php echo $_smarty_tpl->tpl_vars['reservation']->value->Organizer;?>
:MAILTO:<?php echo $_smarty_tpl->tpl_vars['reservation']->value->OrganizerEmail;?>

STATUS:<?php if ($_smarty_tpl->tpl_vars['reservation']->value->IsPending) {?>TENTATIVE<?php } else { ?>CONFIRMED
<?php }
if ($_smarty_tpl->tpl_vars['reservation']->value->RecurRule != '') {?>
RRULE:<?php echo $_smarty_tpl->tpl_vars['reservation']->value->RecurRule;?>

<?php }?>
SUMMARY:<?php echo $_smarty_tpl->tpl_vars['reservation']->value->Summary;?>

UID:<?php echo $_smarty_tpl->tpl_vars['reservation']->value->ReferenceNumber;?>
&<?php echo $_smarty_tpl->tpl_vars['UID']->value;?>

SEQUENCE:0
URL:<?php echo $_smarty_tpl->tpl_vars['reservation']->value->ReservationUrl;?>

X-MICROSOFT-CDO-BUSYSTATUS:BUSY
<?php if ($_smarty_tpl->tpl_vars['reservation']->value->StartReminder != null) {?>
BEGIN:VALARM
TRIGGER;RELATED=START:-PT<?php echo $_smarty_tpl->tpl_vars['reservation']->value->StartReminder->MinutesPrior();?>
M
ACTION:DISPLAY
DESCRIPTION:<?php echo $_smarty_tpl->tpl_vars['reservation']->value->Description;?>

END:VALARM
<?php }
if ($_smarty_tpl->tpl_vars['reservation']->value->EndReminder != null) {?>
BEGIN:VALARM
TRIGGER;RELATED=END:-PT<?php echo $_smarty_tpl->tpl_vars['reservation']->value->EndReminder->MinutesPrior();?>
M
ACTION:DISPLAY
DESCRIPTION:<?php echo $_smarty_tpl->tpl_vars['reservation']->value->Summary;?>

END:VALARM
<?php }?>
END:VEVENT
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

END:VCALENDAR<?php }
}
