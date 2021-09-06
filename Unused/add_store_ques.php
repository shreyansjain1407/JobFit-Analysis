<?php

$connect_db = mysqli_connect("localhost","root","") or die("Cannot connect to server");
mysqli_select_db($connect_db,"jobfit") or die("Cannot connect to the database");

/*if (isset($_POST['store_id']))
{
	$store_id = $_POST['store_id'];
}*/

if (isset($_POST['q1']))
{
    $q1 = $_POST['q1'];
}

	   
if (isset($_POST['q2']))
{
    $q2 = $_POST['q2'];
}

if (isset($_POST['q3']))
{
    $q3 = $_POST['q3'];
}

if (isset($_POST['q4']))
{
    $q4 = $_POST['q4'];
}

if (isset($_POST['q5']))
{
    $q5 = $_POST['q5'];
}
  
mysqli_query($connect_db,"insert into store_questions set q1='$q1', q2='$q2', q3='$q3', q4='$q4', q5='$q5'");

echo "<script>window.location.href='view_store_ques.php';</script>";
    
?>

