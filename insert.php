<?php
    $db_host="localhost";   
    $db_user="root";
    $db_passwd="1324"; 
    $db_name="bucketlist";

    $id = $_POST['ID'];
    $title = $_POST['TITEL'];
    $local = $_POST['LOCAL'];
    $complete = $_POST['COMPLT'];
    $tdate = $_POST['TDATE'];
    $body = $_POST['BODY'];
    $image = $_POST['IMAGE'];
    $ident_num = $_POST['IDNT_NUM'];

    $conn = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);
    if($ident_num == "0"){
        $sql = "INSERT INTO $id VALUES (null, '$title', '$local', '$complete', '$tdate', '$body', '$image')";
    }else{
        $sql = "UPDATE $id SET title='$title', locate='$local', complete='$complete', target_date='$tdate', body='$body', image='$image' WHERE ident='$ident_num'";
    }
    $result = mysqli_query($conn, $sql);

    mysql_close($conn);
?>