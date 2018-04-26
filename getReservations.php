<?php
/**
 * Created by PhpStorm.
 * User: J
 * Date: 5.4.2018
 * Time: 13:19
 */

include 'connect.php';
include 'session.php';
// This file shows the user's reservations, session user id determines which data to fetch from the server

$sql = "select * from reservation where userID='" . $_SESSION['userID'] . "'";
$result = $db->query($sql);
// Selects and echoes all reservations from database to the index.php page
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){

        $timeconversion = "";
// Here we used a custom function to convert the time attribute which we get from the database into more readable time format.
        $timeconversion = timeConversion($row["time"]);

        echo
            "<tr>".
            "<td>".
            "XXX".
            "</td>".
            "<td>".
            $row["date"].
            "</td>".
            "<td>".
            $timeconversion.
            "</td>".
            "<td>".
            $row["details"].
            "</td>".
            "<td>".
            "<button type='submit' class='btn' id='" . $row['ReservationID'] . "' onclick='deleteRec(this.id)'>Poista</button>".
            "</td>".
            "</tr>";

    }
}

function timeConversion($date) {

    switch ($date) {
        case 0:
            return '15:00';
            break;
        case 1:
            return '16:00';
            break;
        case 2:
            return '17:00';
            break;
        case 3:
            return '18:00';
            break;
        case 4:
            return '19:00';
            break;
        case 5:
            return '20:00';
            break;
        case 6:
            return '21:00';
            break;
        case 7:
            return '22:00';
            break;
        case 8:
            return '23:00';
            break;

        default:
            return 'Unknown time';
            break;
    }



}