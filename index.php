<?php
date_default_timezone_set("Pacific/Port_Moresby");
ini_set("upload_max_filesize","256M");
ini_set("memory_limit","512M");
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
