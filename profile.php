<?php
session_start();
include_once("db.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p><a href="home.php">Home</a></p>
<?php
    echo "Username is " . $_SESSION["username"]."<br>";
    echo "Password is " . $_SESSION["password"];
?>
</body>
</html>