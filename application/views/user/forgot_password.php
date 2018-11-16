<?php $system = $this->Graphene_model->read_setting_info(1);?>
<?php $company = $this->Graphene_model->read_company_setting_info(1);?>
<!DOCTYPE html>
<html lang="en" oncontextmenu="return false;">
<head>
<!-- Meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="<?=base_url()?>uploads/logo/favicon/favicon_1533729650.png" type="image/png">

<!-- Title -->
<title>Graphene - Forgot Password</title>

<!-- Vendor CSS -->
<link rel="stylesheet" href="<?php echo base_url();?>skin/vendor/bootstrap4/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>skin/vendor/themify-icons/themify-icons.css">
<link rel="stylesheet" href="<?php echo base_url();?>skin/vendor/font-awesome/css/fontawesome.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>skin/vendor/toastr/toastr.min.css">
<!-- Core CSS -->
<link rel="stylesheet" href="<?php echo base_url();?>skin/css/core.css">

<!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<!-- <body class="img-cover" style="background:#f5f5f5;">
<div class="container-fluid">
  <div class="sign-form animated fadeInUp">
    <div class="row">
      <div class="col-md-3 offset-md-4">
			<div class="mb-2"><img src="<?php echo base_url();?>uploads/logo/graphene_logov4.png" draggable="false" title=""></div>

        <div class="b-a-0">
          <div class="p-2 text-xs-center">
            <h5>Reset your password</h5>
          </div>
          <form class="form-group" action="<?php echo site_url();?>forgot_password/send_mail/" method="post" name="xin-form" id="xin-form">
            <div class="input-group">
							<div class="input-group-addon"><i class="ti-user"></i></div>
								<input type="text" class="form-control" name="iemail" id="iemail" placeholder="Enter your email address" autofocus="true">
							</div>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-md btn-block">Reset</button>
            </div>
          </form>
				
					 <div class="col-md-11 offset-md-2" style="color : #6b6b6b;">
                        <?php if($system[0]->enable_current_year=='yes'):?><?php echo date('Y');?> <?php endif;?> ©&nbsp;&nbsp; <?php echo $system[0]->footer_text;?>
                        <?php if($system[0]->enable_page_rendered=='no'):?> - Page rendered in <strong>{elapsed_time}</strong> seconds. 
                       
                        <?php endif; ?>
                    </div>
				</div>
				
      </div>
    </div>
  </div>
 
</div> -->

<body class="auth-bg"><br>
<div class="auth animated fadeInUp">
    <div class="auth-header">
        <div class="mb-2"><img src="<?php echo base_url();?>uploads/logo/graphene_logov4.png" draggable="false" title=""></div>
        <h6>Reset your password</h6>
    </div>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 offset-md-4">
                <form class="form-group" action="<?php echo site_url();?>forgot_password/send_mail/" method="post" name="xin-form" id="xin-form">
                    <div class="form-group">
                        <input type="text" class="form-control" name="iemail" id="iemail" placeholder="Enter your email address" autofocus="true">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-md btn-block reset">Reset</button>
                    </div>
                </form>
                <div class="row">
                    <div class="col-md-11 offset-md-2" style="color : #6b6b6b;">
                        <?php if($system[0]->enable_current_year=='yes'):?><?php echo date('Y');?> <?php endif;?> ©&nbsp;&nbsp; <?php echo $system[0]->footer_text;?>
                        <?php if($system[0]->enable_page_rendered=='no'):?> - Page rendered in <strong>{elapsed_time}</strong> seconds. 
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Vendor JS --> 
<script type="text/javascript" src="<?php echo base_url();?>skin/vendor/jquery/jquery-1.12.3.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>skin/vendor/tether/js/tether.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>skin/vendor/bootstrap/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>skin/vendor/toastr/toastr.min.js"></script> 
<script type="text/javascript">
$(document).ready(function(){
	toastr.options.closeButton = true;
	toastr.options.progressBar = false;
	toastr.options.timeOut = 3000;
	toastr.options.positionClass = "toast-bottom-right";
	
	/* Add data */ /*Form Submit*/
	$("#xin-form").submit(function(e){
	e.preventDefault();
		var obj = $(this), action = obj.attr('name');
		$('.reset').prop('disabled', true);
		$.ajax({
			type: "POST",
			url: e.target.action,
			data: obj.serialize()+"&is_ajax=1&add_type=forgot_password&form="+action,
			cache: false,
			success: function (JSON) {
				if (JSON.error != '') {
					toastr.error(JSON.error);
					$('.reset').prop('disabled', false);
				} else {
					toastr.success(JSON.result);
					$('#iemail').val(''); // To reset form fields
					$('.reset').prop('disabled', false);
				}
			}
		});
	});
});
</script>
</body>
</html>