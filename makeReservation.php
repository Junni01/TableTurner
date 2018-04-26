<?php
/**
 * Created by PhpStorm.
 * User: J
 * Date: 19.4.2018
 * Time: 13:18
 */
include 'session.php';
include 'connect.php';
//Gets passed parameters
if (isset($_GET["w1"])&& isset($_GET["w2"])){;
    $resDate = $_GET["w2"];
    $resTime = $_GET["w1"];

}

// This file creates the reservations for the time the user has chosen. User clicks the reserve button and the line's index is passed here and the session user id is used to identify the user

//Prepared statement for query
$sql = $db->prepare("INSERT INTO `reservation` (`ReservationID`, `date`, `time`, `details`, `userID`) VALUES (NULL, ?, ?, 'qwweqe', ?)");
$sql->bind_param("sss", $resDate, $resTime, $_SESSION['userID']);

//does query and check if it went through
if ($sql->execute()) {
    echo "<div> Varaus onnistui! </div>";

} else {

    echo $db->error;
}

header("refresh:2; url=etusivu.php");
die();