<?php

    require_once "../../../config/conn.php";
    require_once "../../../helper/alert.php";

    $a = $_GET['id'];

    $query = mysqli_query($conn, "DELETE FROM tb_testimoni WHERE id_testi='$a' ");

    if(!$query){
        gagal("Data failed to delete", "../view.php");
    }

    else{
        sukses("Data has been deleted", "../view.php");
    }

?>