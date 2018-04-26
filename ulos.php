<?php
/**
 * Created by PhpStorm.
 * User: J
 * Date: 26.4.2018
 * Time: 13:18
 */
session_start();
//empties session variable
session_destroy();

echo "HYVÄSTI!";

header("refresh:2; url=index.php");
exit();