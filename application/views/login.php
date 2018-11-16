<?php 
    $session = $this->session->userdata('username');
    $user_info = $this->Graphene_model->read_user_info($session['user_id']);
?>

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
<title><?php echo $title;?></title>

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

<body class="auth-bg"><br>
<div class="auth animated fadeInUp">
    <div class="auth-header">
        <div class="mb-2"><img src="<?php echo base_url();?>uploads/logo/graphene_logov4.png" draggable="false" title=""> </div>
        <h5 class="signin"> Sign in to Graphene </h5>
    </div>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 offset-md-4">
                <form class="mb-1" method="post" name="hrm-form" id="hrm-form" data-redirect="dashboard" data-form-table="login" data-is-redirect="1">
                    <div class="form-group">    
                        <div class="input-group">
                        <div class="input-group-addon"><i class="ti-user"></i></div>
                            <input type="text" class="form-control" name="iusername" id="iusername" placeholder="Username" autofocus="true">
                        </div>
                    </div>                  
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-key"></i></div>
                                <input type="password" class="form-control" name="ipassword" id="ipassword" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group clearfix">
                        <div class="float-xs-right">
                            <!-- <a href="<?php echo site_url('forgot_password');?>" style="color: #6b6b6b;">Forgot password?</a> -->
                            <!-- <a class=" font-90" href="#">Forgot password?</a> -->
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-md btn-block">Sign in</button>
                    </div>
                </form>
                <div class="row"><center>
                    <div style="color : #6b6b6b;">
                        <?php if($system[0]->enable_current_year=='yes'):?><?php echo date('Y');?> <?php endif;?> ©&nbsp;&nbsp; <?php echo $system[0]->footer_text;?>
                        <?php if($system[0]->enable_page_rendered=='yes'):?> - Page rendered in <strong>{elapsed_time}</strong> seconds. 
                        <?php endif; ?>
                    </div></center>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Vendor JS --> 
<script type="text/javascript" src="<?php echo base_url();?>skin/vendor/jquery/jquery-3.2.1.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>skin/vendor/tether/js/tether.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>skin/vendor/bootstrap/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>skin/vendor/toastr/toastr.min.js"></script> 
<script type="text/javascript">
$(document).ready(function(){
	toastr.options.closeButton = <?php echo $system[0]->notification_close_btn;?>;
	toastr.options.progressBar = <?php echo $system[0]->notification_bar;?>;
	toastr.options.timeOut = 5000;
	toastr.options.preventDuplicates = true;
	toastr.options.positionClass = "<?php echo $system[0]->notification_position;?>";
});
</script>       
<script type="text/javascript">var base_url = '<?php echo base_url(); ?>';</script>
<script type="text/javascript" src="<?php echo base_url();?>skin/js_module/login.js"></script>
</body>
</html>