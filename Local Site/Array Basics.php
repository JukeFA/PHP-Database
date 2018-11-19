<?php
$cars = array("Volvo", "BMW", "Volkswagen");

echo "I like " .$cars[0]. ", " .$cars[1]. ", " .$cars[2]. ".";


$arrlength = count($cars);
for($x=0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}



$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " .$age['Peter']. "years old.";


foreach($age as $x => $x_value) {
  echo "Key=" .$x. ", Value=" .$x_value;
  echo "<br>";
}

?>