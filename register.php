<?php 
    session_start();
    include('server.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ลงทะเบียน </title>
    <link rel="stylesheet" href="lib/bootstrap-5.1.0-dist/css/bootstrap.min.css">
</head>
<body class="font-sarabun">
    <section class="bg-success min-vh-100 d-flex justify-content-center align-items-center">
        <div class="card">
            <div class="card-body">
                <h2> ลงทะเบียน  </h2>
                <form action="r_regist.php" method="POST">
                                <?php include('errors.php'); ?>
                                <?php if (isset($_SESSION['error'])) : ?>
                                    <div class="error">
                                        <h3 class="card card-body bg-danger text-white">
                                            <?php
                                                echo $_SESSION['error'];
                                                unset($_SESSION['error']);
                                            ?>
                                        </h3>
                                    </div>
                                <?php endif ?>
                    <div class="form-group">
                        <label for="username"> Username  </label>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>
                   
                    <div class="form-group">
                        <label for="email"> Email </label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password </label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                  
                    <div class="form-group">
                        <label for="lineid">Line ID </label>
                        <input type="text" name="lineid" id="lineid" class="form-control">
                    </div>

                    <div class="form-group d-flex justify-content-center d-flex align-items-center my-3">

                        <button class="btn btn-success mt-3 mx-2" type="submit" name="reg_user">Submit</button>
                        
                        <a class="btn btn-warning mt-3" href="index.php" role="button">กลับไปหน้าหลัก</a>

                    </div>
                </form>
            </div>
        </div>
    </section>
    
    
</body>
</html>