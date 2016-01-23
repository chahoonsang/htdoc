<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>JavaScript</h1>
    <script type="text/javascript">
     function a(input){
       document.write("Hello javascript"+input);
       return input+1;
     }
     prompt(a(5));
    </script>
    <h1>PHP</h1>
    <?php
    function a($input){
      return $input+1;
    }
    echo a(3);
     ?>
  </body>
</html>
