<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>52.php</title>
  </head>
  <body>
    <form action="53.php" method="GET">
      <select id=student_id name=student_id>
        <?php
          $pdo = new PDO('mysql:host=localhost;dbname=uczelnia', 'root', '');

          $sql = 'SELECT * FROM studenci';
          foreach ($pdo -> query($sql) as $row) {
            echo "<option value=".$row['id'].">".
            $row['imie']." ".$row['nazwisko']."</option>";
          }
         ?>
      </select>
      <button type="submit" name="usun">Usuń</button>
  </form>

  </body>
</html>
