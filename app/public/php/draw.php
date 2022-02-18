<?php

if (isset($_POST['height']) && isset($_POST['width'])) {
    $height = $_POST['height'];
    $width = ($_POST['width']);

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
}
