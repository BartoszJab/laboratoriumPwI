<?php

for($i = 1; $i <= 15; $i++){
  echo "$i ";
}
echo nl2br("\n");
foreach(array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15) as $i){
  echo "$i ";
}
echo nl2br("\n");

$i = 1;
while($i <= 15):
  echo "$i ";
  $i++;
endwhile;
?>
