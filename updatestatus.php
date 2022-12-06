<?php 
require "function.php";

// //Ambil data di URL
// $id = $_GET["id"];
// //Query data mahasiswa berdasarkan id
// $tamu = query("select*from myguest where id =$id");
// var_dump($tamu["firstname"]);

//Cek tombol submit udah ditekan atau belum
if(isset($_POST["submit"])){
    //Cek apakah data berhasil diupdate
    if(updatestat($_POST)>0){
        echo "
        <script>
        alert('data berhasil diupdate');
        document.location.href='homeprocurement.php';
        </script>";
    }else{"
        <script>
        alert('data gagal diupdate');
        document.location.href='homeprocurement.php';
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
                <td>Title</td>
                <td>:</td>
                <td><input type="text" name="title" id="ti"  required></td>
                <td>End Date</td>
                <td>:</td>
                <td><input type="text" name="enddate" id="ed"  required></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">Update</button></td>
            </tr>
            
        </table>
    </form>
    
</body>
</html>