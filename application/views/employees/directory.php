<?php
/* Employee Directory view
*/
?>
<?php $session = $this->session->userdata('username');?>

<div class="row row-sm">
  <?php foreach($all_employees as $employee):?>
  <?php $designation = $this->Designation_model->read_designation_information($employee->designation_id);?>
  <?php $department = $this->Department_model->read_department_information($employee->department_id);?>
  <!-- TODO Employee Contract --> <!-- End -->
  <?php
		if($employee->profile_picture!='' && $employee->profile_picture!='no file') {
			$u_file = base_url().'uploads/profile/'.$employee->profile_picture;
		} else {
			if($employee->gender=='Male') { 
				$u_file = base_url().'uploads/profile/default_male.png';
			} else {
				$u_file = base_url().'uploads/profile/default_female.png';
			}
		}
    
    // Employee Profile Status
		// if($employee->is_active==1):
		// 	$status = '<span class="tag tag-success">'.$this->lang->line('employees_active').'</span>';
		// else:
		// 	$status = '<span class="tag tag-danger">'.$this->lang->line('employees_inactive').'</span>';
    // endif;

    if($employee->online==1):
			$online = '<span class="dotgreen bg-success" title="Online">&nbsp;</span> ';
		else:
			$online = '<span class="dotred bg-danger" title="Offline">&nbsp;</span> ';
    endif;
	?>
  <div class="col-md-3">
    <div class="box box-block bg-white animated fadeInUp">
      <div class="row">
        <div class="col-md-3 col-sm-3 text-center"> <img class="img-fluid b-a-radius-circle" src="<?php echo $u_file;?>" alt="" draggable="false"> 
        
      </div>
        <div class="col-md-8 col-sm-8 withellipsis">
          <h6><?php echo $online;?><a href="<?php echo site_url()?>employees/detail/<?php echo $employee->user_id;?>/" class="withellipsis"><?php echo $employee->first_name;?> <?php echo $employee->last_name;?> </a></h6>
          <span ><?php echo $department[0]->department_name;?></span><br>
          <span ><?php echo $designation[0]->designation_name;?></span>
          <address>
          <?php echo $employee->address;?><br>
          <abbr title="<?php echo $this->lang->line('graphene_phone');?>"></abbr> <?php echo $employee->contact_no;?><br>
          <!-- <abbr title=""></abbr> <?php echo $employee->contract;?><br> -->
          <!-- <abbr title="<?php echo $this->lang->line('dashboard_graphene_status');?> "></abbr> <span class="s-text"><//?php echo $status;?></span> -->
        </div>
      </div>
    </div>
  </div>
  <?php endforeach;?>
</div>
