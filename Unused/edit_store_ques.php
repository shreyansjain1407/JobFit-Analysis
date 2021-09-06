<?php

include('Login_v3/session.php'); 
if(!isset($_SESSION['login_user'])){ 
  header("location: login_v3.php"); // Redirecting To Home Page 
}

$connect_db = mysqli_connect("localhost","root","") or die("Cannot connect to server");
mysqli_select_db($connect_db,"jobfit") or die("Cannot connect to the database");

$store_id = $store;

$q1= ($_POST['q1']);
$q2= ($_POST['q2']);
$q3= ($_POST['q3']);
$q4= ($_POST['q4']);
$q5= ($_POST['q5']);

if($q1=="" || $q2=="" || $q3=="" || $q4=="" || $q5==""){
    echo "<script>alert('Complete all field');history.back();</script>";
    
}else{
    mysqli_query($connect_db,"update store_questions set q1='$q1', q2='$q2', q3='$q3', q4='$q4', q5='$q5' where store_id='$store_id'");

	
    echo "<script>alert('Record successfuly updated.');window.location.href='store_questions.php';</script>";
}
?>
