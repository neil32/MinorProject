<?php
if((isset($_POST['btn1']) && $_POST['eid']=="null") || (isset($_POST['btn2']) && $_POST['ename']=="null"))
{
  header("location:searchparticipantfc.php");
}
?>
<!-- page header -->
<?php include("headeradmin3.php"); ?>
<!-- page sidebar -->
<?php include("sidebar3.php"); ?>
<!-- page content -->
<div class="right_col" role="main">
  <br/>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Event Details<small></small></h2>
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
              <tr>
                <th>Event ID</th>
                <th>Event Name</th>
                <th>No. Of Participants</th>
                <th>Operation</th>
              </tr>
            </thead>
            <?php
            if(isset($_POST['btn1'])){
              include("conn.php");
              $year=$_SESSION['eyear'];
              $eid=$_POST['eid'];
              $qr="SELECT eventid,eventname FROM eventdetails WHERE eventid=$eid AND eventyear='$year'";
              $result=$conn->query($qr);
              $qr2="SELECT count(ccode) AS total FROM participate WHERE eventid=$eid";
              $result2=$conn->query($qr2);
              if($row=$result->fetch_assoc())
              {
                if($row2=$result2->fetch_assoc())
                {
                  ?>
                  <tr>
                    <td><?php echo $row["eventid"]; ?></td>
                    <td><?php echo $row["eventname"]; ?></td>
                    <td><?php echo $row2["total"]; ?></td>
                    <?php
                    if(empty($row2["total"]))
                    {
                      ?>
                      <td> - </td>
                      <?php
                    }
                    else {
                      ?>
                      <td><a href="viewparticipantfc.php?id=<?php echo $eid; ?>">view</a></td>
                      <?php
                    }
                    ?>
                  </tr>
                  <?php
                }
              }
              $conn->close();
            }
            elseif(isset($_POST['btn2']))
            {
              include("conn.php");
              $year=$_SESSION['eyear'];
              $ename=$_POST['ename'];
              $qr="SELECT eventid,eventname FROM eventdetails WHERE eventname=`$ename` AND eventyear='$year'";
              $result=$conn->query($qr);
              if($result->num_rows>0)
              {
                if($row=$result->fetch_assoc())
                {
                  $qr2="SELECT count(ccode) AS total FROM participate WHERE eventid=".$row["eventid"];
                  $result2=$conn->query($qr2);
                  if($row2=$result2->fetch_assoc())
                  {
                    ?>
                    <tr>
                      <td><?php echo $row["eventid"]; ?></td>
                      <td><?php echo $row["eventname"]; ?></td>
                      <td><?php echo $row2["total"]; ?></td>
                      <td><a href="viewparticipantfc.php?id=<?php echo $row["eventid"]; ?>">view</a></td>
                    </tr>
                    <?php
                  }
                }
              }
            }
            ?>
          </table>
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <br/>
            <a href="searchparticipantfc.php"><button type="button" name="btn" class="btn btn-success">Search More</button></a>
          </div>
        </div>
      </div>
    </div>
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
