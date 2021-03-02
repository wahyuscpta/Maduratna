<?php

    require_once "../../config/conn.php";

    session_start();

    if(!isset($_SESSION['username'])) {header('location: ../index.php');}

    if(isset($_POST['search'])){

        $a = $_POST['keyword'];

        $query = mysqli_query($conn, "SELECT * FROM tb_staff WHERE nama LIKE '%$a%'");
    }
    else{
        $query = mysqli_query($conn, "SELECT * FROM tb_staff");
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <style>
        body{padding: 3px 5px;}
        @media(min-width:991px){
            .navbar{border-radius:10px;}.navbar-nav .btn:hover{box-shadow:none;}.navbar-nav{margin-top: -270px}}
    </style>

    <div class="dashboard">
        <div class="row">

            <div class="col-12 col-lg-2">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">

                    <a class="navbar-brand brand-one" href="#">Dashboard</a>
            
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
            
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                        <a class="navbar-brand brand-two" href="#">DASHBOARD</a>
                            <a class="nav-item nav-link" href="../app/view.php">Appointment</a>
                            <a class="nav-item nav-link" href="../produk/view.php">Produk</a>
                            <a class="nav-item nav-link active" href="view.php">Staff</a>
                            <a class="nav-item nav-link" href="../pesan/view.php">Pesan</a>
                            <a class="nav-item nav-link" href="../testimoni/view.php">Testimoni</a>
                            <a class="nav-item nav-link logout btn tombol" href="../process/logout.php"><i class="fas fa-sign-out-alt mr-2"></i>Logout</a>
                        </div>
                    </div>
                
                </nav>
            </div>

            <div class="bg col-12 col-lg-10 pl-5">

                <div class="bg-header pt-4 mb-4">
                    <div class="container">
                        <div class="row">
            
                            <div class="col-6 col-lg-6">
                                <h3>DAFTAR STAFF</h3>
                            </div>
                
                            <div class="col-6 col-lg-4">

                                <form action="" method="POST">

                                <div class="input-group mb-3">
                                    <input type="text" name="keyword" class="form-control w-50" placeholder="Search">
                                    <div class="input-group-append">
                                        <button name="search" class="btn input-group-text"><i class="fas fa-search"></i></span></button>
                                    </div>
                                </div>

                                </form>

                            </div>

                            <div class="col-12 col-lg">
                                <a href="tambah.php" class="btn btn-success btn-block text-uppercase add tombol">Add Staff</a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="bg-content">

                        <div class="table-responsive">
                            <table class="table table-hover table-bordered">
                                <thead align="center">
                                    <td>No</td>
                                    <td>Foto</td>
                                    <td>Nama</td>
                                    <td>Job</td>
                                    <td>Deskripsi</td>
                                    <td>Aksi</td>
                                </th>

                                <?php $i = 1 ;?>
                                <?php foreach($query as $sql) :?>

                                <tbody align="center">
                                    <td><?= $i++ ?></td>
                                    <td><img src="gambar/<?=$sql['gambar']?>" alt="" width="100px"></td>
                                    <td><?=$sql['nama']?></td>
                                    <td><?=$sql['job']?></td>
                                    <td><?=$sql['desc_staff']?></td>
                                    <td><a href="edit.php?id=<?=$sql['id_staff']?>" class="btn btn-success btn-sm">EDIT</a>
                                        <a onclick="return confirm('Yakin Ingin Menghapus Data Ini ?')" href="process/delete.php?id=<?=$sql['id_staff']?>" class="btn btn-danger btn-sm">DELETE</a>
                                    </td>
                                </tbody>

                                <?php $i++ ;?>
                                <?php endforeach;?>

                            </table>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>


</body>
</html>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="Flickity v2.2/Flickity/flickity.pkgd.min.js"></script>