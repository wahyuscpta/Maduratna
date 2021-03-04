<?php

    include "../config/conn.php";
    require_once "../config/helper.php";

    if (isset($_POST['btn-next'])) {

        $a = $_POST['nama'];
        $b = $_POST['notelp'];
        $c = $_POST['email'];
        $d = $_POST['tgl'];

        $tgl_skrg = date('Y-m-d');

        if ($d === $tgl_skrg){
            alert('Anda Harus Booking Maksimal H-1', '../index.php');
        } else {
            header("location: ../appoinment.php?nama=$a&notelp=$b&email=$c&tgl=$d");   
        }

    }

    if (isset($_POST['btn-submit'])) {

            $id = $_POST['id'];
            $a = $_POST['nama'];
            $b = $_POST['notelp'];
            $c = $_POST['email'];
            $d = $_POST['tanggal'];
            $e = $_POST['jam'];
            $f = $_POST['service'];

            $sql   = "INSERT INTO tb_appoinment VALUES ('$id', '$a', '$b', '$c', '$d', '$e', '$f') ";
            $query = mysqli_query($conn, $sql); 

            if($query){

                session_start();
                $sql_2   = mysqli_query($conn, "SELECT * FROM tb_appoinment WHERE tanggal = '$d' AND id_jam = '$e' ");
                $query_2 = mysqli_fetch_assoc($sql_2);
                $_SESSION['id_appoinment'] = $query_2['id_appoinment'];

                header("location: ../nota.php");   
                
            } else {
                alert('Perjanjian Gagal Dibuat', '../index.php');
            }

        }

?>