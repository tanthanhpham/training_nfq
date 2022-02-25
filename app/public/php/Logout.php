<?php
session_start();

unset($_SESSION["loggedIn"]);

header('location: ./Login.php');