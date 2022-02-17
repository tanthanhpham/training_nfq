<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Unlock Training</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <table>
        <tr>
            <td><label for="height">Height: </label></td>
            <td><input type="number" id="height" name="height"></td>
        </tr>
        <tr>
            <td><label for="height">Width: </label></td>
            <td> <input type="number" id="width" name="width"></td>
        </tr>
    </table>
    <input type="submit" value="Submit">
</form>
<a href="../index.php">Back here</a>
</body>
</html>
<?php
    if(isset($_POST['height']) && isset($_POST['width'])){
        $height=$_POST['height'];
        $width=($_POST['width']);

        echo "<br>";

        for($i = 0; $i < $height; $i ++) {
            for($j = 0; $j < $width; $j ++) {
                if($i == 0 || $j == 0 || $j == $width -1)
                    echo "* ";
                else echo "&nbsp&nbsp&nbsp";
            }
            echo "<br>";
        }
    }
