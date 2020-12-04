<?php
    $db_host="localhost";   
    $db_user="root";
    $db_passwd="1324"; 
    $db_name="bucketlist";

    $id = $_POST['ID'];
    $target = $_POST['TARGET'];

    $conn = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);
    $sql = "SELECT * FROM $id WHERE title LIKE '%$target%'";
    $result = mysqli_query($conn, $sql);
    
    while ($row = mysqli_fetch_array($result)){
        echo $row[0];
        echo '@';
        echo $row[1];
        echo '@';
        echo $row[2];
        echo '@';
        echo $row[3];
        echo '@';
        echo $row[4];
        echo '@';
     }
     mysql_close($conn);
?>