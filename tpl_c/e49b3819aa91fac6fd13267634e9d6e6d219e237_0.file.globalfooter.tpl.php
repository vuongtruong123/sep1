<?php
/* Smarty version 3.1.30, created on 2019-07-19 04:51:34
  from "C:\xampp\htdocs\sep1\tpl\globalfooter.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d313036ac41b7_06567026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e49b3819aa91fac6fd13267634e9d6e6d219e237' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sep1\\tpl\\globalfooter.tpl',
      1 => 1563302068,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d313036ac41b7_06567026 (Smarty_Internal_Template $_smarty_tpl) {
?>


</div><!-- close main-->

		<footer class="footer navbar" >
		<div style="text-align: center;" class="col-md-6">

<img style=" width: 550px; height: 200px; float: left;" src="img/booked.png?2.6">

</div>

<div style="float:right;" class="col-md-6">
<h5 style="margin-left: 140px; color: black;"><b>Địa Chỉ:</b></h5> 
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.631923241259!2d106.69112221411635!3d10.762824562389296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f16ad86371b%3A0x949d258c9508b1f2!2zxJDhuqFpIGjhu41jIFbEg24gTGFuZyBjxqEgc-G7nw!5e0!3m2!1svi!2s!4v1561517243608!5m2!1svi!2s"width="500" height="250" frameborder="0"  style="float:right;" allowfullscreen>
	 
</iframe>
</div>

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
