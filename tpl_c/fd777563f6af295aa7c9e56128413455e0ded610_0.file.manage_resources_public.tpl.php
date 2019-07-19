<?php
/* Smarty version 3.1.30, created on 2019-07-17 05:36:04
  from "C:\xampp\htdocs\sep1\tpl\Admin\Resources\manage_resources_public.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d2e97a44c7910_28415369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd777563f6af295aa7c9e56128413455e0ded610' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sep1\\tpl\\Admin\\Resources\\manage_resources_public.tpl',
      1 => 1563302068,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d2e97a44c7910_28415369 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['resource']->value->GetIsCalendarSubscriptionAllowed()) {?>
    <div><a class="update disableSubscription subscriptionButton"
            href="#"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'TurnOffSubscription'),$_smarty_tpl);?>
</a>
    </div>
    <div>
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"feed.png"),$_smarty_tpl);?>

        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetSubscriptionUrl()->GetAtomUrl();?>
">Atom</a>
        |
        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetSubscriptionUrl()->GetWebcalUrl();?>
">iCalendar</a>
    </div>
    <div>
        <span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'PublicId'),$_smarty_tpl);?>
</span>
        <span class="propertyValue"><?php echo $_smarty_tpl->tpl_vars['resource']->value->GetPublicId();?>
</span>
    </div>
<?php } else { ?>
    <div>
        <a class="update enableSubscription subscriptionButton"
           href="#"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'TurnOnSubscription'),$_smarty_tpl);?>
</a>
    </div>
<?php }
}
}
