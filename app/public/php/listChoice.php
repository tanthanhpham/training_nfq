<?php
if(isset($_POST['programingLanguages'])){
    setcookie("choosedOption",$_POST['programingLanguages'], time() + (86400 * 30), "/");
    header('location: ./listChoice.php');
}
?>
<!doctype html>
<html lang="en">
<body>
    <h1>Please choose your favorite programing language?</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <input type="radio" value="css" id="css" name="programingLanguages" <?php if((isset($_COOKIE['choosedOption'])) && ($_COOKIE['choosedOption']=='css' )) echo "checked"?>>
        <label for="css">CSS</label><br>
        <input type="radio" value="html" id="html" name="programingLanguages" <?php if((isset($_COOKIE['choosedOption'])) && ($_COOKIE['choosedOption']=='html' )) echo "checked"?>>
        <label for="html">HTML</label><br>
        <input type="radio" value="javascript" id="javascript" name="programingLanguages" <?php if((isset($_COOKIE['choosedOption'])) && ($_COOKIE['choosedOption']=='javascript' )) echo "checked"?>>
        <label for="javascript">JavaScript</label><br>
        <input type="radio" value="php" id="php" name="programingLanguages" <?php if((isset($_COOKIE['choosedOption'])) && ($_COOKIE['choosedOption']=='php' )) echo "checked" ?>>
        <label for="php">PHP</label><br>
        <input type="submit" value="Submit">
    </form>
    <a href="../index.php">Click here to see your option</a>
</body>
</html>




