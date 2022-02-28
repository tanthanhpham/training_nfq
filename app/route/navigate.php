<?php

    $view = $_GET['view'] ?? '';

if ($view == '') {
    include('../resource/views/user/account_list.php');
} elseif ($view == 'choice') {
    include('../resource/views/list_choice/list_choice.php');
} elseif ($view == 'array') {
    include('../resource/views/array_number/array_number.php');
    include('../controllers/array_number/ArrayNumber.php');
} elseif ($view == 'draw') {
    include('../resource/views/draw/draw.php');
} elseif ($view == 'account-detail') {
    include('../controllers/user/UpdateAccount.php');
    include('../resource/views/user/account_detail.php');
}elseif ($view == 'delete'){
    include('../controllers/user/DeleteAccount.php');
}
