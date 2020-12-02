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
    $sql = "CREATE TABLE $id( ident_num int not null AUTO_INCREMENT, title varchar(20) default null, locate int default null, complete int default null, target_date date default null, body varchar(100) default null )default charset=utf8";
    $result = mysqli_query($conn, $sql);
?>