<?php
/* Update Attendance view
*/
?>
<?php $session = $this->session->userdata('username');?>

<div class="row m-b-1">
  <div class="col-md-4">
    <div class="box box-block bg-white animated fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h2><strong> Attendance</strong></h2>
          <div class="row">
            <div class="col-md-12">
            <form onsubmit="showAddButton()" class="add form-hrm" method="post" name="update_attendance_report" id="update_attendance_report">
              <input type="hidden" name="emp_id" id="emp_id" value="<?php echo $session['user_id'];?>">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="date">Date <font color="red">*</font></label>
                    <input class="form-control attendance_date" placeholder="Select Date" readonly id="attendance_date" name="attendance_date" type="text" value="<?php echo date('Y-m-d');?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="employee">Employee <font color="red">*</font></label>
                    <select name="employee_id" id="employee_id" class="form-control employee-data" data-plugin="select_hrm" data-placeholder="Choose an Employee" onchange="showSearchButton()">
                      <option value="">_</option>
                      <?php foreach($all_employees as $employee) {?>
                      <option value="<?php echo $employee->user_id;?>" <?php if($session['user_id']==$employee->user_id):?> <?php endif;?>> <?php echo $employee->first_name.' '.$employee->last_name;?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary save search" disabled="true">Search</button>
                </div>
              </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-8">
    <div class="box box-block bg-white animated fadeInUp">
      <h2><strong>List of Attendance</strong>
        <div class="add-record-btn" style="display:none;">
          <button class="btn btn-sm btn-primary" data-toggle="modal" data-target=".add-modal-data" > <i class="fa fa-plus icon"></i> Add New</button>
        </div>
      </h2>
      <p>
      <h4 id="emp_name">
        <?php //echo $employee_name;?>
      </h4>
      </p>
      <p><strong id="office_shift">
        <?php //echo $office_shift;?>
        </strong></p>
      <div class="table-responsive" data-pattern="priority-columns">
        <table class="table table-condensed table-hover table-bordered dataTable" id="xin_table" style="width:100%;">
          <thead>
            <tr>
              <th>Action</th>
              <th>In Time</th>
              <th>Out Time</th>
              <th>Total Work</th>
            </tr>
          </thead>
        </table>
      </div>
      <!-- responsive --> 
    </div>
  </div>
</div>
<script type="text/javascript">
  function showSearchButton() { // Show or enable button for searching employee
    $('.search').prop('disabled', false);
    $('.add-record-btn').hide();
  }
 function showAddButton() { // Show add button
    $('.add-record-btn').show();
  
  }
///////////////Update Attendance//////////////////////////
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
