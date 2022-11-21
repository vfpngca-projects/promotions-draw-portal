<?php
date_default_timezone_set("Pacific/Port_Moresby");
$_REQUEST=$_SERVER["REQUEST_METHOD"];
switch($_REQUEST) {
    case 'GET':
      if (file_exists(__DIR__."./get.php")) {
        include(__DIR__."./get.php");
      }else{
        echo "System Error";
      }
        break;
        case 'POST':
        $respose= array('status' =>"" ,"message"=>"" );
        if(file_exists(__DIR__."./post.php")){
          include(__DIR__."./post.php");
        }else{
          $respose["status"]="error";
          $respose["message"]="System Error";
          echo json_encode($respose);
        }
            break;
    default:
        include __DIR__."./error.php";
        break;
}
?>
