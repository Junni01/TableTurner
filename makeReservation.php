<?php
/**
 * Created by PhpStorm.
 * User: J
 * Date: 19.4.2018
 * Time: 13:18
 */
include 'session.php';

if (isset($_GET["date"])) {;
    $resDate = $_GET["date"];
    $resTime = $_GET["time"];

}

$sql = "INSERT INTO `reservation` ('date', 'time', 'details', 'userID') VALUES
('" . $resDate . "', '". $resTime . "', 'Not used', '" . $_SESSION['userid']  . "')";

$result = $db->query($sql);

if ($result) {
    echo "<div> Varaus onnistui! </div>";

} else {

    echo $db->error;
}

header("refresh:2; url=etusivu.php");
die();