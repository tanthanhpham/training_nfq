<?php

include '../database/connectDB.php';

$conn = connectDB();

$email = $_POST['email'];

$checkEmail = "SELECT * FROM users WHERE email = '$email'";
$check=$conn->query($checkEmail);

if(mysqli_num_rows($check) > 0){
    echo "1";
}else echo "0";


