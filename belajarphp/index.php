<?php

    $siswa = "John In The House";
    $angka = 19;

    echo $siswa ." ". $angka;

    //Menggabungkan Variable dengan string

    echo " Masih bersama " .$siswa. " dan masih berumur " .$angka. " tahun";

    echo "<br>";
    echo "<br>";

    //String
    $namaMantan = "Rose";
    $namaPacar  = "Dalang";

    echo $namaMantan. " sayang " .$namaPacar;

    echo "<br>";
    echo "<br>";

    echo strlen($namaPacar);
    echo "<br>";
    echo str_word_count($namaMantan);
    echo "<br>";
    echo strrev($namaMantan);
    echo "<br>";
    $kalimat = "Belajar pemrograman di malas ngoding";
    echo str_replace("Belajar","Tutorial",$kalimat);

    echo "<br>";
    echo "<br>";

    //Integer
    $umur  = 21;
    $angka = 20;
    
    echo "Umur " .$namaMantan. " " .$umur . " ";
    echo "Umur " .$namaPacar. " " .$angka;

    echo "<br>";
    echo "<br>";

    //Booelan
    $y = true;
    $x = false;
    
    echo $y;

    echo "<br>";
    echo "<br>";

    //Array
    $laundry = array("Kintod", "2KG", "10000");
    echo $laundry[2];

    echo "<br>";
    echo "<br>";

    //Pengkondisian

    $angka1 = 30;
    $angka2 = 25;

    if($angka1 > $angka2){
        echo "Angka satu lebih besar dari Angka dua";
    }else{
        echo "Angka dua lebih kecil dari Angka satu";
    }

    echo "<br>";
    echo "<br>";

    $teman = "Angga";
    if($teman == "Budi"){
        echo "Budi adalah teman saya";
    } else if($teman == "Prihan"){
        echo "Prihan adalah teman saya";
    } else{
        echo "Saya tidak punya teman";
    }

    echo "<br>";
    echo "<br>";

    // Function

    function tampilkan_nama($namaMantan){
        echo "Nama saya " .$namaMantan.  " Trip ke Bali";
    } 
        
    tampilkan_nama($namaMantan);

    echo "<br>";
    echo "<br>";

    // Switch Case

    $angka = 2;
    switch ($angka) {
    case 1:
    echo "Yusa sangat baik";
    break;

    case 2:
    echo "Tino Goblok";
    break;

    case 3:
    echo "Isi variabel angka adalah tiga";
    break;

    default:
    echo "Isi variabel tidak di temukan";
    break;
}

    echo "<br>";
    echo "<br>";


    // While

    $x = 1; 
 
    while($x <= 10) {
        echo "$x";
        $x++;
    } 

    echo "<br>";
    echo "<br>";

    // FOR
     
    for($kata=1; $kata<=10; $kata++){
        echo "Yoga memiliki kambing sebanyak ".$kata." ekor <br>";
    }

     
    //membuat array yang berisi nama buah-buahan
    $buah = array('semangka','jeruk','apel','anggur');
    //menampilkan data array dengan nomor urut 2
    echo $buah[2];
    
    echo "<br>";
    echo "<br>";

    //penamaan isi array
    $buah['semangka'] = "isinya merah";
    $buah['jeruk'] = "rasanya manis";
    $buah['apel'] = "warnanya merah";
    $buah['anggur'] = "harganya mahal";
    
    // menampilkan isi array yang bernama jeruk
    echo $buah['jeruk'];

    //penamaan isi array variabel buah
    $buah = array(
    'semangka' => "isinya merah",
    'jeruk' => "rasanya manis",
    'apel' => "warnanya merah",
    'anggur' => "harganya mahal"
   );
    
   // menampilkan isi array yang bernama jeruk
   echo $buah['jeruk'];

   echo "<br>";
   echo "<br>";

   $mahasiswa = array(
    'nama' => "John",
    'noabsen' => "19",
    'alamat' => "Bali",
    'tgllahir' => "2 Maret 2021"
   );
    
   // menampilkan isi array yang bernama jeruk
   echo $mahasiswa['nama'], $mahasiswa['noabsen'];

    
    //membuat array yang berisi nama buah-buahan
    $buah = array('semangka','jeruk','apel','anggur');
    //count() untuk menghitung isi array.
    for($x=0;$x<count($buah);$x++){
    echo $buah[$x]."
    ";
    }

    echo "<br>";
    echo "<br>";

    // Tanggal
 
    echo date('l, d-m-Y');
 
    echo "
    ";
    
    echo date('d / M / y');
    
    echo "
    ";
    
    echo date('D - M / Y');

        // menampilkan jam sekarang
    echo date('H:i:s a');
    
    echo "
    ";
    
    //kombinasi format tanggal dan jam
    echo date('l, d-m-Y  h:i:s a');

    echo "<br>";
    echo "<br>";


    // Include Required

    include('tes.php');


    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

?>

<form method="POST" action="tampil.php">
 <label>Masukkan Nama</label><br/>
 <input type="text" name="nama"><br/> 
 <label>Masukkan Jumlah Baju</label><br/>
 <input type="text" name="jumlah"><br/>
 <label>Masukkan Berat</label><br/>
 <input type="text" name="berat"><br/>
 <label>Masukkan Harga</label><br/>
 <input type="text" name="harga"><br/> 
 <input type="submit" value="oke">
</form>

<?php

    // Foreach
    $data = array("Doel", "Kintod", "Bocil");

    foreach($data as $d){
        echo $d."
       ";
    }
?>