<?php
    $db_host="localhost";   
    $db_user="root";
    $db_passwd="1324"; 
    $db_name="bucketlist";

    $id = $_POST['ID'];

    $conn = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);
    $sql = "SELECT COUNT(title) FROM $id ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    echo $row[0];
    mysql_close($conn);
?>