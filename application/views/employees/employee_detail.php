<?php
/* Employee Details view
*/
?>
<?php $session = $this->session->userdata('username');?>
<!-- <div class="profile-header mb-1">
  <div class="profile-header-cover img-cover" style="background-image: url(<?php echo base_url().'uploads/profile/background/'.$user[0]->profile_background;?>);" ></div>
  <div class="profile-header-counters clearfix">
    <div class="container-fluid">
     
      <div class="float-xs-right"> <a href="#" class="text-black">
      
        <span class="text-muted">
          <?php if($system[0]->enable_profile_background=='yes'):?>
          <span class="profile-btn" style="position:absolute;margin-top:-105px;">
          <form name="profile_background" id="profile_background" enctype="multipart/form-data">
            <input type="hidden" name="user_id" value="<?php echo $session['user_id'];?>">
            <span class="btn btn-default btn-file"> Browse
              <input type="file" name="p_file" id="p_file">
            </span> 
            <span>
            <button type="submit" class="btn btn-primary disable  save"><?php echo $this->lang->line('graphene_save');?></button>
            
            </span>
          </form>
        </span>
        <?php endif;?>
        <?php 
			  $gdate = explode(' ',$last_login_date);
			  $login_date = $this->Graphene_model->set_date_format($gdate[0]);
			  echo $login_date.' '.date('h:i A', strtotime($last_login_date));?>
       </span> </a> 
      
      </div>
    </div>
  </div>
</div> -->
<div class="row m-b-1">
  <div class="col-md-3">
    <div class="box bg-white">
      <ul class="nav nav-4 nav-tabs-link-cl">
        <li class="nav-item nav-item-link active-link" id="user_details_1"> <a class="nav-link nav-tabs-link" href="#user_basic_info" data-profile="1" data-profile-block="user_basic_info" data-toggle="tab" aria-expanded="true"> <i class="fa fa-user"></i> <?php echo $this->lang->line('graphene_e_details_basic');?> </a> </li>

        <!-- <li class="nav-item nav-item-link" id="user_details_16"><a class="nav-link nav-tabs-link" href="#user_benefits" data-profile="16" data-profile-block="user_benefits" data-toggle="tab" aria-expanded="true"> <i class="fa fa-archive"></i> <?php echo $this->lang->line('graphene_e_details_benefits');?> </a><li> -->
        
        <li class="nav-item nav-item-link" id="user_details_2"> <a class="nav-link nav-tabs-link" href="#profile-picture" data-profile="2" data-profile-block="profile_picture" data-toggle="tab" aria-expanded="true"> <i class="fa fa-camera"></i> <?php echo $this->lang->line('graphene_e_details_profile_picture');?> </a> </li>
        
        <!-- <li class="nav-item nav-item-link" id="user_details_15"> <a class="nav-link nav-tabs-link" href="#immigration" data-profile="15" data-profile-block="immigration" data-toggle="tab" aria-expanded="true"> <i class="fa fa-plane"></i> Immigration </a> </li> -->

        <li class="nav-item nav-item-link" id="user_details_3"> <a class="nav-link nav-tabs-link" href="#contact" data-profile="3" data-profile-block="contact" data-toggle="tab" aria-expanded="true"> <i class="fa fa-phone"></i><?php echo $this->lang->line('graphene_e_details_contact');?>s </a> </li>

        <li class="nav-item nav-item-link" id="user_details_4"> <a class="nav-link nav-tabs-link" href="#social_networking" data-profile="4" data-profile-block="social_networking" data-toggle="tab" aria-expanded="true"> <i class="fa fa-users"></i> <?php echo $this->lang->line('graphene_e_details_social');?> </a> </li>

        <li class="nav-item nav-item-link" id="user_details_5"> <a class="nav-link nav-tabs-link" href="#document" data-profile="5" data-profile-block="document" data-toggle="tab" aria-expanded="true"> <i class="fa fa-file"></i> <?php echo $this->lang->line('graphene_e_details_document');?> </a> </li>

        <li class="nav-item nav-item-link" id="user_details_6"> <a class="nav-link nav-tabs-link" href="#qualification" data-profile="6" data-profile-block="qualification" data-toggle="tab" aria-expanded="true"> <i class="fa fa-book"></i> <?php echo $this->lang->line('graphene_e_details_qualification');?> </a> </li>

        <li class="nav-item nav-item-link" id="user_details_7"> <a class="nav-link nav-tabs-link" href="#work_experience" data-profile="7" data-profile-block="work_experience" data-toggle="tab" aria-expanded="true"> <i class="fa fa-hourglass-2"></i> <?php echo $this->lang->line('graphene_e_details_w_experience');?> </a> </li>

        <li class="nav-item nav-item-link" id="user_details_8"> <a class="nav-link nav-tabs-link" href="#bank_account" data-profile="8" data-profile-block="bank_account" data-toggle="tab" aria-expanded="true"> <i class="fa fa-laptop"></i> <?php echo $this->lang->line('graphene_e_details_baccount');?> </a> </li>

        <li class="nav-item nav-item-link" id="user_details_9"> <a class="nav-link nav-tabs-link" href="#contract" data-profile="9" data-profile-block="contract" data-toggle="tab" aria-expanded="true"> <i class="fa fa-pencil"></i> <?php echo $this->lang->line('graphene_e_details_contract');?> </a> </li>

        <li class="nav-item nav-item-link" id="user_details_11"> <a class="nav-link nav-tabs-link" href="#leave" data-profile="11" data-profile-block="leave" data-toggle="tab" aria-expanded="true"> <i class="fa fa-coffee"></i> <?php echo $this->lang->line('graphene_e_details_leave');?> </a> </li>

        <li class="nav-item nav-item-link" id="user_details_12"> <a class="nav-link nav-tabs-link" href="#shift" data-profile="12" data-profile-block="shift" data-toggle="tab" aria-expanded="true"> <i class="fa fa-clock-o"></i> <?php echo $this->lang->line('graphene_e_details_shift');?> </a> </li>

        <li class="nav-item nav-item-link" id="user_details_13"> <a class="nav-link nav-tabs-link" href="#location" data-profile="13" data-profile-block="location" data-toggle="tab" aria-expanded="true"> <i class="fa fa-arrows-alt"></i> <?php echo $this->lang->line('graphene_e_details_location');?> </a> </li>

        <li class="nav-item nav-item-link b-b-o" id="user_details_14"> <a class="nav-link nav-tabs-link" href="#change_password" data-profile="14" data-profile-block="change_password" data-toggle="tab" aria-expanded="true"> <i class="fa fa-key"></i> <?php echo $this->lang->line('graphene_e_details_cpassword');?> </a> </li>
      </ul>
    </div>
  </div>
  
  <div class="col-md-9 current-tab animated fadeInUp" id="user_basic_info"  aria-expanded="false">
    <form id="basic_info" action="<?php echo site_url("employees/basic_info") ?>" name="basic_info" method="post">
      <input type="hidden" name="user_id" value="<?php echo $user_id;?>">
      <input type="hidden" name="u_basic_info" value="UPDATE">
      <div class="box box-block bg-white">
        <h2><strong><?php echo $this->lang->line('graphene_e_details_basic_info');?></strong></h2>
        <div class="add-record-btn">
          <!-- <button type="button"> </button> -->
          <a href="<?php echo site_url();?>employees" class="btn btn-sm btn-default"><i class="fa fa-angle-left icon"></i> <?php echo $this->lang->line('graphene_back_employeelist');?></a>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="first_name"><?php echo $this->lang->line('graphene_employee_first_name');?></label>
              <input class="form-control" placeholder="_" name="first_name" type="text" value="<?php echo $first_name;?>">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="middle_name" class="control-label"><?php echo $this->lang->line('graphene_employee_middle_name');?></label>
              <input class="form-control" placeholder="_" name="middle_name" type="text" value="<?php echo $middle_name;?>">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="last_name" class="control-label"><?php echo $this->lang->line('graphene_employee_last_name');?></label>
              <input class="form-control" placeholder="_" name="last_name" type="text" value="<?php echo $last_name;?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="employee_id"><?php echo $this->lang->line('dashboard_employee_id');?></label>
              <input class="form-control" placeholder="_" name="employee_id" type="text" value="<?php echo $employee_id;?>">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="username"><?php echo $this->lang->line('dashboard_username');?></label>
              <input class="form-control" placeholder="_" name="username" type="text" value="<?php echo $username;?>">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="email" class="control-label"><?php echo $this->lang->line('dashboard_email');?></label>
              <input class="form-control" placeholder="_" name="email" type="text" value="<?php echo $email;?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="department"><?php echo $this->lang->line('graphene_employee_department');?></label>
              <select class="form-control" name="department_id" id="aj_department" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('graphene_employee_department');?>">
                <option value=""></option>
                <?php foreach($all_departments as $department) {?>
                <option value="<?php echo $department->department_id?>" <?php if($department_id==$department->department_id):?> selected <?php endif;?>><?php echo $department->department_name?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group" id="designation_ajax">
              <label for="designation"><?php echo $this->lang->line('graphene_designation');?></label>
              <select class="form-control" name="designation_id" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('graphene_designation');?>">
                <option value=""></option>
                <?php foreach($all_designations as $designation) {?>
                <option value="<?php echo $designation->designation_id?>" <?php if($designation_id==$designation->designation_id):?> selected <?php endif;?>><?php echo $designation->designation_name?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="role"><?php echo $this->lang->line('graphene_employee_role');?></label>
              <select class="form-control" name="role" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('graphene_employee_role');?>">
                <option value=""></option>
                <?php foreach($all_user_roles as $role) {?>
                <option value="<?php echo $role->role_id?>" <?php if($user_role_id==$role->role_id):?> selected <?php endif;?>><?php echo $role->role_name?></option>
                <?php } ?>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="date_of_birth"><?php echo $this->lang->line('graphene_employee_dob');?></label>
              <input class="form-control birthdate" readonly placeholder="_" name="date_of_birth" id="date" type="text" onblur="getAge();" value="<?php echo $date_of_birth;?>">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="date_of_joining" class="control-label"><?php echo $this->lang->line('graphene_employee_doj');?></label>
              <input class="form-control date" readonly placeholder="_" name="date_of_joining" type="text" value="<?php echo $date_of_joining;?>">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="date_of_leaving" class="control-label"><?php echo $this->lang->line('graphene_employee_dol');?></label>
              <input class="form-control date" readonly placeholder="_" name="date_of_leaving" type="text" value="<?php echo $date_of_leaving;?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="gender" class="control-label"><?php echo $this->lang->line('graphene_employee_gender');?></label>
              <select class="form-control" name="gender" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('graphene_employee_gender');?>">
                <option value="Male" <?php if($gender=='Male'):?> selected <?php endif; ?>>Male</option>
                <option value="Female" <?php if($gender=='Female'):?> selected <?php endif; ?>>Female</option>
                <option value="Others" <?php if($gender=='Others'):?> selected <?php endif; ?>>Others</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="marital_status" class="control-label"><?php echo $this->lang->line('graphene_employee_mstatus');?></label>
              <select class="form-control" name="marital_status" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('graphene_employee_mstatus');?>">
                <option value="Single" <?php if($marital_status=='Single'):?> selected <?php endif; ?>>Single</option>
                <option value="Married" <?php if($marital_status=='Married'):?> selected <?php endif; ?>>Married</option>
                <option value="Widowed" <?php if($marital_status=='Widowed'):?> selected <?php endif; ?>>Widowed</option>
                <option value="Divorced or Separated" <?php if($marital_status=='Divorced or Separated'):?> selected <?php endif; ?>>Divorced or Separated</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="contact_no" class="control-label"><?php echo $this->lang->line('graphene_contact_number');?></label>
              <input class="form-control" placeholder="_" name="contact_no" type="text" value="<?php echo $contact_no;?>">
            </div>
          </div>
        </div>
        <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="telephone_no" class="control-label"><?php echo $this->lang->line('graphene_tel_number');?></label>
                <input class="form-control" placeholder="_" name="telephone_no" type="text" value="<?php echo $telephone_no;?>">
              </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="status" class="control-label"><?php echo $this->lang->line('dashboard_graphene_status');?></label>
              <select class="form-control" name="status" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('dashboard_graphene_status');?>">
                <option value="0" <?php if($is_active=='0'):?> selected <?php endif; ?>>In-Active</option>
                <option value="1" <?php if($is_active=='1'):?> selected <?php endif; ?>>Active</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="religions"><?php echo $this->lang->line('graphene_employee_religions');?></label>
              <input class="form-control" placeholder="_" name="religions" type="text" value="<?php echo $religions;?>">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="nationality"><?php echo $this->lang->line('graphene_employee_nationality');?></label>
              <input class="form-control" placeholder="_" name="nationality" type="text" value="<?php echo $nationality;?>">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="age"><?php echo $this->lang->line('graphene_employee_age');?></label>
              <input class="form-control" placeholder="_" name="age" id="age" type="text" value="">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="height">Height</label>
              <input class="form-control" placeholder="_" name="height" type="text" value="<?php echo $height; ?>">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="weight">Weight</label>
              <input class="form-control" placeholder="_" name="weight" type="text" value="<?php echo $weight; ?>">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="bloodtype">Blood Type</label>
              <input class="form-control" placeholder="_" name="bloodtype" type="text" value="<?php echo $bloodtype; ?>">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="complexion">Complexion</label>
              <input class="form-control" placeholder="_" name="complexion" type="text" value="<?php echo $complexion; ?>">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="hairdescription">Hair Description</label>
              <input class="form-control" placeholder="_" name="hairdescription" type="text" value="<?php echo $hairdescription; ?>">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="scar_marks">Any Scars or Marks</label>
              <input class="form-control" placeholder="_" name="scar_marks" type="text" value="<?php echo $scar_marks; ?>">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="address"><?php echo $this->lang->line('graphene_employee_address');?></label>
              <textarea class="form-control" placeholder="_" name="address" cols="30" rows="3" id="address"><?php echo $address;?></textarea>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
                <label for="tin_no" class="control-label">TIN Number</label>
                <input class="form-control" placeholder="_" name="tin_no" type="text" value="<?php echo $tin_no;?>">
              </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
                <label for="sss_no" class="control-label">SSS Number</label>
                <input class="form-control" placeholder="_" name="sss_no" type="text" value="<?php echo $sss_no;?>">
              </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
                <label for="philh_no" class="control-label">PhilHealth Number</label>
                <input class="form-control" placeholder="_" name="philh_no" type="text" value="<?php echo $philh_no;?>">
              </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
                <label for="pagibig_no" class="control-label">Pag-ibig Number</label>
                <input class="form-control" placeholder="_" name="pagibig_no" type="text" value="<?php echo $pagibig_no;?>">
              </div>
          </div>
          
          <div class="col-md-6">
            <div class="form-group">
                <label for="organization" class="control-label">Organization Name</label>
                <input class="form-control" placeholder="_" name="organization" type="text" value="<?php echo $organization;?>">
              </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
                <label for="orgmem_date" class="control-label">Date Registered (Organization)</label>
                <!-- <input class="form-control" placeholder="_" name="orgmem_date" type="text" value="<?php echo $orgmem_date;?>"> -->
                <input class="form-control date" placeholder="_" name="orgmem_date" id="orgmem_date" type="text" value="<?php echo $orgmem_date;?>">
              </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary save"><?php echo $this->lang->line('graphene_save');?></button>
      </div>
    </form>
  </div>

  <!-- <div class="col-md-9 current-tab animated fadeInUp" id="user_benefits" style="display:none;">
    <div class="box box-block bg-white">
      <form id="work_benefits" action="<?php echo site_url("employees/work_benefits") ?>" name="work_benefits" method="post">
        <input type="hidden" name="user_id" value="<?php echo $user_id;?>">
        <input type="hidden" name="u_basic_info" value="UPDATE">
        <input type="hidden" name="employee_id" value="<?php echo $employee_id;?>">
        <h2><strong>Work Benefits</strong></h2>
        <div class="add-record-btn">
          
          <a href="<?php echo site_url();?>employees" class="btn btn-sm btn-default"><i class="fa fa-angle-left icon"></i> <?php echo $this->lang->line('graphene_back_employeelist');?></a>
        </div>
        <div class="row">
          <div class="col-md-9">
            <div class="form-group">
              <label for="tin_no" class="control-label">TIN Number</label>
              <input class="form-control" placeholder="TIN Number" name="tin_no" type="text" value="">
            </div>
          </div>
          <div class="col-md-9">
            <div class="form-group">
              <label for="sss_no" class="control-label">SSS Number</label>
              <input class="form-control" placeholder="SSS Number" name="sss_no" type="text" value="">
            </div>
          </div>
          <div class="col-md-9">
            <div class="form-group">
              <label for="phil_no" class="control-label">PhilHealth Number</label>
              <input class="form-control" placeholder="PhilHealth Number" name="phil_no" type="text" value="">
            </div>
          </div>
          <div class="col-md-9">
            <div class="form-group">
              <label for="pagibig_no" class="control-label">PAG-IBIG Number</label>
              <input class="form-control" placeholder="PAG-IBIG Number" name="pagibig_no" type="text" value="">
            </div>
          </div>
          
        </div>      
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <div class="text-right">
                <button type="submit" class="btn btn-primary save"><?php echo $this->lang->line('graphene_save');?></button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="box box-block bg-white">
      <h2><strong><//?php echo $this->lang->line('graphene_e_details_benefits');?></strong> List</h2>
      <div class="table-responsive" data-pattern="priority-columns">
        <table class="table table-condensed table-hover table-bordered dataTable" id="xin_table_benefits" style="width:100%;">
          <thead>
            <tr>
              <th>Benefits Name</th>
              <th>Benefits Number</th>
              <th>Options</th>
            </tr>
          </thead>
        </table>
      </div>
    </div> 
  </div> -->

  <div class="col-md-9 current-tab animated fadeInUp" id="profile_picture" style="display:none;">
    <form id="f_profile_picture" action="<?php echo site_url("employees/profile_picture") ?>" name="profile_picture" method="post">
      <input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id;?>">
      <input type="hidden" name="session_id" id="session_id" value="<?php echo $session['user_id'];?>">
      <input type="hidden" name="u_profile_picture" value="UPDATE">
      <div class="box box-block bg-white">
        <h2><strong><?php echo $this->lang->line('graphene_e_details_profile_picture');?></strong></h2>
        <div class="add-record-btn">
          <!-- <button type="button"> </button> -->
          <a href="<?php echo site_url();?>employees" class="btn btn-sm btn-default"><i class="fa fa-angle-left icon"></i> <?php echo $this->lang->line('graphene_back_employeelist');?></a>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class='form-group'> <span class="btn btn-primary btn-file"> Browse
              <input type="file" name="p_file" id="p_file">
              </span>
              <?php if($profile_picture!='' && $profile_picture!='no file') {?>
              <img src="<?php echo base_url().'uploads/profile/'.$profile_picture;?>" width="50px" style="margin-left:20px;" id="u_file">
              <?php } else {?>
              <?php if($gender=='Male') { ?>
              <?php $de_file = base_url().'uploads/profile/default_male.png';?>
              <?php } else { ?>
              <?php $de_file = base_url().'uploads/profile/default_female.png';?>
              <?php } ?>
              <img src="<?php echo $de_file;?>" width="50px" style="margin-left:20px;" id="u_file">
              <?php } ?>
              <br>
              <small><?php echo $this->lang->line('graphene_e_details_picture_type');?></small>
              <?php if($profile_picture!='' && $profile_picture!='no file') {?>
              <br />
              <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="remove_profile_picture" value="1" name="remove_profile_picture">
                <span class="custom-control-indicator"></span> <span class="custom-control-description"><?php echo $this->lang->line('graphene_e_details_remove_pic');?></span> </label>
              <?php } else {?>
              <div id="remove_file" style="display:none;">
                <label class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="remove_profile_picture" value="1" name="remove_profile_picture">
                  <span class="custom-control-indicator"></span> <span class="custom-control-description"><?php echo $this->lang->line('graphene_e_details_remove_pic');?></span> </label>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary save"><?php echo $this->lang->line('graphene_save');?></button>
      </div>
    </form>
  </div>

  <div class="col-md-9 current-tab animated fadeInUp" id="immigration" style="display:none;">
    <div class="box box-block bg-white">
      <form id="immigration_info" action="<?php echo site_url("employees/immigration_info") ?>" enctype="multipart/form-data" name="immigration_info" method="post">
        <input type="hidden" name="user_id" value="<?php echo $user_id;?>">
        <input type="hidden" name="u_document_info" value="UPDATE">
        <h2><strong><?php echo $this->lang->line('graphene_add_new');?></strong> Immigration</h2>
        <div class="add-record-btn">
          <!-- <button type="button"> </button> -->
          <a href="<?php echo site_url();?>employees" class="btn btn-sm btn-default"><i class="fa fa-angle-left icon"></i> <?php echo $this->lang->line('graphene_back_employeelist');?></a>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="relation">Document</label>
              <select name="document_type_id" id="document_type_id" class="form-control" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('graphene_e_details_choose_dtype');?>">
                <option value=""></option>
                <?php foreach($all_document_types as $document_type) {?>
                <option value="<?php echo $document_type->document_type_id;?>"> <?php echo $document_type->document_type;?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="document_number" class="control-label">Document Number</label>
              <input class="form-control" placeholder="_" name="document_number" type="text">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <label for="issue_date" class="control-label">Issue Date</label>
              <input class="form-control date" readonly="readonly" placeholder="_" name="issue_date" type="text">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="expiry_date" class="control-label">Date of Expiry</label>
              <input class="form-control date" readonly="readonly" placeholder="_" name="expiry_date" type="text">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <h6><?php echo $this->lang->line('graphene_e_details_document_file');?></h6>
              <span class="btn btn-primary btn-file"> Browse
              <input type="file" name="document_file" id="p_file2">
              </span><br />
              <small><?php echo $this->lang->line('graphene_e_details_d_type_file');?></small></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="eligible_review_date" class="control-label">Eligible Review Date</label>
              <input class="form-control date" readonly="readonly" placeholder="_" name="eligible_review_date" type="text">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="send_mail">Country</label>
              <select class="form-control" name="country" data-plugin="select_hrm" data-placeholder="Country">
                <option value="">Select One</option>
                <?php foreach($all_countries as $scountry) {?>
                <option value="<?php echo $scountry->country_id;?>"> <?php echo $scountry->country_name;?></option>
                <?php } ?>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <div class="text-right">
                <button type="submit" class="btn btn-primary save"><?php echo $this->lang->line('graphene_save');?> <i class="icon-circle-right2 position-right"></i> <i class="icon-spinner3 spinner position-left"></i></button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="box box-block bg-white">
      <h2><strong>Assigned Immigration</strong> Records</h2>
      <div class="table-responsive" data-pattern="priority-columns">
        <table class="table table-condensed table-hover table-bordered dataTable" id="xin_table_imgdocument" style="width:100%;">
          <thead>
            <tr>
              <th>Action</th>
              <th>Document</th>
              <th>Issued Date</th>
              <th>Expiry Date</th>
              <th>Issued By</th>
              <th>Eligible Review Date</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>

  <div class="col-md-9 current-tab animated fadeInUp" id="social_networking" style="display:none;">
    <form id="f_social_networking" action="<?php echo site_url("employees/social_info") ?>" name="social_networking" method="post">
      <input type="hidden" name="user_id" value="<?php echo $user_id;?>">
      <input type="hidden" name="u_basic_info" value="UPDATE">
      <div class="box box-block bg-white">
        <h2><strong><?php echo $this->lang->line('graphene_e_details_social');?></strong></h2>
        <div class="add-record-btn">
          <!-- <button type="button"> </button> -->
          <a href="<?php echo site_url();?>employees" class="btn btn-sm btn-default"><i class="fa fa-angle-left icon"></i> <?php echo $this->lang->line('graphene_back_employeelist');?></a>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="facebook_profile"><?php echo $this->lang->line('graphene_e_details_fb_profile');?></label>
              <input class="form-control" placeholder="_" name="facebook_link" type="text" value="<?php echo $facebook_link;?>">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="facebook_profile"><?php echo $this->lang->line('graphene_e_details_twit_profile');?></label>
              <input class="form-control" placeholder="_" name="twitter_link" type="text" value="<?php echo $twitter_link;?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="twitter_profile"><?php echo $this->lang->line('graphene_e_details_blogr_profile');?></label>
              <input class="form-control" placeholder="_" name="blogger_link" type="text" value="<?php echo $blogger_link;?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="blogger_profile"><?php echo $this->lang->line('graphene_e_details_linkd_profile');?></label>
              <input class="form-control" placeholder="_" name="linkdedin_link" type="text" value="<?php echo $linkdedin_link;?>">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="blogger_profile"><?php echo $this->lang->line('graphene_e_details_gplus_profile');?></label>
              <input class="form-control" placeholder="_" name="google_plus_link" type="text" value="<?php echo $google_plus_link;?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="linkdedin_profile"><?php echo $this->lang->line('graphene_e_details_insta_profile');?></label>
              <input class="form-control" placeholder="_" name="instagram_link" type="text" value="<?php echo $instagram_link;?>">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="linkdedin_profile"><?php echo $this->lang->line('graphene_e_details_pintrst_profile');?></label>
              <input class="form-control" placeholder="_" name="pinterest_link" type="text" value="<?php echo $pinterest_link;?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="linkdedin_profile"><?php echo $this->lang->line('graphene_e_details_utube_profile');?></label>
              <input class="form-control" placeholder="_" name="youtube_link" type="text" value="<?php echo $youtube_link;?>">
            </div>
          </div>
        </div>
        <div class="text-right">
          <button type="submit" class="btn btn-primary save"><?php echo $this->lang->line('graphene_save');?> <i class="icon-circle-right2 position-right"></i> <i class="icon-spinner3 spinner position-left"></i></button>
        </div>
      </div>
    </form>
  </div>

  <div class="col-md-9 current-tab animated fadeInUp" id="contact" style="display:none;">
    <div class="box box-block bg-white">
      <form id="contact_info" action="<?php echo site_url("employees/contact_info") ?>" name="contact_info" method="post">
        <input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id;?>">
        <input type="hidden" name="u_basic_info" value="ADD">
        <h2><strong><?php echo $this->lang->line('graphene_add_new');?></strong> <?php echo $this->lang->line('graphene_e_details_contact');?></h2>
        <div class="add-record-btn">
          <!-- <button type="button"> </button> -->
          <a href="<?php echo site_url();?>employees" class="btn btn-sm btn-default"><i class="fa fa-angle-left icon"></i> <?php echo $this->lang->line('graphene_back_employeelist');?></a>
        </div>
        <div class="row">
          <div class="col-md-5">
            <div class="form-group">
              <label for="relation"><?php echo $this->lang->line('graphene_e_details_relation');?></label>
              <select class="form-control" name="relation" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('graphene_select_one');?>">
                <option value=""><?php echo $this->lang->line('graphene_select_one');?></option>
                <option value="Self">Self</option>
                <option value="Parent">Parent</option>
                <option value="Spouse">Spouse</option>
                <option value="Child">Child</option>
                <option value="Sibling">Sibling</option>
                <option value="In Laws">In Laws</option>
              </select>
            </div>
          </div>
          <div class="col-md-7">
            <div class="form-group">
              <label for="work_email" class="control-label"><?php echo $this->lang->line('dashboard_email');?></label>
              <input class="form-control" placeholder="Work" name="work_email" type="text">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5">
            <div class="form-group">
              <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="is_primary" value="1" name="is_primary">
                <span class="custom-control-indicator"></span> <span class="custom-control-description"><?php echo $this->lang->line('graphene_e_details_pcontact');?></span> </label>
              &nbsp;
              <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="is_dependent" value="1" name="is_dependent">
                <span class="custom-control-indicator"></span> <span class="custom-control-description"><?php echo $this->lang->line('graphene_e_details_dependent');?></span> </label>
            </div>
          </div>
          <div class="col-md-7">
            <div class="form-group">
              <input class="form-control" placeholder="Personal" name="personal_email" type="text">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5">
            <div class="form-group">
              <label for="name" class="control-label"><?php echo $this->lang->line('graphene_name');?></label>
              <input class="form-control" placeholder="_" name="contact_name" type="text">
            </div>
          </div>
          <div class="col-md-7">
            <div class="form-group" id="designation_ajax">
              <label for="address_1" class="control-label"><?php echo $this->lang->line('graphene_address');?></label>
              <input class="form-control" placeholder="Address 1" name="address_1" type="text">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5">
            <div class="form-group">
              <label for="work_phone"><?php echo $this->lang->line('graphene_phone');?></label>
              <div class="row">
                <div class="col-xs-8">
                  <input class="form-control" placeholder="Work" name="work_phone" type="text">
                </div>
                <div class="col-xs-4">
                  <input class="form-control" placeholder="ext" name="work_phone_extension" type="text">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-7">
            <div class="form-group">
              <input class="form-control" placeholder="Address 2" name="address_2" type="text">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5">
            <div class="form-group">
              <input class="form-control" placeholder="Mobile" name="mobile_phone" type="text">
            </div>
          </div>
          <div class="col-md-7">
            <div class="form-group">
              <div class="row">
                <div class="col-xs-5">
                  <input class="form-control" placeholder="City" name="city" type="text">
                </div>
                <div class="col-xs-4">
                  <input class="form-control" placeholder="State / Province" name="state" type="text">
                </div>
                <div class="col-xs-3">
                  <input class="form-control" placeholder="Zipcode" name="zipcode" type="text">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5">
            <div class="form-group">
              <input class="form-control" placeholder="Home" name="home_phone" type="text">
            </div>
          </div>
          <div class="col-md-7">
            <div class="form-group">
              <select name="country" id="select2-demo-6" class="form-control" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('graphene_country');?>">
                <option value=""></option>
                <?php foreach($all_countries as $country) {?>
                <option value="<?php echo $country->country_id;?>"> <?php echo $country->country_name;?></option>
                <?php } ?>
              </select>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary save"><?php echo $this->lang->line('graphene_save');?></button>
      </form>
    </div>
    <div class="box box-block bg-white">
      <h2><strong><?php echo $this->lang->line('graphene_list_all');?></strong> <?php echo $this->lang->line('graphene_e_details_contacts');?></h2>
      <div class="table-responsive" data-pattern="priority-columns">
        <table class="table table-condensed table-hover table-bordered dataTable" id="xin_table_contact" style="width:100%;">
          <thead>
            <tr>
              <th><?php echo $this->lang->line('graphene_action');?></th>
              <th><?php echo $this->lang->line('employees_full_name');?></th>
              <th><?php echo $this->lang->line('graphene_e_details_relation');?></th>
              <th><?php echo $this->lang->line('dashboard_email');?></th>
              <th><?php echo $this->lang->line('graphene_e_details_mobile');?></th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>

  <div class="col-md-9 current-tab animated fadeInUp" id="document" style="display:none;">
    <div class="box box-block bg-white">
      <form id="document_info" action="<?php echo site_url("employees/document_info") ?>" enctype="multipart/form-data" name="document_info" method="post">
        <input type="hidden" name="user_id" value="<?php echo $user_id;?>">
        <input type="hidden" name="u_document_info" value="UPDATE">
        <h2><strong><?php echo $this->lang->line('graphene_add_new');?></strong> <?php echo $this->lang->line('graphene_e_details_document');?></h2>
        <div class="add-record-btn">
          <!-- <button type="button"> </button> -->
          <a href="<?php echo site_url();?>employees" class="btn btn-sm btn-default"><i class="fa fa-angle-left icon"></i> <?php echo $this->lang->line('graphene_back_employeelist');?></a>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="relation">Document Type <font color="red">*</font></label>
              <select name="document_type_id" id="document_type_id" class="form-control" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('graphene_e_details_choose_dtype');?>">
                <option value=""></option>
                <?php foreach($all_document_types as $document_type) {?>
                <option value="<?php echo $document_type->document_type_id;?>"> <?php echo $document_type->document_type;?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="date_of_expiry" class="control-label">Date of Expiry <font color="red">*</font></label>
              <input class="form-control date" readonly placeholder="_" name="date_of_expiry" type="text">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="title" class="control-label">Document Title <font color="red">*</font></label>
              <input class="form-control" placeholder="_" name="title" type="text">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="email" class="control-label">Email <font color="red">*</font></label>
              <input class="form-control" placeholder="_" name="email" type="email">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="description" class="control-label"><?php echo $this->lang->line('graphene_description');?></label>
              <textarea class="form-control" placeholder="_" data-show-counter="1" data-limit="300" name="description" cols="30" rows="3" id="d_description"></textarea>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <h6>Document File <font color="red">*</font></h6>
              <span class="btn btn-primary btn-file"> Browse
              <input type="file" name="document_file" id="document_file">
              </span> <small><?php echo $this->lang->line('graphene_e_details_d_type_file');?></small></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="send_mail">Send notification email when expired?</label>
              <select name="send_mail" id="send_mail" class="form-control" data-plugin="select_hrm">
                <option value="1"><?php echo $this->lang->line('graphene_yes');?></option>
                <option value="2"><?php echo $this->lang->line('graphene_no');?></option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <div class="text-right">
                <button type="submit" class="btn btn-primary save"><?php echo $this->lang->line('graphene_save');?> <i class="icon-circle-right2 position-right"></i> <i class="icon-spinner3 spinner position-left"></i></button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="box box-block bg-white">
      <h2><strong><?php echo $this->lang->line('graphene_list_all');?></strong> <?php echo $this->lang->line('graphene_e_details_documents');?></h2>
      <div class="table-responsive" data-pattern="priority-columns">
        <table class="table table-condensed table-hover table-bordered dataTable" id="xin_table_document" style="width:100%;">
          <thead>
            <tr>
              <th><?php echo $this->lang->line('graphene_action');?></th>
              <th><?php echo $this->lang->line('graphene_e_details_dtype');?></th>
              <th><?php echo $this->lang->line('dashboard_graphene_title');?></th>
              <th><?php echo $this->lang->line('graphene_e_details_notifyemail');?></th>
              <th><?php echo $this->lang->line('graphene_e_details_doe');?></th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>

  <div class="col-md-9 current-tab animated fadeInUp" id="qualification" style="display:none;">
    <div class="box box-block bg-white">
      <form id="qualification_info" action="<?php echo site_url("employees/qualification_info") ?>" name="qualification_info" method="post">
        <input type="hidden" name="user_id" value="<?php echo $user_id;?>">
        <input type="hidden" name="u_basic_info" value="UPDATE">
        <h2><strong><?php echo $this->lang->line('graphene_add_new');?></strong> <?php echo $this->lang->line('graphene_e_details_qualification');?></h2>
        <div class="add-record-btn">
          <!-- <button type="button"> </button> -->
          <a href="<?php echo site_url();?>employees" class="btn btn-sm btn-default"><i class="fa fa-angle-left icon"></i> <?php echo $this->lang->line('graphene_back_employeelist');?></a>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="name"><?php echo $this->lang->line('graphene_e_details_inst_name');?></label>
              <input class="form-control" placeholder="_" name="name" type="text">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="education_level" class="control-label"><?php echo $this->lang->line('graphene_e_details_edu_level');?></label>
              <select class="form-control" name="education_level" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('graphene_e_details_edu_level');?>">
                <?php foreach($all_education_level as $education_level) {?>
                <option value="<?php echo $education_level->education_level_id?>"><?php echo $education_level->name?></option>
                <?php } ?>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="from_year" class="control-label"><?php echo $this->lang->line('graphene_e_details_timeperiod');?></label>
              <div class="row">
                <div class="col-md-6">
                  <input class="form-control date" readonly="readonly" placeholder="from" name="from_year" type="text">
                </div>
                <div class="col-md-6">
                  <input class="form-control date" readonly="readonly" placeholder="to" name="to_year" type="text">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="language" class="control-label"><?php echo $this->lang->line('graphene_e_details_language');?></label>
              <select class="form-control" name="language" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('graphene_e_details_language');?>">
                <?php foreach($all_qualification_language as $qualification_language) {?>
                <option value="<?php echo $qualification_language->language_id?>"><?php echo $qualification_language->name?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="skill" class="control-label"><?php echo $this->lang->line('graphene_e_details_skill');?></label>
              <select class="form-control" name="skill" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('graphene_e_details_skill');?>">
                <option value=""></option>
                <?php foreach($all_qualification_skill as $qualification_skill) {?>
                <option value="<?php echo $qualification_skill->skill_id?>"><?php echo $qualification_skill->name?></option>
                <?php } ?>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="to_year" class="control-label"><?php echo $this->lang->line('graphene_description');?></label>
              <textarea class="form-control" placeholder="_" data-show-counter="1" data-limit="300" name="description" cols="30" rows="3" id="d_description"></textarea>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <div class="text-right">
                <button type="submit" class="btn btn-primary save"><?php echo $this->lang->line('graphene_save');?> <i class="icon-circle-right2 position-right"></i> <i class="icon-spinner3 spinner position-left"></i></button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="box box-block bg-white">
      <h2><strong><?php echo $this->lang->line('graphene_list_all');?></strong> <?php echo $this->lang->line('graphene_e_details_qualification');?></h2>
      <div class="table-responsive" data-pattern="priority-columns">
        <table class="table table-condensed table-hover table-bordered dataTable" id="xin_table_qualification" style="width:100%;">
          <thead>
            <tr>
              <th><?php echo $this->lang->line('graphene_action');?></th>
              <th><?php echo $this->lang->line('graphene_e_details_inst_name');?></th>
              <th><?php echo $this->lang->line('graphene_e_details_timeperiod');?></th>
              <th><?php echo $this->lang->line('graphene_e_details_edu_level');?></th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>

  <div class="col-md-9 current-tab animated fadeInUp" id="work_experience" style="display:none;">
    <div class="box box-block bg-white">
      <form id="work_experience_info" action="<?php echo site_url("employees/work_experience_info") ?>" name="work_experience_info" method="post">
        <input type="hidden" name="user_id" value="<?php echo $user_id;?>">
        <input type="hidden" name="u_basic_info" value="UPDATE">
        <h2><strong><?php echo $this->lang->line('graphene_add_new');?></strong> <?php echo $this->lang->line('graphene_e_details_w_experience');?></h2>
        <div class="add-record-btn">
          <!-- <button type="button"> </button> -->
          <a href="<?php echo site_url();?>employees" class="btn btn-sm btn-default"><i class="fa fa-angle-left icon"></i> <?php echo $this->lang->line('graphene_back_employeelist');?></a>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="company_name"><?php echo $this->lang->line('graphene_company_name');?></label>
              <input class="form-control" placeholder="<?php echo $this->lang->line('graphene_company_name');?>" name="company_name" type="text" value="" id="company_name">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="post"><?php echo $this->lang->line('graphene_e_details_post');?></label>
              <input class="form-control" placeholder="<?php echo $this->lang->line('graphene_e_details_post');?>" name="post" type="text" value="" id="post">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="from_year" class="control-label"><?php echo $this->lang->line('graphene_e_details_timeperiod');?></label>
              <div class="row">
                <div class="col-md-6">
                  <input class="form-control date" readonly="readonly" placeholder="<?php echo $this->lang->line('graphene_e_details_from');?>" name="from_date" type="text">
                </div>
                <div class="col-md-6">
                  <input class="form-control date" readonly="readonly" placeholder="<?php echo $this->lang->line('dashboard_to');?>" name="to_date" type="text">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="description"><?php echo $this->lang->line('graphene_description');?></label>
              <textarea class="form-control" placeholder="<?php echo $this->lang->line('graphene_description');?>" data-show-counter="1" data-limit="300" name="description" cols="30" rows="4" id="description"></textarea>
              <span class="countdown"></span> </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <div class="text-right">
                <button type="submit" class="btn btn-primary save"><?php echo $this->lang->line('graphene_save');?> <i class="icon-circle-right2 position-right"></i> <i class="icon-spinner3 spinner position-left"></i></button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="box box-block bg-white">
      <h2><strong><?php echo $this->lang->line('graphene_list_all');?></strong> <?php echo $this->lang->line('graphene_e_details_w_experience');?></h2>
      <div class="table-responsive" data-pattern="priority-columns">
        <table class="table table-condensed table-hover table-bordered dataTable" id="xin_table_work_experience" style="width:100%;">
          <thead>
            <tr>
              <th><?php echo $this->lang->line('graphene_action');?></th>
              <th><?php echo $this->lang->line('graphene_company_name');?></th>
              <th><?php echo $this->lang->line('graphene_e_details_frm_date');?></th>
              <th><?php echo $this->lang->line('graphene_e_details_to_date');?></th>
              <th><?php echo $this->lang->line('graphene_e_details_post');?></th>
              <th><?php echo $this->lang->line('graphene_description');?></th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>

  <div class="col-md-9 current-tab animated fadeInUp" id="bank_account" style="display:none;">
    <div class="box box-block bg-white">
      <form id="bank_account_info" action="<?php echo site_url("employees/bank_account_info") ?>" name="bank_account_info" method="post">
        <input type="hidden" name="user_id" value="<?php echo $user_id;?>">
        <input type="hidden" name="u_basic_info" value="UPDATE">
        <h2><strong><?php echo $this->lang->line('graphene_add_new');?></strong> <?php echo $this->lang->line('graphene_e_details_baccount');?></h2>
        <div class="add-record-btn">
          <!-- <button type="button"> </button> -->
          <a href="<?php echo site_url();?>employees" class="btn btn-sm btn-default"><i class="fa fa-angle-left icon"></i> <?php echo $this->lang->line('graphene_back_employeelist');?></a>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="account_title"><?php echo $this->lang->line('graphene_e_details_acc_title');?></label>
            <input class="form-control" placeholder="_" name="account_title" type="text" value="" id="account_name">
          </div>
          <div class="form-group">
            <label for="account_number"><?php echo $this->lang->line('graphene_e_details_acc_number');?></label>
            <input class="form-control" placeholder="_" name="account_number" type="text" value="" id="account_number">
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="bank_name"><?php echo $this->lang->line('graphene_e_details_bank_name');?></label>
            <input class="form-control" placeholder="<?php echo $this->lang->line('graphene_e_details_bank_name');?>" name="bank_name" type="text" value="" id="bank_name">
          </div>
          <div class="form-group">
            <label for="bank_code"><?php echo $this->lang->line('graphene_e_details_bank_code');?></label>
            <input class="form-control" placeholder="<?php echo $this->lang->line('graphene_e_details_bank_code');?>" name="bank_code" type="text" value="" id="bank_code">
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <label for="bank_branch"><?php echo $this->lang->line('graphene_e_details_bank_branch');?></label>
            <input class="form-control" placeholder="<?php echo $this->lang->line('graphene_e_details_bank_branch');?>" name="bank_branch" type="text" value="" id="bank_branch">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <button type="submit" class="btn btn-primary save col-right"><?php echo $this->lang->line('graphene_save');?></button>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="box box-block bg-white">
      <h2><strong><?php echo $this->lang->line('graphene_list_all');?></strong> <?php echo $this->lang->line('graphene_e_details_baccount');?></h2>
      <div class="table-responsive" data-pattern="priority-columns">
        <table class="table table-condensed table-hover table-bordered dataTable" id="xin_table_bank_account" style="width:100%;">
          <thead>
            <tr>
              <th><?php echo $this->lang->line('graphene_action');?></th>
              <th><?php echo $this->lang->line('graphene_e_details_acc_title');?></th>
              <th><?php echo $this->lang->line('graphene_e_details_acc_number');?></th>
              <th><?php echo $this->lang->line('graphene_e_details_bank_name');?></th>
              <th><?php echo $this->lang->line('graphene_e_details_bank_code');?></th>
              <th><?php echo $this->lang->line('graphene_e_details_bank_branch');?></th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>

  <div class="col-md-9 current-tab animated fadeInUp" id="contract" style="display:none;">
    <div class="box box-block bg-white">
      <form id="contract_info" action="<?php echo site_url("employees/contract_info") ?>" name="contract_info" method="post">
        <input type="hidden" name="user_id" value="<?php echo $user_id;?>">
        <input type="hidden" name="u_basic_info" value="UPDATE">
        <h2><strong><?php echo $this->lang->line('graphene_add_new');?></strong> <?php echo $this->lang->line('graphene_e_details_contract');?></h2>
        <div class="add-record-btn">
          <!-- <button type="button"> </button> -->
          <a href="<?php echo site_url();?>employees" class="btn btn-sm btn-default"><i class="fa fa-angle-left icon"></i> <?php echo $this->lang->line('graphene_back_employeelist');?></a>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="contract_type_id" class=""><?php echo $this->lang->line('graphene_e_details_contract_type');?></label>
            <select class="form-control" name="contract_type_id" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('graphene_select_one');?>">
              <option value=""><?php echo $this->lang->line('graphene_select_one');?></option>
              <?php foreach($all_contract_types as $contract_type) {?>
              <option value="<?php echo $contract_type->contract_type_id;?>"> <?php echo $contract_type->name;?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label class="" for="from_date"><?php echo $this->lang->line('graphene_e_details_frm_date');?></label>
            <input type="text" class="form-control cont_date" name="from_date" placeholder="_" readonly value="">
          </div>
          <div class="form-group">
            <label for="designation_id" class=""><?php echo $this->lang->line('dashboard_designation');?></label>
            <select class="form-control" name="designation_id" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('graphene_select_one');?>">
              <option value=""><?php echo $this->lang->line('graphene_select_one');?></option>
              <?php foreach($all_designations as $designation) {?>
              <option value="<?php echo $designation->designation_id?>"><?php echo $designation->designation_name?></option>
              <?php } ?>
            </select>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="title" class=""><?php echo $this->lang->line('graphene_e_details_contract_title');?></label>
            <input class="form-control" placeholder="<?php echo $this->lang->line('graphene_e_details_contract_title');?>" name="title" type="text" value="" id="title">
          </div>
          <div class="form-group">
            <label for="to_date"><?php echo $this->lang->line('graphene_e_details_to_date');?></label>
            <input type="text" class="form-control cont_date" name="to_date" placeholder="_" readonly value="">
          </div>
          <div class="form-group">
            <label for="description"><?php echo $this->lang->line('graphene_description');?></label>
            <textarea class="form-control" placeholder="_" data-show-counter="1" data-limit="300" name="description" cols="30" rows="3" id="description"></textarea>
            <span class="countdown"></span> </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <button type="submit" class="btn btn-primary save col-right"><?php echo $this->lang->line('graphene_save');?></button>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="box box-block bg-white">
      <h2><strong><?php echo $this->lang->line('graphene_list_all');?></strong> <?php echo $this->lang->line('graphene_e_details_contracts');?></h2>
      <div class="table-responsive" data-pattern="priority-columns">
        <table class="table table-condensed table-hover table-bordered dataTable" id="xin_table_contract" style="width:100%;">
          <thead>
            <tr>
              <th><?php echo $this->lang->line('graphene_action');?></th>
              <th><?php echo $this->lang->line('graphene_e_details_duration');?></th>
              <th><?php echo $this->lang->line('dashboard_designation');?></th>
              <th><?php echo $this->lang->line('graphene_e_details_contract_type');?></th>
              <th><?php echo $this->lang->line('dashboard_graphene_title');?></th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>

  <div class="col-md-9 current-tab animated fadeInUp" id="leave" style="display:none;">
    <div class="box box-block bg-white">
      <form id="leave_info" action="<?php echo site_url("employees/leave_info") ?>" name="leave_info" method="post">
        <input type="hidden" name="user_id" value="<?php echo $user_id;?>">
        <input type="hidden" name="u_basic_info" value="UPDATE">
        <h2><strong><?php echo $this->lang->line('graphene_add_new');?></strong> <?php echo $this->lang->line('left_leave');?></h2>
        <div class="add-record-btn">
          <!-- <button type="button"> </button> -->
          <a href="<?php echo site_url();?>employees" class="btn btn-sm btn-default"><i class="fa fa-angle-left icon"></i> <?php echo $this->lang->line('graphene_back_employeelist');?></a>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="contract_id"><?php echo $this->lang->line('graphene_e_details_contract');?></label>
              <select class="form-control" name="contract_id" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('graphene_select_one');?>">
                <option value=""><?php echo $this->lang->line('graphene_select_one');?></option>
                <?php foreach($all_contracts as $contracts) {?>
                <option value="<?php echo $contracts->contract_id?>"><?php echo $contracts->title; ?> from <?php echo $contracts->from_date.' to '.$contracts->to_date;?></option>
                <?php } ?>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5">
            <div class="form-group">
              <label for="casual_leave" class="control-label"><?php echo $this->lang->line('graphene_e_details_casual_leave');?></label>
              <input class="form-control" placeholder="_" name="casual_leave" type="text">
            </div>
          </div>
          <div class="col-md-7">
            <div class="form-group">
              <label for="medical_leave" class="control-label"><?php echo $this->lang->line('graphene_e_details_medical_leave');?></label>
              <input class="form-control" placeholder="_" name="medical_leave" type="text">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <button type="submit" class="btn btn-primary save col-right"><?php echo $this->lang->line('graphene_save');?></button>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="box box-block bg-white">
      <h2><strong><?php echo $this->lang->line('graphene_list_all');?></strong> <?php echo $this->lang->line('left_leave');?></h2>
      <div class="table-responsive" data-pattern="priority-columns">
        <table class="table table-condensed table-hover table-bordered dataTable" id="xin_table_leave" style="width:100%;">
          <thead>
            <tr>
              <th><?php echo $this->lang->line('graphene_action');?></th>
              <th><?php echo $this->lang->line('graphene_e_details_contract');?></th>
              <th><?php echo $this->lang->line('graphene_e_details_casual_leave');?></th>
              <th><?php echo $this->lang->line('graphene_e_details_medical_leave');?></th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>

  <div class="col-md-9 current-tab animated fadeInUp" id="shift" style="display:none;">
    <div class="box box-block bg-white">
      <form id="shift_info" action="<?php echo site_url("employees/shift_info");?>" name="shift_info" method="post">
        <input type="hidden" name="user_id" value="<?php echo $user_id;?>">
        <input type="hidden" name="u_basic_info" value="UPDATE">
        <h2><strong><?php echo $this->lang->line('graphene_add_new');?></strong> <?php echo $this->lang->line('graphene_e_details_shift');?></h2>
        <div class="add-record-btn">
          <!-- <button type="button"> </button> -->
          <a href="<?php echo site_url();?>employees" class="btn btn-sm btn-default"><i class="fa fa-angle-left icon"></i> <?php echo $this->lang->line('graphene_back_employeelist');?></a>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="from_date"><?php echo $this->lang->line('graphene_e_details_frm_date');?></label>
              <input class="form-control date" readonly placeholder="_" name="from_date" type="text">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="to_date" class="control-label"><?php echo $this->lang->line('graphene_e_details_to_date');?></label>
              <input class="form-control date" readonly placeholder="_" name="to_date" type="text">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="shift_id" class="control-label"><?php echo $this->lang->line('graphene_e_details_shift');?></label>
              <select class="form-control" name="shift_id" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('graphene_select_one');?>">
                <option value=""><?php echo $this->lang->line('graphene_select_one');?></option>
                <?php foreach($all_office_shifts as $office_shift) {?>
                <option value="<?php echo $office_shift->office_shift_id;?>"><?php echo $office_shift->shift_name?></option>
                <?php } ?>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <button type="submit" class="btn btn-primary save col-right"><?php echo $this->lang->line('graphene_save');?></button>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="box box-block bg-white">
      <h2><strong><?php echo $this->lang->line('graphene_list_all');?></strong> <?php echo $this->lang->line('graphene_e_details_shift');?></h2>
      <div class="table-responsive" data-pattern="priority-columns">
        <table class="table table-condensed table-hover table-bordered dataTable" id="xin_table_shift" style="width:100%;">
          <thead>
            <tr>
              <th><?php echo $this->lang->line('graphene_action');?></th>
              <th><?php echo $this->lang->line('graphene_e_details_date');?></th>
              <th><?php echo $this->lang->line('left_office_shift');?></th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>

  <div class="col-md-9 current-tab animated fadeInUp" id="location" style="display:none;">
    <div class="box box-block bg-white">
      <form id="location_info" action="<?php echo site_url("employees/location_info");?>" name="location_info" method="post">
        <input type="hidden" name="user_id" value="<?php echo $user_id;?>">
        <input type="hidden" name="u_basic_info" value="UPDATE">
        <h2><strong><?php echo $this->lang->line('graphene_add_new');?></strong> <?php echo $this->lang->line('left_location');?></h2>
        <div class="add-record-btn">
          <!-- <button type="button"> </button> -->
          <a href="<?php echo site_url();?>employees" class="btn btn-sm btn-default"><i class="fa fa-angle-left icon"></i> <?php echo $this->lang->line('graphene_back_employeelist');?></a>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="from_date"><?php echo $this->lang->line('graphene_e_details_frm_date');?></label>
              <input class="form-control date" readonly placeholder="_" name="from_date" type="text">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="to_date" class="control-label"><?php echo $this->lang->line('graphene_e_details_to_date');?></label>
              <input class="form-control date" readonly placeholder="_" name="to_date" type="text">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="location_id" class="control-label"><?php echo $this->lang->line('graphene_e_details_office_location');?></label>
              <select class="form-control" name="location_id" data-plugin="select_hrm" data-placeholder="<?php echo $this->lang->line('graphene_select_one');?>">
                <option value=""><?php echo $this->lang->line('graphene_select_one');?></option>
                <?php foreach($all_office_locations as $location) {?>
                <option value="<?php echo $location->location_id?>"><?php echo $location->location_name?></option>
                <?php } ?>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <button type="submit" class="btn btn-primary save col-right"><?php echo $this->lang->line('graphene_save');?></button>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="box box-block bg-white">
      <h2><strong><?php echo $this->lang->line('graphene_list_all');?></strong> <?php echo $this->lang->line('left_location');?></h2>
      <div class="table-responsive" data-pattern="priority-columns">
        <table class="table table-condensed table-hover table-bordered dataTable" id="xin_table_location" style="width:100%;">
          <thead>
            <tr>
              <th><?php echo $this->lang->line('graphene_action');?></th>
              <th><?php echo $this->lang->line('graphene_e_details_date');?></th>
              <th><?php echo $this->lang->line('left_location');?></th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>

  <div class="col-md-9 current-tab animated fadeInUp" id="change_password" style="display:none;">
    <div class="box box-block bg-white">
      <form id="e_change_password" action="<?php echo site_url("employees/change_password");?>" name="e_change_password" method="post">
        <input type="hidden" name="user_id" value="<?php echo $user_id;?>">
        <input type="hidden" name="u_basic_info" value="UPDATE">
        <h2><strong><?php echo $this->lang->line('graphene_e_details_eforce');?></strong> <?php echo $this->lang->line('header_change_password');?></h2>
        <div class="add-record-btn">
          <!-- <button type="button"> </button> -->
          <a href="<?php echo site_url();?>employees" class="btn btn-sm btn-default"><i class="fa fa-angle-left icon"></i> <?php echo $this->lang->line('graphene_back_employeelist');?></a>
        </div>  
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="new_password"><?php echo $this->lang->line('graphene_e_details_enpassword');?> <font color="red">*</font></label>
              <input class="form-control" placeholder="_" name="new_password" type="text">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="new_password_confirm" class="control-label"><?php echo $this->lang->line('graphene_e_details_ecnpassword');?> <font color="red">*</font></label>
              <input class="form-control" placeholder="_" name="new_password_confirm" type="text">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <button type="submit" class="btn btn-primary save col-right"><?php echo $this->lang->line('graphene_save');?></button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

