<?php

include '../utils/CheckValidation.php';
include '../utils/CheckExistedEmail.php';
include '../utils/SetNotification.php';

session_start();

$conn = connectDB();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $birthday = $_POST["birthday"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $rePass = $_POST["rePass"];

    if ($email == '') {
        setNotification('error', 'Please input value in email field');
        $_SESSION["oldData"] = ["name" => $name,"email" => $email];
        header("location: /?view=signup");
        return;
    }
    if (checkExistedEmail($email, $conn)) {
        setNotification('error', 'Email existed, please sign in or use other one');
        $_SESSION["oldData"] = ["name" => $name,"email" => $email];
        header("location: /?view=signup");
        return;
    }

    if (!validateEmail($email)) {
        setNotification('error', 'Email invalidate');
        $_SESSION["oldData"] = ["name" => $name,"email" => $email];
        header("location: /?view=signup");
        return;
    }

    if (!checkPassword($pass)) {
        $notification = getValidatePassword($pass);
        setNotification('error', $notification);
        $_SESSION["oldData"] = ["name" => $name,"email" => $email];
        header("location:/?view=signup");
        return;
    }

    if ($pass != $rePass) {
        setNotification('error', 'Password does not match');
        $_SESSION["oldData"] = ["name" => $name,"email" => $email];
        header("location: ./register.php");
    } else {
        $pass = md5($pass);
        $addUser = "Insert into users(email,password,name) values('$email','$pass','$name')";
        $user = $conn->query($addUser);
        $last_id = mysqli_insert_id($conn);
        if ($user) {
            $_SESSION['loggedIn'] = $last_id;
            header("location: ../index.php");
        } else {
            echo "Lỗi server";
        }
    }
}
