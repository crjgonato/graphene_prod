<style>
       /* Set the size of the div element that contains the map */
      #mapholder {
        height: 120px;  /* The height is 400 pixels */
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
        <a class="nav-link" style="cursor: pointer;" onclick="getLocation()" title="Refresh map"> <i class="fa fa-redo-alt"></i> </a>&nbsp;&nbsp;&nbsp;
        </div>
      </h2>
      <form class="m-b-1" method="post" name="add_visit" action="<?php echo site_url("client/client_insert") ?>">
      <input type="hidden" name="added_by" value="<?php echo $user_info[0]->first_name; ?> <?php echo $user_info[0]->last_name; ?>">
      <input type="hidden" name="created_at" value="<?php echo date('Y-m-d'); ?>">

      <!-- <input type="hidden" name="address" value="<?php echo $latlon; ?>"> -->
        <div class="row">
          <div class="col-md-12">
          <br>
            <div id="mapholder"></div>
          </div>
        </div>
        <!-- <div><input type="text" name="created_at" id="lat" value=""></div>
        <div><input type="text" name="created_at" id="lon" value=""></div>  -->
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="client_name">Client Name</label>
              <input class="form-control" placeholder="" name="client_name" type="text">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="client_name">Contact Person</label>
              <input class="form-control" placeholder="" name="client_contactperson" type="text">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="start_date"> Time</label>
              <input class="form-control" placeholder="_" readonly name="time" value="<?php echo date('g:i a'); ?>" type="text">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="end_date"> Date </label>
              <input class="form-control date" placeholder="_" readonly name="date" value="<?php echo date('Y-m-d'); ?>" type="text">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="description">Meeting Details</label>
              <textarea class="form-control textarea" placeholder="" name="meeting_details" cols="30" rows="5"></textarea>
              </div>
          </div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary save" >Save</button>
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
              <th>Action</th>
              <th>Name</th>
              <th>Address</th>
              <th>Time</th>
              <th>Date</th>
              <th>Visit by</th>
            </tr>
          </thead>
          <?php foreach($data as $client){?>
            <tr>
              <td>-</td>
             
              <td readonly><?php echo $client->client_name;?></td>
              <td><?php echo $client->address;?></td>
              <!-- <td><?php echo $client->client_contactperson;?></td> -->
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
  var x=document.getElementById("map");
  var lati = document.getElementById("lat");
  var long = document.getElementById("lon");
  function getLocation() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(showPosition,showError);
    }
    else{x.innerHTML="Geolocation is not supported by this browser.";}
  }

  function showPosition(position) {
    var lat=position.coords.latitude;
    var lon=position.coords.longitude;
    var lati = document.getElementById("lat");
    var long = document.getElementById("lon");
    var latlon=new google.maps.LatLng(lat, lon)
    var mapholder=document.getElementById('mapholder')
      // mapholder.style.height='140px';
      // mapholder.style.width='100%';

      // lat.value = lati.value;
      // lon.value = long.value;
    
    console.log(lat,lon);
    //console.log(lon);
    // console.log(latlon);

    var myOptions={
      center:latlon,
      zoom:18,
      mapTypeId:google.maps.MapTypeId.ROADMAP,
      mapTypeControl:false,
      disableDefaultUI: true,
      draggable : false,
      navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}
    };
    var map=new google.maps.Map(document.getElementById("mapholder"),myOptions);
    var marker=new google.maps.Marker({position:latlon,map:map,title:"You are here!"});
  }

  function showError(error) {
    switch(error.code) 
      {
      case error.PERMISSION_DENIED:
        x.innerHTML="<b>User denied the request for Geolocation.</b>"
        break;
      case error.POSITION_UNAVAILABLE:
        x.innerHTML="<b>Location information is unavailable.</b>"
        break;
      case error.TIMEOUT:
        x.innerHTML="<b>The request to get user location timed out.</b>"
        break;
      case error.UNKNOWN_ERROR:
        x.innerHTML="<b>An unknown error occurred.</b>"
        break;
      }
  }
</script>

<script async defer
src="https://maps.google.com/maps/api/js?key=AIzaSyB_OEQvU6BsM2l10T2beT_V06sowMHR70s&callback=getLocation">
</script>