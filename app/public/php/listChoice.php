<?php

if (isset($_POST['programingLanguages'])) {
    setcookie("choosedOption", $_POST['programingLanguages'], time() + (86400 * 30), "/");
    header('location: ./listChoice.php');
}
