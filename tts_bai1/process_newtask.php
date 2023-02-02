<?php
	$name=htmlspecialchars($_POST['name']);
$conn=mysqli_connect("localhost","id19422331_user","1CU/zeZ7dWSx1p+4","id19422331_data");
	$sql="insert into task1(name) values ('$name')";

	mysqli_query($conn,$sql);

	session_start();
	header("location:task.php");