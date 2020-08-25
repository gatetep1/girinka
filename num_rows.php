<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "girinka";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

        $sql = "SELECT * FROM families WHERE status = '1'";
        $result = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
        
            $row_count = mysqli_num_rows($result);
            if($row_count == 0){


                echo "<button type = 'button' class = 'btn btn-information btn-sm'>
                <span class = 'glyphicon glyphicon-close'> No Eligible Family, No Service</button></span>";

            }
            else{
                $sql2 = "SELECT * FROM cows WHERE status = '1'";
                $result2 = mysqli_query($conn, $sql2) or die("database error:". mysqli_error($conn));
        
                $row_count2 = mysqli_num_rows($result2);
            
                if($row_count2 > 0){
                echo "
                <center><a href='have_cow.php' class='btn btn-primary btn-sm'>
                    <span class = 'glyphicon glyphicon-ok'>Giving Cows</span>
                </a><center>";

                mysqli_free_result($result2);
            } 

            else
            {
                echo "<button type = 'button' class = 'btn btn-information btn-sm'>
                <span class = 'glyphicon glyphicon-close'> No Cow, No Service</button></span>";

            }
            
    }


    


?>