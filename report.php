<?php

// $asset = query("SELECT * FROM asset");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <label for="">Filter By</label>
    <select name="" id="">
        <option value="entry">Date Of Entry</option>
        <option value="risk">Risk Of Damage</option>
        <option value="category">Category</option>
        <option value="type">Type</option>
        <option value="maintenance">Maintenance</option>
    </select>
    <label for="">Date</label>
    <input type="date" name="date" id="date">

    <h1>List Of Maintenance</h1>
    <a href="createprocurement.php">Add Project</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>id</th>
            <th>Nama Aset</th>
            <th>Quantity</th>
            <th>Type</th>
            <th>Category</th>
            <th>Date Maintenance</th>
            <th>Status</th>
            <th>Risk</th>
        </tr>
        <!-- Looping untuk menampilkan array dari $procurement diambil dari tabel -->
        <?php foreach($asset as $row):?> 
        <tr>
            <td><?= $row["id_asset"];?></td>
            <td><?= $row["name_asset"];?></td>
            <td><?= $row["qty_asset"];?></td>
            <td><?= $row["date_asset"];?></td>
            <td><?= $row["maintenance_asset"];?></td>
            <td><?= $row["type_asset"];?></td>
            <td><?= $row["cat_asset"];?></td>
            <td><?= $row["desc_asset"];?></td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>