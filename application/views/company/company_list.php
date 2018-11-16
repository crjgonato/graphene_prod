<?php
/* Company view
*/
?>
<?php $session = $this->session->userdata('username');?>

<div class="add-form" style="display:none;">
  <div class="box box-block bg-white">
    <h2><strong><?php echo $this->lang->line('graphene_add_new');?></strong> <?php echo $this->lang->line('module_company_title');?>
      <div class="add-record-btn">
        <button class="btn btn-sm btn-primary add-new-form"><i class="fa fa-minus icon"></i> <?php echo $this->lang->line('graphene_hide');?></button>
      </div>
    </h2>
    <div class="row m-b-1">
      <div class="col-md-12">
        <form method="post" name="add_company" id="xin-form" enctype="multipart/form-data">
        <input type="hidden" name="user_id" value="<?php echo $session['user_id'];?>">
        <div class="bg-white">
          <div class="box-block">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="company_name"><?php echo $this->lang->line('graphene_company_name');?> <font color="red">*</font></label>
                  <input class="form-control" placeholder="_" name="name" type="text">
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-6">
                      <label for="email"><?php echo $this->lang->line('company_type');?> <font color="red">*</font></label>
                      <select class="form-control" id="companytype" name="company_type" data-plugin="graphene_select" data-placeholder="_">
                        <option value="">_</option>
                        <?php foreach($get_company_types as $ctype) {?>
                        <option value="<?php echo $ctype->type_id;?>"> <?php echo $ctype->name;?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label for="trading_name"><?php echo $this->lang->line('graphene_company_trading');?> <font color="red">*</font></label>
                      <input class="form-control" placeholder="_" name="trading_name" type="text">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-6">
                      <label for="registration_no"><?php echo $this->lang->line('graphene_company_registration');?> <font color="red">*</font></label>
                      <input class="form-control" placeholder="_" name="registration_no" type="text">
                    </div>
                    <div class="col-md-6">
                      <label for="contact_number"><?php echo $this->lang->line('graphene_contact_number');?> <font color="red">*</font></label>
                      <input class="form-control" placeholder="_" name="contact_number" type="number">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-6">
                      <label for="email"><?php echo $this->lang->line('graphene_email');?> <font color="red">*</font></label>
                      <input class="form-control" placeholder="_" name="email" type="email">
                    </div>
                    <div class="col-md-6">
                      <label for="website"><?php echo $this->lang->line('graphene_website');?> <font color="red">*</font></label>
                      <input class="form-control" placeholder="_" name="website" type="text">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                    <h6><?php echo $this->lang->line('graphene_company_logo');?> <font color="red">*</font></h6>
                    <span class="btn btn-primary btn-file">
                    	Add logo <input type="file" name="logo" id="logo">
                    </span>
                    <br>
                    <small><?php echo $this->lang->line('graphene_company_file_type');?></small> </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="graphene_gtax"><?php echo $this->lang->line('graphene_gtax');?> <font color="red">*</font></label>
                  <input class="form-control" placeholder="_" name="graphene_gtax" type="text">
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
                  <select class="form-control" name="country" data-plugin="graphene_select" data-placeholder="<?php echo $this->lang->line('graphene_country');?>">
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
  <h2><strong><?php echo $this->lang->line('graphene_list_all');?></strong> <?php echo $this->lang->line('companies');?>
    <div class="add-record-btn">
      <button class="btn btn-sm btn-primary add-new-form"><i class="fa fa-plus icon"></i> <?php echo $this->lang->line('graphene_add_new');?></button>
    </div>
  </h2>
  <div class="table-responsive" data-pattern="priority-columns">
    <table class="table table-condensed table-hover table-bordered dataTable" id="xin_table" style="width:100%;">
      <thead>
        <tr>
          <th><?php echo $this->lang->line('graphene_action');?></th>
          <th><?php echo $this->lang->line('module_company_title');?></th>
          <th><?php echo $this->lang->line('graphene_email');?></th>
          <th><?php echo $this->lang->line('graphene_website');?></th>
          <th><?php echo $this->lang->line('graphene_city');?></th>
          <th><?php echo $this->lang->line('graphene_country');?></th>
          <th><?php echo $this->lang->line('graphene_added_by');?></th>
        </tr>
      </thead>
    </table>
  </div>
</div>
<script type="text/javascript">
///////////////Company//////////////////////////
var companytype = document.getElementById("companytype");
var options = [];
// Get elements to sort
for (var i in companytype.childNodes) {
    var tagName = companytype.childNodes[i].tagName;
    if (typeof(tagName) != 'undefined' &&
        tagName.toLowerCase() == "option") {
        /* Field "content" will be used to sort options */
        options.push({
            node: companytype.childNodes[i],
            content: companytype.childNodes[i].innerHTML,
        });
    }
}
// Empty select
while (companytype.firstChild) {
  companytype.removeChild(companytype.firstChild);
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
  companytype.appendChild(options[i].node);
}
//End
</script>