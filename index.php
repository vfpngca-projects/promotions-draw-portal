<?php
date_default_timezone_set("Pacific/Port_Moresby");
$_REQUEST=$_SERVER["REQUEST_METHOD"];
switch($_REQUEST) {
    case 'GET':
        include("get.php");
        break;
        case 'POST':
            include("post.php");
            break;
    default:
        include "error.php";
        break;
}
?>
