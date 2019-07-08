{*
Copyright 2011-2019 Nick Korbel

This file is part of Booked Scheduler.

Booked Scheduler is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Booked Scheduler is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Booked Scheduler.  If not, see <http://www.gnu.org/licenses/>.
*}

	</div><!-- close main-->

	<footer class="footer navbar" >
		<div style="text-align: center;" class="col-md-6">

<img style=" width: 550px; height: 200px; float: left;" src="img/booked.png?2.6">

</div>

<div style="float:right;" class="col-md-6">
<h5 style="margin-left: 220px; color: black;"><b>Địa Chỉ:</b></h5> 
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.631923241259!2d106.69112221411635!3d10.762824562389296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f16ad86371b%3A0x949d258c9508b1f2!2zxJDhuqFpIGjhu41jIFbEg24gTGFuZyBjxqEgc-G7nw!5e0!3m2!1svi!2s!4v1561517243608!5m2!1svi!2s"width="500" height="250" frameborder="0"  style="float:right;" allowfullscreen>
	 
</iframe>
</div>

	</footer>

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