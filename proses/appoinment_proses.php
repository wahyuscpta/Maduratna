<?php

    include "../config/conn.php";
    require_once "../config/helper.php";

    if (!isset($_POST['btn-submit'])) { header("location: ../index.php"); }

    if (isset($_POST['btn-next'])) {

        $a = $_POST['nama'];
        $b = $_POST['notelp'];
        $c = $_POST['email'];
        $d = $_POST['tgl'];

        header("location: ../appoinment.php?nama=$a&notelp=$b&email=$c&tgl=$d");

    }

    if (isset($_POST['btn-submit'])) {

            $a = $_POST['nama'];
            $b = $_POST['notelp'];
            $c = $_POST['email'];
            $d = $_POST['tanggal'];
            $e = $_POST['jam'];

            $sql   = "INSERT INTO tb_appoinment VALUES ('', '$a', '$b', '$c', '$d', '$e') ";
            $query = mysqli_query($conn, $sql); 

            if($query){

                session_start();
                $sql_2   = mysqli_query($conn, "SELECT * FROM tb_appoinment WHERE tanggal = '$d' AND id_jam = '$e' ");
                $query_2 = mysqli_fetch_assoc($sql_2);
                $_SESSION['id_appoinment'] = $query_2['id_appoinment'];

                alert('Perjanjian Berhasil Dibuat', '../nota.php');
            } else {
                alert('Perjanjian Gagal Dibuat', '../index.php');
            }

        }

?>