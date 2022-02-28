<?php

include '../utils/CheckValidation.php';
session_start();
$conn = connectDB();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    if (!validateEmail($email)) {
        $_SESSION["error"] = "Email invalidate";
        header("location: /?view=signin");
        return ;
    }

    $pass = md5($pass);
    $findUser = "Select * from users where email = '$email'";
    $user = $conn->query($findUser);
    if (mysqli_num_rows($user) > 0) {
        $row = mysqli_fetch_assoc($user);
        if ($pass == $row['password']) {
            $_SESSION['loggedIn'] = $row['id'];
            header("location: /");
        } else {
            $_SESSION["error"] = "Password incorrect";
            header("location: /?view=signin");
        }
    } else {
        $_SESSION["error"] = "Email incorrect";
        header("location: /?view=signin");
    }
}
