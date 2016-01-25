<?php
$title =  htmlspecialchars($_POST['title']);
$author = htmlspecialchars($_POST['author']);
$desc =  htmlspecialchars($_POST['description']);
$conn = mysqli_connect('localhost','root','lovesoeun111');
$password = "12345";
$user_id = "";
mysqli_select_db($conn, 'opentutorials');
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
//echo $sql;
$result = mysqli_query($conn, $sql);
header('Location:./index.php');
?>
