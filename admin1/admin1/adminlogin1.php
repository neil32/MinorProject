<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>
  <link rel="stylesheet" href="../files/css/stylelogin.css">
  <style>
    body {
      font-family: "Open Sans", sans-serif;
      height: 100vh;
      background-image:url(../files/images/back.jpg);
      background-size: cover;
    }
  </style>
</head>
<body>
  <div class="login-html">
     <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		 <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
		 <div class="login-form">
			  <div class="sign-in-htm">
          <form  method="POST" action="login.php">
             <?php if(isset($_COOKIE["userid"])){ ?>
            <div class="group">
              <label for="user" class="label">AdminID</label>
					    <input id="user" type="text" class="input" value="<?php echo $_COOKIE["userid"];?>" name="userid" required="required" >
				    </div><?php }else { ?>
              <div class="group">
                <label for="user" class="label">AdminID</label>
  					    <input id="user" type="text" class="input"  name="userid" required="required" >
  				    </div>
				      <?php } if(isset($_COOKIE["password"])){ ?>
				    <div class="group">
					    <label for="pass" class="label">Password</label>
					    <input id="pass" type="password" value="<?php echo $_COOKIE["password"];?>" class="input" name="password" required="required" >
				    </div><?php }else { ?>
              <div class="group">
  					    <label for="pass" class="label">Password</label>
  					    <input id="pass" type="password" class="input" name="password" required="required" >
  				    </div><?php } ?>
            <div class="group">
					    <label for="pass" class="label">Type</label>
					    <select class="input" data-type="password" name="type">
              <option value="EH">EH</option>
              <option value="DH">DH</option>
              <option value="FC">FC</option>
              <option value="SH">SH</option></select>
				    </div>
				    <div class="group">
					    <input id="check" name="chk" type="checkbox" class="check">
					    <label for="check"><span class="icon"></span> Remember Me</label>
				    </div>
				    <div class="group">
					    <input type="submit" class="button" name="btn" value="Sign In">
				    </div>
          </form>
          <label for="pass" class="label"><a href="forget.php">Forgot Password?</a></label>
				  <div class="hr"></div>
			  </div>
	    </div>
  </div>
</body>
</html>
