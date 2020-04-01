<?php
if(!empty($_GET['number1']) && !empty($_GET['number2'])){
  $num1=$_GET['number1'];
  $num2=$_GET['number2'];
  echo "$num1, $num2";
} else {
  echo "Nie podano pierwszej, drugiej lub obu liczb";
}
 ?>
