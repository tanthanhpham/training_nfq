<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Unlock Training</title>
</head>
<?php
if(isset($_COOKIE['choosedOption'])){
    echo "<h2>Do you love ".$_COOKIE['choosedOption']."</h2>";
}
?>
<body>
<h5>Check your programing languages that you love <a href="PHP/listChoice.php">here</a></h5>
<h5>If you are stressful at coding,  <a href="PHP/draw.php"> please click on me</a></h5>
<h5>Enter your array, I will show you max, min, positive and negative numbers <a href="./PHP/arrayNumber.php"> please click on me</a></h5>
</body>
</html>