<?php
    $db_host="localhost";   
    $db_user="root";
    $db_passwd="1324"; 
    $db_name="bucketlist";
    $conn = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);

    $id = $_POST['ID'];
    $title = $_POST['TITEL'];
    $local = $_POST['LOCAL'];
    $complete = $_POST['COMPLT'];
    $tdate = $_POST['TDATE'];
    $body = $_POST['BODY'];
    $ident_num = $_POST['IDNT_NUM'];

    $image = $_POST['IMAGE'];
    if($image != ""){
        $data=base64_decode($image);
        $escaped_values=mysql_real_escape_string($data);
        
        if($ident_num == "0"){
            $sql = "INSERT INTO $id VALUES (null, '$title', '$local', '$complete', '$tdate', '$body', '$escaped_values')";
        }else{
            $sql = "UPDATE $id SET title='$title', locate='$local', complete='$complete', target_date='$tdate', body='$body', image='$escaped_values' WHERE ident='$ident_num'";
        }
    }else{
        if($ident_num == "0"){
            $sql = "INSERT INTO $id VALUES (null, '$title', '$local', '$complete', '$tdate', '$body', '$escaped_values')";
        }else{
            $sql = "UPDATE $id SET title='$title', locate='$local', complete='$complete', target_date='$tdate', body='$body', image='$escaped_values' WHERE ident='$ident_num'";
        }
    }

    $result = mysqli_query($conn, $sql);

    mysql_close($conn);
?>