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
            <button class="btn-small M-button-Grey-to-white M-UniversalBtn btn-sm"><a class="M-Universal-Link" href="#">SEARCH</a></button></li>

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
    <div class=" clearfix"></div>

    <div style=" border:2px solid #060; border-radius:2px; margin-left:0em; margin-top:3em; width:100%; padding-bottom:1em;" class="w3-container"><!--  2nd container -->
      
      
      <ul style="list-style-type:none !important; padding-bottom:3em;" class="w3-container">
        <li>
          <h3 class="text-center" style="background-color:#999; margin-bottom:2em;">JOBS</h3>
        </li>
        <li>
          <div>
            <center>
              <table class="table table-bordered text-center" style="margin-top:3em;">
                <thead>
                <tr>
                  <th class="text-center">Job Title</th>

                  <th class="text-center">Client</th>
                  <th class="text-center">Interview by client</th>
                  <th class="text-center">Duration</th>
                  <th class="text-center">Status</th>
                  <th class="text-center">Total Price</th>
                  <th>Submit Project</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>fully functional site in wordpress</td>
                  <td><span ><a  href="#">Name1</a></span>
                  </td>
                  <td>
                    <span class="col-sm-12 text-center"><a href="interview-for-employee.php">View Interview</a></span>
                  </td>
                  <td>
                   From:<span>  1-10-2016</span> -- To:<span> 10-10-2016</span>

                  </td>
                  <td>
                    In Progress
                  </td>
                  <td>10000<span>PKR</span></td>
                  <td><button class="M-button-GREEN-to-White"><a href="#" class="M-Universal-Link"><a class="M-Universal-Link" href="send-project-employeeView.php">Send Project</a></a></button>
</td>                </tr>

                </tbody>
              </table>
                <br>
            </center>
          </div>

        </li>
      </ul>
<br><br>
    </div><!-- /2nd container -->
    


   </div><!-- 1st container -->
</section>
<div class="clearfix"></div>

</body>
</html>
<?php

include ("footer.php");
?>