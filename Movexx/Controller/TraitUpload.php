
<?php
  $response = null;
  $response_img = null;
  if (isset($_FILES["movie"]["tmp_name"])) {
      $ch = curl_init();

      $cfile = new CURLFile($_FILES["movie"]["tmp_name"], $_FILES["movie"]["type"], $_FILES["movie"]["name"]);
      $data = array("mymovie"=>$cfile);

      curl_setopt($ch, CURLOPT_URL, "http://".$_POST["IP"].":80/uploads.php");
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

      $response = curl_exec($ch);
      curl_close($ch);
//       if ($response === true) {
//          echo "File posted";
//       } else {
//         echo "Error: " . curl_error();
//       }
  }
  
  
  if (isset($_FILES["cover"]["tmp_name"])) {
      $targetfolder = $_SERVER['DOCUMENT_ROOT'].'/Covers/';
  if (!file_exists($targetfolder)) {
      mkdir($targetfolder, 0777, true);
  }
  if (file_exists($targetfolder . $_FILES["cover"]["name"])) {
      echo $_FILES["cover"]["name"] . " already exists. ";
  }
  else {
      move_uploaded_file($_FILES["cover"]["tmp_name"],
          $targetfolder . $_FILES["cover"]["name"]);
      $response_img = true;
      //echo "Stored in: " . $targetfolder . $_FILES["cover"]["name"];
  }}