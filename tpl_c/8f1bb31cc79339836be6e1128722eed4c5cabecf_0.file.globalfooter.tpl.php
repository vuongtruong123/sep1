<?php
/* Smarty version 3.1.30, created on 2019-08-15 17:18:24
  from "C:\xampp\htdocs\SEP\sep1\tpl\globalfooter.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d5577c0ee5922_69947595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f1bb31cc79339836be6e1128722eed4c5cabecf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SEP\\sep1\\tpl\\globalfooter.tpl',
      1 => 1564373517,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5577c0ee5922_69947595 (Smarty_Internal_Template $_smarty_tpl) {
?>

</div><!-- close main-->

<!-- <footer class="footer navbar" >
<div style="text-align: center;" class="col-md-6">


</div>

<div style="float:right;" class="col-md-6">
<h5 style="margin-left: 140px; color: black; float-left:none;"><b>Địa Chỉ:</b></h5> 
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.631923241259!2d106.69112221411635!3d10.762824562389296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f16ad86371b%3A0x949d258c9508b1f2!2zxJDhuqFpIGjhu41jIFbEg24gTGFuZyBjxqEgc-G7nw!5e0!3m2!1svi!2s!4v1561517243608!5m2!1svi!2s"width="500" height="150" frameborder="0"  style="float:right;" allowfullscreen>
	 
</iframe>
</div>

	</footer> -->
<!-- Footer -->
<footer class="page-footer font-small blue pt-4">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <div class="row d-flex justify-content-center">

      <!--Grid column-->
      <div class="col-md-6 mb-md-0 mb-6 text-center">

        <!-- Video -->
        <div class="embed-responsive embed-responsive-16by9 mb-4">
          <img class="embed-responsive-item text-center" src="img/booked.png?2.6"></img>
        </div>

      </div>
      <!--Grid column-->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-6 mb-md-0 mb-6 text-left">

        <!-- Links -->
        <strong class="text-uppercase">Địa chỉ:</strong>

        <ul class="embed-responsive embed-responsive-16by9 mb-4">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.631923241259!2d106.69112221411635!3d10.762824562389296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f16ad86371b%3A0x949d258c9508b1f2!2zxJDhuqFpIGjhu41jIFbEg24gTGFuZyBjxqEgc-G7nw!5e0!3m2!1svi!2s!4v1561517243608!5m2!1svi!2s"></iframe>
        </ul>

      </div>

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="https://www.bookedscheduler.com/">bookedscheduler.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

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
