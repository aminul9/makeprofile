<html>
    <style>
         table, th, td {
             border: 0px ; }   
    </style>

    <body> 
     <?php include 'header.php'; 
     session_start();

     if($_SESSION['username'])
     {
        //echo  $_SESSION['username'];
     


     ?>

     <table style="width:50%"  class="content" >
            <tr>
                <th id="Name">Name</th>
                <th id="ParentName">ParentName</th>
                <th id="UniversityName">UniversityName</th>
                <th id="Dept ">Dept </th>
                <th id="ST_ID ">ST_ID </th>
                <th id="mail">mail </th>
                <th id="Action">Action </th>
                 <th id="password">Password </th>
                
            </tr>
       


        

         <?php
            $servername = "localhost";
            $username = "root";
            $password = "password";
            $dbname = "linuxhint";

            // Create connection

            
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }

                            //<a href="display?data=data1">link1</a>
            $sql = "SELECT * FROM student";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {   ?>


                    <tr style="background-color: #c6c8c7">
                        <th id="Name">     <?php  echo $row['Name']; ?>               </th>
                        <th id="ParentName">    <?php  echo $row['ParentName']; ?>        </th>
                        <th id="UniversityName">    <?php  echo $row['UniversityName']; ?>     </th>
                        <th id="Dept">     <?php  echo $row['Dept']; ?>               </th>
                        <th id="ST_ID">    <?php  echo $row['ST_ID']; ?>     </th>
                        <th id="mail">     <?php  echo $row['mail']; ?>               </th>
                        <th id="Action">   <a href=" <?php echo "viewprofile.php?MAIL=".$row['mail'];   ?>    " >View Profile</a>               </th>
                         <th id="Action">      <?php  echo $row['password']; ?>         </th>




                    </tr>
               


            
            <?php

            }


                


            } 


            $conn->close();

           
           
        }

        else
            header("Location:login.php"); 

            ?> 


    </table>



    </body>
</html>