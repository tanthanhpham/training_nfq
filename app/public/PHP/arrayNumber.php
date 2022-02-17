<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Unlock Training</title>
</head>

<body>
<h2>Input your array here!!</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <input type="text" name="array_number" id="array_number" placeholder="For example: 1,4,4.5,...">
    <br/>
    <span id="err_array_number"></span>
    <br/>
    <input type="submit" style="margin-top: 10px" onclick="return checkValidation()" value="submit">
    <div>-------------------------------------------------</div>
</form>
<h2>Your output below</h2>
</body>
</html>
<script>
    function checkValidation(){
        let array_string = document.getElementById("array_number").value;
        let array_number_string = array_string.replace(/[, ]+/g,' ');
        let array_number = array_number_string.split(' ');
        let flag = true;
        for (let number of array_number) {
            if(isNaN(number)) {
                flag = false;
                document.getElementById("err_array_number").innerHTML = 'Please enter input is string number!';
            }
        }
        return flag;
    }
</script>
<?php

function check_validation($array_number){
    $flag = true;
    foreach ($array_number as $number){
        if(!is_numeric($number)){
            $flag = false;
        }
    }
    return $flag;
}

function getNegativeNumber($array_number){
    $array_negative_number = [];
    foreach ($array_number as $number) {
        if ($number < 0) {
            $array_negative_number[] = $number;
        }
    }
    return $array_negative_number;
}

function getPositiveNumber($array_number){
    $array_positive_number = [];
    foreach ($array_number as $number) {
        if ($number > 0) {
            $array_positive_number[] = $number;
        }
    }
    return $array_positive_number;
}

$array_number='';
if (empty($_POST["array_number"])) {
} else {
    $array_number = $_POST["array_number"];
    $array_number = explode(",", $array_number);

    $check = check_validation($array_number);
    if ($check){
        $max = max($array_number);
        $min = min($array_number);

        echo "Max: ".$max."</br>";
        echo "Min: ".$min."</br>";

        $array_negative_number=getNegativeNumber($array_number);
        $array_positive_number=getPositiveNumber($array_number);

        echo "</br> Negative array: ";
        foreach ($array_negative_number as $number){
            echo $number . " ";
        }

        echo "</br> Positive array: ";
        foreach ($array_positive_number as $number){
            echo $number . " ";
        }
    }else{
        echo "Please input validate data in this field above";
    }
}
