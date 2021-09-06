<?php

include('Login_v3/session.php');
if(!isset($_SESSION['login_user'])){
	header("location: login_v3.php"); //Redirecting to Login
}

$user = $_SESSION['login_user'];

$connect_db = mysqli_connect("localhost","root","") or die("Cannot connect to Database");
mysqli_select_db($connect_db,"jobfit") or die("Cannot connect to Database");

//$user_id = $user;
if (isset($_POST['name']))				//Mandatory
{
	$name = ($_POST['name']);
}
if (isset($_POST['email']))				//Mandatory
{
	$email = ($_POST['email']);
}
if (isset($_POST['age']))				//Mandatory
{
	$age = ($_POST['age']);
}
if (isset($_POST['perc_x']))			//Mandatory
{
	$perc_x = ($_POST['perc_x']);
}
if (isset($_POST['perc_xii']))			//Mandatory
{
	$perc_xii = ($_POST['perc_xii']);
}
if (isset($_POST['spl_ug']))			//Mandatory
{
	$spl_ug = ($_POST['spl_ug']);
}
if (isset($_POST['perc_ug']))			//Mandatory
{
	$perc_ug = ($_POST['perc_ug']);
}
if (isset($_POST['spl_pg']))
{
	$spl_pg = ($_POST['spl_pg']);
}
if (isset($_POST['perc_pg']))
{
	$perc_pg = ($_POST['perc_pg']);
}
if (isset($_POST['hobs']))				//Mandatory
{
	$hobs = ($_POST['hobs']);
}
if (isset($_POST['intrst']))			//Mandatory
{
	$intrst = ($_POST['intrst']);
}
if (isset($_POST['pref_lang']))			//Mandatory
{
	$pref_lang = ($_POST['pref_lang']);
}

/*									//Mandatory
$email = ($_POST["email"]);			//Mandatory
$age = ($_POST['age']);				//Mandatory
$perc_x = ($_POST['perc_x']);		//Mandatory
$perc_xii = ($_POST['perc_xii']);	//Mandatory
$spl_ug = ($_POST['spl_ug']);		//Mandatory
$perc_ug = ($_POST['perc_ug']);		//Mandatory
$spl_pg = ($_POST['spl_pg']);
$perc_pg = ($_POST['perc_pg']);
$hobs = ($_POST['hobs']);			//Mandatory
$intrsts = ($_POST['intrsts']);		//Mandatory
$pref_lang = ($_POST['pref_lang']);	//Mandatory


if($name=="" || $email=="" || $age=="" || $perc_x =="" || $perc_xii =="" || $spl_ug =="" || $perc_ug =="" || $hobs=="" || $intrsts=="" || $pref_lang==""){
	echo "<script>
		alert('Complete all the Mandatory data fields');
		history.back();
	</script>";
}else{ */
	mysqli_query($connect_db,"UPDATE user SET 
		name='$name',
		email='$email',
		age='$age',
		perc_x='$perc_x',
		perc_xii='$perc_xii',
		spl_ug='$spl_ug',
		perc_ug='$perc_ug',
		spl_pg='$spl_pg',
		perc_pg='$perc_pg',
		hobs='$hobs',
		intrst='$intrst',
		pref_lang='$pref_lang'
		WHERE username='$user'");

	echo"<script>
		alert('Records Successfully Updated.');
		window.location.href='user_det.php';
	</script>";

?>