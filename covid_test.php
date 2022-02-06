 <?php
     if (isset($_POST['pid'])) {
          $server = 'localhost';
          $user = "root";
          $password = "";
          $conn = mysqli_connect($server, $user, $password);
          if (!$conn) {
               die("connection to this database failed due to" . mysqli_connect_error());
          }

          $pid = $_POST['pid'];
          $status = $_POST['status'];
          $hospital = $_POST['hospital'];
          $doctor = $_POST['doctor'];
          $sql = "INSERT INTO `covid_patient`.`report`( `pid`,`hid`,`did`,`status`) VALUES ('$pid','$hospital','$doctor','$status')";
          // $result = mysqli_query($conn, $sql);
          if ($conn->query($sql) === true) {
               echo '<div class="alert alert-success" role="alert">
                New recode inserted successfully!  .</div>';
          } else {
               echo 'error' . $sql . '<br/>' . $conn->error;
          }
     }
     ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Results</title>
      <?php include './assets/scripts/scripts.html'; ?>
 </head>

 <body style="text-align: center;">
      <?php include './assets/base/nav.html'; ?>

      <p>
      <h1></h1>
      <!-- Start: Contact Form Clean -->
      <section class="contact-clean">
           <form method="post">
                <h2 class="text-center">Results Analysis.</h2><!-- Start: Success Example -->
                <!-- <div class="mb-3"><input class="form-control" type="text" name="sno" placeholder="SNO."></div> -->
                <div class="mb-3"><input class="form-control" type="text" name="pid" placeholder="Patient id" required></div>
                <div class="mb-3"><input class="form-control" type="text" name="status" placeholder="Current status in lower case" required></div>
                <div class="mb-3"><input class="form-control" type="text" name="hospital" placeholder="Hospital ID" required></div>
                <div class="mb-3"><input class="form-control" type="text" name="doctor" placeholder="Doctor ID" required></div>
                <div class="mb-3">
                     <button class="btn btn-primary" type="submit">Submit</button>
                </div>
           </form>
      </section><!-- End: Contact Form Clean -->


 </body>

 </html>