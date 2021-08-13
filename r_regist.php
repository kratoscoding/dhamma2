<?php

    session_start();
    include('server.php');

    $errors = array();

    if (isset($_POST['reg_user'])) {
        
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $lineid = mysqli_real_escape_string($conn, $_POST['lineid']);

        if (empty($username)) {
            array_push($errors, "ชื่อต้องมี!! ");
        }
        
        if (empty($email)) {
            array_push($errors, "Email ต้องมี!! ");
        }
        if (empty($password )) {
            array_push($errors, "Password ต้องมี!! ");
        }

        // check password ไม่ได้ทำ conform password ***

        // เช็ดว่ามี user and Email ในระบบหรือยัง  ------------------------------------------>

            $user_check_query = "SELECT * FROM user_id WHERE username = '$username' OR email = '$email'  ";
            $query = mysqli_query($conn, $user_check_query);
            $result = mysqli_fetch_assoc($query);

            if ($result) { //if user exists
                
                if ($result['username'] === $username) {
                    array_push($errors, "Username นี้ถูกใช้แล้ว ");
                }
                if ($result['email'] === $email) {
                    array_push($errors, "Email นี้ถูกใช้แล้ว ");
                }
            }

            if (count($errors) == 0) {
                $password = md5($password);
    
                $sql = "INSERT INTO user_id (username,email,password,lineid) VALUES ('$username', '$email', '$password', '$lineid') ";
                mysqli_query($conn, $sql);


                $_SESSION['username'] = $username;
                $_SESSION['email'] = $email;
                
                $_SESSION['success'] = "You are now logged in";
                header('location: record.php');
            } else {
                array_push($errors, "Email already exists");
                $_SESSION['error'] = "Email already exists";
                header("location: register.php");
            }

            

    }

    // $str_hostname = "localhost";
    // $str_username = "root";
    // $str_password = "";
    // $str_dbname = "dhamma";

    // $obj_con = mysqli_connect($str_hostname,$str_username,$str_password,$str_dbname);

    // if(!$obj_con) {
    //     header("location:error.php");
    //     exit;
    // }
    
    // mysqli_query($obj_con,"SET NAMES UTF8");


    // $str_sql = "insert into user_id(name,lastname,email,password,lineid) values(";
    // $str_sql .= "'" . $_POST['txtname'] . "',";
    // $str_sql .= "'" . $_POST['txtlastname'] . "',";
    // $str_sql .= "'" . $_POST['email'] . "',";
    // $str_sql .= "'" . $_POST['password'] . "',";
    // $str_sql .= "'" . $_POST['txtlineid'] . "')";

    // if ( mysqli_query($obj_con,$str_sql) ) {
    
    //     header("location: record.php");
    //     exit;
    // } else {
    //     echo "Save Error ! : " . $str_sql;
    // }

?>