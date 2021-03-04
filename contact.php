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
    <link rel="stylesheet" href="css/contact.css?v=<?= time() ?>">
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
                    <a class="nav-item nav-link active" href="contact.php">Contact Us</a>
                </div>
                </div>
            </div>
        </nav>

		<div class="container">
            <div class="row">
                
                <div class="col-lg-2 col-lg-8 section-part text-left" data-aos="fade-up">
                    <h4>CONTACT US</h4>
                    <h1>PROFESSIONAL BARBER SHOP</h1>
                    <P>Rasakan Pengalaman di Barber Shop Terbaik</P>
                    <a href="#bg-about"><i class="fa fa-angle-double-down blink" aria-hidden="true"></i></a>
                </div>

            </div>    
        </div>

        <img src="img/ripped/1.png" alt="" class="img-fluid ripped">


	</div>  

    <div class="bg-contact" id="bg-about">
        <div class="container">
            <div class="row">

                <div class="col-12 col-lg-7">
                    <div class="info" data-aos="fade-up">
                        <div class="title-text text-left">
                            <h4>PENGALAMAN DENGAN BARBERSHOP TERBAIK</h4>
                            <h1>PROFESSIONAL BARBER STUDIO <br> IN HEART OF DENPASAR</h1>
                            <p>Temukan Kami di Google Maps Untuk Memudahkan Kamu Berinteraksi Dengan Kami.</p>
                        </div>

                        <div class="maps">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1972.0414590696603!2d115.21943210058237!3d-8.68366492287882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd240e44102547d%3A0xd1867fa8fc2ca13a!2sBarber%20Shop%20Caniago!5e0!3m2!1sid!2sid!4v1614233124688!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-lg-5">
                    <div class="contact" data-aos="fade-up">

                        <div class="row">
                            <div class="col-12">
                                <div class="title-contact text-center">
                                    <h4>GET IN TOUCH</h4>
                                    <h1>HUBUNGI KAMI JIKA ADA YANG INGIN DISAMPAIKAN</h1>
                                </div>
                            </div>
                            
                            <form action="proses/pesan.php" method="POST">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NAMA LENGKAP">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="EMAIL">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="pesan" cols="30" rows="5" class="form-control" id="exampleInputPassword1" placeholder="PESAN UNTUK KAMI"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-12 pt-3">
                                        <button type="submit" name="btn-submit" class="btn btn-danger mx-auto btn-block">KIRIM</button>
                                    </div>  
                                </div>
                            </form>

                        </div>

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