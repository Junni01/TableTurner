<?php
/**
 * Created by PhpStorm.
 * User: J
 * Date: 5.4.2018
 * Time: 13:19
 */

include 'connect.php';
$sql = "select * from reservation";
$result = $db->query($sql);
// Selects and echoes all reservations from database to the index.php page
echo 'Toimii';
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "Toimii"; // $row["ReservationID"] . $row["date"] . $row["time"] . $row["details"];
        /* echo"
        <div class='row threadContainer'>
          <div class=col-md-12>
            <h4><a  href='viewThread.php?id=$row[thread_id]&title=$row[thread_title]'>$row[thread_title]</a></h4>
            $row[thread_content]
            <hr>
          </div>
          <div class='col-md-4'>
            <p class='threadStarter'>$row[thread_starter]</p>
          </div>
          <div class='col-md-4'>
          </div>
          <div class=col-md-4>
            <p class='threadId'>#$row[thread_id]</p>
          </div>
        </div>"; */
    }
}