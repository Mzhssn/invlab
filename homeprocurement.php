<?php
use LDAP\Result;

//Ambil data mahasiswa dari result
//mysqli_fetch_row() = mengembalikan array numerik (indexnya angka)
//mysqli_fetch_assoc() = mengembalikan array assosiatif 
//mysqli_fetch_array() = mengembalikan array numerik dan assosiatif
//mysqli_fetch_object() = mengembalikan object

// while($pengunjung = mysqli_fetch_assoc($result)){
// var_dump($pengunjung["lastname"]);}

//var_dump($result); 
// if(!$result){
//     echo mysqli_error($conn);
// };
//Koneksi
require'function.php';
// //Ambil data dari myguests dan phones
$procurement = query("SELECT * from procurement");

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
    <nav>
        <ul>
            <li><a href="index.php">Dashboard</a></li>
            <li><a href="maintenance.php">Maintenance Asset</a></li>
            <li><a href="report.php">Inventory Report</a></li>
            <li><a href="homeprocurement.php">Management Procurement</a></li></li>
        </ul>    
    </nav>

    <h1>List Of Procurement</h1>
    <a href="createprocurement.php">Add Project</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>id</th>
            <th>Title</th>
            <th>Quantity</th>
            <th>Date</th>
            <th>Picture</th>
            <th>Type</th>
            <th>Category/th>
            <th>Description</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php foreach($procurement as $row):?>
        <tr>
            <!-- <td>
                <a href="update3.php">Ganti</a> |
                <a href="hapus.php">Hapus</a>
            </td> -->
            <td><?= $row["id_proc"];?></td>
            <td><?= $row["title_proc"];?></td>
            <td><?= $row["qty_proc"];?></td>
            <td><?= $row["date_proc"];?></td>
            <td><?= $row["picture_proc"];?></td>
            <td><?= $row["type_proc"];?></td>
            <td><?= $row["cat_proc"];?></td>
            <td><?= $row["desc_proc"];?></td>
            <td><?= $row["stat_proc"];?></td>
            <td>
                <a href="delete.php">Cancel</a>
                <a href="updatrestatus.php">Process</a>
            
            </td>
        </tr>
        <?php endforeach ?>
    </table>
    
</body>
</html>