<?php


$sql = "select * from reservation where date='2018-03-01'";
$result = $db->query($sql);
// Selects and echoes all reservations from database to the index.php page

$loop = -1;

            echo "<h1>Vapaat ajat</h1>
                   <p>Tässä vapaana olevat ajat valitsemallenne päivälle</p>
            <table class='table table-bordered'>
                <thead>
                    <tr>
                        <th>Tila</th>
                        <th>Pvm</th>
                        <th>Klo</th>
                        <th>Varaa?</th>
                    </tr>
                </thead><tbody>";











for ($x = 0; $x <= 9; $x++) {

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){

            $loop += 1;

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

            if ($row["time"] == $x) {
                echo "<tr>".
                    "<td>".
                    "Täynnä".
                    "</td>".
                    "<td>".
                    $row["date"].
                    "</td>".
                    "<td>".
                    $timeconversion.
                    "</td>".
                    "</tr>";
            } else {

                echo "<tr>".
                    "<td>".
                    "Vapaa".
                    "</td>".
                    "<td>".
                    $row["date"].
                    "</td>".
                    "<td>".
                    $timeconversion.
                    "</td>".
                    "<td>".
                    //"<input type='radio' name='optradio' id='" . $row["ReservationID"] . "'>".
                    "<input type='radio' class='optradio' id='" . $row['ReservationID'] . "' onclick='reserverRec(this.id)'>Varaa</button>".
                    "</td>".
                    "</tr>";


            }


        }






    }

}


echo "</tbody>";














