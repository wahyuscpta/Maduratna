<?php

    require_once "config/conn.php";
    require_once "config/helper.php";

    if(!isset($_GET['tgl'])) {header('location: index.php');}

    $a = $_GET['nama'];
    $b = $_GET['notelp'];
    $c = $_GET['email'];
    $d = $_GET['tgl'];

    $jam = "SELECT * FROM tb_jam WHERE id_jam NOT IN (SELECT id_jam FROM tb_appoinment WHERE tanggal='$d' )";
    $query = mysqli_query($conn, $jam);

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/logo-2.png" type="image/x-icon">
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css?v=<?php time() ?>">
    <link rel="stylesheet" href="css/appoinment.css?v=<?php time() ?>">
    <title>Maduratna Barber Shop</title>
</head>
<body>

    <div class="bg-appoinment">
        <div class="container">
            <div class="row">

            <div class="col-12 col-md-6">
                <div class="appoinment">
                    <form action="proses/appoinment_proses.php" method="POST">
                        <div class="row align-items-center">

                            <div class="col-12 mt-5">
                                <div class="title-text text-center mb-5" data-aos="fade-up">
                                    <h1>MAKE APPOINMENT</h1>
                                </div>
                            </div>

                            <input type="hidden" name="nama" value="<?= $a ?>">
                            <input type="hidden" name="notelp" value="<?= $b ?>">
                            <input type="hidden" name="email" value="<?= $c ?>">
                            <input type="hidden" name="tanggal" value="<?= $d ?>">

                            <div class="col-12 col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">JAM</label>
                                    <select name="jam" id="exampleInputPassword1" class="pr-3 select-control">
                                        <option value="">PILIH JAM</option>
                                        <?php foreach ($query as $row) :  ?>
                                            <option value="<?= $row['id_jam'] ?>"><?= $row['jam'] ?> <?= $row['kategori'] ?></option>
                                        <?php endforeach;  ?>   
                                    </select>
                                </div>
                            </div>

                            <div class="col-12 pt-3">
                                <button type="submit" name="btn-submit" class="btn btn-primary mx-auto btn-block btn-lg">SUBMIT APPOINMENT</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div> 

            <div class="col-12 col-md-6">
                <div class="antrian">

                    <div class="nota" id="capture">

                        <h1>Detail Appoinment</h1>

                        <hr>
                        
                        <table cellpadding="5">
                            <tr>
                                <td>Name</td>
                                <td>:</td>
                                <td><?= $a ?></td>
                            </tr>
                            <tr>
                                <td>No Telp</td>
                                <td>:</td>
                                <td><?= $b ?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td><?= $c ?></td>
                            </tr>

                            <tr>
                                <td>Tanggal</td>
                                <td>:</td>
                                <td><?= $d ?></td>
                            </tr>

                        </table>

                        <p>NB: If you cannot attend the date of the agreement there must be a family representative to confirm the cancellation to our call center.</p>
                        <p>Polyclinic opens at 8:00 a.m. Please come earlier.</p>

                        <hr>

                        <p style="text-align :center">Thank You</p>

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