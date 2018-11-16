<?php $system = $this->Graphene_model->read_setting_info(1);?>
<footer class="footer">
    <div class="container-fluid">
        <?php if($system[0]->enable_current_year=='yes'):?><?php echo date('Y');?><?php endif;?> © <?php echo $system[0]->footer_text;?> 
        <?php if($system[0]->enable_page_rendered=='yes'):?> - 
        Page rendered in (<strong>{elapsed_time}</strong> seconds) | Development Version.
        <!-- <//?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?> -->
        <?php endif; ?>
        <!-- <div id="mainContainer">
<a href="javascript:void(0)">Check connection!</a>
</div>
<script>


	var link = document.querySelector("#mainContainer a");
	link.addEventListener("mousedown", doesConnectionExist, false);
	
	function doesConnectionExist() {
		var xhr = new XMLHttpRequest();
		var file = "https://www.kirupa.com/blank.png?rand=6544";
		var randomNum = Math.round(Math.random() * 10000);
	
		xhr.open("HEAD", file + "?rand=" + randomNum, true);
		xhr.send();
		
		xhr.addEventListener("readystatechange", processRequest, false);
	
		function processRequest(e) {
		  if (xhr.readyState == 4) {
			if (xhr.status >= 200 && xhr.status < 304) {
			  //alert("connection exists!");
			} else {
			  alert("Something went wrong. Check your connection and try again.");
			}
		  }
		}
	}
</script>
    </div> -->
</footer>