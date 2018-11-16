<?php
/* Location view
*/
?>
<?php $session = $this->session->userdata('username');?>

<div class="add-form" style="display:none;">
  <div class="box box-block bg-white">
    <h2><strong><?php echo $this->lang->line('graphene_add_new');?></strong> <?php echo $this->lang->line('graphene_location');?>
      <div class="add-record-btn">
        <button class="btn btn-sm btn-primary add-new-form"><i class="fa fa-minus icon"></i> <?php echo $this->lang->line('graphene_hide');?></button>
      </div>
    </h2>
    <div class="row m-b-1">
      <div class="col-md-12">
        <form class="m-b-1 add" method="post" name="add_location" id="xin-form">
          <input type="hidden" name="user_id" value="<?php echo $session['user_id'];?>">
          <div class="bg-white">
            <div class="box-block">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="company_name">Company <font color="red">*</font></label>
                    <select class="form-control" name="company" data-plugin="select_hrm" data-placeholder="_">
                      <option value="">_</option>
                      <?php foreach($all_companies as $company) {?>
                      <option value="<?php echo $company->company_id;?>"> <?php echo $company->name;?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="name"><?php echo $this->lang->line('graphene_location_name');?> <font color="red">*</font></label>
                    <input class="form-control" placeholder="_" name="name" type="text">
                  </div>
                  <div class="form-group">
                    <label for="email"><?php echo $this->lang->line('graphene_email');?> <font color="red">*</font></label>
                    <input class="form-control" placeholder="_" name="email" type="email">
                  </div>
                  <div class="form-group">
                    
                    <div class="row">
                      <div class="col-md-6">
                        <label for="phone"><?php echo $this->lang->line('graphene_phone');?> <font color="red">*</font></label>
                   	 <input class="form-control" placeholder="" name="phone" type="number">
                      </div>
                      <div class="col-md-6">
                      	<label for="graphene_faxn"><?php echo $this->lang->line('graphene_faxn');?> <font color="red">*</font></label>
                    	<input class="form-control" placeholder="_" name="fax" type="number">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-6">
                        <label for="email"><?php echo $this->lang->line('graphene_view_locationh');?> <font color="red">*</font></label>
                    	<select class="form-control" id="locationhead" name="location_head" data-plugin="select_hrm" data-placeholder="_">
                      <option value=""><?php echo $this->lang->line('graphene_select_one');?></option>
                      <?php foreach($all_employees as $employee) {?>
                      <option value="<?php echo $employee->user_id;?>"> <?php echo $employee->first_name.' '.$employee->last_name;?></option>
                      <?php } ?>
                    </select>
                      </div>
                      <div class="col-md-6">
                      	<label for="website"><?php echo $this->lang->line('graphene_view_locationmgr');?> <font color="red">*</font></label>
                        <select class="form-control" id="locationmgr" name="location_manager" data-plugin="select_hrm" data-placeholder="_">
                      <option value=""><?php echo $this->lang->line('graphene_select_one');?></option>
                      <?php foreach($all_employees as $employee) {?>
                      <option value="<?php echo $employee->user_id;?>"> <?php echo $employee->first_name.' '.$employee->last_name;?></option>
                      <?php } ?>
                    </select>
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="address"><?php echo $this->lang->line('graphene_address');?> <font color="red">*</font></label>
                    <input class="form-control" placeholder="<?php echo $this->lang->line('graphene_address_1');?>" name="address_1" type="text">
                    <br>
                    <input class="form-control" placeholder="<?php echo $this->lang->line('graphene_address_2');?>" name="address_2" type="text">
                    <br>
                    <div class="row">
                      <div class="col-xs-5">
                      <label for="address">City <font color="red">*</font></label>
                        <input class="form-control" placeholder="_" name="city" type="text">
                      </div>
                      <div class="col-xs-4">
                      <label for="address">State <font color="red">*</font></label>
                        <input class="form-control" placeholder="_" name="state" type="text">
                      </div>
                      <div class="col-xs-3">
                      <label for="address">Zipcode <font color="red">*</font></label>
                        <input class="form-control" placeholder="_" name="zipcode" type="text">
                      </div>
                    </div>
                    <br>
                    <label for="address">Country <font color="red">*</font></label>
                    <select class="form-control" name="country" data-plugin="select_hrm" data-placeholder="_">
                      <option value="">_</option>
                      <?php foreach($all_countries as $country) {?>
                      <option value="<?php echo $country->country_id;?>"> <?php echo $country->country_name;?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="text-right">
                <button type="submit" class="btn btn-primary save"><?php echo $this->lang->line('graphene_save');?> <i class="icon-circle-right2 position-right"></i> <i class="icon-spinner3 spinner position-left"></i></button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="box box-block bg-white animated fadeInUp">
  <h2><strong><?php echo $this->lang->line('graphene_list_all');?></strong> <?php echo $this->lang->line('graphene_locations');?>
    <div class="add-record-btn">
      <button class="btn btn-sm btn-primary add-new-form"><i class="fa fa-plus icon"></i> <?php echo $this->lang->line('graphene_add_new');?></button>
    </div>
  </h2>
  <div class="table-responsive" data-pattern="priority-columns">
    <table class="table table-condensed table-hover table-bordered dataTable" id="xin_table" style="width:100%;">
      <thead>
        <tr>
        <tr>
          <th><?php echo $this->lang->line('graphene_action');?></th>
          <th><?php echo $this->lang->line('graphene_location_name');?></th>
          <th><?php echo $this->lang->line('graphene_view_locationh');?></th>
          <th><?php echo $this->lang->line('module_company_title');?></th>
          <th><?php echo $this->lang->line('graphene_city');?></th>
          <th><?php echo $this->lang->line('graphene_country');?></th>
          <th><?php echo $this->lang->line('graphene_added_by');?></th>
        </tr>
          </tr>
        
      </thead>
    </table>
  </div>
</div>

<script type="text/javascript">
///////////////Location Head//////////////////////////
var locationhead = document.getElementById("locationhead");
var options = [];
// Get elements to sort
for (var i in locationhead.childNodes) {
    var tagName = locationhead.childNodes[i].tagName;
    if (typeof(tagName) != 'undefined' &&
        tagName.toLowerCase() == "option") {
        /* Field "content" will be used to sort options */
        options.push({
            node: locationhead.childNodes[i],
            content: locationhead.childNodes[i].innerHTML,
        });
    }
}
// Empty select
while (locationhead.firstChild) {
  locationhead.removeChild(locationhead.firstChild);
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
  locationhead.appendChild(options[i].node);
}
//End
///////////////Location Manager//////////////////////////
var locationmgr = document.getElementById("locationmgr");
var options = [];
// Get elements to sort
for (var i in locationmgr.childNodes) {
    var tagName = locationmgr.childNodes[i].tagName;
    if (typeof(tagName) != 'undefined' &&
        tagName.toLowerCase() == "option") {
        /* Field "content" will be used to sort options */
        options.push({
            node: locationmgr.childNodes[i],
            content: locationmgr.childNodes[i].innerHTML,
        });
    }
}
// Empty select
while (locationmgr.firstChild) {
  locationmgr.removeChild(locationmgr.firstChild);
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
  locationmgr.appendChild(options[i].node);
}
//End
</script>
