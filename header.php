<?php

echo '<div id="header">
        
    <div id="top-nav" class="center-wrapper">
 
    <a class="title" href="index.php"><img src="images/logo.png" alt="Tango Bookstore"></a>
    <!-- end .title -->
 

    <ul class="navi">
        <li><a href="adminpanel.php">Admin Panel</a></li>
        <li><a href="myprofile.php">My Profile</a></li>
        <li><a href="#register.php">Register</a></li>
        <li><a id="login-link" href="#">Login</a></li>
    </ul><!-- end .nav -->


<!-- Login panel -->
    <div class="login-form">  

    <form action="">  

    <div class="form-group">
              <input type="text" class="form-control login-field" value="" placeholder="Enter your email" id="login-name">
              <label class="login-field-icon fui-user" for="login-name"></label>
            </div>

            <div class="form-group">
              <input type="password" class="form-control login-field" value="" placeholder="Password" id="login-pass">
              <label class="login-field-icon fui-lock" for="login-pass"></label>
            </div>


    <input type="submit" name="submit" value="Sign In" class="btn btn-block btn-lg btn-inverse" style="margin:10px 0 10px 0">
    </form> 
<a class="login-link" href="#">Lost your password?</a>

    </div><!-- login-panel ends here -->  

 
</div><!-- end #top-nav .center-wapper -->


    </div><!-- end #header -->';?>