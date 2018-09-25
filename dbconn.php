<?php
    // Database configuration
    $host = "localhost"; // MySQL hostname
    $dbUserName = "xosoagzb"; // MySQL database username
    $dbPwd = "123@123@456"; // MySQL database password
    $dbName = "xosoagdb"; // The name of the database
	$table = "thief_challenge"; // The name of the table

    // Start connection to database server
    $conn = mysqli_connect($host, $dbUserName, $dbPwd);
    if (!$conn) {
        die('Could not connect: ' . mysqli_connect_error());
    }

    // make connection to database
	$db_selected = mysqli_select_db($conn, $dbName);
    if (!$db_selected) {
        die ('Can\'t use database'.$dbName.' : ' . mysqli_connect_error());
    }	
	//mysql_close($link);
?>