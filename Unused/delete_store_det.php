<?php
$connect_db = mysqli_connect("localhost","root","") or die("Cannot connect to server");
mysqli_select_db($connect_db,"jobfit") or die("Cannot connect to the database");

$store_id = $_GET['store_id'];

    mysqli_query($connect_db,"delete from store where store_id='".$store_id."'");
    echo "<script>alert('Record successfuly updated.');window.location.href='view_store_det.php';</script>";
?>