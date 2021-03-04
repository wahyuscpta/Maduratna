<?php

    require_once "../../../config/conn.php";
    require_once "../../../config/helper.php";

    $id = $_POST['id'];
    $b = $_POST['nama'];
    $c = $_POST['harga'];
    $d = $_POST['desc'];

    $query = mysqli_query($conn, "UPDATE tb_service set nama = '$b', harga='$c', desc_service='$d' WHERE id_service = '$id' ");

    if($query){
        header("location:../view.php?pesan=update");
    }

    else{
        header("location:../view.php?pesan=error");
    }

?>