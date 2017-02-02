<?php
  


  require_once('Connection.php');
  session_start();
  if ($_SERVER["REQUEST_METHOD"] == "POST" || $_SERVER["REQUEST_METHOD"] == "GET") {
    if ($_GET['jobAction'] == 'PostJob') {
      $haveLoggedInUserID = $_SESSION['USER_ID'];
      $haveJobTitle = $_POST['jobTitle'];
      $haveCatagoryID = $_POST['catID'];
      $havePriceFrom = $_POST['priceFrom'];
      $havePriceTo = $_POST['priceTo'];
      $haveJobDescription = $_POST['desc'];
      $jobCareerLevel = $_POST['career_level'];
      $jobSkills = $_POST['skills'];
      $jobPaymentMethod = $_POST['payment_method'];
      $duation = $_POST['duration'];
      $commitment = $_POST['commitment'];
      


      // inserting values to the database
      $insertingDatatotheDatabaseQuery = $conn->query("INSERT INTO jobs (title,catagory,price_from,price_to,description,payment_method,duration,commitment,is_deleted)
 VALUES ('$haveJobTitle','$haveCatagoryID','$havePriceFrom','$havePriceTo','$haveJobDescription','$jobPaymentMethod','$duation','$commitment','0')");
      if ($insertingDatatotheDatabaseQuery == TRUE) {
        ?>
        <script>
          window.alert("Job Posted Successfully !");
          window.location.href = '../views/jobs.php';
        </script>
      <?php }


    }


  }