<?php
    $servername = "localhost";
    $username = "root";
    $password = "digicon@123";
    $dbname = "bexcom";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
   /*
       else{
            echo "Connection Successful";
        }
   */

?>