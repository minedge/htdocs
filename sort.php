<?php
    $db_host="localhost";   
    $db_user="root";
    $db_passwd="1324"; 
    $db_name="bucketlist";

    $id = $_POST['ID'];
    $target = $_POST['TARGET'];
    $type = $_POST['TYPE'];


    $conn = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);
    if($type == "1"){
        $sql = "SELECT * FROM $id ORDER BY $target asc";
    }else{
        $sql = "SELECT * FROM $id ORDER BY $target desc";
    }
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