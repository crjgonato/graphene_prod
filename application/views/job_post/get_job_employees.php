<?php $result = $this->Job_post_model->ajax_job_user_information($job_id);?>
<?php
?>
<div class="form-group">
    <label for="interviewees">Interviewees (Selected Candidates)</label>
    <select multiple class="form-control" name="interviewees[]" data-plugin="select_hrm" data-placeholder="Candidates">
    <option value=""></option>
    <?php foreach($result as $employee_id) {?>
    <?php $user = $this->Graphene_model->read_user_info($employee_id->user_id);?>
        <option value="<?php echo $user[0]->user_id;?>"><?php echo $user[0]->first_name. ' ' .$user[0]->last_name;?></option>
    <?php } ?>
  </select>
</div>
<?php
//}
?>
<script type="text/javascript">
$(document).ready(function(){	
	$('[data-plugin="select_hrm"]').select2($(this).attr('data-options'));
	$('[data-plugin="select_hrm"]').select2({ width:'100%' });
});
</script>