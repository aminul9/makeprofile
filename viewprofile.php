<?php include 'header.php';


			if(isset($_GET["MAIL"]))
			   {
			      	$id=$_GET["MAIL"];

			   		//echo $id;


	    			$host = "localhost";
	                $dbUsername ="root";
	                $dbpassword="password";
	                $dbname="linuxhint";
	                $conn= new mysqli($host,$dbUsername,$dbpassword,$dbname);



	                 $q = "select * from student where mail ='$id'";
   					 $result = mysqli_query($conn , $q);

   					


   					if(mysqli_num_rows($result)>0)
            			{
             				while($row = mysqli_fetch_array($result))
              				  {
              				  	$name=  $row['name'];
              				  	$image= $row['image'];
              				  	$ParentName= $row['ParentName'];
              				  	$UniversityName= $row['UniversityName'];
              				  	$Dept = $row['Dept'];
              				  	$ST_ID = $row['ST_ID'];
              				  	$mail = $row['mail'];

              				  }
              			}


   					


	               


			   }  









 ?>


<div class="content">

				<table style="margin-left: 200px">

					<tr>
					
						<td> <img src="  <?php echo $image; ?> " height="300" width="300"> </td>
					</tr>
					
					
					<tr>
						<td>Name :</td>
						<td> <?php echo $name; ?> </td>
					</tr>

					<tr>
						<td>Parent name :</td>
						<td> <?php echo $ParentName; ?> </td>
					</tr>

					<tr>
						<td>University :</td>
						<td> <?php echo $UniversityName; ?> 	</td>
					</tr>

					<tr>
						<td>Dept Name :</td>
						<td>  <?php echo $Dept; ?> 	</td>
					</tr>

					<tr>
						<td>StudentID :</td>
						<td> <?php echo $ST_ID; ?>    </td>
					</tr>

					<tr>
						<td>Mail :</td>
						<td>  <?php echo $mail; ?>    </td>
					
				</table>
				
	
</div>


