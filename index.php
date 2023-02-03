<?php
session_start();
include_once("db.php");

if(isset($_POST["login"])){
    $uname = $_POST["name"];
    $password = $_POST["password"];

    if(!empty($uname) && !empty($password)){
        $q = mysqli_query($conn, "SELECT * FROM user WHERE USERNAME = '$uname' AND PASSWORD = '$password' ");
        $records = mysqli_fetch_assoc($q);

        if($records){
            $_SESSION["username"] = $uname;
            $_SESSION["password"] = $password;
            echo header("Location: home.php");
        }else{
            echo "<h1> Incorrect username or password! </h1>";
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
    <script language="javascript" type="text/javascript">
    window.history.forward();
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <title>Instagram</title>
</head>
<body>

<div class="container">
    <div class="row">

        <div class="col">
            <h1>Facebook</h1>
        </div>

        <div class="col">
            <form action="" method="POST">
                
                <input type="text" name="name" id="" placeholder="Username">
                <br>
                <input type="password" name="password" id="password" placeholder="Password">
                <i class="bi bi-eye-slash" id="togglePassword"></i>
                <br>
                <br>
                <button type="submit" name="login">Login</button>
                <p><a href="cpasswd.php">Forgotten Password?</a></p>
                <button type="submit"><a href="register.php">Create new account</a></button>
            </form>
        </div>
        
    </div>
</div>
    


<script>
    const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            this.classList.toggle("bi-eye");
        });
</script>
</body>
</html>