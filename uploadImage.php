<?php

	if(isset($_POST['uploadfilesub']))
	{
				//$filename= $_FILES['uploadfile']['name'];
				//$tmpname=$_FILES['uploadfile']['tmp_name'];
				////$folder='image/';

				//$im=1.jpg";

			$files = $_FILES['uploadfile'];


		    $filename = $files['name'];
			$fileerror = $files['error'];
			$filetemp = $files['tmp_name'];
			$fileext = explode('.',$filename);
			$filecheker = strtolower(end($fileext));
			$extstore = array('png' ,'jpg','jpeg');
			if(in_array($filecheker , $extstore))
			{

				$terget = "image/".$filename;
				
				move_uploaded_file($filetemp , $terget);
				echo "<img src='".$terget."'> ";


			}
			else
			{
				echo "Photo Insertion Problem";
			}
		
		//move_uploaded_file( $_FILES['uploadfile']['tmp_name'], "image1/".$filename);
		//echo "file transfer".$filename.$tmpname;
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

			<form action="" method="post"
			 enctype="multipart/form-data">

				<input type="file" name="uploadfile" />
				<input type="submit" name="uploadfilesub" value="submit" />

				
			</form>
</body>
</html>