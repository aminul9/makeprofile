<html>
    <style>
         table, th, td {
             border: 1px solid black; }   
    </style>

    <body> 
     <?php include 'header.php'; ?>

     <table style="width:70%"  >
            <tr>
                <th id="Name">Name</th>
                <th id="ParentName">ParentName</th>
                <th id="UniversityName">UniversityName</th>
                <th id="Dept ">Dept </th>
                <th id="ST_ID ">ST_ID </th>
                <th id="mail">mail </th>
                
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

            $sql = "SELECT * FROM student";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {   ?>


                    <tr>
                        <th id="Name">     <?php  echo $row['Name']; ?>               </th>
                        <th id="ParentName">    <?php  echo $row['ParentName']; ?>        </th>
                        <th id="UniversityName">    <?php  echo $row['UniversityName']; ?>     </th>
                        <th id="Dept">     <?php  echo $row['Dept']; ?>               </th>
                        <th id="ST_ID">    <?php  echo $row['ST_ID']; ?>     </th>
                        <th id="mail">     <?php  echo $row['mail']; ?>               </th>
                    <tr>
               


            
            <?php

            }
            } else {
            echo "0 results";
            }
            $conn->close();
            ?> 


    </table>


    </body>
</html>