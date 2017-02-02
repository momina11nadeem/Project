<?php
  include("header.php");
?>
<html>
<body style="background-color: #333;">
<div class="M-clr"></div>

<section class="w3-container M-Section-No-Style"
         style="margin-top:5em !important; padding-bottom:3em;">
  <div class="w3-container">
  <!--account  -->
  <div class="w3-container"
       style="background-color:#063 !important; display:block; border-radius:3px; margin-top:1em; padding-bottom:1em;">
    <ul
      style="list-style-type:none !important; text-decoration:none !important; padding-top:1em;">
      <li>
        <div>
          <form class="w3-form col-sm-10">
            <input class="w3-input" placeholder="SEARCH" type="search">
          </form>
        </div>
      </li>
      <li style="padding-top:0.5em;" class="col-sm-2">
        <button class="btn-small M-button-Grey-to-white M-UniversalBtn btn-sm"><a class="M-Universal-Link" href="#">SEARCH</a></button></li>
      </li>
    </ul>
  </div>
    
    


  <h1 class="text-center">Sign In !</h1>
  <div class=" row container"
       style="margin-top:7em; alignment-adjust:central !important; ">
    <center>
      <div
        class="col-sm-8 col-md-8 col-lg-8 w3-container col-md-offset-3 col-sm-offset-3 col-lg-offset-3">
        <!-- sign in -->

        <form class="w3-form" style="border:2px solid green;"
              action="../process/UserController.php?userAction=login" method="post">
          <h2>Have An Account ! </h2>
          <div class="clearfix"></div>
          <br>

          <label class="pull-left">Email :</label>
          <div class="clearfix"></div>
          <br>

          <input type="email" class="w3-input" style="border:1px solid green;"
                 placeholder="someone@example.com" name="email">
          <div class="clearfix"></div>
          <br>

          <label class="pull-left">Password:</label>
          <div class="clearfix"></div>
          <br>

          <input type="password" class="w3-input" placeholder="password"
                 style="border:1px solid green;" name="password">
          <br/><br/>
          <a class="pull-left M-Universal-Link" href="#"><h5>Forgot Password
              ?</h5></a><a class="pull-right M-Universal-Link"
                           href="signup.php"><h5>New User ?</h5></a>

          <br/><br/><br/>
          <div>
            <button type="submit"
                    class="btn btn-block M-UniversalBtn M-button-orange-to-white"
                    style=" width:10em; " name="submit"><a class="M-Universal-Link" href="#">SIGN IN</a></button>
          </div>
          <br/><br/>
        </form>

      </div>
  </div>
  </center>                             <!-- REGISTRATION FORM STARTS HERE  --->

  <!--
<li class="col-sm-1" style="height:50em; margin-top:5em; padding:0em !important;  border-right:1px solid green;"></li>

<li class="pull-right M-Styling-Li  col-sm-5 w3-container"><!-- Sign Up --
<form class="w3-form" style="border:2px solid green;" action="../process/R-Process.php" method="post" name="registeration" onsubmit="return validate()">
<h2>Do Not Have An Account?</h2>
<label><h3>Your Name:</h3></label>
<br>
<input type="text" class="w3-input" placeholder="Name" style="border:1px solid green;" name="name" required>

<label><h3>Email:</h3></label>
<br>
<input type="email" class="w3-input" placeholder="someone@example.com" style="border:1px solid green;" name="email" required>

<label><h3>Password:</h3></label>
<br>
<input type="Password" class="w3-input" placeholder="not less than 6 characters"  style="border:1px solid green;" name="password" required>
<br>
<label><h3>Description:</h3></label>
<br>
<textarea class="w3-input" placeholder="Describe yourself in atleast 200 characters." rows="5" style="border:1px solid green;" name="Description" ></textarea>
<br>
<label><h3>CNIC Number :</h3></label>
<input type="text"  min="13" max="13" class="M-Green-Inputs-Forms col-sm-12" style="height:2.5em;" name="cnic"/>
<br />
<label><h3>You want To</h3></label>
<br>
<select style=" height:2.5em; overflow:scroll;" class="M-Green-Inputs-Forms col-sm-12" name="purpose">
<option>Hire
</option>
<option>Work
</option>
</select>
<br><br><br>
<button type="submit" name="submit" class="btn btn-block M-UniversalBtn M-button-orange-to-white btn-sm" style=" width:8em; margin-top:1em;"><h5>SIGN UP</h5></button>

</form>

</li>



</ul>-->
    </div>
</section><!--  /account-->
</body>
</html>

<?php
  include("footer.php");
?>


<script>
  function validate() {
    var y = document.forms['registeration']['Name'].value;
    if (y.length > 30) {
      alert("Your name should be in 30 characters");
      return false;

    }
    var x = document.forms['registeration']['Password'].value;
    if (x.length < 6 || x.length > 10) {
      alert("Password field cannot contain less than 6 characters.");
      return false;
    }

    var z = document.forms['registeration']['cnic'].value;
    if (z.length > 13 || z.length < 13) {
      alert("Fill the Cnic Number Correctly !");
      return false;
    }

  }
  /* function validate */
</script>

<div class="M-clr"></div>

