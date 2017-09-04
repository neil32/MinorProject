<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../files/css/loginstyle.css">
<div class="main">
  <div class="container">
    <center>
      <div class="middle">
        <div id="login">
          <form method="POST" action="login.php">
            <fieldset class="clearfix">
              <p ><span class="fa fa-user"></span><input type="text"  Placeholder="AdminId" name="userid" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
              <p><span class="fa fa-lock"></span><input type="password"  Placeholder="Password" name="password" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
              <p><span class="fa fa-gear"></span><select name="type" required>
                <option value="EH">Event Head</option>
              <option value="DH">Department Head</option>
              <option value="FC">Faculty Co-ordinator</option>
              <option value="SH">Student Co-ordinator</option></select></p> <!-- JS because of IE support; better: placeholder="Password" -->
              <div>
                <span style="width:48%; text-align:left;  display: inline-block;"><a class="small-text" href="forget.php">Forgot
                password?</a></span>
                <span style="width:50%; text-align:right;  display: inline-block;"><input type="submit" value="Sign In"></span>
              </div>
            </fieldset>
            <div class="clearfix"></div>
          </form>
          <div class="clearfix"></div>
        </div> <!-- end login -->
        <div class="logo"><span align="left"><img src="../files/images/ips.png"/>SIGN-IN</span>
          <div class="clearfix"></div>
        </div>
      </div>
    </center>
  </div>
</div>
