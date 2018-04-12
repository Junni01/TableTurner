<?php
/**
 * Created by PhpStorm.
 * User: J
 * Date: 12.4.2018
 * Time: 14:14
 */
include 'connect.php';

$sql = "delete from reservation where reservationID = " . $resdeletion;

$result = $db->query($sql);

if ($result) {

    console.log("Poisto onnistui");
} else {
    console.log("Poisto ei onnistunut");
}

