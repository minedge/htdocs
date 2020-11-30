<?php
    echo "Before DB Connection\n";
    $db_host="localhost";   
    $db_user="root";
    $db_passwd="1324"; 
    $db_name="bucketlist";

    $conn = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);
    $sql = "SELECT * FROM minedge";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    echo "After DB Connection\n";
    echo $row[0];
?>