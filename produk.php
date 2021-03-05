<?php

    require_once "config/conn.php";
    require_once "config/helper.php";

    $query = mysqli_query($conn, "SELECT * FROM tb_produk WHERE id_produk = 4 ");

    $query_2 = mysqli_query($conn, "SELECT * FROM tb_produk WHERE id_produk != 4");

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
    <link rel="stylesheet" href="css/produk.css?v=<?= time() ?>">
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
                    <a class="nav-item nav-link" href="service.php">Services</a>
                    <a class="nav-item nav-link active" href="produk.php">Product</a>
                    <a class="nav-item nav-link " href="contact.php">Contact Us</a>
                </div>
                </div>
            </div>
        </nav>

		<div class="container">
            <div class="row">
                
                <div class="col-lg-2 col-lg-8 section-part text-left" data-aos="fade-up">
                    <h4>OUR PRODUCTS</h4>
                    <h1>SPESIAL HANYA UNTUK ANDA</h1>
                    <P>Produk kami akan membantu anda dalam urusan rambut</P>
                    <a href="#bg-about"><i class="fa fa-angle-double-down blink" aria-hidden="true"></i></a>
                </div>

            </div>    
        </div>

        <img src="img/ripped/1.png" alt="" class="img-fluid ripped">

	</div>  

    <div class="bg-about pt-5" id="bg-about">
        <div class="container">

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">

                    <?php foreach ($query as $row) : ?>

                    <div class="carousel-item active">
                      <div class="row">

                          <div class="col-lg-6 col-12 col-md-6">
                              <div class="img-about">
                                  <img src="admin/produk/gambar/<?= $row['gambar'] ?>" alt="">
                              </div>
                          </div>

                          <div class="col-lg-6 col-12 col-md-6">

                              <div class="text-detail">
                                  
                              <p class="mt-3">PRODUCTS</p>

                              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-angle-left"></i></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-angle-right"></i></span>
                                  <span class="sr-only">Next</span>
                                </a>

                                <hr class="mt-lg-3">

                              <div class="text-about">
                                  <h1 class="mt-sm-3 text-uppercase"><?= $row['nama_produk'] ?></h1>
                                  <div class="rate">
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star-half-alt"></i>
                                  </div>
                                  <p class="mt-5"><?= $row['desc_produk'] ?></p>

                                  <div class="features">
                                      <h3 class="mt-5">SPECIALS FEATURES :</h3>
                                      <ul class="list-group">
                                          <li class="list-group-item">
                                              <i class="fas fa-check"></i><?= $row['fitur_1'] ?>
                                          </li>
                                          <li class="list-group-item">
                                                <i class="fas fa-check"></i><?= $row['fitur_2'] ?>
                                          </li>
                                          <li class="list-group-item">
                                              <i class="fas fa-check"></i><?= $row['fitur_3'] ?>
                                          </li>
                                        </ul>    
                                  </div>
                                  
                                    <div class="row mt-5">
                                      <div class="col-3">
                                          <h1 class="mt-lg-3 mt-md-3">RP.<?= $row['harga'] ?></h1>
                                      </div>

                                        <div class="col-lg-4 col-md-5 col-8">
                                          <a href="https://api.whatsapp.com/send?phone=6281932273428" class="btn btn-danger mt-lg-3 mt-md-3 btn-block">BELI PRODUK</a>
                                        </div>
                                    </div>

                              </div>
                              </div>

                          </div>

                      </div>
                    </div>

                    <?php endforeach; ?>

                    <?php foreach ($query_2 as $row) : ?>

                    <div class="carousel-item">
                      <div class="row">

                          <div class="col-lg-6 col-12 col-md-6">
                              <div class="img-about">
                                  <img src="admin/produk/gambar/<?= $row['gambar'] ?>" alt="">
                              </div>
                          </div>

                          <div class="col-lg-6 col-12 col-md-6">

                              <div class="text-detail">
                                  
                              <p class="mt-3">PRODUCTS</p>

                              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-angle-left"></i></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-angle-right"></i></span>
                                  <span class="sr-only">Next</span>
                                </a>

                                <hr class="mt-lg-3">

                              <div class="text-about">
                                  <h1 class="mt-sm-3 text-uppercase"><?= $row['nama_produk'] ?></h1>
                                  <div class="rate">
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star"></i>
                                      <i class="fas fa-star-half-alt"></i>
                                  </div>
                                  <p class="mt-5"><?= $row['desc_produk'] ?></p>

                                  <div class="features">
                                      <h3 class="mt-5">SPECIALS FEATURES :</h3>
                                      <ul class="list-group">
                                          <li class="list-group-item">
                                              <i class="fas fa-check"></i><?= $row['fitur_1'] ?>
                                          </li>
                                          <li class="list-group-item">
                                                <i class="fas fa-check"></i><?= $row['fitur_2'] ?>
                                          </li>
                                          <li class="list-group-item">
                                              <i class="fas fa-check"></i><?= $row['fitur_3'] ?>
                                          </li>
                                        </ul>    
                                  </div>
                                  
                                    <div class="row mt-5">
                                      <div class="col-3">
                                          <h1 class="mt-lg-3 mt-md-3">RP.<?= $row['harga'] ?></h1>
                                      </div>

                                        <div class="col-lg-4 col-md-5 col-8">
                                          <a href="https://api.whatsapp.com/send?phone=6281932273428" class="btn btn-danger mt-lg-3 mt-md-3 btn-block">BELI PRODUK</a>
                                        </div>
                                    </div>

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

    <div class="bg-produk mb-5">
        <img src="img/ripped/3.png" class="img-fluid" alt="">

        <div class="container">
            <div class="row">

                <div class="col-12">
                  <div class="title-text text-center mb-5" data-aos="fade-up">
                      <h4>PENGALAMAN DENGAN BARBERSHOP TERBAIK</h4>
                      <h1>LIHAT PRODUK LAINNYA YANG TIDAK KALAH BERGUNA HANYA UNTUK ANDA</h1>
                  </div>
              </div>

                      <div class="col-12 col-md-6 col-lg-3 mt-5">
                        <a href="https://api.whatsapp.com/send?phone=6281932273428">
                          <div class="card m-3 produk" data-aos="zoom-in">
                              <img class="card-img-top" src="img/produk/pomade.jpg" alt="Card image cap">
                              <div class="card-body">
                                <h4 class="card-title text-center">OIL POMADE</h4>
                                <h5 class="card-text text-center">35K</h5>
                              </div>
                            </div>
                          </a>
                      </div>

                <div class="col-12 col-md-6 col-lg-3 mt-5">
                  <a href="https://api.whatsapp.com/send?phone=6281932273428">
                    <div class="card m-3 produk" data-aos="zoom-in">
                        <img class="card-img-top" src="img/produk/hairspray.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h4 class="card-title text-center">HAIRSPRAY</h4>
                          <h5 class="card-text text-center">50K</h5>
                        </div>
                      </div>
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-3 mt-5">
                  <a href="https://api.whatsapp.com/send?phone=6281932273428">
                    <div class="card m-3 produk" data-aos="zoom-in">
                        <img class="card-img-top" src="img/produk/serum.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h4 class="card-title text-center">HAIR SERUM</h4>
                          <h5 class="card-text text-center">75K</h5>
                        </div>
                      </div>
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-3 mt-5">
                  <a href="https://api.whatsapp.com/send?phone=6281932273428">
                    <div class="card m-3 produk" data-aos="zoom-in">
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
              <li><a class="facebook" href="#"><i class="fab fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fab fa-instagram"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fab fa-whatsapp"></i></a></li>
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