<?php

/**
 * @param array<string> $arrayNumber
 * @return bool
 */
function checkValidation(array $arrayNumber = []): bool
{
    $flag = true;
/** @var int $number */
    foreach ($arrayNumber as $number) {
        if (!is_numeric($number)) {
            $flag = false;
        }
    }
    return $flag;
}

/**
 * @param array<string> $arrayStringNumber
 * @return array
 */
function delSpecialChar(array $arrayStringNumber): array
{
    foreach ($arrayStringNumber as $i => $number) {
        if (!is_numeric($number)) {
            unset($arrayStringNumber[$i]);
        }
    }
    return $arrayStringNumber;
}

/**
 * @param array<string> $arrayNumber
 * @return array<int>
 */
function getNegativeNumber(array $arrayNumber): array
{
    $arrayNegativeNumber = [];
/** @var int $number */
    foreach ($arrayNumber as $number) {
        if ($number < 0) {
            $arrayNegativeNumber[] = $number;
        }
    }
    return $arrayNegativeNumber;
}

/**
 * @param array<string> $arrayNumber
 * @return array<int>
 */
function getPositiveNumber(array $arrayNumber): array
{
    $arrayPositiveNumber = [];
/** @var int $number */
    foreach ($arrayNumber as $number) {
        if ($number > 0) {
            $arrayPositiveNumber[] = $number;
        }
    }
    return $arrayPositiveNumber;
}

/**
 * @param array<int> $arrayPositiveNumber
 * @param array<int> $arrayNegativeNumber
 * @return mixed
 */
function findMax(array $arrayPositiveNumber, array $arrayNegativeNumber): mixed
{
    if (empty($arrayPositiveNumber)) {
        return max($arrayNegativeNumber);
    }
    return max($arrayPositiveNumber);
}

/**
 * @param array<int> $arrayPositiveNumber
 * @param array<int> $arrayNegativeNumber
 * @return mixed
 */
function findMin(array $arrayPositiveNumber, array $arrayNegativeNumber): mixed
{
    if (empty($arrayNegativeNumber)) {
        return min($arrayPositiveNumber);
    }
    return min($arrayNegativeNumber);
}

/**
 * @param $option
 * @return void
 */
function checkOption($cookieName, $option)
{
    if (isset($_COOKIE[$cookieName]) && $_COOKIE[$cookieName] == $option) {
        echo 'checked';
    }
}
