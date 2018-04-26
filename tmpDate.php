<?php
/**
 * Created by PhpStorm.
 * User: Joonas
 * Date: 19.4.2018
 * Time: 13.25
 */

/*
 * File is not in use
 */
$tmpDate;
if (isset($_GET["w1"])){
   $tmpDate = mysqli_real_escape_string($db, $_GET["w1"]);
}

header('url=etusivu.php');
die();