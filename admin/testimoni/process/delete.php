<?php

    require_once "../../../config/conn.php";
    require_once "../../../config/helper.php";

    $a = $_GET['id'];

    $query = mysqli_query($conn, "DELETE FROM tb_testimoni WHERE id_testi='$a' ");

    if($query){
        header("location:../view.php?pesan=hapus");         
    }

    else{
        header("location:../view.php?pesan=error");    
    }

?>