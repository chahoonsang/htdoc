<?php
require("../lib/db.php");
require("../config/config.php");


$host=$config['host'];
$duser=$config['duser'];
$dpw=$config['dpw'];
$dname=$config['dname'];

$conn = db_init($host, $duser, $dpw, $dname);
$result = mysqli_query($conn, 'SELECT * FROM topic');
 ?>


<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style.css" media="screen" title="no title" charset="utf-8">
    <link href="../bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <header class="jumbotron text-center">
       <img src="https://s3-ap-northeast-1.amazonaws.com/opentutorialsfile/course/94.png" alt="생활코딩" class="img-circle" id="logo" class="img-circle">
        <h1><a href=".">JavaScript</a></h1>
    </header>

    <div class="row">
          <nav class="col-md-4">
              <ol class="nav nav-pills nav-stacked">
                <?php
                while($row = mysqli_fetch_assoc($result)){
                  echo '<li><a href="./index.php?id='.$row['id'].'">'.htmlspecialchars($row['title'])."</a></li>"."\n";
                }
                ?>
              </ol>
          </nav>
      <div  class="col-md-8">

        <article class="">
          <form class="" action="./process.php" method="post">

            <div class="form-group">
              <label for="form-title">제목</label>
              <input type="text" class="form-control" id="form-title" placeholder="제목을 적어주세요" name="title">
            </div>
            <div class="form-group">
              <label for="form-author">작성자</label>
              <input type="text" class="form-control" id="form-authore" placeholder="작성자를 적어주세요" name="author">
            </div>
            <div class="form-group">
              <label for="form-desc">본문</label>
              <textarea name="description" rows="10"  class="form-control" placeholder="본문을 적어주세요" ></textarea>
            </div>

          <input type="submit" name="name" class="btn btn-default">



        </form>
        </article>
              <hr />
              <div id="control">
                <div class="btn-group" role="group" aria-label="...">
                  <input type="button" value="white" id="w_button" class="btn btn-default btn-lg" />
                  <input type="button" value="black" id="b_button" class="btn btn-default btn-lg" />
              </div>
                <a href="./write.php" class="btn btn-info btn-lg">write</a>
              </div>

        </div>
      </div>
  </div>


    <script src="../script/script.js" charset="utf-8"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
</body>
</html>
