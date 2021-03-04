<?php

    require_once "../../../config/conn.php";
    require_once "../../../config/helper.php";

    $a = $_GET['id'];

    $query = mysqli_query($conn, "DELETE FROM tb_staff WHERE id_staff='$a' ");

    if(!$query){
        header("location:../view.php?pesan=error");
    }

    else{
        header("location:../view.php?pesan=hapus");
    }

?>