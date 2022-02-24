<?php

function setNotification($err, $notification){
    $_SESSION[$err] = $notification;
}