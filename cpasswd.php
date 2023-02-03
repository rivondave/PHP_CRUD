<?php
include_once("db.php");


if(isset($_POST["cpasswd"])){
    $uname = $_POST["name"];
    $newpassword = $_POST["newpassword"];
    $confirmpassword = $_POST["confirmpassword"];

    if(!empty($uname) && !empty($newpassword) && !empty($confirmpassword)){
        if($newpassword == $confirmpassword){
            $q = mysqli_query($conn, "UPDATE user SET PASSWORD = '$newpassword' WHERE USERNAME = '$uname' ");
        
            if($q){
                echo "Password successfully changed";
            }
            else{
                echo "<h1> Password could not be changed </h1>";
            }
        }
        else{
            echo "Password's do not match!";
        }
    }
    else{
        echo "<h1> Please fill all your form details </h1>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Instagram</title>
</head>
<body>
    <form action="" method="POST">
        <label>Username</label>
        <br>
        <input type="text" name="name" id="">
        <br>
        <label>New Password</label>
        <br>
        <input type="password" name="newpassword" id="">
        <br>
        <label>Confirm Password</label>
        <br>
        <input type="password" name="confirmpassword" id="">
        <br>
        <br>
        <button type="submit" name="cpasswd">Change Password</button>
        <p><a href="index.php">Login Here</a></p>
    </form>
</body>
</html>