<?php
/* 
*  DB Configuration 
*/

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