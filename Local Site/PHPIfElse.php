<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		$t = date("H");
		echo "<p>The hour (of the server) is " . $t;
		echo ", and will give the following message:</p>";

		if ($t < "10") {
			echo "Have a good morning!";
		} else if ($t < "20") {
			echo "have a good day!";
		} else {
			echo "Have a good night";
		}
	?>
</body>
</html>