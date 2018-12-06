<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Random Champion Select</title>
</head>
<body>
  League of Legends Random Champion Selection <br>
</body>
<?php
  $n=rand(1,10);
  print("Your randome numbder is: $n");
  echo "<br>";

  if($n=1) {
    echo "Your champion is Ahri.";
  } elseif ($n=2) {
    echo "Your champion is Lee Sin.";
  } elseif ($n=3) {
    echo "Your champion is Garren.";
  } elseif ($n=4) {
    echo "Your champion is Bard.";
  } elseif ($n=5) {
    echo "Your champion is Nitalie.";
  } elseif ($n=6) {
    echo "Your champion is Nautalis.";
  } elseif ($n=7) {
    echo "Your champion is Darius.";
  } elseif ($n=8) {
    echo "Your champion is Victor.";
  } elseif ($n=9) {
    echo "Your champion is Janna.";
  } elseif ($n=10) {
    echo "Your champion is Talia.";
  }

?>
</html>