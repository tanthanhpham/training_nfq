<?php

$conn = connectDB();

$id = $_GET['id'];
if(is_null($id)){
    $id = $_SESSION['loggedIn'];
}
$findUser = "Select * from users where id = $id";
$user = $conn->query($findUser);
if (mysqli_num_rows($user) > 0) {
    $row = mysqli_fetch_assoc($user);
}
?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Profile</h4>
                    </div>
                    <div class="card-body">
                        <form action="/?view=account-detail" method="POST" enctype="multipart/form-data" >
                            <div class="row">
                                <div class="col-md-12 pr-3">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Company" required value="<?= $row['name']?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" name="address" placeholder="Home Address" required value="<?= $row['address'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="email" placeholder="email" required value="<?= $row['email']?>">
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <input type="text" class="form-control" name="country" placeholder="Country" required value="<?= $row['country'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label>Your picture</label>
                                        <input type="file" class="form-control" name="avatar" placeholder="Your picture">
                                    </div>
                                </div>
                            </div>
                            <?php
                            if ($_SESSION['loggedIn'] == $id) {
                                ?>
                            <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                                <?php
                            }
                            ?>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-user">
                    <div class="card-image">
                        <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="...">
                    </div>
                    <div class="card-body">
                        <div class="author">
                            <a href="#">
                                <img class="avatar border-gray" src="./images/TanThanh.jpg" alt="...">
                                <h5 class="title"><?= $row['name']?></h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
