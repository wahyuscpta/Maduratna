<!DOCTYPE html>
<html>
<head>
 <title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
    <a href="index.php">Lihat Semua Data</a>
    
    <br/>
    <h3>Edit data</h3>
    
    <?php
        include "koneksi.php";
        $id = $_GET['id'];
        $query_mysql = mysqli_query($host, "SELECT * FROM user WHERE id='$id'");
        $nomor = 1;
        while($data = mysqli_fetch_array($query_mysql)){
    ?>
    <form action="proses/update.php" method="post"> 
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="hidden" name="id" value="<?= $data['id'] ?>">
                    <input type="text" name="nama" value="<?= $data['nama'] ?>">
                </td> 
            </tr> 
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?= $data['alamat'] ?>"></td> 
            </tr> 
            <tr>
                <td>Pekerjaan</td>
                <td><input type="text" name="pekerjaan" value="<?= $data['pekerjaan'] ?>"></td> 
            </tr> 
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td> 
            </tr> 
        </table>
    </form>
    <?php } ?>
    
</body>
</html>