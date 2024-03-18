<?php

    define("HOSTNAME", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("DATABASE", "pms_failed_sampless");

    $connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

    if(!$connection){
        die("Connection Failed");
    }

?>