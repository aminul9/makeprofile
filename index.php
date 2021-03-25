<?php


	 session_start();

     if(isset($_SESSION['username']))
     {
     	echo "thats a great";
     }
     else
     {
     	header("Location:login.php");
     }
	include 'header.php';


?>


<!DOCTYPE html>
<html>
	<head>
		<title>Register From</title>
	</head>

	<body>

		<div class="content">
				<form action="insert.php" method="POST" enctype="multipart/form-data" >
				<table>
					<tr>
						<td>Image:</td>
						<td><input type="file" name="uploadfile" required>  </td>
					</tr>	
					
					<tr>
						<td>Name :</td>
						<td><input type="text" name="UserName" ></td>
					</tr>

					<tr>
						<td>Parent name :</td>
						<td><input type="text" name="Pname" ></td>
					</tr>

					<tr>
						<td>University :</td>
						<td><input type="text" name="UniversityName" ></td>
					</tr>

					<tr>
						<td>Dept Name :</td>
						<td><input type="text" name="DeptName" ></td>
					</tr>

					<tr>
						<td>StudentID :</td>
						<td><input type="text" name="StudentID" ></td>
					</tr>

					<tr>
						<td>Mail :</td>
						<td><input type="text" name="Mail" required></td>
					</tr>

					<tr>
						<td>Password :</td>
						<td><input type="text" name="password" required></td>
					</tr>

					<tr>
						<td><input type="Submit"  value="submit" name="submit" ></td>
					</tr>

					
				</table>
			</form>
		</div>
	</body>
</html>
