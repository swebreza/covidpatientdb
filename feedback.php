<?php
if (isset($_POST['name'])) {
 $server = 'localhost';
 $user = "root";
 $password = "";

 $conn = mysqli_connect($server, $user, $password);
 if (!$conn) {
  die("connection to this database failed due to" . mysqli_connect_error());
 }
 $name = $_POST['name'];
 $email = $_POST['email'];
 $message = $_POST['message'];
 $sql = "INSERT INTO `covid_patient`.`test`( `name`,`email`, `message`) VALUES ('$name','$email','$message')";

 if ($conn->query($sql) === true) {
  echo '<div class="alert alert-success" role="alert">
 Feedback sent successfully! .
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
 <title>Feedback</title>
 <?php include './assets/scripts/scripts.html'; ?>

</head>

<body>
 <?php include './assets/base/nav.html'; ?>
 <!-- Start: Contact Form Clean -->
 <section class="contact-clean">
  <form method="post">
   <h2 class="text-center">Feedback</h2><!-- Start: Success Example -->
   <div class="mb-3"><input class="form-control" type="text" name="name" placeholder="Name"></div>
   <!-- End: Success Example -->
   <!-- Start: Error Example -->
   <div class="mb-3"><input class="form-control is-invalid" type="email" name="email" placeholder="Email">
    <!-- Start: The Error Message --><small class="form-text text-danger">Please enter a correct email address.</small>
    <!-- End: The Error Message -->
   </div><!-- End: Error Example -->
   <div class="mb-3"><textarea class="form-control" name="message" placeholder="Message" rows="14"></textarea></div>
   <div class="mb-3"><button class="btn btn-primary" type="submit">send </button></div>
  </form>
 </section><!-- End: Contact Form Clean -->
 <!-- Start: Footer Clean -->
 <footer class="footer-clean">
  <div class="container">
   <div class="row justify-content-center">
    <!-- Start: Services -->
    <div class="col-sm-4 col-md-3 item">

    </div><!-- End: Services -->
    <!-- Start: About -->
    <div class="col-sm-4 col-md-3 item">
     <a href='about.html'>
      <h3>About</h3>
     </a>
     <a href='terms.html'>
      <h3>Terms and conditions</h3>
     </a>
     <a href="feedback.php">
      <h3>Feedback</h3>
     </a>

    </div><!-- End: About -->
    <!-- Start: Careers -->
    <div class="col-sm-4 col-md-3 item">

    </div><!-- End: Careers -->
    <!-- Start: Social Icons -->
    <div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a>
     <p class="copyright">Company Name © 2022</p>
    </div><!-- End: Social Icons -->
   </div>
  </div>
 </footer><!-- End: Footer Clean -->
</body>

</html>