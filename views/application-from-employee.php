<?PHP
require ("../process/Connection.php");
include("header.php"); ?>
<html>
<body style="background-color: #333;">
<div class="M-clr" ></div>
<section class="w3-container" style="background-color:white !important; margin-top:5em; padding-bottom:3em;">
  <div class="w3-container"><!-- 1st container -->
      <div class="w3-container" style="background-color:#063 !important; display:block; border-radius:3px; margin-top:1em; padding-bottom:1em;"><!--  2nd container-->
        <ul class="M-No-Style-List" style=" text-decoration:none !important; padding-top:1em;">
          <li>
            <div>
              <form class="w3-form col-sm-10">
                <input class="w3-input" placeholder="SEARCH" type="search">
              </form>
            </div>
          </li>
          <li style="padding-top:0.5em;" class="col-sm-2">
            <button class="btn-small M-button-Grey-to-white M-UniversalBtn btn-sm"><a href="#" name="">SEARCH</a></button></li>
          <li class="col-sm-12 col-md-12 col-lg-12" style="margin-top:1em;">
            <div class="w3-container">
              <center>
                <ul class="Responsive-nav">
                  <li><a  href="client-dashboard.php">Dashboard</a></li>
                  <li><a href="client-dashboard-jobs.php">Jobs</a></li>
                  <li><a href="client-transactions.php">Transactions</a></li>
                  <li><a href="Client Self.php">My Profile</a></li>
                  <li><a href="client-editing.php">Profile Settings</a></li>
                </ul>
              </center>

            </div>
          </li>
          
          


        </ul>
    </div>
    <div class=" clearfix"></div>
    <br><br>

<section class="w3-container" style="border: 2px solid #063; width: 75%;"><!--2nd sec  -->

   <?php $haveAppliccationID = $_GET['application_id'];
   $haveEmpName = $_GET['emp_name'];
   $haveJobname=  $_GET['job_name'];
   $haveApplicationQuery= $conn->query("SELECT * FROM `job_application` WHERE id =$haveAppliccationID");
   $haveJobApplicationProposalArray = $haveApplicationQuery->fetch_array();
//   var_dump($haveJobApplicationProposalArray );
   ?>
    <h3 class="text-center">Employee Application</h3>
<div class="text-left w3-container">

    <h6><strong>Name Of Employee</strong></h6>
    <p><?php echo $haveEmpName?></p>

  <h6><strong>Name Of Job</strong></h6>
  <p><?php echo $haveJobname;?></p>
  <h6><strong>Milestone</strong></h6>
  <p><?php echo $haveJobApplicationProposalArray['milestone']?></p>
    <!--
<h6><strong>Price Type</strong></h6>
    <p>Fixed Price</p>-->
    <h6><strong>Price</strong></h6>
    <p><?php echo $haveJobApplicationProposalArray['price']?><span>: -PKR</span></p>
<h6><strong>Description</strong></h6>
  <p class="text-left"><?php echo $haveJobApplicationProposalArray['description']?>
  </p>

  </div>
  <br>
  <!--
  <div class="w3-container">
    <div class="w3-row"><!-- Inner div --
      <div class="col-sm-2 col-md-2">
  <button class="M-button-orange-to-white"><a href="#" name="Hiring" class="M-Universal-Link">Hire Employee</a></button>
      </div><!-- /hiring btn --

      <div class="col-sm-2 col-md-2">

        <button class="M-button-Blue" style="width:100%; height: 3em;"><a href="interview-for-client.php" name="" class="M-Universal-Link">Interview Employee</a></button>
      </div><!-- /interview btn --

      <div class="col-sm-2 col-md-2" style="margin-left: 0em;">

        <button class=" M-button-GREEN-to-White" style="width:100%; height: 3em; margin-left: 0px; padding-left: 0px;"><a href="Employee Profile.php" name="" class="M-Universal-Link">View Profile</a></button>
      </div><!--  /profile btn --

    </div><!-- /Inner div --
  -->
</div><!-- /2nd container -->
  <div style="width: 23%; margin-top: -29.5em;" class="pull-right container-fluid">
      <a href="interview-for-client.php?job_id=<?php echo $haveJobApplicationProposalArray['id']?>" ><button  class="M-button-Blue" style="width:100%; height: 2.6em; border-radius: 1px;">Interview Employee</button></a>
    <br>
    <button class=" M-button-GREEN-to-White" style="width:100%; height: 2.6em; border-radius: 1px; margin-left: 0px; padding-left: 0px;"><a href="Employee Profile.php" name="" class="M-Universal-Link">View Profile</a></button>
    <br>
    <div class="clearfix"></div>
    <button class="M-button-GetStarted-Orange" style="width:100%; border-radius: 1px; height: 2.6em; margin-left: 0px; padding-left: 0px;"><a href="#" name="" class="M-Universal-Link">Hire Now</a></button>
    <br>
</div>
</section><!-- /2nd sec -->

   </div><!-- /1st conatiner -->
</section><!-- 1st sec -->

<div class="clearfix"></div>

</body>
</html>
<?php

include ("footer.php");
?>