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
            header("location:../view.php?pesan=input");
        }
    
        else{
            header("location:../view.php?pesan=error");
        }        

    } else{

         // CEK EKSTENSI GAMBAR

         $ekstensiGambar = explode('.', $a);
         $ekstensiGambar = strtolower(end($ekstensiGambar));
 
         if(!in_array($ekstensiGambar, $ekstensiValid)){
             
             header("location:../view.php?pesan=bukanFoto");
 
         } else {

            // CEK SIZE GAMBAR

            if ($size > 2000000){

                header("location:../view.php?pesan=terlaluBesar");

            } else {
                
                // GENERATE NAMA BARU

                $namaFileBaru = uniqid();
                $a = $namaFileBaru.$ekstensiGambar;

                move_uploaded_file($_FILES['gambar']['tmp_name'], "../gambar/".$a);

                $query = mysqli_query($conn, "INSERT INTO tb_staff VALUES ('', '$b', '$c', '$d', '$a')");

                if($query){
                    header("location:../view.php?pesan=input");
                }
            
                else{
                    header("location:../view.php?pesan=error");
                }            
                
            }
        }

    }

?>