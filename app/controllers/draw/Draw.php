<?php

if (isset($_POST['height']) && isset($_POST['width'])) {
    $height = $_POST['height'];
    $width = $_POST['width'];

    $shape = '';
    if ($height > 0 && $width > 0) {
        $shape = $shape . '<br>';

        for ($i = 0; $i < $height; $i++) {
            for ($j = 0; $j < $width; $j++) {
                if ($i == 0 || $j == 0 || $i == $height - 1 || $j == $width - 1) {
                    $shape = $shape . '*&nbsp';
                } else {
                    $shape = $shape . '&nbsp&nbsp';
                }
            }
            $shape = $shape . '<br>';
        }

        echo $shape;
    } else {
        echo "Please input positive number to draw";
    }
}
