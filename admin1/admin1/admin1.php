<!-- page header -->
<?php include("headeradmin1.php"); ?>
<!-- page sidebar -->
<?php include("sidebar1.php"); ?>
<!-- include the required function -->
<?php include("function.php"); ?>
<!-- fetching the session Year -->
<?php
if(isset($_POST['btn'])){
  $year=$_REQUEST['year'];
  $_SESSION['eyear']=$year;
}?>
<!-- page content -->
<div class="right_col" role="main">
  <!-- top tiles -->
  <div class="row tile_count">
    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
      <div class="left"></div>
      <div class="right">
        <span class="count_top"><i class="fa fa-user"></i> Total Events</span>
        <?php $cevent=countevent(); ?>
        <div class="count"><?php echo $cevent; ?><hr></div>
      </div>
    </div>
    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
      <div class="left"></div>
      <div class="right">
        <span class="count_top"><i class="fa fa-user"></i> Total Participants</span>
        <?php $cparticipate=countparticipate(); ?>
        <div class="count green"><?php echo $cparticipate; ?><hr></div>
      </div>
    </div>
    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
      <div class="left"></div>
      <div class="right">
        <span class="count_top"><i class="fa fa-user"></i> Total Faculty Coordinators</span>
        <?php $cfaculty=countfaculty(); ?>
        <div class="count"><?php echo $cfaculty; ?><hr></div>
      </div>
    </div>
    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
      <div class="left"></div>
      <div class="right">
        <span class="count_top"><i class="fa fa-user"></i> Total Student Heads</span>
        <?php $cstudent=countstudent(); ?>
        <div class="count"><?php echo $cstudent; ?><hr></div>
      </div>
    </div>
    <!-- /top tiles -->
    <br/>
    <?php
    $result=displayImage();
    if(!empty($result)){
      while($row = $result->fetch_assoc())
      {
        ?>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Settings 1</a>
                      </li>
                      <li><a href="#">Settings 2</a>
                      </li>
                    </ul>
                  </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <?php
              echo  '<h2>EventId : '.$row["event_id"].'</h2><br/><img height="300" width="300" src="data:image;base64,'.$row["image"].' ">';
              ?>
              <hr>
              <input type="submit" name="btn" value="Delete" id="btn" class="btn btn-success"/>
            </div>
          </div>
        </div>
        <?php
      }
    }
    ?>
  </div>
  <!-- footer content -->
  <?php include("footer.php"); ?>
  <!-- /footer content -->
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
