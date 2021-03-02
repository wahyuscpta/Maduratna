<?php

    require_once "../../../config/conn.php";
    require_once "../../../config/helper.php";

    $a = $_POST['nama'];
    $b = $_POST['notelp'];
    $c = $_POST['email'];
    $d = $_POST['tanggal'];
    $e = $_POST['jam'];
    $f = $_POST['id'];

    $query = mysqli_query($conn, "UPDATE tb_appoinment SET nama='$a', notelp='$b', email='$c', tanggal='$d', id_jam='$e' WHERE id_appoinment='$f' ");
    
    if(!$query){
        alert("Failed to change data", "../view.php");
    }

    else{
        alert("Data has been changed", "../view.php");
    }

?>