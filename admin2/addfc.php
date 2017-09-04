<!-- page header -->
<?php include("headeradmin2.php");?>
<!-- page sidebar -->
<?php include("sidebar2.php");?>
<!-- page content -->
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
            <h2>ASSIGN CO-ORDINATORS <small></small></h2>
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
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="addfc2.php" method="POST">
              <table border="1" class="table table-striped responsive-utilities jambo_table bulk_action">
                <tr class="headings">
                  <thead>
                    <th>SNo</th>
                    <th>Faculty</th>
                    <th>Check</th>
                  </thead>
                </tr>
                <tr>
                  <th>1</th>
                  <th>
                    <select name="name1" class="form-control">
                      <option>  Select Faculty Name  </option>
                      <?php
                      $dept=$_SESSION['dept'];
                      include("conn.php");
                      $qr="SELECT facultyname FROM facultydata WHERE facultydept=?";
                      $preparedstmt=$conn->prepare($qr);
                      $preparedstmt->bind_param("s", $dept);
                      $preparedstmt->execute();
                      $rs=$preparedstmt->bind_result($row);
                      if(!empty($rs))
                      {
                        while($preparedstmt->fetch())
                        {
                          ?>
                          <option value="<?php echo $row; ?>"><?php echo $row; ?></option>
                          <?php
                        }
                      }
                        ?>
                    </select>
                  </th>
                  <th><input type="checkbox"  class="flat" name="chk1" value="chk1"></th>
                </tr>
                <tr>
                  <th>2</th>
                  <th>
                    <select name="name2" class="form-control">
                     <option >  Select Faculty Name  </option>
                     <?php
                     $preparedstmt->execute();
                     $rs=$preparedstmt->bind_result($row);
                     if(!empty($rs))
                     {
                       while($preparedstmt->fetch())
                       {
                         ?>
                         <option value="<?php echo $row; ?>"><?php echo $row; ?></option>
                         <?php
                       }
                      }
                      ?>
                    </select>
                  </th>
                  <th><input type="checkbox"  class="flat" name="chk2" value="chk2"></th>
                </tr>
                <tr>
                  <th>3</th>
                  <th>
                    <select name="name3" class="form-control">
                     <option >  Select Faculty Name  </option>
                     <?php
                     $preparedstmt->execute();
                     $rs=$preparedstmt->bind_result($row);
                     if(!empty($rs))
                     {
                       while($preparedstmt->fetch())
                       {
                         ?>
                         <option value="<?php echo $row; ?>"><?php echo $row; ?></option>
                         <?php
                        }
                      }
                       ?>
                    </select>
                  </th>
                  <th><input type="checkbox"  class="flat" name="chk3" value="chk3"></th>
                </tr>
                <tr>
                  <th>4</th>
                  <th><select name="name4" class="form-control">
                     <option >  Select Faculty Name  </option>
                     <?php
                     $preparedstmt->execute();
                     $rs=$preparedstmt->bind_result($row);
                     if(!empty($rs))
                     {
                       while($preparedstmt->fetch())
                       {
                         ?>
                         <option value="<?php echo $row; ?>"><?php echo $row; ?></option>
                         <?php
                       }
                     }
                      ?>
                    </select>
                  </th>
                  <th><input type="checkbox"  class="flat" name="chk4" value="chk4"></th>
                </tr>
                <tr>
                  <th>5</th>
                  <th><select name="name5" class="form-control">
                     <option >  Select Faculty Name  </option>
                     <?php
                     $preparedstmt->execute();
                     $rs=$preparedstmt->bind_result($row);
                     if(!empty($rs))
                     {
                       while($preparedstmt->fetch())
                       {
                         ?>
                         <option value="<?php echo $row; ?>"><?php echo $row; ?></option>
                         <?php
                        }
                      }
                      ?>
                    </select>
                  </th>
                  <th><input type="checkbox"  class="flat" name="chk5" value="chk5"></th>
                </tr>
                <tr>
                  <th>6</th>
                  <th>
                    <select name="name6" class="form-control">
                     <option >  Select Faculty Name  </option>
                     <?php
                     $preparedstmt->execute();
                     $rs=$preparedstmt->bind_result($row);
                     if(!empty($rs))
                     {
                       while($preparedstmt->fetch())
                       {
                         ?>
                         <option value="<?php echo $row; ?>"><?php echo $row; ?></option>
                         <?php
                        }
                      }
                      ?>
                    </select>
                  </th>
                  <th><input type="checkbox"  class="flat" name="chk6" value="chk6"></th>
                </tr>
                <tr>
                  <th>7</th>
                  <th><select name="name7" class="form-control">
                     <option >  Select Faculty Name  </option>
                     <?php
                     $preparedstmt->execute();
                     $rs=$preparedstmt->bind_result($row);
                     if(!empty($rs))
                     {
                       while($preparedstmt->fetch())
                       {
                         ?>
                         <option value="<?php echo $row; ?>"><?php echo $row; ?></option>
                         <?php
                        }
                      }
                      ?>
                    </select>
                  </th>
                  <th><input type="checkbox"  class="flat" name="chk7" value="chk7"></th>
                </tr>
                <tr>
                  <th>8</th>
                  <th>
                    <select name="name8" class="form-control">
                     <option >  Select Faculty Name  </option>
                     <?php
                     $preparedstmt->execute();
                     $rs=$preparedstmt->bind_result($row);
                     if(!empty($rs))
                     {
                       while($preparedstmt->fetch())
                       {
                         ?>
                         <option value="<?php echo $row; ?>"><?php echo $row; ?></option>
                         <?php
                        }
                      }
                      ?>
                    </select>
                  </th>
                  <th><input type="checkbox"  class="flat" name="chk8" value="chk8"></th>
                </tr>
                <tr>
                  <th>9</th>
                  <th>
                    <select name="name9" class="form-control">
                     <option >  Select Faculty Name  </option>
                     <?php
                     $preparedstmt->execute();
                     $rs=$preparedstmt->bind_result($row);
                     if(!empty($rs))
                     {
                       while($preparedstmt->fetch())
                       {
                         ?>
                         <option value="<?php echo $row; ?>"><?php echo $row; ?></option>
                         <?php
                        }
                      }
                      ?>
                    </select>
                  </th>
                  <th><input type="checkbox"  class="flat" name="chk9" value="chk9"></th>
                </tr>
                <tr>
                  <th>10</th>
                  <th>
                    <select name="name10" class="form-control">
                     <option >  Select Faculty Name  </option>
                     <?php
                     $preparedstmt->execute();
                     $rs=$preparedstmt->bind_result($row);
                     if(!empty($rs))
                     {
                       while($preparedstmt->fetch())
                       {
                         ?>
                         <option value="<?php echo $row; ?>"><?php echo $row; ?></option>
                         <?php
                        }
                      }
                      ?>
                    </select>
                  </th>
                  <th><input type="checkbox"  class="flat" name="chk10" value="chk10"></th>
                </tr>
                <tr>
                  <th>11</th>
                  <th>
                    <select name="name11" class="form-control">
                     <option >  Select Faculty Name  </option>
                     <?php
                     $preparedstmt->execute();
                     $rs=$preparedstmt->bind_result($row);
                     if(!empty($rs))
                     {
                       while($preparedstmt->fetch())
                       {
                         ?>
                         <option value="<?php echo $row; ?>"><?php echo $row; ?></option>
                         <?php
                        }
                      }
                      ?>
                    </select>
                  </th>
                  <th><input type="checkbox"  class="flat" name="chk11" value="chk11"></th>
                </tr>
                <tr>
                  <th>12</th>
                  <th>
                    <select name="name12" class="form-control">
                     <option >  Select Faculty Name  </option>
                     <?php
                     $preparedstmt->execute();
                     $rs=$preparedstmt->bind_result($row);
                     if(!empty($rs))
                     {
                       while($preparedstmt->fetch())
                       {
                         ?>
                         <option value="<?php echo $row; ?>"><?php echo $row; ?></option>
                         <?php
                        }
                      }
                      ?>
                    </select>
                  </th>
                  <th><input type="checkbox"  class="flat" name="chk12" value="chk12"></th>
                </tr>
                <tr>
                  <th>13</th>
                  <th>
                    <select name="name13" class="form-control">
                     <option >  Select Faculty Name  </option>
                     <?php
                     $preparedstmt->execute();
                     $rs=$preparedstmt->bind_result($row);
                     if(!empty($rs))
                     {
                       while($preparedstmt->fetch())
                       {
                         ?>
                         <option value="<?php echo $row; ?>"><?php echo $row; ?></option>
                         <?php
                        }
                      }
                     ?>
                    </select>
                  </th>
                  <th><input type="checkbox"  class="flat" name="chk13" value="chk13"></th>
                </tr>
                <tr>
                  <th>14</th>
                  <th>
                    <select name="name14" class="form-control">
                     <option >  Select Faculty Name  </option>
                     <?php
                     $preparedstmt->execute();
                     $rs=$preparedstmt->bind_result($row);
                     if(!empty($rs))
                     {
                       while($preparedstmt->fetch())
                       {
                         ?>
                         <option value="<?php echo $row; ?>"><?php echo $row; ?></option>
                         <?php
                        }
                      }
                      ?>
                    </select>
                  </th>
                  <th><input type="checkbox"  class="flat" name="chk14" value="chk14"></th>
                </tr>
                <tr>
                  <th>15</th>
                  <th>
                    <select name="name15" class="form-control">
                     <option >  Select Faculty Name  </option>
                     <?php
                     $preparedstmt->execute();
                     $rs=$preparedstmt->bind_result($row);
                     if(!empty($rs))
                     {
                       while($preparedstmt->fetch())
                       {
                         ?>
                         <option value="<?php echo $row; ?>"><?php echo $row; ?></option>
                         <?php
                        }
                      }
                      ?>
                    </select>
                  </th>
                  <th><input type="checkbox"  class="flat" name="chk15" value="chk15"></th>
                </tr>
              </table>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button type="reset" class="btn btn-primary">Reset</button>
                  <button type="submit" name="btn" id="btn" class="btn btn-success">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!-- /page content -->
    <!-- footer content -->
    <?php include("../admin1/footer.php"); ?>
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
