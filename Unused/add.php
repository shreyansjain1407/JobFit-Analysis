<?php

include('Login_v3/session.php'); 
if(!isset($_SESSION['login_user'])){ 
  header("location: Login_v3/login_v3.php"); // Redirecting To Home Page 
}

$connect_db = mysqli_connect("localhost","root","") or die("Cannot connect to server");
mysqli_select_db($connect_db,"jobfit") or die("Cannot connect to the database");

if (isset($_POST['name']))
{
    $mname = $_POST['name'];
}

	   
if (isset($_POST['phone']))
{
    $phone = $_POST['phone'];
}

if (isset($_POST['description']))
{
    $msg = $_POST['description'];
}
if (isset($_POST['first']))
{
    $phpVar = $_POST['first'];
	//echo "<script>alert($phpVar);</script>";
}



    $str = $phpVar;
    $parts = explode("-", $str);
    $one = $parts[0];
    $two = $parts[1];
    $the = $parts[2];
    $fo4 = $parts[3];
    $fiv = $parts[4];



mysqli_query($connect_db,"insert into person set store_id='$store', name='$mname', phone='$phone', n1='$one', n2='$two', n3='$the', n4='$fo4', n5='$fiv',msg='$msg'");

echo "<script>window.location.href='feedback_redirect.php';</script>";
    								
?>

