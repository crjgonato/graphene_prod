<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if(isset($_GET['jd']) && isset($_GET['company_id']) && $_GET['data']=='company'){
?>

<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
  <h4 class="modal-title" id="edit-modal-data"><i class="icon-pencil7"></i> <?php echo $this->lang->line('graphene_edit_company');?></h4>
</div>
<form class="m-b-1" action="<?php echo site_url("company/update").'/'.$company_id; ?>" method="post" name="edit_company" id="edit_company">
  <input type="hidden" name="_method" value="EDIT">
  <input type="hidden" name="_token" value="<?php echo $_GET['company_id'];?>">
  <input type="hidden" name="ext_name" value="<?php echo $name;?>">
  <div class="modal-body">
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label for="company_name"><?php echo $this->lang->line('graphene_company_name');?></label>
          <input class="form-control" placeholder="_" name="name" type="text" value="<?php echo $name;?>">
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-6">
              <label for="email"><?php echo $this->lang->line('company_type');?></label>
              <select class="form-control" name="company_type" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('company_type');?>">
                <option value=""><?php echo $this->lang->line('graphene_select_one');?></option>
                <?php foreach($get_company_types as $ctype) {?>
                <option value="<?php echo $ctype->type_id;?>" <?php if($type_id==$ctype->type_id){?> selected="selected" <?php } ?>> <?php echo $ctype->name;?></option>
                <?php } ?>
              </select>
            </div>
            <div class="col-md-6">
              <label for="trading_name"><?php echo $this->lang->line('graphene_company_trading');?></label>
              <input class="form-control" placeholder="_" name="trading_name" type="text" value="<?php echo $trading_name;?>">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-6">
              <label for="registration_no"><?php echo $this->lang->line('graphene_company_registration');?></label>
              <input class="form-control" placeholder="_" name="registration_no" type="text" value="<?php echo $registration_no;?>">
            </div>
            <div class="col-md-6">
              <label for="contact_number"><?php echo $this->lang->line('graphene_contact_number');?></label>
              <input class="form-control" placeholder="_" name="contact_number" type="number" value="<?php echo $contact_number;?>">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-6">
              <label for="email"><?php echo $this->lang->line('graphene_email');?></label>
              <input class="form-control" placeholder="_" name="email" type="email" value="<?php echo $email;?>">
            </div>
            <div class="col-md-6">
              <label for="website"><?php echo $this->lang->line('graphene_website');?></label>
              <input class="form-control" placeholder="_" name="website" value="<?php echo $website_url;?>" type="text">
            </div>
          </div>
        </div>
        <div class="form-group">
          <h6><?php echo $this->lang->line('graphene_company_logo');?></h6>
         	 <span class="btn btn-primary btn-file">
                Change new logo <input type="file" name="logo" id="logo">
              </span>
          <?php if($logo!='' || $logo!='no-file'){?>
          <div><img src="<?php echo site_url();?>uploads/company/<?php echo $logo;?>" alt=""> </div>
          <?php } ?>
          <br>
          <small><?php echo $this->lang->line('graphene_company_file_type');?></small> </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label for="graphene_gtax"><?php echo $this->lang->line('graphene_gtax');?></label>
          <input class="form-control" placeholder="_" name="graphene_gtax" value="<?php echo $government_tax;?>" type="text">
        </div>
        <div class="form-group">
          <label for="address"><?php echo $this->lang->line('graphene_address');?></label>
          <input class="form-control" placeholder="<?php echo $this->lang->line('graphene_address_1');?>" name="address_1" type="text" value="<?php echo $address_1;?>">
          <br>
          <input class="form-control" placeholder="<?php echo $this->lang->line('graphene_address_2');?>" name="address_2" type="text" value="<?php echo $address_2;?>">
          <br>
          <div class="row">
            <div class="col-xs-5">
              <label for="address">City <font color="red">*</font></label>
              <input class="form-control" placeholder="<?php echo $this->lang->line('graphene_city');?>" name="city" type="text" value="<?php echo $city;?>">
            </div>
            <div class="col-xs-4">
              <label for="address">State <font color="red">*</font></label>
              <input class="form-control" placeholder="<?php echo $this->lang->line('graphene_state');?>" name="state" type="text" value="<?php echo $state;?>">
            </div>
            <div class="col-xs-3">
              <label for="address">Zipcode <font color="red">*</font></label>
              <input class="form-control" placeholder="<?php echo $this->lang->line('graphene_zipcode');?>" name="zipcode" type="text" value="<?php echo $zipcode;?>">
            </div>
          </div>
          <br>
          <label for="address">Country <font color="red">*</font></label>
          <select class="form-control" name="country" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('graphene_country');?>">
            <option value=""><?php echo $this->lang->line('graphene_select_one');?></option>
            <?php foreach($all_countries as $country) {?>
            <option value="<?php echo $country->country_id;?>" <?php if($countryid==$country->country_id):?> selected="selected"<?php endif;?>> <?php echo $country->country_name;?></option>
            <?php } ?>
          </select>
        </div>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $this->lang->line('graphene_close');?></button>
    <button type="submit" class="btn btn-primary save"><?php echo $this->lang->line('graphene_update');?></button>
  </div>
</form>
<script type="text/javascript">
 $(document).ready(function(){
					
		// On page load: datatable
		var xin_table = $('#xin_table').dataTable({
			"bDestroy": true,
			"ajax": {
				url : "<?php echo site_url("company/company_list") ?>",
				type : 'GET'
			},
			"fnDrawCallback": function(settings){
			$('[data-toggle="tooltip"]').tooltip();          
			}
    	});
		
		$('[data-plugin="select_hrm"]').select2($(this).attr('data-options'));
		$('[data-plugin="select_hrm"]').select2({ width:'100%' });	 

		/* Edit data */
		$("#edit_company").submit(function(e){
			var fd = new FormData(this);
			var obj = $(this), action = obj.attr('name');
			fd.append("is_ajax", 2);
			fd.append("edit_type", 'company');
			fd.append("form", action);
			e.preventDefault();
			$('.save').prop('disabled', true);
			$.ajax({
				url: e.target.action,
				type: "POST",
				data:  fd,
				contentType: false,
				cache: false,
				processData:false,
				success: function(JSON)
				{
					if (JSON.error != '') {
						toastr.error(JSON.error);
						$('.save').prop('disabled', false);
					} else {
						xin_table.api().ajax.reload(function(){ 
							toastr.success(JSON.result);
						}, true);
						$('.edit-modal-data').modal('toggle');
						$('.save').prop('disabled', false);
					}
				},
				error: function() 
				{
					toastr.error(JSON.error);
					$('.save').prop('disabled', false);
				} 	        
		   });
		});
	});	
  </script>
<?php } else if(isset($_GET['jd']) && $_GET['data']=='view_company' && isset($_GET['company_id']) ){
?>
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
  <h4 class="modal-title" id="edit-modal-data"><i class="icon-eye4"></i> <?php echo $this->lang->line('graphene_view_company');?></h4>
</div>
<form class="m-b-1">
  <div class="modal-body">
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label for="company_name"><?php echo $this->lang->line('graphene_company_name');?></label>
          <input class="form-control" readonly="readonly" style="border:0;" type="text" value="<?php echo $name;?>">
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-6">
              <label for="company_type"><?php echo $this->lang->line('company_type');?></label>
              <input class="form-control" readonly="readonly" style="border:0;" type="text" value="<?php foreach($get_company_types as $ctype) {?><?php if($type_id==$ctype->type_id){?><?php echo $ctype->name;?><?php } } ?>">
            </div>
            <div class="col-md-6">
              <label for="trading_name"><?php echo $this->lang->line('graphene_company_trading');?></label>
              <input class="form-control" readonly="readonly" style="border:0;" type="text" value="<?php echo $trading_name;?>">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-6">
              <label for="registration_no"><?php echo $this->lang->line('graphene_company_registration');?></label>
              <input class="form-control" readonly="readonly" style="border:0;" type="text" value="<?php echo $registration_no;?>">
            </div>
            <div class="col-md-6">
              <label for="registration_no"><?php echo $this->lang->line('graphene_contact_number');?></label>
              <input class="form-control" readonly="readonly" style="border:0;" type="text" value="<?php echo $contact_number;?>">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-6">
              <label for="email"><?php echo $this->lang->line('graphene_email');?></label>
              <input class="form-control" readonly="readonly" style="border:0;" type="email" value="<?php echo $email;?>">
            </div>
            <div class="col-md-6">
              <label for="website"><?php echo $this->lang->line('graphene_website');?></label>
              <input class="form-control" readonly="readonly" style="border:0;" type="text" value="<?php echo $website_url;?>">
            </div>
          </div>
        </div>
        <div class="form-group">
          <h6>
            <label><?php echo $this->lang->line('graphene_company_logo');?></label>
          </h6>
          <?php if($logo!='' || $logo!='no-file'){?>
          <div> <img src="<?php echo site_url();?>uploads/company/<?php echo $logo;?>" class="img-circle img-sm img-responsive" alt=""></a> </div>
          <?php } ?>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label for="graphene_gtax"><?php echo $this->lang->line('graphene_gtax');?></label>
          <input class="form-control" readonly="readonly" style="border:0;" value="<?php echo $government_tax;?>" type="text">
        </div>
        <div class="form-group">
          <label for="address"><?php echo $this->lang->line('graphene_address');?></label>
          <input class="form-control" readonly="readonly" style="border:0;" type="text" value="<?php echo $address_1;?>">
          <br>
          <input class="form-control" readonly="readonly" style="border:0;" type="text" value="<?php echo $address_2;?>">
          <br>
          <div class="row">
            <div class="col-xs-5">
            <label for="address">City</label>
              <input class="form-control" readonly="readonly" style="border:0;" type="text" value="<?php echo $city;?>">
            </div>
            <div class="col-xs-4">
            <label for="address">State</label>
              <input class="form-control" readonly="readonly" style="border:0;" type="text" value="<?php echo $state;?>">
            </div>
            <div class="col-xs-3">
            <label for="address">Zipcode</label>
              <input class="form-control" readonly="readonly" style="border:0;" type="text" value="<?php echo $zipcode;?>">
            </div>
          </div>
          <br>
          <label for="address">Country</label>
          <input class="form-control" readonly="readonly" style="border:0;" type="text" value="<?php foreach($all_countries as $country) {?><?php if($countryid==$country->country_id):?><?php echo $country->country_name;?><?php endif;?><?php } ?>">
        </div>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $this->lang->line('graphene_close');?></button>
  </div>
</form>
<?php }
?>
