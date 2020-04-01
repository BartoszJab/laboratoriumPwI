<?php
if($_POST['number1']==null || $_POST['number2']==null){
  echo "wypelnij wszystkie kontrolki!";
}
else{
  $num1=$_POST['number1'];
  $num2 = $_POST['number2'];
  echo " Dodawanie: ".($num1+$num2);
  echo " Odejmowanie: ".($num1-$num2);
  echo " Mnożenie: ".($num1*$num2);
  if($num2!=0){
    echo " Dzielenie: ".($num1/$num2);
  } else{
    echo " Nie moge podzielic przez 0";
  }
}
 ?>
