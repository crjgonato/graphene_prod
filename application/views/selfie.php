
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
      <div class="mb-3"><img src="<?php echo base_url();?>uploads/logo/graphene_logov4.png" draggable="false" ></div>
      <!-- <h1 class="selfie_dtr">Are you a ...</h1> -->
      <button type="button" class="btn btn-primary btn-lg">Are you a ...</button>
  </div>
  <div class="container-fluid">
    <div class="row offset-md-3">
        <div class="col-md-4">
          <div class="box box-block bg-white male" style="cursor: pointer;">
            <img src="<?php echo base_url();?>uploads/profile/default_male.png" width="280px">
            <p class="selfie_dtr"><center><b>Male</b></center></p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="box box-block bg-white female" style="cursor: pointer;">
            <img src="<?php echo base_url();?>uploads/profile/default_female.png" width="280px">
            <p class="selfie_dtr"><center><b>Female</b></center></p>
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

    $(".male").hover( function () {
      alert("hello");
    }, function() {
      alert("And we're out");
    });
  });
</script>    
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>   -->
<script type="text/javascript">var base_url = '<?php echo base_url(); ?>';</script>
</body>
</html>

