<?php
  $pdo = new PDO('mysql:host=localhost;dbname=uczelnia', 'root', '');

  $sql = 'DELETE FROM studenci WHERE id = :id';
  $sth = $pdo -> prepare($sql);
  $sth -> execute(array('id' => $_GET['student_id']));
 ?>
