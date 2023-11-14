<?php 
  require("components/config.php");
  if(!isset($_SESSION['email']))
  {
    header('location:index.php');
  }
  $email = $_SESSION['email'];
  //echo $email;
  $sql = mysqli_query($db_string,"SELECT * FROM hackers WHERE email = '$email'");
  $row = mysqli_fetch_array($sql);
  //echo var_dump($row);
  $name = $row['full_name'];
  $gender = $row['gender'];
  if($gender == "Male")
  {
    $file = "man.png";
  }
  elseif($gender == "Female")
      {
        $file = "woman.png";
      } 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Channel 51 | Home</title>
  </head>
  <body>
    <?php
        include("components/navbar-private.php");
        include("components/chat-box-private.php");
        include("components/footer.php");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>