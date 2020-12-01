<?php
    $db_host="localhost";   
    $db_user="root";
    $db_passwd="1324"; 
    $db_name="bucketlist";

    $id = $_POST['ID'];
    $pw = $_POST['PW'];
    $name = $_POST['NAME'];

    $conn = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);
    $sql = "INSERT INTO userinfo VALUES (null,'$id','$pw','$name')";
    $result = mysqli_query($conn, $sql);
?>