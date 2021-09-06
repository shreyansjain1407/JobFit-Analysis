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

$cust_name = $_GET['cname'];
$cust_phone = $_GET['cphone'];

?>
<!DOCTYPE html>
<html>
  <head>
   	<title>FeedBack</title>
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
  	<link rel="stylesheet" href="cssOpt/style.css">
  	<!--===============================================================================================-->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="cssOpt/style.css">
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

      <form class="login100-form validate-form flex-sb flex-w" action='add.php' method="post">
        <div class="rb-box">

          <!-- Radio Button Module -->
          <p>1. <?=$row['q1']?></p>
          <div id="rb-1" class="rb">
            <div class="rb-tab rb-tab-active" data-value="1">
              <div class="rb-spot">
                <span class="rb-txt">1</span>
              </div>
            </div><div class="rb-tab" data-value="2">
              <div class="rb-spot">
                <span class="rb-txt">2</span>
              </div>
            </div><div class="rb-tab" data-value="3">
              <div class="rb-spot">
                <span class="rb-txt">3</span>
              </div>
            </div><div class="rb-tab" data-value="4">
              <div class="rb-spot">
                <span class="rb-txt">4</span>
              </div>
            </div><div class="rb-tab" data-value="5">
              <div class="rb-spot">
                <span class="rb-txt">5</span>
              </div>
            </div>
          </div>

          <!-- Radio Button Module -->
          <p>2. <?=$row['q2']?></p>
          <div id="rb-2" class="rb">
            <div class="rb-tab" data-value="1">
              <div class="rb-spot">
                <span class="rb-txt">1</span>
              </div>
            </div><div class="rb-tab rb-tab-active" data-value="2">
              <div class="rb-spot">
                <span class="rb-txt">2</span>
              </div>
            </div><div class="rb-tab" data-value="3">
              <div class="rb-spot">
                <span class="rb-txt">3</span>
              </div>
            </div><div class="rb-tab" data-value="4">
              <div class="rb-spot">
                <span class="rb-txt">4</span>
              </div>
            </div><div class="rb-tab" data-value="5">
              <div class="rb-spot">
                <span class="rb-txt">5</span>
              </div>
            </div>
          </div>

          <!-- Radio Button Module -->
          <p>3. <?=$row['q3']?></p>
          <div id="rb-3" class="rb">
            <div class="rb-tab" data-value="1">
              <div class="rb-spot">
                <span class="rb-txt">1</span>
              </div>
            </div><div class="rb-tab" data-value="2">
              <div class="rb-spot">
                <span class="rb-txt">2</span>
              </div>
            </div><div class="rb-tab rb-tab-active" data-value="3">
              <div class="rb-spot">
                <span class="rb-txt">3</span>
              </div>
            </div><div class="rb-tab" data-value="4">
              <div class="rb-spot">
                <span class="rb-txt">4</span>
              </div>
            </div><div class="rb-tab" data-value="5">
              <div class="rb-spot">
                <span class="rb-txt">5</span>
              </div>
            </div>
          </div>

          <!-- Radio Button Module -->
          <p>4. <?=$row['q4']?></p>
          <div id="rb-4" class="rb">
            <div class="rb-tab" data-value="1">
              <div class="rb-spot">
                <span class="rb-txt">1</span>
              </div>
            </div><div class="rb-tab" data-value="2">
              <div class="rb-spot">
                <span class="rb-txt">2</span>
              </div>
            </div><div class="rb-tab" data-value="3">
              <div class="rb-spot">
                <span class="rb-txt">3</span>
              </div>
            </div><div class="rb-tab rb-tab-active" data-value="4">
              <div class="rb-spot">
                <span class="rb-txt">4</span>
              </div>
            </div><div class="rb-tab" data-value="5">
              <div class="rb-spot">
                <span class="rb-txt">5</span>
              </div>
            </div>
          </div>

          <!-- Radio Button Module -->
          <p>5. <?=$row['q5']?></p>
          <div id="rb-5" class="rb">
            <div class="rb-tab" data-value="1">
              <div class="rb-spot">
                <span class="rb-txt">1</span>
              </div>
            </div><div class="rb-tab" data-value="2">
              <div class="rb-spot">
                <span class="rb-txt">2</span>
              </div>
            </div><div class="rb-tab" data-value="3">
              <div class="rb-spot">
                <span class="rb-txt">3</span>
              </div>
            </div><div class="rb-tab" data-value="4">
              <div class="rb-spot">
                <span class="rb-txt">4</span>
              </div>
            </div><div class="rb-tab rb-tab-active" data-value="5">
              <div class="rb-spot">
                <span class="rb-txt">5</span>
              </div>
            </div>
          </div>


          <div>
            <input type="hidden" name="first" id="fname" min="1" max="5">
            <!--''' Input Box-->
            <br>
      		  <div class="wrap-input100 validate-input" data-validate = "Username is required">
      			  <input class="input100" type="text" name="name" placeholder="Name" value="<?=$cust_name?>">
      			  <span class="focus-input100"></span>
      		  </div>
      		  <br>
         	  <div class="wrap-input100 validate-input" data-validate = "Password is required">
      			  <input class="input100" type="text" name="phone" placeholder="Phone" value="<?=$cust_phone?>">
      			  <span class="focus-input100"></span>
      		  </div>
      		  <br>
      		  <div class="wrap-input100 validate-input" data-validate = "Feedback">			
      		    <textarea class="input100" rows = "5"  name = "description" placeholder="Feedback"> </textarea><br>
      		  </div>
         	  <div class="container-login100-form-btn m-t-17"  align: center>
              <button class="button trigger">Submit!</button>
      		  </div>
            <!--** End Input Box-->
          </div>
        </div>



        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
        <!--============================== <button class="button trigger">Submit!</button>=================================================================-->
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
