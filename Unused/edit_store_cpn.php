<?php

include('Login_v3/session.php'); 
if(!isset($_SESSION['login_user'])){ 
  header("location: login_v3.php"); // Redirecting To Home Page 
}

$connect_db = mysqli_connect("localhost","root","") or die("Cannot connect to server");
mysqli_select_db($connect_db,"jobfit") or die("Cannot connect to the database");

$store_id = $store;

$cpn1= ($_POST['cpn1']);
$cpn1_cd= ($_POST['cpn1_cd']);

$cpn2= ($_POST['cpn2']);
$cpn2_cd= ($_POST['cpn2_cd']);

$cpn3= ($_POST['cpn3']);
$cpn3_cd= ($_POST['cpn3_cd']);

$cpn4= ($_POST['cpn4']);
$cpn4_cd= ($_POST['cpn4_cd']);

$cpn5= ($_POST['cpn5']);
$cpn5_cd= ($_POST['cpn5_cd']);

if($cpn1=="" || $cpn1_cd=="" || $cpn2=="" || $cpn2_cd=="" || $cpn3=="" || $cpn3_cd=="" || $cpn4=="" || $cpn4_cd=="" || $cpn5=="" || $cpn5_cd==""){
    echo "<script>alert('Complete all field');history.back();</script>";
    
}else{
    mysqli_query($connect_db,"update store_coupons set cpn1='$cpn1', cpn1_cd='$cpn1_cd', cpn2='$cpn2', cpn2_cd='$cpn2_cd', cpn3='$cpn3', cpn3_cd='$cpn3_cd', cpn4='$cpn4', cpn4_cd='$cpn4_cd', cpn5='$cpn5', cpn5_cd='$cpn5_cd' where store_id='$store_id'");
    echo "<script>alert('Record successfuly updated.');window.location.href='store_cpn.php';</script>";
}
?>
