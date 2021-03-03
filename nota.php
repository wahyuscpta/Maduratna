<?php

    session_start();
    // if (!isset($_SESSION['id_appoinment'])) { header("location: index.php"); }

    require_once "config/conn.php";
    require_once "config/helper.php";

    $id = $_SESSION['id_appoinment'];

    $sql = mysqli_query($conn, "SELECT * FROM tb_appoinment WHERE id_appoinment = '$id' ");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nawacare</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/nota.css?v=<?= time() ?>">
</head>
<body>

<div class="antrian">

    <div class="nota" id="capture">

        <?php foreach($sql as $row) : ?>
        
        <table cellpadding="3">
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><?= $row['nama'] ?></td>
            </tr>
            <tr>
                <td>No Telp</td>
                <td>:</td>
                <td><?= $row['notelp'] ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><?= $row['email'] ?></td>
            </tr>

            <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td><?= $row['tanggal'] ?></td>
            </tr>

            <?php
                $id_jam = $row['id_jam'];
                $sql_2 = "SELECT * FROM tb_jam WHERE id_jam = '$id_jam'";
                $query_2 = mysqli_query($conn, $sql_2);
                $data = mysqli_fetch_assoc($query_2);
                
            ?>

            <tr>
                <td>Jam</td>
                <td>:</td>
                <td><?= $data['jam'] ?> <?= $data['kategori'] ?></td>
            </tr>
        </table>

        <hr>

        <h2><?= $row['id_appoinment'] ?></h2>

        <?php endforeach; ?>

        <p>NB: If you cannot attend the date of the agreement there must be a family representative to confirm the cancellation to our call center.</p>
        <p>Polyclinic opens at 8:00 a.m. Please come earlier.</p>

        <hr>

        <p style="text-align :center">Thank You</p>

    </div>

    <div class="btn-nota">
        <a href="index.php" class="btn btn-secondary w-50">Back To Home</a>
        <a href="pdf.php" class="btn btn-success tombol tombol-2 print">Save</a>
    </div>

</div>
    
</body>
</html>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
