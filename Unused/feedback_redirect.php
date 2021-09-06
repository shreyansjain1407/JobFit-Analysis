<?php
include('Login_v3/session.php'); 
if(!isset($_SESSION['login_user'])){ 
  header("location: login_v3.php"); // Redirecting To Home Page 
}

$connect_db = mysqli_connect("localhost","root","") or die("Cannot connect to server");
mysqli_select_db($connect_db,"jobfit") or die("Cannot connect to the database");

$query = mysqli_query($connect_db,"select * from store_coupons where store_id='$store'");
$row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html >
<head>
 	<title>Thank You</title>
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
	<link rel="stylesheet" href="cssOpt/style_feed_red.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="cssOpt/style_feed_red.css">
</head>

<body>

  <div class="rb-box">
    <h1 align="center">Congratulations!!!<br>You Have Received Gift Coupons</h1>
  </div>

  <div class="rb-box">
    <p>“It takes humility to seek feedback. it takes wisdom to understand it, analyze it, and appropriately act on it.”
    <br> ~Stephen Covey</p>
  </div>

  <div class="rb-box">
    <p>We are very thankful for your feedback and we will work hard to meet our cistomers' expectations. </p>
  </div>

  <div class="rb-box">
    <p>You have received the following coupons post your feedback</p> 
    <table>
      <tr>
        <th><?=$row['cpn1']?></th>
        <th><?=$row['cpn2']?></th>
      </tr>
      <tr>
        <td>
          <div class="image-container">
            <img class="reduce" src="images/cpn_underlay.jpg">
            <div class="centered"><?=$row['cpn1_cd']?></div>
          </div>
        </td>
        <td>
          <div class="image-container">
            <img class="reduce" src="images/cpn_underlay.jpg">
            <div class="centered"><?=$row['cpn2_cd']?></div>
          </div>
        </td>
      </tr>
      <tr>
        <th><?=$row['cpn3']?></th>
        <th><?=$row['cpn4']?></th>
      </tr>
      <tr>
        <td>
          <div class="image-container">
            <img class="reduce" src="images/cpn_underlay.jpg">
            <div class="centered"><?=$row['cpn3_cd']?></div>
          </div>
        </td>
        <td>
          <div class="image-container">
            <img class="reduce" src="images/cpn_underlay.jpg">
            <div class="centered"><?=$row['cpn4_cd']?></div>
          </div>
        </td>
      </tr>
    </table>
    

<!--
    <div class="row">
      <div class="column" class="image-container">
         <img class="reduce" src="images/cpn_underlay.jpg">
         <div class="centered"><label>Coupon</label></div>
      </div>
      <div class="column" class="image-container">
         <img class="reduce" src="images/cpn_underlay.jpg">
         <div class="centered"><label>Coupon</label></div>
      </div>
    </div>
    <div class="row">
      <div class="column" class="image-container">
         <img class="reduce" src="images/cpn_underlay.jpg">
         <div class="centered"><label>Coupon</label></div>
      </div>
      <div class="column" class="image-container">
         <img class="reduce" src="images/cpn_underlay.jpg">
         <div class="centered"><label>Coupon</label></div>
      </div>
    </div>
  -->


    <p>We hope to see you soon :)</p>
      <div class="container-login100-form-btn m-t-17"  align: center>
        <button class="button trigger">More Info!!!</button>
      </div>
    </div>

      <form class="login100-form validate-form flex-sb flex-w" action='add.php' method="post">
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
</body>
</html>
