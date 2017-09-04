<?php  ?>
<!-- page header -->
<?php include("headeradmin3.php"); ?>
<!-- page sidebar -->
<?php include("sidebar3.php"); ?>
<!-- fetching the session Year -->
<?php
if(isset($_POST['btn']))
{
  $year=$_REQUEST['year'];
  $_SESSION['eyear']=$year;
}
?>
<!-- fetched the session Year -->
<!-- page content -->
<div class="right_col" role="main">
  <!-- top tiles -->
  <div class="row tile_count">
    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
      <div class="left"></div>
      <div class="right">
        <span class="count_top"><i class="fa fa-user"></i>My Events</span>
        <div class="count">25</div>
        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>4% </i> From last Year</span><hr>
      </div>
    </div>
    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
      <div class="left"></div>
      <div class="right">
        <span class="count_top"><i class="fa fa-user"></i> Total Participants</span>
        <div class="count green">250</div>
        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Year</span><hr>
      </div>
    </div>
    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
      <div class="left"></div>
      <div class="right">
        <span class="count_top"><i class="fa fa-user"></i> Total Student Coordinators</span>
        <div class="count">45</div>
        <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Year</span><hr>
      </div>
    </div>
    <!-- /top tiles -->
    <br/>
    <div class="row">
    </div>
  </div>
</div>
<div id="custom_notifications" class="custom-notifications dsp_none">
  <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
  </ul>
  <div class="clearfix"></div>
  <div id="notif-group" class="tabbed_notifications"></div>
</div>
<script src="../files/js/bootstrap.min.js"></script>
<!-- bootstrap progress js -->
<script src="../files/js/progressbar/bootstrap-progressbar.min.js"></script>
<script src="../files/js/nicescroll/jquery.nicescroll.min.js"></script>
<!-- icheck -->
<script src="../files/js/icheck/icheck.min.js"></script>
<script src="../files/js/chartjs/chart.min.js"></script>
<script src="../files/js/custom.js"></script>
</body>
</html>
