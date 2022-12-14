<?php
require 'function.php';

$asset = query("SELECT asset.asset_id,asset.asset_name,asset.asset_date,asset.asset_description,maintainance.maint_date,tag.tag FROM asset INNER JOIN maintainance ON asset.asset_id=maintainance.asset_id INNER JOIN tag ON maintainance.asset_id=tag.asset_id");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css\style.css">
</head>
<body>
    <nav class="vertikal">
        <ul>
            <li><a href="index.php">Dashboard</a></li>
            <li><a href="maintenance.php">Maintenance Asset</a></li>
            <li><a href="report.php">Inventory Report</a></li>
            <li><a href="homeprocurement.php">Management Procurement</a></li></li>
        </ul>    
    </nav>
    <h1>List Of Maintenance</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>id</th>
            <th>Nama Aset</th>
            <th>Tanggal Terdaftar</th>
            <th>Tanggal Perawatan</th>
            <th>type</th>
            <th>Description</th>
        </tr>
        <!-- Looping untuk menampilkan array dari $procurement diambil dari tabel -->
        <?php foreach($asset as $row):?> 
            <tr>
                <td><?= $row["asset_id"];?></td>
                <td><?= $row["asset_name"];?></td>
                <td><?= $row["asset_date"];?></td>
                <td><?= $row["maint_date"];?></td>
                <td><?= $row["tag"];?></td>
                <td><?= $row["asset_description"];?></td>
            </tr>
        <?php endforeach ?>

    </table>
</body>
</html>