<?php
require("config.php"); // Database Connectivity
// Signup Code
$status = 2;
if (!empty($_POST)) {
    // Assign Variables
    $fullName = $_POST['name'];
    $nickName = $_POST['nickname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $pass = sha1($_POST['password']);
    $time = date('h:i a');
    $date = date('d-m-Y');

    // Troubleshooting Process
    /*
        echo $fullName."<br>";
        echo $nickName."<br>";
        echo $email."<br>";
        echo $gender."<br>";
        echo $pass;
        */

    // Insert Data into Database
    $sql = mysqli_query($db_string, "INSERT INTO hackers(full_name,nick_name,gender,email,password,time,date) VALUES('$fullName','$nickName','$gender','$email','$pass','$time','$date')");

    if ($sql) {
        $status = 1;
    } else {
        $status = 0;
    }
}

?>
<div class="container py-3">
    <h3 class="display-4 border-bottom">Sign Up</h3>
    <form method="post" action="">
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" required>
                    <label for="name">Enter full name</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="text" name="nickname" class="form-control" id="nickname" placeholder="Enter Name" required>
                    <label for="nickname">Enter nick name</label>
                </div>
            </div>

            <div class="col">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male">
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>
            </div>

            <div class="col">
                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
                    <label for="email">Email address</label>
                </div>
            </div>

            <div class="col">
                <div class="form-floating mb-3">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>
            </div>
            <div class="col">
                <input type="submit" class="btn btn-dark btn-lg" value="Signup">
            </div>

        </div>
    </form>
    <?php
    if ($status == 1) {
    ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Congratulations!</strong> Registration is successful.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
    } elseif($status == 0) {
    ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Account is already exist.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
    }
    ?>
</div>