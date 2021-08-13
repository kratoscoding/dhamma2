<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dhamma";

    //create Connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed". mysqli_connect_error());
    } 

?>


<!-- <?php

	// $str_hostname = "localhost";
	// $str_username = "root";
	// $str_password = "";
	// $str_dbname = "dhamma"; //database ที่เราสร้าง

	// $obj_con = mysqli_connect($str_hostname,$str_username,$str_password,$str_dbname);

	// if(!$obj_con) {
	// 	header("location: error.php");
	// 	exit();
	// }
	
	// mysqli_query($obj_con,"SET NAMES UTF8");

	// $str_sql = "select * from user_id"; //ส่วนที่2
	// $obj_rs = mysqli_query($obj_con,$str_sql);

?> -->