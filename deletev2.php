<?php
require 'function.php';

if(isset($_POST["submit"])){
    
  
    //Cek Data Berhasil Masuk
    if(del($_POST)>0 ){
        echo "
        <script>
        alert('data berhasil dihapus');
        document.location.href='index.php';
        </script>";
    } else{echo "
        <script>
        alert('data gagal dihapus');
        document.location.href='index.php';
        </script>";
    

}}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pengunjung</title>
</head>
<body>
    <h1>Hapus Data Pengunjung</h1>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Nama Asset</td>
                <td>:</td>
                <td><input type="text" name="assetname" id="an" value="Ketik Disini" required></td>
            </tr>
            <tr>
                <td>Alasan</td>
                <td>:</td>
                <td><input type="text" name="cause" id="cs" value="Ketik Disini" required></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">Hapus</button></td>
            </tr>
            
        </table>
    </form>
    
</body>
</html>