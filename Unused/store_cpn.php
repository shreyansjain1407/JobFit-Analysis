<?php

include('Login_v3/session.php'); 
if(!isset($_SESSION['login_user'])){ 
  header("location: login_v3.php"); // Redirecting To Home Page 
}

$connect_db = mysqli_connect("localhost","root","") or die("Cannot connect to server");
mysqli_select_db($connect_db,"jobfit") or die("Cannot connect to the database");

$query = mysqli_query($connect_db,"select * from store_coupons where store_id='$store'");
$row = mysqli_fetch_array($query);

$store_query = mysqli_query($connect_db,"select * from store where store_id='$store'");
$store_row = mysqli_fetch_array($store_query);

$store_id = $store;


?>

<!DOCTYPE html>
<html >
  <head>
   	<title>Add Coupon Codes</title>
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
  	<link rel="stylesheet" href="cssOpt/style_store_cpn.css">
  	<!--===============================================================================================-->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="cssOpt/style_store_cpn.css">  
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


    <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
    <div id="main">
      <div class="rb-box">
        <p><?=$store_row['store_name']?></p>
      </div>

      <form class="login100-form validate-form flex-sb flex-w" action='edit_store_cpn.php?store_id=<?=$store_id?>' method="post">
      
        <div class="rb-box">
          <p>In the following form, please type the coupon description and codes</p>
          <br>
          <p>Coupon 1:</p>
          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="cpn1" placeholder="Coupon Description 1" value="<?=$row['cpn1']?>">
            <span class="focus-input100"></span>
          </div>
          <p>Coupon Code 1:</p>
          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="cpn1_cd" placeholder="Coupon Code 1" value="<?=$row['cpn1_cd']?>">
            <span class="focus-input100"></span>
          </div>
          <br>

          <p>Coupon 2:</p>
          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="cpn2" placeholder="Coupon Description 2" value="<?=$row['cpn2']?>">
            <span class="focus-input100"></span>
          </div>
          <p>Coupon Code 2:</p>
          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="cpn2_cd" placeholder="Coupon Code 2" value="<?=$row['cpn2_cd']?>">
            <span class="focus-input100"></span>
          </div>
          <br>

          <p>Coupon 3:</p>
          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="cpn3" placeholder="Coupon Description 3" value="<?=$row['cpn3']?>">
            <span class="focus-input100"></span>
          </div>
          <p>Coupon Code 3:</p>
          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="cpn3_cd" placeholder="Coupon Code 3" value="<?=$row['cpn3_cd']?>">
            <span class="focus-input100"></span>
          </div>
          <br>

          <p>Coupon 4:</p>
          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="cpn4" placeholder="Coupon Description 4" value="<?=$row['cpn4']?>">
            <span class="focus-input100"></span>
          </div>
          <p>Coupon Code 4:</p>
          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="cpn4_cd" placeholder="Coupon Code 4" value="<?=$row['cpn4_cd']?>">
            <span class="focus-input100"></span>
          </div>
          <br>

          <p>Coupon 5:</p>
          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="cpn5" placeholder="Coupon Description 5" value="<?=$row['cpn5']?>">
            <span class="focus-input100"></span>
          </div>
          <p>Coupon Code 5:</p>
          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="cpn5_cd" placeholder="Coupon Code 5" value="<?=$row['cpn5_cd']?>">
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
