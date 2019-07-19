<?php
<<<<<<< HEAD
/* Smarty version 3.1.30, created on 2019-07-17 06:02:50
=======
/* Smarty version 3.1.30, created on 2019-07-17 05:48:37
>>>>>>> 2bb7d987d09843d169e445b045b45eb5c1999198
  from "C:\xampp\htdocs\sep1\tpl\Ajax\reservation\reservation_attributes.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
<<<<<<< HEAD
  'unifunc' => 'content_5d2e9dea8ddee3_96508286',
=======
  'unifunc' => 'content_5d2e9a95f23406_97444675',
>>>>>>> 2bb7d987d09843d169e445b045b45eb5c1999198
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da60004e5d5aa4140c51479e787fa52deb75806c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sep1\\tpl\\Ajax\\reservation\\reservation_attributes.tpl',
<<<<<<< HEAD
      1 => 1563162001,
=======
      1 => 1563302068,
>>>>>>> 2bb7d987d09843d169e445b045b45eb5c1999198
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_5d2e9dea8ddee3_96508286 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5d2e9a95f23406_97444675 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 2bb7d987d09843d169e445b045b45eb5c1999198
?>


<?php if (count($_smarty_tpl->tpl_vars['Attributes']->value) > 0) {?>
    <div class="customAttributes">
        <div class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Attributes']->value, 'attribute', false, NULL, 'attributes', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_attributes']->value['index']++;
?>
                <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_attributes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_attributes']->value['index'] : null)%3 == 0) {?>
                    </div>
                    <div class="row">
                <?php }?>
                <div class="customAttribute col-sm-4 col-xs-12">
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"AttributeControl",'attribute'=>$_smarty_tpl->tpl_vars['attribute']->value,'readonly'=>$_smarty_tpl->tpl_vars['ReadOnly']->value),$_smarty_tpl);?>

                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
    </div>
    <div class="clear">&nbsp;</div>
<?php }
}
}
