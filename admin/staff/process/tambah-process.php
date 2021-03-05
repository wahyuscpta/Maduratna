<?php

    include "../../../config/conn.php";
    require_once "../../../config/helper.php";

    $a = $_FILES['gambar']['name'];
    $b = $_POST['nama'];
    $c = $_POST['job'];
    $d = $_POST['desc'];

    $size = $_FILES['gambar']["size"];
    $error = $_FILES["gambar"]["error"];
    $ekstensiValid = ['jpg', 'png', 'jpeg']; 
    $tmpName = $_FILES["gambar"]["tmp_name"];

    if ($error === 4){

        $query = mysqli_query($conn, "INSERT INTO tb_staff VALUES ('', '$b', '$c', '$d', '')");
        
        if($query){
            alert("Data Berhasil Ditambahkan", "../view.php");
        }
    
        else{
            alert("Data Gagal Ditambahkan", "../view.php");
        }        

    } else{

        // CEK SIZE GAMBAR

        if ($size > 200000){

            alert("Maksimal Size Gambar 2MB", "../view.php");

        } else {
            
            // GENERATE NAMA BARU

            $namaFileBaru = uniqid();
            $a = $namaFileBaru.$ekstensiGambar;

            move_uploaded_file($_FILES['gambar']['tmp_name'], "../gambar/".$a);

            $query = mysqli_query($conn, "INSERT INTO tb_staff VALUES ('', '$b', '$c', '$d', '$a')");

            if($query){
                alert("Data Berhasil Ditambahkan", "../view.php");
            }
        
            else{
                alert("Data Gagal Ditambahkan", "../view.php");
            }            
            
        }

    }

?>