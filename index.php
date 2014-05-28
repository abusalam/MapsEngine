<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);

require_once __DIR__ . '/lib/lib.inc.php';

WebLib::CreateDB();

$Data = new MySQLiDBHelper();
//print_r($Data->get(MySQL_Pre . 'Markers'));
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      #map-canvas { height: 100% }
    </style>
    <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key=&sensor=TRUE">
    </script>
    <script type="text/javascript">
      function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(22.207, 87.903),
          zoom: 10
        };
        var map = new google.maps.Map(document.getElementById("map-canvas"),
                mapOptions);
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
  <body>
    <div id="map-canvas"/>
  </body>
</html>