<?php
/* Smarty version 3.1.30, created on 2019-07-22 04:31:24
  from "C:\xampp\htdocs\SEP\sep1\lang\en_us\ReservationCreated.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d351ffc7f2c60_76928707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '764d1964829ef30eb88fcea7378b6b8cd1ed87aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SEP\\sep1\\lang\\en_us\\ReservationCreated.tpl',
      1 => 1563745865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d351ffc7f2c60_76928707 (Smarty_Internal_Template $_smarty_tpl) {
?>

Reservation Details:
<br/>
<br/>

Starting: <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['StartDate']->value,'key'=>'reservation_email'),$_smarty_tpl);?>
<br/>
Ending: <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['EndDate']->value,'key'=>'reservation_email'),$_smarty_tpl);?>
<br/>
<?php if (count($_smarty_tpl->tpl_vars['ResourceNames']->value) > 1) {?>
	Resources:
	<br/>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ResourceNames']->value, 'resourceName');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['resourceName']->value) {
?>
		<?php echo $_smarty_tpl->tpl_vars['resourceName']->value;?>

		<br/>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php } else { ?>
	Resource: <?php echo $_smarty_tpl->tpl_vars['ResourceName']->value;?>

	<br/>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['ResourceImage']->value) {?>
	<div class="resource-image"><img src="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ResourceImage']->value;?>
"/></div>
<?php }?>

Title: <?php echo $_smarty_tpl->tpl_vars['Title']->value;?>
<br/>
Description: <?php echo nl2br($_smarty_tpl->tpl_vars['Description']->value);?>


<?php if (count($_smarty_tpl->tpl_vars['RepeatRanges']->value) > 0) {?>
	<br/>
	The reservation occurs on the following dates:
	<br/>
<?php }?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RepeatRanges']->value, 'date', false, NULL, 'dates', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['date']->value) {
?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['date']->value->GetBegin()),$_smarty_tpl);?>

    <?php if (!$_smarty_tpl->tpl_vars['date']->value->IsSameDate()) {?> - <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['date']->value->GetEnd()),$_smarty_tpl);
}?>
	<br/>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


<?php if (count($_smarty_tpl->tpl_vars['Participants']->value) > 0) {?>
    <br/>
    Participants:
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Participants']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['user']->value->FullName();?>
 <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['user']->value->EmailAddress();?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value->EmailAddress();?>
</a>
        <br/>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php }?>

<?php if (count($_smarty_tpl->tpl_vars['ParticipatingGuests']->value) > 0) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ParticipatingGuests']->value, 'email');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['email']->value) {
?>
        <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</a>
        <br/>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php }?>

<?php if (count($_smarty_tpl->tpl_vars['Invitees']->value) > 0) {?>
    <br/>
    Invitees:
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Invitees']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['user']->value->FullName();?>
 <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['user']->value->EmailAddress();?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value->EmailAddress();?>
</a>
        <br/>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php }?>

<?php if (count($_smarty_tpl->tpl_vars['InvitedGuests']->value) > 0) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['InvitedGuests']->value, 'email');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['email']->value) {
?>
        <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</a>
        <br/>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php }?>

<?php if (count($_smarty_tpl->tpl_vars['Accessories']->value) > 0) {?>
	<br/>
	Accessories:
	<br/>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Accessories']->value, 'accessory');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['accessory']->value) {
?>
		(<?php echo $_smarty_tpl->tpl_vars['accessory']->value->QuantityReserved;?>
) <?php echo $_smarty_tpl->tpl_vars['accessory']->value->Name;?>

		<br/>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['CreditsCurrent']->value > 0) {?>
    <br/>
    This reservation costs <?php echo $_smarty_tpl->tpl_vars['CreditsCurrent']->value;?>
 credits.
    <?php if ($_smarty_tpl->tpl_vars['CreditsCurrent']->value != $_smarty_tpl->tpl_vars['CreditsTotal']->value) {?>
        This series costs <?php echo $_smarty_tpl->tpl_vars['CreditsTotal']->value;?>
 credits.
    <?php }
}?>

<?php if (count($_smarty_tpl->tpl_vars['Attributes']->value) > 0) {?>
	<br/>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Attributes']->value, 'attribute');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value) {
?>
		<div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"AttributeControl",'attribute'=>$_smarty_tpl->tpl_vars['attribute']->value,'readonly'=>true),$_smarty_tpl);?>
</div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['RequiresApproval']->value) {?>
	<br/>
	At least one of the resources reserved requires approval before usage. This reservation will be pending until it is approved.
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['CheckInEnabled']->value) {?>
	<br/>
	At least one of the resources reserved requires you to check in and out of your reservation.
	<?php if ($_smarty_tpl->tpl_vars['AutoReleaseMinutes']->value != null) {?>
		This reservation will be cancelled unless you check in within <?php echo $_smarty_tpl->tpl_vars['AutoReleaseMinutes']->value;?>
 minutes after the scheduled start time.
	<?php }
}?>

<?php if (!empty($_smarty_tpl->tpl_vars['ApprovedBy']->value)) {?>
	<br/>
	Approved by: <?php echo $_smarty_tpl->tpl_vars['ApprovedBy']->value;?>

<?php }?>


<?php if (!empty($_smarty_tpl->tpl_vars['CreatedBy']->value)) {?>
	<br/>
	Created by: <?php echo $_smarty_tpl->tpl_vars['CreatedBy']->value;?>

<?php }?>

<br/>
Reference Number: <?php echo $_smarty_tpl->tpl_vars['ReferenceNumber']->value;?>


<br/>
<br/>
<a href="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ReservationUrl']->value;?>
">View this reservation</a> |
<a href="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ICalUrl']->value;?>
">Add to Calendar</a> |
<a href="http://www.google.com/calendar/event?action=TEMPLATE&text=<?php echo rawurlencode($_smarty_tpl->tpl_vars['Title']->value);?>
&dates=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['StartDate']->value->ToUtc(),'key'=>'google'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['EndDate']->value->ToUtc(),'key'=>'google'),$_smarty_tpl);?>
&ctz=<?php echo $_smarty_tpl->tpl_vars['StartDate']->value->Timezone();?>
&details=<?php echo rawurlencode($_smarty_tpl->tpl_vars['Description']->value);?>
&location=<?php echo rawurlencode($_smarty_tpl->tpl_vars['ResourceName']->value);?>
&trp=false&sprop=&sprop=name:"
   target="_blank" rel="nofollow">Add to Google Calendar</a> |
<a href="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
">Log in to <?php echo $_smarty_tpl->tpl_vars['AppTitle']->value;?>
</a>
<?php }
}
