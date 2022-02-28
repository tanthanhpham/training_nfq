<?php

session_start();
unset($_SESSION["loggedIn"]);
unset($_SESSION['error']);
unset($_SESSION['oldData']);
header('location: /');
