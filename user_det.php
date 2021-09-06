<?php

include('Login_v3/session.php'); 
if(!isset($_SESSION['login_user'])){ 
  header("location: Login_v3/login_v3.php"); // Redirecting To Home Page 
}

$user = $_SESSION['login_user'];
$connect_db = mysqli_connect("localhost","root","") or die("Cannot connect to server");
mysqli_select_db($connect_db,"jobfit") or die("Cannot connect to the database");

$query = mysqli_query($connect_db,"select * from user where username='$user'");
$row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html >
	<head>
	   	<title>Add User Details</title>
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
	  	<link rel="stylesheet" href="cssOpt/style_store_det.css">
	  	<!--===============================================================================================-->
	  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	    <link rel="stylesheet" href="cssOpt/style_store_det.css">  
	    <!--===============================================================================================-->
	    <link rel="stylesheet" type="text/css" href="cssOpt/sidenav.css">
	</head>

	<body>

	    <div id="mySidenav" class="sidenav">
	      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	      <a href="user_det.php">User Details</a>
	      <a href="lang_rate.php">Language Rating</a>
	      <a href="">Future Options 1</a>
	      <a href="">Future Options 2</a>
	      <a href="">Future Options 3</a>
	      <a href="Login_v3/logout.php">Logout</a>
	    </div>

	    <!-- Use any element to open the sidenav -->
	    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>

	    <div id="main">
	      <div class="rb-box">
	        <p>Hello <?=$row['name']?></p>
	      </div>

	      <form class="login100-form validate-form flex-sb flex-w" action='edit_user_det.php' method="post">
	        <div class="rb-box">

	          <p>Please Enter Your Details</p>
	          <br>
	          <p>Name</p>
	          <div class="wrap-input100 validate-input">
	            <input class="input100" type="text" name="name" placeholder="Name" value="<?=$row['name']?>">
	            <span class="focus-input100"></span>
	          </div>
	          <br>

	          <p>Email</p>
	          <div class="wrap-input100 validate-input">
	            <input class="input100" type="email" name="email" placeholder="Email" value="<?=$row['email']?>">
	            <span class="focus-input100"></span>
	          </div>
	          <br>

	          <p>Age</p>
	          <div class="wrap-input100 validate-input">
	            <input class="input100" type="text" name="age" placeholder="Age" value="<?=$row['age']?>">
	            <span class="focus-input100"></span>
	          </div>
	          <br>

	          <p>10th Percentage</p>
	          <div class="wrap-input100 validate-input">
	            <input class="input100" type="text" name="perc_x" placeholder="10th Percentage" value="<?=$row['perc_x']?>">
	            <span class="focus-input100"></span>
	          </div>
	          <br>

	          <p>12th Percentage</p>
	          <div class="wrap-input100 validate-input">
	            <input class="input100" type="text" name="perc_xii" placeholder="12th Percentage" value="<?=$row['perc_xii']?>">
	            <span class="focus-input100"></span>
	          </div>
	          <br>

	          <p>Specialization Under Graduate</p>
	          <div class="wrap-input100 validate-input">
	            <input class="input100" type="text" name="spl_ug" placeholder="Specialization UnderGrad" value="<?=$row['spl_ug']?>">
	            <span class="focus-input100"></span>
	          </div>
	          <br>

	          <p>Under Graduate Percentage</p>
	          <div class="wrap-input100 validate-input">
	            <input class="input100" type="text" name="perc_ug" placeholder="Undergrad Percentage" value="<?=$row['perc_ug']?>">
	            <span class="focus-input100"></span>
	          </div>
	          <br>

	          <p>Specialization Post Graduate</p>
	          <div class="wrap-input100 validate-input">
	            <input class="input100" type="text" name="spl_pg" placeholder="Specialization PostGrad" value="<?=$row['spl_pg']?>">
	            <span class="focus-input100"></span>
	          </div>
	          <br>

	          <p>Post Graduate Percentage</p>
	          <div class="wrap-input100 validate-input">
	            <input class="input100" type="text" name="perc_pg" placeholder="Postgrad Percentage" value="<?=$row['perc_pg']?>">
	            <span class="focus-input100"></span>
	          </div>
	          <br>

	          <p>Hobbies</p>
	          <div class="wrap-input100 validate-input">
	            <input class="input100" type="text" name="hobs" placeholder="Hobbies" value="<?=$row['hobs']?>">
	            <span class="focus-input100"></span>
	          </div>
	          <br>

	          <p>Interests</p>
	          <div class="wrap-input100 validate-input">
	            <input class="input100" type="text" name="intrst" placeholder="Interests" value="<?=$row['intrst']?>">
	            <span class="focus-input100"></span>
	          </div>
	          <br>

	          <p>Preffered Language</p>
	          <div class="wrap-input100 validate-input">
	            <input class="input100" type="text" name="pref_lang" placeholder="Preffered Language" value="<?=$row['pref_lang']?>">
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