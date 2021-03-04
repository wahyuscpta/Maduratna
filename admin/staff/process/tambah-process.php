<?php

    include "../../../config/conn.php";
    require_once "../../../config/helper.php";

    $a = $_FILES['gambar']['name'];
    $b = $_POST['nama'];
    $c = $_POST['job'];
    $d = $_POST['desc'];

    move_uploaded_file($_FILES['gambar']['tmp_name'], "../gambar/".$a);

    $query = mysqli_query($conn, "INSERT INTO tb_staff VALUES ('', '$b', '$c', '$d', '$a')");

    if($query){
        header("location:../view.php?pesan=input");
    }

    else{
        header("location:../view.php?pesan=error");
    }

?>