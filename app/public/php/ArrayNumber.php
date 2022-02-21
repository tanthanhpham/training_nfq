<?php

include('Functions.php');

$arrayNumber = '';

if (empty($_POST["arrayNumber"])) {
    echo "Your array is null";
} else {
    $arrayStringNumber = $_POST["arrayNumber"];
    $arrayStringNumber = explode(",", $arrayStringNumber);
    $arrayNumber = delSpecialChar($arrayStringNumber);

    $check = checkValidation($arrayNumber);

    if ($check) {
        $arrayNegativeNumber = getNegativeNumber($arrayNumber);
        $arrayPositiveNumber = getPositiveNumber($arrayNumber);

        $max = findMax($arrayPositiveNumber, $arrayNegativeNumber);
        $min = findMin($arrayPositiveNumber, $arrayNegativeNumber);

        echo "Max: " . $max . "</br>";
        echo "Min: " . $min . "</br>";

        echo "</br> Negative array: ";
        foreach ($arrayNegativeNumber as $number) {
            echo $number . " ";
        }

        echo "</br> Positive array: ";
        foreach ($arrayPositiveNumber as $number) {
            echo $number . " ";
        }
    } else {
        echo "Please input validate data in this field above";
    }
}
