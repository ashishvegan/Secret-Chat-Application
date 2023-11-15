<?php 
  require("components/config.php");
  if(isset($_SESSION['email']))
  {
    header('location:home.php');
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include("components/css-data.php");?>
    <title>Channel 51</title>
  </head>
  <body>
    <?php
        include("components/navbar.php");
        include("components/slider.php");
        include("components/login-form.php");
        include("components/footer.php");
    ?>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>