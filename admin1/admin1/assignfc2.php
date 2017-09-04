<!-- page header -->
<?php include("headeradmin1.php");?>
<!-- page sidebar -->
<?php include("sidebar1.php"); ?>
<?php
if((isset($_POST['btn']))){
  if(($_POST['ename']=="null"))
  {
    header("location:assignfc.php");
  }
  $_SESSION['ename']=$_POST['ename'];
}
?>
<!-- page content -->
<?php
include("conn.php");
$year=$_SESSION['eyear'];
if(!empty($_SESSION['ename'])){
  $ename=$_SESSION['ename'];
}
else {
  header("location:assignfc.php");
}
?>
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3></h3>
      </div>
      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>ASSIGN FACULTY CO-ORDINATORS<small></small></h2>
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
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="assignfc3.php" method="POST">
              <table border="1" class="table table-striped responsive-utilities jambo_table bulk_action">
                <tr class="headings">
                  <thead>
                    <th>SNo</th>
                    <th>Event Name</th>
                    <th>Faculty 1</th>
                    <th>Faculty 2</th>
                    <th>Faculty 3</th>
                    <th>Faculty 4</th>
                    <th>Check</th>
                  </thead>
                </tr>
                <tr>
                  <th>1</th>
                  <th><?php echo $ename; ?></th>
                  <th>
                    <select name="fname1" class="form-control" required="required">
                      <option value=""> Select Faculty</option>
                      <?php
                      $qr="SELECT DISTINCT dept FROM faculty_dept";
                      $result = $conn->query($qr);
                      while($row = $result->fetch_assoc())
                      {
                        $qr2="SELECT DISTINCT facultyid FROM faculty_dept WHERE dept=''".$row["dept"];
                        $result2 = $conn->query($qr2);
                        if($result2->num_rows > 0)
                        {
                          while($row2 = $result2->fetch_assoc())
                          {
                            $qr3="SELECT DISTINCT facultydata.facultyname FROM facultydata,faculty_dept WHERE facultydata.facultyid=".$row2["facultyid"];
                            $result3 = $conn->query($qr3);
                            while($row3 = $result3->fetch_assoc())
                            {
                              ?>
                              <option value="<?php echo $row3["facultydata.facultyname"]; ?>"><?php echo $row3["facultydata.facultyname"].'    '.$row["dept"]; ?></option>
                              <?php
                            }
                          }
                        }
                      }
                      ?>
                    </select>
                  </th>
                  <th>
                    <select name="fname2" class="form-control">
                      <option value="null"> Select Faculty</option>
                      <?php
                      $qr="SELECT DISTINCT dept FROM faculty_dept";
                      $result = $conn->query($qr);
                      while($row = $result->fetch_assoc())
                      {
                        $qr2="SELECT DISTINCT facultyid FROM faculty_dept WHERE dept=''".$row["dept"];
                        $result2 = $conn->query($qr2);
                        if($result2->num_rows > 0)
                        {
                          while($row2 = $result2->fetch_assoc())
                          {
                            $qr3="SELECT DISTINCT facultydata.facultyname FROM facultydata,faculty_dept WHERE facultydata.facultyid=".$row2["facultyid"];
                            $result3 = $conn->query($qr3);
                            while($row3 = $result3->fetch_assoc())
                            {
                              ?>
                              <option value="<?php echo $row3["facultydata.facultyname"]; ?>"><?php echo $row3["facultydata.facultyname"].'    '.$row["dept"]; ?></option>
                              <?php
                            }
                          }
                        }
                      }
                      ?>
                    </select>
                  </th>
                  <th>
                    <select name="fname3" class="form-control">
                      <option value="null"> Select Faculty</option>
                      <?php
                      $qr="SELECT DISTINCT dept FROM faculty_dept";
                      $result = $conn->query($qr);
                      while($row = $result->fetch_assoc())
                      {
                        $qr2="SELECT DISTINCT facultyid FROM faculty_dept WHERE dept=''".$row["dept"];
                        $result2 = $conn->query($qr2);
                        if($result2->num_rows > 0)
                        {
                          while($row2 = $result2->fetch_assoc())
                          {
                            $qr3="SELECT DISTINCT facultydata.facultyname FROM facultydata,faculty_dept WHERE facultydata.facultyid=".$row2["facultyid"];
                            $result3 = $conn->query($qr3);
                            while($row3 = $result3->fetch_assoc())
                            {
                              ?>
                              <option value="<?php echo $row3["facultydata.facultyname"]; ?>"><?php echo $row3["facultydata.facultyname"].'    '.$row["dept"]; ?></option>
                              <?php
                            }
                          }
                        }
                      }
                      ?>
                    </select>
                  </th>
                  <th>
                    <select name="fname4" class="form-control">
                      <option value="null"> Select Faculty</option>
                      <?php
                      $qr="SELECT DISTINCT dept FROM faculty_dept";
                      $result = $conn->query($qr);
                      while($row = $result->fetch_assoc())
                      {
                        $qr2="SELECT DISTINCT facultyid FROM faculty_dept WHERE dept=''".$row["dept"];
                        $result2 = $conn->query($qr2);
                        if($result2->num_rows > 0)
                        {
                          while($row2 = $result2->fetch_assoc())
                          {
                            $qr3="SELECT DISTINCT facultydata.facultyname FROM facultydata,faculty_dept WHERE facultydata.facultyid=".$row2["facultyid"];
                            $result3 = $conn->query($qr3);
                            while($row3 = $result3->fetch_assoc())
                            {
                              ?>
                              <option value="<?php echo $row3["facultydata.facultyname"]; ?>"><?php echo $row3["facultydata.facultyname"].'    '.$row["dept"]; ?></option>
                              <?php
                            }
                          }
                        }
                      }
                      $conn->close();
                      ?>
                    </select>
                  </th>
                  <th><input type="checkbox"  class="flat" name="chk1" value="chk1"></th>
                </tr>
              </table>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button type="reset" class="btn btn-primary">Reset</button>
                  <button type="submit" name="btn" id="btn" class="btn btn-success">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- /page content -->
    <!-- footer content -->
    <?php include("footer.php"); ?>
    <!-- /footer content -->
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
<!-- tags -->
<script src="../files/js/tags/jquery.tagsinput.min.js"></script>
<!-- switchery -->
<script src="../files/js/switchery/switchery.min.js"></script>
<!-- daterangepicker -->
<script type="text/javascript" src="../files/js/moment/moment.min.js"></script>
<script type="text/javascript" src="../files/js/datepicker/daterangepicker.js"></script>
<!-- richtext editor -->
<script src="../files/js/editor/bootstrap-wysiwyg.js"></script>
<script src="../files/js/editor/external/jquery.hotkeys.js"></script>
<script src="../files/js/editor/external/google-code-prettify/prettify.js"></script>
<!-- select2 -->
<script src="../files/js/select/select2.full.js"></script>
<!-- form validation -->
<script type="text/javascript" src="../files/js/parsley/parsley.min.js"></script>
<!-- textarea resize -->
<script src="../files/js/textarea/autosize.min.js"></script>
<script>
  autosize($('.resizable_textarea'));
</script>
<!-- Autocomplete -->
<script type="text/javascript" src="../files/js/autocomplete/countries.js"></script>
<script src="../files/js/autocomplete/jquery.autocomplete.js"></script>
<!-- pace -->
<script src="../files/js/pace/pace.min.js"></script>
<script src="../files/js/custom.js"></script>
</body>
</html>
