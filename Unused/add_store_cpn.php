<?php

$connect_db = mysqli_connect("localhost","root","") or die("Cannot connect to server");
mysqli_select_db($connect_db,"jobfit") or die("Cannot connect to the database");

/*if (isset($_POST['store_id']))
{
	$store_id = $_POST['store_id'];
}*/

if (isset($_POST['cpn1']))
{
    $cpn1 = $_POST['cpn1'];
}
 echo "<script>alert('Complete all field' + $cpn1);</script>";
echo "<script> alert('$cpn1'); </script>";
	   
if (isset($_POST['cpn1_cd']))
{
    $cpn1_cd = $_POST['cpn1_cd'];
}

if (isset($_POST['cpn2']))
{
    $cpn2 = $_POST['cpn2'];
}

	   
if (isset($_POST['cpn2_cd']))
{
    $cpn2_cd = $_POST['cpn2_cd'];
}

if (isset($_POST['cpn3']))
{
    $cpn3 = $_POST['cpn3'];
}

	   
if (isset($_POST['cpn3_cd']))
{
    $cpn3_cd = $_POST['cpn3_cd'];
}

if (isset($_POST['cpn4']))
{
    $cpn4 = $_POST['cpn4'];
}

	   
if (isset($_POST['cpn4_cd']))
{
    $cpn4_cd = $_POST['cpn4_cd'];
}

if (isset($_POST['cpn5']))
{
    $cpn5 = $_POST['cpn5'];
}

	   
if (isset($_POST['cpn5_cd']))
{
    $cpn5_cd = $_POST['cpn5_cd'];
}
  
mysqli_query($connect_db,"insert into store_coupons set cpn1='$cpn1', cpn1_cd='$cpn1_cd', cpn2='$cpn2', cpn2_cd='$cpn2_cd', cpn3='$cpn3', cpn3_cd='$cpn3_cd', cpn4='$cpn4', cpn4_cd='$cpn4_cd', cpn5='$cpn5', cpn5_cd='$cpn5_cd'");



echo "<script>window.location.href='view_store_cpn.php';</script>";
    
?>

