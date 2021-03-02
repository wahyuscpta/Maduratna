<?php

    require_once "../../../config/conn.php";
    require_once "../../../config/helper.php";

    $a = $_GET['id'];

    $query = mysqli_query($conn, "DELETE FROM tb_staff WHERE id_staff='$a' ");

    if(!$query){
        alert("Data failed to delete", "../view.php");
    }

    else{
        alert("Data has been deleted", "../view.php");
    }

?>