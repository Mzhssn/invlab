<?php 
require "function.php";

if(isset($_POST["submit"])){
    //Cek apakah data berhasil diupdate
    if(updatev2()($_POST)>0){
        echo "
        <script>
        alert('data berhasil diupdate');
        document.location.href='homeprocurementv2.php';
        </script>";
    }else{"
        <script>
        alert('data gagal diupdate');
        document.location.href='homeprocurementv2.php';
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Status</title>
</head>
<body>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Nama Aset</td>
                <td>:</td>
                <td><input type="text" name="name" id="nm"  required></td>
                <td>Tanggal Selesai</td>
                <td>:</td>
                <td><input type="date" name="enddate" id=""></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">Update</button></td>
            </tr>
            
        </table>
    </form>
    
</body>
</html>