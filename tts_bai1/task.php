<?php
	session_start();
	if(empty($_SESSION['user'])){
		header("location:index.php");
	}
  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Task</title>
	<style>
		table, th, td {
 				 border:1px solid black;
 				 text-align: center;
						}
</style>
</head>
<?php
$conn=mysqli_connect("localhost","id19422331_user","1CU/zeZ7dWSx1p+4","id19422331_data");
$sql="select * from task1";
$ret=mysqli_query($conn,$sql);
  ?>
<body>
	<button><a href="signout.php">Signout</a></button>
	<br>
	<br>
	<a href="newtask.php"><h3 align="center" style="color: red">New Task</h3></a>


	<form> 
		<table style="width:100%">
			<tr>
				<th colspan="2">Task</th>
			</tr>
			
			<?php foreach ($ret as $row) { ?>
				<tr>
 				<td><?php echo $row['name'] ?></td>
 				<td><a href="deletenewtask.php?name=<?php echo $row['name']  ?>">Xoa</a></td>
				</tr>
			<?php }?>

			 
		</table>
	</form>
</body>
</html>