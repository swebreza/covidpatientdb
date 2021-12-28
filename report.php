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

  <!-- End: Navigation with Button -->
  <center>
    <form class="form-horizontal " style="padding-top: 4em;">
      <div class="form-group ">
        <label class="control-label col-sm-2" style="padding: 0.3em;">ID:</label>
        <input name="id" /> <br />
        <label class="control-label col-sm-2" style="padding: 0.3em;">Phone no:</label>
        <input name="phno" /><br />
        <input class="btn btn-primary" type="button" value="Submit" style="padding: 0.3em;" />
      </div>
    </form>
  </center>
  <div class="table-responsive" style="text-align: center;margin: 2em;">
    <table class="table">
      <thead style="display: none;">
        <tr style="display: none;"></tr>
      </thead>
      <tbody>
        <tr>
          <td>Name</td>
          <td>Alpha</td>
        </tr>
        <tr>
          <td>Address</td>
          <td>BLR</td>
        </tr>
        <tr>
          <td>Report</td>
          <td>P/N</td>
        </tr>
        <tr>
          <td>Hospital</td>
          <td>Apollo</td>
        </tr>
        <tr>
          <td>Status</td>
          <td>Admitted</td>
        </tr>
      </tbody>
    </table>
  </div><button class="btn btn-primary" type="button" style="text-align: center;margin-left: 50%;">Download</button>

</body>

</html>