<style>
       /* Set the size of the div element that contains the map */
      #mapholder {
        height: 390px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>
<?php
/* Client Visits view
*/
?>
<?php $session = $this->session->userdata('username');?>
<div class="box box-block bg-white">
  <h2><strong><?php echo $this->lang->line('graphene_list_all');?></strong> Client Visits </h2>
  <div class="table-responsive" data-pattern="priority-columns">
  <table class="table table-condensed table-hover table-bordered dataTable" id="clientdata" style="width:100%;">
      <thead>
        <tr>
          <th>Action</th>
          <th>Name</th>
          <th>Contact</th>
          <th>Time</th>
          <th>Date</th>
          <th>Visit by</th>
        </tr>
      </thead>
      <?php foreach($data as $client){?>
        <tr>
          <td>-</td>
          <td><?php echo $client->client_name;?></td>
          <td><?php echo $client->client_contactperson;?></td>
          <td><?php echo $client->time;?></td>
          <td><?php echo $client->date;?></td>
          <td><?php echo $client->added_by;?></td>
        </tr>     
      <?php }?>  
    </table>
  </div>
</div>
