

// This file is used to fetch the reservations for a date that the user has chosen. It displays the reservations and disabled the times that have already been reserved.


<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<?php
include 'connect.php';
include 'session.php';

$date = $_POST['date'];

// Here we get the date chosen in the calendar as a variable and add it to the sql query.

$sql = "select * from reservation where date='" . $date ."'";
$result = $db->query($sql);
$loop = -1;
$x = 0;
$full = false;
//sets array used in switch-case
$time = array(0,0,0,0,0,0,0,0,0,0);
//Array is used for conversing time from index.
// Time conversion array contains the strings matching the index of the time.
$timeconversion = array('15:00', '16:00','17:00','18:00','19:00','20:00','21:00','22:00','23:00','24:00');

            echo "<h1>Vapaat ajat</h1>
                   <p>Tässä vapaana olevat ajat valitsemallenne päivälle: " . $date . "</p>
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
//Checks what is rows index for reservation time.
// The array is basically a collection of booleans that marks if the current time is reserved or not.
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
// Here we write the reservations on the page, if the array contains a value of 1 (reserved) the button used to reserve the time is not created.
    if ($time[$x] == 0) {

        echo "<tr>" .
            "<td>" .
            "Vapaa" .
            "</td>" .
            "<td>" .
            $timeconversion[$x] .
            "</td>" .
            "<td>" .
            "<button type='submit' class='btn' name='" . $date . "' id='" . $x . "' onclick='reserverRec(this.id, this.name)'>Varaa</button>" .
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

echo "</tbody>"; ?>

<script>

// This javascript function is used to passa the data to the makeReservation.php file

function reserverRec(id, name) {
    console.log(name);
    window.location.href = "makeReservation.php?w1=" + id + "&w2=" + name;
}



</script>
</html>











