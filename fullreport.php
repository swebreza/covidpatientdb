<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Untitled</title>
  <?php include './assets/scripts/scripts.html'; ?>
</head>

<body>
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

  <?php

  session_start();
  if (isset($_GET['pid'])) {
    $pid = $_GET['pid'];
    // echo $pid;
    $server = 'localhost';
    $user = "root";
    $password = "";
    $conn = mysqli_connect($server, $user, $password);
    if (!$conn) {
      die("connection to this database failed due to" . mysqli_connect_error());
    }



    $sql = "SELECT * FROM `covid_patient` . `patient` p, `covid_patient` . `hospital` h,`covid_patient` . `report` r WHERE p.pid=$pid and p.pid=r.pid and h.hid=r.hid  ";

    $result = mysqli_query($conn, $sql);


    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_array($result)) {
        echo '
       <table class="table">
        <thead style="display: none;">
          <tr style="display: none;"></tr>
        </thead>
        <tbody>
        <tr>
          <td>ID</td>
          <td>' . $row["pid"] . '</td>
        </tr>
        <tr>
          <td>Name</td>
          <td>' . $row["pname"] . '</td>
        </tr>
        <tr>
          <td>phone number</td>
          <td>' . $row["phno"] . '</td>
        </tr>
        <tr>
          <td>Age</td>
          <td>' . $row["age"] . '</td>
        </tr>
        <tr>
          <td>symptoms</td>

          <td>' . $row["symptoms"] . '</td>
        </tr>
        <tr>
          <td>Blood type</td>
          <td>' . $row["bloodtype"] . '</td>
        </tr>
        <tr>
          <td>Email</td>
          <td>' . $row["email"] . '</td>
        </tr>
        <tr>
          <td>Address</td>
          <td>' . $row["address"] . '</td>
        </tr>
        <tr>
          <td>status</td>
          <td>' . $row['status'] . '</td>
        </tr>
        <tr>
          <td>Hospital</td>
          <td>' . $row["hname"] . '</td>
        </tr>
        <tr>
          <td>Location</td>
          <td>' . $row["location"] . '</td>
        </tr>

        
        </tbody>
      </table>';
      }
    } else {
      echo "0 results";
    }
    session_abort();
  }
  ?>
  <button class="btn btn-primary" type="button" style="text-align: center;margin-left: 50%;" onclick="window.print()">Download</button>

</body>

</html>