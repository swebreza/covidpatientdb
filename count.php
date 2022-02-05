 <!-- Start: Incrementing Animation -->
 <script src="./assets/js/script.min.js?h=eb1f68cfb4a8e6bfebef5f9dbf486544"></script> <?php include './assets/scripts/scripts.html'; ?>
 <section data-aos="fade-up" data-aos-duration="400" data-aos-once="true" class="font-dark">
  <div class="container">
   <h3 data-aos="fade-up" data-aos-duration="400" data-aos-delay="200" data-aos-once="true" class="text-center all-capital p-4" style="font-size: 30px;font-weight: 300;line-height: 38px;letter-spacing: 2px;">
    Current Status</h3>
   <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-4 row-cols-xxl-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="150" data-aos-once="true" style="padding-top: 20px;padding-bottom: 40px;">
    <div class="col">
     <div><span class="Justify-Flex-Center purecounter counter-font count plus" data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="2">
       <?php
       // if (isset($_POST['pid'])) {
       $server = 'localhost';
       $user = "root";
       $password = "";
       $conn = mysqli_connect($server, $user, $password, 'covid_patient');
       if (!$conn) {
        die("connection to this database failed due to" . mysqli_connect_error());
       }
       $sql = "SELECT COUNT(*) AS Count FROM `patient`;";
       $result = mysqli_query($conn, $sql);
       if ($result->num_rows <= 0) {
        echo '<tr class="warning no-result">
            <td colspan="12"><i class="fa fa-warning"></i> No Result !!!</td>
          </tr>';
       } else {
        while ($row = $result->fetch_assoc()) {
         echo '
                  <tr>
                    <td>' . $row["Count"] . '</td>';
        }
       }
       ?> </span>
      <p class="text-center text-uppercase">Tested Count<br></p>
     </div>
    </div>
    <div class="col">
     <div><span class="Justify-Flex-Center purecounter counter-font plus" data-purecounter-start="0" data-purecounter-end="450" data-purecounter-duration="1">
       <?php
       $server = 'localhost';
       $user = "root";
       $password = "";
       $conn = mysqli_connect($server, $user, $password, 'covid_patient');
       if (!$conn) {
        die("connection to this database failed due to" . mysqli_connect_error());
       }
       $sql = "SELECT COUNT(status) AS Count FROM `report` where status='positive';";
       $result = mysqli_query($conn, $sql);
       if ($result->num_rows <= 0) {
        echo '<tr class="warning no-result">
            <td colspan="12"><i class="fa fa-warning"></i> No Result !!!</td>
          </tr>';
       } else {
        while ($row = $result->fetch_assoc()) {
         echo '
                  <tr>
                    <td>' . $row["Count"] . '</td>';
        }
       }
       ?></span>
      <p class="text-center text-uppercase">Positive Count<br></p>
     </div>
    </div>
    <div class="col">
     <div><span class="Justify-Flex-Center purecounter counter-font plus-k" data-purecounter-start="0" data-purecounter-end="23" data-purecounter-duration="1">
       <?php
       $server = 'localhost';
       $user = "root";
       $password = "";
       $conn = mysqli_connect($server, $user, $password, 'covid_patient');
       if (!$conn) {
        die("connection to this database failed due to" . mysqli_connect_error());
       }
       $sql = "SELECT COUNT(status) AS Count FROM `report` where status='negative';";
       $result = mysqli_query($conn, $sql);
       if ($result->num_rows <= 0) {
        echo '<tr class="warning no-result">
            <td colspan="12"><i class="fa fa-warning"></i> No Result !!!</td>
          </tr>';
       } else {
        while ($row = $result->fetch_assoc()) {
         echo '
                  <tr>
                    <td>' . $row["Count"] . '</td>';
        }
       }
       ?></span>
      <p class="text-center text-uppercase">Negative Count<br></p>
     </div>
    </div>
    <div class="col">
     <div><span class="Justify-Flex-Center purecounter counter-font plus" data-purecounter-start="0" data-purecounter-end="275" data-purecounter-duration="1">
       <?php
       $server = 'localhost';
       $user = "root";
       $password = "";
       $conn = mysqli_connect($server, $user, $password, 'covid_patient');
       if (!$conn) {
        die("connection to this database failed due to" . mysqli_connect_error());
       }
       $sql = "SELECT COUNT(*) AS Count FROM `hospital` ;";
       $result = mysqli_query($conn, $sql);
       if ($result->num_rows <= 0) {
        echo '<tr class="warning no-result">
            <td colspan="12"><i class="fa fa-warning"></i> No Result !!!</td>
          </tr>';
       } else {
        while ($row = $result->fetch_assoc()) {
         echo '
                  <tr>
                    <td>' . $row["Count"] . '</td>';
        }
       }
       ?></span>
      <p class="text-center text-uppercase">Hospital Count<br></p>
     </div>
    </div>
   </div>
  </div>
 </section><!-- End: Incrementing Animation -->