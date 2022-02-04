<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Untitled</title>
  <?php include './assets/scripts/scripts.html'; ?>
</head>

<body>
  <!-- <?php include './assets/base/nav.html'; ?> -->
  <!-- End: Navigation Clean -->

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
        echo '<b><center>
       <table border="3" style="color:#000; margin-left: auto;
    margin-right: auto;
    width: 50em">
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
      </table><center></b><button class="btn btn-primary" type="button" style="text-align: center;margin-left: 50%;" onclick="window.print()">Download</button>';
      }
    } else {
      echo "<center>No Recode found </center>";
    }
    session_abort();
  }
  ?>


</body>

</html>