<?php
 $flag = 2;
if (!empty($_POST)) {
    $em = $_POST['email'];
    $pass = sha1($_POST['password']);

    $safe_email = mysqli_real_escape_string($db_string, $em);
    $safe_pass = mysqli_real_escape_string($db_string, $pass);

    $query = mysqli_query($db_string, "SELECT * FROM hackers WHERE email = '$safe_email' AND password = '$safe_pass'");

    //echo var_dump($query); //Developer Options 
    if (mysqli_num_rows($query) == 1) 
    {
        //Create Session
        $_SESSION['email'] = $safe_email;
        header("location:home.php"); // Jump to Private Page
    } 
    else 
    {
        $flag = 1;
    }
}
?>
<div class="container py-3">
    <h3 class="display-4 border-bottom">Anonymous Login</h3>
    <form method="post" action="">
    <?php
        if ($flag == 1) {
    ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Incorrect Email or Password.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php } ?>

        <div class="row row-cols-1 row-cols-md-2">
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                    <label for="floatingInput">Email address</label>
                </div>
            </div>

            <div class="col">
                <div class="form-floating mb-3">
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                    <label for="floatingPassword">Password</label>
                </div>
            </div>
            <div class="col">
                <input type="submit" class="btn btn-dark btn-lg" value="Login">
            </div>
        </div>
    </form>
</div>
<br><br><br><br><br><br><br><br>