<?php

    require_once "../../../config/conn.php";
    require_once "../../../config/helper.php";

    $a = $_POST['nama'];
    $b = $_POST['email'];
    $c = $_POST['pesan'];

    $query = mysqli_query($conn, "INSERT INTO tb_testimoni VALUES ('', '$a', '$b', '$c')");
    
    if(!$query){
        alert("Failed to change data", "../view.php");
    }

    else{
        alert("Data has been changed", "../view.php");
    }

?>