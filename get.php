<?php
if(isset($_GET["pa"])){
    switch ($_GET["pa"]) {
        case 'entryfiles':
            $dir= 'files/entries/';
            $files = scandir($dir,1);
            echo  json_encode($files);
            die();
        default:

            break;
    }
}else{
    include("main-view.php");
}

?>
