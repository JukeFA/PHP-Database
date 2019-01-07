<!DOCTYPE html>
<html>
  <head>
    <title> Date </title>
</head>
<?php

  test();
  echo "<br>";

  function test() {
    echo ('Welcome, todays date is: ');
    echo date("l jS \of F Y");
    setcookie("user", "Jonathon", time()+3600);
    setcookie("user", "David", time()+3500);
  }


    print_r ($_COOKIE);
    echo "<br>";
    echo $_COOKIE["user"];

?>
<body>
</body>
</html>