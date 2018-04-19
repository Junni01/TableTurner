<?php
include 'tmpDate.php';




$sql = "select * from reservation where date='$tmpDate'";
$result = $db->query($sql);
$loop = -1;
$x = 0;
$full = false;

$time = array(0,0,0,0,0,0,0,0,0,0);
$timeconversion = array('15:00', '16:00','17:00','18:00','19:00','20:00','21:00','22:00','23:00','24:00');

            echo "<h1>Vapaat ajat</h1>
                   <p>Tässä vapaana olevat ajat valitsemallenne päivälle</p>
            <table class='table table-bordered'>
                <thead>
                    <tr>
                        <th>Tila</th>
                        <th>Klo</th>
                        <th>Varaa?</th>
                    </tr>
                </thead><tbody>";




if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

        switch ($row["time"]) {
            case 0:
                $time[0] = 1;
                break;
            case 1:
                $time[1] = 1;
                break;
            case 2:
                $time[2] = 1;
                break;
            case 3:
                $time[3] = 1;
                break;
            case 4:
                $time[4] = 1;
                break;
            case 5:
                $time[5] = 1;
                break;
            case 6:
                $time[6] = 1;
                break;
            case 7:
                $time[7] = 1;
                break;
            case 8:
                $time[8] = 1;
                break;

            default:
                ;
                break;
        }

    }

}


for ($x = 0; $x <= 8; $x++) {

    if ($time[$x] == 0) {

        echo "<tr>" .
            "<td>" .
            "Vapaa" .
            "</td>" .
            "<td>" .
            $timeconversion[$x] .
            "</td>" .
            "<td>" .
            //"<input type='radio' name='optradio' id='" . $row["ReservationID"] . "'>".
            "<input type='radio' name='optradio' id='" . $x . "' onclick='reserverRec(this.id)'></button>" .
            "</td>" .
            "</tr>";


    } else {
        echo "<tr>" .
            "<td>" .
            "Täynnä" .
            "</td>" .
            "<td>" .
            $timeconversion[$x] .
            "</td>" .
            "</tr>";


    }

}

echo "</tbody>";














