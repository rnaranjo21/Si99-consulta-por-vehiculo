<?php
session_start();
include_once("php-google-map-api-master/releases/3.0/src/GoogleMap.php");
include_once("php-google-map-api-master/releases/3.0/src/JSMin.php");
require_once("consumopos.php");
$MAP_OBJECT = new GoogleMapAPI(); $MAP_OBJECT->_minify_js = isset($_REQUEST["min"])?FALSE:TRUE;
//$MAP_OBJECT->setDSN("mysql://user:password@localhost/db_name");
$MAP_OBJECT->addMarkerByCoords($posi1,$posi2,"Marker Title", "Marker Description");
?>
<html>
<head>
<?=$MAP_OBJECT->getHeaderJS();?>
<?=$MAP_OBJECT->getMapJS();?>
</head>
<body>
<?=$MAP_OBJECT->printOnLoad();?> 
<?=$MAP_OBJECT->printMap();?>
<?=$MAP_OBJECT->printSidebar();?>
</body>
</html>