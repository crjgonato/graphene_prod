<?php
/* Employees view
*/
?>
<?php $session = $this->session->userdata('username');?>

<div class="add-form" style="display:none;">
  <div class="box box-block bg-white">
    <h2><strong><?php echo $this->lang->line('graphene_add_new');?></strong> <?php echo $this->lang->line('graphene_employee');?>
      <div class="add-record-btn">
        <button class="btn btn-sm btn-primary add-new-form"><i class="fa fa-minus icon"></i> <?php echo $this->lang->line('graphene_hide');?></button>
      </div>
    </h2>
    <div class="row m-b-1">
      <div class="col-md-12">
        <form action="<?php echo site_url("employees/add_employee") ?>" method="post" name="add_employee" id="xin-form">
          <input type="hidden" name="_user" value="<?php echo $session['user_id'];?>">
          <div class="bg-white">
            <div class="box-block">
            
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="first_name"><?php echo $this->lang->line('graphene_employee_first_name');?> <font color="red">*</font></label>
                        <input class="form-control" placeholder="_" name="first_name" type="text" value="" tabindex="1">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="middle_name" class="control-label">Middle Name <font color="red">*</font></label>
                        <input class="form-control" placeholder="_" name="middle_name" type="text" value="" tabindex="2">
                      </div>
                    </div>
                   
                    
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="employee_id"><?php echo $this->lang->line('dashboard_employee_id');?> <font color="red">*</font></label>
                        <input class="form-control" placeholder="_" name="employee_id" type="text" value="" tabindex="5">
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="department"><?php echo $this->lang->line('graphene_employee_department');?> <font color="red">*</font></label>
                        <select class="form-control" name="department_id" id="aj_department" data-plugin="select_hrm" data-placeholder="_" tabindex="6">
                          <option value="">_</option>
                          <?php foreach($all_departments as $department) {?>
                          <option value="<?php echo $department->department_id?>"> <?php echo $department->department_name?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                    
                  </div>

                  <div class="row">

                  <div class="col-md-6">
                      <div class="form-group">
                        <label for="email" class="control-label"><?php echo $this->lang->line('dashboard_email');?> <font color="red">*</font></label>
                        <input class="form-control" placeholder="_" name="email" type="text" value="" tabindex="9">
                      </div>
                    </div>
                    

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="date_of_joining" class="control-label"><?php echo $this->lang->line('graphene_employee_doj');?> <font color="red">*</font></label>
                        <input class="form-control date_of_joining" placeholder="_" name="date_of_joining" type="text" value="" tabindex="10">
                      </div>
                    </div>
                  
                  </div>

                  <div class="row">
                    <!-- <div class="col-md-6">
                      <div class="form-group">
                        <label for="date_of_birth"><?php echo $this->lang->line('graphene_employee_dob');?></label>
                        <input class="form-control date_of_birth" readonly placeholder="<?php echo $this->lang->line('graphene_employee_dob');?>" name="date_of_birth" type="text" value="">
                      </div>
                    </div> -->
                    

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="office_shift_id" class="control-label"><?php echo $this->lang->line('graphene_employee_office_shift');?> <font color="red">*</font></label>
                        <select class="form-control" name="office_shift_id" data-plugin="select_hrm" data-placeholder="_" tabindex="13">
                          <?php foreach($all_office_shifts as $shift) {?>
                          <option value=""></option>
                          <option value="<?php echo $shift->office_shift_id?>"><?php echo $shift->shift_name?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="username"><?php echo $this->lang->line('dashboard_username');?> <font color="red">*</font></label>
                        <input class="form-control" placeholder="_" name="username" type="text" value="" tabindex="14">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="last_name" class="control-label"><?php echo $this->lang->line('graphene_employee_last_name');?> <font color="red">*</font></label>
                        <input class="form-control" placeholder="_" name="last_name" type="text" value="" tabindex="3">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="gender" class="control-label"><?php echo $this->lang->line('graphene_employee_gender');?> <font color="red">*</font></label>
                        <select class="form-control" name="gender" data-placeholder="_" tabindex="4">
                        <option value=""></option>
                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
                        </select>
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group" id="designation_ajax">
                        <label for="designation"><?php echo $this->lang->line('graphene_designation');?> <font color="red">*</font></label>
                        <select class="form-control" id="designation" name="designation_id" data-plugin="select_hrm" data-placeholder="_" tabindex="7">
                          <option value="">_</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="role"><?php echo $this->lang->line('graphene_employee_role');?> <font color="red">*</font></label>
                        <select class="form-control" id="role" name="role" data-plugin="select_hrm" data-placeholder="_" tabindex="8">
                          <option value="">_</option>
                          <?php foreach($all_user_roles as $role) {?>
                          <option value="<?php echo $role->role_id?>"> <?php echo $role->role_name?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="contact_no" class="control-label"><?php echo $this->lang->line('graphene_contact_number');?> <font color="red">*</font></label>
                        <input class="form-control" placeholder="_" name="contact_no" type="text" value="" tabindex="11">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                      <label for="telephone_no" class="control-label"><?php echo $this->lang->line('graphene_tel_number');?> <font color="red">*</font></label>
                        <input class="form-control" placeholder="_" name="telephone_no" type="text" value="" tabindex="12">
                      </div>
                    </div> 
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="graphene_employee_password"><?php echo $this->lang->line('graphene_employee_password');?> <font color="red">*</font></label>
                        <input class="form-control" placeholder="_" name="password" type="text" value="" tabindex="15">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="confirm_password" class="control-label"><?php echo $this->lang->line('graphene_employee_cpassword');?> <font color="red">*</font></label>
                        <input class="form-control" placeholder="_" name="confirm_password" type="text" value="" tabindex="16">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="address"><?php echo $this->lang->line('graphene_employee_address');?> <font color="red">*</font></label>
                <textarea class="form-control" placeholder="_" name="address" cols="30" rows="3" id="address" tabindex="17"></textarea>
              </div>
              <button type="submit" class="btn btn-primary save" tabindex="17"><?php echo $this->lang->line('graphene_save');?></button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="box box-block bg-white animated fadeInUp">
  <h2><strong><?php echo $this->lang->line('graphene_list_all');?></strong> <?php echo $this->lang->line('employees');?>
    <div class="add-record-btn">
      <button class="btn btn-sm btn-primary add-new-form"><i class="fa fa-plus icon"></i> <?php echo $this->lang->line('graphene_add_new');?></button>
    </div>
  </h2>
  <div class="table-responsive" data-pattern="priority-columns">
    <table class="table table-condensed table-hover table-bordered dataTable" id="xin_table">
      <thead>
        <tr>
          <th><?php echo $this->lang->line('graphene_action');?></th>
          <th><?php echo $this->lang->line('employees_id');?></th>
          <!-- <th><//?php echo $this->lang->line('graphene_employee_picture');?></th> -->
          <th><?php echo $this->lang->line('employees_full_name');?></th>
          <!-- <th><//?php echo $this->lang->line('dashboard_username');?></th> -->
          <!-- <th><//?php echo $this->lang->line('dashboard_email');?></th> -->
          <th><?php echo $this->lang->line('graphene_employee_role');?></th>
          <th><?php echo $this->lang->line('graphene_designation');?></th>
          <!-- <th><//?php echo $this->lang->line('graphene_designation');?></th> -->
          <th><?php echo $this->lang->line('dashboard_graphene_status');?></th>
          <th><?php echo $this->lang->line('graphene_online'); ?></th>
        </tr>
      </thead>
    </table>
  </div>
</div>
<script type="text/javascript">
///////////////Department//////////////////////////
var aj_department = document.getElementById("aj_department");
var options = [];
// Get elements to sort
for (var i in aj_department.childNodes) {
    var tagName = aj_department.childNodes[i].tagName;
    if (typeof(tagName) != 'undefined' &&
        tagName.toLowerCase() == "option") {
        /* Field "content" will be used to sort options */
        options.push({
            node: aj_department.childNodes[i],
            content: aj_department.childNodes[i].innerHTML,
        });
    }
}
// Empty select
while (aj_department.firstChild) {
  aj_department.removeChild(aj_department.firstChild);
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
  aj_department.appendChild(options[i].node);
}
//End
///////////////Designation//////////////////////////
var designation = document.getElementById("designation");
var options = [];
// Get elements to sort
for (var i in designation.childNodes) {
    var tagName = designation.childNodes[i].tagName;
    if (typeof(tagName) != 'undefined' &&
        tagName.toLowerCase() == "option") {
        /* Field "content" will be used to sort options */
        options.push({
            node: designation.childNodes[i],
            content: designation.childNodes[i].innerHTML,
        });
    }
}
// Empty select
while (designation.firstChild) {
  designation.removeChild(designation.firstChild);
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
  designation.appendChild(options[i].node);
}
//End
///////////////Role//////////////////////////
var role = document.getElementById("role");
var options = [];
// Get elements to sort
for (var i in role.childNodes) {
    var tagName = role.childNodes[i].tagName;
    if (typeof(tagName) != 'undefined' &&
        tagName.toLowerCase() == "option") {
        /* Field "content" will be used to sort options */
        options.push({
            node: role.childNodes[i],
            content: role.childNodes[i].innerHTML,
        });
    }
}
// Empty select
while (role.firstChild) {
  role.removeChild(role.firstChild);
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
  role.appendChild(options[i].node);
}
//End
</script>