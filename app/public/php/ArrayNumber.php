<?php

include('utils.php');

$arrayNumber = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST["arrayNumber"])) {
    } else {
        $arrayStringNumber = $_POST["arrayNumber"];
        $arrayStringNumber = explode(",", $arrayStringNumber);
        $arrayNumber = delSpecialChar($arrayStringNumber);

        $check = checkValidation($arrayNumber);

        if ($check) {
            $arrayNegativeNumber = getNegativeNumber($arrayNumber);
            $arrayPositiveNumber = getPositiveNumber($arrayNumber);

            $max = empty($arrayPositiveNumber) ? max($arrayNegativeNumber) :  max($arrayPositiveNumber);
            $min = empty($arrayNegativeNumber) ? min($arrayPositiveNumber) :  min($arrayNegativeNumber);

            $stringPositive = '';
            foreach ($arrayPositiveNumber as $number) {
                $stringPositive = $stringPositive . " " .  $number;
            }

            $stringNegative = '';
            foreach ($arrayNegativeNumber as $number) {
                $stringNegative = $stringNegative . " " .  $number;
            }

            echo "<div class=\"container\"><div>-------------------------------------------------</div>
                <h2>Your output below</h2>
                <table class=\"table\">
                    <tr>
                        <th>Your max: </th>
                        <td>" . $max . "</td>
                        <th>Your array positive: </th>
                        <td> " . $stringPositive . " </td>
                    </tr>
                    <tr>
                        <th>Your min: </th>
                        <td>" . $min . "</td>
                        <th>Your array negative: </th>
                        <td> " . $stringNegative . "</td>
                    </tr> 
                </table>
              </div>";
        } else {
            echo "Please input validate data in this field above";
        }
    }
}
