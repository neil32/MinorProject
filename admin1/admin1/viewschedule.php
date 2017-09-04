<!-- page header -->
<?php include("headeradmin1.php"); ?>
<!-- page sidebar -->
<?php include("sidebar1.php"); ?>
<?php $year=$_SESSION['eyear']; ?>
<!-- page content -->
<div class="right_col" role="main">
  <br/>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>SCHEDULE DETAILS<small>(Swaranjali <?php echo $year; ?>)</small></h2>
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
            <?php
            include("conn.php");
            $qr="SELECT DISTINCT eventdate FROM eventdetails WHERE eventyear=? ORDER BY eventdate";
            $preparedstmt = $conn->prepare($qr);
            $preparedstmt->bind_param("s", $year);
            $preparedstmt->execute();
            $preparedstmt->store_result();
            $preparedstmt->bind_result($row);
            while($preparedstmt->fetch())
            {
              $date = date('d/m/y', strtotime($row));
              ?>
                <thead>
                  <tr>
                    <th colspan="9">Date : <?php echo $date; ?></th>
                  </tr>
                </thead>
                <tr class="headings">
                  <th>S.No.</th>
              		<th>Event</th>
                  <th>Time</th>
                  <th>Venue</th>
                  <th>Faculty Co-ordinator</th>
                  <th>Branch</th>
                  <th>Student Co-ordinator</th>
                  <th>Branch</th>
                  <th>Contact</th>
              	</tr>
                <?php
                $qr2="SELECT eventid,eventname,eventtime,eventvenue FROM eventdetails WHERE eventdate=? AND eventyear=? ORDER BY eventtime";
                $preparedstmt = $conn->prepare($qr2);
                $preparedstmt->bind_param("ss", $row, $year);
                $preparedstmt->execute();
                $preparedstmt->bind_result($row1,$row2,$row3,$row4);
                $i=1;
                while($preparedstmt->fetch())
                {
                  ?>
                  <tr>
                    <td align="center" rowspan="4"><?php echo $i; ?></td>
                    <td rowspan="4"><?php echo $row2;?></td>
                    <td align="center" rowspan="4"><?php echo $row3;?></td>
                    <td rowspan="4"><?php echo $row4;?></td>
                    <?php
                    $qr3="SELECT DISTINCT faculty_id FROM faculty_event WHERE event_id=?";
                    $preparedstmt1 = $conn->prepare($qr3);
                    $preparedstmt1->bind_param("i", $row1);
                    $preparedstmt1->execute();
                    $preparedstmt1->bind_result($row5);
                    $preparedstmt1->fetch();
                    $qr4="SELECT DISTINCT ccode FROM student_event WHERE eventid=?";
                    $preparedstmt = $conn->prepare($qr4);
                    $preparedstmt->bind_param("i", $row1);
                    $preparedstmt->execute();
                    $preparedstmt->bind_result($row6);
                    $preparedstmt->fetch();
                    $fn1="SELECT facultyname,facultydept FROM facultydata WHERE facultyid=?";
                    $preparedstmt = $conn->prepare($fn1);
                    $preparedstmt->bind_param("i", $row5);
                    $preparedstmt->execute();
                    $preparedstmt->bind_result($row7,$row8);
                    ?>
                    <td>
                      <?php
                      if($preparedstmt->num_rows>0)
                      {
                        if($preparedstmt->fetch())
                        {
                          echo $row7;
                        }
                      }
                      ?>
                    </td>
                    <td>
                      <?php
                      $preparedstmt->execute();
                      if($preparedstmt->num_rows>0)
                      {
                        if($preparedstmt->fetch())
                        {
                          echo $row8;
                        }
                      }
                      ?>
                    </td>
                    <td>
                      <?php
                      $sn1="SELECT studentname,studentbranch,studentcontact FROM studentdata WHERE studentccode=?";
                      $preparedstmt = $conn->prepare($sn1);
                      $preparedstmt->bind_param("i", $row6);
                      $preparedstmt->execute();
                      $preparedstmt->bind_result($row9,$row10,$row11);
                      if($preparedstmt->num_rows>0)
                      {
                        if($preparedstmt->fetch())
                        {
                          echo $row9;
                        }
                      }
                      ?>
                    </td>
                    <td>
                      <?php
                      $preparedstmt->execute();
                      if($preparedstmt->num_rows>0)
                      {
                        if($preparedstmt->fetch())
                        {
                          echo $row10;
                        }
                      }
                      ?>
                    </td>
                    <td>
                      <?php
                      $preparedstmt->execute();
                      if($preparedstmt->num_rows>0)
                      {
                        if($preparedstmt->fetch())
                        {
                          echo $row11;
                        }
                      }
                      ?>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <?php
                      $preparedstmt1->fetch();
                      $fn2="SELECT facultyname,facultydept FROM facultydata WHERE facultyid=?";
                      $preparedstmt=$conn->prepare($fn2);
                      $preparedstmt->bind_param("i", $row5);
                      $preparedstmt->execute();
                      $preparedstmt->bind_result($row12);
                      if($preparedstmt->num_rows>0)
                      {
                        if($preparedstmt->fetch())
                        {
                          echo $row12;
                        }
                      }
                      ?>
                    </td>
                    <td>
                      <?php
                      if($preparedstmt->num_rows>0)
                      {
                        if($preparedstmt->fetch())
                        {
                          echo $row12;
                        }
                      }
                      ?></td>
                      <td></td><td></td>
                    </tr>
                    <tr>
                      <td>
                        <?php
                        $preparedstmt1->fetch();
                        $fn3="SELECT facultyname,facultydept FROM facultydata WHERE facultyid=?";
                        $preparedstmt=$conn->prepare($fn3);
                        $preparedstmt->bind_param("i", $row5);
                        $preparedstmt->execute();
                        $preparedstmt->bind_result($row13);
                        if($preparedstmt->num_rows>0)
                        {
                          if($preparedstmt->fetch())
                          {
                            echo $row13;
                          }
                        }
                        ?>
                      </td>
                      <td>
                        <?php
                        if($preparedstmt->num_rows>0)
                        {
                          if($preparedstmt->fetch())
                          {
                            echo $row13;
                          }
                        }
                        ?></td>
                        <td></td>
                        <td></td><td></td>
                      </tr>
                      <tr>
                        <td>
                          <?php
                          $preparedstmt1->fetch();
                          $fn4="SELECT facultyname,facultydept FROM facultydata WHERE facultyid=?";
                          $preparedstmt=$conn->prepare($fn4);
                          $preparedstmt->bind_param("i", $row5);
                          $preparedstmt->execute();
                          $preparedstmt->bind_result($row14);
                          if($preparedstmt->num_rows>0)
                          {
                            if($preparedstmt->fetch())
                            {
                              echo $row14;
                            }
                          }
                          ?>
                        </td>
                        <td>
                          <?php
                          if($preparedstmt->num_rows>0)
                          {
                            if($preparedstmt->fetch())
                            {
                              echo $row14;
                            }
                          }
                          ?>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <?php
                      $i++;
                    }
                    ?>
                    <?php
                  }
                  ?>
          </table>
        </div>
      </div>
    </div>
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
