<?php
  require("../process/Connection.php");
  include("header.php");
  if (!empty($_SESSION)) {
    if ($_SESSION['user_type'] == 'client' || $_SESSION['user_type'] == 'buyer' ) {

      ?>
<html>
<body style="background-color: #333;">
      <div class="M-clr"></div>

      <section class=" w3-container M-Section-No-Style" style="margin-top:5em;">
          <div class="w3-container">
        <!-- job posting -->
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
                <button class="btn-small M-button-Grey-to-white M-UniversalBtn btn-sm"><a style="font-family: Arial" class="M-Universal-Link">SEARCH</a></button></li>
              </li>
                      </ul>
        </div>
              
              


        <div class="w3-container " style="padding-bottom:3em;">
          <h1 class="text-center" style=" margin-top:2em;">Post A Job !</h1>
          <div
            style=" padding-top:4em; alignment-adjust:middle !important; padding-bottom:2em;">
            <ul class="M-No-Style-List w3-container">
              <li class="M-LiLeft"></li>
              <li class="M-LiLeft" style="width:70%; border:2px solid green;">
                <form class="w3-form w3-container col-md-12 " action="../process/JobsContoller.php?jobAction=PostJob" method="post">
                                   <label style="padding-bottom:1em;"><h3>Job Name:</h3></label>
                  <input type="text" class="w3-input"
                         placeholder="NAME OF YOUR JOB" name="jobTitle"
                         style="border:1px solid green; border-radius:1px;" class="form-control" required>
                  <div>
                    <label style="padding-bottom:1em; padding-top:1em;"><h3>
                        Catagory:</h3></label>
                    <select name="catID"
                      style="height:3em; overflow:hidden !important; border:1px solid green; border-radius:1px;"
                      class="form-control" required>

                      <?php $queryForCatagory = $conn->query("SELECT * from catagory WHERE is_deleted = 0");
                             while ($haveCatagoryDataArray = $queryForCatagory->fetch_array()){
                              ?>
                               <option value="<?php echo $haveCatagoryDataArray['id']; ?>"  ><?php echo $haveCatagoryDataArray['cat_name']?></option>
                      <?php
                             }
                      ?>
                    </select>
                      <br>
                    <div>
                    <label style="padding-bottom:1em;"><h3>Career Level:</h3></label>
                     <select name="career_level"
                      style="height:3em; overflow:hidden !important; border:1px solid green; border-radius:1px;"
                      class="form-control" required>
                      <?php 
					  $queryForLevel = $conn->query("SELECT * FROM level");
					  while($haveLevelData = $queryForLevel->fetch_array())
					  {
						?>
              <option value="<?php echo $haveLevelData['level_name'];  ?>"><?php echo $haveLevelData['level_name']; ?></option>
 
					<?php
						  }
					  
					   ?>                   
                    </select>




                        
                   
                 
                    </div>
                  </div>
                  <div>
                      <br>
                    <label style="padding-bottom: 1em; padding-top: 1em;"><h3>
                        Skills Needed:</h3></label>
                      <br>
                    <input
                      style="height:3em; overflow:hidden !important; border:1px solid green;"
                      class="col-md-12" name="skills" required>

                  </div>
                    <div >
                        <label style="padding-top: 1em; padding-bottom: 1em; "><h3>Payment Method:</h3></label>
                        <br>
                        <select style="height:3em; overflow:hidden !important; border:1px solid green;" name="payment_method"
                        class="col-md-12" required>
                            <option value="fixed">Fixed Payment</option>
                            <option value="hourly">Hourly Payment</option>

                        </select>

                    </div>

                    <div><!--Duration Div  -->
                        <div>
                            <label style="margin-top:2em;"><h3>Duration of your job:</h3></label>
                        </div>
                        <select class="col-lg-12 col-md-12 col-sm-12 M-Green-Inputs-Forms" style="overflow:hidden !important; height:3em; margin-top:2em;" name="duration">
                            <option>more than 6 months</option>
                            <option>3 to 6 months</option>
                            <option>1 to 3 months</option>
                            <option>Less than 1 month</option>
                            <option>Less than 1 week</option>

                        </select>
                    </div><!-- /Duration Div  -->

                    <div><!--Commitment Div-->
                        <div>
                            <label style="margin-top:2em;"><h3>Commitment required for this job:</h3></label>
                        </div>
                        <select class="col-lg-12 col-md-12 col-sm-12 M-Green-Inputs-Forms" style="overflow:hidden !important; height:3em; margin-top:2em;" name="commitment">
                            <option>More than 30 hrs/week</option>
                            <option>Less than 30 hrs/week</option>
                            <option>I don't know yet </option>

                        </select>
                    </div><!-- /Commitment Div  -->

                   <!-- <div><!--type Div--
                        <div>
                            <label style="margin-top:2em;"><h3>Type Of The Project:</h3></label>
                        </div>
                        <select class="col-lg-12 col-md-12 col-sm-12 M-Green-Inputs-Forms" style="overflow:hidden !important; height:3em; margin-top:2em;">
                            <option>Ongoing Project</option>
                            <option>One-time Project</option>
                            <option>I am not sure</option>

                        </select>
                    </div><!-- /type Div  --

-->

                    <div>



                    <label style="padding-bottom:1em; padding-top:1em;"><h3>
                        Price Budget:</h3></label>
                    <ul class="M-No-Style-List col-md-12">
                      <li class="M-LiLeft M-Styling-Li">
                        <p>From:</p>
                        <input type="number" placeholder="Select" name="priceFrom"
                               class="M-Green-Inputs-Forms" required><span> PKR</span>
                      </li>
                      <li class="M-LiLeft M-Styling-Li"
                          style="margin-left:3em;">
                        <p>To:</p>
                        <input type="number" placeholder="Select" name="priceTo"
                               class="M-Green-Inputs-Forms" required><span> PKR</span>
                      </li>
                    </ul>
                  </div>
                  <label style="padding-bottom:1em; padding-top:2em;"><h3>
                      Description:</h3></label>
                  <textarea class="w3-input" name="desc"
                            placeholder="Describe your job "
                            rows="5"
                            style="overflow:scroll !important; margin-top:1em; border:1px solid green;" required></textarea>
<br><br>
                  <button type="submit"
                          class="btn btn-block M-UniversalBtn M-button-orange-to-white " style="width:10em;">
                      <a style="font-family: Arial; font-size: medium;" class="M-Universal-Link" href="invoice.php">Post Job</a></button>
<br>
                </form>
              </li>
              <li class="M-LiLeft M-Styling-Li"
                  style="border:1px solid green; margin-top:0em; width:25%; margin-left:3em; height:20em;">
                <h3><i class="fa fa-1x fa-angle-double-right "></i>Why Posting
                  Job?</h3>
                <p style="padding-top:2em; word-spacing:0.5em !important;">A job
                  post allows freelancers to get a clearer and more detailed
                  sense of your project.

                  Sometimes the freelancer you invite is too busy or doesn't
                  respond. In case that happens, with your job post already
                  created, you'll be able to easily invite other qualified
                  freelancers to work on your project.</p>
              </li>
            </ul>
          </div>
        </div>
              </div>
      </section><!-- /job posting -->

      <div class="clearfix"></div>
      </body>
      </html>

      <?php

      include("footer.php");
      ?>
    <?php }
    else { ?>
      <script>
        window.alert("You are logged in as an employee . Please log in as client to Post the Job");
        window.location.href = '../views/signin.php';
      </script>
    <?php }

  }

  else {
    ?>
    <script>
      window.alert("You need to login first as a client to post the Job ");
      window.location.href = '../views/INDEX.php';
    </script>
  <?php }

?>
