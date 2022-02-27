<?php

    $view = $_GET['view'] ?? '';

    if($view == '')
        include('../resource/views/user/AccountList.php');
    elseif($view=='choice')
        include('../public/php/ListChoice.php');
    elseif($view == 'array')
        include('../public/html/array_number.html');
    elseif($view == 'draw')
        include('../public/html/draw.html');
    elseif($view == 'account-detail')
        include('../resource/views/user/AccountDetail.php');
