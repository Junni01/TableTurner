<?php
/**
 * Created by PhpStorm.
 * User: J
 * Date: 5.4.2018
 * Time: 11:38
 */

//Server connection details
$servername = "127.0.0.1:49941";
$username = "azure";
$password = "6#vWHD_$";
$dbname = "localdb";

// Create connection
$db = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

