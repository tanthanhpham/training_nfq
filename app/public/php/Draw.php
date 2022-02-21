<?php

if (isset($_POST['height']) && isset($_POST['width'])) {
    $height = $_POST['height'];
    $width = $_POST['width'];

    if ($height > 0 && $width > 0) {
        echo "<br>";

        for ($i = 0; $i < $height; $i++) {
            for ($j = 0; $j < $width; $j++) {
                if ($i == 0 || $j == 0 || $i == $height - 1 || $j == $width - 1) {
                    echo "* ";
                } else {
                    echo "&nbsp&nbsp&nbsp";
                }
            }
            echo "<br>";
        }
    } else {
        echo "Please input positive number to draw";
    }
} else {
    echo "Please fill out before submitting";
}
