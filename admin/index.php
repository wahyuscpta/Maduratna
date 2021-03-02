<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/logo-2.png" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css?v=<?= time() ?>">
    <link rel="stylesheet" href="../css/login.css?v=<?= time() ?>">
    <title>Maduratna Barber Shop - Login Page</title>
</head>
<body>

    <div class="bg-login">
        <div class="container">
            <div class="row">

                <div class="col-6">
                    <div class="text-login align-items-center">
                        <h1>WELCOME BACK TO MIDDLE-EAST</h1>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="login">
                        <div class="row">

                            <div class="col-12 mt-5">
                                <div class="title-text text-center" data-aos="fade-up">
                                    <h1>SILAHKAN LOGIN</h1>
                                </div>
                            </div>
            
                            <div class="container" data-aos="fade-up">
                                <form action="process/login-process.php" method="POST">
                                    <div class="row align-items-center">
            
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">USERNAME</label>
                                                <input type="text" name="usn" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
                                            </div>
                                        </div>
            
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">PASSWORD</label>
                                                <input type="password" name="pass" id="password-field" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password">
                                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                            </div>
                                        </div>
            
                                        <div class="col-12 pt-3">
                                            <button type="submit" name="btn-login" class="btn btn-primary float-right btn-lg">LOGIN GAN</button>
                                        </div>
            
                                    </div>
                                </form>
                            </div>
                            
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

    <script>
        $(".toggle-password").click(function() {

        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
        input.attr("type", "text");
        } else {
        input.attr("type", "password");
        }
        });
    </script>