<!-- page header -->
<?php include("headeradmin2.php"); ?>
<!-- page sidebar -->
<?php include("sidebar2.php"); ?>
<!-- include the required function -->
<?php include("../admin1/function.php"); ?>
<!-- fetching the session Year -->
<?php
if(isset($_POST['btn'])){
  $year=$_REQUEST['year'];
  $_SESSION['eyear']=$year;
}?>
<!-- fetched the session Year -->
<!-- page content -->
<div class="right_col" role="main">
  <!-- top tiles -->
  <div class="row tile_count">
    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
      <div class="left"></div>
      <div class="right">
        <span class="count_top"><i class="fa fa-user"></i> Total Events</span>
        <?php $cevent=countevent(); ?>
        <div class="count"><?php echo $cevent; ?></div><hr>
      </div>
    </div>
    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
      <div class="left"></div>
      <div class="right">
        <span class="count_top"><i class="fa fa-user"></i> Total Participants</span>
        <?php $cparticipate=countparticipate(); ?>
        <div class="count green"><?php echo $cparticipate; ?></div><hr>
      </div>
    </div>
    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
      <div class="left"></div>
      <div class="right">
        <span class="count_top"><i class="fa fa-user"></i> Total Faculty Coordinators</span>
        <?php $cfaculty=countfaculty(); ?>
        <div class="count"><?php echo $cfaculty; ?></div><hr>
      </div>
    </div>
    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
      <div class="left"></div>
      <div class="right">
        <span class="count_top"><i class="fa fa-user"></i> Total Student Heads</span>
        <?php $cstudent=countstudent(); ?>
        <div class="count"><?php echo $cstudent; ?></div><hr>
      </div>
    </div>
  </div>
  <!-- /top tiles -->
  <br/>
  <!-- /footer -->
<?php include("../admin1/footer.php"); ?>
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
