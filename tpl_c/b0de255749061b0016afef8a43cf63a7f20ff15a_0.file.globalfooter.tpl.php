<?php
/* Smarty version 3.1.30, created on 2019-07-08 04:20:02
  from "C:\xampp\htdocs\sep1\tpl\globalfooter.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d22a852e9ef74_65722803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0de255749061b0016afef8a43cf63a7f20ff15a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sep1\\tpl\\globalfooter.tpl',
      1 => 1562550511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d22a852e9ef74_65722803 (Smarty_Internal_Template $_smarty_tpl) {
?>


	</div><!-- close main-->

	<footer class="footer navbar">
		&copy; 2019 <a href="http://www.twinkletoessoftware.com">Twinkle Toes Software</a> <br/><a href="http://www.bookedscheduler.com">Booked Scheduler v<?php echo $_smarty_tpl->tpl_vars['Version']->value;?>
</a>
	</footer>

	<?php echo '<script'; ?>
 type="text/javascript">
		init();
		$.blockUI.defaults.css.border = 'none';
		$.blockUI.defaults.css.top = '25%';

	<?php echo '</script'; ?>
>

	<?php if (!empty($_smarty_tpl->tpl_vars['GoogleAnalyticsTrackingId']->value)) {?>
		
			<?php echo '<script'; ?>
>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		  
			  ga('create', '<?php echo $_smarty_tpl->tpl_vars['GoogleAnalyticsTrackingId']->value;?>
', 'auto');
			  ga('send', 'pageview');
			<?php echo '</script'; ?>
>
	<?php }?>

	</body>
</html><?php }
}
