<?php
/* Payroll Template view
*/
?>
<?php $session = $this->session->userdata('username');?>

<div class="row m-b-1">
  <div class="col-md-3 animated fadeInUp">
    <div class="box bg-white">
      <ul class="nav nav-4">

        <li class="nav-item nav-item-link"> <span class="nav-link" href="#setting" data-config="0" data-toggle="tab" aria-expanded="true"> <strong> Forms </strong> </span> </li>

        <li class="nav-item nav-item-link" data-toggle="tab" onclick="openTab('taxtable')" style="cursor:pointer;"> <a class="nav-link nav-tabs-link"><i class="fas fa-file-contract"></i> BIR Forms </a> </li>
        
        <li class="nav-item nav-item-link" data-toggle="tab" onclick="openTab('taxtableannual')" style="cursor:pointer;"> <a class="nav-link nav-tabs-link"><i class="fas fa-file-contract"></i> Pag-ibig Forms </a> </li>

        <li class="nav-item nav-item-link" data-toggle="tab" onclick="openTab('philhealth')" style="cursor:pointer;"> <a class="nav-link nav-tabs-link"><i class="fas fa-file-contract"></i> Philhealth Forms</a> </li>

        <li class="nav-item nav-item-link" data-toggle="tab" onclick="openTab('sss')" style="cursor:pointer;"> <a class="nav-link nav-tabs-link"><i class="fas fa-file-contract"></i> SSS Forms</a> </li>
      </ul>
    </div>
  </div>

  <div class="col-md-9 animated fadeInUp tab" id="taxtable" style="display:none;">
    <form id="tax_table" action="/" name="tax_table" method="post">
      <div class="box box-block bg-white">
        <h2><strong> BIR Downloadable</strong> Forms</h2>
        <table class="m-b-0 table table-hover table-striped responsive align-middle">
          <thead>
            <tr>
              <th>Form</th>
              <th>Title</th>
              <th>&nbsp;</th>
            </tr>
          </thead>
            <tbody>
                <tr>
                    <td>1601C</td>
                    <td>
                        Monthly Remittance Return of Income Taxes Withheld on Compensation
                    </td>
                    <td>
                    <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><a href="<?php echo site_url();?>uploads/document/dforms/bir/1601-C.pdf" target="_blank"><button type="button" class="btn btn-secondary btn-sm m-b-0-0 waves-effect waves-light" title="Download"><i class="fa fa-download"></i></button></a></span>
                    </td>
                </tr>
                <tr>
                    <td>1604CF</td>
                    <td>
                        Annual Information Return of Income Taxes Withheld on Compensation and Final Withholding Taxes
                    </td>
                    <td>
                    <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><a href="<?php echo site_url();?>uploads/document/dforms/bir/1604-CFfinal.pdf" target="_blank"><button type="button" class="btn btn-secondary btn-sm m-b-0-0 waves-effect waves-light" title="Download"><i class="fa fa-download"></i></button></a></span>
                    </td>
                </tr>
                <tr>
                    <td>2316 </td>
                    <td>
                        Certificate of Compensation Payment / Tax Withheld
                    </td>
                    <td>
                    <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><a href="<?php echo site_url();?>uploads/document/dforms/bir/BIR-Form-2316-1.pdf" target="_blank"><button type="button" class="btn btn-secondary btn-sm m-b-0-0 waves-effect waves-light" title="Download"><i class="fa fa-download"></i></button></a></span>
                    </td>
                </tr>
            </tbody>
        </table>
      </div>
    </form>
  </div>

   <div class="col-md-9 animated fadeInUp tab" id="taxtableannual" style="display:none;">
    <form id="tax_table" action="/" name="tax_table" method="post">
      <div class="box box-block bg-white">
        <h2><strong> Pag-ibig Downloadable</strong> Forms</h2>
        <table class="m-b-0 table table-hover table-striped responsive align-middle">
                        <thead>
                            <tr>
                                <th>Form</th>
                                <th>Title</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>M1-1(MCRF)</td>
                                <td>
                                    Member's Contribution Remittance Form
                                </td>
                                <td>
                    <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><a href="<?php echo site_url();?>uploads/document/dforms/pagibig/m1-1.pdf" target="_blank"><button type="button" class="btn btn-secondary btn-sm m-b-0-0 waves-effect waves-light" title="Download"><i class="fa fa-download"></i></button></a></span>
                    </td>
                            </tr>
                            <tr>
                                <td>Pag-ibig FPF060</td>
                                <td>
                                    Membership Registration/Remittance Form
                                </td>
                                <td>
                    <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><a href="<?php echo site_url();?>uploads/document/dforms/pagibig/FPF060.pdf" target="_blank"><button type="button" class="btn btn-secondary btn-sm m-b-0-0 waves-effect waves-light" title="Download"><i class="fa fa-download"></i></button></a></span>
                    </td>
                            </tr>
                        </tbody>
                    </table>
      </div>
    </form>
  </div>

  <div class="col-md-9 animated fadeInUp tab" id="philhealth" style="display:none;">
    <form id="tax_table" action="/" name="tax_table" method="post">
      <div class="box box-block bg-white">
        <h2><strong> Philhealth Downloadable</strong> Forms</h2>
        <table class="m-b-0 table table-hover table-striped responsive align-middle">
                        <thead>
                            <tr>
                                <th>Form</th>
                                <th>Title</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ER-2</td>
                                <td>
                                    Report of Employee-Members
                                </td>
                                <td>
                    <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><a href="<?php echo site_url();?>uploads/document/dforms/philhealth/er2.pdf" target="_blank"><button type="button" class="btn btn-secondary btn-sm m-b-0-0 waves-effect waves-light" title="Download"><i class="fa fa-download"></i></button></a></span>
                    </td>
                            </tr>
                            <tr>
                                <td>RF-1</td>
                                <td>
                                   Employer's Remittance Report
                                </td>
                                <td>
                    <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><a href="<?php echo site_url();?>uploads/document/dforms/philhealth/rf1.pdf" target="_blank"><button type="button" class="btn btn-secondary btn-sm m-b-0-0 waves-effect waves-light" title="Download"><i class="fa fa-download"></i></button></a></span>
                    </td>
                            </tr>
                        </tbody>
                    </table>
      </div>
    </form>
  </div>

  <div class="col-md-9 animated fadeInUp tab" id="sss" style="display:none;">
    <form id="tax_table" action="/" name="tax_table" method="post">
      <div class="box box-block bg-white">
        <h2><strong> SSS Downloadable</strong> Forms</h2>
        <table class="m-b-0 table table-hover table-striped responsive align-middle">
                        <thead>
                            <tr>
                                <th>Form</th>
                                <th>Title</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>R3</td>
                                <td>
                                    Contribution Collection List
                                </td>
                                <td>
                    <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><a href="<?php echo site_url();?>uploads/document/dforms/sss/r3.pdf" target="_blank"><button type="button" class="btn btn-secondary btn-sm m-b-0-0 waves-effect waves-light" title="Download"><i class="fa fa-download"></i></button></a></span>
                    </td>
                            </tr>
                            <tr>
                                <td>R5</td>
                                <td>
                                    Employer Contributions Payment Return
                                </td>
                                <td>
                    <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><a href="<?php echo site_url();?>uploads/document/dforms/sss/r5.pdf" target="_blank"><button type="button" class="btn btn-secondary btn-sm m-b-0-0 waves-effect waves-light" title="Download"><i class="fa fa-download"></i></button></a></span>
                    </td>
                            </tr>
                           
                            <tr>
                                <td>R1-A</td>
                                <td>
                                    Employment Reports
                                </td>
                                <td>
                    <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Download"><a href="<?php echo site_url();?>uploads/document/dforms/sss/r1-a.pdf" target="_blank"><button type="button" class="btn btn-secondary btn-sm m-b-0-0 waves-effect waves-light" title="Download"><i class="fa fa-download"></i></button></a></span>
                    </td>
                            </tr>
                        </tbody>
                    </table>
      </div>
    </form>
  </div>
 
</div>
<script>
  function openTab(TabName) {
    var i;  
    var x = document.getElementsByClassName("tab");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    }
    document.getElementById(TabName).style.display = "block";  
  }
</script>