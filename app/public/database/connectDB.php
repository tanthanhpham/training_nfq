<?php
    $serverName = "docker_php";
    $userName="root";
    $dbName="training_nfq";
    $passWord="password";

try {
    $conn = new PDO("mysql:host=$serverName;dbname=$dbName;$userName;$passWord");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connect successfully";
} catch (PDOException $e){
    echo "Connection failed: ". $e->getMessage();
}