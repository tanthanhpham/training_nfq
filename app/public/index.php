<?php
include './php/utils.php';

if (isset($_POST['programingLanguages'])) {
    setcookie("chooseOption", $_POST['programingLanguages'], time() + (3600), "/");
    header('location: ./index.php');
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="exercise.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Unlock Training</title>
</head>

<body>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" href="index.php">Exercise 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./html/draw.html">Exercise 2</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./html/array_number.html">Exercise 3</a>
        </li>
    </ul>
    <div class="container">
        <h3>Please choose your favorite programing language?</h3>
        <form action="../index.php" method="post">
            <div class="form-group">
                <input class="form-check-input" type="radio" value="css" id="css" name="programingLanguages" <?php checkOption('chooseOption','css');?> >
                <label class="form-check-label" for="css">CSS</label><br>
                <input class="form-check-input" type="radio" value="html" id="html" name="programingLanguages"  <?php checkOption('chooseOption','html');?> >
                <label class="form-check-label" for="html">HTML</label><br>
                <input class="form-check-input" type="radio" value="javascript" id="javascript" name="programingLanguages"  <?php checkOption('chooseOption','javascript');?> >
                <label class="form-check-label" for="javascript">JavaScript</label><br>
                <input class="form-check-input" type="radio" value="php" id="php" name="programingLanguages"  <?php checkOption('chooseOption','php');?> >
                <label class="form-check-label" for="php">PHP</label><br>
            </div>
        </form>
    </div>
</body>
</html>
<script>

</script>