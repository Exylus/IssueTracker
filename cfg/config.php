<?php
/* Database credentials. Assuming you are running MySQL*/
define('DB_SERVER', 'db5000288186.hosting-data.io');
define('DB_USERNAME', 'dbu470782');
define('DB_PASSWORD', 'Ilooli91!');
define('DB_NAME', 'dbs281439');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
