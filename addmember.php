<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Member</title>
</head>
<body>
<form action="" method="POST">
        <table>
            <!--Input First&Last Name-->
            <tr>
                <td>
                <input type="text" name="firstname" placeholder="First Name" size="20" id='fn' required> 
                <input type="text" name="lastname" placeholder="Last Name" size="20" id="ln" required>
                </td>
            </tr>            
            <!-- Input Username-->
            <tr>
                <td><input type="text" name="username" placeholder="Username" size="46" id="un" required></td>
            </tr>
            <!--Input Phone-->
            <tr>
                <td><input type="text" name="phone" placeholder="Phone" size="46" id="ph" required></td>
            </tr>
            <!--Input Email-->
            <tr>
                <td><input type="text" name="email" placeholder="Email" size="46" id='em' required></td>
            </tr>
            <!-- Cancel & Sign-Up Button -->
            <tr>
                <td>
                    <div class="cancelsubmit">
                    <button type="button" class="cancelbtn">CANCEL</button>
                    <button type="submit" name="submit" class="signupbtn">ADD</button>
                  </div>
                </td>
            </tr>
        </table>
    </form>
    
</body>
</html>