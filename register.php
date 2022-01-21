<?php
if (isset($_POST['pname'])) {
 $server = 'localhost';
 $user = "root";
 $password = "";

 $conn = mysqli_connect($server, $user, $password);
 if (!$conn) {
  die("connection to this database failed due to" . mysqli_connect_error());
 }
 $pname = $_POST['pname'];
 $phno = $_POST['phno'];
 $age = $_POST['age'];
 $symptoms = $_POST['symptoms'];
 $bloodtype = $_POST['bloodtype'];
 $email = $_POST['email'];
 $address = $_POST['address'];
 $sql = "INSERT INTO `covid_patient`.`patient`( `pname`,`phno`,`age`,`symptoms`,`bloodtype`, `email`, `address`) VALUES ('$pname','$phno','$age','$symptoms','$bloodtype','$email','$address')";

 if ($conn->query($sql) === true) {
  echo '<div class="alert alert-success" role="alert">
  New recode inserted successfully! <a href="dashboard.php" class="alert-link"> Go to dashboard </a> .
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
 <title>Register</title>
 <?php include './assets/scripts/scripts.html'; ?>
</head>
<link rel="stylesheet" href="">

<body>
 <!-- Start: Contact Form Clean -->
 <section class="contact-clean">
  <form method="post">
   <h2 class="text-center">Input the details</h2><!-- Start: Success Example -->
   <!-- <div class="mb-3"><input class="form-control" type="text" name="sno" placeholder="SNO."></div> -->
   <div class="mb-3"><input class="form-control" type="text" name="pname" placeholder="Name" required></div>
   <div class="mb-3"><input class="form-control" type="text" name="phno" placeholder="Phone Number" required></div>
   <div class="mb-3"><input class="form-control" type="text" name="age" placeholder="age" required></div>
   <div class="mb-3"><input class="form-control" type="text" name="symptoms" placeholder="Symptoms"></div>
   <div class="mb-3"><input class="form-control" type="text" name="bloodtype" placeholder="bloodtype"></div>

   <!-- End: Success Example -->
   <!-- Start: Error Example -->
   <div class="mb-3">
    <input class="form-control is-invalid" type="email" name="email" placeholder="Email" required>
    <!-- Start: The Error Message -->
    <small class="form-text text-danger">Please enter a correct email address.</small>
    <!-- End: The Error Message -->
   </div><!-- End: Error Example -->
   <div class="mb-3">
    <textarea class="form-control" name="address" placeholder="Address" rows="14" required></textarea>
   </div>
   <div class="mb-3">
    <button class="btn btn-primary" type="submit">Submit</button>
   </div>
  </form>
 </section><!-- End: Contact Form Clean -->
</body>

</html>