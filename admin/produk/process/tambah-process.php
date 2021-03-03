<?php

    include "../../../config/conn.php";
    require_once "../../../config/helper.php";

    $a = $_FILES['gambar']['name'];
    $b = $_POST['nama'];
    $c = $_POST['desc'];
    $d = $_POST['harga'];
    $e = $_POST['fitur_1'];
    $f = $_POST['fitur_2'];
    $g = $_POST['fitur_3'];    

    move_uploaded_file($_FILES['gambar']['tmp_name'], "../gambar/".$a);

    $query = mysqli_query($conn, "INSERT INTO tb_produk VALUES ('', '$b', '$c', '$d', '$a', '$e', '$f', '$g')");

    if($query){
        alert("Success to add Product", "../view.php");
    }

    else{
        alert("Failed to add Product", "../view.php");
    }

?>