<?php
    $db_host="localhost";   
    $db_user="root";
    $db_passwd="1324"; 
    $db_name="bucketlist";
    $conn = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);

    $id = $_POST['ID'];
    $search = $_POST['SRCH'];
    $type_date = $_POST['TYPE_D'];
    $type_locate = $_POST['TYPE_L'];
    $type_complete = $_POST['TYPE_C'];

    //ORDER BY target_date $type_date, locate $type_locate, complete $type_complete";
    $sql = "SELECT * FROM $id WHERE title LIKE '%$search%'";

    if(($type_date != "@" || $type_locate != "@") || $type_complete != "@"){
        $sql = $sql." ORDER BY ";
    }

    if($type_complete != "@"){
        $sql = $sql."complete $type_complete";
    }
    if($type_locate != "@"){
        if($type_complete != "@") $sql = $sql.", ";
        $sql = $sql."locate $type_locate";
    }
    if($type_date != "@"){
        if($type_complete != "@" || $type_locate != "@") $sql = $sql.", ";
        $sql = $sql."target_date $type_date";
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
?>