<?php

    require_once "../../../config/conn.php";
    require_once "../../../config/helper.php";

    $a = $_GET['id'];

    $query = mysqli_query($conn, "DELETE FROM tb_pesan WHERE id_pesan='$a' ");

    if($query){

        header("location:../view.php?pesan=hapus"); 
    }
    
    else{
        header("location:../view.php?pesan=error");

    }

?>