<?php

    require_once "../config/conn.php";
    require_once "../config/helper.php";

    $a = $_POST['nama'];
    $b = $_POST['email'];
    $c = $_POST['pesan'];

    if(!isset($_POST['btn-submit'])) {header('location: ../contact.php');}

    if(!empty($a) && !empty($b) && !empty($c)){

        $query = mysqli_query($conn, "INSERT INTO tb_pesan VALUES ('', '$a', '$b', '$c') ");

        if(!$query){
            alert('Pesan Gagal Dikirim', '../contact.php');
        }

        else{
            alert('Pesan Berhasil Dikirim', '../contact.php');
        }
    }

    else{
        alert('Form Tidak Boleh Kosong', '../contact.php');;
    }

?>