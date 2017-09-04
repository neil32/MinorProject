<!-- page header -->
<?php include("headeradmin3.php"); ?>
<!-- page sidebar -->
<?php include("sidebar3.php"); ?>
<!-- page content -->
<div class="right_col" role="main">
  <!-- top tiles -->
  <div class="row tile_count">
    <!--participants table-->
    <br/>
    <?php
    include("conn.php");
    $fid=$_SESSION['adminid'];
    $year=$_SESSION['eyear'];
    $qr="SELECT event_id FROM faculty_event WHERE faculty_id=?";
    $preparedstmt=$conn->prepare($qr);
    $preparedstmt->bind_param("i", $fid);
    $preparedstmt->execute();
    $preparedstmt->store_result();
    $rs=$preparedstmt->bind_result($row1);
    if(!empty($rs))
    {
      ?>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Student Co-ordinators<small>(List of events and co-ordinators)</small></h2>
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
                    <th>Student Co-ordinators</th>
                    <th>Branch</th>
                    <th>Operation</th>
                  </tr>
                </thead>
                <?php
                while($preparedstmt->fetch())
                {
                  $qr2="SELECT eventname FROM eventdetails WHERE eventyear='$year' AND eventid=$row1";
                  $rs2=$conn->query($qr2);
                  while($row2=$rs2->fetch_assoc())
                  {
                    ?>
                    <tr>
  		              <td rowspan="4"><?php echo $row1; ?></td>
  		              <td rowspan="4"><?php echo $row2["eventname"]; ?></td>
                    <?php
                    $qr3="SELECT DISTINCT ccode FROM student_event WHERE eventid=$row1";
                    $rs3=$conn->query($qr3)
                    while($row3=$rs3->fetch_assoc())
                    {
                      $qr4="SELECT studentname,studentbranch FROM studentdata WHERE studentccode=".$row3["ccode"];
                      $rs4=$conn->query($qr4);
                      while($row4=$rs4->fetch_assoc())
                      {
                        ?>
                        <td><?php echo $row4["studentname"]; ?></td>
                        <td><?php echo $row4["studentbranch"]; ?></td>
                        <td><a href="deletesc1.php?id=<?php echo $row3["ccode"];?>&eid=<?php echo $row1; ?>">delete</a></td>
                        <?php
                      }
                    }
                    ?>
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
              <h2>Student Co-ordinators<small>(List of events and co-ordinators)</small></h2>
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
              <p>SORRY NO STUDENT CO-ORDINATORS TO DISPLAY!</p>
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
