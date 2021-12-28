<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
 <title>Untitled</title>
 <?php include './assets/scripts/scripts.html'; ?>
</head>
<link rel="stylesheet" href="">

<body>
 <!-- Start: Contact Form Clean -->
 <section class="contact-clean">
  <form method="post">
   <h2 class="text-center">Input the details</h2><!-- Start: Success Example -->
   <div class="mb-3"><input class="form-control" type="text" name="sno" placeholder="SNO."></div>
   <div class="mb-3"><input class="form-control" type="text" name="name" placeholder="Name"></div>

   <!-- End: Success Example -->
   <!-- Start: Error Example -->
   <div class="mb-3"><input class="form-control is-invalid" type="email" name="email" placeholder="Email">
    <!-- Start: The Error Message --><small class="form-text text-danger">Please enter a correct email address.</small>
    <!-- End: The Error Message -->
   </div><!-- End: Error Example -->
   <div class="mb-3"><textarea class="form-control" name="message" placeholder="Message" rows="14"></textarea></div>
   <div class="mb-3"><button class="btn btn-primary" type="submit">Submit</button></div>
  </form>
 </section><!-- End: Contact Form Clean -->
</body>

</html>