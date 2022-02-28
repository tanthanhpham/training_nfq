<?php

session_start();
include '../config/connectDB.php';
include "../utils/utils.php";

$view = $_GET['view'] ?? '';

if ($view == 'signup') {
    include '../resource/views/user/register.php';
} elseif ($view == 'signin') {
    include '../resource/views/user/login.php';
    include '../controllers/user/HandleLogin.php';
} elseif (!isset($_SESSION["loggedIn"])) {
    header('location: /?view=signin');
} elseif ($view == 'logout') {
    include('../controllers/user/Logout.php');
} else {
    include '../resource/views/layout.php';
}
