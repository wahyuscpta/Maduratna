<?php

    require_once "../../../config/conn.php";
    require_once "../../../config/helper.php";

    $id = $_POST['id'];
    $a = $_FILES['gambar']['name'];
    $b = $_POST['nama'];
    $c = $_POST['job'];
    $d = $_POST['desc'];

    if($_FILES["gambar"]["error"] === 4){
        
        $a = $h;

        $query = mysqli_query($conn, "UPDATE tb_staff set nama = '$b', job='$c', desc_staff='$d', $gambar='$a' WHERE id_staff = '$id' ");

        if($query){
            alert("Data Berhasil Diupdate", "../view.php");
        }
    
        else{
            alert("Data Gagal Diupdate", "../view.php");
        }    

    } else {
        
        $size = $_FILES['gambar']["size"];
        $error = $_FILES["gambar"]["error"];
        $ekstensiValid = ['jpg', 'png', 'jpeg']; 
        $tmpName = $_FILES["gambar"]["tmp_name"];

        // CEK EKSTENSI GAMBAR

        $ekstensiGambar = explode('.', $a);
        $ekstensiGambar = strtolower(end($ekstensiGambar));

        if(!in_array($ekstensiGambar, $ekstensiValid)){
            
            alert("Silahkan Upload Gambar dengan Benar", '../view.php');

        } else {

            // CEK SIZE GAMBAR

            if ($size > 2000000){

                alert("Maksimal Size Gambar 2MB", "../view.php");

            } else {
                
                // GENERATE NAMA BARU

                $namaFileBaru = uniqid();
                $a = $namaFileBaru.'.'.$ekstensiGambar;

                move_uploaded_file($_FILES['gambar']['tmp_name'], "../gambar/".$a);

                $query = mysqli_query($conn, "UPDATE tb_staff set nama = '$b', job='$c', desc_staff='$d', gambar='$a' WHERE id_staff = '$id' ");

                if($query){
                    alert("Data Berhasil Diupdate", "../view.php");
                }
            
                else{
                    alert("Data Gagal Diupdate", "../view.php");
                }            
                
            }

        }

    }

?>