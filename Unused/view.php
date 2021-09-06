
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

include('Login_v3/session.php'); 
if(!isset($_SESSION['login_user'])){ 
  header("location: login_v3.php"); // Redirecting To Home Page 
}

$connect_db = mysqli_connect("localhost","root","") or die("Cannot connect to server");
mysqli_select_db($connect_db,"jobfit") or die("Cannot connect to the database");

//$query = mysqli_query($connect_db,"select * from person");
$query = mysqli_query($connect_db,"select * from person where store_id='$store' ");
$store_id = $store;

?>
<table border="1">
<tr>
    <th>Name</th>
    <th>Phone</th>
  	<th>F1</th>
    <th>F2</th>
    <th>F3</th>
    <th>F4</th>
    <th>F5</th>
    <th>Feedback</th>
    <th>Action</th>
</tr>

<?php

if(mysqli_num_rows($query)>0){
 
		
    while($row= mysqli_fetch_array($query)){ ?>
    <tr>
        <td><?=$row['name']?></td>
        <td><?=$row['phone']?></td>
  		  <td><?=$row['n1']?></td>
  		  <td><?=$row['n2']?></td>
  		  <td><?=$row['n3']?></td>
  		  <td><?=$row['n4']?></td>
  		  <td><?=$row['n5']?></td>
  		  <td><?=$row['msg']?></td>
        <td><a href="update.php?id=<?=$row['id']?>">[Edit]</a>&nbsp;<a href="delete.php?id=<?=$row['id']?>">[Delete]</a></td>
    </tr>
	
<?php        
        
    }
        
}
else{
    
    echo "no record";
}

?>
<tr><td colspan="3"><a href="feedback.php" >[Add new record]</a>
</td></tr>
</table>
