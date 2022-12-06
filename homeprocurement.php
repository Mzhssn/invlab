<?php
use LDAP\Result;

//Koneksi
require'function.php';
// // //Ambil data dari myguests dan phones
// $procurement = query("SELECT * from procurement");
// $category = query("SELECT * from category");
// $picture = query("SELECT * from picture");
// $type = query("SELECT * from type");
$select = query("SELECT procurement.proc_id,procurement.proc_name,procurement.proc_date,procurement.proc_description
 FROM asset INNER JOIN tag ON asset.asset_id=tag.asset_id;");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Management Procurement</title>
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

    <h1>List Of Procurement</h1>
    <a href="createprocurement.php">Add Project</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>id</th>
            <th>Title</th>
            <th>Date</th>
            <th>Description</th>
            <th>Status</th>
            <th>Action</th>
            <th>Type</th>
            <th>Action</th>
        </tr>
        <?php foreach($select as $row):?>
        <tr>
            <td><?= $row["proc_id"];?></td>
            <td><?= $row["proc_name"];?></td>
            <td><?= $row["proc_date"];?></td>
            <td><?= $row["proc_description"];?></td>
            <td><?= $row["proc_status"];?></td>
            <td><?= $row["tag"];?></td>
            <td><?= $row["category"];?></td>
            <td>
                <a href="delete.php">Cancel</a>
                <a href="updatrestatus.php">Process</a>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
    
</body>
</html>