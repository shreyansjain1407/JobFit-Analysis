<?php

include('Login_v3/session.php'); 
if(!isset($_SESSION['login_user'])){ 
  header("location: login_v3.php"); // Redirecting To Home Page 
}

$connect_db = mysqli_connect("localhost","root","") or die("Cannot connect to server");
mysqli_select_db($connect_db,"jobfit") or die("Cannot connect to the database");

$query = mysqli_query($connect_db,"select * from person where id='".$_GET['id']."'");
$row = mysqli_fetch_array($query);

$store_id = $store;
?>
<html>
<body>
<div style="border:1px solid;"> 

<form action="edit.php>" method="post">
<input type='hidden' name="id" value="<?=($_GET['id'])?$_GET['id']:''?>">
Fullname <input type="text" name="name" value="<?=$row['name']?>"><br>
Phone No. <input type="text" name="phone" value="<?=$row['phone']?>"><br>
<input type="submit" value="Update">
<input type="reset" value="Reset">
</form>    
<a href="feedback.php?cname=<?="Name"?>&cphone=<?="Phone"?>">[Back to home]</a>
</div>
</body>
</html>
