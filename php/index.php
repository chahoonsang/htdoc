<?php
$conn = mysqli_connect('localhost','root','lovesoeun111');
mysqli_select_db($conn, 'opentutorials');
$result = mysqli_query($conn, 'SELECT * FROM topic');
 ?>


<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
    <link rel="stylesheet" href="../css/style.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
    <header>
        <h1><a href=".">JavaScript</a></h1>
    </header>

    <nav>
        <ol>
          <?php
          while($row = mysqli_fetch_assoc($result)){
            echo '<li><a href="./index.php?id='.$row['id'].'">'.htmlspecialchars($row['title'])."</a></li>"."\n";
          }
          ?>
        </ol>
    </nav>
    <div id="control">
      <input type="button" value="white" id="w_button" />
      <input type="button" value="black" id="b_button" />
      <a href="./write.php">write</a>
    </div>
    <article class="">
      <?php
        if(empty($_GET['id']) === false ) {
            $sql = 'SELECT topic.id,title,name,description FROM topic LEFT JOIN user ON topic.author = user.id WHERE topic.id='.$_GET['id'];
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            echo '<h2>'.htmlspecialchars($row['title']).'</h2>';
            echo '<p>Author: '.htmlspecialchars($row['name']).'</p>';
            echo strip_tags($row['description'],'<a><ul><ol><li>');
        }
        ?>
    </article>

    <script src="./script.js" charset="utf-8"></script>
</body>
</html>
