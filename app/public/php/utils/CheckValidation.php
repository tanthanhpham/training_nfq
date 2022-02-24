<?php
/**
 * @param $email
 * @return bool
 */
function validateEmail($email): bool
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

/**
 * @param $password
 * @return void
 */
function checkPassword($password){
    $flag=true;
    if( strlen($password ) < 8 ) {
        $flag=false;
    }
    if( strlen($password ) > 20 ) {
        $flag=false;
    }
    if( !preg_match("#[0-9]+#", $password ) ) {
        $flag=false;
    }
    if( !preg_match("#[a-z]+#", $password ) ) {
        $flag=false;
    }
    if( !preg_match("#[A-Z]+#", $password ) ) {
        $flag=false;
    }

    return $flag;
}
/**
 * @param $password
 * @return string
 */
function getValidatePassword($password):string
{
    $error=" ";

    if( strlen($password ) < 8 ) {
        $error .= "Password too short!<br>";
    }
    if( strlen($password ) > 20 ) {
        $error .= "Password too long!<br>";
    }
    if( !preg_match("#[0-9]+#", $password ) ) {
        $error .= "Password must include at least one number!<br>";
    }
    if( !preg_match("#[a-z]+#", $password ) ) {
        $error .= "Password must include at least one letter!<br>";
    }
    if( !preg_match("#[A-Z]+#", $password ) ) {
        $error .= "Password must include at least one CAPS!<br>";
    }

    return $error;
}

function checkEmpty(){

}
