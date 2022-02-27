<?php
session_start();
include '../utils/utils.php';
include '../config/connectDB.php';

$view = $_GET['view'] ?? '';

if ($view == 'signup')
    include ('../resource/views/user/Register.php');
elseif ($view == 'signin')
    include ('../resource/views/user/Login.php');
elseif(!isset($_SESSION["loggedIn"])){
    header('location: /?view=signin');
}else include '../resource/views/layout.php';

