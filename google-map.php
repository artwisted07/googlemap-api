<style>
  .mapfull{
    display: block;
    position: relative;
  }
  .mapWrap{
    display: block;
    width:100%;
    height: 500px;
  }
  
  .directions{
    position: absolute;
    background-color: rgba(255,255,255,.9);
    max-width: 450px;
    height: 250px;
    padding: 1em 2em;
    top:50%;
      left: 0;
      z-index: 100;
      transform: translateY(-50%);
  }
  
  .directions button#googleDirections{
    background: #6699ff!important;
  }
  
  .directions button#googleDirections:hover{
    background:#000!important;
  }
    .directions h3{
        padding-bottom: .5em;
    }
  
  #map-canvas{
    width:100%;
    height: 100%;

  }
</style>


   <section class="container" style="padding:0!important">

     <div class="mapWrap">
            <div class="directions">
            <h3>VISIT UMANSKY AUTO</h3>
               <label>GET DIRECTIONS
                   <select id="locations">
                  <option >CHOOSE A LOCATION</option>
                   <option value="5990 N Green Bay Ave Milwaukee, WI 53209">BMW of Milwaukee</option>
                   <option value="1400 West Silver Spring Drive, Glendale, WI 53209">Mercedez-Benz of Milwaukee</option>
                   <option value="1400 W. Silver Spring Drive, Milwaukee, Wisconsin 53209">Porshe Milwaukee North</option>
                   <option value="2611 Ridgeway Rd Ridgeway @ 385 Memphis, TN 38119">Acura of Memphis</option>
                   <option value="828 Adcock St, Ridgeland, MS 39157">Acura of Jackson</option>
                   <option value="1625 South Church Street Murfreesboro, TN 37130">Honda of Murfreesboro</option>
                   <option value="1823 Gallatin Pike N, Madison, TN 37115">Music City Honda</option>
                   <option value="7727 Hwy 64, Memphis, TN 38133 ">Wolf Chase Honda</option>
                   <option value="2611 Ridgeway Rd Ridgeway @ 385 Memphis, TN 38119">Lincoln of Memphis(coming soon)</option>
                   <option value="1400 W Silver Spring Dr. Milwaukee, WI 53209">Volkswagen of Milwaukee North</option>
                   <option value="1711 W Florist AveMilwaukee, WI 53209">Collision Center of Milwaukee North</option>
                   <option value="1823 Gallatin Pike N, Madison, TN 37115 ">Collision Center of Music City Honda</option>
               </select>
               </label>
               <form action="http://maps.google.com/maps" method="get" target="_blank">
                   <input id="locationChosen" name="daddr" value="1400 West Silver Spring Drive, Glendale, WI 53209" type="hidden">
                   <button id="googleDirections" class="submit">GET DIRECTIONS</button>
               </form>
       </div>
      <div id="map-canvas" ></div>
       </div>
   </section>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBXJNnVLG56G6g0fLk9t8nUPIn5jKeae2s&language=en&region=USA"></script>		
<script type="text/javascript">
  google.maps.event.addDomListener( window, 'load', gmaps_results_initialize );

  function gmaps_results_initialize() {
    var map, marker;
    var iconImg = "http://umanskyag.com/wp-content/uploads/2016/06/umanksy-map-icon.png";
    
      map = new google.maps.Map( document.getElementById( 'map-canvas' ), {
      zoom: 13,
      center: new google.maps.LatLng( 35.077022, -89.86107 )
     });
      
     marker = new  google.maps.Marker({
        position: new google.maps.LatLng( 35.077022, -89.86107 ),
        map: map,
        icon: iconImg
     });
  
  }
    
jQuery('#locations').on('change', function(){
    var locval = jQuery(this).val();
    console.log(locval);
    jQuery('#locationChosen').val(locval);
})

</script>		




