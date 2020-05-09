<?php
  $pdo = new PDO('mysql:host=localhost;dbname=uczelnia', 'root', '');

  $sql = "UPDATE studenci
  SET nazwisko='Malinowski'
  WHERE id=3";

  $pdo->exec($sql);

  unset($pdo);
 ?>
