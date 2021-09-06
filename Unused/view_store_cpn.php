
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Pure CSS Table Highlight (vertical & horizontal)</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <div class="container">

</div>
  
  
</body>
</html>

<?php
$connect_db = mysqli_connect("localhost","root","") or die("Cannot connect to server");
mysqli_select_db($connect_db,"jobfit") or die("Cannot connect to the database");
$store_id = $_GET['store_id'];

$query = mysqli_query($connect_db,"select * from store_coupons where store_id=$store_id");
?>
<table border="1">
<tr>
    <th>Store ID</th>
    <th>Coupon 1</th>
  	<th>Coupon Code 1</th>
    <th>Coupon 2</th>
    <th>Coupon Code 2</th>
    <th>Coupon 3</th>
    <th>Coupon Code 3</th>
    <th>Coupon 4</th>
    <th>Coupon Code 4</th>
    <th>Coupon 5</th>
    <th>Coupon Code 5</th>
</tr>

<?php

if(mysqli_num_rows($query)>0){
 
		
    while($row= mysqli_fetch_array($query)){ ?>
    <tr>
        <td><?=$row['store_id']?></td>
        <td><?=$row['cpn1']?></td>
  		  <td><?=$row['cpn1_cd']?></td>
  		  <td><?=$row['cpn2']?></td>
  		  <td><?=$row['cpn2_cd']?></td>
  		  <td><?=$row['cpn3']?></td>
        <td><?=$row['cpn3_cd']?></td>
        <td><?=$row['cpn4']?></td>
        <td><?=$row['cpn4_cd']?></td>
        <td><?=$row['cpn5']?></td>
        <td><?=$row['cpn5_cd']?></td>
  		  
        <td><a href="update_store_cpn.php?store_id=<?=$row['store_id']?>">[Edit]</a>&nbsp;<a href="delete_store_cpn.php?store_id=<?=$row['store_id']?>">[Delete]</a></td>
    </tr>
	
<?php        
        
    }
        
}
else{
    
    echo "no record";
}

?>
<tr><td colspan="3"><a href="store_cpn.php" >[Add new record]</a>
</td></tr>
</table>
