<?php
require("../lib/db.php");
require("../config/config.php");


$host=$config['host'];
$duser=$config['duser'];
$dpw=$config['dpw'];
$dname=$config['dname'];

$conn = db_init($host, $duser, $dpw, $dname);
var_dump($conn);

$title =  mysqli_real_escape_string($conn, $_POST['title']);
$author = mysqli_real_escape_string($conn, $_POST['author']);
$desc =  mysqli_real_escape_string($conn, $_POST['description']);


$sql = "SELECT * FROM user WHERE name='".$author."'";
$result = mysqli_query($conn, $sql);
if($result->num_rows ==0){
 $sql = "INSERT INTO user(name, password) VALUES('".$author."','".$password."')";
  //echo $sql;
  mysqli_query($conn, $sql);
  echo $user_id = mysqli_insert_id($conn);
}else{
  $row = mysqli_fetch_assoc($result);
  $user_id = $row['id'];
  }
//var_dump($row);
//echo $sql;

//exit;
$sql = "INSERT INTO topic(title, description, author, created) VALUES('".$title."','".$desc."','".$user_id."',now())";
echo $sql;
$result = mysqli_query($conn, $sql);
header('Location:./index.php');
?>
