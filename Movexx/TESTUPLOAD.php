<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="movie"/>
    <input type="submit" value="Post"/>
</form>


<?php
  if (isset($_FILES["movie"]["tmp_name"])) {
      $ch = curl_init();

      $cfile = new CURLFile($_FILES["movie"]["tmp_name"], $_FILES["movie"]["type"], $_FILES["movie"]["name"]);
      $data = array("mymovie"=>$cfile);

      curl_setopt($ch, CURLOPT_URL, "http://".$_POST["IP"].":80/uploads.php");
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

      $response = curl_exec($ch);

      if ($response === true) {
         echo "File posted";
      } else {
        echo "Error: " . curl_error();
      }
  }