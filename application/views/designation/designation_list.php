<?php
/*
* Designation View
*/
$session = $this->session->userdata('username');
?>

<div class="row m-b-1 animated fadeInUp">
  <div class="col-md-4">
    <div class="box box-block bg-white">
      <h2><strong><?php echo $this->lang->line('graphene_add_new');?></strong> <?php echo $this->lang->line('graphene_designation');?></h2>
      <form class="m-b-1" action="<?php echo site_url("designation/add_designation") ?>" method="post" name="add_designation" id="xin-form">
        <div class="form-group">
          <input type="hidden" name="user_id" value="<?php echo $session['user_id'];?>">
          <label for="name">Department Name</label>
          <select class="select2" id="disdeptname" data-plugin="select_hrm" data-placeholder="_" name="department_id">
            <option value="">_</option>
            <?php foreach($all_departments as $deparment) {?>
            <option value="<?php echo $deparment->department_id?>"> <?php echo $deparment->department_name?></option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <label for="name"><?php echo $this->lang->line('graphene_designation_name');?></label>
          <input type="text" class="form-control" name="designation_name" placeholder="_">
        </div>
        <button type="submit" class="btn btn-primary save"><?php echo $this->lang->line('graphene_save');?></button>
      </form>
    </div>
  </div>
  <div class="col-md-8">
    <div class="box box-block bg-white">
      <h2><strong><?php echo $this->lang->line('graphene_list_all');?></strong> <?php echo $this->lang->line('designations');?></h2>
      <div class="table-responsive" data-pattern="priority-columns">
        <table class="table table-condensed table-hover table-bordered dataTable" id="xin_table">
          <thead>
            <tr>
              <th style="width:50px;"><?php echo $this->lang->line('graphene_action');?></th>
              <th><?php echo $this->lang->line('graphene_designation');?></th>
              <th><?php echo $this->lang->line('graphene_department');?></th>
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
///////////////Designation//////////////////////////
var disdeptname = document.getElementById("disdeptname");
var options = [];
// Get elements to sort
for (var i in disdeptname.childNodes) {
    var tagName = disdeptname.childNodes[i].tagName;
    if (typeof(tagName) != 'undefined' &&
        tagName.toLowerCase() == "option") {
        /* Field "content" will be used to sort options */
        options.push({
            node: disdeptname.childNodes[i],
            content: disdeptname.childNodes[i].innerHTML,
        });
    }
}
// Empty select
while (disdeptname.firstChild) {
  disdeptname.removeChild(disdeptname.firstChild);
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
  disdeptname.appendChild(options[i].node);
}
//End
</script>