<?php

ob_start();
session_start();

define('DB_SERVER', 'localhost:8889');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'Journal');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);


//kolla db connection

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


?>


