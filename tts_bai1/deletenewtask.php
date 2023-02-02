<?php 
$name=$_GET['name'];

$conn=mysqli_connect("localhost","id19422331_user","1CU/zeZ7dWSx1p+4","id19422331_data");

$sql="delete from task1 where name='$name'";

mysqli_query($conn,$sql);

header('location:task.php');