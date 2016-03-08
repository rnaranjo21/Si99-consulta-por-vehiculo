<?php
session_start();
$_SESSION['vehicle']=$_POST['vehicle'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="styles/jquery-ui-1.10.4.custom.min.css">
    <link type="text/css" rel="stylesheet" href="styles/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="styles/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="styles/animate.css">
    <link type="text/css" rel="stylesheet" href="styles/all.css">
    <link type="text/css" rel="stylesheet" href="styles/main.css">
    <link type="text/css" rel="stylesheet" href="styles/style-responsive.css">
    <link type="text/css" rel="stylesheet" href="styles/zabuto_calendar.min.css">
    <link type="text/css" rel="stylesheet" href="styles/pace.css">
    <link type="text/css" rel="stylesheet" href="styles/jquery.news-ticker.css">
         <link href="css/Estilo.css" rel="stylesheet" type="text/css"/>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <script type="text/javascript" src="js/ext/jquery-1.8.2.min.js"></script>
     <link href="bootstrap-data-table-master/css/vendor/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="bootstrap-data-table-master/css/vendor/font-awesome.min.css" type="text/css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href="bootstrap-data-table-master/css/jquery.bdt.css" type="text/css" rel="stylesheet">
    <link href="bootstrap-data-table-master/css/style.css" type="text/css" rel="stylesheet">
     <script src="http://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="bootstrap-data-table-master/js/vendor/bootstrap.min.js" type="text/javascript"></script>
<script src="bootstrap-data-table-master/js/vendor/jquery.sortelements.js" type="text/javascript"></script>
<script src="bootstrap-data-table-master/js/jquery.bdt.js" type="text/javascript"></script>

  <title>Si99</title>
</head>
<div id="header-topbar-option-demo" class="page-header-topbar">
            <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" class="navbar navbar-default navbar-static-top">
    <div class="navbar-header">
           <a id="logo" href="#" class="navbar-brand"><span class="logo-text">Si99</span></a></div>
<div class="topbar-main"></a>
            <ul class="nav navbar navbar-top-links navbar-right mbn">
                             <li><a href="formulario.php" id="btnExport">Volver</a></li>
                            <li><a href="cerrar.php"> <img src="imagenes/logout.png" >Cerrar Sesión</a></li>
                        </ul>
                    </li>
  </div>         
      </div>  
         </div>           
          
 <br>
 <body>
  
<style type="text/css">
body { 
  background-image: url(imagenes/Fondo.jpg);
  height: 100%; 
  margin: 0; 
  padding: 0; 
  text-align: center;

}
td{
  cursor: pointer;
}

</style>
<?php

//llamado WSDL
$client =new SoapClient("https://api.fm-web.us/webservices/CoreWebSvc/CoreWS.asmx?WSDL",array( "trace" => 1 )); 
$client2 = new SoapClient("https://api.fm-web.us/webservices/PositioningWebSvc/PositioningWS.asmx?WSDL",array( "trace" => 1 ));
$client3=new SoapClient("https://api.fm-web.us/webservices/AssetDataWebSvc/VehicleProcessesWS.asmx?WSDL",array( "trace" => 1 ));
$client4=new SoapClient("https://api.fm-web.us/webservices/MappingWebSvc/LocationProcessesWS.asmx?WSDL",array("trace"=>1));


$params = array(
  "UserName" =>$_SESSION['Usuario'],
  "Password" =>$_SESSION['Password'],
  "ApplicationID" => "",
);
$response = $client->__soapCall('Login', array($params));
$token = $response->LoginResult->Token;
 //Paramtros LOGIN
//hander a mantener secion activa token*/
$core = "http://www.omnibridge.com/SDKWebServices/Core";
$posicion="http://www.omnibridge.com/SDKWebServices/Positioning";
$vehiculos="http://www.omnibridge.com/SDKWebServices/AssetData";
$location="http://www.omnibridge.com/SDKWebServices/Mapping";
$authHeader=array("Token" => $token);
//headers token para cada funcion a llamar 
$header[] = new SoapHeader($core,'TokenHeader',$authHeader, false);
$salida=$client->__setSoapHeaders($header);

$header1[] = new SoapHeader($posicion,'TokenHeader',$authHeader, false);
$salida=$client2->__setSoapHeaders($header1);

$header2[] = new SoapHeader($vehiculos,'TokenHeader',$authHeader, false);
$salida=$client3->__setSoapHeaders($header2);

$header3[]=new SoapHeader($location,'TokenHeader',$authHeader, false);
$salida=$client4->__setSoapHeaders($header3);
//parametros de consulta wsdl
$paramsStorg= array("NewOrganisationID" => 626);
$result= $client->__soapCall('SetCurrentOrgID', array($paramsStorg));
//parametros vehiculos
$paramvehi=array("VehicleID"=>$_SESSION['vehicle']);
//llamado al services vehiculos
$orgVehi =$client3->__soapCall('GetVehicle',array($paramvehi));
//mostrar result en tablas 
$vehi= $orgVehi->GetVehicleResult;
echo '<div class="panel panel-blue" style="background:#FFF;float:left">';
echo '<br>';
echo'<div class="panel-heading">Tabla de ubicaciones buses</div>';
echo '<br>';
echo ' <div class="panel-body">';
echo '<table class="table table-hover" id="bootstrap-table">' ;
 echo '<thead>';
echo '<tr>';
echo '<th>';
echo "Bús";
echo '</th>';
echo '<th>';
echo "Localización";
echo '</th>';
echo '<th>';
echo "Ultima posición";
echo '</th>';
echo '</tr>';
echo '</thead>';
//parametros posiscion

include_once("php-google-map-api-master/releases/3.0/src/GoogleMap.php");
include_once("php-google-map-api-master/releases/3.0/src/JSMin.php");
$MAP_OBJECT = new GoogleMapAPI(); $MAP_OBJECT->_minify_js = isset($_REQUEST["min"])?FALSE:TRUE;
for($i=1;$i<=count($vehi);$i++){
$vehiID=$orgVehi->GetVehicleResult->ID;
$vehiDes=$orgVehi->GetVehicleResult->Description;
$paramPosi= array("VehicleID"=>$vehiID);
$orgposi =$client2->__soapCall('GetLatest1GPSPositionForVehicle',array($paramPosi));
//llamado al services posiciongps
$posi1=$orgposi->GetLatest1GPSPositionForVehicleResult->Latitude;
$posi2=$orgposi->GetLatest1GPSPositionForVehicleResult->Longitude;
//llamado localizacion 
$paramlocal= array("Longitude"=>$posi2,"Latitude"=>$posi1);
$orglocal =$client4->__soapCall('GetNearestLocation',array($paramlocal));
$positime=$orgposi->GetLatest1GPSPositionForVehicleResult->Time;
$date = new DateTime($positime);
$location=$orglocal->GetNearestLocationResult->OriginLongitude;
$location1=$orglocal->GetNearestLocationResult->OriginLatitude;
$location2=$orglocal->GetNearestLocationResult->LocationName;
$marker_id=$MAP_OBJECT->addMarkerByCoords($posi2,$posi1,$location2,$vehiDes);
$marker_opener= "opener_".$marker_id;
$MAP_OBJECT->addMarkerOpener($marker_id, $marker_opener);
 echo'  <tbody>';                                  
echo '<tr>';
echo '<td id= '.$marker_opener.'>';
print($vehiDes);
echo '</td>';
echo '<td>';
print($location2);
echo '</td>';
echo '<td>';
print $date->format('d/m/Y H:i:s');
echo '</td>';
echo '</tr>';
echo'  </tbody>';  

}
echo '</table>';
 echo '</div>';
echo '</div>';
 ?> 

   <div  style="float:Rigth">
  <?=$MAP_OBJECT->getHeaderJS();?>
<?=$MAP_OBJECT->getMapJS();?>
<?=$MAP_OBJECT->printOnLoad();?>
 <?=$MAP_OBJECT->printMap();?>

</div>
</div>
<br>

 
 <br>
 <div id="footer">
                    <div class="copyright">
                        <a href="http://www.syscaf.com/">2016 © Desarrollado Por IDI de SYSCAF S.A.S</a>
                          <h4>+57 (1) 746 6892  |  Calle 74A N° 23 - 10  |  info@syscaf.com.co  |  Bogotá - COLOMBIA </h4>
                      </div>
 </div>
  
   </body>

</body>
</html>   
