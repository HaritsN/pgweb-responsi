<?php

 # Ubah URL pada file_get_contents sesuai alamat file pada geoserver
 $wfsUrl =
file_get_contents("http://localhost:8080/geoserver/diy/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=diy%3ATEMATIK_JUMLAHPENDUDUK_Proj&maxFeatures=50&outputFormat=application%2Fjson");



 header('Content-type: application/json');
 echo ($wfsUrl);

?>

