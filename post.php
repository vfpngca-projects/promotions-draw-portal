<?php
  if(isset($_FILES["upfile"])){
       $entries= array();
       $resEntries=array();
      if($_FILES['upfile']["error"]){
           echo  json_encode($_FILES['upfile']["error"]);
      }else{
        try {
          $file_name = $_FILES['upfile']['name'];
          $file_size =$_FILES['upfile']['size'];
          $file_tmp =$_FILES['upfile']['tmp_name'];
          $file_type=$_FILES['upfile']['type'];
          $fileNameParts = explode('.', $file_name);
          $ext = end($fileNameParts);
          $target_dir = "files/entries/";
          $newfileName=date("ymdHis").microtime(true);
          $newName=$newfileName.".".$ext;
          $fileNow=$target_dir. $newName;
          $moveFIle=move_uploaded_file($file_tmp,$fileNow);
          if($moveFIle==true){
              if(file_exists($fileNow)){
                try {
                  $csvFile=fopen($fileNow,"r");
                      while (($data = fgetcsv($csvFile)) !==false) {
                          for($i=0;$i<sizeof($data);$i++){
                              array_push($entries,$data[$i]);
                          }
                        }
                      fclose($csvFile);
                      unlink($fileNow);
                      echo json_encode($entries);
                } catch (\Exception $e) {
                    echo json_encode($e->getMessage());
                }
              }else{echo json_encode("Error");}
            }else{echo json_encode("Error While Uploading file");
          }
        } catch (\Exception $e) {
          echo json_encode($e->getMessage());
        }
      }
    die();
  }

  if(isset($_POST["results"])){
      $date=date ("d/m/y H:i:s");
      $headers=array("Draw","Wining Number","Date and Time");
      $count=1;
      $resultArray=array("id"=>"","number"=>"","date"=>"");
      $a1 = array();
      $csvFile=date("d-M-Y-His").microtime(true).".csv";
      try {
        $fh= fopen("files/".$csvFile,"w");
         fputcsv($fh, $headers);
         foreach($_POST["results"] as $winner){
             $resultArray["id"]= $count;
             $resultArray["number"]=$winner;
             $resultArray["date"]=$date;
             array_push($a1,$resultArray);
             $count=$count+1;
         }
         foreach($a1 as $fields){
              fputcsv($fh, $fields);
         }
         if(file_exists("files/".$csvFile)){
             header("Cache-Control:public");
             header("Content-Desccription:File Transfer");
             header("Content-Despostion:attachement;filename=$csvFile");
             header("Content-Type:application/csv; charset=UTF-8");
             header("Content-Transfer-Encoding:binary");
             readfile("files/".$csvFile);
             unlink("files/".$csvFile);
             exit();
         }else{
           echo json_encode("Oh! Nooo...");
           die();
         }

      } catch (\Exception $e) {
        echo json_encode($e->getMessage());
        die();
      }



  }
