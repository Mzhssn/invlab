<?php
require 'function.php';
// $user = query("SELECT * from users");
if(isset($_POST['submit'])){
    //Cek data berhasil masuk
    if(procurement($_POST)>0 ){
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
    <label for="">Title</label>
    <input type="text" name="title" id="tl" required>
    <label for="">Date</label>
    <input type="date" name="date" id="dt" required>
    <label for="">Description</label>
    <input type="text" name="description" id="des" required>    
    <!-- <label for="">Type</label>
    <input type="text" name="type" id="tp" required> -->
    <label for="">Category</label>
    <input type="text" name="category" id="cat" required>
    <button>Cancel</button>
    <button type="submit" name="submit">Create</button>
    </form>    
</body>
</html>