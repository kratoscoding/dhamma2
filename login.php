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
    <title> Login </title>
    <link rel="stylesheet" href="lib/bootstrap-5.1.0-dist/css/bootstrap.min.css">
</head>
<body>
    <section class="bg-success min-vh-100 d-flex justify-content-center align-items-center">
            <div class="card">
                <div class="card-body">
                    <h3>LOGIN </h3>
                    <form action="r_login.php" method="POST">
                                            <!-- notification message -->
                            <?php if (isset($_SESSION['error'])) : ?>
                                <div class="error bg-danger">
                                    <h3>
                                        <?php
                                            echo $_SESSION['error'];
                                            unset($_SESSION['error']);
                                        ?>
                                    </h3>
                                </div>
                            <?php endif ?>

                        <div class="form-group">
                            <label for="username"> Username </label>
                            <input type="username" name="username" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Password </label>
                            <input type="password" name="password"  class="form-control">
                        </div>
                        <button type="submit" class="btn btn-secondary mt-3" name="login_user" >L O G I N </button>
                        <a class="btn btn-primary mt-3" href="index.php" role="button">กลับไปหน้าหลัก</a>
                    </form>
                </div>
            </div>
    </section>
</body>
</html>