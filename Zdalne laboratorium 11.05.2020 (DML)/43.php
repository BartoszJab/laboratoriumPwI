<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Tabela</title>
  </head>
  <body>
  <?php
    $pdo = new PDO('mysql:host=localhost;dbname=uczelnia', 'root', '');

    $sql="SELECT imie, nazwisko, kierunek, stopien
    FROM studenci, rok
    WHERE studenci.id_rok_studiow = rok.id";

    echo "<table border=1>
    <tr>
    <th>Imie</th>
    <th>Nazwisko</th>
    <th>Kierunek</th>
    <th>Stopien</th>
    </tr>";
    foreach ($pdo->query($sql) as $row) {
      echo "<tr>";
      echo "<td>" . $row['imie'] . "</td>";
      echo "<td>" . $row['nazwisko'] . "</td>";
      echo "<td>" . $row['kierunek'] . "</td>";
      echo "<td>" . $row['stopien'] . "</td>";
      echo "</tr>";
    }
    echo "</table>";
   ?>

  </body>
</html>
