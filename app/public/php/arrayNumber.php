<?php

/**
 * @param array<string> $array_number
 * @return bool
 */
function checkValidation(array $array_number = []): bool
{
    $flag = true;
    /** @var int $number */
    foreach ($array_number as $number) {
        if (!is_numeric($number)) {
            $flag = false;
        }
    }
    return $flag;
}

/**
 * @param array<string> $array_number
 * @return array<int>
 */
function getNegativeNumber(array $array_number): array
{
    $array_negative_number = [];
    /** @var int $number */
    foreach ($array_number as $number) {
        if ($number < 0) {
            $array_negative_number[] = $number;
        }
    }
    return $array_negative_number;
}

/**
 * @param array<string> $array_number
 * @return array<int>
 */
function getPositiveNumber(array $array_number): array
{
    $array_positive_number = [];
    /** @var int $number */
    foreach ($array_number as $number) {
        if ($number > 0) {
            $array_positive_number[] = $number;
        }
    }
    return $array_positive_number;
}

$array_number = '';
if (empty($_POST["array_number"])) {
    echo "Your array is null";
} else {
    $array_number = $_POST["array_number"];
    $array_number = explode(",", $array_number);

    $check = checkValidation($array_number);
    if ($check) {
        $array_negative_number = getNegativeNumber($array_number);
        $array_positive_number = getPositiveNumber($array_number);

        $max = max($array_positive_number);
        $min = min($array_negative_number);

        echo "Max: " . $max . "</br>";
        echo "Min: " . $min . "</br>";

        echo "</br> Negative array: ";
        foreach ($array_negative_number as $number) {
            echo $number . " ";
        }

        echo "</br> Positive array: ";
        foreach ($array_positive_number as $number) {
            echo $number . " ";
        }
    } else {
        echo "Please input validate data in this field above";
    }
}
