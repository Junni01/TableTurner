<?php
/**
 * Created by PhpStorm.
 * User: J
 * Date: 5.4.2018
 * Time: 13:19
 */

include 'connect.php';
// $sql = "select * from reservation where userID ='". $_SESSION['userid'] . "';";
$sql = "select * from reservation";
$result = $db->query($sql);
// Selects and echoes all reservations from database to the index.php page
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){

        $timeconversion = "";

        switch ($row["time"]) {
            case 0:
                $timeconversion = '15:00';
                break;
            case 1:
                $timeconversion = '16:00';
                break;
            case 2:
                $timeconversion = '17:00';
                break;
            case 3:
                $timeconversion = '18:00';
                break;
            case 4:
                $timeconversion = '19:00';
                break;
            case 5:
                $timeconversion = '20:00';
                break;
            case 6:
                $timeconversion = '21:00';
                break;
            case 7:
                $timeconversion = '22:00';
                break;
            case 8:
                $timeconversion = '23:00';
                break;

            default:
                $timeconversion = 'Unknown time';
                break;
        }





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
            "<button type='button' class='btn' id='" . $row['ReservationID'] . "' onclick='deleteRec(this.id)'>Poista</button>".
            "</td>".
            "</tr>";

    }
}