<!-- page header -->
<?php include("headeradmin3.php"); ?>
<!-- page sidebar -->
<?php include("sidebar3.php"); ?>
<?php
include("conn.php");
$ccode=$_SESSION['adminid'];
$year=$_SESSION['eyear'];
$qr="SELECT count(eventid) FROM faculty_event WHERE faculty_id=?";
$preparedstmt=$conn->prepare($qr);
$preparedstmt->bind_param("i", $ccode);
$preparedstmt->execute();
$preparedstmt->store_result();
$rs=$preparedstmt->bind_result($row1);
?>
<!-- page content -->
<div class="right_col" role="main">
  <!-- top tiles -->
  <div class="row tile_count">
    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
      <div class="left"></div>
      <div class="right">
        <span class="count_top"><i class="fa fa-user"></i> My Events</span>
        <div class="count"><?php echo $row1; ?></div>
        <hr>
      </div>
    </div>
    <br/>
    <?php
    $qr2="SELECT event_id FROM faculty_event WHERE faculty_id=?";
    $preparedstmt=$conn->prepare($qr2);
    $preparedstmt->bind_param("i", $ccode);
    $preparedstmt->execute();
    $rs2=$preparedstmt->bind_result($row2);
    if(!empty($rs2)){
      ?>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Event Details<small>(List of events)</small></h2>
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
            <div class="x_content">
              <br/>
              <table border="1" class="table table-striped responsive-utilities jambo_table bulk_action">
                <thead>
                  <tr class="headings">
		                <th>Event ID</th>
		                <th>Event Name</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Venue</th>
                  </tr>
                </thead>
                <?php
                while($preparedstmt->fetch())
                {
                  $qr3="SELECT eventname,eventdate,eventtime,eventvenue FROM eventdetails WHERE eventyear='$year' and `eventid`=$row3";
                  $rs3=$conn->query($qr3);
                  if($row3=$rs3->fetch_assoc())
                  {
                    ?>
                    <tr>
  		                <td><?php echo $row2; ?></td>
  		                <td><?php echo $row3["eventname"]; ?></td>
                      <td><?php echo $row3["eventdate"]; ?></td>
                      <td><?php echo $row3["eventtime"]; ?></td>
                      <td><?php echo $row3["eventvenue"]; ?></td>
                    </tr>
                    <?php
                  }
                }
                ?>
              </table>
              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <br/>
                <a href="admin3.php"><button type="button" name="btn" class="btn btn-success">Home</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
      $preparedstmt->close();
      $conn->close();
    }
    else
    {
      ?>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Event Details<small>(List of events)</small></h2>
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
            <div class="x_content">
              <br/>
              <p>SORRY NO EVENTS TO DISPLAY!</p>
            </div>
          </div>
        </div>
      </div>
      <?php
      $preparedstmt->close();
      $conn->close();
    }
    ?>
  </div>
  <!-- footer content -->
  <?php include("../admin1/footer.php"); ?>
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
