<?php
    try {
        $con = new PDO("sqlsrv:server = dasprolaboratory.database.windows.net; Database = bljrAzure", "mufti@dasprolaboratory", "qwert12345@");
        $con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    } catch(Exception $e) {
        echo "Failed: " . $e;
    }
?>