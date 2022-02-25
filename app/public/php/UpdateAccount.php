<?php

session_start();

include '../database/connectDB.php';

$conn = connectDB();

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_SESSION['loggedIn'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $fileName = $_FILES['avatar']['name'];

//    var_dump(move_uploaded_file($_FILES['avatar']['tmp_name'], "./images/".$fileName));
    $fileURL = "images/".$fileName;


    $addInfo = "Update users set name='$name', address = '$address', email = '$email', country = '$country' where id = $id";
    $user = $conn->query($addInfo);

    if($user){
        echo "Cap nhat thanh cong";
    }else{
        $_SESSION['loggedIn']= $id;
        header('location: /?view=account-detail');
    }
}
