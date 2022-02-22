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
            break;
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
 * @return array<string>
 */
function getNegativeNumber(array $arrayNumber): array
{
    return array_filter($arrayNumber, function ($number) {
        return $number < 0;
    });
}

/**
 * @param array<string> $arrayNumber
 * @return array<string>
 */
function getPositiveNumber(array $arrayNumber): array
{
    return array_filter($arrayNumber, function ($number) {
        return $number > 0;
    });
}

/**
 * @param string $cookieName
 * @param string $option
 * @return void
 */
function checkOption(string $cookieName, string $option)
{
    if (isset($_COOKIE[$cookieName]) && $_COOKIE[$cookieName] == $option) {
        echo 'checked';
    }
}
