<?php
/* Payroll Template view
*/
?>
<?php $session = $this->session->userdata('username');?>

<div class="row m-b-1">
  <div class="col-md-3 animated fadeInUp">
    <div class="box bg-white">
      <ul class="nav nav-4">

        <li class="nav-item nav-item-link"> <span class="nav-link" href="#setting" data-config="0" data-toggle="tab" aria-expanded="true"> <strong> REFERENCE </strong> </span> </li>

        <li class="nav-item nav-item-link" data-toggle="tab" onclick="openTab('taxtable')" style="cursor:pointer;"> <a class="nav-link nav-tabs-link"><i class="fas fa-file-invoice"></i> Tax Table </a> </li>
        
        <li class="nav-item nav-item-link" data-toggle="tab" onclick="openTab('taxtableannual')" style="cursor:pointer;"> <a class="nav-link nav-tabs-link"><i class="fas fa-file-invoice"></i> Annual Tax Table </a> </li>

        <li class="nav-item nav-item-link" data-toggle="tab" onclick="openTab('philhealth')" style="cursor:pointer;"> <a class="nav-link nav-tabs-link"><i class="fas fa-file-invoice"></i> Philhealth </a> </li>

        <li class="nav-item nav-item-link" data-toggle="tab" onclick="openTab('sss')" style="cursor:pointer;"> <a class="nav-link nav-tabs-link"><i class="fas fa-file-invoice"></i> SSS </a> </li>

      </ul>
    </div>
  </div>

  <div class="col-md-9 animated fadeInUp tab" id="taxtable" style="display:none;">
    <form id="tax_table" action="/" name="tax_table" method="post">
      <div class="box box-block bg-white">
        <h2><strong>Tax</strong> Table <h6>(Effective January 1, 2018 to December 31,2022)</h6></h2>
        <table class="table table-striped table-hover responsive align-middle">
            <thead>
              <tr>
                <th>Daily</th>
                <th class="text-center">1</th>
                <th class="text-center">2</th>
                <th class="text-center">3</th>
                <th class="text-center">4</th>
                <th class="text-center">5</th>
                <th class="text-center">6</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Compensation Level (CL)</td>
                <td class="text-center">685 and below</td>
                <td class="text-center">685 - 1,095</td>
                <td class="text-center">1,096 - 2,191</td>
                <td class="text-center">2,192 - 5,478</td>
                <td class="text-center">5,479 - 21,917</td>
                <td class="text-center">21,918 and above</td>
              </tr>
              <tr>
                <td>Prescribed Minimum <br> Witholding Tax</td>
                <td class="text-center">0.00</td>
                <td class="text-center">0.00 <br> +20% over 685</td>
                <td class="text-center">82.19 <br> +25% over 1,096</td>
                <td class="text-center">356.16 <br> +30% over 2,192</td>
                <td class="text-center">1,342.47 <br> +32% over 5,479</td>
                <td class="text-center">6,602.74 <br> +35% over 21,918</td>
              </tr>
            </tbody>
          </table>
          <table class="table table-striped table-hover responsive align-middle">
            <thead>
              <tr>
                <th>Weekly</th>
                <th class="text-center">1</th>
                <th class="text-center">2</th>
                <th class="text-center">3</th>
                <th class="text-center">4</th>
                <th class="text-center">5</th>
                <th class="text-center">6</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Compensation Level (CL)</td>
                <td class="text-center">4,808 and below</td>
                <td class="text-center">4,808 - 7,691</td>
                <td class="text-center">7,692 - 15,384</td>
                <td class="text-center">15,385 - 38,461</td>
                <td class="text-center">38,462 - 153,846</td>
                <td class="text-center">153,846 and above</td>
              </tr>
              <tr>
                <td>Prescribed Minimum <br> Witholding Tax</td>
                <td class="text-center">0.00</td>
                <td class="text-center">0.00 <br> +20% over (CL) 1</td>
                <td class="text-center">576.92 <br> +25% over (CL) 3</td>
                <td class="text-center">2,500.00 <br> +30% over (CL) 4</td>
                <td class="text-center">9,423.08 <br> +32% over (CL) 5</td>
                <td class="text-center">46,346.15 <br> +35% over (CL) 6</td>
              </tr>
            </tbody>
          </table>
          <table class="table table-striped table-hover responsive align-middle">
            <thead>
              <tr>
                <th>Semi-monthly</th>
                <th class="text-center">1</th>
                <th class="text-center">2</th>
                <th class="text-center">3</th>
                <th class="text-center">4</th>
                <th class="text-center">5</th>
                <th class="text-center">6</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Compensation Level (CL)</td>
                <td class="text-center">10,417 and below</td>
                <td class="text-center">10,417 - 16,666</td>
                <td class="text-center">16,667 - 33,332</td>
                <td class="text-center">33,333 - 83,332</td>
                <td class="text-center">83,333 - 333,332</td>
                <td class="text-center">333,333 and above</td>
              </tr>
              <tr>
                <td>Prescribed Minimum <br> Witholding Tax</td>
                <td class="text-center">0.00</td>
                <td class="text-center">0.00 <br> +20% over (CL) 1</td>
                <td class="text-center">1,250.00 <br> +25% over (CL) 3</td>
                <td class="text-center">5,416.67 <br> +30% over (CL) 4</td>
                <td class="text-center">20,416.67 <br> +32% over (CL) 5</td>
                <td class="text-center">100,416.67 <br> +35% over (CL) 6</td>
              </tr>
            </tbody>
          </table>
          <table class="table table-striped table-hover responsive align-middle">
            <thead>
              <tr>
                <th>Monthly</th>
                <th class="text-center">1</th>
                <th class="text-center">2</th>
                <th class="text-center">3</th>
                <th class="text-center">4</th>
                <th class="text-center">5</th>
                <th class="text-center">6</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Compensation Level (CL)</td>
                <td class="text-center">20,833 and below</td>
                <td class="text-center">20,833 - 33,332</td>
                <td class="text-center">33,333 - 66,666</td>
                <td class="text-center">66,667 - 166,666</td>
                <td class="text-center">166,667 - 666,666</td>
                <td class="text-center">666,667 and above</td>
              </tr>
              <tr>
                <td>Prescribed Minimum <br> Witholding Tax</td>
                <td class="text-center">0.00</td>
                <td class="text-center">0.00 <br> +20% over (CL) 1</td>
                <td class="text-center">2,500.00 <br> +25% over (CL) 3</td>
                <td class="text-center">10,833.00 <br> +30% over (CL) 4</td>
                <td class="text-center">40,833.33 <br> +32% over (CL) 5</td>
                <td class="text-center">200,833.33 <br> +35% over (CL) 6</td>
              </tr>
            </tbody>
          </table>
      </div>
    </form>
  </div>

  <div class="col-md-9 animated fadeInUp tab" id="taxtableannual" style="display:none;">
    <form id="taxtable_annual" action="/" name="taxtable_annual" method="post">
      <div class="box box-block bg-white">
        <h2><strong>Annual</strong> Tax Table <h6>(Effective January 1, 2018 to December 31,2022)</h6></h2>
        <table class="m-b-0 table table-striped table-hover datatable responsive align-middle">
				<thead>
					<tr>
						<th>Annual Income</th>
						<!-- <th>Maximum</th> -->
						<!-- <th>Additional Amount</th> -->
						<th>Tax Percentage</th>
					</tr>
				</thead>
				<tbody>
          <tr>
            <td>0.00 - 250,000.00</td>
            <!-- <td>250,000.00</td> -->
            <!-- <td>0.00</td> -->
            <td>0.00 %</td>
          </tr>
          <tr>
            <td>250,000.00 - 400,000.00</td>
              <!-- <td>400,000.00</td> -->
            <!-- <td>0.00</td> -->
            <td>20.00 %</td>
          </tr>
          <tr>
            <td>400,000.00 - 800,000.00</td>
              <!-- <td>800,000.00</td> -->
            <!-- <td>30,000.00</td> -->
            <td>25.00 %</td>
          </tr>
          <tr>
            <td>800,000.00 - 2,000,000.00</td>
              <!-- <td>2,000,000.00</td> -->
            <!-- <td>130,000.00</td> -->
            <td>30.00 %</td>
          </tr>
          <tr>
            <td>2,000,000.00 - 8,000,000.00</td>
              <!-- <td>8,000,000.00</td> -->
            <!-- <td>490,000.00</td> -->
            <td>32.00 %</td>
          </tr>
          <tr>
            <td>8,000,000.00 and above</td>
              <!-- <td>Above</td> -->
            <!-- <td>2,410,000.00</td> -->
            <td>35.00 %</td>
          </tr>
				</tbody>
			</table>
      </div>
    </form>
  </div>

  <div class="col-md-9 animated fadeInUp tab" id="philhealth" style="display:none;">
    <form id="philhealth_table" action="/" name="philhealth_table" method="post">
      <div class="box box-block bg-white">
        <h2><strong>Philhealth</strong> Table <h6>(Effective January 1, 2018 and onwards)</h6></h2>
        <table class="m-b-0 table table-striped table-hover datatable responsive align-middle">
          <thead>
            <tr>
              <th>Monthly Basic Salary x 2.75%</th>
              <th>Monthly Premium</th>
              <th>Personal Share</th>
              <th>Employer Share</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>10,000.00 and below</td>
              <td>275.00</td>
              <td>137.50</td>
              <td>137.50</td>
            </tr>
            <tr>
              <td>10,000.01 to P 39,999.99</td>
              <td>275.01 to P 1,099.99</td>
              <td>137.51 to P 549.99</td>
              <td>137.51 to P 549.99</td>
            </tr>
            <tr>
              <td>40,000.00 and above</td>
              <td>1,100.00</td>
              <td>550.00</td>
              <td>550.00</td>
            </tr>
          </tbody>
        </table>
      </div>
    </form>
  </div>

  <div class="col-md-9 animated fadeInUp tab" id="sss" style="display:none;">
    <form id="sss_table" action="/" name="sss_table" method="post">
      <div class="box box-block bg-white">
        <h2><strong>SSS</strong> Table</h2>
        <table id="tblSSS" class="m-b-0 m-t table table-striped table-hover responsive align-middle table-bordered">
						<thead class="text-center">
              <tr>
                <th rowspan="3">Range of Compensation</th>
                <th rowspan="3">Monthly Salary</th>
                <th colspan="7">Employee - Employer</th>
                <th>SE/VM/OFW</th>
              </tr>
              <tr>
                <th colspan="3">Social Security</th>
                <th>EC</th>
                <th colspan="3">Total Contribution</th>
                <th rowspan="2">Total Contribution</th>
              </tr>
              <tr>
                <th>ER</th>
                <th>EE</th>
                <th>Total</th>
                <th>ER</th>
                <th>ER</th>
                <th>EE</th>
                <th>TOTAL</th>
              </tr>
						</thead>
						<tbody>
              <tr>
                <td>1,000.00 - 1,249.99</td>
                <td>1,000.00</td>
                <td>73.70</td>
                <td>36.30</td>
                <td>110.00</td>
                <td>10.00</td>
                <td>83.70</td>
                <td>36.30</td>
                <td>120.00</td>
                <td>110.00</td>
              </tr>
              <tr>
                <td>1,250.00 - 1,749.99</td>
                <td>1,500.00</td>
                <td>110.50</td>
                <td>54.50</td>
                <td>165.00</td>
                <td>10.00</td>
                <td>120.50</td>
                <td>54.50</td>
                <td>175.00</td>
                <td>165.00</td>
              </tr>
              <tr>
                <td>1,750.00 - 2,249.99</td>
                <td>2,000.00</td>
                <td>147.30</td>
                <td>72.70</td>
                <td>220.00</td>
                <td>10.00</td>
                <td>157.30</td>
                <td>72.70</td>
                <td>230.00</td>
                <td>220.00</td>
              </tr>
              <tr>
                <td>2,250.00 - 2,749.99</td>
                <td>2,500.00</td>
                <td>184.20</td>
                <td>90.80</td>
                <td>275.00</td>
                <td>10.00</td>
                <td>194.20</td>
                <td>90.80</td>
                <td>285.00</td>
                <td>275.00</td>
              </tr>
              <tr>
                <td>2,750.00 - 3,249.99</td>
                <td>3,000.00</td>
                <td>221.00</td>
                <td>109.00</td>
                <td>330.00</td>
                <td>10.00</td>
                <td>231.00</td>
                <td>109.00</td>
                <td>340.00</td>
                <td>330.00</td>
              </tr>
              <tr>
                <td>3,250.00 - 3,749.99</td>
                <td>3,500.00</td>
                <td>257.80</td>
                <td>127.00</td>
                <td>385.00</td>
                <td>10.00</td>
                <td>267.80</td>
                <td>127.00</td>
                <td>395.00</td>
                <td>385.00</td>
              </tr>
              <tr>
                <td>3,750.00 - 4,249.99</td>
                <td>4,000.00</td>
                <td>294.70</td>
                <td>145.30</td>
                <td>440.00</td>
                <td>10.00</td>
                <td>304.70</td>
                <td>145.30</td>
                <td>450.00</td>
                <td>440.00</td>
              </tr>
              <tr>
                <td>4,250.00 - 4,749.99</td>
                <td>4,500.00</td>
                <td>331.50</td>
                <td>163.50</td>
                <td>495.00</td>
                <td>10.00</td>
                <td>341.50</td>
                <td>163.50</td>
                <td>505.00</td>
                <td>495.00</td>
              </tr>
              <tr>
                <td>4,750.00 - 5,249.99</td>
                <td>5,000.00</td>
                <td>368.30</td>
                <td>181.70</td>
                <td>550.00</td>
                <td>10.00</td>
                <td>378.30</td>
                <td>181.70</td>
                <td>560.00</td>
                <td>550.00</td>
              </tr>
              <tr>
                <td>5,250.00 - 5,749.99</td>
                <td>5,500.00</td>
                <td>405.20</td>
                <td>199.80</td>
                <td>605.00</td>
                <td>10.00</td>
                <td>415.20</td>
                <td>199.80</td>
                <td>615.00</td>
                  <td>605.00</td>
              </tr>
              <tr>
                <td>5,750.00 - 6,249.99</td>
                <td>6,000.00</td>
                <td>442.00</td>
                <td>218.00</td>
                <td>660.00</td>
                <td>10.00</td>
                <td>452.00</td>
                <td>218.00</td>
                <td>670.00</td>
                <td>660.00</td>
              </tr>
              <tr>
                <td>6,250.00 - 6,749.99</td>
                <td>6,500.00</td>
                <td>478.80</td>
                <td>236.20</td>
                <td>715.00</td>
                <td>10.00</td>
                <td>488.80</td>
                <td>236.20</td>
                <td>725.00</td>
                <td>715.00</td>
              </tr>
              <tr>
                <td>6,750.00 - 7,249.99</td>
                <td>7,000.00</td>
                <td>515.70</td>
                <td>254.30</td>
                <td>770.00</td>
                <td>10.00</td>
                <td>525.70</td>
                <td>254.30</td>
                <td>780.00</td>
                <td>770.00</td>
              </tr>
              <tr>
                <td>7,250.00 - 7,749.99</td>
                <td>7,500.00</td>
                <td>552.50</td>
                <td>272.50</td>
                <td>825.00</td>
                <td>10.00</td>
                <td>562.50</td>
                <td>272.50</td>
                <td>835.00</td>
                <td>825.00</td>
              </tr>
              <tr>
                <td>7,750.00 - 8,249.99</td>
                <td>8,000.00</td>
                <td>589.30</td>
                <td>290.70</td>
                <td>880.00</td>
                <td>10.00</td>
                <td>599.30</td>
                <td>290.70</td>
                <td>890.00</td>
                <td>880.00</td>
              </tr>
              <tr>
                <td>8,250.00 - 8,749.99</td>
                <td>8,500.00</td>
                <td>626.20</td>
                <td>308.80</td>
                <td>935.00</td>
                <td>10.00</td>
                <td>636.20</td>
                <td>308.80</td>
                <td>945.00</td>
                <td>935.00</td>
              </tr>
              <tr>
                <td>8,750.00 - 9,249.99</td>
                <td>9,000.00</td>
                <td>663.00</td>
                <td>327.00</td>
                <td>990.00</td>
                <td>10.00</td>
                <td>673.00</td>
                <td>327.00</td>
                <td>1,000.00</td>
                <td>990.00</td>
              </tr>
              <tr>
                <td>9,250.00 - 9,749.99</td>
                <td>9,500.00</td>
                <td>699.80</td>
                <td>345.20</td>
                <td>1,045.00</td>
                <td>10.00</td>
                <td>709.80</td>
                <td>345.20</td>
                <td>1,055.00</td>
                <td>1,045.00</td>
              </tr>
              <tr>
                <td>9,750.00 - 10,249.99</td>
                <td>10,000.00</td>
                <td>736.70</td>
                <td>363.30</td>
                <td>1,100.00</td>
                <td>10.00</td>
                <td>746.70</td>
                <td>363.30</td>
                <td>1,110.00</td>
                <td>1,100.00</td>
              </tr>
              <tr>
                <td>10,250.00 - 10,749.99</td>
                <td>10,500.00</td>
                <td>773.50</td>
                <td>381.50</td>
                <td>1,155.00</td>
                <td>10.00</td>
                <td>783.50</td>
                <td>381.50</td>
                <td>1,165.00</td>
                <td>1,155.00</td>
              </tr>
              <tr>
                <td>10,750.00 - 11,249.99</td>
                <td>11,000.00</td>
                <td>810.30</td>
                <td>399.70</td>
                <td>1,210.00</td>
                <td>10.00</td>
                <td>820.30</td>
                <td>399.70</td>
                <td>1,220.00</td>
                <td>1,210.00</td>
              </tr>
              <tr>
                <td>11,250.00 - 11,749.99</td>
                <td>11,500.00</td>
                <td>847.20</td>
                <td>417.80</td>
                <td>1,265.00</td>
                <td>10.00</td>
                <td>857.20</td>
                <td>417.80</td>
                <td>1,275.00</td>
                <td>1,265.00</td>
              </tr>
              <tr>
                <td>11,750.00 - 12,249.99</td>
                <td>12,000.00</td>
                <td>884.00</td>
                <td>436.00</td>
                <td>1,320.00</td>
                <td>10.00</td>
                <td>894.00</td>
                <td>436.00</td>
                <td>1,330.00</td>
                <td>1,320.00</td>
              </tr>
              <tr>
                <td>12,250.00 - 12,749.99</td>
                <td>12,500.00</td>
                <td>920.80</td>
                <td>454.20</td>
                <td>1,375.00</td>
                <td>10.00</td>
                <td>930.80</td>
                <td>454.20</td>
                <td>1,385.00</td>
                <td>1,375.00</td>
              </tr>
              <tr>
                <td>12,750.00 - 13,249.99</td>
                <td>13,000.00</td>
                <td>957.70</td>
                <td>472.30</td>
                <td>1,430.00</td>
                <td>10.00</td>
                <td>967.70</td>
                <td>472.30</td>
                <td>1,440.00</td>
                <td>1,430.00</td>
              </tr>
              <tr>
                <td>13,250.00 - 13,749.99</td>
                <td>13,500.00</td>
                <td>994.50</td>
                <td>490.50</td>
                <td>1,485.00</td>
                <td>10.00</td>
                <td>1,004.50</td>
                <td>490.50</td>
                <td>1,495.00</td>
                <td>1,485.00</td>
              </tr>
              <tr>
                <td>13,750.00 - 14,249.99</td>
                <td>14,000.00</td>
                <td>1,031.30</td>
                <td>508.70</td>
                <td>1,540.00</td>
                <td>10.00</td>
                <td>1,041.30</td>
                <td>508.70</td>
                <td>1,550.00</td>
                <td>1,540.00</td>
              </tr>
              <tr>
                <td>14,250.00 - 14,749.99</td>
                <td>14,500.00</td>
                <td>1,068.20</td>
                <td>526.80</td>
                <td>1,595.00</td>
                <td>10.00</td>
                <td>1,078.20</td>
                <td>526.80</td>
                <td>1,605.00</td>
                <td>1,595.00</td>
              </tr>
              <tr>
                <td>14,750.00 - 15,249.99</td>
                <td>15,000.00</td>
                <td>1,105.00</td>
                <td>545.00</td>
                <td>1,650.00</td>
                <td>30.00</td>
                <td>1,135.00</td>
                <td>545.00</td>
                <td>1,680.00</td>
                <td>1,650.00</td>
              </tr>
              <tr>
                <td>15,250.00 - 15,749.99</td>
                <td>15,500.00</td>
                <td>1,141.80</td>
                <td>563.20</td>
                <td>1,705.00</td>
                <td>30.00</td>
                <td>1,171.80</td>
                <td>563.20</td>
                <td>1,735.00</td>
                <td>1,705.00</td>
              </tr>
              <tr>
                <td>15,750.00 - Above</td>
                <td>16,000.00</td>
                <td>1,178.70</td>
                <td>581.30</td>
                <td>1,760.00</td>
                <td>30.00</td>
                <td>1,208.70</td>
                <td>581.30</td>
                <td>1,790.00</td>
                <td>1,760.00</td>
              </tr>
				</tbody>
			</table>
      </div>
    </form>
  </div>
 
</div>
<script type="text/javascript">
  function openTab(TabName) {
    var i;  
    var x = document.getElementsByClassName("tab");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    }
    document.getElementById(TabName).style.display = "block";  
  }
</script>
