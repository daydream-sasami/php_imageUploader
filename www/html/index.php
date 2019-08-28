<?php

?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Image Uploader</title>

  <style>
    body {
      text-align: center;
      font-family: Arial, sans-serif;
    }
  </style>
</head>
<body>
  <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="">
    <input type="file" name="image">
    <input type="submit" value="upload">
  </form>
</body>
</html>