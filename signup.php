<?php
if (isset($_POST['username'])) {
  $server = 'localhost';
  $user = "root";
  $password = "";
  $conn = mysqli_connect($server, $user, $password);
  if (!$conn) {
    die("connection to this database failed due to" . mysqli_connect_error());
  }
  $username = $_POST['username'];
  $passwd = $_POST['passwd'];

  $sql = "INSERT INTO `covid_patient`.`users`( `username`, `passwd`) VALUES ( `$username`, `$passwd`)";
  if ($conn->query($sql) === true) {
    echo '<div class="alert alert-success" role="alert">
  Account created successfully! <a href="login.php" class="alert-link"> Go to login </a> .
  </div>';
  } else {
    echo 'error' . $sql . '<br/>' . $conn->error;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Untitled</title>
  <?php include './assets/scripts/scripts.html'; ?>

</head>

<body>

  <!-- Start: Registration Form with Photo -->
  <section class="register-photo" style="padding: 10em;">
    <!-- Start: Form Container -->
    <div class="form-container">
      <!-- Start: Image -->
      <!-- End: Image -->
      <form method="post">
        <h2 class="text-center"><strong>Create</strong> an account.</h2>
        <div class="mb-3"><input class="form-control" type="text" name="username" placeholder="username"></div>
        <div class="mb-3"><input class="form-control" type="password" name="passwd" placeholder="Password"></div>
        <div class="mb-3"><input class="form-control" type="password" name="password-repeat" placeholder="Password (repeat)"></div>
        <div class="mb-3" style="color: whitesmoke;">
          <div class="form-check"><label class="form-check-label" style="color:black"><input class="form-check-input" type="checkbox">I
              agree to
              the license terms.</label></div>
        </div>
        <div class="mb-3"><button class="btn btn-primary d-block w-1" type="submit">Sign Up</button></div><a class="already" href="login.php">You already have an account? Login here.</a>
      </form>
    </div><!-- End: Form Container -->
  </section><!-- End: Registration Form with Photo -->

</body>

</html>