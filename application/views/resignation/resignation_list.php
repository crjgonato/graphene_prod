<?php
/* Resignation view
*/
?>
<?php $session = $this->session->userdata('username');?>

<div class="add-form" style="display:none;">
  <div class="box box-block bg-white">
    <h2><strong>Add New</strong> Resignation
      <div class="add-record-btn">
        <button class="btn btn-sm btn-primary add-new-form"><i class="fa fa-minus icon"></i> Hide</button>
      </div>
    </h2>
    <div class="row m-b-1">
      <div class="col-md-12">
        <form action="<?php echo site_url("resignation/add_resignation") ?>" method="post" name="add_resignation" id="xin-form">
          <input type="hidden" name="user_id" value="<?php echo $session['user_id'];?>">
          <div class="bg-white">
            <div class="box-block">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="employee">Resigning Employee <font color="red">*</font></label>
                    <select name="employee_id" id="resignemp" class="form-control" data-plugin="select_hrm" data-placeholder="Choose an Employee">
                      <option value="">_</option>
                      <?php foreach($all_employees as $employee) {?>
                      <option value="<?php echo $employee->user_id;?>"> <?php echo $employee->first_name.' '.$employee->last_name;?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="notice_date">Notice Date <font color="red">*</font></label>
                        <input class="form-control date" placeholder="_" readonly name="notice_date" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="resignation_date">Resignation Date <font color="red">*</font></label>
                        <input class="form-control date" placeholder="_" readonly name="resignation_date" type="text">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="reason">Resignation Reason </label>
                    <textarea class="form-control textarea" placeholder="_" name="reason" cols="30" rows="5" id="reason"></textarea>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary save">Save</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="box box-block bg-white">
  <h2><strong>List All</strong> Resignations
    <div class="add-record-btn">
      <button class="btn btn-sm btn-primary add-new-form"><i class="fa fa-plus icon"></i> Add New</button>
    </div>
  </h2>
  <div class="table-responsive" data-pattern="priority-columns">
    <table class="table table-condensed table-hover table-bordered dataTable" id="xin_table">
      <thead>
        <tr>
          <th>Action</th>
          <th>Employee Name</th>
          <th>Notice Date</th>
          <th>Resignation Date</th>
          <th>Added By</th>
        </tr>
      </thead>
    </table>
  </div>
</div>

<script type="text/javascript">
///////////////Promotion//////////////////////////
var resignemp = document.getElementById("resignemp");
var options = [];
// Get elements to sort
for (var i in resignemp.childNodes) {
    var tagName = resignemp.childNodes[i].tagName;
    if (typeof(tagName) != 'undefined' &&
        tagName.toLowerCase() == "option") {
        /* Field "content" will be used to sort options */
        options.push({
            node: resignemp.childNodes[i],
            content: resignemp.childNodes[i].innerHTML,
        });
    }
}
// Empty select
while (resignemp.firstChild) {
  resignemp.removeChild(resignemp.firstChild);
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
  resignemp.appendChild(options[i].node);
}
//End
</script>