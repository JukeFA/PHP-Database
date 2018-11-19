<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Random Number Example</title>
</head>
<?php
  srand(time());
  $random = (rand()%9);
  print("Random number between 0 and 9 is: $random");
?>

<body>
</body>
</html>