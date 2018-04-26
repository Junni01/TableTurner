<?php
/**
 * Created by PhpStorm.
 * User: Joonas
 * Date: 12.4.2018
 * Time: 14.33
 */
include "connect.php";
include "session.php";
//Sanitaze strings
$password = mysqli_real_escape_string($db, $_POST['oldpwd']);
$newpwd = mysqli_real_escape_string($db, $_POST['newpwd']);
//hashes password
$passwordhash = password_hash($newpwd, PASSWORD_DEFAULT);
$sql = "SELECT password FROM user WHERE email = '$user_check'";
$result = mysqli_query($db, $sql);
$row1 = mysqli_fetch_array($result, MYSQLI_ASSOC);
$hashFromDb = $row1['password'];
$passwordverify = password_verify($password, $hashFromDb);

//if password is founded from DB
if($passwordverify) {
    $sql = "UPDATE user SET password = '$passwordhash' WHERE email = '$user_check'";

    if ($db->query($sql) === TRUE){
        echo "<div> Salasanan vaihto onnistui! </div>";
    } else {
        echo $db->error;

    }

}
else {
    echo "<div>Väärä salasana! Sinut ohjataan takaisin sivulle</div>";
}
header("refresh:2; url=tietomuutos.php");
die();