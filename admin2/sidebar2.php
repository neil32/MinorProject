<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="admin2.php" class="site_title"><i class="fa fa-shield"></i> <span>Admin Panel</span></a>
    </div>
    <div class="clearfix"></div>
    <!-- menu prile quick info -->
    <div class="profile">
      <div class="profile_pic">
        <img src="../files/images/profile/techie1.jpg" alt="" class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Welcome</span>
        <h2><?php echo $adminname; ?></h2>
      </div>
    </div>
    <!-- /menu prile quick info -->
    <br/>
    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
          <li><a href="admin2.php"><i class="fa fa-home"></i> Home </span></a>
          </li>
          <li><a href="addfc.php"><i class="fa fa-edit"></i>Assign Faculty Co-ordinators <span></span></a>
          </li>
          <li><a href="viewscheduledh.php"><i class="fa fa-desktop"></i>View Schedule</a>
          </li>
          <li><a><i class="fa fa-bar-chart-o"></i> View Participation <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu" style="display: none">
              <li><a href="searchparticipantdh.php">Search By Event</a>
              </li>
              <li><a href="viewallparticipantsdh.php">All Participations</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="menu_section">
        <h3>Extra Features</h3>
        <ul class="nav side-menu">
          <li><a><i class="fa fa-line-chart"></i> FeedBack <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu" style="display: none">
              <li><a href="#">Create Feedback Form</a>
              </li>
              <li><a href="#">View Feedbacks</a>
              </li>
            </ul>
          </li>
          <li><a><i class="fa fa-download"></i> Download Schedule <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu" style="display: none">
              <li><a href="#">Download to pdf</a>
              </li>
              <li><a href="#">Download to excel</a>
              </li>
            </ul>
          </li>
          <li><a><i ></i> More Features<span class="label label-success pull-right">Coming Soon</span></a>
          </li>
        </ul>
      </div>
    </div>
    <!-- /sidebar menu -->
    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
      <a href="profile2.php" data-toggle="tooltip" data-placement="top" title="Profile">
        <span class="fa fa-user"  aria-hidden="true"></span>
      </a>
      <a href="setting2.php" data-toggle="tooltip" data-placement="top" title="Setting" >
        <span class="glyphicon glyphicon-cog" ></span>
      </a>
      <a href="help2.php" data-toggle="tooltip" data-placement="top" title="Help"  >
        <span class="fa fa-question" ></span>
      </a>
      <a href="logout2.php" data-toggle="tooltip" data-placement="top" title="Logout">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>
    </div>
    <!-- /menu footer buttons -->
  </div>
</div>
