<?php
		
		include 'header.php';


	session_start();
	 if($_SESSION['username'])
     {
     	
     		?>
     			<div class="content" style="padding-left: 200px">
              							<h1>Already Login</h1>
              	</div>

     		<?php

     }
   




		else{
			if(isset($_POST['submit']))
			{
				//echo "it is OK".$_POST['mailid'];

				$id=$_POST['mailid'];
				$password=$_POST['password'];

			

	    			$host = "localhost";
	                $dbUsername ="root";
	                $dbpassword="password";
	                $dbname="linuxhint";
	                $conn= new mysqli($host,$dbUsername,$dbpassword,$dbname);

	                 $q = "select * from student where mail ='$id' and password='$password'";
   					 $result = mysqli_query($conn , $q);

   					


   					if(mysqli_num_rows($result)==1)
            			{
            				//echo "it is OK "."Accepted";
            				
            				$_SESSION["username"]=$id;
            				header("Location: Summary.php");
             				/*while($row = mysqli_fetch_array($result))
              				  {
              				  	$name=  $row['name'];
              				  	$image= $row['image'];
              				  	$ParentName= $row['ParentName'];
              				  	$UniversityName= $row['UniversityName'];
              				  	$Dept = $row['Dept'];
              				  	$ST_ID = $row['ST_ID'];
              				  	$mail = $row['mail'];

              				  }*/
              			}
              			else
              			{



              					?>
              						<div class="content" style="padding-left: 200px">
              							<h1>Wrong Credentials</h1>
              						</div>
              					<?php


				        }
				}
						
				?>


				<div class="content"  style="padding-left: 200px">

					<form action="" method="POST" >
						
						<table>
							<tr>
								<td>Login :</td>
								
							</tr>
								<td> Enter Mail:</td>
								<td><input type="text" name="mailid"  required=""></td>

							<tr>
								<td> Password:</td>
								<td><input type="text" name="password" required=""></td>
							</tr>

							<tr>
								<td><input type="Submit"  value="submit" name="submit" ></td>

							</tr>
						</table>



					</form>
					
				</div>
				<?php

	}

	?>

