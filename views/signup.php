<?php
  include("header.php");
?>
<html>
<head>
    <style>

        .HidingDiv{ display: none;}

    </style>

</head>
<body  style="background-color: #333;">
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
        <button class="btn-small M-button-Grey-to-white M-UniversalBtn btn-sm"><a class="M-Universal-Link">SEARCH</a></button></li>
      </li>
    </ul>
  </div>

    
    

  <h1 class="text-center">Just Get Started Here !</h1>
  <center>
    <ul class="container col-md-8 col-md-offset-2 M-No-Style-List" style="font-family: Cambria;">
      <li class="col-md-12 "><!-- Sign Up -->
        <form class="w3-form" style="border:2px solid green; font-family: Cambria;"
              action="../process/UserController.php?userAction=registerUser" method="post"
              name="registeration" onSubmit="return validate()">
          <h2>Do Not Have An Account?</h2>
            <br>
          <label class="pull-left">Name:</label>
            <div class="clearfix"></div>
            <br>

          <input type="text" class="w3-input" placeholder="Name"
                 style="border:1px solid green;" name="name" required>
            <div class="clearfix"></div>
            <br>

          <label class="pull-left">Email:</label>
            <div class="clearfix"></div>
            <br>

          <input type="email" class="w3-input" placeholder="someone@example.com"
                 style="border:1px solid green;" name="email" required>

            <div class="clearfix"></div>
<br>
          <label class="pull-left">Password:</label>
            <div class="clearfix"></div>
            <br>

          <input type="Password" class="w3-input"
                 placeholder="not less than 6 characters or more than 10"
                 style="border:1px solid green;" name="password"  required>
            <div class="clearfix"></div>
            <br>

            <label class="pull-left">Description:</label>
            <div class="clearfix"></div>
            <br>


          <textarea class="w3-input"
                    placeholder="Describe yourself."
                    rows="5" style="border:1px solid green; overflow:scroll;"
                    name="description" required></textarea>
            <div class="clearfix"></div>
            <br>

          <label class="pull-left">You want to </label>
            <div class="clearfix"></div>
            <br>


            <!-- *****    js dependant part    *****  -->
            <select class="col-sm-12 col-md-12 col-lg-12" style="height: 2.5em; border: 1px solid green" id="toGet" name="purpose">
                <option>--Select--</option>
            <option value="client">Hire</option>
                <option value="employee">Work</option>
           
         </select>
         

<div class="clearfix"></div>
          <div id="demand"><!-- ***Demand div starts here***  -->

            <div id="employee" class="HidingDiv">
                <div class="clearfix"></div>
                <br>

            <label class="pull-left">Skills</label>
                <div class="clearfix"></div>
                <br>


                <input type="text" class="w3-input"
                 placeholder="Enter your skills"
                 style="border:1px solid green;" name="skills" >
            </div><!-- /skills -->

<div id="client" class="HidingDiv">
    <div class="clearfix"></div>
    <br>

    <label class="pull-left">Company</label>
    <div class="clearfix"></div>
    <br>


    <input type="text" class="w3-input"
           placeholder="Enter your company / organization"
           style="border:1px solid green;" name="company" >


</div><!-- /company div -->
  </div><!--*** /demand div ends here *** -->


        <!-- ******    /js dependant part     ******  -->

            <div class="clearfix"></div>
            <br>

            <label class="pull-left">CNIC Number :</label>
            <div class="clearfix"></div>
            <br>


            <input type="number"
                   class="M-Green-Inputs-Forms col-sm-12 col-md-12 col-lg-12" style="height:2.5em;"
                   name="cnic_no" required>

            <div class="clearfix"></div>
            <br>

          <label class="pull-left">Your Credit Card Number</label>
            <div class="clearfix"></div>
            <br>

          <input type="number" name="credit_card" placeholder="card number for payments/ transactions."
                 class="M-Green-Inputs-Forms col-sm-12 col-md-12 col-lg-12" style="height:3em;" required>

            <div class="clearfix"></div>
            <br>

          <label class="pull-left">Your Mobile Number</label>
            <div class="clearfix"></div>
            <br>


            <input type="number" name="mobile_phone" placeholder="Enter your mobile phone number."
                 class="M-Green-Inputs-Forms col-sm-12 col-md-12 col-lg-12" style="height:3em;" required>

         
          <div class="clearfix"></div>
          <div>
            <br>
          <button type="submit" name="submit"
                  class="btn btn-block M-UniversalBtn M-button-orange-to-white"
                  style=" width:10em; margin-top:1em;"><a class="M-Universal-Link" href="#">SIGN UP</a></button>
            </div>
          <br/>
        </form>

      </li>
    </ul>
    </center>
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
      alert("Password field cannot contain less than 6 or more than 10 characters.");
      return false;
    }


   
  }

  $(function() {
      $('#toGet').change(function(){
          $('.HidingDiv').hide();
          $('#' + $(this).val()).show();
      });
  });




  /* function validate */
</script>

<div class="clearfix"></div>

