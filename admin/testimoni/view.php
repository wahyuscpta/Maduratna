<?php

    require_once "../../config/conn.php";

    session_start();

    if(!isset($_SESSION['username'])) {header('location: ../index.php');}

    if(isset($_POST['search'])){

        $a = $_POST['keyword'];

        $query = mysqli_query($conn, "SELECT * FROM tb_testimoni WHERE nama LIKE '%$a%'");
    }
    else{
        $query = mysqli_query($conn, "SELECT * FROM tb_testimoni");
    }

    $total = mysqli_num_rows($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Dashboard Admin
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    
    <div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a class="simple-text logo-mini">
          <div class="logo-image-small pt-1">
            <i class="nc-icon nc-circle-10"></i>
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="" class="simple-text logo-normal">
          Dashboard
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="../app/view.php">
              <i class="nc-icon nc-calendar-60"></i>
              <p>APPOINMENT</p>
            </a>
          </li>

          <li>
            <a href="../produk/view.php">
              <i class="nc-icon nc-box-2"></i>
              <p>Produk</p>
            </a>
          </li>

          <li>
            <a href="../staff/view.php">
              <i class="nc-icon nc-single-02"></i>
              <p>Staff</p>
            </a>
          </li>

          <li>
            <a href="../pesan/view.php">
              <i class="nc-icon nc-email-85"></i>
              <p>Pesan</p>
            </a>
          </li>

          <li class="active">
            <a href="view.php">
              <i class="nc-icon nc-chat-33"></i>
              <p>Testimoni</p>
            </a>
          </li>

          <li class="active-pro">
            <a href="logout.php">
              <i class="nc-icon nc-button-power"></i>
              <p>Logout</p>
            </a>
          </li>

        </ul>
      </div>

    </div>

    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="">DAFTAR TESTIMONI</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>

          <form action="" method="POST">
            <div class="collapse navbar-collapse justify-content-end" id="navigation">

                <div class="input-group no-border">
                  <input type="teext" name="keyword" class="form-control" placeholder="Search...">
                </div>
              
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <button type="submit" name="search" class="btn btn-primary"><i class="nc-icon nc-zoom-split"></i></button>
                  </li>
                </ul>

            </div>
          </form>

        </div>
      </nav>
      <!-- End Navbar -->

      <div class="content">
        <div class="row">

          <div class="col-md-12">
            <div class="card">

              <?php 
                if(isset($_GET['pesan'])){

                    $pesan = $_GET['pesan'];

                    if($pesan == "input"){
                        echo "
                          <div class='alert alert-success alert-dismissible fade show mr-3 ml-3'>
                            <button type='button' aria-hidden='true' class='close' data-dismiss='alert' aria-label='Close'>
                              <i class='nc-icon nc-simple-remove'></i>
                            </button>
                            <span><b> Sukses - </b> Data Berhasil Ditambakan</span>
                          </div>                       
                        ";

                    }else if($pesan == "update"){
                        echo "
                          <div class='alert alert-success alert-dismissible fade show mr-3 ml-3'>
                            <button type='button' aria-hidden='true' class='close' data-dismiss='alert' aria-label='Close'>
                              <i class='nc-icon nc-simple-remove'></i>
                            </button>
                            <span><b> Sukses - </b> Data Berhasil Diupdate</span>
                          </div>                       
                      ";

                    }else if($pesan == "hapus"){
                      echo "
                          <div class='alert alert-success alert-dismissible fade show mr-3 ml-3'>
                            <button type='button' aria-hidden='true' class='close' data-dismiss='alert' aria-label='Close'>
                              <i class='nc-icon nc-simple-remove'></i>
                            </button>
                            <span><b> Sukses - </b> Data Berhasil Dihapus</span>
                          </div>                       
                      ";
                    
                    }else{
                      echo "
                          <div class='alert alert-danger alert-dismissible fade show mr-3 ml-3'>
                            <button type='button' aria-hidden='true' class='close' data-dismiss='alert' aria-label='Close'>
                              <i class='nc-icon nc-simple-remove'></i>
                            </button>
                            <span><b> Erorr - </b> Proses Gagal Dieksekusi</span>
                          </div>                       
                      ";
                    }

                }
            ?>

              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    
                  <?php if($total <= 0){ ?>

                    <?php } else {?>

                    <table class="table table-hover table-bordered">

                        <thead align="center">
                            <td>No</td>
                            <td>Nama</td>
                            <td>Email</td>
                            <td>Testimoni</td>
                            <td>Aksi</td>
                        </th>

                        <?php   
                            $i = 1;   
                            foreach ($query as $sql) : 
                        ?>

                        <tbody align="center">
                            <td><?= $i++; ?></td>
                            <td><?= $sql['nama'] ?></td>
                            <td><?= $sql['email'] ?></td>
                            <td><?= $sql['testimoni'] ?></td>
                            <td><a onclick="return confirm('Yakin Ingin Menghapus Data Ini ?')" href="process/delete.php?id=<?=$sql['id_testi']?>" class="btn btn-danger btn-sm">DELETE</a>
                            </td>
                        </tbody>

                        <?php endforeach; ?>

                        <?php }?>

                  </table>
                </div>
              </div>
            </div>
          </div>
 
        </div>
      </div>
      
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">

          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li><a href="" target="_blank">Maduratna Barber Shop</a></li>
              </ul>
            </nav>

            <div class="credits ml-auto">
              <span class="copyright">
                © <script>
                  document.write(new Date().getFullYear())
                </script>, Made With <i class="fa fa-heart heart"></i> Wahyu Sucipta
              </span>
            </div>

          </div>
        </div>
      </footer>

    </div>
  </div>

  <!--   Core J../S Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>
