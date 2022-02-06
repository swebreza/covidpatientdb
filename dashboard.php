<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Untitled</title>




</head>

<body>
  <!-- Start: Navigation Clean -->
  <?php include './assets/base/nav.html'; ?>
  <!-- End: Navigation Clean -->
  <!-- Start: Incrementing Animation -->
  <?php include './count.php'; ?>
  <!-- End: Incrementing Animation -->
  <div><a href='./register.php' style="color: aliceblue;">
      <button class="btn btn-success" style="margin-left: 5px;">
        Add Patient
      </button></a>
  </div>
  <!-- Start: Table With Search -->
  <div class="col-md-12 search-table-col">
    <div class="form-group pull-right col-lg-4"><input type="text" class="search form-control" placeholder="Search by typing here.."></div><span class="counter pull-right"></span>
    <div class="table-responsive table table-hover table-bordered results">
      <table class="table table-hover table-bordered">
        <thead class="bill-header cs">
          <tr>
            <th id="trs-hd-1" class="col-lg-1">ID</th>
            <th id="trs-hd-2" class="col-lg-2">Name</th>
            <th id="trs-hd-3" class="col-lg-1">phone</th>
            <th id="trs-hd-4" class="col-lg-1">age</th>
            <th id="trs-hd-5" class="col-lg-1">symptoms</th>
            <th id="trs-hd-6" class="col-lg-1">bloodtype</th>
            <th id="trs-hd-7" class="col-lg-2">email </th>
            <th id="trs-hd-8" class="col-lg-2">Address </th>
            <!-- <th id="trs-hd-9" class="col-lg-1">Action</th> -->
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
          $sql = "SELECT * FROM covid_patient.patient";
          $result = mysqli_query($conn, $sql);
          if ($result->num_rows <= 0) {
            echo '<tr class="warning no-result">
            <td colspan="12"><i class="fa fa-warning"></i> No Result !!!</td>
          </tr>';
          } else {
            while ($row = $result->fetch_assoc()) {
              echo '
                  <tr>
                    <td>' . $row["pid"] . '</td>
                    <td>' . $row["pname"] . '</td>
                    <td>' . $row["phno"] . '</td>
                    <td>' . $row["age"] . '</td>
                    <td>' . $row["symptoms"] . '</td>
                    <td>' . $row["bloodtype"] . '</td>
                    <td>' . $row["email"] . '</td>
                    <td>' . $row["address"] . '</td>
                   
                    
                    ';
              //   <td><button class="btn btn-success" style="margin-left: 5px;" type="submit"><i class="fa fa-check" style="font-size: 15px;"></i></button><button class="btn btn-danger" style="margin-left: 5px;" type="submit"><i class="fa fa-trash" style="font-size: 15px;"></i></button></td>
              // </tr>'
            }
          }
          $conn->close();
          ?>
        </tbody>
      </table>
    </div><!-- End: Table With Search -->
  </div><!-- Start: Footer Clean -->
  <footer class="footer-clean">
    <div class="container">
      <div class="row justify-content-center">
        <!-- Start: Services -->
        <div class="col-sm-4 col-md-3 item">
          <h3>Services</h3>
          <ul>
            <li><a href="#">Web design</a></li>
            <li><a href="#">Development</a></li>
            <li><a href="#">Hosting</a></li>
          </ul>
        </div><!-- End: Services -->
        <!-- Start: About -->
        <div class="col-sm-4 col-md-3 item">
          <h3>About</h3>
          <ul>
            <li><a href="#">Company</a></li>
            <li><a href="#">Team</a></li>
            <li><a href="#">Legacy</a></li>
          </ul>
        </div><!-- End: About -->
        <!-- Start: Careers -->
        <div class="col-sm-4 col-md-3 item">
          <h3>Careers</h3>
          <ul>
            <li><a href="#">Job openings</a></li>
            <li><a href="#">Employee success</a></li>
            <li><a href="#">Benefits</a></li>
          </ul>
        </div><!-- End: Careers -->
        <!-- Start: Social Icons -->
        <div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a>
          <p class="copyright">Company Name © 2021</p>
        </div><!-- End: Social Icons -->
      </div>
    </div>
  </footer><!-- End: Footer Clean -->

</body>

</html>