 <?php
  if (isset($_GET['pid'])) {
    session_start();

    $_SESSION['pid'] = $_GET['pid'];
    $server = 'localhost';
    $user = "root";
    $password = "";

    $conn = mysqli_connect($server, $user, $password);

    echo $_GET['pid'];
  }

  ?>
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
   <!-- End: Navigation with Button -->
   <center>
     <form class="form-horizontal " style="padding-top: 4em;" method='get' action="fullreport.php">
       <div class="form-group ">
         <label class="control-label col-sm-2" style="padding: 0.3em;">ID:</label>
         <input name="pid" type="text" value=''>
         <!-- <input class="btn btn-primary" type="button" value="submit" name="submit" style="padding: 0.3em;" /> -->
       </div>
     </form>
   </center>

   <div class="table-responsive" style="text-align: center;margin: 2em;">
     <table class="table">
       <thead style="display: none;">
         <tr style="display: none;"></tr>
       </thead>
       <tbody>


         </tr>
       </tbody>
     </table>

 </body>

 </html>