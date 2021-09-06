<?php

$connect_db = mysqli_connect("localhost","root","") or die("Cannot connect to server");
mysqli_select_db($connect_db,"jobfit") or die("Cannot connect to the database");


if (isset($_POST['Store_Name']))
{
    $Store_Name = $_POST['Store_Name'];
}

	   
if (isset($_POST['Store_Add']))
{
    $Store_Add = $_POST['Store_Add'];
}

if (isset($_POST['Owner_Name']))
{
    $Owner_Name = $_POST['Owner_Name'];
}
if (isset($_POST['Phone']))
{
    $Phone = $_POST['Phone'];
	//echo "<script>alert($phpVar);</script>";
}

if (isset($_POST['Store_Phone']))
{
    $Store_Phone = $_POST['Store_Phone'];
}

if (isset($_POST['Store_Email']))
{
    $Store_Email = $_POST['Store_Email'];
}
  // $phpVar =  $_COOKIE['myJavascriptVar'];

//

 //echo "<script>alert('$one' + '$fiv' + '$phpVar' );</script>";
   
//$name= ($_POST['studentname']);
//$age = ($_POST['studentage']);
//echo ($_POST['name'] + $_POST['age']);
mysqli_query($connect_db,"insert into store set store_name='$Store_Name', store_add='$Store_Add', owner_name='$Owner_Name', owner_phone='$Phone', store_phone='$Store_Phone', store_email='$Store_Email'");
//mysqli_query($connect_db,"insert into person set name='Kushw', age='112'");
echo "<script>window.location.href='view_store_det.php';</script>";
    
?>

