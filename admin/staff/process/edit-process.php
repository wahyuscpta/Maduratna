<?php

    require_once "../../../config/conn.php";
    require_once "../../../config/helper.php";

    $id = $_POST['id'];
    $a = $_FILES['gambar']['name'];
    $b = $_POST['nama'];
    $c = $_POST['job'];
    $d = $_POST['desc'];

    if(!empty($a)){

        move_uploaded_file($_FILES['gambar']['tmp_name'], "../gambar/".$a);
        $query = mysqli_query($conn, "UPDATE tb_staff SET gambar = '$a' WHERE id_staff = '$id' ");

    }

    $query = mysqli_query($conn, "UPDATE tb_staff set nama = '$b', job='$c', desc_staff='$d' WHERE id_staff = '$id' ");

    if($query){
        header("location:../view.php?pesan=update");
    }

    else{
        header("location:../view.php?pesan=error");
    }

?>