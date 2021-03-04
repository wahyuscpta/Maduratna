<?php

    include "../../../config/conn.php";
    require_once "../../../config/helper.php";

    $b = $_POST['nama'];
    $c = $_POST['desc'];
    $d = $_POST['harga'];

    $query = mysqli_query($conn, "INSERT INTO tb_service VALUES ('', '$b', '$c', '$d')");

    if($query){
        header("location:../view.php?pesan=input");
    }

    else{
        header("location:../view.php?pesan=error");
    }

?>