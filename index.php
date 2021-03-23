<!DOCTYPE html>
<html>
	<head>
		<title>Register From</title>
	</head>

	<body>

	<?php include 'header.php'; ?>
		<form action="insert.php" method="POST" >
			<table>
				
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
					
					<td><input type="Submit" value="Submit" name="submit1"  ></td>
				</tr>

				
			</table>
		</form>
	</body>
</html>
