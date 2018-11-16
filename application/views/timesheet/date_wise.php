<?php
/* Date Attendance view
*/
?>
<?php $session = $this->session->userdata('username');?>

<div class="row m-b-1">
  <div class="col-md-12">
    <div class="box box-block bg-white col-md-8">
      <div class="row">
        <div class="col-md-12">
          <h2><strong>Select Date</strong></h2>
          <div class="row">
            <div class="col-md-12">
            <form class="add form-hrm" method="post" name="attendance_datewise_report" id="attendance_datewise_report" action="ajax_table.php">
              <input type="hidden" name="user_id" id="user_id" value="<?php echo $session['user_id'];?>">
              <div class="row">
                <div class="col-md-5">
                  <div class="form-group">
                    <input class="form-control attendance_date" placeholder="Select Date" readonly id="start_date" name="start_date" type="text" value="<?php echo date('Y-m-d');?>">
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                    <input class="form-control attendance_date" placeholder="Select Date" readonly id="end_date" name="end_date" type="text" value="<?php echo date('Y-m-d');?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-10">
                  <div class="form-group">
                    <select name="employee_id" id="employee_id" class="form-control" data-plugin="select_hrm">
                      <option value="0" selected>Select Employee</option>
                      <?php foreach($all_employees as $employee) {?>
                      <option value="<?php echo $employee->user_id;?>" <?php if($session['user_id']==$employee->user_id):?> <?php endif;?>> <?php echo $employee->first_name.' '.$employee->last_name;?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group"> &nbsp;
                    <button type="submit" class="btn btn-primary save">Search</button>
                  </div>
                </div>
              </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row m-b-1">
<div class="col-md-12">
<div class="box box-block bg-white">
  <h2><strong>Attendance</strong></h2>
  <div class="table-responsive" data-pattern="priority-columns">
    <table class="table table-condensed table-hover table-bordered dataTable" id="xin_table" style="width:100%;">
      <thead>
        <tr>
          <th>Status</th>
          <th>Date</th>
          <th>Clock In</th>
          <th>Clock Out</th>
          <th>Late</th>
          <th>Undertime</th>
          <th>Overtime</th>
          <th>Total Work</th>
          <th>Total Rest</th>
        </tr>
      </thead>
    </table>
  </div>
</div>

<script type="text/javascript">
///////////////Promotion//////////////////////////
var employee_id = document.getElementById("employee_id");
var options = [];
// Get elements to sort
for (var i in employee_id.childNodes) {
    var tagName = employee_id.childNodes[i].tagName;
    if (typeof(tagName) != 'undefined' &&
        tagName.toLowerCase() == "option") {
        /* Field "content" will be used to sort options */
        options.push({
            node: employee_id.childNodes[i],
            content: employee_id.childNodes[i].innerHTML,
        });
    }
}
// Empty select
while (employee_id.firstChild) {
  employee_id.removeChild(employee_id.firstChild);
}
// Sort function
function sort(a, b){
    var aa = a.content.toLowerCase();
    var bb = b.content.toLowerCase();
    if(aa > bb) {
        return 1;
    } else if (aa < bb) {
        return -1;
    }
    return 0;
}
// Sort array using previous function
options.sort(sort);
// Add the nodes again in order
for (var i in options) {
  employee_id.appendChild(options[i].node);
}
//End
</script>
