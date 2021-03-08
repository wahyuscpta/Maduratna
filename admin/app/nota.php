<?php

    require_once "../../config/conn.php";

    session_start();
    $usn = $_SESSION['username'];
    if(!isset($usn)){header('location: ../index.php');}

    $sql = "SELECT * FROM tb_appoinment";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($query);

?>


<!DOCTYPE html>
<html>
<head>
 <title>Nota Rekapan Maduratna Barber Shop</title>
 <link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel="icon" type="image/png" href="../assets/img/favicon.png">
</head>
<body>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!--Author      : @arboshiki-->
<div id="invoice">

    <div class="invoice overflow-auto">
        <div style="min-width: 600px">
            <header>
                <div class="row">
                    <div class="col">
                        <h1 target="_blank" href="https://lobianijs.com">
                            REKAP DATA APPOINMENT
                        </h1>
                        <div><?= date('d F Y') ?></div>
                        <div>( 0361 ) 123 456</div>
                        <div>maduratnabarber@example.com</div>
                    </div>
                    </div>
                </div>
            </header>
            <main>
                <table border="1" cellspacing="0" cellpadding="0" class="mt-5">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAMA</th>
                            <th>NO TELP</th>
                            <th>EMAIL</th>
                            <th>TANGGAL</th>
                            <th>JAM</th>
                            <th>SERVICE</th>
                        </tr>
                    </thead>
                    <tbody>
                                
                        <?php foreach ($query as $row) :

                            $id_jam = $row['id_jam'];
                            $sql_2 = mysqli_query($conn, "SELECT * FROM tb_jam WHERE id_jam = '$id_jam' ");
                            $query_2 = mysqli_fetch_assoc($sql_2);

                            $id_service = $row['id_service'];
                            $sql_3 = mysqli_query($conn, "SELECT * FROM tb_service WHERE id_service = '$id_service' ");
                            $query_3 = mysqli_fetch_assoc($sql_3);

                        ?>

                        <tr>
                            <td><?php echo $row['id_appoinment']; ?></td>
                            <td><?php echo $row['nama']; ?></td>
                            <td><?php echo $row['notelp']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['tanggal']; ?></td>
                            <td><?php echo $query_2['jam'] ?> <?php echo $query_2['kategori'] ?></td>
                            <td><?php echo $query_3['nama'] ?></td>
                        </tr>

                        <?php endforeach; ?>
        
 
                    </tbody>
                </table>

            <footer class="mt-5">
                JKTrans
            </footer>

        </div>
        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
        <div></div>
    </div>
</div>

</body>
</html>

<script>
    window.print();
</script>