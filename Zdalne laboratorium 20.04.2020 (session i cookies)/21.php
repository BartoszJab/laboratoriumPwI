<?php
  session_start();
 ?>

<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>21</title>
  </head>
  <body>
    <ul>
      <li><a href="22.php">22</a></li>
    </ul>
    <?php
      echo $_SESSION['ala'];
     ?>
  </body>
</html>
