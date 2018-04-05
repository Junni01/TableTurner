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
    $user_check = $_SESSION['login_user'];
    $ses_sql = mysqli_query($db, "select email FROM user where email = '$user_check' ");
    $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);
    $login_session = $row['email'];
}