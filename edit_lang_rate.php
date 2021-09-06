<?php

include('Login_v3/session.php');
if(!isset($_SESSION['login_user'])){
	header("location: login_v3.php"); //Redirecting to Login
}

$user = $_SESSION['login_user'];

$connect_db = mysqli_connect("localhost","root","") or die("Cannot connect to Database");
mysqli_select_db($connect_db,"jobfit") or die("Cannot connect to Database");


if (isset($_POST['HTML']))				//Mandatory
{
	$HTML = ($_POST['HTML']);
}

if (isset($_POST['CSS']))				//Mandatory
{
	$CSS = ($_POST['CSS']);
}

if (isset($_POST['JavaScript']))				//Mandatory
{
	$JavaScript = ($_POST['JavaScript']);
}

if (isset($_POST['Bash']))				//Mandatory
{
	$Bash = ($_POST['Bash']);
}

if (isset($_POST['Shell']))				//Mandatory
{
	$Shell = ($_POST['Shell']);
}

if (isset($_POST['PowerShell']))				//Mandatory
{
	$PowerShell = ($_POST['PowerShell']);
}

if (isset($_POST['C']))				//Mandatory
{
	$C = ($_POST['C']);
}

if (isset($_POST['Cpp']))				//Mandatory
{
	$Cpp = ($_POST['Cpp']);
}

if (isset($_POST['Java']))				//Mandatory
{
	$Java = ($_POST['Java']);
}

if (isset($_POST['ObjectiveC']))				//Mandatory
{
	$Objective_C = ($_POST['ObjectiveC']);
}

if (isset($_POST['Swift']))				//Mandatory
{
	$Swift = ($_POST['Swift']);
}

if (isset($_POST['Assembly']))				//Mandatory
{
	$Assembly = ($_POST['Assembly']);
}

if (isset($_POST['C_hash']))				//Mandatory
{
	$C_hash = ($_POST['C_hash']);
}

if (isset($_POST['Clojure']))				//Mandatory
{
	$Clojure = ($_POST['Clojure']);
}

if (isset($_POST['Dart']))				//Mandatory
{
	$Dart = ($_POST['Dart']);
}

if (isset($_POST['Elixir']))				//Mandatory
{
	$Elixir = ($_POST['Elixir']);
}

if (isset($_POST['Erlang']))				//Mandatory
{
	$Erlang = ($_POST['Erlang']);
}

if (isset($_POST['F_hash']))				//Mandatory
{
	$F_hash = ($_POST['F_hash']);
}

if (isset($_POST['Go']))				//Mandatory
{
	$Go = ($_POST['Go']);
}

if (isset($_POST['Kotlin']))				//Mandatory
{
	$Kotlin = ($_POST['Kotlin']);
}

if (isset($_POST['PHP']))				//Mandatory
{
	$PHP = ($_POST['PHP']);
}

if (isset($_POST['Python']))				//Mandatory
{
	$Python = ($_POST['Python']);
}

if (isset($_POST['R']))				//Mandatory
{
	$R = ($_POST['R']);
}

if (isset($_POST['Ruby']))				//Mandatory
{
	$Ruby = ($_POST['Ruby']);
}

if (isset($_POST['Rust']))				//Mandatory
{
	$Rust = ($_POST['Rust']);
}

if (isset($_POST['Scala']))				//Mandatory
{
	$Scala = ($_POST['Scala']);
}

if (isset($_POST['SQLang']))				//Mandatory
{
	$SQLang = ($_POST['SQLang']);
}

if (isset($_POST['TypeScript']))				//Mandatory
{
	$TypeScript = ($_POST['TypeScript']);
}

if (isset($_POST['VBA']))				//Mandatory
{
	$VBA = ($_POST['VBA']);
}

if (isset($_POST['WebAssembly']))				//Mandatory
{
	$WebAssembly = ($_POST['WebAssembly']);
}
	

/*mysqli_query($connect_db,"UPDATE lang_rate SET 
	'HTML'='$HTML',
	'CSS'='$CSS',
	'JavaScript'='$JavaScript',
	'Bash'='$Bash',
	'Shell'='$Shell',
	'PowerShell'='$PowerShell',
	'C'='$C',
	'C++'='$Cpp',
	'Java'='$Java',
	'Objective-C'='$Objective_C',
	'Swift'='$Swift',
	'Assembly'='$Assembly',
	'C#'='$C_hash',
	'Clojure'='$Clojure',
	'Dart'='$Dart',
	'Elixir'='$Elixir',
	'Erlang'='$Erlang',
	'F#'='$F_hash',
	'Go'='$Go',
	'Kotlin'='$Kotlin',
	'PHP'='$PHP',
	'Python'='$Python',
	'R'='$R',
	'Ruby'='$Ruby',
	'Rust'='$Rust',
	'Scala'='$Scala',
	'SQLang'='$SQLang',
	'TypeScript'='$TypeScript',
	'VBA'='$VBA',
	'WebAssembly'='$WebAssembly' WHERE username ='$user'");*/

mysqli_query($connect_db,"UPDATE `lang_rate` SET 
	`HTML` = '$HTML',
	`CSS` = '$CSS',
	`JavaScript` = '$JavaScript',
	`Bash` = '$Bash', `Shell` = '$Shell',
	`PowerShell` = '$PowerShell',
	`C` = '$C',
	`C++` = '$Cpp',
	`Java` = '$Java',
    `Objective-C` = '$Objective_C',
	`Swift` = '$Swift',
	`Assembly` = '$Assembly',
	`C#` = '$C_hash',
	`Clojure` = '$Clojure',
	`Dart` = '$Dart',
	`Elixir` = '$Elixir',
	`Erlang` = '$Erlang',
	`F#` = '$F_hash',
	`Go` = '$Go',
	`Kotlin` = '$Kotlin',
	`PHP` = '$PHP',
	`Python` = '$Python',
	`R` = '$R',
	`Ruby` = '$Ruby',
	`Rust` = '$Rust',
	`Scala` = '$Scala',
	`SQLang` = '$SQLang',
	`TypeScript` = '$TypeScript',
	`VBA` = '$VBA',
	`WebAssembly` = '$WebAssembly'
	WHERE `lang_rate`.`username` = '$user'");
	
	echo"<script>
		alert('Records Successfully Updated.');
		window.location.href='lang_rate.php';
	</script>";

/*
value="<?=$lang_row['HTML']?>"
value="<?=$lang_row['CSS']?>"
value="<?=$lang_row['JavaScript']?>"
value="<?=$lang_row['Bash']?>"
value="<?=$lang_row['Shell']?>"
value="<?=$lang_row['PowerShell']?>"
value="<?=$lang_row['C']?>"
value="<?=$lang_row['C++']?>"
value="<?=$lang_row['Java']?>"
value="<?=$lang_row['Objective-C']?>"
value="<?=$lang_row['Swift']?>"
value="<?=$lang_row['Assembly']?>"
value="<?=$lang_row['C#']?>"
value="<?=$lang_row['Clojure']?>"
value="<?=$lang_row['Dart']?>"
value="<?=$lang_row['Elixir']?>"
value="<?=$lang_row['Erlang']?>"
value="<?=$lang_row['F#']?>"
value="<?=$lang_row['Go']?>"
value="<?=$lang_row['Kotlin']?>"
value="<?=$lang_row['PHP']?>"
value="<?=$lang_row['Python']?>"
value="<?=$lang_row['R']?>"
value="<?=$lang_row['Ruby']?>"
value="<?=$lang_row['Rust']?>"
value="<?=$lang_row['Scala']?>"
value="<?=$lang_row['SQLang']?>"
value="<?=$lang_row['TypeScript']?>"
value="<?=$lang_row['VBA']?>"
value="<?=$lang_row['WebAssembly']?>"

HTML
CSS
JavaScript
Bash
Shell
PowerShell
C
C++
Java
Objective-C
Swift
Assembly
C#
Clojure
Dart
Elixir
Erlang
F#
Go
Kotlin
PHP
Python
R
Ruby
Rust
Scala
SQLang
TypeScript
VBA
WebAssembly

	echo"<script>
		alert('HTML '+'$HTML');
	</script>";
	echo"<script>
		alert('CSS '+'$CSS');
	</script>";
	echo"<script>
		alert('JavaScript '+'$JavaScript');
	</script>";
	echo"<script>
		alert('Bash '+'$Bash');
	</script>";
	echo"<script>
		alert('Shell '+'$Shell');
	</script>";
	echo"<script>
		alert('PowerShell '+'$PowerShell');
	</script>";
	echo"<script>
		alert('C '+'$C');
	</script>";
	echo"<script>
		alert('C++ '+'$Cpp');
	</script>";
	echo"<script>
		alert('Java '+'$Java');
	</script>";
	echo"<script>
		alert('Objective-C '+'$Objective_C');
	</script>";
	echo"<script>
		alert('Swift '+'$Swift');
	</script>";
	echo"<script>
		alert('Assembly '+'$Assembly');
	</script>";
	echo"<script>
		alert('C# '+'$C_hash');
	</script>";
	echo"<script>
		alert('Clojure '+'$Clojure');
	</script>";
	echo"<script>
		alert('Dart '+'$Dart');
	</script>";
	echo"<script>
		alert('Elixir '+'$Elixir');
	</script>";
	echo"<script>
		alert('Erlang '+'$Erlang');
	</script>";
	echo"<script>
		alert('F# '+'$F_hash');
	</script>";
	echo"<script>
		alert('Go '+'$Go');
	</script>";
	echo"<script>
		alert('Kotlin '+'$Kotlin');
	</script>";
	echo"<script>
		alert('PHP '+'$PHP');
	</script>";
	echo"<script>
		alert('Python '+'$Python');
	</script>";
	echo"<script>
		alert('R '+'$R');
	</script>";
	echo"<script>
		alert('Ruby '+'$Ruby');
	</script>";
	echo"<script>
		alert('Rust '+'$Rust');
	</script>";
	echo"<script>
		alert('Scala '+'$Scala');
	</script>";
	echo"<script>
		alert('SQL '+'$SQLang');
	</script>";
	echo"<script>
		alert('TypeScript '+'$TypeScript');
	</script>";
	echo"<script>
		alert('VBA '+'$VBA');
	</script>";
	echo"<script>
		alert('WebAssembly '+'$WebAssembly');
	</script>";
*/


?>