<?php

echo "<b>Example #1 Sort Ascending Aphabetical Order</b><br>";
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
$clength = count($cars);
for($x = 0; $x < $slenght; $x++){
  echo $cars[$x];
  echo "<br>";
}

echo "<b>Example #2 Sort Ascending Numerical Order</b><br>";
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++){
  echo $numbers[$x];
  echo "<br>";
}
?>