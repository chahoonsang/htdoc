<?php
require("../lib/db.php");
require("../config/config.php");


$host=$config['host'];
$duser=$config['duser'];
$dpw=$config['dpw'];
$dname=$config['dname'];

$conn = db_init($host, $duser, $dpw, $dname);
$name =  mysqli_real_escape_string($conn,$_GET['name']);
$password =  mysqli_real_escape_string($conn,$_GET['password']);
echo $sql = "SELECT * FROM user WHERE name='".$name."' AND password='".$password."'";
$result = mysqli_query($conn, $sql);
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>JavaScript</h1>
    <script type="text/javascript">

    </script>
    <h1>PHP</h1>
    <?php
    if ($result->num_rows){
      echo "welcome";
    }else{
      echo "get out of here!!";
    }
     ?>
  </body>
</html>
