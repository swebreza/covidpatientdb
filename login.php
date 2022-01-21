<?php
if (isset($_POST['username'])) {
  $servername = "localhost";
  $username = "root";
  $password = "";

  // Create connection
  $conn = new mysqli($servername, $username, $password);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  session_start();

  $username = $_POST['username'];
  $password = $_POST['password'];


  $sql = "SELECT id FROM `covid_patient`.`users` WHERE username = '$username' and passwd = '$password'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    $_SESSION['userid'] = $row['id'];
    while ($row = mysqli_fetch_array($result)) {

      header('Location:  dashboard.php');
    }
  } else {
    echo  '<div class="alert alert-danger" role="alert">
  Incorrect ID or Password.
  </div>';
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
  <!-- Start: Login Form Clean -->
  <section class="login-clean">
    <form method="post">
      <h2 class="visually-hidden">Login Form</h2>
      <div class="illustration"><i class="icon ion-ios-navigate"></i></div>
      <div class="mb-3"><input class="form-control" type="text" name="username" placeholder="Username"></div>
      <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password"></div>
      <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Log In</button></div>
      New to this site?
      <a class="forgot" href="signup.php">signup</a>
    </form>
  </section><!-- End: Login Form Clean -->
</body>

</html>