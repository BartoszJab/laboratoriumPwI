<?php
  $pdo = new PDO('mysql:host=localhost;dbname=uczelnia', 'root', '');

  $sql = "DELETE FROM studenci
  WHERE id=2";

  $pdo->exec($sql);

  unset($pdo);
 ?>
