<?php
    $db_host="localhost";   
    $db_user="root";
    $db_passwd="1324"; 
    $db_name="bucketlist";

    $id = $_POST['ID'];

    $conn = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);
    $sql = "DROP TABLE $id";
    $result = mysqli_query($conn, $sql);
    $sql = "DELETE FROM userinfo WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
?>