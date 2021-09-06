<?php

$connect_db = mysqli_connect("localhost","root","") or die("Cannot connect to server");
mysqli_select_db($connect_db,"jobfit") or die("Cannot connect to the database");

$username = ($_POST['username']);		//Mandatory
$password = ($_POST['password']);		//Mandatory
$name = ($_POST['name']);				//Mandatory
$email = ($_POST['email']);				//Mandatory

if ($username==""||$password==""||$name==""||$email=="") {
	# code...
	echo "<script>
		alert('Complete all data fields');
		history.back();
	</script>";
}else{
	mysqli_query($connect_db,"INSERT INTO `login` (`username`, `password`) VALUES ('$username', '$password') ");

	mysqli_query($connect_db,"INSERT INTO `user` (`username`, `name`, `email`, `age`, `perc_x`, `perc_xii`, `spl_ug`, `perc_ug`, `spl_pg`, `perc_pg`, `hobs`, `intrst`, `pref_lang`) VALUES ('$username', '$name', '$email', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL')");

	mysqli_query($connect_db,"INSERT INTO `lang_rate` (`username`, `HTML`, `CSS`, `JavaScript`, `Bash`, `Shell`, `PowerShell`, `C`, `C++`, `Java`, `Objective-C`, `Swift`, `Assembly`, `C#`, `Clojure`, `Dart`, `Elixir`, `Erlang`, `F#`, `Go`, `Kotlin`, `PHP`, `Python`, `R`, `Ruby`, `Rust`, `Scala`, `SQL`, `TypeScript`, `VBA`, `WebAssembly`, `time`) VALUES ('$username', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', current_timestamp())");

	echo"<script>
		window.location.href='login_v3.php';
	</script>";
}