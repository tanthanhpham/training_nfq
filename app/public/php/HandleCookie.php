<?php
session_start();
$id = $_SESSION['loggedIn'];
$cookieName = $id."-chooseOption";
if (isset($_POST['programingLanguages'])) {
    setcookie($cookieName, $_POST['programingLanguages'], time() + (3600), "/");
}
echo 'thanhcong';
