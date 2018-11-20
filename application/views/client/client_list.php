<style>
  /* Set the size of the div element that contains the map */
  #map {
    height: 410px;  /* The height is 400 pixels */
    width: 100%;  /* The width is the width of the web page */
  }
  .highlight {
    background-color: #f5f5f5;
    color: black;
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
?>
<?php $session = $this->session->userdata('username');?>
<div class="row m-b-1">
  <div class="col-md-4">
    <div class="box box-block bg-white animated fadeInUp">
    
      <h2><strong>Location</strong> Checker 
        <div class="add-record-btn">
        <a class="nav-link" style="cursor: pointer;" onclick="initMap()" title="Refresh map"> <i class="fa fa-redo-alt"></i> </a>&nbsp;&nbsp;&nbsp;
        <button class="btn btn-sm btn-primary pull-right" id="submit" title="Search address on map" type="submit" disabled>Verify Location</button>
        </div>
      </h2>
      <div id="floating-panel">
      <span id="spnText"></span>
    </div>
    <div id="map"></div>
    <script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 11,
          center: {lat: 10.2931193, lng: 123.8774813} ,
          mapTypeControl:false,
          disableDefaultUI: true,
          draggable : true,
          mapTypeId:google.maps.MapTypeId.ROADMAP,
          navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}
        });
        var geocoder = new google.maps.Geocoder;
        var infowindow = new google.maps.InfoWindow;

        document.getElementById('submit').addEventListener('click', function() {
          geocodeLatLng(geocoder, map, infowindow);
        });
      }

      function geocodeLatLng(geocoder, map, infowindow) {
        var input = document.getElementById('spnText').value;
        var latlngStr = input.split(',', 2);
        var latlng = {lat: parseFloat(latlngStr[0]), lng: parseFloat(latlngStr[1])};
        geocoder.geocode({'location': latlng}, function(results, status) {
          if (status === 'OK') {
            if (results[0]) {
              map.setZoom(11);
              var marker = new google.maps.Marker({
                position: latlng,
                map: map
              });
              infowindow.setContent(results[0].formatted_address);
              infowindow.open(map, marker);
            } else {
              window.alert('No results found');
            }
          } else {
            //window.alert('Geocoder failed due to: ' + status);
            window.alert('Geocoder failed to load');
          }
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB_OEQvU6BsM2l10T2beT_V06sowMHR70s&callback=initMap">
    </script>
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
              <td id="getaddress"><?php echo $client->latitude;?>,<?php echo $client->longitude;?></td>
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
<script type="text/javascript" src="<?php echo base_url();?>skin/vendor/jquery/jquery-3.2.1.min.js"></script> 
<script>
$(document).ready(function() {
  //alert("asasd");
  $("#clientdata #getaddress").mouseover(function(e) {
    $(this).css("cursor", "pointer");
  });
  $("#clientdata #getaddress").click(function(e) {
    $("#clientdata #getaddress").removeClass("highlight");
    var clickedCell = $(e.target).closest("td");
    $("#submit").prop("disabled",false);
    clickedCell.addClass("highlight");
    $("#spnText").val(clickedCell.text());
  });
});
</script>
