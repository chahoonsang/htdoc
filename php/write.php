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
            echo '<li><a href="./index.php?id='.$row['id'].'">'.$row['title']."</a></li>"."\n";
          }
          ?>
        </ol>
    </nav>
    <div id="control">
      <input type="button" value="white" id="w_button" />
      <input type="button" value="black" id="b_button" />
      <a href="./write.php"></a>
    </div>
    <article class="">
      <form class="" action="./process.php" method="post">
      <p>
        제목: <input type="txt" name="title" value="">
      </p>
      <p>
        저자: <input type="txt" name="author" value="">
      </p>
      <p>
        본문: <textarea name="description" rows="8" cols="40"></textarea>
      </p>
      <input type="submit" name="name">
    </form>
    </article>

    <script src="./script.js" charset="utf-8"></script>
</body>
</html>
