<?php

    require_once "../../../config/conn.php";
    require_once "../../../config/helper.php";

    $id = $_POST['id'];
    $a = $_FILES['gambar']['name'];
    $b = $_POST['nama'];
    $c = $_POST['harga'];
    $d = $_POST['desc'];
    $e = $_POST['fitur_1'];
    $f = $_POST['fitur_2'];
    $g = $_POST['fitur_3'];

    if(!empty($a)){

        move_uploaded_file($_FILES['gambar']['tmp_name'], "../gambar/".$a);
        $query = mysqli_query($conn, "UPDATE tb_produk SET gambar = '$a' WHERE id_produk = '$id' ");

    }

    $query = mysqli_query($conn, "UPDATE tb_produk set nama_produk = '$b', harga='$c', desc_produk='$d', fitur_1='$e', fitur_2='$f', fitur_3='$g' WHERE id_produk = '$id' ");

    if($query){
        alert("Success to changed", "../view.php");
    }

    else{
        alert("Failed to edit data", "../view.php");
    }

?>