<?php

$conn = connectDB();

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    $id = $_GET['id'];
    $deleteUser = "DELETE FROM users  WHERE id = '$id'";
    $user = $conn->query($deleteUser);
    if ($user) {
        echo "<div class=\"alert alert-success\" style=\" margin-left: 1rem \">
            Delete successfully
        </div>";
    } else {
        echo "<div class=\"alert alert-success\" style=\" margin-left: 1rem \">
            Delete unsuccessfully
        </div>";
    }
}
