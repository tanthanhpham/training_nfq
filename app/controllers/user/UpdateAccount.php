<?php

session_start();

$conn = connectDB();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_SESSION['loggedIn'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $fileName = $_FILES['avatar']['name'];

    $fileURL = "images/" . $fileName;
    $addInfo = "Update users set name='$name', address = '$address', email = '$email', country = '$country' where id = $id";
    $user = $conn->query($addInfo);

    if ($user) {
         echo "<div class=\"alert alert-success\" style=\" margin-left: 1rem \">
            Update successfully. 
        </div>";
    } else {
        $_SESSION['loggedIn'] = $id;
        header('location:  /?view=account-detail');
    }
}
