<?php

include('Login_v3/session.php'); 
if(!isset($_SESSION['login_user'])){ 
  header("location: login_v3.php"); // Redirecting To Home Page 
}

$connect_db = mysqli_connect("localhost","root","") or die("Cannot connect to server");
mysqli_select_db($connect_db,"jobfit") or die("Cannot connect to the database");


$store_id = $store;

$store_name= ($_POST['store_name']);
$store_add= ($_POST['store_add']);

$owner_name= ($_POST['owner_name']);
$owner_phone= ($_POST['owner_phone']);

$store_phone= ($_POST['store_phone']);
$store_email= ($_POST['store_email']);

if($store_name=="" || $store_add=="" || $owner_name=="" || $owner_phone=="" || $store_phone=="" || $store_email==""){
    echo "<script>alert('Complete all field');history.back();</script>";
    
}else{
    mysqli_query($connect_db,"update store set store_name='$store_name', store_add='$store_add', owner_name='$owner_name', owner_phone='$owner_phone', store_phone='$store_phone', store_email='$store_email' where store_id='$store_id'");
    echo "<script>alert('Record successfuly updated.');window.location.href='store_details.php';</script>";
}
?>
