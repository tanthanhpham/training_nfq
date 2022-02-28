<?php

/**
 * @param $sessionName
 * @param $notification
 * @return void
 */
function setNotification($sessionName, $notification)
{
    $_SESSION[$sessionName] = $notification;
}
