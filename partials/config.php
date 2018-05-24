<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

ob_start();
session_start();

define('DB_SERVER', 'localhost:8889');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'Journal');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// $db = new PDO("mysql : host=".DBHOST.";port=8889; dbname=".DBNAME, DBUSER, DBPASS);
// $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>