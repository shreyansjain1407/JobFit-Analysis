
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

$query = mysqli_query($connect_db,"select * from store order by store_id asc");
?>
<table border="1">
<tr>
    <th>Store ID</th>
    <th>Store Name</th>
  	<th>Store Address</th>
    <th>Owner's Name</th>
    <th>Owner's Phone</th>
    <th>Store Phone</th>
    <th>Store Email</th>
</tr>

<?php

if(mysqli_num_rows($query)>0){
 
		
    while($row= mysqli_fetch_array($query)){ ?>
    <tr>
        <td><?=$row['store_id']?></td>
        <td><?=$row['store_name']?></td>
  		  <td><?=$row['store_add']?></td>
  		  <td><?=$row['owner_name']?></td>
  		  <td><?=$row['owner_phone']?></td>
  		  <td><?=$row['store_phone']?></td>
        <td><?=$row['store_email']?></td>
  		  
        <td><a href="update_store_det.php?store_id=<?=$row['store_id']?>">[Edit]</a>&nbsp;<a href="delete_store_det.php?store_id=<?=$row['store_id']?>">[Delete]</a></td>
    </tr>
	
<?php        
        
    }
        
}
else{
    
    echo "no record";
}

?>
<tr><td colspan="3"><a href="store_details.php" >[Add new record]</a>
</td></tr>
</table>
