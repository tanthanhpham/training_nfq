<?php

    $view = $_GET['view'] ?? '';

    if($view=='')
        include ('php/ListChoice.php');
    elseif($view == 'array')
        include ('html/array_number.html');
    else if($view == 'draw')
        include ('html/draw.html');

