<?php
session_start();

$servername = "db";
$username = "root";
$dbname = "training_nfq";
$password = "password";

$conn = mysqli_connect($servername, $username, $password, $dbname, 3306);

if (!$conn) {
    die('Could not connect');
}

$getAllUsers = "Select * from users";
$users = $conn->query($getAllUsers);

if (mysqli_num_rows($users) > 0) {
}
?>
<div class="col-md-12">
    <div class="card strpied-tabled-with-hover">
        <div class="card-header ">
            <h4 class="card-title">User List</h4>
        </div>
        <div class="card-body table-full-width table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Country</th>
                </thead>
                <tbody>
                <?php
                $i = 1;
                while ($row = mysqli_fetch_assoc($users)) {
                    echo "<tr>
                    <td>$i</td>
                    <td>" . $row['name'] . "</td>
                    <td>" . $row['email'] . "</td>
                    <td>" . $row['address'] . "</td>
                    <td> <a href=\"/?view=delete&id=". $row['id']."\" >Xóa</a></td>
                </tr>";
                    $i++;
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
