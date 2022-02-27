<?php

    $view = $_GET['view'] ?? '';

    if($view == '')
        include ('php/AccountList.php');
    elseif($view=='choice')
        include ('php/ListChoice.php');
    elseif($view == 'array')
        include ('html/array_number.html');
    elseif($view == 'draw')
        include ('html/draw.html');
    elseif($view == 'account-detail')
        include ('php/AccountDetail.php');
