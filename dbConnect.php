<?php
$connectionInfo = array("UID" => "mufti@dasprolaboratory", "pwd" => "qwert12345@", "Database" => "bljrAzure", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:dasprolaboratory.database.windows.net,1433";
$con = sqlsrv_connect($serverName, $connectionInfo);
?>