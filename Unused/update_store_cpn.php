<?php
$connect_db = mysqli_connect("localhost","root","") or die("Cannot connect to server");
mysqli_select_db($connect_db,"jobfit") or die("Cannot connect to the database");

//$query = mysqli_query($connect_db,"select * from store_cpn where store_id='".$_GET['store_id']."'");


$query = mysqli_query($connect_db,"select * from store_coupons where store_id='".$_GET['store_id']."'");
$row = mysqli_fetch_array($query);?>

<html>
	<body>
		<div style="border:1px solid;"> 
			<form action="edit_store_cpn.php" method="post">
				<input type='hidden' name="store_id" value="<?=($_GET['store_id'])?$_GET['store_id']:''?>">

	    	    Coupon 1<input type="text" name="cpn1" value="<?=$row['cpn1']?>"><br>
        	    Coupon Code 1<input type="text" name="cpn1_cd" value="<?=$row['cpn1_cd']?>"><br>

        	    Coupon 2<input type="text" name="cpn2" value="<?=$row['cpn2']?>"><br>
        	    Coupon Code 2<input type="text" name="cpn2_cd" value="<?=$row['cpn2_cd']?>"><br>

        	    Coupon 3<input type="text" name="cpn3" value="<?=$row['cpn3']?>"><br>
        	    Coupon Code 3<input type="text" name="cpn3_cd" value="<?=$row['cpn3_cd']?>"><br>

        	    Coupon 4<input type="text" name="cpn4" value="<?=$row['cpn4']?>"><br>
        	    Coupon Code 4<input type="text" name="cpn4_cd" value="<?=$row['cpn4_cd']?>"><br>

        	    Coupon 5<input type="text" name="cpn5" value="<?=$row['cpn5']?>"><br>
        	    Coupon Code 5<input type="text" name="cpn5_cd" value="<?=$row['cpn5_cd']?>"><br><br>

				<input type="submit" value="Update">
				<input type="reset" value="Reset">
			</form>    
			<a href="store_cpn.php" >[Back to home]</a>
		</div>
	</body>
</html>
