   <!-- Liên kết thư viện jQuery Form -->
    <script src="<?php echo $_DOMAIN; ?>js/jquery.form.min.js"></script>

    <!-- Liên kết thư viện hàm xử lý form -->
  <script src="<?php echo $_DOMAIN; ?>js/form.js"></script>
  <!-- Liên kết thư viện CKEditor -->
  <script src="<?php echo $_DOMAIN; ?>ckeditor/ckeditor.js"></script>
  <script>
      config = {};
      config.entities_latin = false;
      config.language = "vi";
      CKEDITOR.replace("body_edit_post", config);
  </script>
  <script src="http://malsup.github.com/jquery.form.js"></script> 
  <?php
 
// Active sidebar
// Lấy tham số tab
if (isset($_GET['tab']))
{
    $tab = trim(addslashes(htmlspecialchars($_GET['tab'])));
}
else
{
    $tab = '';
}
 
// Nếu có tham số tab
if ($tab != '')
{
    // Tháo active của Bảng điều khiển
    echo '<script>$(".sidebar ul a:eq(1)").removeClass("active");</script>';
    // Active theo giá trị của tham số tab
    if ($tab == 'profile')
    {
        echo '<script>$(".sidebar ul a:eq(2)").addClass("active");</script>';
    }
    else if ($tab == 'posts')
    {
        echo '<script>$(".sidebar ul a:eq(3)").addClass("active");</script>';
    }
    else if ($tab == 'photos')
    {
        echo '<script>$(".sidebar ul a:eq(4)").addClass("active");</script>';
    }
    else if ($tab == 'categories')
    {
        echo '<script>$(".sidebar ul a:eq(5)").addClass("active");</script>';
    }
    else if ($tab == 'setting')
    {
        echo '<script>$(".sidebar ul a:eq(6)").addClass("active");</script>';
    }
}
 
?>    
<script src="https://cdn.rawgit.com/afeld/bootstrap-toc/v0.4.1/dist/bootstrap-toc.min.js"></script>
    
    
    
    
    <script type="text/javascript" src="../scripts/js/lodash.4.6.13.min.js?v=2.7.6"></script>
    <script type="text/javascript" src="../scripts/js/moment.min.js?v=2.7.6"></script>
    <script type="text/javascript" src="../scripts/js/jquery.form-3.09.min.js?v=2.7.6"></script>
    <script type="text/javascript" src="../scripts/js/jquery.blockUI-2.66.0.min.js?v=2.7.6"></script>
            <script type="text/javascript" src="../scripts/phpscheduleit.js?v=2.7.6"></script>
    <script type="text/javascript">
        $(function () {
            var navSelector = '#toc';
            var $myNav = $(navSelector);
            Toc.init({
                $nav: $myNav,
                $scope: $('#help')
            });

            $('body').scrollspy({
                target: navSelector,
                offset: 50
            });
        });
    </script>
    
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

    <script type="text/javascript">
        init();
        $.blockUI.defaults.css.border = 'none';
        $.blockUI.defaults.css.top = '25%';

    </script>

    <script src="<?php echo $_DOMAIN; ?>admin/js/jquery.min.js"></script>
        <script src="<?php echo $_DOMAIN; ?>admin/bootstrap/js/bootstrap.min.js"></script>
        <script src="http://malsup.github.com/jquery.form.js"></script> 
    </body>
</html>
        