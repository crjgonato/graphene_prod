<?php
/* Warning view
*/
?>
<?php $session = $this->session->userdata('username');?>

<div class="add-form" style="display:none;">
  <div class="box box-block bg-white">
    <h2><strong>Add New</strong> Warning
      <div class="add-record-btn">
        <button class="btn btn-sm btn-primary add-new-form"><i class="fa fa-minus icon"></i> Hide</button>
      </div>
    </h2>
    <div class="row m-b-1">
      <div class="col-md-12">
        <form action="<?php echo site_url("warning/add_warning") ?>" method="post" name="add_warning" id="xin-form">
          <div class="bg-white">
            <div class="box-block">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="warning_to">Warning To <font color="red">*</font></label>
                    <select name="warning_to" id="warningtoemp" class="form-control" data-plugin="select_hrm" data-placeholder="Choose an Employee">
                      <option value="">_</option>
                      <?php foreach($all_employees as $employee) {?>
                      <option value="<?php echo $employee->user_id;?>"> <?php echo $employee->first_name.' '.$employee->last_name;?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="type">Type of Warning <font color="red">*</font></label>
                        <select class="select2" id="warningtypes" data-plugin="select_hrm" data-placeholder="_" name="type">
                          <option value="">_</option>
                          <?php foreach($all_warning_types as $warning_type) {?>
                          <option value="<?php echo $warning_type->warning_type_id?>"> <?php echo $warning_type->type;?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="subject">Subject <font color="red">*</font></label>
                        <input class="form-control" placeholder="_" name="subject" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="warning_by">Warning By <font color="red">*</font></label>
                        <select name="warning_by" id="warningbyemp" class="form-control" data-plugin="select_hrm" data-placeholder="Choose an Employee">
                          <option value="">_</option>
                          <?php foreach($all_employees as $employee) {?>
                          <option value="<?php echo $employee->user_id;?>"> <?php echo $employee->first_name.' '.$employee->last_name;?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="warning_date">Warning Date <font color="red">*</font></label>
                        <input class="form-control date" placeholder="_" readonly name="warning_date" type="text">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control textarea" placeholder="_" name="description" cols="30" rows="10" id="description"></textarea>
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
<div class="box box-block bg-white animated fadeInUp">
  <h2><strong>List All</strong> Warnings
    <div class="add-record-btn">
      <button class="btn btn-sm btn-primary add-new-form"><i class="fa fa-plus icon"></i> Add New</button>
    </div>
  </h2>
  <div class="table-responsive" data-pattern="priority-columns">
    <table class="table table-condensed table-hover table-bordered dataTable" id="xin_table">
      <thead>
        <tr>
          <th>Action</th>
          <th>Employee</th>
          <th>Warning Date</th>
          <th>Subject</th>
          <th>Warning Type</th>
          <th>Approval Status</th>
          <th>Warning By</th>
        </tr>
      </thead>
    </table>
  </div>
</div>
<script type="text/javascript">
///////////////Warning to (Employee) //////////////////////////
var warningtoemp = document.getElementById("warningtoemp");
var options = [];
// Get elements to sort
for (var i in warningtoemp.childNodes) {
    var tagName = warningtoemp.childNodes[i].tagName;
    if (typeof(tagName) != 'undefined' &&
        tagName.toLowerCase() == "option") {
        /* Field "content" will be used to sort options */
        options.push({
            node: warningtoemp.childNodes[i],
            content: warningtoemp.childNodes[i].innerHTML,
        });
    }
}
// Empty select
while (warningtoemp.firstChild) {
  warningtoemp.removeChild(warningtoemp.firstChild);
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
  warningtoemp.appendChild(options[i].node);
}
//End

///////////////Warning Types //////////////////////////
var warningtypes = document.getElementById("warningtypes");
var options = [];
// Get elements to sort
for (var i in warningtypes.childNodes) {
    var tagName = warningtypes.childNodes[i].tagName;
    if (typeof(tagName) != 'undefined' &&
        tagName.toLowerCase() == "option") {
        /* Field "content" will be used to sort options */
        options.push({
            node: warningtypes.childNodes[i],
            content: warningtypes.childNodes[i].innerHTML,
        });
    }
}
// Empty select
while (warningtypes.firstChild) {
  warningtypes.removeChild(warningtypes.firstChild);
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
  warningtypes.appendChild(options[i].node);
}
//End


///////////////Warning by (Employee) //////////////////////////
var warningbyemp = document.getElementById("warningbyemp");
var options = [];
// Get elements to sort
for (var i in warningbyemp.childNodes) {
    var tagName = warningbyemp.childNodes[i].tagName;
    if (typeof(tagName) != 'undefined' &&
        tagName.toLowerCase() == "option") {
        /* Field "content" will be used to sort options */
        options.push({
            node: warningbyemp.childNodes[i],
            content: warningbyemp.childNodes[i].innerHTML,
        });
    }
}
// Empty select
while (warningbyemp.firstChild) {
  warningbyemp.removeChild(warningbyemp.firstChild);
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
  warningbyemp.appendChild(options[i].node);
}
//End
</script>