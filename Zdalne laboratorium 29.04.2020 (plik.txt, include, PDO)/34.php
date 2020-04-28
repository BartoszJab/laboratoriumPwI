<?php

try {
  $dbh = new PDO('mysql:host=localhost;dbname=motoryzacja', 'root', '');
} catch (\Exception $e) {
  echo $e -> getMessage()."<br>";
  die();
}

$sql = 'SELECT model, marka, pojemnosc FROM samochody';
foreach ($dbh->query($sql) as $row) {
    print $row['model'] . "\t";
    print $row['marka'] . "\t";
    print $row['pojemnosc'] . "\n";
}

 ?>
