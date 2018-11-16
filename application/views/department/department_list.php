<?php
/* Departments view
*/
?>
<?php $session = $this->session->userdata('username');?>

<div class="row m-b-1 animated fadeInUp">
  <div class="col-md-4">
    <div class="box box-block bg-white">
      <h2><strong><?php echo $this->lang->line('graphene_add_new');?></strong> <?php echo $this->lang->line('graphene_department');?></h2>
      <form class="m-b-1 add" method="post" action="<?php echo site_url("department/add_department") ?>" name="add_department" id="xin-form">
        <input type="hidden" name="user_id" value="<?php echo $session['user_id'];?>">
        <div class="form-group">
          <label for="name"><?php echo $this->lang->line('graphene_department_name');?> <font color="red">*</font></label>
          <input type="text" class="form-control" name="department_name" placeholder="_">
        </div>
        <div class="form-group">
          <label for="name"><?php echo $this->lang->line('graphene_location');?> <font color="red">*</font></label>
          <select name="location_id" id="locationname" class="form-control" data-plugin="select_hrm" data-placeholder="_">
            <option value="">_</option>
            <?php foreach($all_locations as $location) {?>
            <option value="<?php echo $location->location_id;?>"> <?php echo $location->location_name;?></option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <label for="name"><?php echo $this->lang->line('graphene_department_head');?> <font color="red">*</font></label>
          <select name="employee_id" id="depthead" class="form-control" data-plugin="select_hrm" data-placeholder="_">
            <option value="">_</option>
            <?php foreach($all_employees as $employee) {?>
            <?php
                /* get user_role */
				        $user_role = $this->Graphene_model->read_user_role_info($employee->user_role_id);
				    ?>
            <option value="<?php echo $employee->user_id;?>"> <?php echo $employee->first_name.' '.$employee->last_name;?> (<?php echo $user_role[0]->role_name;?>)</option>
            <?php } ?>
          </select>
        </div>
        <button type="submit" class="btn btn-primary save"><?php echo $this->lang->line('graphene_save');?></button>
      </form>
    </div>
  </div>
  <div class="col-md-8">
    <div class="box box-block bg-white">
      <h2><strong><?php echo $this->lang->line('graphene_list_all');?></strong> <?php echo $this->lang->line('departments');?></h2>
      <div class="table-responsive" data-pattern="priority-columns">
        <table class="table table-condensed table-hover table-bordered dataTable" id="xin_table">
          <thead>
            <tr>
              <th><?php echo $this->lang->line('graphene_action');?></th>
              <th><?php echo $this->lang->line('graphene_department_name');?></th>
              <th><?php echo $this->lang->line('graphene_department_head');?></th>
              <th><?php echo $this->lang->line('graphene_location');?></th>
              <th><?php echo $this->lang->line('graphene_added_by');?></th>
            </tr>
          </thead>
        </table>
      </div>
      <!-- responsive --> 
    </div>
  </div>
</div>
<script type="text/javascript">
///////////////Location Name//////////////////////////
var locationname = document.getElementById("locationname");
var options = [];
// Get elements to sort
for (var i in locationname.childNodes) {
    var tagName = locationname.childNodes[i].tagName;
    if (typeof(tagName) != 'undefined' &&
        tagName.toLowerCase() == "option") {
        /* Field "content" will be used to sort options */
        options.push({
            node: locationname.childNodes[i],
            content: locationname.childNodes[i].innerHTML,
        });
    }
}
// Empty select
while (locationname.firstChild) {
  locationname.removeChild(locationname.firstChild);
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
  locationname.appendChild(options[i].node);
}
//End
///////////////Department Head//////////////////////////
var depthead = document.getElementById("depthead");
var options = [];
// Get elements to sort
for (var i in depthead.childNodes) {
    var tagName = depthead.childNodes[i].tagName;
    if (typeof(tagName) != 'undefined' &&
        tagName.toLowerCase() == "option") {
        /* Field "content" will be used to sort options */
        options.push({
            node: depthead.childNodes[i],
            content: depthead.childNodes[i].innerHTML,
        });
    }
}
// Empty select
while (depthead.firstChild) {
  depthead.removeChild(depthead.firstChild);
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
  depthead.appendChild(options[i].node);
}
//End
</script>