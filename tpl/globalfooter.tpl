
</div>
<div class="container-fluid" style="background-color:#D6D6D6;">
<footer class="page-footer font-small blue">
  <br>
  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <div class="row d-flex justify-content-center">

      <!--Grid column-->
      <div class="col-md-6 mb-md-0 mb-6 text-center">

        <!-- Video -->
        <div class="embed-responsive embed-responsive-16by9 mb-4">
          <img class="embed-responsive-item text-center" style="border-right: 2px solid #FFFFFF; height: 200px" src="img/booked.png?2.6"></img>
        </div>

      </div>


      <div class="col-md-6 mb-md-0 mb-6 text-left" style="margin-top: 10px">
        <p class="text-uppercase" style="font-family: quicksan;">Địa chỉ:</p>
        <ul class="embed-responsive embed-responsive-16by9 mb-4">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.631923241259!2d106.69112221411635!3d10.762824562389296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f16ad86371b%3A0x949d258c9508b1f2!2zxJDhuqFpIGjhu41jIFbEg24gTGFuZyBjxqEgc-G7nw!5e0!3m2!1svi!2s!4v1561517243608!5m2!1svi!2s"  ></iframe>
        </ul>

      </div>

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
<!--   <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="https://www.bookedscheduler.com/">bookedscheduler.com</a>
  </div> -->
  <!-- Copyright -->

</footer>
</div>
<!-- Footer -->

	<script type="text/javascript">
		init();
		$.blockUI.defaults.css.border = 'none';
		$.blockUI.defaults.css.top = '25%';

	</script>

	{if !empty($GoogleAnalyticsTrackingId)}
		{literal}
			<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		  {/literal}
			  ga('create', '{$GoogleAnalyticsTrackingId}', 'auto');
			  ga('send', 'pageview');
			</script>
	{/if}

	</body>
</html>