<?php
/**
 * Created by PhpStorm.
 * User: J
 * Date: 26.4.2018
 * Time: 13:18
 */
session_start();

// If the user is logged in, delete the session data and destroy the session
if (isset($_SESSION['userid'])) {

    $_SESSION = array();

    session_destroy();
}

header("refresh:2; url=index.php");