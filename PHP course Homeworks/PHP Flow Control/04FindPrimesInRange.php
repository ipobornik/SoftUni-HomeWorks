<!DOCTYPE html>
<html>
	<head>
		<title>PHP Flow Control</title>
	</head>
	<body>
		<form action="" method="post">
			<label for="">Starting Index:</label>
			<input type="text" name="start" id="start"/>

			<label for="end">End</label>
			<input type="text" name="end" id="end"/>

			<input type="submit" value="Submit"/>
		</form>

		<?php
		function isPrime($num) {
			if ($num == 1) {
				return false;
			}

			if ($num == 2) {
				return true;
			}

			if ($num % 2 == 0) {
				return false;
			}

			for ($i = 3; $i <= ceil(sqrt($num)); $i = $i + 2) {
				if ($num % $i == 0) {
					return false;
				}
			}
			return true;
		}

		if (isset($_POST['start']) && isset($_POST['end'])) {
			$start = $_POST['start'];
			$end = $_POST['end'];

			for ($i = $start; $i < $end; $i++) {

				if (!isPrime($i)) {
					echo $i . ", ";
				} else {
					echo "<strong>{$i}</strong>, ";
				}
			}
		}
	?>
</body>
</html>
