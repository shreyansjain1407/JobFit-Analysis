<?php

include('Login_v3/session.php'); 
if(!isset($_SESSION['login_user'])){ 
  header("location: Login_v3/login_v3.php"); // Redirecting To Home Page 
}

$connect_db = mysqli_connect("localhost","root","") or die("Cannot connect to server");
mysqli_select_db($connect_db,"jobfit") or die("Cannot connect to the database");

$user = $_SESSION['login_user'];

$query = mysqli_query($connect_db,"select * from user where username='$user'");
$row = mysqli_fetch_array($query);

$lang_query = mysqli_query($connect_db,"select * from lang_rate where username='$user'");
$lang_row = mysqli_fetch_array($lang_query);


?>

<!DOCTYPE html>
<html >
  <head>
   	<title>Add Language Details</title>
  	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<!--===============================================================================================-->
  	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  	<!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  	<!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  	<!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
  	<!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
  	<!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
  	<!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
  	<!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
  	<!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
  	<!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="css/util.css">
  	<link rel="stylesheet" type="text/css" href="css/main.css">
  	<link rel="stylesheet" href="cssOpt/style_store_det.css">
  	<!--===============================================================================================-->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="cssOpt/style_store_det.css">  
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="cssOpt/sidenav.css">

    <style>
      /* The switch - the box around the slider */
        .switch {
          position: relative;
          display: inline-block;
          width: 60px;
          height: 34px;
        }

        /* Hide default HTML checkbox */
        .switch input {
          opacity: 0;
          width: 0;
          height: 0;
        }

        /* The slider */
        .slider {
          position: absolute;
          cursor: pointer;
          top: 0;
          left: 0;
          right: 0;
          bottom: 0;
          background-color: #ccc;
          -webkit-transition: .4s;
          transition: .4s;
        }

        .slider:before {
          position: absolute;
          content: "";
          height: 26px;
          width: 26px;
          left: 4px;
          bottom: 4px;
          background-color: white;
          -webkit-transition: .4s;
          transition: .4s;
        }

        input[value='1'] + .slider {
          background-color: #2196F3;
        }

        input:focus + .slider {
          box-shadow: 0 0 1px #2196F3;
        }

        input[value='1'] + .slider:before {
          -webkit-transform: translateX(26px);
          -ms-transform: translateX(26px);
          transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
          border-radius: 34px;
        }

        .slider.round:before {
          border-radius: 50%;
        }
    </style>
  </head>

  <body>
    <!--
    <div class="container-login100-form-btn m-t-17"  align: center>
            <button class="button" onclick="valalert()">Getval!</button>
    </div>

    <script type="text/javascript">
      function valalert(){
        var val = document.getElementById("JavaScript").value;
        alert(val);
      }

    </script>
    -->

    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="user_det.php">User Details</a>
      <a href="lang_rate.php">Language Rating</a>
      <a href="">Future Options 1</a>
      <a href="">Future Options 2</a>
      <a href="">Future Options 3</a>
      <a href="Login_v3/logout.php">Logout</a>
    </div>

    <!-- Use any element to open the sidenav -->
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>

    <div id="main">
      <div class="rb-box">
        <p>Hello <?=$row['name']?></p>
      </div>

      <form class="login100-form validate-form flex-sb flex-w" action='edit_lang_rate.php' method="post" >
        <div class="rb-box">

          <p>Please Enter Your Language Preferences</p>
          <br>

          <p>HTML</p>
          <div>
            <label class="switch">
              <input type="checkbox" name="HTML" value="<?=$lang_row['HTML']?>" onclick="cvHTML()" id="HTML" >
              <span class="slider round"></span>
            </label>
          </div>     
          <br>

          <p>CSS</p>
          <div>
            <label class="switch">
              <input type="checkbox" name="CSS" value="<?=$lang_row['CSS']?>" onclick="cvCSS()" id="CSS" >
              <span class="slider round"></span>
            </label>
          </div>
          <br>

          <p>JavaScript</p>
          <div>
            <label class="switch">
              <input type="checkbox" name="JavaScript" value="<?=$lang_row['JavaScript']?>" onclick="cvJavaScript()" id="JavaScript" >
              <span class="slider round"></span>
            </label>
          </div>
          <br>

          <p>Bash</p>
          <div>
            <label class="switch">
              <input type="checkbox" name="Bash" value="<?=$lang_row['Bash']?>" onclick="cvBash()" id="Bash">
              <span class="slider round"></span>
            </label>
          </div>
          <br>

          <p>Shell</p>
          <div>
            <label class="switch">
              <input type="checkbox" name="Shell" value="<?=$lang_row['Shell']?>" onclick="cvShell()" id="Shell" >
              <span class="slider round"></span>
            </label>
          </div>
          <br>

          <p>PowerShell</p>
          <div>
            <label class="switch">
              <input type="checkbox" name="PowerShell" value="<?=$lang_row['PowerShell']?>" onclick="cvPowerShell()" id="PowerShell" >
              <span class="slider round"></span>
            </label>
          </div>
          <br>

          <p>C</p>
          <div>
            <label class="switch">
              <input type="checkbox" name="C" value="<?=$lang_row['C']?>" onclick="cvC()" id="C" >
              <span class="slider round"></span>
            </label>
          </div>
          <br>
          
          <p>C++</p>
          <div>
            <label class="switch">
              <input type="checkbox" name="Cpp" value="<?=$lang_row['C++']?>" onclick="cvCpp()" id="Cpp" >
              <span class="slider round"></span>
            </label>
          </div>
          <br>
          
          <p>Java</p>
          <div>
            <label class="switch">
              <input type="checkbox" name="Java" value="<?=$lang_row['Java']?>" onclick="cvJava()" id="Java" >
              <span class="slider round"></span>
            </label>
          </div>
          <br>
          
          <p>Objective-C</p>
          <div>
            <label class="switch">
              <input type="checkbox" name="ObjectiveC" value="<?=$lang_row['Objective-C']?>" onclick="cvObjective()" id="ObjectiveC" >
              <span class="slider round"></span>
            </label>
          </div>
          <br>
          
          <p>Swift</p>
          <div>
            <label class="switch">
              <input type="checkbox" name="Swift" value="<?=$lang_row['Swift']?>" onclick="cvSwift()" id="Swift" >
              <span class="slider round"></span>
            </label>
          </div>
          <br>
          
          <p>Assembly</p>
          <div>
            <label class="switch">
              <input type="checkbox" name="Assembly" value="<?=$lang_row['Assembly']?>" onclick="cvAssembly()" id="Assembly" >
              <span class="slider round"></span>
            </label>
          </div>
          <br>
          
          <p>C#</p>
          <div>
            <label class="switch">
              <input type="checkbox" name="C_hash" value="<?=$lang_row['C#']?>" onclick="cvC_hash()" id="C_hash" >
              <span class="slider round"></span>
            </label>
          </div>
          <br>
          
          <p>Clojure</p>
          <div>
            <label class="switch">
              <input type="checkbox" name="Clojure" value="<?=$lang_row['Clojure']?>" onclick="cvClojure()" id="Clojure" >
              <span class="slider round"></span>
            </label>
          </div>
          <br>
          
          <p>Dart</p>
          <div>
            <label class="switch">
              <input type="checkbox" name="Dart" value="<?=$lang_row['Dart']?>" onclick="cvDart()" id="Dart" >
              <span class="slider round"></span>
            </label>
          </div>
          <br>
          
          <p>Elixir</p>
          <div>
            <label class="switch">
              <input type="checkbox" name="Elixir" value="<?=$lang_row['Elixir']?>" onclick="cvElixir()" id="Elixir" >
              <span class="slider round"></span>
            </label>
          </div>
          <br>
          
          <p>Erlang</p>
          <div>
            <label class="switch">
              <input type="checkbox" name="Erlang" value="<?=$lang_row['Erlang']?>" onclick="cvErlang()" id="Erlang" >
              <span class="slider round"></span>
            </label>
          </div>
          <br>
          
          <p>F#</p>
          <div>
            <label class="switch">
              <input type="checkbox" name="F_hash" value="<?=$lang_row['F#']?>" onclick="cvF_hash()" id="F_hash" >
              <span class="slider round"></span>
            </label>
          </div>
          <br>
          
          <p>Go</p>
          <div>
            <label class="switch">
              <input type="checkbox" name="Go" value="<?=$lang_row['Go']?>" onclick="cvGo()" id="Go" >
              <span class="slider round"></span>
            </label>
          </div>
          <br>
          
          <p>Kotlin</p>
          <div>
            <label class="switch">
              <input type="checkbox" name="Kotlin" value="<?=$lang_row['Kotlin']?>" onclick="cvKotlin()" id="Kotlin" >
              <span class="slider round"></span>
            </label>
          </div>
          <br>
          
          <p>PHP</p>
          <div>
            <label class="switch">
              <input type="checkbox" name="PHP" value="<?=$lang_row['PHP']?>" onclick="cvPHP()" id="PHP" >
              <span class="slider round"></span>
            </label>
          </div>
          <br>
          
          <p>Python</p>
          <div>
            <label class="switch">
              <input type="checkbox" name="Python" value="<?=$lang_row['Python']?>" onclick="cvPython()" id="Python" >
              <span class="slider round"></span>
            </label>
          </div>
          <br>
          
          <p>R</p>
          <div>
            <label class="switch">
              <input type="checkbox" name="R" value="<?=$lang_row['R']?>" onclick="cvR()" id="R" >
              <span class="slider round"></span>
            </label>
          </div>
          <br>
          
          <p>Ruby</p>
          <div>
            <label class="switch">
              <input type="checkbox" name="Ruby" value="<?=$lang_row['Ruby']?>" onclick="cvRuby()" id="Ruby" >
              <span class="slider round"></span>
            </label>
          </div>
          <br>
          
          <p>Rust</p>
          <div>
            <label class="switch">
              <input type="checkbox" name="Rust" value="<?=$lang_row['Rust']?>" onclick="cvRust()" id="Rust" >
              <span class="slider round"></span>
            </label>
          </div>
          <br>
          
          <p>Scala</p>
          <div>
            <label class="switch">
              <input type="checkbox" name="Scala" value="<?=$lang_row['Scala']?>" onclick="cvScala()" id="Scala" >
              <span class="slider round"></span>
            </label>
          </div>
          <br>
          
          <p>SQL</p>
          <div>
            <label class="switch">
              <input type="checkbox" name="SQLang" value="<?=$lang_row['SQLang']?>" onclick="cvSQLang()" id="SQLang" >
              <span class="slider round"></span>
            </label>
          </div>
          <br>
          
          <p>TypeScript</p>
          <div>
            <label class="switch">
              <input type="checkbox" name="TypeScript" value="<?=$lang_row['TypeScript']?>" onclick="cvTypeScript()" id="TypeScript" >
              <span class="slider round"></span>
            </label>
          </div>
          <br>
          
          <p>VBA</p>
          <div>
            <label class="switch">
              <input type="checkbox" name="VBA" value="<?=$lang_row['VBA']?>" onclick="cvVBA()" id="VBA" >
              <span class="slider round"></span>
            </label>
          </div>
          <br>
             
          <p>WebAssembly</p>
          <div>
            <label class="switch">
              <input type="checkbox" name="WebAssembly" value="<?=$lang_row['WebAssembly']?>" onclick="cvWebAssembly()" id="WebAssembly" >
              <span class="slider round"></span>
            </label>
          </div>

          <div class="container-login100-form-btn m-t-17"  align: center>
            <button class="button trigger" onclick="check()">Submit!</button>
          </div>      
        </div>

        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
        <!--===============================================================================================-->
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/daterangepicker/moment.min.js"></script>
        <script src="vendor/daterangepicker/daterangepicker.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/countdowntime/countdowntime.js"></script>
        <!--===============================================================================================-->
        <script src="js/main.js"></script>
        <script src="js1/index.js"></script>
      </form>
    </div>
    
    <script>
      function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
      }

      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        document.body.style.backgroundColor = "white";
      }

      //cv = Change Value
      function cvHTML(){
        var x = document.getElementById("HTML").value;
        if(x==0){
          x=1;
        }else{
          x=0;
        }
        document.getElementById("HTML").value=x;
        //document.getElementById("HTML").checked = true;
      }

      function cvCSS(){
        var x = document.getElementById("CSS").value;
        if(x==0){
          x=1;
        }else{
          x=0;
        }
        document.getElementById("CSS").value=x;
        //document.getElementById("CSS").checked = true;
      }

      function cvJavaScript(){
        var x = document.getElementById("JavaScript").value;
        if(x==0){
          x=1;
        }else{
          x=0;
        }
        document.getElementById("JavaScript").value=x;
        //document.getElementById("JavaScript").checked = true;
      }

      function cvBash(){
        var x = document.getElementById("Bash").value;
        if(x==0){
          x=1;
        }else{
          x=0;
        }
        document.getElementById("Bash").value=x;
        //document.getElementById("Bash").checked = true;
      }

      function cvShell(){
        var x = document.getElementById("Shell").value;
        if(x==0){
          x=1;
        }else{
          x=0;
        }
        document.getElementById("Shell").value=x;
        //document.getElementById("Shell").checked = true;
      }

      function cvPowerShell(){
        var x = document.getElementById("PowerShell").value;
        if(x==0){
          x=1;
        }else{
          x=0;
        }
        document.getElementById("PowerShell").value=x;
        //document.getElementById("PowerShell").checked = true;
      }

      function cvC(){
        var x = document.getElementById("C").value;
        if(x==0){
          x=1;
        }else{
          x=0;
        }
        document.getElementById("C").value=x;
        //document.getElementById("C").checked = true;
      }

      function cvCpp(){
        var x = document.getElementById("Cpp").value;
        if(x==0){
          x=1;
        }else{
          x=0;
        }
        document.getElementById("Cpp").value=x;
        //document.getElementById("Cpp").checked = true;
      }

      function cvJava(){
        var x = document.getElementById("Java").value;
        if(x==0){
          x=1;
        }else{
          x=0;
        }
        document.getElementById("Java").value=x;
        //document.getElementById("Java").checked = true;
      }

      function cvObjective(){
        var x = document.getElementById("ObjectiveC").value;
        if(x==0){
          x=1;
        }else{
          x=0;
        }
        document.getElementById("ObjectiveC").value=x;
        //document.getElementById("ObjectiveC").checked = true;
      }

      function cvSwift(){
        var x = document.getElementById("Swift").value;
        if(x==0){
          x=1;
        }else{
          x=0;
        }
        document.getElementById("Swift").value=x;
        //document.getElementById("Swift").checked = true;
      }

      function cvAssembly(){
        var x = document.getElementById("Assembly").value;
        if(x==0){
          x=1;
        }else{
          x=0;
        }
        document.getElementById("Assembly").value=x;
        //document.getElementById("Assembly").checked = true;
      }

      function cvC_hash(){
        var x = document.getElementById("C_hash").value;
        if(x==0){
          x=1;
        }else{
          x=0;
        }
        document.getElementById("C_hash").value=x;
        //document.getElementById("C_hash").checked = true;
      }

      function cvClojure(){
        var x = document.getElementById("Clojure").value;
        if(x==0){
          x=1;
        }else{
          x=0;
        }
        document.getElementById("Clojure").value=x;
        //document.getElementById("Clojure").checked = true;
      }

      function cvDart(){
        var x = document.getElementById("Dart").value;
        if(x==0){
          x=1;
        }else{
          x=0;
        }
        document.getElementById("Dart").value=x;
        //document.getElementById("Dart").checked = true;
      }

      function cvElixir(){
        var x = document.getElementById("Elixir").value;
        if(x==0){
          x=1;
        }else{
          x=0;
        }
        document.getElementById("Elixir").value=x;
        //document.getElementById("Elixir").checked = true;
      }

      function cvErlang(){
        var x = document.getElementById("Erlang").value;
        if(x==0){
          x=1;
        }else{
          x=0;
        }
        document.getElementById("Erlang").value=x;
        //document.getElementById("Erlang").checked = true;
      }

      function cvF_hash(){
        var x = document.getElementById("F_hash").value;
        if(x==0){
          x=1;
        }else{
          x=0;
        }
        document.getElementById("F_hash").value=x;
        //document.getElementById("F_hash").checked = true;
      }

      function cvGo(){
        var x = document.getElementById("Go").value;
        if(x==0){
          x=1;
        }else{
          x=0;
        }
        document.getElementById("Go").value=x;
        //document.getElementById("Go").checked = true;
      }

      function cvKotlin(){
        var x = document.getElementById("Kotlin").value;
        if(x==0){
          x=1;
        }else{
          x=0;
        }
        document.getElementById("Kotlin").value=x;
        //document.getElementById("Kotlin").checked = true;
      }

      function cvPHP(){
        var x = document.getElementById("PHP").value;
        if(x==0){
          x=1;
        }else{
          x=0;
        }
        document.getElementById("PHP").value=x;
        //document.getElementById("PHP").checked = true;
      }

      function cvPython(){
        var x = document.getElementById("Python").value;
        if(x==0){
          x=1;
        }else{
          x=0;
        }
        document.getElementById("Python").value=x;
        //document.getElementById("Python").checked = true;
      }

      function cvR(){
        var x = document.getElementById("R").value;
        if(x==0){
          x=1;
        }else{
          x=0;
        }
        document.getElementById("R").value=x;
        //document.getElementById("R").checked = true;
      }

      function cvRuby(){
        var x = document.getElementById("Ruby").value;
        if(x==0){
          x=1;
        }else{
          x=0;
        }
        document.getElementById("Ruby").value=x;
        //document.getElementById("Ruby").checked = true;
      }

      function cvRust(){
        var x = document.getElementById("Rust").value;
        if(x==0){
          x=1;
        }else{
          x=0;
        }
        document.getElementById("Rust").value=x;
        //document.getElementById("Rust").checked = true;
      }

      function cvScala(){
        var x = document.getElementById("Scala").value;
        if(x==0){
          x=1;
        }else{
          x=0;
        }
        document.getElementById("Scala").value=x;
        //document.getElementById("Scala").checked = true;
      }

      function cvSQLang(){
        var x = document.getElementById("SQLang").value;
        if(x==0){
          x=1;
        }else{
          x=0;
        }
        document.getElementById("SQLang").value=x;
        //document.getElementById("SQLang").checked = true;
      }

      function cvTypeScript(){
        var x = document.getElementById("TypeScript").value;
        if(x==0){
          x=1;
        }else{
          x=0;
        }
        document.getElementById("TypeScript").value=x;
        //document.getElementById("TypeScript").checked = true;
      }

      function cvVBA(){
        var x = document.getElementById("VBA").value;
        if(x==0){
          x=1;
        }else{
          x=0;
        }
        document.getElementById("VBA").value=x;
        //document.getElementById("VBA").checked = true;
      }

      function cvWebAssembly(){
        var x = document.getElementById("WebAssembly").value;
        if(x==0){
          x=1;
        }else{
          x=0;
        }
        document.getElementById("WebAssembly").value=x;
        //document.getElementById("WebAssembly").checked = true;
      }

      function check(){
        document.getElementById("HTML").checked = true;
        document.getElementById("CSS").checked = true;
        document.getElementById("JavaScript").checked = true;
        document.getElementById("Bash").checked = true;
        document.getElementById("Shell").checked = true;
        document.getElementById("PowerShell").checked = true;
        document.getElementById("C").checked = true;
        document.getElementById("Cpp").checked = true;
        document.getElementById("Java").checked = true;
        document.getElementById("ObjectiveC").checked = true;
        document.getElementById("Swift").checked = true;
        document.getElementById("Assembly").checked = true;
        document.getElementById("C_hash").checked = true;
        document.getElementById("Clojure").checked = true;
        document.getElementById("Dart").checked = true;
        document.getElementById("Elixir").checked = true;
        document.getElementById("Erlang").checked = true;
        document.getElementById("F_hash").checked = true;
        document.getElementById("Go").checked = true;
        document.getElementById("Kotlin").checked = true;
        document.getElementById("PHP").checked = true;
        document.getElementById("Python").checked = true;
        document.getElementById("R").checked = true;
        document.getElementById("Ruby").checked = true;
        document.getElementById("Rust").checked = true;
        document.getElementById("Scala").checked = true;
        document.getElementById("SQLang").checked = true;
        document.getElementById("TypeScript").checked = true;
        document.getElementById("VBA").checked = true;
        document.getElementById("WebAssembly").checked = true;
      }

      
      

      

    </script>
  </body>
</html>