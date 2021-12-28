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

  <h1>Hospital</h1><!-- Start: Table With Search -->
  <div class="col-md-12 search-table-col">
    <div class="form-group pull-right col-lg-4"><input type="text" class="search form-control"
        placeholder="Search by typing here.."></div><span class="counter pull-right"></span>
    <div class="table-responsive table table-hover table-bordered results">
      <table class="table table-hover table-bordered">
        <thead class="bill-header cs">
          <tr>
            <th id="trs-hd-1" class="col-lg-1">SL. No.</th>
            <th id="trs-hd-2" class="col-lg-2">Area</th>
            <th id="trs-hd-3" class="col-lg-3">Customer Name</th>
            <th id="trs-hd-4" class="col-lg-2">Status</th>
            <th id="trs-hd-5" class="col-lg-2">Member Since</th>
            <th id="trs-hd-6" class="col-lg-2">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr class="warning no-result">
            <td colspan="12"><i class="fa fa-warning"></i>&nbsp; No Result !!!</td>
          </tr>
          <tr>
            <td>01</td>
            <td>India</td>
            <td>Souvik Kundu</td>
            <td>Negative</td>
            <td>2021</td>
            <td><button class="btn btn-success" style="margin-left: 5px;" type="submit"><i class="fa fa-check"
                  style="font-size: 15px;"></i></button><button class="btn btn-danger" style="margin-left: 5px;"
                type="submit"><i class="fa fa-trash" style="font-size: 15px;"></i></button></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div><!-- End: Table With Search -->
  
</body>

</html>