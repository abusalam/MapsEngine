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
    <meta charset="utf-8">
    <style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      #map-canvas { height: 100% }
    </style>
    <link rel="stylesheet" href="css/panel.css"/>
    <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key=&sensor=TRUE&libraries=drawing">
    </script>
    <script type="text/javascript" charset="UTF-8">
      function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(22.4333, 87.3333),
          zoom: 10,
          mapTypeControl: true,
          mapTypeId: google.maps.MapTypeId.HYBRID,
          mapTypeControlOptions: {
            style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, google.maps.MapTypeId.HYBRID,
              google.maps.MapTypeId.SATELLITE]
          },
          panControl: false,
          zoomControl: false,
          streetViewControl: false
        };
        var map = new google.maps.Map(document.getElementById("map-canvas"),
            mapOptions);

        var myLatlng = new google.maps.LatLng(22.4333, 87.3333);

        var marker = new google.maps.Marker({
          position: myLatlng,
          map: map,
          title: 'Paschim Medinipur'
        });

        var contentString = '<div id="content">' +
            '<div id="siteNotice">' +
            '</div>' +
            '<h1 id="firstHeading" class="firstHeading">Paschim Medinipur district</h1>' +
            '<div id="bodyContent">' +
            '<p>Paschim Medinipur district or West Midnapore district (Bengali: পশ্চিম মেদিনীপুর জেলা) ' +
            '(also known as Midnapore West) is the districts of the state of West Bengal, ' +
            'India. It was formed on January 1, 2002 after the Partition of Midnapore into ' +
            'Paschim Medinipur and Purba Medinipur. The district has 4 sub-divisions: Kharagpur, ' +
            'Medinipur Sadar, Ghatal and Jhargram. It is currently a part of the Red Corridor.</p>' +
            '</div>' +
            '</div>';

        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });

        var drawingManager = new google.maps.drawing.DrawingManager({
          drawingMode: google.maps.drawing.OverlayType.MARKER,
          drawingControl: true,
          drawingControlOptions: {
            position: google.maps.ControlPosition.TOP_CENTER,
            drawingModes: [
              google.maps.drawing.OverlayType.MARKER,
              google.maps.drawing.OverlayType.CIRCLE,
              google.maps.drawing.OverlayType.POLYGON,
              google.maps.drawing.OverlayType.POLYLINE,
              google.maps.drawing.OverlayType.RECTANGLE
            ]
          },
          circleOptions: {
            fillColor: '#ffff00',
            fillOpacity: 1,
            strokeWeight: 5,
            clickable: false,
            editable: true,
            zIndex: 1
          },
          polygonOptions: {
            geodesic: true,
            editable: true
          },
          polylineOptions: {
            geodesic: true,
            editable: true
          },
          rectangleOptions: {
            geodesic: true,
            editable: true
          }
        });

        drawingManager.setMap(map);

        google.maps.event.addListener(marker, 'click', function() {
          infowindow.open(map, marker);
        });

      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
  <body>
    <div id="panel" class="gmnoprint">
      <span id="ctrlPanel"></span>
    </div>
    <div id="map-canvas"/>
  </body>
</html>