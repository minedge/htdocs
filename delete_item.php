<?php
    $db_host="localhost";   
    $db_user="root";
    $db_passwd="1324"; 
    $db_name="bucketlist";

    $id = $_POST['ID'];
    $ident_num = $_POST['IDNT_NUM'];

    $conn = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);
    $sql = "DELETE FROM $id WHERE ident='$ident_num'";
    $result = mysqli_query($conn, $sql);
?>