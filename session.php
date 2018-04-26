<?php
/**
 * Created by PhpStorm.
 * User: J
 * Date: 5.4.2018
 * Time: 11:47
 */
session_start();
include "connect.php";
//checks if session is set
if(isset($_SESSION['login_user'])){

    $user_check = $_SESSION['login_user'];
    //retrivies user data from database
    $ses_sql = mysqli_query($db, "select email, firstName, lastName, userID FROM user where email = '$user_check' ");
    $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);
    $login_session = $row['email'];
    $slName = $row['lastName'];
    $sfName = $row['firstName'];
    $sUserID = $row['userID'];
    //makes session variables
    $_SESSION['fName'] = $sfName;
    $_SESSION['lName'] = $slName;
    $_SESSION['userID'] = $sUserID;
}




