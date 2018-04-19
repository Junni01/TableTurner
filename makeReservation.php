<?php
/**
 * Created by PhpStorm.
 * User: J
 * Date: 19.4.2018
 * Time: 13:18
 */
include 'session.php';
include 'connection.php';

if (isset($_GET["w1"])&& isset($_GET["w2"])){;
    $resDate = $_GET["w2"];
    $resTime = $_GET["w1"];

}

$sql = "INSERT INTO `reservation` ('reservationID', 'date', 'time', 'details', 'userID') VALUES
(NULL, '" . $resDate . "', '" . $resTime . "', 'Not used', '" . $_SESSION['userID']  . "')";

$result = $db->query($sql);

if ($result) {
    echo "<div> Varaus onnistui! </div>";

} else {

    echo $db->error;
}

header("refresh:2; url=etusivu.php");
die();