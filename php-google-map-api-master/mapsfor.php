<?php
include_once("releases/3.0/src/GoogleMap.php");
include_once("releases/3.0/src/JSMin.php");
$MAP_OBJECT = new GoogleMapAPI(); $MAP_OBJECT->_minify_js = isset($_REQUEST["min"])?FALSE:TRUE;
for ($i=0; $i <20 ; $i++) { 
	$MAP_OBJECT->addMarkerByCoords(-74.12975,4.570694,"Marker Title", "Marker Description");
}
?>
<html>
<head>
<?=$MAP_OBJECT->getHeaderJS();?>
<?=$MAP_OBJECT->getMapJS();?>
</head>
<body>
<?=$MAP_OBJECT->printOnLoad();?> 
<?=$MAP_OBJECT->printMap();?>

</body>
</html>


