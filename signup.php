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
        <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email"></div>
        <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password"></div>
        <div class="mb-3"><input class="form-control" type="password" name="password-repeat" placeholder="Password (repeat)"></div>
        <div class="mb-3" style="color: whitesmoke;">
          <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox">I
              agree to
              the license terms.</label></div>
        </div>
        <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Sign Up</button></div><a class="already" href="login.php">You already have an account? Login here.</a>
      </form>
    </div><!-- End: Form Container -->
  </section><!-- End: Registration Form with Photo -->

</body>

</html>