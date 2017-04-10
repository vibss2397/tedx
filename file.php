<?php
require('connect.php');

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$query=$_POST['query'];
	
	$sql=mysqli_query($conn,"INSERT INTO inquiry (name,email,phone,message) VALUES ('".$name."','".$email."','".$phone."','".$query."')");
	if($sql){
		echo "1";
	} else echo "2";
}

?>
