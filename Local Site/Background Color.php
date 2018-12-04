<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Background</title>
</head>
<?php
  $today = date("l");
  print("$today");

  if($today == "Sunday")
    {
  $bgcolor = "#FEF0C5";
    }
  elseif($today == "Monday")
    {
  $bgcolor = "#FFFFFF";
    }
  elseif($today == "Tuesday")
    {
  $bgcolor = "#FBFFC4";
    }
  elseif($today == "Wednesday")
    {
  $bgcolor = "#FFE0DD";
    }
  elseif($today == "Thursday")
    {
  $bgcolor = "#E6EDFF";
    }
  elseif($today == "Friday")
    {
  $bgcolor = "#E9FFE6";
    }
  else
    {
// Since it is not any of the days above it must be Saturday
  $bgcolor = "#F0F4F1";
    }
  print("<body bgcolor=\"$bgcolor\">\n");
?>

<body>
</body>
</html>