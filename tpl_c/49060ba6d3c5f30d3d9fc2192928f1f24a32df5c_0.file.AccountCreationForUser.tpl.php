<?php
/* Smarty version 3.1.30, created on 2019-06-26 06:20:25
  from "C:\xampp\htdocs\booked\lang\en_us\AccountCreationForUser.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d12f28918f5d7_29814692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49060ba6d3c5f30d3d9fc2192928f1f24a32df5c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\booked\\lang\\en_us\\AccountCreationForUser.tpl',
      1 => 1555328978,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d12f28918f5d7_29814692 (Smarty_Internal_Template $_smarty_tpl) {
?>

<p><?php echo $_smarty_tpl->tpl_vars['FullName']->value;?>
,</p>

<p>An account for <?php echo $_smarty_tpl->tpl_vars['AppTitle']->value;?>
 has been created for you with the following details:<br/>
Email: <?php echo $_smarty_tpl->tpl_vars['EmailAddress']->value;?>
<br/>
Name: <?php echo $_smarty_tpl->tpl_vars['FullName']->value;?>
<br/>
Phone: <?php echo $_smarty_tpl->tpl_vars['Phone']->value;?>
<br/>
Organization: <?php echo $_smarty_tpl->tpl_vars['Organization']->value;?>
<br/>
Position: <?php echo $_smarty_tpl->tpl_vars['Position']->value;?>
<br/>
Password: <?php echo $_smarty_tpl->tpl_vars['Password']->value;?>
</p>
<?php if (!empty($_smarty_tpl->tpl_vars['CreatedBy']->value)) {?>
	Created by: <?php echo $_smarty_tpl->tpl_vars['CreatedBy']->value;?>

<?php }?>

<a href="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
">Log In to <?php echo $_smarty_tpl->tpl_vars['AppTitle']->value;?>
</a><?php }
}
