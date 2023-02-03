<?php
include_once("db.php");


if(isset($_POST["register"])){
    $uname = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    if(!empty($uname) && !empty($email) && !empty($password)){
        $verify = mysqli_query($conn, "SELECT * FROM user WHERE USERNAME = '$uname' OR EMAIL = '$email' ");
        $records = mysqli_fetch_assoc($verify);

        if(!$records){
            $q = mysqli_query($conn, "INSERT INTO user(USERNAME, EMAIL, PASSWORD) VALUES('$uname','$email','$password')");
            if($q){
                echo "<h1> Account successfully created</h1>";
            }
        }
        else{
            echo "User Already Exists";
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
        <label>Email</label>
        <br>
        <input type="email" name="email" id="">
        <br>
        <label>Password</label>
        <br>
        <input type="password" name="password" id="">
        <br>
        <br>
        <button type="submit" name="register">Register</button>
        <p>Already have an account? <a href="index.php">Login Here</a></p>
    </form>
</body>
</html>