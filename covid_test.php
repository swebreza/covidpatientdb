 <?php
     function submitHandel($id)
     {
          $server = 'localhost';
          $user = "root";
          $password = "";
          $conn = mysqli_connect($server, $user, $password);
          if (!$conn) {
               die("connection to this database failed due to" . mysqli_connect_error());
          }

          $status = $_POST['status'];
          $hospital = $_POST['hospital'];
          $sql = "INSERT INTO `covid_patient`.`report`( `pid`,`hid`,`status`) VALUES ('$id','$hospital','$status')";
          $result = mysqli_query($conn, $sql);
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

      <p style="padding: 5em; font-size: larger; ">
      <h1>Results Analysis.</h1>

      <div class="col-md-12 search-table-col">
           <div class="form-group pull-right col-lg-4">
                <input type="text" class="search form-control" laceholder="Search by typing here..">
           </div>
           <span class="counter pull-right">

           </span>
           <div class="table-responsive table table-hover table-bordered results">
                <table class="table table-hover table-bordered">
                     <thead class="bill-header cs">
                          <tr>
                               <th id="trs-hd-1" class="col-lg-1">Patient ID</th>
                               <th id="trs-hd-2" class="col-lg-2">result</th>
                               <th id="trs-hd-2" class="col-lg-2">Hospital</th>
                               <th id="trs-hd-3" class="col-lg-3">Action</th>
                               <!-- <th id="trs-hd-6" class="col-lg-2">Action</th> -->
                          </tr>
                     </thead>
                     <tbody>


                          <?php
                              $server = 'localhost';
                              $user = "root";
                              $password = "";
                              $conn = mysqli_connect($server, $user, $password);
                              // $sql = "SELECT p.pid FROM covid_patient.covid_patient p,covid_patient.covid_test c where p.pid != c.pid";
                              $sql = "SELECT p.pid AS id FROM `covid_patient` . `patient` p,`covid_patient` . `covid_test` c WHERE c.pid <> p.pid; ";
                              $result = mysqli_query($conn, $sql);
                              // echo $sql;


                              function Hospitals()
                              {
                                   $server = 'localhost';
                                   $user = "root";
                                   $password = "";
                                   $conn = mysqli_connect($server, $user, $password);
                                   $sqlh = "SELECT * FROM covid_patient.hospital";
                                   $resulth = mysqli_query($conn, $sqlh);
                                   while ($rowh = mysqli_fetch_assoc($resulth)) {
                                        echo '<option value="' . $rowh['hid'] . '">' . $rowh['hname'] . '</option>';
                                   }
                              }
                              if (mysqli_num_rows($result) < 0) {
                                   echo ' No Result !!!';
                              } else {

                                   while ($row = $result->fetch_assoc()) {
                                        echo '<form method="post">';
                                        echo ' <tr><td  value="' . $row['id'] . '" name="' . $row['id'] . '">' . $row['id'] . '</td>
                                                  <td>
                                         <select name="status">
                                              <option value="positive">Positive</option>
                                              <option value="negative">Negative</option>
                                         </select>
                                         </td>'; ?>
                                    <td><select name="hospital">';
                                    <?php
                                        Hospitals();
                                        echo ' </select>
                                                  </td>
                                                  <td><button class="btn btn-primary" type="submit" onclick="' . submitHandel($row['id']) . '" > Submit</button></td></tr>
                                             ';
                                        echo '</form>';
                                   }
                              }


                                        ?>




                     </tbody>
                </table>

                </p>

 </body>

 </html>