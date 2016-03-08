<?php
session_start();
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
<script>
    $(document).ready( function () {
        $('#bootstrap-table').bdt();
    });
</script>
  <title>Si99</title>
<div id="header-topbar-option-demo" class="page-header-topbar">
            <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" class="navbar navbar-default navbar-static-top">
    <div class="navbar-header">
           <a id="logo" href="#" class="navbar-brand"><span class="logo-text">Si99</span></a></div>
<div class="topbar-main"></a>
            <ul class="nav navbar navbar-top-links navbar-right mbn">
                                 <li><a href="cerrar.php"> <img src="imagenes/logout.png" >Cerrar Sesión</a></li>
                        </ul>
                    </li>
  </div>         
      </div>  
         </div>          
</head>
 
     <body>      
 <br>
 <style type="text/css">
 body { 
  background-image: url(imagenes/Fondo.jpg);
  height: 100%; 
  margin: 0; 
  padding: 0; 
  text-align: center;
}
.panel-body{
  
  height: 450px;
    overflow: scroll;
}
.panel.panel-blue {
width: 40%;
    }
td{
  cursor: pointer;
}
 </style>

 <div>

<?php
//llamado WSDL
$client =new SoapClient("https://api.fm-web.us/webservices/CoreWebSvc/CoreWS.asmx?WSDL",array( "trace" => 1 )); 
$params = array(
  "UserName" =>$_SESSION['Usuario'],
  "Password" =>$_SESSION['Password'],
  "ApplicationID" => "",
);
$response = $client->__soapCall('Login', array($params));
$token = $response->LoginResult->Token;
//validacion login
//Error VAlidacion Token
if($token==null)
{
echo '<script languaje="javascript">';
echo   'alert("Contraseña Incorrecta");';
echo 'location.href = "cerrar.php";';
echo '</script>';
}
$authHeader=array("Token" => $token);
$client3=new SoapClient("https://api.fm-web.us/webservices/AssetDataWebSvc/VehicleProcessesWS.asmx?WSDL",array( "trace" => 1 ));
$vehiculos="http://www.omnibridge.com/SDKWebServices/AssetData";
$core = "http://www.omnibridge.com/SDKWebServices/Core";

$header[] = new SoapHeader($core,'TokenHeader',$authHeader, false);
$salida=$client->__setSoapHeaders($header);


$header2[] = new SoapHeader($vehiculos,'TokenHeader',$authHeader, false);
$salida=$client3->__setSoapHeaders($header2);

$paramsStorg= array("NewOrganisationID" => 626);

$result= $client->__soapCall('SetCurrentOrgID', array($paramsStorg));

$paramvehi=array("TokenHeader");
//llamado al services vehiculos
$orgVehi =$client3->__soapCall('GetVehiclesList',array($paramvehi));
//mostrar result en tablas 
$vehi= $orgVehi->GetVehiclesListResult->Vehicle;
echo '<center>';
echo '<div class="panel panel-blue  style="float:left">' ;
echo'<div class="panel-heading">Consulta ubicación bus</div>';
echo ' <div class="panel-body">';
echo '<table class="table table-hover" id="bootstrap-table">' ;
echo '<form role="form" method="post" action="consumopos.php">';
echo '<button type="submit" class="btn btn-default">Consultar</button>';
 echo '<thead>';
 echo '<tr>';
echo '<th>';
echo '</th>';
echo '<th>';
echo "Bús";
echo '</th>';
echo '</tr>';
echo '</thead>';
 for($i=1;$i<count($vehi);$i++){
$vehiID=$orgVehi->GetVehiclesListResult->Vehicle[$i]->ID;
$vehiDes=$orgVehi->GetVehiclesListResult->Vehicle[$i]->Description;
 echo'  <tbody>'; 
 echo '<tr>';
 echo '<td>';
 echo '<input type="radio" name="vehicle" value='.$vehiID.' checked>';
  echo '</td>';
  echo '<td>';
  echo $vehiDes;
  echo '</td>';
  echo '</tr>';
   echo'  </tbody>';  
  }
    echo '</table>';
     echo '</div>';
  echo '</div>';
echo '</div>';


   

 echo '</form>';

?>
</div>
<br>
</body>
<div id="footer">
                    <div class="copyright">
                        <a href="http://www.syscaf.com/">2016 © Desarrollado Por IDI de SYSCAF S.A.S</a>
                          <h4>+57 (1) 746 6892  |  Calle 74A N° 23 - 10  |  info@syscaf.com.co  |  Bogotá - COLOMBIA </h4>
                      </div>
 </div>
  
   
</html>   
