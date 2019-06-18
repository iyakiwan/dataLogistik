<?php
 	$host = "dasprolaboratory.database.windows.net";
    $user = "<Nama admin database Anda>";
    $pass = "<Password admin database Anda>";
    $db = "<Nama database Anda>";
    try {
        $con = new PDO("sqlsrv:server = dasprolaboratory.database.windows.net; Database = bljrAzure", "mufti", "qwert12345");
        $con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    } catch(Exception $e) {
        echo "Failed: " . $e;
    }
?>