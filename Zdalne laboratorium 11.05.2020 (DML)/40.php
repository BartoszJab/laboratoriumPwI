<?php

  $dbh = new PDO('mysql:host=localhost;dbname=uczelnia', 'root', '');

  $sql = "INSERT INTO rok (id, nazwa, kierunek, stopien) VALUES
  (1, 'nazwa1', 'Informatyka', 1),
  (2, 'nazwa2', 'Matematyka', 1)";

  $sql2 = "INSERT INTO studenci (id, imie, nazwisko, email, id_rok_studiow) VALUES
  (1, 'Artur', 'Walczyk', 'email1@wp.pl', '1'),
  (2, 'Kacper', 'Mostowiak', 'email2@wp.pl', '1'),
  (3, 'Robert', 'Mazurek', 'email3@wp.pl', '2')";

  $dbh->exec($sql);
  $dbh->exec($sql2);

  unset($dbh);
 ?>
