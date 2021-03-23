<html>
    <head>
        <title>Isert page</title>
    </head>

    <body>

            <?php include 'header.php'; ?>

            <?php

            
            $UserName =$_POST['UserName'];
            $Pname=$_POST['Pname'];
            $UniversityName=$_POST['UniversityName'];
            $DeptName=$_POST['DeptName'];
            $StudentID=$_POST['StudentID'];
            $Mail=$_POST['Mail'];


        
            
            if(!empty(UserName) || !empty($Pname) || !empty($UniversityName) || !empty($DeptName) || !empty($StudentID)|| !empty($Mail))
            {
                $host = "localhost";
                $dbUsername ="root";
                $dbpassword="password";
                $dbname="linuxhint";

                $conn= new mysqli($host,$dbUsername,$dbpassword,$dbname);
                if(mysqli_connect_error()){
                    die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error);
                }
                else{
                    $select ="select mail from student where mail= ? Limit 1";
                    $insert = "insert into student(Name,ParentName,UniversityName,Dept,ST_ID,mail) values (?,?,?,?,?,?)";
                
                    $stmt = $conn->prepare($select);
                    $stmt->bind_param("s",$Mail);
                    $stmt->execute();
                    $stmt->bind_result($Mail);
                    $stmt->store_result();
                    $rnum = $stmt ->num_rows;

                    if($rnum==0){
                        $stmt ->close();
                        $stmt =$conn->prepare($insert);
                        $stmt->bind_param("ssssis",$UserName,$Pname,$UniversityName,$DeptName,$StudentID,$Mail);
                    if( $stmt->execute())
                        echo "new recond insert successfully";
                    }
                    else{
                        echo "This email already Registerd ";

                    }
                    //$stmt->close();
                    //$conn->close();*/
                }

            }else{
                echo "All Field are Required";
                die();
            }

            ?>

    
    </body>

</html>