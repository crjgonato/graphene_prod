<?php
/* Leave Application view
*/
?>
<?php $session = $this->session->userdata('username');?>

<div class="add-form" style="display:none;">
  <div class="box box-block bg-white">
    <h2><strong>Add Leave</strong>
      <div class="add-record-btn">
        <button class="btn btn-sm btn-primary add-new-form"><i class="fa fa-minus icon"></i> Hide</button>
      </div>
    </h2>
    <div class="row m-b-1">
      <div class="col-md-12">
        <form action="<?php echo site_url("timesheet/add_leave") ?>" method="post" name="add_leave" id="xin-form">
          <input type="hidden" name="_user" value="<?php echo $session['user_id'];?>">
          <div class="bg-white">
            <div class="box-block">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="leave_type" class="control-label">Leave Type <font color="red">*</font></label>
                    <select class="form-control" id="typeleave" name="leave_type" data-plugin="select_hrm" data-placeholder="_">
                      <option value="">_</option>
                      <?php foreach($all_leave_types as $type) {?>
                      <option value="<?php echo $type->leave_type_id;?>"> <?php echo $type->type_name;?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="start_date">Start Date <font color="red">*</font></label>
                        <input class="form-control date" placeholder="_" readonly name="start_date" type="text" value="">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="end_date">End Date <font color="red">*</font></label>
                        <input class="form-control date" placeholder="_" readonly name="end_date" type="text" value="">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="employees" class="control-label">Leave for Employee <font color="red">*</font></label>
                        <select class="form-control" name="employee_id" id="empleave" data-plugin="select_hrm" data-placeholder="Choose an Employee">
                          <option value="">_</option> 
                          <?php foreach($all_employees as $employee) {?>
                          <option value="<?php echo $employee->user_id?>"> <?php echo $employee->first_name.' '.$employee->last_name;?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                      <label for="withpay">With Pay</label>
                      <select name="withpay" id="" class="form-control" data-plugin="select_hrm">
                          <option value="1"><?php echo $this->lang->line('graphene_yes');?></option>
                          <option value="2"><?php echo $this->lang->line('graphene_no');?></option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="description">Remarks</label>
                    <textarea class="form-control textarea" placeholder="_" name="remarks" cols="30" rows="15" id="remarks"></textarea>
                  </div>
                </div>
                
              </div>
              <div class="form-group">
                <label for="summary">Leave Reason</label>
                <textarea class="form-control" placeholder="_" name="reason" cols="30" rows="3" id="reason"></textarea>
              </div>
              <button type="submit" class="btn btn-primary save">Save</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="box box-block bg-white animated fadeInUp">
  <h2><strong>List All</strong> Leaves
    <div class="add-record-btn">
      <button class="btn btn-sm btn-primary add-new-form"><i class="fa fa-plus icon"></i> Add New</button>
    </div>
  </h2>
  <div class="table-responsive" data-pattern="priority-columns">
    <table class="table table-condensed table-hover table-bordered dataTable" id="xin_table" style="width:100%;">
      <thead>
        <tr>
          <th>Action</th>
          <th>Employee</th>
          <th>Leave Type</th>
          <th>Request Duration</th>
          <th>Applied On</th>
          <th>Reason</th>
          <th>Status</th>
        </tr>
      </thead>
    </table>
  </div>
</div>

<script type="text/javascript">
///////////////Leave Type//////////////////////////
var typeleave = document.getElementById("typeleave");
var options = [];
// Get elements to sort
for (var i in typeleave.childNodes) {
    var tagName = typeleave.childNodes[i].tagName;
    if (typeof(tagName) != 'undefined' &&
        tagName.toLowerCase() == "option") {
        /* Field "content" will be used to sort options */
        options.push({
            node: typeleave.childNodes[i],
            content: typeleave.childNodes[i].innerHTML,
        });
    }
}
// Empty select
while (typeleave.firstChild) {
  typeleave.removeChild(typeleave.firstChild);
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
  typeleave.appendChild(options[i].node);
}
//End

///////////////Leave Employee//////////////////////////
var empleave = document.getElementById("empleave");
var options = [];
// Get elements to sort
for (var i in empleave.childNodes) {
    var tagName = empleave.childNodes[i].tagName;
    if (typeof(tagName) != 'undefined' &&
        tagName.toLowerCase() == "option") {
        /* Field "content" will be used to sort options */
        options.push({
            node: empleave.childNodes[i],
            content: empleave.childNodes[i].innerHTML,
        });
    }
}
// Empty select
while (empleave.firstChild) {
  empleave.removeChild(empleave.firstChild);
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
  empleave.appendChild(options[i].node);
}
//End
</script>
