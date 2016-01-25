<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $file_name = $_GET['id'].".txt";
    echo $file_name."test   ";
    echo file_get_contents($file_name);
     ?>
  </body>
</html>
