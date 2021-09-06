<?php

include('Login_v3/session.php'); 
if(!isset($_SESSION['login_user'])){ 
  header("location: login_v3.php"); // Redirecting To Home Page 
}

$connect_db = mysqli_connect("localhost","root","") or die("Cannot connect to server");
mysqli_select_db($connect_db,"jobfit") or die("Cannot connect to the database");

$store_id = $store;

$name= ($_POST['name']);
$phone= ($_POST['phone']);
$id    = ($_POST['id']);

if($name=="" || $phone==""){
    echo "<script>alert('Complete all field');history.back();</script>";
    
}else{
    mysqli_query($connect_db,"update person set name='$name', phone='$phone' where id='$id'");
	
    echo "<script>alert('Record successfuly updated.');window.location.href='view.php';</script>";
}
?>
