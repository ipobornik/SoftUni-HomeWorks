<!DOCTYPE html>
<html>
	<head>
		<title>PHP Flow Control</title>
	</head>
	<body>
		<form method="post">
			<label for="numbers">Input string:</label>
			<input type="text" name="numbers" id="numbers"/>
			<input type="submit"/>
		</form>
		<?php
		if (isset($_POST["numbers"]) && !empty($_POST["numbers"])) {
			// spliting with regEx
			$numbers = preg_split('/[, ]/', $_POST["numbers"], 0, PREG_SPLIT_NO_EMPTY);
			echo "<table border=\"1\">";
			foreach ($numbers as $number) {
				echo "<tr><td>$number</td><td>";
				if (ctype_digit($number)) {
					// summing with array_sum function
					echo array_sum(str_split($number));
				} else {
					echo "I cannot sum that";
				}
				echo "</td></tr>";
			}
			echo "</table>";
		}
	?>
</body>
</html>