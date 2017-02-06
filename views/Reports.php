<?PHP


require("../process/Connection.php");
include("header.php");
?>
<html>
<body style="background-color: #333;">
<div class="M-clr" ></div>

<section class=" w3-container M-Section-No-Style" style="margin-top:5em;"><!-- job reporting -->
<div>
<div class="w3-container" style="background-color:#063 !important; display:block; border-radius:3px; margin-top:1em !important; padding-bottom:1em;"> 
<ul style=" padding-top:1em;" class="M-No-Style-List">
<li>
<div>
<form class="w3-form col-sm-10">
<input class="w3-input" placeholder="SEARCH" type="search">
</form>
</div>
</li>
<li style="padding-top:0.5em;" class="col-sm-2">
<button class="btn M-button-Grey-to-white btn-sm M-UniversalBtn"><h5>SEARCH</h5></button>
</li>
<div>

<!--  <li class="pull-right" style="padding-right:1em;">
<button class="btn btn-lg M-button-Job-Post-WHITE btn-block" style="border-radius:1.5px; width:15em;">Post A Job <span style="background-color:orange; color:white; border-radius:2px; height:4em; width:6em !important;" class="text-center"> Its FREE. </span></button>
</li>-->
</ul>

</div>



<div class="w3-container " style="padding-bottom:3em;">
<h1 class="text-center" style=" margin-top:2em;">Report a Job / User </h1>
<div style=" padding-top:3em; alignment-adjust:middle !important;">
<ul class="M-No-Style-List w3-container">
<li class="M-LiLeft" style="width:70%;">
<form class="w3-form w3-container col-md-12 " style="border:2px solid #C03; border-radius:2px;">
<label style="padding-bottom:1em;"><h3>Your Name:</h3></label>
<input type="text" class="w3-input M-Reports-Form-Input" placeholder="YOUR NAME"   style="border:1px solid #C03; height:3em;" required>

<label style="padding-bottom:1em;"><h3>Name of user/job:</h3></label>
<input type="text" class="w3-input M-Reports-Form-Input" placeholder="USER / JOB NAME" style="border:1px solid #C03; height:3em;"  required>

<label style="padding-bottom:1em;"><h3>Profile link of job/user:</h3></label>
<input type="text" class="w3-input M-Reports-Form-Input" placeholder="COPY / PASTE THE LINK OF PROFILE OF USER OR THE PAGE OR JOB"  style="border:1px solid #C03; height:3em;" required >
<label style="padding-bottom:1em; padding-top:1em;"><h3>Description:</h3></label>
<textarea class="w3-input M-Reports-Form-Input" placeholder="Describe your report" rows="5"  style="border:1px solid #C03;  overflow: scroll;" required></textarea>

<button type="submit" class="btn btn-block M-UniversalBtn btn-sm" style=" background-color:white !important; color:#F03 !important; margin-top:3em; border:2px solid #F03; width:9em !important;"><p class="M-Universal-Text">Report</p></button>

</form>
</li>
<li class="M-LiLeft w3-container" style="border:1px solid #C03; margin-top:0em; height:20em; width:25%; margin-left:3.3em !important;"><h3><i class="fa fa-1x fa-times-circle-o"></i> Why Reporting Job?</h3>
<p style="padding-top:2em;">A job post allows freelancers to get a clearer and more detailed sense of your project.

Sometimes the freelancer you invite is too busy or doesn't respond. In case that happens, with your job post already created, you'll be able to easily invite other qualified freelancers to work on your project.</p>
</li>
</ul>
</div>
</div>
    </div>
</section><!-- /job posting -->
</body>
</html>
<div class="M-clr"></div>
<?PHP include("footer.php");  ?>
