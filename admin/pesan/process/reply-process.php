<?php

    require_once "../../../config/conn.php";
    require_once "../../../config/helper.php";

    $id = $_GET['id'];

    $query = mysqli_query($conn, "UPDATE tb_pesan SET status=1 WHERE id_pesan='$id' ");
    
    if($query){
        header("location:../view.php?pesan=input");
    }

    else{
        header("location:../view.php?pesan=error");
    }

?>