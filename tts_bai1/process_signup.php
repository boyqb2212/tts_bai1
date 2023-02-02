<?php
	$user=$_POST['user'];
	$pass=$_POST['pass'];

	$conn=mysqli_connect("localhost","root","","tts_bai1");

	$sql="insert into task(user,pass) values ('$user','$pass')";

	mysqli_query($conn,$sql);

	session_start();
	$_SESSION['user']=$user;

	header("location:task.php");