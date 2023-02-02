<?php
	$user=$_POST['user'];
	$pass=$_POST['pass'];

	$conn=mysqli_connect("localhost","root","","tts_bai1");
	$sql="select * from task where user='$user' and pass='$pass'";
	$ret=mysqli_query($conn,$sql);
if(mysqli_num_rows($ret)){
	$each=mysqli_fetch_assoc($ret);

session_start();

$_SESSION['user']=$each['user'];

header("location:task.php");
}
else {
	header("location:index.php");
};