<?php

if (isset($_POST['programingLanguages'])) {
    setcookie("chooseOption", $_POST['programingLanguages'], time() + (3600), "/");
}
echo 'thanhcong';
