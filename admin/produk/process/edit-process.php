<?php

    require_once "../../../config/conn.php";
    require_once "../../../config/helper.php";

    $id = $_POST['id'];
    $a = $_FILES['gambar']['name'];
    $b = $_POST['nama'];
    $c = $_POST['harga'];
    $d = $_POST['desc'];
    $e = $_POST['fitur_1'];
    $f = $_POST['fitur_2'];
    $g = $_POST['fitur_3'];
    $h = $_POST['gambarLama'];

    // CEK GAMBAR BARU

    if($_FILES["gambar"]["error"] === 4){
        
        $a = $h;

        $query = mysqli_query($conn, "UPDATE tb_produk set nama_produk = '$b', harga='$c', desc_produk='$d', gambar='$a', fitur_1='$e', fitur_2='$f', fitur_3='$g' WHERE id_produk = '$id' ");

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

            if ($size > 200000){

                alert("Maksimal Size Gambar 2MB", "../view.php");

            } else {
                
                // GENERATE NAMA BARU

                $namaFileBaru = uniqid();
                $a = $namaFileBaru.'.'.$ekstensiGambar;

                move_uploaded_file($_FILES['gambar']['tmp_name'], "../gambar/".$a);

                $query = mysqli_query($conn, "UPDATE tb_produk set nama_produk = '$b', harga='$c', desc_produk='$d', gambar='$a', fitur_1='$e', fitur_2='$f', fitur_3='$g' WHERE id_produk = '$id' ");

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