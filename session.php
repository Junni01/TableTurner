<?php
/**
 * Created by PhpStorm.
 * User: J
 * Date: 5.4.2018
 * Time: 11:47
 */
session_start();
include "connect.php";

if(isset($_SESSION['login_user'])){
    $testii = "hei";
    $user_check = $_SESSION['login_user'];
    $ses_sql = mysqli_query($db, "select email FROM user where email = '$user_check' ");
    $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);
    $login_session = $row['email'];
    $sql1 = mysqli_query($db, "SELECT firstName FROM user WHERE email ='$user_check' ");
    $sql2 = mysqli_query($db, "SELECT lastName FROM user WHERE email = '$user_check'");
    $row1 = mysqli_fetch_array($sql1, MYSQLI_ASSOC);
    $row2 = mysqli_fetch_array($sql2, MYSQLI_ASSOC);
    $slName = $row2['lastName'];
    $sfName = $row1['firstName'];
    $_SESSION['fName'] = $sfName;
    $_SESSION['lName'] = $slName;
}


