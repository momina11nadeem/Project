<?PHP
require ("../process/Connection.php");
include("header.php"); ?>
<html>
<body style="background-color: #333;">
<div class="M-clr" ></div>
<section class="w3-container" style="background-color:white !important; margin-top:5em; padding-bottom:3em;">
  <div class="w3-container"><!-- 1st container -->
      <div class="w3-container" style="background-color:#063 !important; display:block; border-radius:3px; margin-top:1em; padding-bottom:1em;">
        <ul class="M-No-Style-List" style=" text-decoration:none !important; padding-top:1em;">
          <li>
            <div>
              <form class="w3-form col-sm-10">
                <input class="w3-input" placeholder="SEARCH" type="search">
              </form>
            </div>
          </li>
          <li style="padding-top:0.5em;" class="col-sm-2">
            <button class="btn-small M-button-Grey-to-white M-UniversalBtn btn-sm">SEARCH</button></li>
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

<section class="w3-container" style="border: 2px solid #063;">


    <h3 class="text-center">Employee Application</h3>
<div class="text-left w3-container">

    <h6><strong>Name Of Employee</strong></h6>
    <p>Momina</p>

  <h6><strong>Name Of Job</strong></h6>
  <p>Annual Report of Accounts</p>
  <h6><strong>Milestone</strong></h6>
  <p>Full Report</p>
    <!--
<h6><strong>Price Type</strong></h6>
    <p>Fixed Price</p>-->
    <h6><strong>Price</strong></h6>
    <p>10,000<span>PKR</span></p>
<h6><strong>Description</strong></h6>
  <p class="text-left">Lorem Ipsum is the dummy text of printing and typesetting industry.
    Lorem Ipsum is the dummy text of printing and typesetting industry.Lorem Ipsum is the dummy text of printing and typesetting industry.
    Lorem Ipsum is the dummy text of printing and typesetting industry.Lorem Ipsum is the dummy text of printing and typesetting industry.
    Lorem Ipsum is the dummy text of printing and typesetting industry.
  </p>

  </div>
  <br>
  <div class="w3-container">
    <div class="">
      <div class="col-sm-2 col-md-2">
  <button class="M-button-orange-to-white"><a>Hire Employee</a></button></div>

      <div class="col-sm-2 col-md-2">

        <button class="M-button-Blue" style="width:100%; height: 3em;"><a href="interview-for-client.php">Interview Employee</a></button>
      </div>
      </div>
</div>
<br><br>
</section>

   </div><!-- 1st container -->
</section>
<div class="clearfix"></div>

</body>
</html>
<?php

include ("footer.php");
?>