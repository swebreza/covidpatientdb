<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Untitled</title>
  <?php include './assets/scripts/scripts.html'; ?>

</head>

<body style="text-align: center;">
  <?php include './assets/base/nav.html'; ?>

  <h1>Hospital</h1>
  <p style="padding: 3em;"><a href='./covid_test.php' style="color: aliceblue;">
      <button class="btn btn-success" style="margin-left: 5px;">
        Review Patient Report
      </button></a>

  </p>
  <p style="padding: 3em;"><a href='./doctor.php' style="color: aliceblue;">
      <button class="btn btn-success" style="margin-left: 5px;">
        List of Doctors
      </button></a>

  </p>
  <!-- Start: Table With Search -->
  <div class="col-md-12 search-table-col">
    <div class="form-group pull-right col-lg-4"><input type="text" class="search form-control" placeholder="Search by typing here.."></div><span class="counter pull-right"></span>
    <div class="table-responsive table table-hover table-bordered results">
      <table class="table table-hover table-bordered">
        <thead class="bill-header cs">
          <tr>
            <th id="trs-hd-1" class="col-lg-1">SL. No.</th>
            <th id="trs-hd-2" class="col-lg-2">Hospital Name</th>
            <th id="trs-hd-3" class="col-lg-3">Location</th>
            <!-- <th id="trs-hd-6" class="col-lg-2">Action</th> -->
          </tr>
        </thead>
        <tbody>
          <?php
          $server = 'localhost';
          $user = "root";
          $password = "";

          $conn = mysqli_connect($server, $user, $password);
          if (!$conn) {
            die("connection to this database failed due to" . mysqli_connect_error());
          }
          $sql = "SELECT * FROM covid_patient.hospital";
          $result = mysqli_query($conn, $sql);
          session_start();
          // $userid = $_SESSION['userid'];

          if ($result->num_rows <= 0) {
            echo '<tr class="warning no-result">
            <td colspan="12"><i class="fa fa-warning"></i> No Result !!!</td>
          </tr>';
          } else {
            while ($row = $result->fetch_assoc()) {
              // echo $userid;
              echo '
                  <tr>
                    <td>' . $row["hid"] . '</td>
                    <td>' . $row["hname"] . '</td>
                    <td>' . $row["location"] . '</td>
                     </tr>
                    ';
            }
            // <td><button class="btn btn-success" style="margin-left: 5px;" type="submit"><i class="fa fa-check" style="font-size: 15px;"></i></button><button class="btn btn-danger" style="margin-left: 5px;" type="submit"><i class="fa fa-trash" style="font-size: 15px;"></i></button></td>

          }
          $conn->close();
          ?>
        </tbody>
      </table>
    </div>
  </div><!-- End: Table With Search -->

</body>

</html>