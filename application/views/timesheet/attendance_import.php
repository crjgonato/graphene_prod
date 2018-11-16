<?php
/* Attendance Import view
*/
?>
<?php $session = $this->session->userdata('username');?>

<div class="row m-b-1">
  <div class="col-md-6">
    <div class="box box-block bg-white product-view mb-8 animated fadeInUp">
          <h5>Please import CSV file only</h5>
          <p class="font-100 text-muted mb-1">The first line in downloaded csv file should remain as it is. Please do not change the order of columns in csv file.</p>
          <p class="font-100 text-muted mb-1">The correct column order is (Employee ID, Attendance Date, Clock In Time and Date, Clock Out Time and Date) and <strong>you must follow</strong> the csv file, otherwise you will get an error while importing the csv file.</p>
          <h6><a href="<?php echo base_url();?>uploads/csv/sample-csv-attendance.csv" class="btn btn-default"> <i class="fa fa-download"></i> Click to download sample file
          </a></h6>
          <div class="pv-form mt-2">
            <h6 class="mt-0">Upload File</h6>
            <form name="import_attendance" method="post" action="<?php echo site_url("timesheet/import_attendance"); ?>" id="xin-form" enctype="multipart/form-data">
            <span class="btn btn-info btn-file">
              Browse File <input type="file" name="file" id="file">
            </span>
              <br><br>
              <h6>Please select <b>CSV</b> or <b>Excel</b> file (allowed file size 500 KB)</h6>
            	<div class="mt-1">
              <button type="submit" class="btn btn-primary">Import</button>
            </div>
           </form> 
          </div>
        </div>
  </div>
</div>