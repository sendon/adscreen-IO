<?php
/* 
*  DB Configuration 
*/

error_reporting(0); //Default 0. Enable reporting with 1

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adscreendb";

$db_connection = mysqli_connect("$servername", "$username", "$password", "$dbname");
// Evaluate the connection
if (!$db_connection) {
    die ("Connection failed: " . mysqly_connect_error());
} else {
	echo "DB Connection stablished";
}



