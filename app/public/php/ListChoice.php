<?php
include 'Functions.php';

if (isset($_POST['programingLanguages'])) {
    setcookie("chooseOption", $_POST['programingLanguages'], time() + (3600), "/");
    header('location: ./ListChoice.php');
}

?>


<!doctype html>
<html lang="en">
<body>
<h1>Please choose your favorite programing language?</h1>
<form action="../php/ListChoice.php" method="post">
    <input type="radio" value="css" id="css" name="programingLanguages" <?php checkOption('chooseOption', 'css');?> >
    <label for="css">CSS</label><br>
    <input type="radio" value="html" id="html" name="programingLanguages"  <?php checkOption('chooseOption', 'html');?> >
    <label for="html">HTML</label><br>
    <input type="radio" value="javascript" id="javascript" name="programingLanguages"  <?php checkOption('chooseOption', 'javascript');?> >
    <label for="javascript">JavaScript</label><br>
    <input type="radio" value="php" id="php" name="programingLanguages"  <?php checkOption('chooseOption', 'php');?> >
    <label for="php">PHP</label><br>
    <input type="submit" value="Submit">
</form>
<a href="../index.php">Click here to see your option</a>
</body>
</html>

