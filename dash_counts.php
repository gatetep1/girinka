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
  

   
        function numbOfAllRows($tbl_name){ 
            global $servername;
            global $username;
            global $password;
            global $dbname;
            global $conn;
                
            
            $sql = "SELECT count(*) AS all_rows FROM $tbl_name";
            $result = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
                
            while($rows = mysqli_fetch_assoc($result)){
                return  $rows['all_rows'];

                }
            
            }
            echo "<div id = 'all_families'>". numbOfAllRows('families'). "</div>"; 
            echo "<div id = 'all_cows'>". numbOfAllRows('cows'). "</div>"; 
            echo "<div id = 'all_doners'>". numbOfAllRows('doners'). "</div>"; 
            echo "<div id = 'all_users'>". numbOfAllRows('users'). "</div>";  
  ?>
    <div id = "fml"><?php numbOfAllRows('families'); ?></div>
  <?Php

    function numbOfPendingRows($tbl_name){ 
        global $servername;
        global $username;
        global $password;
        global $dbname;
        global $conn;
        
        $sql_pending = "SELECT count(*) AS served_rows FROM $tbl_name WHERE status = '0'";
        $result_pending = mysqli_query($conn, $sql_pending) or die("database error:". mysqli_error($conn));
        
        while($rows_pending = mysqli_fetch_assoc($result_pending)){

         return $rows_pending['served_rows'];

        }
      
    }
    echo "<div id = 'served_families'>".numbOfPendingRows('families'). "</div>"; 

    echo "<div id = 'given_cows'>".numbOfPendingRows('cows'). "</div>"; 
 
    echo "<div id = 'active_users'>".numbOfPendingRows('users'). "</div>"; 
 
?>