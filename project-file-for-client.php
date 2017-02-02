<?PHP
require ("../process/Connection.php");
include("header.php"); ?>
<html>
<body style="background-color: #333;">

<div class="M-clr"></div>
<!-- detailed view of job  -->
<section class="w3-container" style="background-color:white; padding-bottom:3em; margin-top:5em;">
 <div class="w3-container">
  <div class="w3-container" style="background-color:#063 !important; display:block; border-radius:3px; margin-top:1em; padding-bottom:1em;">
   <ul class="M-No-Style-List" style=" text-decoration:none !important; padding-top:1em;">
    <li>
     <div>
      <form class="w3-form col-sm-10">
       <input class="w3-input" placeholder="SEARCH" type="search">
      </form>
     </div>
    </li>
    <li class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
     <button class="btn-small M-button-Grey-to-white M-UniversalBtn btn-sm" style="margin-top: 0.6em;"><a style="font-family: Arial; font-size:small;" class="M-Universal-Link">SEARCH</a></button></li>
    </li>
    
    
    <?php

    if(!empty($_SESSION)) {//outer if
     if ($_SESSION['user_type'] == 'employee') {//if1

      include("employee-green-menu.php");
     }//if1
     elseif($_SESSION['user_type'] == 'client'){//if2

      include ("client-green-menu.php");



     }//if2
    }//outer if



    ?>
   </ul>
  </div>
 </div>

 <h2 class="text-center">Describe your query to employee</h2>
 <br><br><br>
<ul class="M-No-Style-List w3-container" >
<li style="border:2px solid green;" class="col-md-8 col-md-offset-2"><!-- 1st li of main ul -->
<form class="w3-form">
 <br>

<label>To:</label>
 <p>Client Name from database </p>
<label style="margin-top:1em;">From:</label>
<p>Employee Name from database</p>
<label style="margin-top:1em;">Message:</label>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
 Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
 when an unknown printer took a galley of type and scrambled it to make a type specimen book.
 It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
<label style="margin-top:1em;">Project File</label>
<span>file will be placed here !!!!</span>
 <br>
 <div class="row">
  <br>
  <div class="col-md-1">
 <button style="background-color: #063; color: white; font-size: small;padding: 0.4em;"><a class="M-Universal-Link" style="color: white;">Satisfied</a></button>
 </div>
  <div class="col-md-2">
   <button style="background-color: #C03; color: white; font-size: small;padding: 0.4em;"><a class="M-Universal-Link" href="notSatisfied-message-clientView.php" style="color: white;" >Not Satisfied</a></button>
</div>
  </div>
</form>

</li><!-- 1st li of main ul  -->

</ul><!-- /main ul -->
</div>
</section>

<div class="M-clr"></div>
</body>
</html>
 <?PHP  include("footer.php");  ?>
