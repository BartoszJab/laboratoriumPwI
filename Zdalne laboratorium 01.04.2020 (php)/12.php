<?php
if($_GET['number1']!=null && $_GET['number2']!=null){
  $num1=$_GET['number1'];
  $num2=$_GET['number2'];
  echo "$num1, $num2";
} else {
  echo "Nie podano pierwszej, drugiej lub obu liczb";
}
 ?>
