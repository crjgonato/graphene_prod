<?php
/* Complaints view
*/
?>
<?php $session = $this->session->userdata('username');?>

<div class="add-form" style="display:none;">
  <div class="box box-block bg-white">
    <h2><strong>Add New</strong> Complaint
      <div class="add-record-btn">
        <button class="btn btn-sm btn-primary add-new-form"><i class="fa fa-minus icon"></i> Hide</button>
      </div>
    </h2>
    <div class="row m-b-1">
      <div class="col-md-12">
        <form action="<?php echo site_url("complaints/add_complaint") ?>" method="post" name="add_complaint" id="xin-form">
          <div class="bg-white">
            <div class="box-block">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="employee">Complaint Employee <font color="red">*</font></label>
                    <select name="employee_id" id="emplname" class="form-control" data-plugin="select_hrm" data-placeholder="Choose an Employee">
                      <option value="">_</option>
                      <?php foreach($all_employees as $employee) {?>
                      <option value="<?php echo $employee->user_id;?>"> <?php echo $employee->first_name.' '.$employee->last_name;?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="title">Complaint Title <font color="red">*</font></label>
                        <input class="form-control" placeholder="_" name="title" type="text">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="complaint_date">Complaint Date <font color="red">*</font></label>
                        <input class="form-control date" placeholder="_" readonly name="complaint_date" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="complaint_against">Complaint Against <font color="red">*</font></label>
                        <select multiple class="select2" id="complaintto" data-plugin="select_hrm" name="complaint_against[]" data-placeholder="_">
                          <option value="">_</option>
                          <?php foreach($all_employees as $employee) {?>
                          <option value="<?php echo $employee->user_id;?>"> <?php echo $employee->first_name.' '.$employee->last_name;?></option>
                          <?php } ?>
                        </select>
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
<div class="box box-block bg-white">
  <h2><strong>List All</strong> Complaints
    <div class="add-record-btn">
      <button class="btn btn-sm btn-primary add-new-form"><i class="fa fa-plus icon"></i> Add New</button>
    </div>
  </h2>
  <div class="table-responsive" data-pattern="priority-columns">
    <table class="table table-condensed table-hover table-bordered dataTable" id="xin_table">
      <thead>
        <tr>
          <th>Action</th>
          <th>Complaint From</th>
          <th>Complaint Against</th>
          <th>Title</th>
          <th>Complaint Date</th>
          <th>Approval Status</th>
        </tr>
      </thead>
    </table>
  </div>
</div>

<script type="text/javascript">
///////////////Complaint//////////////////////////
var emplname = document.getElementById("emplname");
var options = [];
// Get elements to sort
for (var i in emplname.childNodes) {
    var tagName = emplname.childNodes[i].tagName;
    if (typeof(tagName) != 'undefined' &&
        tagName.toLowerCase() == "option") {
        /* Field "content" will be used to sort options */
        options.push({
            node: emplname.childNodes[i],
            content: emplname.childNodes[i].innerHTML,
        });
    }
}
// Empty select
while (emplname.firstChild) {
  emplname.removeChild(emplname.firstChild);
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
  emplname.appendChild(options[i].node);
}
//End
///////////////Complaint to//////////////////////////
var complaintto = document.getElementById("complaintto");
var options = [];
// Get elements to sort
for (var i in complaintto.childNodes) {
    var tagName = complaintto.childNodes[i].tagName;
    if (typeof(tagName) != 'undefined' &&
        tagName.toLowerCase() == "option") {
        /* Field "content" will be used to sort options */
        options.push({
            node: complaintto.childNodes[i],
            content: complaintto.childNodes[i].innerHTML,
        });
    }
}
// Empty select
while (complaintto.firstChild) {
  complaintto.removeChild(complaintto.firstChild);
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
  complaintto.appendChild(options[i].node);
}
//End
</script>