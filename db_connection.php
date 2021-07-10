
<?php 
    // local server
    // $localserver = "localhost";
    // $db_user = "root";
    // $db_password = "";
    // $db_name = "users";


    // remote server
    $localserver = "remotemysql.com";
    $db_user = "7xH2Kt4FEk";
    $db_password = "ry9LZeARCC";
    $db_name = "7xH2Kt4FEk";

    $connection = new mysqli($localserver, $db_user, $db_password, $db_name);

?>