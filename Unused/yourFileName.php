<?php
function display()
{
    echo "hello ".$_POST["studentname"];
	echo "hello ".$_POST["studentname1"];
	echo "hello ".$_POST["studentname2"];
	echo "hello ".$_POST["studentname3"];
	
}
if(isset($_POST['submit']))
{
   display();
} 
?>