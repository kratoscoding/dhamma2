<?php include('server2.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dhammachanting.com </title>
    <link rel="stylesheet" href="lib/bootstrap-5.1.0-dist/css/bootstrap.min.css">
</head>
<body>
    <section class="bg-light min-vh-100">

        <!-- navbar top head  -->
        <nav class="navbar navbar-expand-sm navbar-dark bg-secondary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Dhammachanting.com </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active me-3" aria-current="page" href="#">หน้าแรก</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link me-3" href="#">สวดมนต์ก่อนนอน</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link me-3" href="#">ธรรมะก่อนนอน</a>
                    </li>
                   
                </ul>
                </div>
            </div>
        </nav>

        <div class="container">
           <div class="row">
               <div class="col-sm-6">
                    <div class="card mt-5  bg-warning">
                        <a href="register.php" class="text-center text-decoration-none text-dark p-3"> สมัครสมาชิก </a>
                    </div>
               </div>
               <div class="col-sm-6">
                    <div class="card mt-5 bg-success">
                        <a href="login.php" class="text-center text-decoration-none text-white p-3"> ส่งยอดสวด </a>
                    </div>
               </div>
           </div>
        </div>
        <div class="container"> <h2>ยอดสวดปัจจุบัน </h2> </div>
        
        <div class="container border border-solid d-flex justify-content-center align-items-center  ">
             
             <div class=" col-sm-8 ">
                 <div class="card my-4">
                     <div class="card-body ">
                         <table class="table table-striped ">
                             <thead>
                                 <tr>
                                 <th scope="col">#</th>
                                 <th scope="col">Username</th>
                                 <th scope="col">บทอิติปิโส (จบ) </th>
                                 <th scope="col">#</th>
                                 </tr>
                             </thead>
                             <tbody>
                                     <?php while ( $obj_row = mysqli_fetch_array($obj_rs)) { ?>
                                     <tr>
                                         <th scope="row"><?= $obj_row['id'] ?></th>
                                         <td><?= $obj_row['userid'] ?></td>
                                         <td><?= $obj_row['data1'] ?></td>
                                         <td></td>
                                     </tr>
                                     <?php } ?>
                                 </tbody>
             
                         </table>

                     </div>
                 </div>

             </div>
           
        </div>

        <div class="container my-5">
            <div class="row mt-3">
                <div class="col-sm">
                    <div class="card">
                        <div class="card-body">
                        <img src="https://picsum.photos/400/300?random=1" class="w-100">
                        <h3 class="my-3">หัวข้อธรรมะ 1</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et vero fuga pariatur, optio porro nam quae sed sequi itaque voluptatum beatae error, eius, veritatis culpa tempore ipsam nostrum molestiae. Eaque minima unde perspiciatis, illo sit molestias est assumenda eos doloribus ratione nostrum ipsa quos natus illum animi! Iure, officia sapiente?</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card">
                        <div class="card-body">
                        <img src="https://picsum.photos/400/300?random=2" class="w-100">
                        <h3 class="my-3">หัวข้อธรรมะ 2</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et vero fuga pariatur, optio porro nam quae sed sequi itaque voluptatum beatae error, eius, veritatis culpa tempore ipsam nostrum molestiae. Eaque minima unde perspiciatis, illo sit molestias est assumenda eos doloribus ratione nostrum ipsa quos natus illum animi! Iure, officia sapiente?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>