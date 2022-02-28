<?php

/**
 * @param $email
 * @param $conn
 * @return bool
 */
function checkExistedEmail($email, $conn): bool
{
    $checkEmail = "SELECT * FROM users WHERE email = '$email'";
    $check = $conn->query($checkEmail);
    if (mysqli_num_rows($check) > 0) {
        return true;
    } else {
        return  false;
    }
}
