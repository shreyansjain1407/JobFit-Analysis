
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

$query = mysqli_query($connect_db,"select * from store_questions  order by store_id asc");
?>
<table border="1">
<tr>
    <th>Store ID</th>
    <th>Question 1</th>
  	<th>Question 2</th>
    <th>Question 3</th>
    <th>Question 4</th>
    <th>Question 5</th>
    <!--<th>F5</th>
    <th>Feedback</th>
    <th>Action</th>-->
</tr>

<?php

if(mysqli_num_rows($query)>0){
 
		
    while($row= mysqli_fetch_array($query)){ ?>
    <tr>
        <td><?=$row['store_id']?></td>
        <td><?=$row['q1']?></td>
  		  <td><?=$row['q2']?></td>
  		  <td><?=$row['q3']?></td>
  		  <td><?=$row['q4']?></td>
  		  <td><?=$row['q5']?></td>
		
        <td><a href="update_store_ques.php?store_id=<?=$row['store_id']?>">[Edit]</a>&nbsp;<a href="delete_store_ques.php?store_id=<?=$row['store_id']?>">[Delete]</a></td>
    </tr>
	
<?php        
        
    }
        
}
else{
    
    echo "no record";
}

?>
<tr><td colspan="3"><a href="store_questions.php" >[Add new record]</a>
</td></tr>
</table>
