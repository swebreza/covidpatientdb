<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Untitled</title>
  <?php include './assets/scripts/scripts.html'; ?>
</head>

<body>
  <!-- Start: Navigation with Button -->
  <nav class="navbar navbar-light navbar-expand-lg navigation-clean">
    <div class="container"><a class="navbar-brand" href="#">Covid Patient</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navcol-1">
        <ul class="navbar-nav ms-auto">
          <!-- <li class="nav-item"><a class="nav-link " href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link " href="hospital.php">Hospital</a></li> -->
          <li class="nav-item"><a class="nav-link " href="report.php">Report</a></li>
          <li class="nav-item"><a class="btn btn-primary" href="login.php" style="margin: 5px;">Login</a></li>
          <li class="nav-item"><a class="btn btn-primary" href="signup.php" style="margin: 5px;">Signup</a></li>

        </ul>
      </div>
    </div>
  </nav><!-- End: Navigation Clean -->
  <!-- Start: Incrementing Animation -->
  <section data-aos="fade-up" data-aos-duration="400" data-aos-once="true" class="font-dark">
    <div class="container">
      <h3 data-aos="fade-up" data-aos-duration="400" data-aos-delay="200" data-aos-once="true" class="text-center all-capital p-4" style="font-size: 30px;font-weight: 300;line-height: 38px;letter-spacing: 2px;">
        Current Status</h3>
      <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-4 row-cols-xxl-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="150" data-aos-once="true" style="padding-top: 20px;padding-bottom: 40px;">
        <div class="col">
          <div><span class="Justify-Flex-Center purecounter counter-font count plus" data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="2">20</span>
            <p class="text-center text-uppercase">Tested Count<br></p>
          </div>
        </div>
        <div class="col">
          <div><span class="Justify-Flex-Center purecounter counter-font plus" data-purecounter-start="0" data-purecounter-end="450" data-purecounter-duration="1">450</span>
            <p class="text-center text-uppercase">Positive Count<br></p>
          </div>
        </div>
        <div class="col">
          <div><span class="Justify-Flex-Center purecounter counter-font plus-k" data-purecounter-start="0" data-purecounter-end="23" data-purecounter-duration="1">23</span>
            <p class="text-center text-uppercase">Dead Count<br></p>
          </div>
        </div>
        <div class="col">
          <div><span class="Justify-Flex-Center purecounter counter-font plus" data-purecounter-start="0" data-purecounter-end="275" data-purecounter-duration="1">275</span>
            <p class="text-center text-uppercase">Recovered Count<br></p>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End: Incrementing Animation -->


  <script src="./assets/js/script.min.js?h=eb1f68cfb4a8e6bfebef5f9dbf486544"></script>

</body>

</html>