<?php
/**
 * @return mysqli|void
 */
function connectDB(){
    $servername = "db";
    $username="root";
    $dbname="training_nfq";
    $password="password";

    $conn = mysqli_connect($servername,$username,$password,$dbname,3306);

    if(!$conn){
        die('Could not connect');
    }
    return $conn;
}


