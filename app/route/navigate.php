<?php

    $view = $_GET['view'] ?? '';

if ($view == '') {
    include('../resource/views/user/account_list.php');
} elseif ($view == 'choice') {
    include('../resource/views/exercises/list_choice.php');
} elseif ($view == 'array') {
    include('../resource/views/exercises/array_number.php');
    include('../controllers/exercises/ArrayNumber.php');
} elseif ($view == 'draw') {
    include('../resource/views/exercises/draw.php');
    include('../controllers/exercises/Draw.php');
} elseif ($view == 'account-detail') {
    include('../controllers/user/UpdateAccount.php');
    include('../resource/views/user/account_detail.php');
}elseif ($view == 'delete'){
    include('../controllers/user/DeleteAccount.php');
}
