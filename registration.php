<?php
require 'function.php';
$regis = query("SELECT * from users");

if(isset($_POST['submit'])){
    //Cek data berhasil masuk
    if(regis($_POST)>0 ){
        echo "
        <script>
        alert('data berhasil ditambahkan');
        </script>";
    } else{echo "
        <script>
        alert('data gagal ditambahkan');
        </script>";
}}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <h2>REGISTRATION</h2>
    <form action="" method="POST">
        <table>
            <tr>
                <td><input type="text" name="id" placeholder="iduser" size="46" id="id" required></td>
            </tr>
            <!-- Input Username-->
            <tr>
                <td><input type="text" name="username" placeholder="Username" size="46" id="un" required></td>
            </tr>
            <!--Input Password-->
            <tr>
                <td><input type="text" name="password" placeholder="Password" size="46" id='pw' required></td>
            </tr>
            <!--Input Email-->
            <tr>
                <td><input type="text" name="email" placeholder="Email" size="46" id='em' required></td>
            </tr>
            <!--Input Phone-->
            <tr>
                <td><input type="text" name="phone" placeholder="Phone" size="46" id="ph" required></td>
            </tr>
            <!--Input First&Last Name-->
            <tr>
                <td>
                <input type="text" name="firstname" placeholder="First Name" size="20" id='fn' required> 
                <input type="text" name="lastname" placeholder="Last Name" size="20" id="ln" required>
                </td>
            </tr>
            <!--Input Faculty-->
            <tr>
                <td><input type="text" name="faculty" placeholder="Faculty" size="46" id='fc' required></td>
            </tr>
            <!--Input Department-->
            <tr>
                <td> <input type="text" name="department" placeholder="Department" size="46" id="dt" required></td>
            </tr>
            <!--Input Organization/Start Up-->
            <tr>
                <td> <input type="text" name="organization" placeholder="Organization/Start Up" id='or' size="46" required></td>
            </tr>
            <!-- Cancel & Sign-Up Button -->
            <tr>
                <td>
                    <div class="cancelsubmit">
                    <button type="button" class="cancelbtn">CANCEL</button>
                    <button type="submit" name="submit" class="signupbtn">SIGN-UP</button>
                  </div>
                </td>
            </tr>
        </table>
    </form>

    
</body>
</html>