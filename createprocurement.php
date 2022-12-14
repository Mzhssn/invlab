<?php
require 'function.php';
if(isset($_POST['submit'])){
    //Cek data berhasil masuk
    if(addproc($_POST)>0 ){
        echo "
        <script>
        alert('data berhasil ditambahkan');
        document.location.href='homeprocurement.php';
        </script>";
    } else{echo "
        <script>
        alert('data gagal ditambahkan');
        document.location.href='createprocurement.php';
        </script>";
}}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Management Procurement</title>
</head>
<body>
    <h1>Create New Project</h1>
    <form action="" method="POST">
    <label for="">Nama Aset</label>
    <input type="text" name="name" id="n" required>
    <label for="">Tanggal </label>
    <input type="date" name="date" id="d" required>
    <label for="">Tipe</label>
    <select name="tag" id="">
        <option value="elektronik">Elektronik</option>
        <option value="furnitur">Kortail</option>
        <option value="dapur">WarmingUP</option>
        <option value="perkantoran">Perkantoran</option>
        <option value="pertukangan">pertukangan</option>
    </select>
    <label for="">Kategori</label>
    <select name="category" id="">
        <option value="kolab">Ko+Lab</option>
        <option value="kortail">Kortail</option>
        <option value="warmingup">WarmingUP</option>
    </select>
    <label for="">Deskripsi</label>
    <input type="text" name="desc" id="d" required>
    <button>Cancel</button> 
    <button type="submit" name="submit">Create</button>
    </form>    
</body>
</html>