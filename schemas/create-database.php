<?php
/**
 * Bootstrap AdscreenIO database creation
 *
 */
 
include_once("db-data.php");
 
// Create Tables
$table_users = "CREATE TABLE IF NOT EXISTS aio_users (
	id INT(11) NOT NULL AUTO_INCREMENT,
	dateCreated DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
	username VARCHAR(255) NULL DEFAULT NULL COLLATE 'utf8_general_ci',
	password VARCHAR(255) NULL DEFAULT NULL COLLATE 'utf8_general_ci',
	email VARCHAR(255) NULL DEFAULT NULL COLLATE 'utf8_general_ci',
	active TINYINT(5) NULL DEFAULT '1',
	accesslevel ENUM('a','b','c','d') NOT NULL DEFAULT 'a',
	upload_folder VARCHAR(255) NOT NULL DEFAULT 'multimedia' COLLATE 'utf8_general_ci',
	PRIMARY KEY (id)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
AUTO_INCREMENT=2
;)";


$table_folders = "CREATE TABLE aio_folders (
	id INT(11) NOT NULL AUTO_INCREMENT,
	dateCreated DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
	parentID INT(20) NOT NULL DEFAULT '0',
	name VARCHAR(255) NOT NULL COLLATE 'utf8_general_ci',
	PRIMARY KEY (id)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
AUTO_INCREMENT=2
;)";

$query = mysqli_query($db_connection, $table_users, $table_folders);
if ($query === TRUE) {
	echo "Tables created successfully"; 
} else {
	echo "Problem creating tables"; 
}

$db_connection->close();
?>