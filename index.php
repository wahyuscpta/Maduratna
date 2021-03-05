<?php

    require_once "config/conn.php";
    require_once "config/helper.php";

    $query = mysqli_query($conn, "SELECT * FROM tb_staff");

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/logo-2.png" type="image/x-icon">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css?v=<?= time() ?>">
    <title>Maduratna Barber Shop</title>
</head>
<body>

    <div class=" main-section">

        <nav class="navbar navbar-expand-lg fixed-top primary-nav">
            <div class="container container-md">
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo.png" width="100" height="100" class="d-inline-block align-top logo-1" alt="">
                    <img src="img/logo-2.png" width="100" height="100" class="d-inline-block align-top logo-2" alt="">
                  </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml ml-auto">
                    <a class="nav-item nav-link" href="about.php">About</a>
                    <a class="nav-item nav-link" href="service.php">Services</a>
                    <a class="nav-item nav-link" href="produk.php">Product</a>
                    <a class="nav-item nav-link " href="contact.php">Contact Us</a>
                </div>
                </div>
            </div>
        </nav>

		<div class="container container-md">
            <div class="row">
                
                <div class="col-lg-2 col-lg-8 section-part text-left" data-aos="fade-up">
                    <h4>ESTABLISHED 2010</h4>
                    <h1>PROFESSIONAL BARBER SHOP</h1>
                    <P>Rasakan Pengalaman di Barber Shop Terbaik</P>
                    <a href="#" class="btn btn-danger mt-3">BOOKING SEKARANG</a>
                </div>

            </div>    
        </div>

        <img src="img/ripped/1.png" alt="" class="img-fluid ripped">

	</div>  

    <div class="bg-about pt-5">
        <div class="container">
            <div class="row">
                
                <div class="bg-intro">
                    <div class="row">
                        
                        <div class="col-12 col-md-8">
                            <div class="title-about text-about" data-aos="fade-up">
                                <h4>PENGALAMAN DENGAN BARBERSHOP TERBAIK</h4>
                                <h1>KAMI MENYAMBUT ANDA DENGAN PELAYANAN TERBAIK DAN PENUH KENYAMANAN.</h1>
                                <p>Inilah kami yang peduli dengan kualitas hasil potongan rambut untuk para customer kami dengan layanan berkualitas tinggi, perlengkapan sanitasi, fasilitas nyaman, dan tukang cukur berpengalaman.</p>
                            </div>
                        </div>

                        <div class="col-12 col-md-4" data-aos="fade-up">
                            <div class="row pt-5">
                                <div class="col-4">
                                    <div class="intro text-center">
                                        <h1 id="count1"></h1>
                                        <p>Tahun Telah Berdiri</p>
                                    </div>
                                </div>
        
                                <div class="col-4">
                                    <div class="intro text-center">
                                        <h1 id="count2"></h1>
                                        <p>Melayani Customers</p>
                                    </div>
                                </div>
        
                                <div class="col-4">
                                    <div class="intro text-center">
                                        <h1 id="count3"></h1>
                                        <p>Professional Staff</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="line"></div>
                        </div>

                    </div>
                </div>

                <hr><hr>

                <div class="col-lg-6 col-md-12">
                    <div class="img-about" data-aos="fade-up">
                        
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="text-about" data-aos="fade-up">
                        <h4>PENGALAMAN DENGAN BARBERSHOP TERBAIK</h4>
                        <h1>KAMI MENYAMBUT ANDA DENGAN PELAYANAN TERBAIK DAN PENUH KENYAMANAN.</h1>
                    </div>

                    <div class="col-12 pt-5" data-aos="fade-up">
                        <div class="about">
                            <div class="row">
                                <div class="col-3 col-md-2">
                                    <div class="icon-about pl-3">
                                        <i class="fas fa-cut align-items-center"></i>
                                    </div>
                                </div>

                                <div class="col-9 col-md-10">
                                    <h2>POTONGAN BERKUALITAS</h2>
                                    <p>Para barber paham tentang bentuk wajah manusia, tekstur rambut, jenis rambut untuk hasil potong yang terbaik dan sesuai dengan karakter & lifestyle kamu.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 pt-5">
                        <div class="about">
                            <div class="row">
                                <div class="col-3 col-md-2">
                                    <div class="icon-about">
                                        <i class="fas fa-money-check-alt align-items-center"></i>
                                    </div>
                                </div>

                                <div class="col-9 col-md-10">
                                    <h2>GOOD VALUE FOR MONEY</h2>
                                    <p>Dengan kualitas terbaik, kami tetap menawarkan harga yang bersaing dan terbilang terjangkau sehingga tidak memberatkan kantong kamu.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 pt-5">
                        <div class="about">
                            <div class="row">
                                <div class="col-3 col-md-2">
                                    <div class="icon-about pl-3">
                                        <i class="fas fa-mobile-alt align-items-center"></i>
                                    </div>
                                </div>

                                <div class="col-9 col-md-10">
                                    <h2>SISTEM ONLINE BOOKING</h2>
                                    <p>Antri dan menunggu ? Tidak perlu lagi. Kamu bisa booking jadwal potong rambut kamu via website kami ini.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>

    <div class="bg-staff">

        <img src="img/ripped/3.png" class="ripped mx-auto d-block" alt="">

        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="title-text text-center align-items-center mb-5 mb-sm-3" data-aos="fade-up">
                        <h4>PENGALAMAN DENGAN BARBERSHOP TERBAIK</h4>
                        <h1>STAFF DENGAN SKILL CUKUR YANG SANGAT PROFESIONAL DAN HEBAT DALAM APA YANG MEREKA LAKUKAN</h1>
                    </div>
                </div>

                <?php foreach($query as $row) : ?>

                <div class="col-lg-4 col-sm-6 mt-5 mt-md-3" data-aos="fade-up">
                    <div class="card m-3">
                        <img class="card-img-top" src="admin/staff/gambar/<?=$row['gambar']?>" alt="Card image cap">
                        <div class="card-body">
                          <h2 class="card-title text-uppercase"><?=$row['nama']?></h2>
                          <p class="card-text"><?= $row['job'] ?></p>
                        </div>
                      </div>
                </div>

                <?php endforeach; ?>
                
            </div>

        </div>
    </div> 

    <div class="bg-pricelist">
        <img src="img/ripped/2.png" class="img-fluid mx-auto d-block ripped" alt="">

        <div class="container-fluid">
            <div class="row">
                
                <div class="col-lg-6 col-md-12">
                    <div class="img-price mr-2" data-aos="fade-up">
                        
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="text-about" data-aos="fade-up">
                        <h4>PENGALAMAN DENGAN BARBERSHOP TERBAIK</h4>
                        <h1>KAMI MELAYANI PELANGGAN DENGAN PELAYANAN TERBAIK DAN SKILL YANG PROFESIONAL</h1>
                    </div>

                    <div class="row" data-aos="fade-up">
                        <div class="col-12 pt-5">
                            <div class="list">
                                <div class="row">
    
                                    <div class="col-6">
                                        <div class="title-list">
                                            <h2 class="float-left">MAN HAIRCUTING</h2>
                                        </div>
                                    </div>
    
                                    <div class="col-6">
                                        <h2 class="float-right price">50K</h2>
                                    </div>
    
                                    <div class="col-12">
                                        <p>Layanan perawatan sederhana dan cepat namun berkualitas tinggi yang memberikan potongan rambut paling menarik, diikuti dengan pijat kepala dan punggung dan pemberian pomade.</p>
                                    </div>
    
                                </div>
                            </div>
                        </div>
    
                        <div class="col-12 pt-4">
                            <div class="list">
                                <div class="row">
    
                                    <div class="col-6">
                                        <div class="title-list">
                                            <h2 class="float-left">HAIR COLORING</h2>
                                        </div>
                                    </div>
    
                                    <div class="col-6">
                                        <h2 class="float-right price">80K</h2>
                                    </div>
    
                                    <div class="col-12">
                                        <p>Anda menginginkannya, kami membuatnya. Biarkan tukang cukur berpengalaman kami mewarnai rambut Anda dengan sempurna sesuai keinginan.</p>
                                    </div>
    
                                </div>
                            </div>
                        </div>
    
                        <div class="col-12 pt-4">
                            <div class="list">
                                <div class="row">
    
                                    <div class="col-6">
                                        <div class="title-list">
                                            <h2 class="float-left">Beard Shaving</h2>
                                        </div>
                                    </div>
    
                                    <div class="col-6">
                                        <h2 class="float-right price">40K</h2>
                                    </div>
    
                                    <div class="col-12">
                                        <p>Dimulai dengan handuk panas untuk merilekskan kulit Anda dan membuka pori-pori Anda, diikuti dengan pencukuran yang cermat dan nyaman. </p>
                                    </div>
    
                                </div>
                            </div>
                        </div>
    
                        <div class="col-12 pt-4">
                            <div class="list">
                                <div class="row">
    
                                    <div class="col-6">
                                        <div class="title-list">
                                            <h2 class="float-left">HAIR GROOMING</h2>
                                        </div>
                                    </div>
    
                                    <div class="col-6">
                                        <h2 class="float-right price">75K</h2>
                                    </div>
    
                                    <div class="col-12">
                                        <p>Layanan perawatan pria penuh. Dimulai dengan handuk dingin, lalu potong dan cuci rambut, dilanjutkan dengan pijat kepala dan punggung dengan handuk panas, diakhiri dengan pengaplikasian hair tonic dan pomade berkualitas tinggi. </p>
                                    </div>
    
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>

    <div class="bg-produk mb-5 pb-5">
        <img src="img/ripped/3.png" class="ripped img-fluid" alt="">

        <div class="container" data-aos="zoom-in">
            <div class="row">

                <div class="col-12">
                    <div class="title-text text-center">
                        <h4>PENGALAMAN DENGAN BARBERSHOP TERBAIK</h4>
                        <h1>kami menyediakan produk untuk membantu dalam menata rambut dimanapun dengan mudah</h1>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 mt-5">
                    <a href="produk.php">
                        <div class="card m-3 produk">
                            <img class="card-img-top" src="img/produk/pomade.jpg" alt="Card image cap">
                            <div class="card-body">
                            <h4 class="card-title text-center">OIL POMADE</h4>
                            <h5 class="card-text text-center">35K</h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 mt-5">
                    <a href="produk.php">
                        <div class="card m-3 produk">
                            <img class="card-img-top" src="img/produk/hairspray.jpg" alt="Card image cap">
                            <div class="card-body">
                            <h4 class="card-title text-center">HAIRSPRAY</h4>
                            <h5 class="card-text text-center">50K</h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 mt-5">
                    <a href="produk.php">
                        <div class="card m-3 produk">
                            <img class="card-img-top" src="img/produk/serum.jpg" alt="Card image cap">
                            <div class="card-body">
                            <h4 class="card-title text-center">HAIR SERUM</h4>
                            <h5 class="card-text text-center">75K</h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 mt-5">
                    <a href="produk.php">
                        <div class="card m-3 produk">
                            <img class="card-img-top" src="img/produk/shaver.jpg" alt="Card image cap">
                            <div class="card-body">
                            <h4 class="card-title text-center">HAIR SHAVER</h4>
                            <h5 class="card-text text-center">35K</h5>
                            </div>
                        </div>
                    </a>
                </div>
                

            </div>
        </div>

    </div>
    
    <div class="bg-appoinment mt-5 pb-5" id="bg-appoinment">
        <div class="container-fluid">
            <div class="row">

                <div class="col-12 mt-5">
                    <div class="title-text text-center mb-5" data-aos="fade-up">
                        <h1>MAKE APPOINMENT</h1>
                    </div>
                </div>

                <div class="container">
                    <form action="proses/appoinment_proses.php" method="POST">
                        <div class="row align-items-center">

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">NAMA LENGKAP</label>
                                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap">
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">NO TELP</label>
                                    <input type="number" name="notelp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Telp">
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">EMAIL</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                                </div>
                            </div>

                            <div class="col-12 col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">TANGGAL</label>
                                    <input type="date" name="tgl" class="form-control" id="exampleInputPassword1" placeholder="Tanggal">
                                </div>    
                            </div>

                            <div class="col-12 pt-3">
                                <button type="submit" name="btn-next" class="btn btn-primary mx-auto btn-block btn-lg">BOOK APPOINMENT</button>
                            </div>

                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>

    <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <h6>About</h6>
              <p class="text-justify">Maduratna Barbershop adalah merek barbershop premium di Indonesia. Kami mengutamakan kepuasan tamu kami dengan layanan berkualitas tinggi, perlengkapan sanitasi, fasilitas nyaman, dan tukang cukur berpengalaman.</p>
            </div>

            <div class="col-xs-6 col-md-3 ml-lg-5 pl-lg-5">
                <h6>Quick Links</h6>
                <ul class="footer-links">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="about.php">About</a></li>
                  <li><a href="service.php">Services</a></li>
                  <li><a href="product.php">Product</a></li>
                  <li><a href="contact.php">Contact Us</a></li>
                </ul>
              </div>
  
            <div class="col-xs-6 col-md-2">
              <h6>Our Info</h6>
              <ul class="footer-links">
                <li><a href="">Jl. Raya Sesetan 123 Denpasar</a></li>
                <li class="mt-4"><a href="">+22 123 456</a></li>
                <li><a href="">maduratnabarber@gmail.com</a></li>
              </ul>
            </div>

          </div>
          <hr>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
              <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by 
           <a href="#">Maduratna</a>.
              </p>
            </div>
  
            <div class="col-md-4 col-sm-6 col-xs-12">
              <ul class="social-icons">
                <li><a class="facebook" href="https://facebook.com/"><i class="fab fa-facebook"></i></a></li>
                <li><a class="twitter" href="https://api.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                <li><a class="dribbble" href="https://api.whatsapp.com/send?phone=6281932273428"><i class="fab fa-whatsapp"></i></a></li>
              </ul>
            </div>
          </div>
        </div>

    </footer>

</body>
</html>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        $(document).on("scroll", function(){

        if ($(document).scrollTop() > 80){
            $(".primary-nav").addClass("shrink");
        } else {
            $(".primary-nav").removeClass("shrink");
        }

        });
    </script>

    <script>
        AOS.init();
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            function counter(id, start, end, duration) {
            let obj = document.getElementById(id),
            current = start,
            range = end - start,
            increment = end > start ? 1 : -1,
            step = Math.abs(Math.floor(duration / range)),
            timer = setInterval(() => {
                current += increment;
                obj.textContent = current;
                if (current == end) {
                clearInterval(timer);
                }
            }, step);
            }
            counter("count1", 0, 10, 2500);
            counter("count2", 100, 500, 2500);
            counter("count3", 0, 10, 2500);
            });

    </script>

