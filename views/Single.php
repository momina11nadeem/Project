<?PHP
require("../process/Connection.php");
include("header.php");

?>
<html>
<body style="background-color: #333;">
<div class="M-clr"></div>
<section class="w3-container" style="background-color:white !important; margin-top: 5em;">
    <div class="w3-container">
    <div >
        <div class="w3-container"
             style="background-color:#063 !important; display:block; border-radius:3px; margin-top:1em; padding-bottom:1em;">
            <ul style="list-style-type:none !important; text-decoration:none !important; padding-top:1em;">
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
                <li class="col-md-12">
                    <div>
                        <form style=" margin-top:1em !important;">
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                <div class="pull-left" style="margin-top:0.4em;">
                                    <label style="color:white;">Job Catagory</label>
                                    <select class="col-md-12" style=" height:2em;">

                                        <?php $queryForCatagory = $conn->query("SELECT * from catagory WHERE is_deleted = 0");
                                        while ($haveCatagoryDataArray = $queryForCatagory->fetch_array()) {
                                            ?>
                                            <option
                                                value="<?php echo $haveCatagoryDataArray['id']; ?>"><?php echo $haveCatagoryDataArray['cat_name'] ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>

                                </div>
                            </div>

                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                <div class="pull-left" style="margin-top:0.4em;">
                                    <label style="color: white;">Career Level</label>
                                    <select class="col-md-12" style=" height:2em;">

                                        <?php
                                        $queryForLevel = $conn->query("SELECT * FROM level");
                                        while ($haveLevelData = $queryForLevel->fetch_array()) {
                                            ?>
                                            <option
                                                value="<?php echo $haveLevelData['id']; ?>"><?php echo $haveLevelData['level_name']; ?></option>

                                            <?php
                                        }
                                        ?>
                                    </select>

                                </div>
                            </div>

                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="float: left; margin-left:-1.7em;">
                                <div  style="padding-top:2em;">
                                    <button type="submit"class="btn-sm M-button-Grey-to-white M-UniversalBtn">
                                        <a style=" font-size: medium;" class="M-Universal-Link">Filter</a></button>
                                </div>

                            </div>




                        </form>
                    </div>

                </li>


                <!--
    <li class="pull-right" style="padding-right:1em;">
    <button class="btn btn-lg M-button-Job-Post-WHITE btn-block" style="border-radius:1.5px; width:15em;">Post A Job <span style="background-color:orange; color:white; border-radius:2px; height:4em; width:6em !important;" class="text-center"> Its FREE. </span></button>
    </li>-->
            </ul>

        </div>
</section><!-- /Green section with search bar -->
<div class="M-clr"></div>
<!-- detailed view of job  -->

<?php
$haveJobID = $_GET['JobID'];
$haveJobDetailQuery = $conn->query("SELECT * FROM jobs WHERE id =$haveJobID ");
$haveJobDetail = $haveJobDetailQuery->fetch_array();

?>
<section class="w3-container" style="background-color:white; padding-bottom:3em;">
    <h3 class="text-center">Detailed Job!</h3>

    <ul class="M-No-Style-List w3-container " style="padding-top:3em;"><!-- main ul  -->
        <li class=" M-LiLeft w3-container" style="border:2px solid green; width: 70%;"><!-- 1st li of main ul  -->
            <div>

                <h5 style="padding-top:1em;" class="text-justify"><strong>Title:</strong></h5>

                    <h6><?php echo $haveJobDetail['title']; ?></h6>

<hr>

                <h5 style="padding-top:1em;"><strong>Description:</strong></h5>
                <p style="padding-top:1em;" class="text-justify"><?php echo $haveJobDetail['description']; ?> </p>





                <hr>
<div class="row w3-container">
    <div class="pull-left">
                <h5><strong>Skills:</strong></h5>
<p class="text-justify">   <?php if ($haveJobDetail['skills'] == "") {
                            echo "NULL";
                        }
                        else $haveJobDetail['skills'];?>
    </p>
        </div>
    <div class="pull-right">
<h5><strong>Catagory</strong></h5>
                    <p class="text-justify">   <?php if ($haveJobDetail['catagory'] == "") {
                            echo "NULL";
                        }
                        else $haveJobDetail['catagory'];?>

                    </p>
</div>
</div><!--/row  -->
<hr>
                <div class="row w3-container">
                    <div class="pull-left">
                        <h5><strong>Caree Level:</strong></h5>
                        <p class="text-justify">   <?php if ($haveJobDetail['career_level'] == "") {
                                echo "NULL";
                            }
                            else $haveJobDetail['career_level'];?>
                        </p>
                    </div>
                    <div class="pull-right">
                        <h5><strong>Duration:</strong></h5>
                        <p class="text-justify">   <?php if ($haveJobDetail['duration'] == "") {
                                echo "NULL";
                            }
                            else $haveJobDetail['duration'];?>

                        </p>
                    </div>
                </div><!--/row  -->

                <hr>
<div class="row w3-container">
    <div class="pull-left">
                    <h5><strong>Payment Method:</strong></h5>
                    <p class="text-justify">Fixed Price</p>
        </div><!-- /pull-left -->

                <div class="pull-right">
                    <h5 ><strong>Budget <span style="color: dimgray;"></span></strong></h5>

                    <p>
                        <span><?php echo $haveJobDetail['price_from']; ?> PKR</span>-<span><?php echo $haveJobDetail['price_to']; ?></span><span> PKR</span>
                    </p>



                </div><!-- /pull-right -->
                </div><!-- /row w3-container -->
<br>

        </li><!-- 1st li of main ul  -->

        
        <!--  /END OF WHILE LOOP IN PHP HERE  -->

        <li class="pull-right" style="width:25%;"><!-- 2nd li of main ul -->
            <div>
                <a class="M-Universal-Link" style="text-decoration:none !important;" href="Apply-Job.php">
                    <button class=" btn-block btn-sm M-button-GREEN-to-White" style="height: 3.2em;">
                        <a style="font-size: medium;" class="M-Universal-Link" href="Apply-Job.php">Apply Job</a></button>
                </a>
            </div>
            <div style="margin-top:2em;">
                <a class="M-Universal-Link" style="text-decoration:none !important;" href="#">
                    <button class=" btn-block btn-sm M-button-Red" style="height: 3.2em;"><a style="font-size: medium;" class="M-Universal-Link">Report Job</a></button>
                </a>
            </div>
          <!--  <div style="margin-top:2em;">
                <a class="M-Universal-Link" style="text-decoration:none !important;" href="Client Profile.php">
                    <button class=" btn-block btn-sm M-button-orange-to-white" style="width:15em; "><h6>View Profile</h6></button>
                </a>
            </div>
-->
            <!--
            <div style="padding-top:2em;"><!-- about client --
                <ul class="M-No-Style-List"
                    style="border:1px solid green; padding-top:1em; padding-bottom:2em !important;">
                    <!-- inner client list --
                    <li><h3><i class="fa fa-1x fa-wpforms"></i> ABOUT CLIENT :</h3></li>
                    <br>
                    <li><h4><i class="fa fa-1x  fa-angle-double-right"></i> Name:</h4></li>
                    <li><p><i class="fa fa-1x fa-angle-right"></i> ETC Client</p></li>
                    <li style="margin-top:1em;"><h4><i class="fa fa-1x fa-angle-double-right"></i> Profile Verified:
                        </h4></li>
                    <li><p><i class="fa fa-1x fa-angle-right"></i> Yes</p></li>
                    <li><a class="M-Universal-Link" style="text-decoration:none !important;" href="Client Profile.php">
                            <button class="btn btn-block M-button-orange-to-white M-UniversalBtn btn-sm "><h6>View
                                    Profile</h6></button>
                        </a></li>

                </ul><!-- /inner client list --

            </div><!-- /about client --
            -->

        </li><!-- /2nd li of main ul   -->


    </ul><!-- /main ul -->
    </div>
    </div>
</section>
</body>
</html>
<div class="M-clr"></div>
<?PHP include("footer.php"); ?>
