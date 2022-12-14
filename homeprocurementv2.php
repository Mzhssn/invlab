<?php
use LDAP\Result;

//Koneksi
require 'function.php';

// $select = query("SELECT procurement.proc_id,procurement.proc_name,procurement.proc_date,procurement.proc_description,
// procurement.proc_status,category.category FROM procurement INNER JOIN category ON procurement.category_id=category.proc_id;");


$select = query("SELECT procurement.proc_id,procurement.proc_name,procurement.proc_date,procurement.proc_description,
procurement.proc_status FROM procurement;");

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
                <!-- <th>Category</th> -->
                <th>Action</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach($select as $row):?>
            <tr>
                <td><?= $row["proc_id"];?></td>
                <td><?= $row["proc_name"];?></td>
                <td><?= $row["proc_date"];?></td>
                <td><?= $row["proc_description"];?></td>
                <td><?= $row["proc_status"];?></td>
                <td>
                    <a href="delete.php?proc_id=<?= $row['proc_id'];?>">Cancel</a>
                    <a href="update2.php">Process</a>
                </td>
            </tr>
            <?php $i++ ?>
            <?php endforeach ?>
        </table>
    
</body>
</html>