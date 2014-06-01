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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/Panel.js" charset="UTF-8"></script>
    <link rel="stylesheet" href="css/Panel.css"/>
    <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key=&sensor=TRUE&libraries=drawing">
    </script>
    <script type="text/javascript" src="js/MapsEngine.js" charset="UTF-8"></script>
  </head>
  <body>
    <div id="Panel" class="gmnoprint expandPanel">
      <span id="ctrlPanel"
            class="ui-corner-all ui-icon ui-icon-arrow-1-w">
      </span>
      <div id="PanelContent">
        <div id="PanelHeader">
          <div class="PanelName">Google Maps GIS</div>
        </div>
        <div class="FeatureListWrapper">
          <div class="LayerWrapper">
            <div class="Layer">
              <div class="LayerName" title="Health">Health
                <input class="LayerStatus" type="checkbox"/>
              </div>
              <p>
                Health Data
              </p>
              <p>
                Some More Data
              </p>
            </div>
          </div>
          <div class="LayerWrapper">
            <div class="Layer">
              <div class="LayerName">Schools
                <input class="LayerStatus" type="checkbox"/>
              </div>
              <p>
                School Data
              </p>
            </div>
          </div>
          <div class="LayerWrapper">
            <div class="Layer">
              <div class="LayerName">MR Shops</div>
              <p>
                Some Data
              </p>
            </div>
          </div>
          <div class="LayerWrapper">
            <div class="Layer">
              <div class="LayerName">ICDS</div>
              <p>
                Some More Data
              </p>
            </div>
          </div>
          <div class="LayerWrapper">
            <div class="Layer">
              <div class="LayerName">Mobile Health Camp</div>
              <p>
                Camp Data
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="map-canvas"/>
  </body>
</html>