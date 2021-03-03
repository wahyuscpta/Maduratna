<!DOCTYPE html>
<html>
<head>
 <title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <div class="wrapper">
                
        <?php 
            if(isset($_GET['pesan'])){

                $pesan = $_GET['pesan'];

                if($pesan == "input"){
                    echo "Data berhasil di input.";

                }else if($pesan == "update"){
                    echo "Data berhasil di update.";

                }else if($pesan == "hapus"){
                echo "Data berhasil di hapus.";
                
                }else{
                    echo "Proses Gagal.";
                }

            }
        ?>

        <br/>
        <br/>

        <a class="tombol" href="input.php">+ Tambah Data Baru</a>
        
        <h3>Data user</h3>
        <table border="1" class="table">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
            <th>Opsi</th> 
        </tr>
        
            <?php
                include "koneksi.php";
                $query = mysqli_query($host, "SELECT * FROM user");
                $nomor = 1;
                while($data = mysqli_fetch_array($query)){
            ?>

        <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['pekerjaan']; ?></td>
            <td>
                <a class="edit" href="edit.php?id=<?= $data['id']; ?>">Edit</a> |
                <a class="hapus" href="proses/hapus.php?id=<?= $data['id']; ?>">Hapus</a> 
            </td>
        </tr>

        <?php } ?>
        
        </table>
    </div>

</body>
</html>