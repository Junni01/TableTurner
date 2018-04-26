<?php
/**
 * Created by PhpStorm.
 * User: J
 * Date: 5.4.2018
 * Time: 13:19
 */

include 'connect.php';
include 'session.php';

// $sql = "select * from reservation where userID ='". $_SESSION['userid'] . "';";
$sql = "select * from reservation where userID='" . $_SESSION['userID'] . "'";
$result = $db->query($sql);
// Selects and echoes all reservations from database to the index.php page
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){

        $timeconversion = "";

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
            //"<input type='radio' name='optradio' id='" . $row["ReservationID"] . "'>".
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