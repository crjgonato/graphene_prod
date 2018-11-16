<?php $session = $this->session->userdata('username'); ?>
<?php $company = $this->Graphene_model->read_company_setting_info(1);?>
<?php $user = $this->Graphene_model->read_user_info($session['user_id']); ?>
<?php $system = $this->Graphene_model->read_setting_info(1);?>
<div class="modal fade delete-modal animated <?php echo $system[0]->animation_effect_modal;?>" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header alert alert-dismissible fade in m-b-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
        <strong class="modal-title">Are you sure you want to delete this record?</strong> </div>
      <div class="modal-body" role="alert"> <p>Record deleted can't be restored.</p> </div>
      <div class="modal-footer">
        <form id="delete_record" name="delete_record" role="form" action="" method="post">
          <input name="_method" type="hidden" value="DELETE">
          <input name="_token" type="hidden" value="">
          <input name="token_type" id="token_type" type="hidden" value="">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger">Confirm</button>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade edit-modal-data animated <?php echo $system[0]->animation_effect_modal;?>" id="edit-modal-data" tabindex="-1" role="dialog" aria-labelledby="edit-modal-data" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" id="ajax_modal"></div>
  </div>
</div>
<div class="modal fade view-modal-data animated <?php echo $system[0]->animation_effect_modal;?>" id="view-modal-data" tabindex="-1" role="dialog" aria-labelledby="view-modal-data" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" id="ajax_modal_view"></div>
  </div>
</div>
<div class="modal fade payroll_template_modal default-modal animated <?php echo $system[0]->animation_effect_modal;?>" id="payroll_template_modal" tabindex="-1" role="dialog" aria-labelledby="detail-modal-data" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog">
    <div class="modal-content" id="ajax_modal_payroll"></div>
  </div>
</div>
<div class="modal fade hourlywages_template_modal default-modal animated <?php echo $system[0]->animation_effect_modal;?>" id="hourlywages_template_modal" tabindex="-1" role="dialog" aria-labelledby="detail-modal-data" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog">
    <div class="modal-content" id="ajax_modal_hourlywages"></div>
  </div>
</div>
<div class="modal fade detail_modal_data default-modal animated <?php echo $system[0]->animation_effect_modal;?>" id="detail_modal_data" tabindex="-1" role="dialog" aria-labelledby="detail-modal-data" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog">
    <div class="modal-content" id="ajax_modal_details"></div>
  </div>
</div>
<div class="modal fade emo_monthly_pay animated <?php echo $system[0]->animation_effect_modal;?>" id="emo_monthly_pay" tabindex="-1" role="dialog" aria-labelledby="emo_monthly_pay" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog">
    <div class="modal-content" id="emo_monthly_pay_aj"></div>
  </div>
</div>
<div class="modal fade emo_hourly_pay animated <?php echo $system[0]->animation_effect_modal;?>" id="emo_hourly_pay" tabindex="-1" role="dialog" aria-labelledby="emo_hourly_pay" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog">
    <div class="modal-content" id="emo_hourly_pay_aj"></div>
  </div>
</div>
<div class="modal fade payroll_template_modal default-modal animated <?php echo $system[0]->animation_effect_modal;?>" id="payroll_template_modal" tabindex="-1" role="dialog" aria-labelledby="detail-modal-data" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog">
    <div class="modal-content" id="ajax_modal_payroll"></div>
  </div>
</div>
<div class="modal fade hourlywages_template_modal default-modal animated <?php echo $system[0]->animation_effect_modal;?>" id="hourlywages_template_modal" tabindex="-1" role="dialog" aria-labelledby="detail-modal-data" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog">
    <div class="modal-content" id="ajax_modal_hourlywages"></div>
  </div>
</div>
<div class="modal fade add-modal-data animated <?php echo $system[0]->animation_effect_modal;?>" id="add-modal-data" tabindex="-1" role="dialog" aria-labelledby="add-modal-data" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog">
    <div class="modal-content" id="add_ajax_modal"></div>
  </div>
</div>
<div class="modal fade delete-modal-file animated <?php echo $system[0]->animation_effect_modal;?>" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
        <strong class="modal-title">Are you sure you want to delete this record?</strong> </div>
      <div class="alert alert-dismissible fade in m-b-0" role="alert"> <strong>Record deleted can't be restored!!!</strong> </div>
      <div class="modal-footer">
        <form id="delete_record_f" name="delete_record_f" role="form" action="" method="post">
          <input name="_method" type="hidden" value="DELETE">
          <input name="_token_del_file" type="hidden" value="">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Confirm</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- logout alert -->
<div class="modal fade confirm-logout animated <?php echo $system[0]->animation_effect_modal;?>" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header alert alert-dismissible fade in">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
        <strong class="modal-title">Confirm Logout</strong> </div>
      <div class="modal-body" role="alert"> <p>Are you sure you want to logout?</p> </div>
      <div class="modal-footer center">     
          <button type="button" class="btn btn-secondary" data-dismiss="modal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
          <button class="btn btn-primary" onclick="window.location.href='<?php echo site_url();?>logout'">Yes, please log me out.</button>
      </div>
    </div>
  </div>
</div>
<!-- end logout alert -->
<?php $logo_second = base_url().'uploads/logo/'.$company[0]->logo_second;?>
<?php $logo = base_url().'uploads/logo/'.$company[0]->logo;?>
<style type="text/css">
.skin-4 .site-header .navbar-brand .logo {
    background: url(<?php echo $logo?>) no-repeat;
}
.skin-3 .site-header .navbar-brand .logo {
    background: url(<?php echo $logo?>) no-repeat;
}
.site-header .navbar-brand .logo {
    background: url(<?php echo $logo_second?>) no-repeat;
}
</style>

<!-- Vendor JS -->
<?php if($user[0]->user_role_id=='1'){?>
<link rel="stylesheet" href="<?php echo base_url();?>skin/vendor/morris/morris.css">
<script type="text/javascript" src="<?php echo base_url();?>skin/vendor/chartjs/Chart.bundle.min.js"></script> 
<?php } ?>
<script type="text/javascript" src="<?php echo base_url();?>skin/vendor/jquery/jquery-3.2.1.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>skin/vendor/tether/js/tether.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>skin/vendor/bootstrap/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>skin/vendor/detectmobilebrowser/detectmobilebrowser.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>skin/vendor/jscrollpane/jquery.mousewheel.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>skin/vendor/jscrollpane/mwheelIntent.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>skin/vendor/jscrollpane/jquery.jscrollpane.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>skin/vendor/waves/waves.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>skin/vendor/chartist/chartist.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>skin/vendor/switchery/dist/switchery.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>skin/vendor/select2/dist/js/select2.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>skin/vendor/DataTables/js/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>skin/vendor/DataTables/js/dataTables.bootstrap4.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>skin/vendor/DataTables/Responsive/js/dataTables.responsive.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>skin/vendor/DataTables/Responsive/js/responsive.bootstrap4.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>skin/vendor/DataTables/Buttons/js/buttons.colVis.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>skin/vendor/jquery-fullscreen-plugin/jquery.fullscreen-min.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>skin/vendor/toastr/toastr.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>skin/vendor/raphael/raphael.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>skin/vendor/morris/morris.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>skin/vendor/summernote/summernote.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>skin/vendor/jquery-ui/jquery-ui.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>skin/vendor/clockpicker/dist/jquery-clockpicker.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>skin/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>skin/vendor/Trumbowyg/src/trumbowyg.js"></script> 
<!-- JS --> 

<!--<link rel="stylesheet" href="http://plugins.krajee.com/assets/86220c49/css/fileinput.min.css">-->
<link rel="stylesheet" href="<?php echo base_url();?>skin/vendor/switchery/dist/switchery.min.css">
<script type="text/javascript" src="<?php echo base_url();?>skin/js/app.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>skin/js/demo.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>skin/vendor/kendo/kendo.all.min.js"></script> 
<!--<script type="text/javascript" src="http://plugins.krajee.com/assets/86220c49/js/fileinput.min.js"></script>-->

<?php include ('skin/js_module/sourcejs.php'); ?>
<script type="text/javascript">
  var user_role = '<?php echo $user[0]->user_role_id;?>';
  var js_date_format = '<?php echo $this->Graphene_model->set_date_format_js();?>';
  var site_url = '<?php echo base_url(); ?>';
  var base_url = '<?php echo base_url().$this->router->fetch_class(); ?>';
</script>
<script type="text/javascript" src="<?php echo base_url().'skin/js_module/'.$path_url.'.js'; ?>"></script>
<script type="text/javascript" src="<?php echo base_url().'skin/js_module/set_clocking.js'; ?>"></script>
<script type="text/javascript" src="<?php echo base_url().'skin/js_module/custom.js'; ?>"></script>
<?php if($this->router->fetch_method() =='task_details' || $this->router->fetch_class() =='project'){?>
<script type="text/javascript" src="<?php echo base_url();?>skin/vendor/ion.rangeSlider/js/ion-rangeSlider/ion.rangeSlider.min.js"></script>
<?php } ?>
<?php if($this->router->fetch_method() =='task_details' || $this->router->fetch_class() =='project'){?>
<script type="text/javascript">
  $(document).ready(function(){	
    $("#range_grid").ionRangeSlider({
      type: "single",
      min: 0,
      max: 100,
      from: '<?php echo $progress;?>',
      grid: true,
      force_edges: true,
      onChange: function (data) {
        $('#progres_val').val(data.from);
      }
    });
    
  });

 
</script>
<?php } ?>
</body>
</html>