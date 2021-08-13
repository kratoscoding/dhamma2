<?php
    session_start();

    if (!isset($_SESSION['email'])) {
        $_SESSION['msg'] = "You Must login first";
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['email']);
        unset($_SESSION['username']);
        header('location: index.php');
    }

    
?>

<!-- 
<?php 
    // session_start();
    // include('server.php'); 
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>บันทึกยอดสวด</title>
    <link rel="stylesheet" href="theme/css/bootstrap-theme.css">
</head>
<body class="font-sarabun">
    <section class="bg-default min-vh-100">
        <h1 class="text-center bg-success py-4 mb-0">บันทึกยอดสวด</h1>
        <nav class="navbar navbar-expand-sm navbar-dark bg-la mb-0">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Dhammachanting.com </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link me-3" aria-current="page" href="index.php">หน้าแรก</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link me-3" href="#">สวดมนต์ก่อนนอน</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link me-3" href="#">ธรรมะก่อนนอน</a>
                        </li>

                        <li class="nav-item">
                        <!-- <a class="nav-link me-3 bg-danger" href="dashboard.php">ออกจากระบบ</a> -->
                        <?php if (isset($_SESSION['email'])) : ?>
                           
                            <a href="index.php?logout='1'" class="nav-link me-3 bg-danger" >Logout</a>
                        <?php endif ?>
                        </li>
                          <!-- logged in user information  -->
                    
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">

      


            <!-- body content -----------------  -->

            
            <div class="row my-5 justify-content-center">
                <div class="col-sm-9 col-md-9 ">
                    <div class="card">
                        <div class="card-body border border-default border-2 ">

                              <!-- notification message -->
                                <?php if (isset($_SESSION['success'])) : ?>
                                    <div class="success">
                                        <h3 class="card card-body bg-success text-white">
                                            <?php
                                                echo $_SESSION['success'];
                                                unset($_SESSION['success']);
                                            ?>
                                        </h3>
                                    </div>
                                <?php endif ?>
                           
                                <?php if (isset($_SESSION['username'])) : ?>
                                    <h3> กัลยาณมิตร  <?php echo $_SESSION['username']; ?> </h3>
                                <?php endif ?>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body border border-default border-2">
                            
                            <form action="r_record.php" class="mb-3 " method="POST">
                                <label for="eitipiso" class="fs-40  p-1"> + อิติปิโส + </label>
                                <div class="form-group ">
                                    <div class="col-sm-10 col-md-10 d-flex justify-content-center mt-3">

                                    <?php if (isset($_SESSION['username'])) : ?>
                                        <input type="hidden" name="userid" value="<?php echo $_SESSION['username']; ?>" >
                                        
                                    <?php endif ?>

                                        
                                        
                                        
                                        <input type="text" class="form-control me-3 py-3" value="0" name="eit" id="eit">
                                        <input class="btn btn-success me-3  " type="button" value=" + " onclick="increaseEit()" >
                                        <input class="btn btn-danger  me-3 " type="button" value=" - " onclick="decreaseEit()">
                                    </div>
                                    
                                </div>
                                <button class=" btn btn-warning mt-3" type="submit">S A V E </button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
                  <!-- end row         --------           -->



                  
        </div>




    </section>

    <script type="text/javascript" src="js/counting.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>