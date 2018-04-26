<?php
/**
 * Created by PhpStorm.
 * User: J
 * Date: 12.4.2018
 * Time: 14:14
 */
include 'connect.php';

$resdeletion;
//initial variable from passed parameter that is reservation ID
if (isset($_GET["w1"])) {
$resdeletion =$_GET["w1"];
}


    $sql = "delete from reservation where reservationID = " . $resdeletion;

    $result = $db->query($sql);


    if ($result) {
        echo "<div> Poisto onnistui! </div>";

    } else {

        echo $db->error;
    }


header("refresh:2; url=etusivu.php");
die();