<?php

    require_once "config/conn.php";
    require_once "config/helper.php";

    $query = mysqli_query($conn, "SELECT * FROM tb_pesan WHERE status=1 AND id_pesan =3 ");

    $query_2 = mysqli_query($conn, "SELECT * FROM tb_pesan WHERE status=1 AND id_pesan !=3 ");
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
    <link rel="stylesheet" href="css/service.css?v=<?= time() ?>">
    <title>Maduratna Barber Shop</title>
</head>
<body>

    <div class="main-section">

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
                    <a class="nav-item nav-link active" href="service.php">Services</a>
                    <a class="nav-item nav-link" href="produk.php">Product</a>
                    <a class="nav-item nav-link " href="contact.php">Contact Us</a>
                </div>
                </div>
            </div>
        </nav>

		<div class="container">
            <div class="row">
                
                <div class="col-lg-2 col-lg-8 section-part text-left" data-aos="fade-up">
                    <h4>OUR SERVICES</h4>
                    <h1>KETAHUI SEMUA LAYANAN KAMI</h1>
                    <P>Pelayanan terbaik dengan skill yang profesional</P>
                    <a href="#bg-about"><i class="fa fa-angle-double-down blink" aria-hidden="true"></i></a>
                </div>

            </div>    
        </div>

        <img src="img/ripped/1.png" alt="" class="img-fluid ripped">


	</div>  

    <div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">MAKE APPOINMENT</h3>
                    
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="proses/appoinment_proses.php" method="POST">
                    <div class="modal-body">
                        <div class="row align-items-center">

                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap">
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <input type="number" name="notelp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Telp">
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <input type="date" name="tgl" class="form-control" id="exampleInputPassword1" placeholder="Tanggal">
                                </div>    
                            </div>

                        </div>
                    </div>

                <div class="modal-footer">
                    <button type="submit" name="btn-next" class="btn btn-primary">SUBMIT APPOINMENT</button>
                </div>

                </form>

            </div>
        </div>
    </div>

    <div class="bg-about pt-5" id="bg-about">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="title-text text-center mt-5" data-aos="fade-up">
                        <h4>PENGALAMAN DENGAN BARBERSHOP TERBAIK</h4>
                        <h1>kami melayanai pelanggan dengan pelayanan terbaik dan skill yang profesional</h1>
                    </div>
                </div>
            </div>

            <div class="detail-service mt-5">
                <div class="row">

                    <div class="col-12 col-md-6">
                        <div class="img-detail-service align-items-center" data-aos="fade-up">
                            <img src="img/service/1.jpg" class="img-fluid align-items-center" alt="">
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="text-detail-service pl-5 ml-5" data-aos="fade-up">
                            <h1>MAN HAIRCUTING</h1>
                            <div class="rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p class="text-justify">Layanan perawatan sederhana dan cepat namun berkualitas tinggi yang memberikan potongan rambut paling menarik, diikuti dengan pijat kepala dan punggung dan pemberian pomade.</p>
                            <div class="row">
                                <div class="col-lg-2 col-md-4 col-6">
                                    <h4 class="btn btn-secondary">50K</h4>
                                </div>
                                <div class="col-6 btn-modal">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalForm">BOOK NOW</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>   

            <div class="detail-service mt-5">
                <div class="row">

                    <div class="col-12 col-md-6">
                        <div class="text-detail-service-second pl-5 ml-5" data-aos="fade-up">
                            <h1>HAIR COLORING</h1>
                            <div class="rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p class="text-justify">Anda menginginkannya, kami membuatnya. Biarkan tukang cukur berpengalaman kami mewarnai rambut Anda dengan sempurna sesuai keinginan.</p>
                            <div class="row">
                                <div class="col-lg-2 col-md-4 col-6">
                                    <h4 class="btn btn-secondary">80K</h4>
                                </div>
                                <div class="col-6 btn-modal">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalForm">BOOK NOW</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="img-detail-service float-lg-right align-items-center" data-aos="fade-up">
                            <img src="img/service/5.jpg" class="img-fluid align-items-center" alt="">
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="text-detail-service-second second-text pl-5 ml-5" style="display: none;" data-aos="fade-up">
                            <h1>HAIR COLORING</h1>
                            <div class="rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p class="text-justify">Anda menginginkannya, kami membuatnya. Biarkan tukang cukur berpengalaman kami mewarnai rambut Anda dengan sempurna sesuai keinginan.</p>
                            <div class="row">
                                <div class="col-lg-2 col-md-4 col-6">
                                    <h4 class="btn btn-secondary">40K</h4>
                                </div>
                                <div class="col-6 btn-modal">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalForm">BOOK NOW</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="detail-service mt-5">
                <div class="row">

                    <div class="col-12 col-md-6">
                        <div class="img-detail-service align-items-center" data-aos="fade-up">
                            <img src="img/service/3.jpg" class="img-fluid align-items-center" alt="">
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="text-detail-service pl-5 ml-5" data-aos="fade-up">
                            <h1>BEARD SHAVING</h1>
                            <div class="rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p class="text-justify">Dimulai dengan handuk panas untuk merilekskan kulit Anda dan membuka pori-pori Anda, diikuti dengan pencukuran yang cermat dan nyaman. </p>
                            <div class="row">
                                <div class="col-lg-2 col-md-4 col-6">
                                    <h4 class="btn btn-secondary">75K</h4>
                                </div>
                                <div class="col-6 btn-modal">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalForm">BOOK NOW</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="detail-service mt-5">
                <div class="row">

                    <div class="col-12 col-md-6">
                        <div class="text-detail-service-second pl-5 ml-5" data-aos="fade-up">
                            <h1>HAIR GROOMING</h1>
                            <div class="rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p class="text-justify">Layanan perawatan pria penuh. Dimulai dengan handuk dingin, lalu potong dan cuci rambut, dilanjutkan dengan pijat kepala dan punggung dengan handuk panas, diakhiri dengan pengaplikasian hair tonic dan pomade berkualitas tinggi. </p>
                            <div class="row">
                                <div class="col-6 col-lg-2 col-md-4">
                                    <h4 class="btn btn-secondary">100K</h4>
                                </div>
                                <div class="col-6 col-lg-3 btn-modal">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalForm">BOOK NOW</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="img-detail-service float-lg-right align-items-center" data-aos="fade-up">
                            <img src="img/service/2.jpg" class="img-fluid align-items-center" alt="">
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="text-detail-service-second second-text pl-5 ml-5" style="display: none;" data-aos="fade-up">
                            <h1>HAIR GROOMING</h1>
                            <p class="text-justify">Layanan perawatan pria penuh. Dimulai dengan handuk dingin, lalu potong dan cuci rambut, dilanjutkan dengan pijat kepala dan punggung dengan handuk panas, diakhiri dengan pengaplikasian hair tonic dan pomade berkualitas tinggi. </p>
                            <div class="row">
                                <div class="col-6 col-lg-2 col-md-4 col-sm-6">
                                    <h4 class="btn btn-secondary">100K</h4>
                                </div>
                                <div class="col-6 col-lg-3 col-sm-6 btn-modal">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalForm">BOOK NOW</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="bg-staff pb-5">
        <img src="img/ripped/3.png" class="img-fluid" alt="">

        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="title-text text-center mb-5" data-aos="fade-up">
                        <h1>TESTIMONIALS</h1>
                    </div>
                </div>

                <div id="carouselExampleControls" class="carousel slide mt-5" data-ride="carousel" data-aos="fade-up">
    
                    <div class="carousel-inner">
    
                      <?php foreach ($query as $row) : ?>

                      <div class="carousel-item active">
                          
                          <div class="text-carousel">
                            <div class="row">

                            <div class="col-2">
                                <div class="icon-testi text-center mt-3">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                            </div>

                            <div class="col-8">
                                <div class="text-testi text-center">
                                    <p><?= $row['pesan'] ?></p>       
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="icon-testi text-center mt-3">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="name-testi text-center mt-5">
                                    <h3 class="text-uppercase"><?= $row['nama'] ?></h3>
                                </div>
                            </div>

                                </div>
                            </div>
                            
                      </div>

                      <?php endforeach; ?>

                      <?php foreach ($query_2 as $row) : ?>

                        <div class="carousel-item">
                            
                            <div class="text-carousel">
                            <div class="row">

                            <div class="col-2">
                                <div class="icon-testi text-center mt-3">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                            </div>

                            <div class="col-8">
                                <div class="text-testi text-center">
                                    <p><?= $row['pesan'] ?></p>       
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="icon-testi text-center mt-3">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="name-testi text-center mt-5">
                                    <h3 class="text-uppercase"><?= $row['nama'] ?></h3>
                                </div>
                            </div>

                                </div>
                            </div>
                            
                        </div>

                        <?php endforeach; ?>

                    </div>
                
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
