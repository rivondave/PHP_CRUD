<?php
$conn = mysqli_connect("localhost","root","","challenge"); //hostname, username, password, database

if(!$conn){
    echo 'This is not connected to the database';
}
?>