<style>
       /* Set the size of the div element that contains the map */
      #mapholder {
        height: 150px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
        /* background-color: whitesmoke; */
        margin-bottom: 15px;
        margin-top: -15px;
       }
       a[href^="http://maps.google.com/maps"]{display:none !important}
       a[href^="https://maps.google.com/maps"]{display:none !important}

      .gmnoprint a, .gmnoprint span, .gm-style-cc {
          display:none;
      }
      .gmnoprint div {
          background:none !important;
      }
</style>
<?php
/* Client Visits view
*/
$session = $this->session->userdata('username');
// $system = $this->Graphene_model->read_setting_info(1);
$user_info = $this->Graphene_model->read_user_info($session['user_id']);
// $role_user = $this->Graphene_model->read_user_role_info($user_info[0]->user_role_id);
// $role_resources_ids = explode(',',$role_user[0]->role_resources);
?>
<?php $session = $this->session->userdata('username');?>

<div class="row m-b-1">
  <div class="col-md-4">
    <div class="box box-block bg-white animated fadeInUp">
    
      <h2><strong>Add</strong> Client Visit 
        <div class="add-record-btn">
        <a class="nav-link" style="cursor: pointer;" onclick="initMap()" title="Refresh map"> <i class="fa fa-redo-alt"></i> </a>&nbsp;&nbsp;&nbsp;
        </div>
      </h2>
      <form class="m-b-1" method="post" name="add_visit" action="<?php echo site_url("client/client_insert") ?>">
      <input type="hidden" name="added_by" value="<?php echo $user_info[0]->first_name; ?> <?php echo $user_info[0]->last_name; ?>">
      <input type="hidden" name="created_at" value="<?php echo date('Y-m-d'); ?>">

      <input type="hidden" class="form-control" name="latitude" id="lati" >
      <input type="hidden" class="form-control" name="longitude" id="longg">
      <!-- <span id="address"></span> -->
      <br>
        <div class="row">
          <div class="col-md-12">
          <br>
            <div id="mapholder"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="client_name">Client Name</label>
              <input class="form-control form-control-lg" placeholder="" name="client_name" type="text">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="client_name">Contact Person</label>
              <input class="form-control form-control-lg" placeholder="" name="client_contactperson" type="text">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="start_date"> Time</label>
              <input class="form-control form-control-lg" placeholder="_" readonly name="time" value="<?php echo date('g:i a'); ?>" type="text">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="end_date"> Date </label>
              <input class="form-control date form-control-lg" placeholder="_" readonly name="date" value="<?php echo date('Y-m-d'); ?>" type="text">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="description">Meeting Details</label>
              <textarea class="form-control textarea form-control-lg" placeholder="" name="meeting_details" cols="30" rows="5"></textarea>
              </div>
          </div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary btn-lg save" >Save</button>
      </form>
    </div>
  </div>
  <div class="col-md-8">
    <div class="box box-block bg-white animated fadeInUp">
      <h2><strong>List All</strong> Client Visit</h2>
      <div class="table-responsive" data-pattern="priority-columns">
        <table class="table table-condensed table-hover table-bordered dataTable" id="clientdata" style="width:100%;">
        <thead>
            <tr>
              <!--<th>Action</th>-->
              <th>Client</th>
              <th>Contact Person</th>
              <th>Geolocation</th>
              <!-- <th>Longitude</th> -->
              <th>Time</th>
              <th>Date</th>
              <th>Visit by</th>
            </tr>
          </thead>
          <?php foreach($data as $client){?>
            <tr>
              <!--<td>-</td>-->
              <td readonly><?php echo $client->client_name;?></td>
              <td><?php echo $client->client_contactperson;?></td> 
              <td><?php echo $client->latitude;?>,<?php echo $client->longitude;?></td>
              <td readonly><?php echo $client->time;?></td>
              <td readonly><?php echo $client->date;?></td>
              <td readonly><?php echo $client->added_by;?></td>
            </tr>     
          <?php }?> 
    </table>
      </div>
      <!-- responsive --> 
    </div>
  </div>
</div>
<script>
      var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('mapholder'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 18,
          mapTypeControl:false,
          disableDefaultUI: true,
          draggable : true
        });

        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var lat = document.getElementById("lati");
            var long = document.getElementById("longg");
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            lat.value = pos.lat;
            long.value = pos.lng;
            console.log(pos);
            infoWindow.setPosition(pos);            
            infoWindow.setContent('You are here.');
            infoWindow.open(map);
            map.setCenter(pos);

          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }
    </script>

<script async defer
src="https://maps.google.com/maps/api/js?key=AIzaSyB_OEQvU6BsM2l10T2beT_V06sowMHR70s&callback=initMap">
</script>