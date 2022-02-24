<?php
include './utils/CheckValidation.php';

session_start();

include '../database/connectDB.php';

$conn = connectDB();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name=$_POST["name"];
    $birthday=$_POST["birthday"];
    $email=$_POST["email"];
    $pass=$_POST["pass"];
    $rePass=$_POST["rePass"];


    if(!validateEmail($email)) {
        $_SESSION["error"] = "Email invalidate";
        header("location: ./Register.php");
        goto endpoint;
    }

    if(!checkPassword($pass)){
        $notification = getValidatePassword($pass);
        $_SESSION["error"] = $notification;
        $_SESSION["oldData"] = ["name" => $name,"email" => $email];
        header("location:./Register.php");
        goto endpoint;
    }

    if($pass !=$rePass){
        $_SESSION["error"] = "Password does not match";
        $_SESSION["oldData"] = ["name" => $name,"email" => $email];
        header("location: ./Register.php");
    }else{
        $pass = md5($pass);
        $addUser = "Insert into user(email,password,name) values('$email','$pass','$name')";
        $user=$conn->query($addUser);
        if($user){
            $_SESSION["error"] = "Register successfully";
            $_SESSION["oldData"] = ["name" => $name,"email" => $email];
            header("location: ./Register.php");
        }else{
            echo "Lỗi server";
        }
    }
    endpoint:
}