<?php
/**
 * Created by PhpStorm.
 * User: Joonas
 * Date: 5.4.2018
 * Time: 11.47
 */
include "connect.php";

$fName = $_POST['fName'];
$lName = $_POST['lName'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordhash = password_hash($password, PASSWORD_DEFAULT);

$query = mysqli_query($db, "select email FROM user where email = '$email'");
$rows = mysqli_fetch_array($query, MYSQLI_ASSOC);
if ($rows >= 1) {

    // sähköposti on jo käytössä. echotaan jonnekkin
    die();
}
else {
    $sql = "Insert into user(firstName, lastName, email, password) VALUES ('$fName', '$lName', '$email', '$passwordhash')";

    if ($db->query($sql) === TRUE){
        echo "<div> Rekisteröinti onnistui! </div>";
    } else {
       echo $db->error;
    }

}

header("refresh:2; url=index.html");
die();