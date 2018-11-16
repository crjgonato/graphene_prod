<?php
$session = $this->session->userdata('username');
$system = $this->Graphene_model->read_setting_info(1);
$user_info = $this->Graphene_model->read_user_info($session['user_id']);
$role_user = $this->Graphene_model->read_user_role_info($user_info[0]->user_role_id);
$role_resources_ids = explode(',',$role_user[0]->role_resources);

if($system[0]->system_skin=='skin-default'){
	$cl_skin = 'light';
} else if($system[0]->system_skin=='skin-1'){
	$cl_skin = 'dark';
} else if($system[0]->system_skin=='skin-2'){
	$cl_skin = 'light';
} else if($system[0]->system_skin=='skin-3'){
	$cl_skin = 'light';
} else if($system[0]->system_skin=='skin-4'){
	$cl_skin = 'dark';
} else if($system[0]->system_skin=='skin-5'){
	$cl_skin = 'dark';
} else if($system[0]->system_skin=='skin-6'){
	$cl_skin = 'dark';
}
if($user_info[0]->user_role_id==1) {
?>

<?php }?>
<div class="site-header">
  <nav class="navbar navbar-<?php echo $cl_skin;?>">
    <div class="navbar-left"> 
      <a class="navbar-brand" href="<?php echo site_url();?>dashboard/"> 
      <!--Graphene SME-->
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- <span class="logo-mini"><b>STKS</b></span> -->
        <div class="logo"></div>
      </a>
      <div class="toggle-button <?php echo $cl_skin;?> sidebar-toggle-first float-xs-left hidden-md-up" data-toggle-tooltip="tooltip" data-placement="bottom" data-title="" data-original-title="" title=""> <span class="hamburger"></span> </div>
      <!-- <div class="toggle-button <?php echo $cl_skin;?> float-xs-right hidden-md-up" data-toggle="collapse" data-target="#collapse-1" data-toggle-tooltip="tooltip" data-placement="bottom" data-title="Sidebar" data-original-title="" title=""> <span class="more"></span> </div> -->
    </div>
    <div class="navbar-right navbar-toggleable-sm collapse" id="collapse-1">
      <div class="toggle-button <?php echo $cl_skin;?> sidebar-toggle-second float-xs-left hidden-sm-down" data-toggle-tooltip="tooltip" data-placement="bottom" data-title="" data-original-title="" title=""> <span class="hamburger"></span> </div>
      <ul class="nav navbar-nav float-md-right">
        <!-- <li class="nav-item dropdown"> 
        <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false"> <img src="<?php echo base_url()?>skin/img/flags/en.gif" alt="English"> English </a>
        </li> -->
        <!-- <?php if($system[0]->enable_policy_link=='yes'):?>
        <li class="nav-item"> <a class="nav-link" href="#" data-toggle="modal" data-target=".policy"> <i class="fa fa-product-hunt"></i> <span class="hidden-md-up ml-1"><?php echo $this->lang->line('header_policies');?></span></a> </li>
        <?php endif;?> -->
        <?php if($user_info[0]->user_role_id==1) {?>
        <li class="nav-item dropdown"> 
          <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false"> 
            <i class="ti-bell"></i> 
            <span class="hidden-md-up ml-1">
              <?php echo $this->lang->line('header_notifications');?>
            </span> 
            <!-- <span class="badge badge-warning">?</span> -->
          </a>
          <div class="dropdown-messages dropdown-tasks dropdown-menu dropdown-menu-right animated <?php echo $system[0]->animation_effect_topmenu;?>">
            <?php foreach($this->Graphene_model->get_last_leave_applications() as $leave_notify){?>
            <?php $employee_info = $this->Graphene_model->read_user_info($leave_notify->employee_id);?>
            <?php $el_type = $this->Graphene_model->read_leave_type($leave_notify->leave_type_id);?>
            <div class="m-item">
              <div class="mi-icon"><i class="fas fa-bell"></i></div>
              <div class="mi-text"><a class="text-black" href="<?php echo site_url()?>timesheet/leave_details/id/<?php echo $leave_notify->leave_id;?>/"><?php echo $employee_info[0]->first_name. ' '.$employee_info[0]->last_name;?></a> <span class="text-muted"><?php echo $this->lang->line('header_has_applied_for_leave');?></span> <?php echo $this->Graphene_model->set_date_format($leave_notify->applied_on);?></div>
              <!-- <div class="mi-time"></div> -->
            </div>
            <?php } ?>
            <a class="dropdown-more" href="<?php echo site_url()?>timesheet/leave/"> <strong><?php echo $this->lang->line('header_view_all_leave');?></strong> </a> </div>
        </li>
        <?php } ?>
        <?php if(in_array('53',$role_resources_ids) || in_array('54',$role_resources_ids) || in_array('55',$role_resources_ids) || in_array('56',$role_resources_ids)){?>

        <!-- <li class="nav-item dropdown"> <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false" data-placement="bottom"> <i class="ti-settings"></i> <span class="hidden-md-up ml-1"><?php echo $this->lang->line('left_settings');?></span> </a>
          <div class="dropdown-menu dropdown-menu-right animated <?php echo $system[0]->animation_effect_topmenu;?>">
            <?php if(in_array('53',$role_resources_ids)){?>
            <a class="dropdown-item" href="<?php echo site_url()?>settings/"> <?php echo $this->lang->line('header_configuration');?> </a>
            <?php } ?>
            <?php if(in_array('54',$role_resources_ids)){?>
            <a class="dropdown-item" href="<?php echo site_url()?>settings/constants/"> <?php echo $this->lang->line('left_constants');?> </a>
            <?php } ?>
            <?php if(in_array('55',$role_resources_ids)){?>
            <a class="dropdown-item" href="<?php echo site_url()?>settings/email_template/"> <?php echo $this->lang->line('left_email_templates');?> </a>
            <?php } ?>
            <?php if(in_array('56',$role_resources_ids)){?>
            <a class="dropdown-item" href="<?php echo site_url()?>settings/database_backup/"> <?php echo $this->lang->line('header_db_log');?> </a>
            <?php } ?>
          </div>
        </li> -->
        
        <?php } ?>

        <!-- <//?php
          if($employee->online=='Online'):
            $online = '<span class="dotgreen bg-success" title="Online">&nbsp;</span> ';
          else:
            $online = '<span class="dotred bg-danger" title="Offline">&nbsp;</span> ';
          endif;
        ?> -->
        <li class="nav-item dropdown hidden-sm-down">
            <a href="#" data-toggle="dropdown" aria-expanded="false">
                <span class="avatar box-32">
                    <?php  if($user_info[0]->profile_picture!='' && $user_info[0]->profile_picture!='no file') {?>
                    <img src="<?php  echo base_url().'uploads/profile/'.$user_info[0]->profile_picture;?>" alt="" id="user_avatar" title="<?php echo $user_info[0]->first_name; ?> <?php echo $user_info[0]->last_name; ?>" 
                    class="b-a-radius-circle user_profile_avatar" draggable="false">
                    <?php } else {?>
                    <?php  if($user_info[0]->gender=='Male') { ?>
                    <?php 	$de_file = base_url().'uploads/profile/default_male.png';?>
                    <?php } else { ?>
                    <?php 	$de_file = base_url().'uploads/profile/default_female.png';?>
                    <?php } ?>
                    <img src="<?php echo $de_file;?>" alt="" id="user_avatar" class=" b-a-radius-circle user_profile_avatar" draggable="false" title="<?php echo $user_info[0]->first_name; ?> <?php echo $user_info[0]->last_name; ?>"> 
                    <?php  } ?>
                    
                </span>&nbsp;&nbsp;
                <span class="fas fa-sort-down"> </span>
            </a>
           
            <div class="dropdown-menu dropdown-menu-right animated <?php echo $system[0]->animation_effect_topmenu;?>">
                <a class="dropdown-item" href="<?php echo site_url()?>profile/">
                  <i class="fas fa-user mr-0-4"></i> <?php echo $this->lang->line('header_my_profile');?>
                </a>
                <?php if(in_array('53',$role_resources_ids)){?>
                <a class="dropdown-item" href="<?php echo site_url()?>settings/">
                <i class="fas fa-cog mr-0-4"></i> <?php echo $this->lang->line('left_settings');?>
                </a>
                <?php  } ?>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target=".pro_change_password" data-profile_id="<?php echo $session['user_id'];?>"><i class="fa fa-key mr-0-4"></i> <?php echo $this->lang->line('header_change_password');?></a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target=".confirm-logout"><i class="fa fa-sign-out mr-0-4"></i> <?php echo $this->lang->line('header_sign_out');?></a>
            </div>
        </li>
      </ul>
      <ul class="nav navbar-nav">
        <li class="nav-item hidden-sm-down"> <a class="nav-link toggle-fullscreen" style="cursor: pointer;" title="Switch to full screen mode"> <i class="ti-fullscreen"></i> </a> </li>
        <li class="nav-item hidden-sm-down"> <a class="nav-link" style="cursor: pointer;" onclick="reloadpage()" title="Reload entire page"> <i class="ti-reload"></i> </a> </li>
        <!-- <?php if($system[0]->enable_job_application_candidates=='yes'){?>
        <li class="nav-item hidden-sm-down"> <a href="<?php echo site_url();?>frontend/jobs/" target="_blank">
          <button type="button" class="btn btn-outline-success w-min-sm mb-0-25 waves-effect waves-light" style="background:#43b968; color:#fff;"><?php echo $this->lang->line('header_apply_jobs');?></button>
          </a> </li> -->
        <?php } ?>
        <?php if($user_info[0]->user_role_id!=1) {?>
        <?php if($system[0]->enable_attendance == 'yes' && $system[0]->enable_clock_in_btn=='yes'){?>
        <li class="nav-item hidden-sm-down clock-in-btn">
          <form name="set_clocking" id="set_clocking_hd" method="post">
            <input type="hidden" name="timeshseet" value="<?php echo $user_info[0]->user_id;?>">
            <?php $attendances = $this->Graphene_model->attendance_time_checks($session['user_id']); $dat = $attendances->result();?>
            <?php if($attendances->num_rows() < 1) {?>
            <input type="hidden" value="clock_in" name="clock_state" id="clock_state">
            <input type="hidden" value="" name="time_id" id="time_id">
            <button class="btn btn-success text-uppercase w-min-sm mb-0-25 waves-effect waves-light" type="submit"><i class="fa fa-arrow-circle-right"></i> <?php echo $this->lang->line('dashboard_clock_in');?></button>
            <?php } else {?>
            <input type="hidden" value="clock_out" name="clock_state" id="clock_state">
            <input type="hidden" value="<?php echo $dat[0]->time_attendance_id;?>" name="time_id" id="time_id">
            <button class="btn btn-warning text-uppercase w-min-sm mb-0-25 waves-effect waves-light" type="submit"><i class="fa fa-arrow-circle-left"></i> <?php echo $this->lang->line('dashboard_clock_out');?></button>
            <?php } ?>
          </form>
        </li>
        <?php } ?>
        <?php } ?>
        
      </ul>
    </div>
  </nav>
</div>
<div class="modal fade pro_change_password animated <?php echo $system[0]->animation_effect_modal;?>" id="pro_change_password" tabindex="-1" role="dialog" aria-labelledby="pro_change_password" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog">
    <div class="modal-content" id="change_password_modal"></div>
  </div>
</div>
<div class="modal fade policy animated <?php echo $system[0]->animation_effect_modal;?>" id="policy" tabindex="-1" role="dialog" aria-labelledby="policy" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" id="policy_modal"></div>
  </div>
</div>
