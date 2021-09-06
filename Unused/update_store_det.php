<?php
$connect_db = mysqli_connect("localhost","root","") or die("Cannot connect to server");
mysqli_select_db($connect_db,"jobfit") or die("Cannot connect to the database");

$query = mysqli_query($connect_db,"select * from store where store_id='".$_GET['store_id']."'");
$row = mysqli_fetch_array($query);?>

<html>
	<body>
		<div style="border:1px solid;"> 
			<form action="edit_store_det.php" method="post">
				<input type='hidden' name="store_id" value="<?=($_GET['store_id'])?$_GET['store_id']:''?>">

	    	    Store Name<input type="text" name="store_name" value="<?=$row['store_name']?>"><br>

        	    Store Address<input type="text" name="store_add" value="<?=$row['store_add']?>"><br>

        	    Owner's Name<input type="text" name="owner_name" value="<?=$row['owner_name']?>"><br>

        	    Owner's Phone<input type="text" name="owner_phone" value="<?=$row['owner_phone']?>"><br>

        	    Store Phone<input type="text" name="store_phone" value="<?=$row['store_phone']?>"><br>

        	    Store Email<input type="text" name="store_email" value="<?=$row['store_email']?>"><br>

        	    <br><br>

				<input type="submit" value="Update">
				<input type="reset" value="Reset">
			</form>    
			<a href="store_details.php" >[Back to home]</a>
		</div>
	</body>
</html>
