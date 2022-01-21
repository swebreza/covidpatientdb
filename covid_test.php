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
     <!-- <?php
          // echo 'Test logics';
          ?> -->
     <!-- <form> -->
     <div class="col-md-12 search-table-col">
          <div class="form-group pull-right col-lg-4"><input type="text" class="search form-control" placeholder="Search by typing here.."></div><span class="counter pull-right"></span>
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
                         <form action="" method="POST">
                              <?php
                              $server = 'localhost';
                              $user = "root";
                              $password = "";

                              $conn = mysqli_connect($server, $user, $password);
                              if (!$conn) {
                                   die("connection to this database failed due to" . mysqli_connect_error());
                              }
                              // $sql = "SELECT * FROM covid_patient.patient, covid_patient.patient WHERE ";

                              ?>
                              <tr>
                                   <td>1</td>
                                   <td>
                                        <select>
                                             <option value="positive">Positive</option>
                                             <option value="negative">Negative</option>

                                        </select>
                                   </td>
                                   <td>
                                        <select>
                                             <option value="Hospital name"></option>
                                        </select>
                                   </td>
                                   <td><button class="btn btn-primary" type="submit"> Submit</button></td>
                              </tr>
                         </form>
                    </tbody>
               </table>
               <!-- ------------------------------- -->

               <!-- </form> -->


               </p>

</body>

</html>