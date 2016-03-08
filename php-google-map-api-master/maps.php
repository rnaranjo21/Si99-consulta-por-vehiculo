<?php
include_once("releases/3.0/src/GoogleMap.php");
include_once("releases/3.0/src/JSMin.php");
$MAP_OBJECT = new GoogleMapAPI(); $MAP_OBJECT->_minify_js = isset($_REQUEST["min"])?FALSE:TRUE;
//$MAP_OBJECT->setDSN("mysql://user:password@localhost/db_name");
$MAP_OBJECT->addMarkerByCoords(-74.12975,4.570694,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0831146,4.737278,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.12975,4.570694,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.12033,4.533722,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.12019,4.533611,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0765,4.608278,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.12536,4.564445,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.11136,4.707167,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.06231,4.656667,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.09294,4.5875,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.06628,4.639833,"Marker Title", "Marker Description");




$MAP_OBJECT->addMarkerByCoords(-74.12011,4.528861,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.1204147,4.529778,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0497742,4.761222,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0660248,4.641917,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0926361,4.746305,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.09272,4.746305,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.04608,4.755778,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0459442,4.75425,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.06936,4.622583,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.092804,4.7465,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.08583,4.597472,"Marker Title", "Marker Description");

$MAP_OBJECT->addMarkerByCoords(-74.15011,4.522861,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.1204147,4.5225778,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.045247742,4.7614222,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.06602448,4.641917,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0926361,4.7464305,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.049272,4.7464305,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.046808,4.7557878,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.04579442,4.757425,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0625936,4.62872583,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.09287804,4.746875,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0853683,4.59763472,"Marker Title", "Marker Description");


$MAP_OBJECT->addMarkerByCoords(-74.15011,4.522861,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.1204147,4.5225778,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.7247742,4.7614222,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0671602448,4.68741917,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.092786361,4.748764305,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.049272,4.746487305,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.04687808,4.755877878,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0457259442,4.757425,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0625936,4.6287252583,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0928725804,4.746875,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.085362583,4.5976253472,"Marker Title", "Marker Description");

$MAP_OBJECT->addMarkerByCoords(-74.15011,4.522861,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.1204147,4.5225778,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.7247742,4.7614222,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.06754448,4.5484917,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.092786361,4.74845,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.06472,4.7436695,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.03258,4.758548,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0459854,4.7584942,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0694549,4.6288454,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.092884549,4.78494249,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.05484249,4.59634349,"Marker Title", "Marker Description");


$MAP_OBJECT->addMarkerByCoords(-74.150111,4.5228251,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.1204147,4.520278,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.7247742,4.7002222,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.448,4.540217,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.09021,4.7400845,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.06202,4.7436025,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.03258,4.758208,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.040254,4.75022,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.06902549,4.620254,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.092884549,4.780249,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.054029,4.502349,"Marker Title", "Marker Description");

//2

$MAP_OBJECT->addMarkerByCoords(-74.12565,4.576594,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0831146,4.737278,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.126575,4.570694,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.12033,4.5356722,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.12659,4.533611,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0765,4.6658,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.6536,4.564445,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.11136,4.765167,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.566231,4.665667,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.06594,4.5655,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.06528,4.6533,"Marker Title", "Marker Description");




$MAP_OBJECT->addMarkerByCoords(-74.156511,4.526561,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.125647,4.56578,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.046742,4.7665222,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.066548,4.646517,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0926361,4.7656305,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.5272,4.746655,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.04608,4.765778,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0659442,4.76525,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0695656,4.656583,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.096504,4.75665,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.08653,4.5975672,"Marker Title", "Marker Description");

$MAP_OBJECT->addMarkerByCoords(-74.150651,4.5226561,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.120465147,4.526578,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.045657742,4.7614222,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.06565448,4.665917,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.096361,4.7465605,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0496572,4.746505,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.045658,4.7557568,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.065579442,4.7565425,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.655936,4.62872583,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0657804,4.76575,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0653683,4.653472,"Marker Title", "Marker Description");


$MAP_OBJECT->addMarkerByCoords(-74.155251,4.565861,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.120575147,4.522578,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.724742,4.7672222,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.067702448,4.6872741917,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0922361,4.748764305,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.049272,4.746205,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.042808,4.752878,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.045259442,4.7225,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.06236,4.622583,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.09204,4.25,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0852583,4.5972472,"Marker Title", "Marker Description");

$MAP_OBJECT->addMarkerByCoords(-74.121,4.5221,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.12147,4.522278,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.72242,4.76122,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.06248,4.52917,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.09261,4.74825,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.062,4.7436695,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.03258,4.75828,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.04254,4.7584942,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0629,4.628454,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.092249,4.78249,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.05429,4.59249,"Marker Title", "Marker Description");


$MAP_OBJECT->addMarkerByCoords(-74.1211,4.522821,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.1204147,4.522278,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.724242,4.70222,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.448,4.5427,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0221,4.7425,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.062,4.7225,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0328,4.75828,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.024,4.7222,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.062549,4.624,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.092884249,4.78249,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.05229,4.249,"Marker Title", "Marker Description");


//3

$MAP_OBJECT->addMarkerByCoords(-74.12975,4.570694,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0831146,4.737278,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.12975,4.570694,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.12033,4.533722,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.12019,4.533611,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0765,4.608278,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.12536,4.564445,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.11136,4.707167,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.06231,4.656667,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.09294,4.5875,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.06628,4.639833,"Marker Title", "Marker Description");




$MAP_OBJECT->addMarkerByCoords(-74.12011,4.528861,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.1204147,4.529778,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0497742,4.761222,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0660248,4.641917,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0926361,4.746305,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.09272,4.746305,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.04608,4.755778,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0459442,4.75425,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.06936,4.622583,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.092804,4.7465,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.08583,4.597472,"Marker Title", "Marker Description");

$MAP_OBJECT->addMarkerByCoords(-74.15011,4.522861,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.1204147,4.5225778,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.045247742,4.7614222,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.06602448,4.641917,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0926361,4.7464305,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.049272,4.7464305,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.046808,4.7557878,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.04579442,4.757425,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0625936,4.62872583,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.09287804,4.746875,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0853683,4.59763472,"Marker Title", "Marker Description");


$MAP_OBJECT->addMarkerByCoords(-74.15011,4.522861,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.1204147,4.5225778,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.7247742,4.7614222,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0671602448,4.68741917,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.092786361,4.748764305,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.049272,4.746487305,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.04687808,4.755877878,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0457259442,4.757425,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0625936,4.6287252583,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0928725804,4.746875,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.085362583,4.5976253472,"Marker Title", "Marker Description");

$MAP_OBJECT->addMarkerByCoords(-74.15011,4.522861,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.1204147,4.5225778,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.7247742,4.7614222,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.06754448,4.5484917,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.092786361,4.74845,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.06472,4.7436695,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.03258,4.758548,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0459854,4.7584942,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0694549,4.6288454,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.092884549,4.78494249,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.05484249,4.59634349,"Marker Title", "Marker Description");


$MAP_OBJECT->addMarkerByCoords(-74.150111,4.5228251,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.1204147,4.520278,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.7247742,4.7002222,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.448,4.540217,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.09021,4.7400845,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.06202,4.7436025,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.03258,4.758208,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.040254,4.75022,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.06902549,4.620254,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.092884549,4.780249,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.054029,4.502349,"Marker Title", "Marker Description");

//2

$MAP_OBJECT->addMarkerByCoords(-74.12565,4.576594,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0831146,4.737278,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.126575,4.570694,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.12033,4.5356722,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.12659,4.533611,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0765,4.6658,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.6536,4.564445,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.11136,4.765167,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.566231,4.665667,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.06594,4.5655,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.06528,4.6533,"Marker Title", "Marker Description");




$MAP_OBJECT->addMarkerByCoords(-74.156511,4.526561,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.125647,4.56578,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.046742,4.7665222,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.066548,4.646517,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0926361,4.7656305,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.5272,4.746655,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.04608,4.765778,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0659442,4.76525,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0695656,4.656583,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.096504,4.75665,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.08653,4.5975672,"Marker Title", "Marker Description");

$MAP_OBJECT->addMarkerByCoords(-74.150651,4.5226561,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.120465147,4.526578,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.045657742,4.7614222,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.06565448,4.665917,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.096361,4.7465605,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0496572,4.746505,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.045658,4.7557568,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.065579442,4.7565425,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.655936,4.62872583,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0657804,4.76575,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0653683,4.653472,"Marker Title", "Marker Description");


$MAP_OBJECT->addMarkerByCoords(-74.155251,4.565861,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.120575147,4.522578,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.724742,4.7672222,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.067702448,4.6872741917,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0922361,4.748764305,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.049272,4.746205,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.042808,4.752878,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.045259442,4.7225,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.06236,4.622583,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.09204,4.25,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0852583,4.5972472,"Marker Title", "Marker Description");

$MAP_OBJECT->addMarkerByCoords(-74.121,4.5221,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.12147,4.522278,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.72242,4.76122,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.06248,4.52917,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.09261,4.74825,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.062,4.7436695,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.03258,4.75828,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.04254,4.7584942,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.0629,4.628454,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.092249,4.78249,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.05429,4.59249,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.092249,4.78249,"Marker Title", "Marker Description");
$MAP_OBJECT->addMarkerByCoords(-74.05429,4.59249,"Marker Title", "Marker Description");


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