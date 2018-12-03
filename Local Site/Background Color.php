<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>background Color</title>
</head>

<?
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
<br>This just changes the color of the screen based on the day of the week

<body>
</body>
</html>
