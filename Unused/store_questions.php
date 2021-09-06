<?php

include('Login_v3/session.php'); 
if(!isset($_SESSION['login_user'])){ 
  header("location: login_v3.php"); // Redirecting To Home Page 
}

$connect_db = mysqli_connect("localhost","root","") or die("Cannot connect to server");
mysqli_select_db($connect_db,"jobfit") or die("Cannot connect to the database");

$query = mysqli_query($connect_db,"select * from store_questions where store_id='$store'");
$row = mysqli_fetch_array($query);

$store_query = mysqli_query($connect_db,"select * from store where store_id='$store'");
$store_row = mysqli_fetch_array($store_query);

$store_id = $store;

?>

<!DOCTYPE html>
<html >
  <head>
   	<title>Add Feedback Questions</title>
  	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<!--===============================================================================================-->
  	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  	<!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  	<!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  	<!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
  	<!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
  	<!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
  	<!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
  	<!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
  	<!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
  	<!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="css/util.css">
  	<link rel="stylesheet" type="text/css" href="css/main.css">
  	<link rel="stylesheet" href="cssOpt/style_store_ques.css">
  	<!--===============================================================================================-->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="cssOpt/style_store_ques.css">  
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="cssOpt/sidenav.css">

  </head>

  <body>

    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="feedback.php">Get Feedack</a>
      <a href="store_details.php">Edit Store Details</a>
      <a href="store_questions.php">Feedback Questions</a>
      <a href="store_cpn.php">Store Coupons</a>
      <a href="view.php">Feedback Results</a>
      <a href="Login_v3/logout.php">Logout</a>
    </div>

    <!-- Use any element to open the sidenav -->
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>

    <div id="main">
      <div class="rb-box">
        <p><?=$store_row['store_name']?></p>
      </div>

      <form class="login100-form validate-form flex-sb flex-w" action='edit_store_ques.php' method="post">
        <div class="rb-box">

          <p>In the following form, please type in 5 questions you wish to ask your clients:</p>
          <br>
          <p>Question 1:</p>
          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="q1" placeholder="Question 1" value="<?=$row['q1']?>">
            <span class="focus-input100"></span>
          </div>
          <br>

          <p>Question 2:</p>
          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="q2" placeholder="Question 2" value="<?=$row['q2']?>">
            <span class="focus-input100"></span>
          </div>
          <br>

          <p>Question 3:</p>
          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="q3" placeholder="Question 3" value="<?=$row['q3']?>">
            <span class="focus-input100"></span>
          </div>
          <br>

          <p>Question 4:</p>
          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="q4" placeholder="Question 4" value="<?=$row['q4']?>">
            <span class="focus-input100"></span>
          </div>
          <br>

          <p>Question 5:</p>
          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="q5" placeholder="Question 5" value="<?=$row['q5']?>">
            <span class="focus-input100"></span>
          </div>
          <br>

          <div class="container-login100-form-btn m-t-17"  align: center>
            <button class="button trigger">Submit!</button>
          </div>      
        </div>

        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
        <!--===============================================================================================-->
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/daterangepicker/moment.min.js"></script>
        <script src="vendor/daterangepicker/daterangepicker.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/countdowntime/countdowntime.js"></script>
        <!--===============================================================================================-->
        <script src="js/main.js"></script>
        <script src="js1/index.js"></script>
      </form>
    </div>

    <script>
      function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
      }

      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        document.body.style.backgroundColor = "white";
      }
    </script>
  </body>
</html>
