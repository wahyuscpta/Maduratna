<?php

    require_once "../../../config/conn.php";
    require_once "../../../config/helper.php";

    $id = $_GET['id'];

    $sql = mysqli_query($conn, "SELECT * FROM tb_pesan WHERE id_pesan='$id' ");
    $result = mysqli_fetch_assoc($sql);

    $a = $result['nama'];
    $b = $result['email'];
    $c = $result['pesan'];

    $query = mysqli_query($conn, "INSERT INTO tb_testimoni VALUES ('', '$a', '$b', '$c')");
    
    if($query){
        header("location:../view.php?pesan=input");
    }

    else{
        header("location:../view.php?pesan=error");
    }

?>