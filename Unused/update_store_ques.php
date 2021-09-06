<?php
$connect_db = mysqli_connect("localhost","root","") or die("Cannot connect to server");
mysqli_select_db($connect_db,"jobfit") or die("Cannot connect to the database");

$query = mysqli_query($connect_db,"select * from store_questions where store_id='".$_GET['store_id']."'");
$row = mysqli_fetch_array($query);
?>

<html>
	<body>
		<div style="border:1px solid;"> 
			<form action="edit_store_ques.php" method="post">
				<input type='hidden' name="store_id" value="<?=($_GET['store_id'])?$_GET['store_id']:''?>">
				
	    	    Question 1<input type="text" name="q1" value="<?=$row['q1']?>"><br>
        	    Question 2<input type="text" name="q2" value="<?=$row['q2']?>"><br>
        	    Question 3<input type="text" name="q3" value="<?=$row['q3']?>"><br>
        	    Question 4<input type="text" name="q4" value="<?=$row['q4']?>"><br>
        	    Question 5<input type="text" name="q5" value="<?=$row['q5']?>"><br>
				<input type="submit" value="Update">
				<input type="reset" value="Reset">
			</form>    
			<a href="store_questions.php" >[Back to home]</a>
		</div>
	</body>
</html>
