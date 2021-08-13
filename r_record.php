<?php

    $str_hostname = "localhost";
    $str_username = "root";
    $str_password = "";
    $str_dbname = "dhamma";

    $obj_con = mysqli_connect($str_hostname,$str_username,$str_password,$str_dbname);

    if(!$obj_con) {
        header("location:error.php");
        exit;
    }
    
    mysqli_query($obj_con,"SET NAMES UTF8");


    $str_sql = "insert into record(userid,data1) values(";
    $str_sql .= "'" . $_POST['userid'] . "',";
    $str_sql .= "'" . $_POST['eit'] . "')";

    if ( mysqli_query($obj_con,$str_sql) ) {
       
    
        header("location: record.php");
        exit;
    } else {
        echo "Save Error ! : " . $str_sql;
    }

?>