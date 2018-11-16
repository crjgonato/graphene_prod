<style>
/* icon blinking */
  .blink { 
      animation: blink 2s steps(5, start) infinite;
      -webkit-animation: blink 2s steps(5, start) infinite;
    }
    @keyframes blink {
      to {
        visibility: hidden;
      }
    }
    @-webkit-keyframes blink {
      to {
        visibility: hidden;
      }
    }
/* end icon blinking */
</style>

<script type="text/javascript">
$(document).ready(function(){
   toastr.options.closeButton = <?php echo $system[0]->notification_close_btn;?>;
   toastr.options.progressBar = <?php echo $system[0]->notification_bar;?>;
   toastr.options.timeOut = 3000;
   toastr.options.preventDuplicates = true;
   toastr.options.positionClass = "<?php echo $system[0]->notification_position;?>";
    $(".add-new-form").click(function(){
        $(".add-form").slideToggle('slow');
    });
   //All using Date
   $('.date').datepicker({
        onSelect: function(value, ui) {
        var today = new Date(), 
            age = today.getFullYear() - ui.selectedYear;
        $('#age').val(age);
    },
    //maxDate: '+0d',
    changeMonth: true,
    changeYear: true,
    dateFormat:'yy-mm-dd',
    // defaultDate: '-18yr',
    yearRange: '1900:' + (new Date().getFullYear() + 15),
        beforeShow: function(input) {
            $(input).datepicker("widget").show();
        }
   });
    //Date of Birth
   $('.birthdate').datepicker({
        onSelect: function(value, ui) {
        var today = new Date(), 
            age = today.getFullYear() - ui.selectedYear;
        $('#age').val(age);
    },
    maxDate: '+0d',
    changeMonth: true,
    changeYear: true,
    dateFormat:'yy-mm-dd',
    yearRange: '1900:' + (new Date().getFullYear() + 15),
        beforeShow: function(input) {
            $(input).datepicker("widget").show();
        }
   });
   
});	

function reloadpage() { //reload button on header
    location.reload(true);
}
function goBack() {
    window.history.back(); // History Back
}
$(document).keydown(function (event) {
    if (event.keyCode == 123) { // Prevent F12
        return false;
    } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I        
        return false;
    }
});
</script>
